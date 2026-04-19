@extends('layouts.app')

@section('content')
<style>
    .assessment-wrapper {
        max-width: 780px;
        margin: 0 auto;
        padding: 2.5rem 1.5rem 5rem;
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Header ── */
    .assessment-header { text-align: center; margin-bottom: 2.5rem; }

    .assessment-badge {
        display: inline-block;
        background: rgba(129,140,248,0.15);
        border: 1px solid rgba(129,140,248,0.3);
        color: #818cf8;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        padding: 0.3rem 0.9rem;
        border-radius: 999px;
        margin-bottom: 1rem;
    }

    .assessment-title {
        font-size: 2rem;
        font-weight: 300;
        letter-spacing: 0.03em;
        margin-bottom: 0.5rem;
    }

    .assessment-title strong {
        background: linear-gradient(135deg, #818cf8, #c084fc);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }

    .assessment-desc {
        color: rgba(255,255,255,0.45);
        font-size: 0.9rem;
        line-height: 1.7;
        max-width: 540px;
        margin: 0 auto;
    }

    /* ── Progress bar ── */
    .progress-bar-wrapper {
        background: rgba(255,255,255,0.07);
        border-radius: 999px;
        height: 6px;
        margin-bottom: 2.5rem;
        overflow: hidden;
    }

    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(90deg, #818cf8, #c084fc);
        border-radius: 999px;
        width: 0%;
        transition: width 0.5s ease;
    }

    .progress-label {
        text-align: right;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.35);
        margin-top: 0.35rem;
    }

    /* ── Question card ── */
    .question-card {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 1.25rem;
        padding: 1.75rem 2rem;
        margin-bottom: 1.25rem;
        transition: border-color 0.3s, box-shadow 0.3s;
        animation: slideIn 0.4s ease;
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-10px); }
        to   { opacity: 1; transform: translateX(0); }
    }

    .question-card:has(input:checked) {
        border-color: rgba(129,140,248,0.35);
        box-shadow: 0 4px 20px rgba(129,140,248,0.08);
    }

    .question-num {
        font-size: 0.7rem;
        color: #818cf8;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
        display: block;
    }

    .question-text {
        font-size: 1rem;
        font-weight: 500;
        color: #e2e8f0;
        line-height: 1.6;
        margin-bottom: 1.25rem;
    }

    /* ── Radio options ── */
    .options-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
        gap: 0.6rem;
    }

    .option-label {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        background: rgba(0,0,0,0.25);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 0.75rem;
        padding: 0.65rem 0.9rem;
        cursor: pointer;
        transition: all 0.2s;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.6);
    }

    .option-label:hover {
        border-color: rgba(129,140,248,0.45);
        background: rgba(129,140,248,0.08);
        color: #fff;
    }

    .option-label input[type="radio"] { display: none; }

    .option-label:has(input:checked) {
        border-color: #818cf8;
        background: rgba(129,140,248,0.18);
        color: #fff;
        font-weight: 600;
    }

    .option-dot {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid rgba(255,255,255,0.25);
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.2s;
    }

    .option-label:has(input:checked) .option-dot {
        border-color: #818cf8;
        background: #818cf8;
    }

    .option-dot::after {
        content: '';
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #fff;
        display: none;
    }

    .option-label:has(input:checked) .option-dot::after { display: block; }

    /* Score badge */
    .score-badge {
        font-size: 0.7rem;
        background: rgba(255,255,255,0.08);
        color: rgba(255,255,255,0.4);
        border-radius: 999px;
        padding: 0.1rem 0.45rem;
        font-weight: 600;
        flex-shrink: 0;
        margin-left: auto;
    }

    .option-label:has(input:checked) .score-badge {
        background: rgba(129,140,248,0.3);
        color: #c7d2fe;
    }

    /* ── Validation error ── */
    .alert-error {
        background: rgba(239,68,68,0.1);
        border: 1px solid rgba(239,68,68,0.3);
        color: #fca5a5;
        border-radius: 0.85rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        font-size: 0.875rem;
    }

    /* ── Submit ── */
    .submit-section { text-align: center; margin-top: 2rem; }

    .btn-submit {
        background: linear-gradient(135deg, #818cf8, #a78bfa);
        color: #fff;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 0.08em;
        border: none;
        border-radius: 1rem;
        padding: 1.1rem 3.5rem;
        cursor: pointer;
        transition: all 0.25s;
        text-transform: uppercase;
        font-family: inherit;
    }

    .btn-submit:hover { filter: brightness(1.12); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(129,140,248,0.35); }
    .btn-submit:active { transform: scale(0.97); }

    .submit-note {
        margin-top: 0.75rem;
        font-size: 0.78rem;
        color: rgba(255,255,255,0.3);
    }
</style>

<div class="assessment-wrapper">
    <div class="assessment-header">
        <span class="assessment-badge">PHQ-9 Questionnaire</span>
        <h1 class="assessment-title">Patient Health <strong>Questionnaire</strong></h1>
        <p class="assessment-desc">
            Over the <strong>last 2 weeks</strong>, how often have you been bothered by any of the following problems?
            Answer honestly — there are no right or wrong answers.
        </p>
    </div>

    @if ($errors->any())
        <div class="alert-error">
            Please answer all 9 questions before submitting.
        </div>
    @endif

    <div class="progress-bar-wrapper">
        <div class="progress-bar-fill" id="progressFill"></div>
    </div>
    <div class="progress-label" id="progressLabel">0 of 9 answered</div>

    <form action="{{ route('assessment.store') }}" method="POST" id="phq9Form">
        @csrf

        @foreach($questions as $num => $text)
        <div class="question-card" id="qcard-{{ $num }}">
            <span class="question-num">Question {{ $num }} of 9</span>
            <div class="question-text">{{ $text }}</div>

            <div class="options-grid">
                @foreach($scoreLabels as $score => $label)
                <label class="option-label">
                    <input type="radio" name="question_{{ $num }}" value="{{ $score }}"
                           onchange="updateProgress()"
                           {{ old("question_{$num}") == $score ? 'checked' : '' }}>
                    <span class="option-dot"></span>
                    <span>{{ $label }}</span>
                    <span class="score-badge">{{ $score }}</span>
                </label>
                @endforeach
            </div>
        </div>
        @endforeach

        <div class="submit-section">
            <button type="submit" class="btn-submit" id="submitBtn">Submit Assessment</button>
            <p class="submit-note">Your responses are private and stored securely.</p>
        </div>
    </form>
</div>

<script>
    const totalQuestions = 9;

    function updateProgress() {
        let answered = 0;
        for (let i = 1; i <= totalQuestions; i++) {
            const checked = document.querySelector(`input[name="question_${i}"]:checked`);
            if (checked) answered++;
        }
        const pct = Math.round((answered / totalQuestions) * 100);
        document.getElementById('progressFill').style.width = pct + '%';
        document.getElementById('progressLabel').textContent = `${answered} of ${totalQuestions} answered`;
    }

    // Run on page load to restore old values
    updateProgress();
</script>
@endsection
