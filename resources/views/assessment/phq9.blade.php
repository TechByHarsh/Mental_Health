<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHQ-9 Assessment — MindSpace</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #07071a;
            color: #e2e8f0;
            min-height: 100vh;
        }

        /* ── Gradient blobs ── */
        body::before, body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            z-index: 0;
        }
        body::before {
            width: 600px; height: 600px;
            background: rgba(99, 102, 241, 0.12);
            top: -150px; left: -150px;
        }
        body::after {
            width: 500px; height: 500px;
            background: rgba(168, 85, 247, 0.10);
            bottom: -100px; right: -100px;
        }

        /* ── Navbar ── */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 50;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            height: 60px;
            background: rgba(7, 7, 26, 0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }
        .navbar-brand {
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            color: #818cf8;
            letter-spacing: 0.04em;
        }
        .navbar-links { display: flex; align-items: center; gap: 0.5rem; }
        .nav-a {
            text-decoration: none;
            font-size: 0.82rem;
            color: rgba(255,255,255,0.5);
            padding: 0.35rem 0.8rem;
            border-radius: 0.5rem;
            transition: all 0.2s;
        }
        .nav-a:hover, .nav-a.active { color: #fff; background: rgba(255,255,255,0.07); }
        .nav-a.active { color: #818cf8; background: rgba(129,140,248,0.1); }
        .btn-logout {
            background: none;
            border: 1px solid rgba(239,68,68,0.25);
            color: #fca5a5;
            font-size: 0.82rem;
            padding: 0.35rem 0.8rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-family: inherit;
            transition: all 0.2s;
        }
        .btn-logout:hover { background: rgba(239,68,68,0.15); color: #fff; }

        /* ── Page layout ── */
        .page {
            position: relative;
            z-index: 1;
            max-width: 740px;
            margin: 0 auto;
            padding: 3rem 1.5rem 6rem;
        }

        /* ── Header ── */
        .page-header { text-align: center; margin-bottom: 3rem; }

        .badge {
            display: inline-block;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #818cf8;
            background: rgba(129,140,248,0.1);
            border: 1px solid rgba(129,140,248,0.25);
            border-radius: 999px;
            padding: 0.3rem 0.9rem;
            margin-bottom: 1.2rem;
        }

        .page-title {
            font-size: clamp(1.75rem, 4vw, 2.4rem);
            font-weight: 300;
            line-height: 1.2;
            letter-spacing: -0.01em;
            margin-bottom: 0.75rem;
        }
        .page-title strong {
            font-weight: 700;
            background: linear-gradient(135deg, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .page-sub {
            color: rgba(255,255,255,0.4);
            font-size: 0.9rem;
            line-height: 1.75;
            max-width: 480px;
            margin: 0 auto;
        }

        /* ── Progress ── */
        .progress-bar-wrap { margin-bottom: 2.5rem; }
        .progress-bar-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: rgba(255,255,255,0.35);
            margin-bottom: 0.5rem;
        }
        .progress-bar-meta span:last-child { color: #818cf8; font-weight: 600; }
        .progress-track {
            height: 4px;
            background: rgba(255,255,255,0.07);
            border-radius: 999px;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #818cf8, #c084fc);
            border-radius: 999px;
            width: 0%;
            transition: width 0.5s ease;
        }

        /* ── Error ── */
        .alert {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            background: rgba(239,68,68,0.08);
            border: 1px solid rgba(239,68,68,0.25);
            border-radius: 0.85rem;
            padding: 0.9rem 1.2rem;
            color: #fca5a5;
            font-size: 0.875rem;
            margin-bottom: 2rem;
        }

        /* ── Question cards ── */
        .question-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 1.25rem;
            padding: 1.75rem 2rem 1.5rem;
            margin-bottom: 1.1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            animation: slideUp 0.5s ease both;
        }

        .question-card:nth-child(1) { animation-delay: 0.04s; }
        .question-card:nth-child(2) { animation-delay: 0.08s; }
        .question-card:nth-child(3) { animation-delay: 0.12s; }
        .question-card:nth-child(4) { animation-delay: 0.16s; }
        .question-card:nth-child(5) { animation-delay: 0.20s; }
        .question-card:nth-child(6) { animation-delay: 0.24s; }
        .question-card:nth-child(7) { animation-delay: 0.28s; }
        .question-card:nth-child(8) { animation-delay: 0.32s; }
        .question-card:nth-child(9) { animation-delay: 0.36s; }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .question-card.answered {
            border-color: rgba(129,140,248,0.28);
            box-shadow: 0 4px 24px rgba(129,140,248,0.06);
        }

        .q-meta {
            font-size: 0.68rem;
            font-weight: 700;
            color: #818cf8;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .q-text {
            font-size: 0.98rem;
            font-weight: 400;
            line-height: 1.65;
            color: rgba(255,255,255,0.88);
            margin-bottom: 1.4rem;
        }

        /* ── Radio options ── */
        .options-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
        }

        @media (max-width: 580px) {
            .options-grid { grid-template-columns: repeat(2, 1fr); }
            .page { padding: 2rem 1rem 5rem; }
            .question-card { padding: 1.35rem 1.1rem 1.2rem; }
        }

        .opt {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.35rem;
            padding: 0.85rem 0.6rem;
            border-radius: 0.85rem;
            border: 1px solid rgba(255,255,255,0.08);
            background: rgba(0,0,0,0.2);
            cursor: pointer;
            text-align: center;
            transition: all 0.2s ease;
            user-select: none;
        }

        .opt:hover {
            border-color: rgba(129,140,248,0.4);
            background: rgba(129,140,248,0.06);
            transform: translateY(-1px);
        }

        .opt input[type="radio"] { display: none; }

        .opt.selected {
            border-color: #818cf8;
            background: rgba(129,140,248,0.14);
            box-shadow: 0 4px 16px rgba(129,140,248,0.15);
            transform: translateY(-1px);
        }

        .opt-num {
            font-size: 1.3rem;
            font-weight: 800;
            color: rgba(255,255,255,0.25);
            line-height: 1;
            transition: color 0.2s;
        }

        .opt.selected .opt-num {
            background: linear-gradient(135deg, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .opt-label-text {
            font-size: 0.7rem;
            color: rgba(255,255,255,0.4);
            line-height: 1.3;
            font-weight: 500;
            transition: color 0.2s;
        }

        .opt.selected .opt-label-text { color: rgba(255,255,255,0.8); font-weight: 600; }

        .opt-check {
            width: 16px; height: 16px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
            flex-shrink: 0;
        }

        .opt.selected .opt-check {
            border-color: #818cf8;
            background: #818cf8;
        }

        .opt-check::after {
            content: '';
            width: 5px; height: 5px;
            border-radius: 50%;
            background: #fff;
            display: none;
        }

        .opt.selected .opt-check::after { display: block; }

        /* ── Submit ── */
        .submit-wrap { text-align: center; margin-top: 2.5rem; }

        .btn-submit {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.95rem 3rem;
            background: linear-gradient(135deg, #818cf8, #a78bfa);
            color: #fff;
            font-family: inherit;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            border: none;
            border-radius: 0.9rem;
            cursor: pointer;
            transition: all 0.25s;
        }

        .btn-submit:hover {
            filter: brightness(1.1);
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(129,140,248,0.3);
        }

        .btn-submit:active { transform: scale(0.97); }

        .btn-submit .arr { transition: transform 0.25s; }
        .btn-submit:hover .arr { transform: translateX(4px); }

        .submit-note {
            margin-top: 0.85rem;
            font-size: 0.75rem;
            color: rgba(255,255,255,0.25);
        }

        /* ── Floating counter ── */
        .float-counter {
            position: fixed;
            bottom: 1.75rem;
            right: 1.75rem;
            z-index: 50;
            width: 60px; height: 60px;
            border-radius: 50%;
            background: rgba(7,7,26,0.9);
            border: 2px solid rgba(129,140,248,0.3);
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(0,0,0,0.4);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .float-counter.done {
            border-color: rgba(34,197,94,0.5);
            box-shadow: 0 8px 24px rgba(34,197,94,0.18);
        }

        .fc-n {
            font-size: 1rem;
            font-weight: 800;
            background: linear-gradient(135deg, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
        }

        .float-counter.done .fc-n {
            background: linear-gradient(135deg, #22c55e, #86efac);
            -webkit-background-clip: text;
        }

        .fc-of {
            font-size: 0.5rem;
            color: rgba(255,255,255,0.35);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>
</head>
<body>

<div class="page">

    <!-- Header -->
    <div class="page-header">
        <span class="badge">PHQ-9 · Patient Health Questionnaire</span>
        <h1 class="page-title">How are you feeling <strong>lately?</strong></h1>
        <p class="page-sub">
            Over the <strong style="color:rgba(255,255,255,0.7)">last 2 weeks</strong>, how often have you been bothered
            by any of the following problems? Answer honestly.
        </p>
    </div>

    <!-- Progress bar -->
    <div class="progress-bar-wrap">
        <div class="progress-bar-meta">
            <span>Your progress</span>
            <span id="progressText">0 / {{ $questions->count() }} answered</span>
        </div>
        <div class="progress-track">
            <div class="progress-fill" id="progressFill"></div>
        </div>
    </div>

    <!-- Error alert -->
    @if ($errors->any())
    <div class="alert">
        <span>⚠️</span>
        <span>Please answer <strong>all {{ $questions->count() }} questions</strong> before submitting.</span>
    </div>
    @endif

    <!-- ════════════════ FORM ════════════════ -->
    <form action="/assessment/phq9/submit" method="POST" id="phqForm">
        @csrf

        @foreach ($questions as $index => $question)
        <div class="question-card {{ old("answers.{$question->id}") !== null ? 'answered' : '' }}"
             id="card-{{ $question->id }}"
             data-qid="{{ $question->id }}">

            <div class="q-meta">Question {{ $index + 1 }} of {{ $questions->count() }}</div>
            <p class="q-text">{{ $question->question_text }}</p>

            <div class="options-grid">
                @php
                    $choices = [
                        0 => 'Not at all',
                        1 => 'Several days',
                        2 => 'More than half the days',
                        3 => 'Nearly every day',
                    ];
                    $old = old("answers.{$question->id}");
                @endphp

                @foreach ($choices as $value => $choiceLabel)
                <label class="opt {{ $old !== null && (int)$old === $value ? 'selected' : '' }}"
                       onclick="selectOpt(this, {{ $question->id }})">
                    <input type="radio"
                           name="answers[{{ $question->id }}]"
                           value="{{ $value }}"
                           {{ $old !== null && (int)$old === $value ? 'checked' : '' }}>
                    <span class="opt-num">{{ $value }}</span>
                    <span class="opt-label-text">{{ $choiceLabel }}</span>
                    <span class="opt-check"></span>
                </label>
                @endforeach
            </div>

        </div>
        @endforeach

        <!-- Submit -->
        <div class="submit-wrap">
            <button type="submit" class="btn-submit" id="submitBtn">
                <span>Submit Assessment</span>
                <span class="arr">→</span>
            </button>
            <p class="submit-note">🔒 Your responses are private and stored securely.</p>
        </div>

    </form>
</div>

<!-- Floating progress counter -->
<div class="float-counter" id="floatCounter">
    <span class="fc-n" id="fcNum">0</span>
    <span class="fc-of">of {{ $questions->count() }}</span>
</div>

<script>
    const TOTAL   = {{ $questions->count() }};
    const answered = new Set();

    // Restore old() values on validation fail
    document.querySelectorAll('.question-card.answered').forEach(card => {
        answered.add(card.dataset.qid);
    });
    updateProgress();

    function selectOpt(label, qid) {
        const card = document.getElementById('card-' + qid);

        // Deselect siblings
        card.querySelectorAll('.opt').forEach(o => o.classList.remove('selected'));

        // Select clicked
        label.classList.add('selected');
        label.querySelector('input[type="radio"]').checked = true;

        // Mark card answered
        card.classList.add('answered');
        answered.add(String(qid));
        updateProgress();

        // Auto-scroll to next unanswered card
        const allCards = [...document.querySelectorAll('.question-card')];
        const idx = allCards.indexOf(card);
        const next = allCards.slice(idx + 1).find(c => !c.classList.contains('answered'));
        if (next) {
            setTimeout(() => next.scrollIntoView({ behavior: 'smooth', block: 'center' }), 280);
        }
    }

    function updateProgress() {
        const n   = answered.size;
        const pct = Math.round((n / TOTAL) * 100);

        document.getElementById('progressFill').style.width = pct + '%';
        document.getElementById('progressText').textContent  = n + ' / ' + TOTAL + ' answered';
        document.getElementById('fcNum').textContent          = n;

        const fc = document.getElementById('floatCounter');
        fc.classList.toggle('done', n === TOTAL);
    }
</script>

</body>
</html>
