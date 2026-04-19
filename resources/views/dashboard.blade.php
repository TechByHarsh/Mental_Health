@extends('layouts.app')

@section('content')
<style>
    .dashboard-wrapper {
        max-width: 960px;
        margin: 0 auto;
        padding: 3rem 1.5rem 4rem;
    }

    .greeting-section {
        text-align: center;
        margin-bottom: 3rem;
        animation: fadeInDown 0.6s ease;
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .greeting-emoji { font-size: 3rem; margin-bottom: 0.75rem; display: block; }

    .greeting-title {
        font-size: 2.2rem;
        font-weight: 300;
        letter-spacing: 0.04em;
        margin-bottom: 0.5rem;
    }

    .greeting-title span {
        background: linear-gradient(135deg, #818cf8, #c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 600;
    }

    .greeting-sub {
        color: rgba(255,255,255,0.45);
        font-size: 1rem;
    }

    /* ── Cards grid ── */
    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        animation: fadeInUp 0.7s ease 0.1s both;
    }

    .dash-card {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 1.5rem;
        padding: 2rem 1.75rem;
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
        display: block;
        position: relative;
        overflow: hidden;
    }

    .dash-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(129,140,248,0.08), transparent);
        opacity: 0;
        transition: opacity 0.3s;
        border-radius: inherit;
    }

    .dash-card:hover {
        border-color: rgba(129,140,248,0.4);
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.3);
    }

    .dash-card:hover::before { opacity: 1; }

    .card-icon {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        display: block;
    }

    .card-title {
        font-size: 1.15rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #e2e8f0;
    }

    .card-desc {
        font-size: 0.85rem;
        color: rgba(255,255,255,0.45);
        line-height: 1.6;
    }

    .card-cta {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        font-size: 0.82rem;
        font-weight: 600;
        color: #818cf8;
        margin-top: 1.2rem;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    /* ── Last result banner ── */
    .last-result {
        margin-top: 2.5rem;
        background: rgba(129,140,248,0.08);
        border: 1px solid rgba(129,140,248,0.2);
        border-radius: 1.2rem;
        padding: 1.5rem 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
        animation: fadeInUp 0.7s ease 0.2s both;
    }

    .last-result-info { display: flex; flex-direction: column; gap: 0.3rem; }

    .last-result-label {
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    .last-result-score {
        font-size: 1.5rem;
        font-weight: 700;
        color: #818cf8;
    }

    .last-result-sev {
        font-size: 0.9rem;
        color: rgba(255,255,255,0.7);
    }

    .btn-view {
        padding: 0.7rem 1.6rem;
        background: linear-gradient(135deg, #818cf8, #a78bfa);
        color: #fff;
        border: none;
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 0.875rem;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s;
        display: inline-block;
    }

    .btn-view:hover { filter: brightness(1.15); transform: translateY(-1px); }

    .no-history {
        text-align: center;
        padding: 1.5rem;
        color: rgba(255,255,255,0.35);
        font-size: 0.9rem;
    }
</style>

<div class="dashboard-wrapper">
    <div class="greeting-section">
        <span class="greeting-emoji">🧠</span>
        <h1 class="greeting-title">
            Hello, <span>{{ Auth::user()->name }}</span>
        </h1>
        <p class="greeting-sub">How are you feeling today? Regular check-ins help track your mental wellness.</p>
    </div>

    <div class="cards-grid">
        <a href="{{ route('assessment.index') }}" class="dash-card" id="take-assessment-card">
            <span class="card-icon">📋</span>
            <div class="card-title">PHQ-9 Assessment</div>
            <div class="card-desc">Take the standardized 9-question depression screening questionnaire. Takes about 2–3 minutes.</div>
            <div class="card-cta">Start Now →</div>
        </a>

        <a href="{{ route('assessment.history') }}" class="dash-card" id="history-card">
            <span class="card-icon">📈</span>
            <div class="card-title">Your History</div>
            <div class="card-desc">View all past assessments and track how your mental health has changed over time.</div>
            <div class="card-cta">View History →</div>
        </a>

        <div class="dash-card" style="cursor:default;" id="info-card">
            <span class="card-icon">💡</span>
            <div class="card-title">What is PHQ-9?</div>
            <div class="card-desc">The Patient Health Questionnaire is a validated clinical tool developed at Pfizer to screen for depression severity. It is widely used in primary care.</div>
        </div>
    </div>

    @php
        $last = Auth::user()->assessments()->latest()->first();
    @endphp

    @if($last)
        <div class="last-result">
            <div class="last-result-info">
                <span class="last-result-label">Your last assessment ({{ $last->created_at->diffForHumans() }})</span>
                <span class="last-result-score">Score: {{ $last->total_score }} / 27</span>
                <span class="last-result-sev">Severity: <strong>{{ $last->severity_level }}</strong></span>
            </div>
            <a href="{{ route('assessment.result', $last->id) }}" class="btn-view">View Result</a>
        </div>
    @else
        <div class="last-result" style="justify-content:center;">
            <p class="no-history">You haven't taken any assessments yet. Start your first PHQ-9 above!</p>
        </div>
    @endif
</div>
@endsection
