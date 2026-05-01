@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════
     Page-scoped styles
════════════════════════════════════════════════ --}}
<style>
    /* ── Keyframes ── */
    @keyframes fadeInUp   { from { opacity:0; transform:translateY(24px); } to { opacity:1; transform:translateY(0); } }
    @keyframes fadeInDown { from { opacity:0; transform:translateY(-16px); } to { opacity:1; transform:translateY(0); } }
    @keyframes floatA    { 0%,100% { transform:translateY(0)   rotate(0deg);   } 50% { transform:translateY(-28px) rotate(8deg);  } }
    @keyframes floatB    { 0%,100% { transform:translateY(0)   rotate(0deg);   } 50% { transform:translateY(22px)  rotate(-6deg); } }
    @keyframes floatC    { 0%,100% { transform:translateY(0)   scale(1);       } 50% { transform:translateY(-18px) scale(1.06);   } }
    @keyframes pulse-glow { 0%,100% { box-shadow: 0 0 0 0 rgba(129,140,248,0); } 50% { box-shadow: 0 0 32px 8px rgba(129,140,248,0.18); } }
    @keyframes ringDraw   { from { stroke-dashoffset: 440; } }

    /* ── Wrapper ── */
    .result-page {
        position: relative;
        max-width: 820px;
        margin: 0 auto;
        padding: 2.75rem 1.5rem 5rem;
        overflow: hidden;
    }

    /* ── Floating background blobs ── */
    .blob {
        position: fixed;
        border-radius: 50%;
        filter: blur(90px);
        opacity: 0.13;
        pointer-events: none;
        z-index: 1;
    }
    .blob-1 { width:440px; height:440px; background: radial-gradient(circle, #818cf8, #6366f1); top:-120px;  left:-100px;  animation: floatA 9s ease-in-out infinite; }
    .blob-2 { width:360px; height:360px; background: radial-gradient(circle, #a78bfa, #c084fc); bottom:-80px; right:-80px;  animation: floatB 11s ease-in-out infinite; }
    .blob-3 { width:260px; height:260px; background: radial-gradient(circle, #22d3ee, #06b6d4); top:40%;     right:5%;     animation: floatC 13s ease-in-out infinite; }

    /* ── Floating geometric shapes ── */
    .shape-layer { position:fixed; inset:0; z-index:1; pointer-events:none; overflow:hidden; }
    .shape {
        position: absolute;
        border-radius: 12px;
        opacity: 0.06;
        border: 1.5px solid rgba(255,255,255,0.5);
    }
    .shape-1 { width:60px; height:60px;  top:12%;  left:8%;   transform:rotate(25deg);  animation: floatA 8s ease-in-out infinite; }
    .shape-2 { width:40px; height:40px;  top:25%;  right:7%;  transform:rotate(-15deg); animation: floatB 10s ease-in-out infinite; border-radius:50%; }
    .shape-3 { width:80px; height:80px;  bottom:30%; left:5%;  transform:rotate(45deg);  animation: floatC 12s ease-in-out infinite; }
    .shape-4 { width:30px; height:30px;  bottom:20%; right:10%;transform:rotate(10deg);  animation: floatA 7s ease-in-out infinite; border-radius:50%; }

    /* ── Page title ── */
    .result-header {
        text-align: center;
        margin-bottom: 2.5rem;
        animation: fadeInDown 0.6s ease both;
        position: relative;
        z-index: 10;
    }
    .result-header .page-label {
        display: inline-block;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(129,140,248,0.85);
        background: rgba(129,140,248,0.1);
        border: 1px solid rgba(129,140,248,0.25);
        border-radius: 999px;
        padding: 0.3rem 0.9rem;
        margin-bottom: 0.85rem;
    }
    .result-header h1 {
        font-size: clamp(1.75rem, 4vw, 2.4rem);
        font-weight: 300;
        letter-spacing: 0.02em;
        color: #f1f5f9;
        margin-bottom: 0.4rem;
    }
    .result-header h1 span {
        background: linear-gradient(135deg, #818cf8, #c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }
    .result-header .subtitle {
        font-size: 0.9rem;
        color: rgba(255,255,255,0.42);
    }

    /* ── Main score card ── */
    .score-card {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(28px);
        -webkit-backdrop-filter: blur(28px);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 1.75rem;
        padding: 2.5rem 2rem;
        margin-bottom: 1.75rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
        animation: fadeInUp 0.65s ease 0.05s both;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }
    .score-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(129,140,248,0.06), rgba(192,132,252,0.04), transparent);
        border-radius: inherit;
        pointer-events: none;
    }

    /* ── Progress ring ── */
    .ring-wrap {
        position: relative;
        width: 172px;
        height: 172px;
        flex-shrink: 0;
    }
    .ring-svg { transform: rotate(-90deg); display:block; }
    .ring-bg   { fill:none; stroke:rgba(255,255,255,0.07); stroke-width:11; }
    .ring-track {
        fill: none;
        stroke-width: 11;
        stroke-linecap: round;
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
        transition: stroke-dashoffset 1.4s cubic-bezier(0.34,1.04,0.64,1);
        animation: ringDraw 0.01s linear;
    }
    .ring-inner {
        position: absolute;
        inset: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2px;
    }
    .ring-score-num {
        font-size: 2.6rem;
        font-weight: 800;
        line-height: 1;
        letter-spacing: -0.02em;
    }
    .ring-score-denom {
        font-size: 0.72rem;
        color: rgba(255,255,255,0.35);
        letter-spacing: 0.04em;
    }

    /* ── Score info block (beside ring on desktop) ── */
    .score-info {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.75rem;
        flex: 1;
    }
    @media (min-width: 640px) {
        .score-card { flex-direction: row; padding: 2.5rem 2.5rem; gap: 2.5rem; }
        .score-info  { text-align: left; align-items: flex-start; }
    }

    /* ── Severity badge ── */
    .sev-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        padding: 0.45rem 1.2rem;
        border-radius: 999px;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 0.04em;
        animation: pulse-glow 3.5s ease-in-out infinite;
    }
    .sev-minimal  { background:rgba(34,197,94,0.14);  border:1px solid rgba(34,197,94,0.38);  color:#86efac; }
    .sev-mild     { background:rgba(234,179,8,0.14);  border:1px solid rgba(234,179,8,0.38);  color:#fde047; }
    .sev-moderate { background:rgba(249,115,22,0.14); border:1px solid rgba(249,115,22,0.38); color:#fdba74; }
    .sev-severe   { background:rgba(239,68,68,0.14);  border:1px solid rgba(239,68,68,0.38);  color:#fca5a5; }

    .sev-label {
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.32);
    }
    .sev-message {
        font-size: 1.05rem;
        color: rgba(255,255,255,0.75);
        line-height: 1.6;
        max-width: 380px;
    }
    .sev-message strong { color: #e2e8f0; font-weight: 600; }

    /* ── PHQ-9 scale reference ── */
    .scale-strip {
        display: flex;
        gap: 0.35rem;
        flex-wrap: wrap;
        justify-content: center;
    }
    .scale-pip {
        padding: 0.25rem 0.65rem;
        border-radius: 0.45rem;
        font-size: 0.7rem;
        font-weight: 600;
        opacity: 0.55;
        transition: opacity 0.2s;
    }
    .scale-pip.active { opacity: 1; box-shadow: 0 0 12px rgba(255,255,255,0.1); }
    .pip-minimal  { background:rgba(34,197,94,0.18);  color:#86efac; border:1px solid rgba(34,197,94,0.3); }
    .pip-mild     { background:rgba(234,179,8,0.18);  color:#fde047; border:1px solid rgba(234,179,8,0.3); }
    .pip-moderate { background:rgba(249,115,22,0.18); color:#fdba74; border:1px solid rgba(249,115,22,0.3); }
    .pip-severe   { background:rgba(239,68,68,0.18);  color:#fca5a5; border:1px solid rgba(239,68,68,0.3); }

    /* ── Suggestions card ── */
    .suggestions-card {
        background: rgba(255,255,255,0.045);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 1.5rem;
        padding: 2rem 2.25rem;
        margin-bottom: 1.75rem;
        animation: fadeInUp 0.65s ease 0.18s both;
        position: relative;
        z-index: 10;
    }
    .sugg-header {
        display: flex;
        align-items: center;
        gap: 0.85rem;
        margin-bottom: 1.5rem;
    }
    .sugg-icon-wrap {
        width: 46px;
        height: 46px;
        border-radius: 0.85rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        background: rgba(129,140,248,0.12);
        border: 1px solid rgba(129,140,248,0.22);
        flex-shrink: 0;
    }
    .sugg-header-text .sugg-cap {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.32);
    }
    .sugg-header-text .sugg-headline {
        font-size: 1.05rem;
        font-weight: 600;
        color: #e2e8f0;
    }
    .sugg-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 0.9rem;
    }
    .sugg-list li {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
        font-size: 0.9rem;
        color: rgba(255,255,255,0.68);
        line-height: 1.6;
    }
    .sugg-num {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: rgba(129,140,248,0.15);
        border: 1px solid rgba(129,140,248,0.35);
        color: #a5b4fc;
        font-size: 0.65rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    /* ── Divider ── */
    .divider {
        border: none;
        border-top: 1px solid rgba(255,255,255,0.07);
        margin: 1.5rem 0 1.75rem;
    }

    /* ── Action buttons ── */
    .action-row {
        display: flex;
        gap: 0.85rem;
        flex-wrap: wrap;
        justify-content: center;
        animation: fadeInUp 0.65s ease 0.3s both;
        position: relative;
        z-index: 10;
    }
    .btn-primary {
        padding: 0.875rem 2rem;
        background: linear-gradient(135deg, #818cf8 0%, #a78bfa 100%);
        color: #fff;
        border: none;
        border-radius: 0.9rem;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        transition: filter 0.2s, transform 0.2s, box-shadow 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-family: inherit;
    }
    .btn-primary:hover {
        filter: brightness(1.14);
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(129,140,248,0.35);
        color: #fff;
    }
    .btn-secondary {
        padding: 0.875rem 1.75rem;
        background: rgba(255,255,255,0.06);
        color: rgba(255,255,255,0.72);
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 0.9rem;
        font-weight: 600;
        font-size: 0.9rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
    }
    .btn-secondary:hover {
        background: rgba(255,255,255,0.11);
        border-color: rgba(255,255,255,0.22);
        color: #fff;
        transform: translateY(-1px);
    }

    /* ── Responsive tweaks ── */
    @media (max-width: 480px) {
        .action-row .btn-primary,
        .action-row .btn-secondary { width: 100%; justify-content: center; }
        .suggestions-card { padding: 1.5rem 1.25rem; }
        .score-card { padding: 1.75rem 1.25rem; }
    }
</style>

{{-- ════════════════════════════════════════
     Background decorations
════════════════════════════════════════ --}}
<div class="blob blob-1" aria-hidden="true"></div>
<div class="blob blob-2" aria-hidden="true"></div>
<div class="blob blob-3" aria-hidden="true"></div>
<div class="shape-layer" aria-hidden="true">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
    <div class="shape shape-4"></div>
</div>

{{-- ════════════════════════════════════════
     PHP: derive display variables
════════════════════════════════════════ --}}
@php
    // Normalise severity to lowercase for CSS class mapping
    $sevLower = strtolower($severity);  // minimal | mild | moderate | severe

    // Ring color per severity
    $ringColor = match($severity) {
        'Minimal'  => '#22c55e',
        'Mild'     => '#eab308',
        'Moderate' => '#f97316',
        default    => '#ef4444',   // Severe
    };

    // Ring offset: circumference = 2π × 70 ≈ 439.8 ≈ 440
    $pct    = $score / 27;
    $offset = round(440 - ($pct * 440), 2);

    // Icon per severity
    $sevIcon = match($severity) {
        'Minimal'  => '🌿',
        'Mild'     => '🌤️',
        'Moderate' => '🌥️',
        default    => '🆘',
    };

    // Dynamic message
    $sevMessage = match($severity) {
        'Minimal'  => '<strong>You appear emotionally stable</strong> currently. Keep nurturing your positive habits.',
        'Mild'     => '<strong>Mild symptoms detected.</strong> Small, consistent self-care steps can make a big difference.',
        'Moderate' => '<strong>Moderate symptoms present.</strong> It\'s a good time to monitor your wellbeing closely.',
        default    => '<strong>Significant symptoms detected.</strong> We strongly encourage reaching out to a professional.',
    };

    // Suggestions per severity
    $suggestions = match($severity) {
        'Minimal' => [
            'icon'     => '🌱',
            'headline' => 'Keep up the great work!',
            'tips'     => [
                'Maintain a consistent sleep schedule to protect your mental balance.',
                'Continue nurturing meaningful social connections and activities you love.',
                'Practice brief mindfulness or gratitude journaling each morning.',
            ],
        ],
        'Mild' => [
            'icon'     => '🌤️',
            'headline' => 'Small steps towards feeling better',
            'tips'     => [
                'Improve your sleep routine — aim for 7–8 hours of quality rest.',
                'Take a short daily walk outdoors to boost mood and energy naturally.',
                'Talk with a trusted friend or family member about what you\'re feeling.',
            ],
        ],
        'Moderate' => [
            'icon'     => '🌿',
            'headline' => 'Time to prioritise your wellbeing',
            'tips'     => [
                'Schedule a check-in with your GP or a mental health practitioner soon.',
                'Reduce stressors where possible and set gentle daily boundaries.',
                'Explore relaxation techniques such as deep breathing or guided meditation.',
            ],
        ],
        default => [   // Severe
            'icon'     => '🤝',
            'headline' => 'You don\'t have to face this alone',
            'tips'     => [
                'Reach out to a licensed counselor or therapist as soon as possible.',
                'Lean on your support system — tell someone close to you how you feel.',
                'Contact a mental health helpline or professional crisis service today.',
            ],
        ],
    };
@endphp

{{-- ════════════════════════════════════════
     Main content
════════════════════════════════════════ --}}
<main class="result-page" id="result-main">

    {{-- ── Page heading ── --}}
    <header class="result-header">
        <span class="page-label">PHQ-9 Assessment</span>
        <h1>Your <span>Assessment Result</span></h1>
        <p class="subtitle">Your current emotional wellness snapshot</p>
    </header>

    {{-- ── Score card ── --}}
    <section class="score-card" id="score-card" aria-label="PHQ-9 Score">

        {{-- Animated progress ring --}}
        <div class="ring-wrap" role="img" aria-label="Score: {{ $score }} out of 27">
            <svg class="ring-svg" width="172" height="172" viewBox="0 0 172 172">
                <circle class="ring-bg"    cx="86" cy="86" r="70"/>
                <circle class="ring-track" cx="86" cy="86" r="70"
                        id="scoreRing"
                        stroke="{{ $ringColor }}"
                        style="stroke-dashoffset: {{ $offset }};"/>
            </svg>
            <div class="ring-inner">
                <span class="ring-score-num" style="color: {{ $ringColor }};">{{ $score }}</span>
                <span class="ring-score-denom">out of 27</span>
            </div>
        </div>

        {{-- Severity details --}}
        <div class="score-info">

            <span class="sev-label">Severity Level</span>

            <div class="sev-badge sev-{{ $sevLower }}" id="severity-badge" aria-label="Severity: {{ $severity }}">
                {{ $sevIcon }} {{ $severity }}
            </div>

            <p class="sev-message">{!! $sevMessage !!}</p>

            {{-- PHQ-9 scale pips --}}
            <div class="scale-strip" role="list" aria-label="PHQ-9 severity scale">
                <span class="scale-pip pip-minimal  {{ $severity === 'Minimal'  ? 'active' : '' }}" role="listitem" title="0–4">Minimal (0–4)</span>
                <span class="scale-pip pip-mild     {{ $severity === 'Mild'     ? 'active' : '' }}" role="listitem" title="5–9">Mild (5–9)</span>
                <span class="scale-pip pip-moderate {{ $severity === 'Moderate' ? 'active' : '' }}" role="listitem" title="10–14">Moderate (10–14)</span>
                <span class="scale-pip pip-severe   {{ $severity === 'Severe'   ? 'active' : '' }}" role="listitem" title="15–27">Severe (15–27)</span>
            </div>

        </div>
    </section>

    {{-- ── Suggestions card ── --}}
    <section class="suggestions-card" id="suggestions-card" aria-label="Personalised Suggestions">
        <div class="sugg-header">
            <div class="sugg-icon-wrap" aria-hidden="true">{{ $suggestions['icon'] }}</div>
            <div class="sugg-header-text">
                <div class="sugg-cap">Personalised Suggestions</div>
                <div class="sugg-headline">{{ $suggestions['headline'] }}</div>
            </div>
        </div>

        <ul class="sugg-list" role="list">
            @foreach($suggestions['tips'] as $i => $tip)
            <li>
                <span class="sugg-num" aria-hidden="true">{{ $i + 1 }}</span>
                <span>{{ $tip }}</span>
            </li>
            @endforeach
        </ul>
    </section>

    {{-- ── Action buttons ── --}}
    <hr class="divider" aria-hidden="true">
    <nav class="action-row" aria-label="Result Actions">
        <a href="{{ url('/assessment/phq9') }}"
           class="btn-primary"
           id="retake-btn"
           aria-label="Retake the PHQ-9 assessment">
            🔄 Retake Assessment
        </a>
        <a href="{{ url('/assessment/history') }}"
           class="btn-secondary"
           id="history-btn"
           aria-label="View your assessment history">
            📊 View History
        </a>
        <a href="{{ url('/') }}"
           class="btn-secondary"
           id="home-btn"
           aria-label="Go back to home">
            🏠 Go to Home
        </a>
    </nav>

</main>

{{-- ════════════════════════════════════════
     Script: animate ring on load
════════════════════════════════════════ --}}
<script>
(function () {
    var ring   = document.getElementById('scoreRing');
    var target = {{ $offset }};

    if (!ring) return;

    // Start fully un-filled, then animate to final offset
    ring.style.strokeDashoffset = '440';

    requestAnimationFrame(function () {
        requestAnimationFrame(function () {
            ring.style.strokeDashoffset = target;
        });
    });
})();
</script>

@endsection
