@extends('layouts.app')

@section('content')
<style>
    /* ── Keyframes ── */
    @keyframes fadeInUp   { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }
    @keyframes fadeInDown { from { opacity:0; transform:translateY(-16px); } to { opacity:1; transform:translateY(0); } }
    @keyframes floatA    { 0%,100% { transform:translateY(0) rotate(0deg);    } 50% { transform:translateY(-26px) rotate(7deg);  } }
    @keyframes floatB    { 0%,100% { transform:translateY(0) rotate(0deg);    } 50% { transform:translateY(20px)  rotate(-5deg); } }
    @keyframes floatC    { 0%,100% { transform:translateY(0) scale(1);        } 50% { transform:translateY(-16px) scale(1.05);   } }

    /* ── Page wrapper ── */
    .history-page {
        position: relative;
        max-width: 900px;
        margin: 0 auto;
        padding: 2.75rem 1.5rem 5rem;
        z-index: 10;
    }

    /* ── Blobs ── */
    .blob { position:fixed; border-radius:50%; filter:blur(90px); opacity:0.12; pointer-events:none; z-index:1; }
    .blob-1 { width:420px; height:420px; background:radial-gradient(circle,#818cf8,#6366f1); top:-100px; left:-80px;  animation:floatA 9s ease-in-out infinite; }
    .blob-2 { width:340px; height:340px; background:radial-gradient(circle,#a78bfa,#c084fc); bottom:-60px; right:-60px; animation:floatB 11s ease-in-out infinite; }
    .blob-3 { width:240px; height:240px; background:radial-gradient(circle,#22d3ee,#06b6d4); top:35%; right:4%;  animation:floatC 13s ease-in-out infinite; }

    /* ── Shapes ── */
    .shape-layer { position:fixed; inset:0; z-index:1; pointer-events:none; overflow:hidden; }
    .shape { position:absolute; border-radius:10px; opacity:0.055; border:1.5px solid rgba(255,255,255,0.5); }
    .shape-1 { width:55px; height:55px; top:10%;    left:6%;   transform:rotate(22deg);  animation:floatA 8s  ease-in-out infinite; }
    .shape-2 { width:38px; height:38px; top:22%;    right:6%;  transform:rotate(-12deg); animation:floatB 10s ease-in-out infinite; border-radius:50%; }
    .shape-3 { width:70px; height:70px; bottom:28%; left:4%;   transform:rotate(42deg);  animation:floatC 12s ease-in-out infinite; }
    .shape-4 { width:28px; height:28px; bottom:18%; right:9%;  transform:rotate(8deg);   animation:floatA 7s  ease-in-out infinite; border-radius:50%; }

    /* ── Page header ── */
    .history-header {
        text-align: center;
        margin-bottom: 2.5rem;
        animation: fadeInDown 0.55s ease both;
    }
    .history-header .page-pill {
        display: inline-block;
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(129,140,248,0.9);
        background: rgba(129,140,248,0.1);
        border: 1px solid rgba(129,140,248,0.25);
        border-radius: 999px;
        padding: 0.3rem 0.95rem;
        margin-bottom: 0.9rem;
    }
    .history-header h1 {
        font-size: clamp(1.7rem, 4vw, 2.4rem);
        font-weight: 300;
        letter-spacing: 0.02em;
        color: #f1f5f9;
        margin-bottom: 0.4rem;
    }
    .history-header h1 span {
        background: linear-gradient(135deg, #818cf8, #c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }
    .history-header .subtitle {
        font-size: 0.88rem;
        color: rgba(255,255,255,0.4);
    }

    /* ── Stats row ── */
    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.1rem;
        margin-bottom: 2rem;
        animation: fadeInUp 0.6s ease 0.05s both;
    }
    .stat-card {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 1.25rem;
        padding: 1.4rem 1.6rem;
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        transition: border-color 0.25s, transform 0.25s;
        position: relative;
        overflow: hidden;
    }
    .stat-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(129,140,248,0.06), transparent);
        opacity: 0;
        transition: opacity 0.25s;
        border-radius: inherit;
    }
    .stat-card:hover { border-color: rgba(129,140,248,0.3); transform: translateY(-3px); }
    .stat-card:hover::before { opacity: 1; }
    .stat-label {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.32);
    }
    .stat-value {
        font-size: 1.85rem;
        font-weight: 800;
        line-height: 1.1;
        background: linear-gradient(135deg, #818cf8, #c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: -0.02em;
    }
    .stat-sub {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.38);
    }

    /* ── Main card ── */
    .history-card {
        background: rgba(255,255,255,0.045);
        backdrop-filter: blur(26px);
        -webkit-backdrop-filter: blur(26px);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 1.5rem;
        overflow: hidden;
        margin-bottom: 2rem;
        animation: fadeInUp 0.6s ease 0.12s both;
    }
    .history-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1.4rem 1.8rem;
        border-bottom: 1px solid rgba(255,255,255,0.07);
        flex-wrap: wrap;
        gap: 0.75rem;
    }
    .history-card-title {
        font-size: 0.88rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.35);
    }
    .count-badge {
        background: rgba(129,140,248,0.12);
        border: 1px solid rgba(129,140,248,0.25);
        color: #a5b4fc;
        font-size: 0.72rem;
        font-weight: 700;
        border-radius: 999px;
        padding: 0.2rem 0.75rem;
    }

    /* ── Desktop table ── */
    .history-table { width:100%; border-collapse:collapse; }
    .history-table thead tr { border-bottom:1px solid rgba(255,255,255,0.06); }
    .history-table th {
        padding: 0.9rem 1.8rem;
        text-align: left;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.28);
        white-space: nowrap;
    }
    .history-table tbody tr {
        border-bottom: 1px solid rgba(255,255,255,0.04);
        transition: background 0.2s;
    }
    .history-table tbody tr:last-child { border-bottom:none; }
    .history-table tbody tr:hover { background:rgba(255,255,255,0.03); }
    .history-table td {
        padding: 1.1rem 1.8rem;
        font-size: 0.88rem;
        color: rgba(255,255,255,0.7);
        vertical-align: middle;
    }
    .row-num  { font-size:0.72rem; color:rgba(255,255,255,0.22); font-weight:600; }
    .date-main{ color:#e2e8f0; font-weight:500; font-size:0.88rem; }
    .date-rel { font-size:0.72rem; color:rgba(255,255,255,0.28); margin-top:1px; }
    .score-cell { font-size:1.05rem; font-weight:700; color:#a5b4fc; }
    .score-max  { font-size:0.7rem; color:rgba(255,255,255,0.28); font-weight:400; }

    /* ── Mini bar ── */
    .score-bar-wrap { width:80px; height:5px; background:rgba(255,255,255,0.07); border-radius:99px; overflow:hidden; margin-top:4px; }
    .score-bar-fill { height:100%; border-radius:99px; }

    /* ── Severity pills ── */
    .sev-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
        padding: 0.3rem 0.85rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.03em;
        white-space: nowrap;
    }
    .sev-minimal  { background:rgba(34,197,94,0.14);  border:1px solid rgba(34,197,94,0.35);  color:#86efac; }
    .sev-mild     { background:rgba(234,179,8,0.14);  border:1px solid rgba(234,179,8,0.35);  color:#fde047; }
    .sev-moderate { background:rgba(249,115,22,0.14); border:1px solid rgba(249,115,22,0.35); color:#fdba74; }
    .sev-severe   { background:rgba(239,68,68,0.14);  border:1px solid rgba(239,68,68,0.35);  color:#fca5a5; }

    /* ── Mobile stacked cards ── */
    .mobile-cards { display:none; }
    .m-card {
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        transition: background 0.2s;
    }
    .m-card:last-child { border-bottom:none; }
    .m-card:hover { background:rgba(255,255,255,0.025); }
    .m-card-left  { display:flex; flex-direction:column; gap:0.25rem; }
    .m-card-date  { font-size:0.82rem; font-weight:500; color:#e2e8f0; }
    .m-card-rel   { font-size:0.7rem; color:rgba(255,255,255,0.3); }
    .m-card-right { display:flex; flex-direction:column; align-items:flex-end; gap:0.35rem; }
    .m-score      { font-size:1.15rem; font-weight:800; color:#a5b4fc; }

    @media (max-width: 640px) {
        .desktop-table { display:none; }
        .mobile-cards  { display:block; }
        .stats-row { grid-template-columns: repeat(2,1fr); }
        .stat-value { font-size:1.5rem; }
    }

    /* ── Empty state ── */
    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 4rem 2rem;
        text-align: center;
        gap: 1rem;
    }
    .empty-icon  { font-size:3.5rem; line-height:1; }
    .empty-title { font-size:1.2rem; font-weight:600; color:#e2e8f0; }
    .empty-sub   { font-size:0.88rem; color:rgba(255,255,255,0.38); max-width:280px; line-height:1.6; }

    /* ── Divider ── */
    .divider { border:none; border-top:1px solid rgba(255,255,255,0.07); margin:1.5rem 0 1.75rem; }

    /* ── Action buttons ── */
    .action-row {
        display: flex;
        gap: 0.85rem;
        flex-wrap: wrap;
        justify-content: center;
        animation: fadeInUp 0.6s ease 0.22s both;
    }
    .btn-primary {
        padding: 0.875rem 2rem;
        background: linear-gradient(135deg, #818cf8, #a78bfa);
        color: #fff;
        border: none;
        border-radius: 0.9rem;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: filter 0.2s, transform 0.2s, box-shadow 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-family: inherit;
    }
    .btn-primary:hover { filter:brightness(1.14); transform:translateY(-2px); box-shadow:0 12px 30px rgba(129,140,248,0.35); color:#fff; }
    .btn-secondary {
        padding: 0.875rem 1.75rem;
        background: rgba(255,255,255,0.06);
        color: rgba(255,255,255,0.72);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 0.9rem;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
    }
    .btn-secondary:hover { background:rgba(255,255,255,0.11); border-color:rgba(255,255,255,0.22); color:#fff; transform:translateY(-1px); }

    @media (max-width: 480px) {
        .btn-primary, .btn-secondary { width:100%; justify-content:center; }
        .history-page { padding:2rem 1rem 4rem; }
    }
</style>

{{-- Background blobs + shapes --}}
<div class="blob blob-1" aria-hidden="true"></div>
<div class="blob blob-2" aria-hidden="true"></div>
<div class="blob blob-3" aria-hidden="true"></div>
<div class="shape-layer" aria-hidden="true">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
</div>

@php
    $total       = $results->count();
    $latest      = $results->first();
    $latestScore = $latest ? $latest->score    : '—';
    $latestSev   = $latest ? $latest->severity : '—';

    // Returns [cssClass, barColour, emoji dot]
    $sevMeta = function(string $s) {
        return match($s) {
            'Minimal'  => ['sev-minimal',  '#22c55e', '🟢'],
            'Mild'     => ['sev-mild',     '#eab308', '🟡'],
            'Moderate' => ['sev-moderate', '#f97316', '🟠'],
            default    => ['sev-severe',   '#ef4444', '🔴'],
        };
    };
@endphp

<main class="history-page" id="history-main">

    {{-- ── Page header ── --}}
    <header class="history-header">
        <span class="page-pill">PHQ-9 Assessment</span>
        <h1>Assessment <span>History</span></h1>
        <p class="subtitle">Track your emotional wellness progress over time</p>
    </header>

    {{-- ── Summary stats ── --}}
    <div class="stats-row" role="region" aria-label="Summary statistics">
        <div class="stat-card">
            <span class="stat-label">Total Assessments</span>
            <span class="stat-value">{{ $total }}</span>
            <span class="stat-sub">attempts recorded</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Latest Score</span>
            <span class="stat-value">
                {{ $latestScore }}<span style="font-size:1rem;opacity:.5;">/27</span>
            </span>
            <span class="stat-sub">most recent result</span>
        </div>
        <div class="stat-card">
            <span class="stat-label">Latest Severity</span>
            <span class="stat-value" style="font-size:1.3rem;">{{ $latestSev }}</span>
            <span class="stat-sub">current level</span>
        </div>
    </div>

    {{-- ── History card ── --}}
    <div class="history-card" id="history-card">
        <div class="history-card-header">
            <span class="history-card-title">All Assessments</span>
            @if($total > 0)
                <span class="count-badge">{{ $total }} {{ $total === 1 ? 'record' : 'records' }}</span>
            @endif
        </div>

        @if($total === 0)
            {{-- Empty state --}}
            <div class="empty-state" id="empty-state">
                <span class="empty-icon" aria-hidden="true">🧘</span>
                <p class="empty-title">No assessments taken yet.</p>
                <p class="empty-sub">Your PHQ-9 history will appear here once you complete your first assessment.</p>
                <a href="{{ url('/assessment/phq9') }}"
                   class="btn-primary"
                   style="margin-top:.5rem;"
                   id="first-assessment-btn">
                    ✨ Take First Assessment
                </a>
            </div>
        @else
            {{-- ── Desktop table ── --}}
            <div class="desktop-table">
                <table class="history-table" role="table" aria-label="PHQ-9 assessment history">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Score</th>
                            <th scope="col">Severity</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $index => $result)
                        @php
                            [$sevClass, $barColor, $dot] = $sevMeta($result->severity);
                            $barPct = round(($result->score / 27) * 100);
                        @endphp
                        <tr>
                            <td><span class="row-num">{{ $index + 1 }}</span></td>
                            <td>
                                <div class="date-main">
                                    {{ \Carbon\Carbon::parse($result->created_at)->format('M j, Y') }}
                                </div>
                                <div class="date-rel">
                                    {{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}
                                </div>
                            </td>
                            <td>
                                <span class="score-cell">
                                    {{ $result->score }}<span class="score-max"> / 27</span>
                                </span>
                                <div class="score-bar-wrap">
                                    <div class="score-bar-fill"
                                         style="width:{{ $barPct }}%; background:{{ $barColor }};"></div>
                                </div>
                            </td>
                            <td>
                                <span class="sev-pill {{ $sevClass }}">
                                    {{ $dot }} {{ $result->severity }}
                                </span>
                            </td>
                            <td>
                                @if($result->severity === 'Minimal')
                                    <span style="font-size:0.78rem;color:rgba(34,197,94,0.85);">✔ Stable</span>
                                @elseif($result->severity === 'Mild')
                                    <span style="font-size:0.78rem;color:rgba(234,179,8,0.85);">⚠ Monitor</span>
                                @elseif($result->severity === 'Moderate')
                                    <span style="font-size:0.78rem;color:rgba(249,115,22,0.85);">⚠ Attention</span>
                                @else
                                    <span style="font-size:0.78rem;color:rgba(239,68,68,0.85);">🚨 Seek Help</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- ── Mobile stacked cards ── --}}
            <div class="mobile-cards" aria-label="Assessment history">
                @foreach($results as $result)
                @php
                    [$sevClass, $barColor, $dot] = $sevMeta($result->severity);
                @endphp
                <div class="m-card">
                    <div class="m-card-left">
                        <span class="m-card-date">
                            {{ \Carbon\Carbon::parse($result->created_at)->format('M j, Y · g:i A') }}
                        </span>
                        <span class="m-card-rel">
                            {{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}
                        </span>
                    </div>
                    <div class="m-card-right">
                        <span class="m-score">
                            {{ $result->score }}<span style="font-size:.7rem;opacity:.4;"> /27</span>
                        </span>
                        <span class="sev-pill {{ $sevClass }}">{{ $dot }} {{ $result->severity }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- ── Action buttons ── --}}
    <hr class="divider" aria-hidden="true">
    <nav class="action-row" aria-label="History page actions">
        <a href="{{ url('/assessment/phq9') }}"
           class="btn-primary"
           id="retake-btn"
           aria-label="Retake the PHQ-9 assessment">
            🔄 Retake PHQ-9
        </a>
        <a href="{{ url('/') }}"
           class="btn-secondary"
           id="home-btn"
           aria-label="Back to home">
            🏠 Back to Home
        </a>
    </nav>

</main>
@endsection
