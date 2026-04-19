@extends('layouts.app')

@section('content')
<style>
    .history-wrapper {
        max-width: 860px;
        margin: 0 auto;
        padding: 2.5rem 1.5rem 5rem;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Header ── */
    .history-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .history-title {
        font-size: 1.75rem;
        font-weight: 300;
        letter-spacing: 0.03em;
    }

    .history-title strong {
        background: linear-gradient(135deg,#818cf8,#c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }

    .btn-take {
        padding: 0.7rem 1.6rem;
        background: linear-gradient(135deg,#818cf8,#a78bfa);
        color: #fff;
        border: none;
        border-radius: 0.85rem;
        font-weight: 600;
        font-size: 0.875rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-block;
    }

    .btn-take:hover { filter: brightness(1.12); transform: translateY(-1px); }

    /* ── Summary stats ── */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .stat-card {
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 1.1rem;
        padding: 1.25rem 1.5rem;
        text-align: center;
    }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        background: linear-gradient(135deg,#818cf8,#c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.78rem;
        color: rgba(255,255,255,0.4);
        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    /* ── Mini chart ── */
    .chart-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 1.25rem;
        padding: 1.5rem 1.75rem;
        margin-bottom: 2rem;
    }

    .chart-title {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255,255,255,0.4);
        margin-bottom: 1rem;
    }

    #scoreChart { display: block; width: 100%; height: 120px; }

    /* ── Assessment cards ── */
    .assessment-item {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 1.2rem;
        padding: 1.25rem 1.5rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 1.25rem;
        flex-wrap: wrap;
        transition: all 0.25s;
        text-decoration: none;
        color: inherit;
    }

    .assessment-item:hover {
        border-color: rgba(129,140,248,0.3);
        background: rgba(129,140,248,0.05);
        transform: translateX(3px);
    }

    .ai-score-ring {
        width: 52px;
        height: 52px;
        flex-shrink: 0;
    }

    .ai-info { flex: 1; min-width: 160px; }

    .ai-date {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
        margin-bottom: 0.25rem;
    }

    .ai-score-text {
        font-size: 1.05rem;
        font-weight: 600;
        color: #e2e8f0;
        margin-bottom: 0.2rem;
    }

    .sev-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        border-radius: 999px;
        padding: 0.2rem 0.75rem;
        font-size: 0.75rem;
        font-weight: 600;
        border: 1px solid;
    }

    .sev-minimal    { color: #86efac; border-color: rgba(34,197,94,0.35);  background: rgba(34,197,94,0.1); }
    .sev-mild       { color: #fde047; border-color: rgba(234,179,8,0.35);  background: rgba(234,179,8,0.1); }
    .sev-moderate   { color: #fdba74; border-color: rgba(249,115,22,0.35); background: rgba(249,115,22,0.1); }
    .sev-modSevere  { color: #fca5a5; border-color: rgba(239,68,68,0.3);   background: rgba(239,68,68,0.08); }
    .sev-severe     { color: #f87171; border-color: rgba(220,38,38,0.4);   background: rgba(220,38,38,0.1); }

    /* ── Trend badge ── */
    .trend-badge {
        font-size: 0.78rem;
        font-weight: 600;
        border-radius: 0.55rem;
        padding: 0.3rem 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.35rem;
        flex-shrink: 0;
    }

    .trend-improving { background: rgba(34,197,94,0.12);  color: #86efac; }
    .trend-worsening { background: rgba(239,68,68,0.12);  color: #fca5a5; }
    .trend-neutral   { background: rgba(255,255,255,0.06); color: rgba(255,255,255,0.4); }

    .ai-view-btn {
        font-size: 0.8rem;
        font-weight: 600;
        color: #818cf8;
        text-decoration: none;
        flex-shrink: 0;
        padding: 0.4rem 0.9rem;
        border: 1px solid rgba(129,140,248,0.3);
        border-radius: 0.6rem;
        transition: all 0.2s;
    }

    .ai-view-btn:hover {
        background: rgba(129,140,248,0.12);
        border-color: rgba(129,140,248,0.5);
    }

    /* ── Empty ── */
    .empty-state {
        text-align: center;
        padding: 4rem 1rem;
        color: rgba(255,255,255,0.35);
    }

    .empty-icon { font-size: 3rem; margin-bottom: 1rem; display: block; }
    .empty-title { font-size: 1.1rem; font-weight: 500; margin-bottom: 0.5rem; }
    .empty-desc { font-size: 0.85rem; margin-bottom: 1.5rem; }
</style>

<div class="history-wrapper">
    <div class="history-header">
        <h1 class="history-title">Assessment <strong>History</strong></h1>
        <a href="{{ route('assessment.index') }}" class="btn-take" id="new-assessment-link">+ New Assessment</a>
    </div>

    @if($assessments->isEmpty())
        <div class="empty-state">
            <span class="empty-icon">📋</span>
            <div class="empty-title">No assessments yet</div>
            <div class="empty-desc">Take your first PHQ-9 to start tracking your mental wellness.</div>
            <a href="{{ route('assessment.index') }}" class="btn-take" id="first-assessment-link">Take Assessment Now</a>
        </div>
    @else
        @php
            $avg  = round($assessments->avg('total_score'), 1);
            $min  = $assessments->min('total_score');
            $max  = $assessments->max('total_score');
            $cnt  = $assessments->count();

            // Trend overall
            $sorted   = $assessments->sortBy('created_at')->values();
            $overallTrend = '';
            if ($cnt >= 2) {
                $first = $sorted->first()->total_score;
                $lastS = $sorted->last()->total_score;
                if ($lastS < $first) $overallTrend = '📈 Improving overall';
                elseif ($lastS > $first) $overallTrend = '📉 Getting worse overall';
                else $overallTrend = '➡️ Stable overall';
            }
        @endphp

        <!-- Summary stats -->
        <div class="stats-row">
            <div class="stat-card">
                <span class="stat-value">{{ $cnt }}</span>
                <span class="stat-label">Total Assessments</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">{{ $avg }}</span>
                <span class="stat-label">Average Score</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">{{ $min }}</span>
                <span class="stat-label">Lowest Score</span>
            </div>
            <div class="stat-card">
                <span class="stat-value">{{ $max }}</span>
                <span class="stat-label">Highest Score</span>
            </div>
        </div>

        @if($cnt >= 2)
        <!-- Mini chart -->
        <div class="chart-card">
            <div class="chart-title">Score Trend — {{ $overallTrend }}</div>
            <canvas id="scoreChart"></canvas>
        </div>
        @endif

        <!-- Assessment list -->
        <div>
            @foreach($assessments as $a)
            @php
                $svClass = match($a->severity_level) {
                    'Minimal'           => 'sev-minimal',
                    'Mild'              => 'sev-mild',
                    'Moderate'          => 'sev-moderate',
                    'Moderately Severe' => 'sev-modSevere',
                    default             => 'sev-severe',
                };
                $svColor = match($a->severity_level) {
                    'Minimal'           => '#22c55e',
                    'Mild'              => '#eab308',
                    'Moderate'          => '#f97316',
                    'Moderately Severe' => '#ef4444',
                    default             => '#dc2626',
                };
                $svIcon = match($a->severity_level) {
                    'Minimal'           => '🌿',
                    'Mild'              => '🌤',
                    'Moderate'          => '🌥',
                    'Moderately Severe' => '⛅',
                    default             => '🆘',
                };
                $trend      = $trends[$a->id] ?? 'neutral';
                $trendLabel = match($trend) {
                    'improving' => ['↑ Improving', 'trend-improving'],
                    'worsening' => ['↓ Worsening', 'trend-worsening'],
                    default     => ['— First entry', 'trend-neutral'],
                };
                // Ring offset: circ = 2π×20 ≈ 125.7
                $pct    = $a->total_score / 27;
                $offset = 125.7 * (1 - $pct);
            @endphp
            <a href="{{ route('assessment.result', $a->id) }}" class="assessment-item" id="assessment-{{ $a->id }}">
                <!-- Mini ring -->
                <svg class="ai-score-ring" viewBox="0 0 44 44">
                    <circle cx="22" cy="22" r="20" fill="none" stroke="rgba(255,255,255,0.07)" stroke-width="4"/>
                    <circle cx="22" cy="22" r="20" fill="none"
                            stroke="{{ $svColor }}" stroke-width="4"
                            stroke-linecap="round"
                            stroke-dasharray="125.7"
                            stroke-dashoffset="{{ $offset }}"
                            transform="rotate(-90 22 22)"/>
                    <text x="22" y="26" text-anchor="middle" font-size="10" fill="{{ $svColor }}" font-weight="700" font-family="Inter,sans-serif">{{ $a->total_score }}</text>
                </svg>

                <!-- Info -->
                <div class="ai-info">
                    <div class="ai-date">{{ $a->created_at->format('F j, Y — g:i A') }}</div>
                    <div class="ai-score-text">Score: {{ $a->total_score }} / 27</div>
                    <span class="sev-pill {{ $svClass }}">{{ $svIcon }} {{ $a->severity_level }}</span>
                </div>

                <!-- Trend -->
                <span class="trend-badge {{ $trendLabel[1] }}">{{ $trendLabel[0] }}</span>

                <!-- View link -->
                <span class="ai-view-btn">View →</span>
            </a>
            @endforeach
        </div>
    @endif
</div>

@if(count($chartLabels ?? []) > 1)
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
const labels = @json($chartLabels);
const scores = @json($chartScores);

const ctx = document.getElementById('scoreChart').getContext('2d');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            label: 'PHQ-9 Score',
            data: scores,
            fill: true,
            borderColor: '#818cf8',
            backgroundColor: 'rgba(129,140,248,0.08)',
            pointBackgroundColor: '#818cf8',
            pointBorderColor: '#050510',
            pointBorderWidth: 2,
            pointRadius: 5,
            tension: 0.4,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: {
                callbacks: {
                    label: ctx => `Score: ${ctx.parsed.y}`
                }
            }
        },
        scales: {
            y: {
                min: 0,
                max: 27,
                grid: { color: 'rgba(255,255,255,0.05)' },
                ticks: { color: 'rgba(255,255,255,0.35)', font: { size: 11 } }
            },
            x: {
                grid: { color: 'rgba(255,255,255,0.04)' },
                ticks: { color: 'rgba(255,255,255,0.35)', font: { size: 11 } }
            }
        }
    }
});
</script>
@endif

@endsection
