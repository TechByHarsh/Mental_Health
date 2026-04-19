@extends('layouts.app')

@section('content')
<style>
    .result-wrapper {
        max-width: 780px;
        margin: 0 auto;
        padding: 2.5rem 1.5rem 5rem;
        animation: fadeIn 0.6s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Score ring ── */
    .score-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 2.5rem;
        text-align: center;
    }

    .ring-wrap {
        position: relative;
        width: 160px;
        height: 160px;
        margin-bottom: 1.5rem;
    }

    .ring-svg { transform: rotate(-90deg); }

    .ring-bg {
        fill: none;
        stroke: rgba(255,255,255,0.08);
        stroke-width: 10;
    }

    .ring-fill {
        fill: none;
        stroke-width: 10;
        stroke-linecap: round;
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
        transition: stroke-dashoffset 1.2s cubic-bezier(0.4,0,0.2,1);
    }

    .ring-label {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .ring-score {
        font-size: 2.2rem;
        font-weight: 700;
        line-height: 1;
    }

    .ring-max {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
        margin-top: 0.15rem;
    }

    .severity-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.4rem;
        border-radius: 999px;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 0.04em;
        margin-bottom: 0.75rem;
    }

    .result-date {
        font-size: 0.8rem;
        color: rgba(255,255,255,0.35);
    }

    /* Severity colors */
    .sev-minimal    { background: rgba(34,197,94,0.15);  border: 1px solid rgba(34,197,94,0.35);  color: #86efac; }
    .sev-mild       { background: rgba(234,179,8,0.15);  border: 1px solid rgba(234,179,8,0.35);  color: #fde047; }
    .sev-moderate   { background: rgba(249,115,22,0.15); border: 1px solid rgba(249,115,22,0.35); color: #fdba74; }
    .sev-modSevere  { background: rgba(239,68,68,0.12);  border: 1px solid rgba(239,68,68,0.3);   color: #fca5a5; }
    .sev-severe     { background: rgba(220,38,38,0.15);  border: 1px solid rgba(220,38,38,0.4);   color: #f87171; }

    /* ── Suggestions card ── */
    .suggestions-card {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 1.5rem;
        padding: 2rem 2.25rem;
        margin-bottom: 2rem;
        animation: fadeIn 0.6s ease 0.2s both;
    }

    .suggestions-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }

    .suggestions-icon { font-size: 2rem; }

    .suggestions-headline {
        font-size: 1.1rem;
        font-weight: 600;
        color: #e2e8f0;
    }

    .suggestions-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .suggestions-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.7rem;
        font-size: 0.9rem;
        color: rgba(255,255,255,0.7);
        line-height: 1.55;
    }

    .tip-bullet {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: rgba(129,140,248,0.2);
        border: 1px solid rgba(129,140,248,0.4);
        color: #818cf8;
        font-size: 0.65rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    /* ── Response breakdown ── */
    .breakdown-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 1.25rem;
        padding: 1.75rem 2rem;
        margin-bottom: 2rem;
        animation: fadeIn 0.6s ease 0.3s both;
    }

    .breakdown-title {
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: rgba(255,255,255,0.4);
        margin-bottom: 1.25rem;
    }

    .breakdown-row {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 0.85rem;
    }

    .br-num {
        font-size: 0.7rem;
        color: rgba(255,255,255,0.3);
        width: 22px;
        flex-shrink: 0;
        text-align: right;
    }

    .br-text {
        font-size: 0.82rem;
        color: rgba(255,255,255,0.6);
        flex: 1;
        line-height: 1.4;
    }

    .br-answer {
        background: rgba(129,140,248,0.15);
        border: 1px solid rgba(129,140,248,0.25);
        color: #c7d2fe;
        font-size: 0.75rem;
        font-weight: 600;
        border-radius: 0.5rem;
        padding: 0.2rem 0.6rem;
        flex-shrink: 0;
        white-space: nowrap;
    }

    /* ── Action buttons ── */
    .action-row {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        justify-content: center;
        animation: fadeIn 0.6s ease 0.4s both;
    }

    .btn-primary {
        padding: 0.85rem 2rem;
        background: linear-gradient(135deg, #818cf8, #a78bfa);
        color: #fff;
        border: none;
        border-radius: 0.85rem;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-block;
        font-family: inherit;
    }

    .btn-primary:hover { filter: brightness(1.12); transform: translateY(-2px); }

    .btn-secondary {
        padding: 0.85rem 2rem;
        background: rgba(255,255,255,0.07);
        color: rgba(255,255,255,0.7);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 0.85rem;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-block;
    }

    .btn-secondary:hover {
        background: rgba(255,255,255,0.12);
        color: #fff;
        transform: translateY(-1px);
    }
</style>

@php
    // Determine ring color and badge class from severity
    $sevClass = match($assessment->severity_level) {
        'Minimal'           => ['sev-minimal',   '#22c55e', 0.14],
        'Mild'              => ['sev-mild',       '#eab308', 0.22],
        'Moderate'          => ['sev-moderate',   '#f97316', 0.41],
        'Moderately Severe' => ['sev-modSevere',  '#ef4444', 0.60],
        default             => ['sev-severe',     '#dc2626', 0.82],
    };

    $sevIcon = match($assessment->severity_level) {
        'Minimal'           => '🌿',
        'Mild'              => '🌤️',
        'Moderate'          => '🌥️',
        'Moderately Severe' => '⛅',
        default             => '🆘',
    };

    // Ring calculation: circumference = 2π × r = 2π × 70 ≈ 440
    $pct    = $assessment->total_score / 27;
    $offset = 440 - ($pct * 440);
@endphp

<div class="result-wrapper">

    <!-- Score ring -->
    <div class="score-section">
        <div class="ring-wrap">
            <svg class="ring-svg" width="160" height="160" viewBox="0 0 160 160">
                <circle class="ring-bg" cx="80" cy="80" r="70"/>
                <circle class="ring-fill" cx="80" cy="80" r="70"
                        id="ringCircle"
                        stroke="{{ $sevClass[1] }}"
                        style="stroke-dashoffset: {{ $offset }}"/>
            </svg>
            <div class="ring-label">
                <span class="ring-score" style="color: {{ $sevClass[1] }}">{{ $assessment->total_score }}</span>
                <span class="ring-max">out of 27</span>
            </div>
        </div>

        <div class="severity-badge {{ $sevClass[0] }}">
            {{ $sevIcon }} {{ $assessment->severity_level }} Depression
        </div>
        <div class="result-date">Completed {{ $assessment->created_at->format('F j, Y \a\t g:i A') }}</div>
    </div>

    <!-- Suggestions -->
    <div class="suggestions-card">
        <div class="suggestions-header">
            <span class="suggestions-icon">{{ $suggestions['icon'] }}</span>
            <div>
                <div class="breakdown-title" style="margin-bottom:0.25rem;">Personalized Suggestions</div>
                <div class="suggestions-headline">{{ $suggestions['headline'] }}</div>
            </div>
        </div>
        <ul class="suggestions-list">
            @foreach($suggestions['tips'] as $i => $tip)
            <li>
                <span class="tip-bullet">{{ $i + 1 }}</span>
                <span>{{ $tip }}</span>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Breakdown of responses -->
    <div class="breakdown-card">
        <div class="breakdown-title">Your Answers — Response Breakdown</div>
        @foreach($questions as $num => $text)
            @php
                $resp = $assessment->responses->firstWhere('question_number', $num);
                $score = $resp ? $resp->selected_score : 0;
                $label = $scoreLabels[$score];
            @endphp
            <div class="breakdown-row">
                <span class="br-num">Q{{ $num }}</span>
                <span class="br-text">{{ $text }}</span>
                <span class="br-answer">{{ $score }} — {{ $label }}</span>
            </div>
        @endforeach
    </div>

    <!-- Actions -->
    <div class="action-row">
        <a href="{{ route('assessment.index') }}" class="btn-primary" id="retake-btn">
            🔄 Retake Assessment
        </a>
        <a href="{{ route('assessment.history') }}" class="btn-secondary" id="history-btn">
            📊 View History
        </a>
        <a href="{{ route('dashboard') }}" class="btn-secondary" id="dashboard-btn">
            🏠 Dashboard
        </a>
    </div>
</div>

<script>
    // Animate ring on load
    window.addEventListener('load', () => {
        const circle = document.getElementById('ringCircle');
        if (circle) {
            // Already set via inline style; the CSS transition will animate it
            // Force a reflow to trigger the animation from 440
            circle.style.strokeDashoffset = '440';
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    circle.style.strokeDashoffset = '{{ $offset }}';
                });
            });
        }
    });
</script>
@endsection
