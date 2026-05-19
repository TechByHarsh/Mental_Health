<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Therawell – Guided therapy and holistic wellness programs to help you heal, grow, and build lasting balance.">
    <title>Home – Therawell</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* ─── Reset & Base ─────────────────────────────────── */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --sage:        #7a9e7e;
            --sage-light:  #a8c5ab;
            --sage-dark:   #4a7550;
            --mint:        #c8dfc9;
            --cream:       #f0ede8;
            --white:       #ffffff;
            --glass-bg:    rgba(255,255,255,0.10);
            --glass-border:rgba(255,255,255,0.22);
            --glass-blur:  blur(18px);
            --text-dark:   #1e2d1f;
            --text-mid:    #3d5c3f;
        }

        html, body {
            width: 100%; height: 100%;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        /* ─── Hero / Background ─────────────────────────────── */
        .hero {
            position: relative;
            width: 100vw; min-height: 100vh;
            display: flex; flex-direction: column;
            background: url('/images/forest-bg.png') center center / cover no-repeat;
            overflow: hidden;
        }

        /* Green tint overlay for mood */
        .hero::before {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(
                135deg,
                rgba(74, 117, 80, 0.38) 0%,
                rgba(120, 168, 124, 0.22) 40%,
                rgba(40, 80, 44, 0.45) 100%
            );
            pointer-events: none; z-index: 1;
        }

        /* Left vignette for text readability */
        .hero::after {
            content: '';
            position: absolute; inset: 0;
            background: linear-gradient(
                90deg,
                rgba(30, 55, 32, 0.55) 0%,
                transparent 60%
            );
            pointer-events: none; z-index: 1;
        }

        /* ─── Navbar ─────────────────────────────────────────── */
        .navbar {
            position: relative; z-index: 100;
            display: flex; align-items: center; justify-content: space-between;
            padding: 22px 48px;
        }

        .nav-left {
            display: flex; align-items: center; gap: 36px;
        }

        .nav-home-pill {
            display: flex; align-items: center; gap: 8px;
            background: rgba(20, 40, 22, 0.65);
            border: 1px solid rgba(255,255,255,0.18);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            color: #fff; font-size: 0.82rem; font-weight: 500;
            padding: 7px 18px; border-radius: 50px;
            letter-spacing: 0.02em;
            cursor: pointer; transition: background 0.3s;
        }
        .nav-home-pill:hover { background: rgba(74,117,80,0.75); }
        .nav-home-dot {
            width: 6px; height: 6px; border-radius: 50%;
            background: #a8c5ab;
        }

        .nav-links {
            display: flex; gap: 30px; list-style: none;
        }
        .nav-links li a {
            color: rgba(255,255,255,0.85); font-size: 0.85rem;
            text-decoration: none; font-weight: 400;
            letter-spacing: 0.03em;
            transition: color 0.2s;
        }
        .nav-links li a:hover { color: #fff; }

        .nav-logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.35rem; font-weight: 400;
            color: #fff; letter-spacing: 0.12em;
            position: absolute; left: 50%; transform: translateX(-50%);
        }

        .nav-cta {
            background: rgba(18, 36, 20, 0.80);
            border: 1px solid rgba(255,255,255,0.20);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            color: #fff; font-size: 0.82rem; font-weight: 500;
            padding: 10px 24px; border-radius: 50px;
            cursor: pointer; letter-spacing: 0.04em;
            transition: background 0.3s, transform 0.2s;
            text-decoration: none;
        }
        .nav-cta:hover {
            background: rgba(74,117,80,0.85);
            transform: translateY(-1px);
        }

        /* ─── Main Content ───────────────────────────────────── */
        .hero-body {
            position: relative; z-index: 10;
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr 260px;
            align-items: center;
            padding: 0 48px 60px 48px;
            gap: 0;
        }

        /* Left text block */
        .hero-text {
            display: flex; flex-direction: column;
            gap: 20px;
            padding-top: 10px;
        }

        .hero-heading {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.6rem, 5vw, 4.2rem);
            font-weight: 300;
            color: #fff;
            line-height: 1.12;
            letter-spacing: -0.01em;
        }

        .hero-heading-underline {
            display: inline-block;
            position: relative;
        }
        .hero-heading-underline::after {
            content: '';
            position: absolute; bottom: -6px; left: 0;
            width: 100%; height: 2px;
            background: linear-gradient(90deg, rgba(168,197,171,0.9), transparent);
        }

        .hero-desc {
            color: rgba(255,255,255,0.78);
            font-size: 0.88rem; line-height: 1.7;
            max-width: 280px;
            font-weight: 300;
        }

        .hero-btn {
            display: inline-block;
            background: rgba(255,255,255,0.18);
            border: 1px solid rgba(255,255,255,0.35);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: #fff; font-size: 0.82rem; font-weight: 500;
            padding: 12px 28px; border-radius: 50px;
            cursor: pointer; letter-spacing: 0.05em;
            transition: background 0.3s, transform 0.2s;
            text-decoration: none;
            width: fit-content;
            margin-top: 8px;
        }
        .hero-btn:hover {
            background: rgba(255,255,255,0.28);
            transform: translateY(-2px);
        }

        /* ─── Center – Ambient Scene ──────────────────────── */
        .hero-center {
            display: flex; justify-content: center; align-items: center;
            position: relative;
        }

        .meditation-scene {
            position: relative;
            width: 360px; height: 420px;
        }

        /* ── Light rays canvas ── */
        .light-rays {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            border-radius: 50%;
        }
        .ray {
            position: absolute;
            bottom: 38%;
            left: 50%;
            width: 2px;
            background: linear-gradient(to top, rgba(180,220,185,0.0), rgba(200,235,205,0.28), rgba(180,220,185,0.0));
            transform-origin: bottom center;
            animation: ray-pulse 6s ease-in-out infinite;
            border-radius: 2px;
        }
        .ray:nth-child(1)  { height: 200px; transform: translateX(-50%) rotate(-55deg); animation-delay: 0s;   opacity: 0.7; }
        .ray:nth-child(2)  { height: 240px; transform: translateX(-50%) rotate(-40deg); animation-delay: 0.6s; opacity: 0.5; }
        .ray:nth-child(3)  { height: 260px; transform: translateX(-50%) rotate(-25deg); animation-delay: 1.2s; opacity: 0.8; }
        .ray:nth-child(4)  { height: 280px; transform: translateX(-50%) rotate(-10deg); animation-delay: 0.3s; opacity: 0.6; }
        .ray:nth-child(5)  { height: 290px; transform: translateX(-50%) rotate(5deg);   animation-delay: 0.9s; opacity: 0.9; }
        .ray:nth-child(6)  { height: 270px; transform: translateX(-50%) rotate(20deg);  animation-delay: 1.5s; opacity: 0.6; }
        .ray:nth-child(7)  { height: 250px; transform: translateX(-50%) rotate(35deg);  animation-delay: 0.4s; opacity: 0.5; }
        .ray:nth-child(8)  { height: 220px; transform: translateX(-50%) rotate(50deg);  animation-delay: 1.1s; opacity: 0.7; }
        @keyframes ray-pulse {
            0%, 100% { opacity: var(--ray-op, 0.5); transform: translateX(-50%) rotate(var(--ray-rot, 0deg)) scaleX(1); }
            50%       { opacity: calc(var(--ray-op, 0.5) * 1.5); transform: translateX(-50%) rotate(var(--ray-rot, 0deg)) scaleX(1.6); }
        }

        /* ── Water ripples ── */
        .ripples {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 260px; height: 50px;
            pointer-events: none;
        }
        .ripple {
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            border: 1px solid rgba(200,235,210,0.45);
            animation: ripple-expand 4s ease-out infinite;
        }
        .ripple:nth-child(1) { width: 80px;  height: 20px; animation-delay: 0s; }
        .ripple:nth-child(2) { width: 140px; height: 28px; animation-delay: 1s; }
        .ripple:nth-child(3) { width: 200px; height: 36px; animation-delay: 2s; }
        .ripple:nth-child(4) { width: 260px; height: 44px; animation-delay: 3s; }
        @keyframes ripple-expand {
            0%   { transform: translate(-50%, -50%) scale(0); opacity: 0.8; }
            100% { transform: translate(-50%, -50%) scale(1); opacity: 0; }
        }

        /* ── Glowing orbs / particles ── */
        .orbs { position: absolute; inset: 0; pointer-events: none; }
        .orb {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(200,235,210,0.55) 0%, rgba(160,210,170,0.0) 70%);
            animation: orb-drift 7s ease-in-out infinite;
        }
        .orb:nth-child(1) { width: 18px; height: 18px; top: 22%; left: 20%; animation-delay: 0s; }
        .orb:nth-child(2) { width: 10px; height: 10px; top: 35%; left: 72%; animation-delay: 1.2s; }
        .orb:nth-child(3) { width: 14px; height: 14px; top: 55%; left: 15%; animation-delay: 2.4s; }
        .orb:nth-child(4) { width:  8px; height:  8px; top: 20%; left: 60%; animation-delay: 0.8s; }
        .orb:nth-child(5) { width: 12px; height: 12px; top: 68%; left: 78%; animation-delay: 1.8s; }
        .orb:nth-child(6) { width: 16px; height: 16px; top: 78%; left: 40%; animation-delay: 3.2s; }
        @keyframes orb-drift {
            0%, 100% { transform: translateY(0) scale(1);    opacity: 0.6; }
            33%       { transform: translateY(-14px) scale(1.2); opacity: 1;   }
            66%       { transform: translateY(-6px) scale(0.9);  opacity: 0.7; }
        }

        /* ── Flying birds ── */
        .birds-sky {
            position: absolute;
            top: 8%; left: 0; width: 100%; height: 30%;
            pointer-events: none;
        }
        .fbird {
            position: absolute;
            animation: bird-fly 9s linear infinite;
            opacity: 0;
        }
        .fbird svg { filter: drop-shadow(0 0 3px rgba(200,235,210,0.5)); }
        .fbird:nth-child(1) { top: 15%; animation-delay: 0s;   animation-duration: 9s; }
        .fbird:nth-child(2) { top: 40%; animation-delay: 2.5s; animation-duration: 11s; }
        .fbird:nth-child(3) { top: 25%; animation-delay: 5s;   animation-duration: 8s; }
        .fbird:nth-child(4) { top: 60%; animation-delay: 1.5s; animation-duration: 13s; }
        @keyframes bird-fly {
            0%   { left: -60px;  opacity: 0; transform: translateY(0); }
            5%   { opacity: 0.8; }
            48%  { transform: translateY(-8px); }
            52%  { transform: translateY(4px); }
            95%  { opacity: 0.7; }
            100% { left: calc(100% + 60px); opacity: 0; transform: translateY(0); }
        }

        /* ── Small background meditator ── */
        .mini-meditator {
            position: absolute;
            bottom: 22%;
            left: 50%;
            transform: translateX(-50%);
            width: 88px;
            filter:
                drop-shadow(0 0 14px rgba(200,240,210,0.7))
                drop-shadow(0 0 30px rgba(160,210,175,0.35));
            animation: gentle-breathe 6s ease-in-out infinite;
            z-index: 5;
        }
        @keyframes gentle-breathe {
            0%, 100% { transform: translateX(-50%) translateY(0) scale(1); }
            50%       { transform: translateX(-50%) translateY(-7px) scale(1.03); }
        }

        /* ── Halo glow ring around mini figure ── */
        .halo {
            position: absolute;
            bottom: calc(22% + 30px);
            left: 50%;
            transform: translateX(-50%);
            width: 70px; height: 70px;
            border-radius: 50%;
            border: 1px solid rgba(200,240,210,0.35);
            box-shadow:
                0 0 18px 6px rgba(190,235,200,0.2),
                inset 0 0 18px 6px rgba(190,235,200,0.1);
            animation: halo-pulse 4s ease-in-out infinite;
            z-index: 4;
        }
        @keyframes halo-pulse {
            0%, 100% { opacity: 0.5; transform: translateX(-50%) scale(1); }
            50%       { opacity: 1;   transform: translateX(-50%) scale(1.15); }
        }

        /* ─── Right – Stats Panel ────────────────────────────── */
        .stats-panel {
            display: flex; flex-direction: column;
            gap: 0;
            align-self: stretch;
            padding-top: 10px;
        }

        .stat-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            padding: 26px 22px;
            border-radius: 0;
            text-align: center;
            flex: 1;
            display: flex; flex-direction: column;
            align-items: center; justify-content: center;
            gap: 6px;
            transition: background 0.3s;
            cursor: default;
        }
        .stat-card:first-child { border-radius: 16px 16px 0 0; }
        .stat-card:last-child  { border-radius: 0 0 16px 16px; }
        .stat-card:not(:last-child) { border-bottom: none; }
        .stat-card:hover { background: rgba(255,255,255,0.16); }

        .stat-icon {
            font-size: 1.7rem;
            color: rgba(255,255,255,0.85);
            margin-bottom: 4px;
        }

        .stat-number {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem; font-weight: 400;
            color: #fff; line-height: 1;
        }

        .stat-label {
            font-size: 0.72rem;
            color: rgba(255,255,255,0.65);
            font-weight: 400; letter-spacing: 0.04em;
            line-height: 1.4;
        }

        .stat-stars {
            color: #d4af6a;
            font-size: 1.1rem; letter-spacing: 2px;
        }

        /* Sparkle diamond */
        .sparkle {
            position: absolute; bottom: 20px; right: 20px;
            font-size: 1.8rem;
            color: rgba(255,255,255,0.6);
            animation: twinkle 2.5s ease-in-out infinite;
        }
        @keyframes twinkle {
            0%, 100% { opacity: 0.5; transform: scale(1) rotate(0deg); }
            50%       { opacity: 1;   transform: scale(1.2) rotate(15deg); }
        }


    </style>
</head>
<body>

<main class="hero" id="home">

    <!-- ══ NAVBAR ══ -->
    <nav class="navbar" role="navigation" aria-label="Main navigation">
        <div class="nav-left">
            <a href="/" class="nav-home-pill" id="nav-home">
                <span class="nav-home-dot"></span>
                Dashboard
            </a>
            <ul class="nav-links">
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <div class="nav-logo">therawell</div>

        <a href="/login" class="nav-cta" id="book-session-btn">Book A Session</a>
    </nav>

    <!-- ══ HERO BODY ══ -->
    <section class="hero-body" aria-labelledby="hero-heading">

        <!-- Left: Text -->
        <div class="hero-text">
            <h1 class="hero-heading" id="hero-heading">
                Emotional<br>
                and Physical<br>
                <span class="hero-heading-underline">Growth</span>
            </h1>

            <p class="hero-desc">
                Guided therapy and holistic wellness programs to help you heal, grow, and build lasting balance.
            </p>

            <a href="/login" class="hero-btn" id="explore-btn">Explore Programs</a>
        </div>

        <!-- Center: Ambient Meditation Scene -->
        <div class="hero-center" aria-hidden="true">
            <div class="meditation-scene">

                <!-- Flying birds -->
                <div class="birds-sky">
                    <div class="fbird">
                        <svg width="28" height="10" viewBox="0 0 28 10" fill="none">
                            <path d="M1 8 Q7 1 14 5 Q21 1 27 8" stroke="rgba(255,255,255,0.75)" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="fbird">
                        <svg width="22" height="8" viewBox="0 0 22 8" fill="none">
                            <path d="M1 6 Q5.5 1 11 4 Q16.5 1 21 6" stroke="rgba(255,255,255,0.65)" stroke-width="1.2" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="fbird">
                        <svg width="26" height="9" viewBox="0 0 26 9" fill="none">
                            <path d="M1 7 Q6.5 1 13 4.5 Q19.5 1 25 7" stroke="rgba(255,255,255,0.7)" stroke-width="1.3" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="fbird">
                        <svg width="18" height="7" viewBox="0 0 18 7" fill="none">
                            <path d="M1 5 Q4.5 1 9 3.5 Q13.5 1 17 5" stroke="rgba(255,255,255,0.55)" stroke-width="1.1" fill="none" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Stats -->
        <aside class="stats-panel" aria-label="Statistics">

            <div class="stat-card">
                <div class="stat-icon">&#9825;</div>
                <div class="stat-number">15+</div>
                <div class="stat-label">Licensed<br>Therapists</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <!-- People SVG icon -->
                    <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="6" r="5" stroke="rgba(255,255,255,0.85)" stroke-width="1.6" fill="none"/>
                        <path d="M6 21 C6 14 26 14 26 21" stroke="rgba(255,255,255,0.85)" stroke-width="1.6" fill="none" stroke-linecap="round"/>
                        <circle cx="5" cy="7" r="4" stroke="rgba(255,255,255,0.6)" stroke-width="1.4" fill="none"/>
                        <path d="M1 21 C1 16 10 16 10 20" stroke="rgba(255,255,255,0.6)" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                        <circle cx="27" cy="7" r="4" stroke="rgba(255,255,255,0.6)" stroke-width="1.4" fill="none"/>
                        <path d="M22 20 C22 16 31 16 31 21" stroke="rgba(255,255,255,0.6)" stroke-width="1.4" fill="none" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="stat-number">1,200+</div>
                <div class="stat-label">Clients Supported</div>
            </div>

            <div class="stat-card" style="position:relative;">
                <div class="stat-stars">&#9733;&#9733;&#9733;</div>
                <div class="stat-number">4.9</div>
                <div class="stat-label">Average Client<br>Rating</div>
                <span class="sparkle" aria-hidden="true">&#10022;</span>
            </div>

        </aside>

    </section>
</main>

<script>
    // Smooth nav link behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // Entrance animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.stat-card, .hero-text').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.7s ease, transform 0.7s ease';
        observer.observe(el);
    });

    // Staggered entrance
    setTimeout(() => {
        document.querySelector('.hero-text').style.opacity = '1';
        document.querySelector('.hero-text').style.transform = 'translateY(0)';
    }, 100);

    document.querySelectorAll('.stat-card').forEach((card, i) => {
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 200 + i * 150);
    });
</script>


<!-- ABOUT THERAWELL -->
<section class="tw-intro">
    <div class="tw-intro-inner">
        <div class="tw-intro-badge"><span class="tw-intro-dot"></span>About Therawell</div>
        <p class="tw-intro-text">Therawell was created as a space for healing, reflection, and meaningful growth. We believe well-being goes beyond symptom relief. It's about building resilience, self-awareness, and sustainable balance. Our integrative approach supports emotional clarity and personal transformation at every stage of life.</p>
    </div>
</section>

<!-- OUR COMMITMENT -->
<section class="tw-commitment">
    <div class="tw-commit-header">
        <h2 class="tw-commit-title">Our Commitment to<br>Your Well-Being</h2>
        <p class="tw-commit-sub">Core principles that guide every session, conversation, and healing journey.</p>
    </div>
    <div class="tw-cards-row tw-row-2">
        <div class="tw-card">
            <div class="tw-card-content"><h3 class="tw-card-title">Balance</h3><p class="tw-card-desc">Supporting mind, body, and emotional harmony.</p></div>
            <div class="tw-card-img"><img src="{{ asset('images/balance.png') }}" alt="Balance"></div>
        </div>
        <div class="tw-card">
            <div class="tw-card-content"><h3 class="tw-card-title">Integrity</h3><p class="tw-card-desc">Professional care grounded in ethical practice.</p></div>
            <div class="tw-card-img"><img src="{{ asset('images/integrity.png') }}" alt="Integrity"></div>
        </div>
    </div>
    <div class="tw-cards-row tw-row-3">
        <div class="tw-card">
            <div class="tw-card-content"><h3 class="tw-card-title">Compassion</h3><p class="tw-card-desc">We meet every story with empathy, respect, and openness.</p></div>
            <div class="tw-card-img tw-card-img-sm"><img src="{{ asset('images/compassion.png') }}" alt="Compassion"></div>
        </div>
        <div class="tw-card">
            <div class="tw-card-content"><h3 class="tw-card-title">Growth</h3><p class="tw-card-desc">We focus on long-term emotional resilience and clarity.</p></div>
            <div class="tw-card-img tw-card-img-sm"><img src="{{ asset('images/growth.png') }}" alt="Growth"></div>
        </div>
        <div class="tw-card">
            <div class="tw-card-content"><h3 class="tw-card-title">Empowerment</h3><p class="tw-card-desc">Helping you build confidence and self-trust, at your own pace.</p></div>
            <div class="tw-card-img tw-card-img-sm"><img src="{{ asset('images/empowerment.png') }}" alt="Empowerment"></div>
        </div>
    </div>
</section>

<style>
.tw-intro{background:#f5efe8;padding:80px 72px;text-align:center}
.tw-intro-inner{max-width:640px;margin:0 auto}
.tw-intro-badge{display:inline-flex;align-items:center;gap:9px;font-family:'Inter',sans-serif;font-size:.78rem;color:#555;letter-spacing:.05em;margin-bottom:26px}
.tw-intro-dot{width:8px;height:8px;border-radius:50%;background:#c4637a;flex-shrink:0}
.tw-intro-text{font-family:'Cormorant Garamond',serif;font-size:1.22rem;line-height:1.82;color:#2a2a2a;font-weight:400}
.tw-commitment{background:#f5efe8;padding:0 72px 88px;border-top:1px solid rgba(0,0,0,.08)}
.tw-commit-header{display:flex;justify-content:space-between;align-items:flex-end;gap:48px;padding:60px 0 44px}
.tw-commit-title{font-family:'Cormorant Garamond',serif;font-size:clamp(1.9rem,3.2vw,2.75rem);font-weight:300;color:#1a1a1a;line-height:1.18;flex-shrink:0}
.tw-commit-sub{font-family:'Inter',sans-serif;font-size:.84rem;color:#777;line-height:1.72;max-width:280px;text-align:right}
.tw-cards-row{display:grid;gap:16px;margin-bottom:16px}
.tw-row-2{grid-template-columns:1fr 1fr}
.tw-row-3{grid-template-columns:1fr 1fr 1fr}
.tw-card{background:#fdfaf6;border:1px solid rgba(0,0,0,.07);border-radius:20px;padding:30px 28px;display:flex;justify-content:space-between;align-items:flex-end;gap:16px;overflow:hidden;transition:transform .28s ease,box-shadow .28s ease,background .28s ease}
.tw-card:hover{transform:translateY(-5px);box-shadow:0 14px 40px rgba(0,0,0,.08);background:#fff}
.tw-card-content{display:flex;flex-direction:column;justify-content:space-between;min-height:130px;flex:1}
.tw-card-title{font-family:'Cormorant Garamond',serif;font-size:1.38rem;font-weight:400;color:#1a1a1a}
.tw-card-desc{font-family:'Inter',sans-serif;font-size:.8rem;color:#888;line-height:1.65;margin-top:auto;padding-top:36px}
.tw-card-img{flex-shrink:0;display:flex;align-items:flex-end;justify-content:flex-end}
.tw-card-img img{width:140px;height:140px;object-fit:contain;display:block;transition:transform .3s ease}
.tw-card:hover .tw-card-img img{transform:scale(1.05)}
.tw-card-img-sm img{width:110px;height:110px}
@media(max-width:900px){.tw-intro{padding:60px 32px}.tw-commitment{padding:0 32px 64px}.tw-commit-header{flex-direction:column;align-items:flex-start;gap:12px}.tw-commit-sub{text-align:left;max-width:100%}.tw-row-3{grid-template-columns:1fr 1fr}}
@media(max-width:560px){.tw-intro{padding:48px 20px}.tw-commitment{padding:0 20px 48px}.tw-row-2,.tw-row-3{grid-template-columns:1fr}.tw-card-img img{width:100px;height:100px}.tw-card-img-sm img{width:85px;height:85px}}
</style>

<!-- HEALING & GROWTH SECTION -->
<section class="hg-section">
    <div class="hg-inner">

        <!-- Left Column -->
        <div class="hg-left">
            <div class="hg-text">
                <h2 class="hg-heading">Healing &amp; Growth</h2>
                <p class="hg-desc">Supportive sessions designed to nurture clarity, resilience, and lasting well-being.</p>
                <a href="/services" class="hg-btn">View More Services</a>
            </div>
            <div class="hg-hero-img">
                <img src="{{ asset('images/healing.png') }}" alt="Peaceful nature scene" class="hg-hero-photo">
               
            </div>
        </div>

        <!-- Right Column -->
        <div class="hg-right">

            <!-- Item 01 -->
            <div class="hg-item">
                <span class="hg-num">01</span>
                <div class="hg-thumb">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=300&q=80&auto=format&fit=crop" alt="Personal Growth Sessions">
                </div>
                <div class="hg-info">
                    <h3 class="hg-title">Personal Growth<br>Sessions</h3>
                    <p class="hg-item-desc">Guided and personalized sessions to deepen self-awareness and emotional clarity.</p>
                </div>
                <div class="hg-meta">
                    <div class="hg-duration"><span class="hg-clock">?</span> 60 Minutes</div>
                    <div class="hg-tags"><span class="hg-tag">Anxiety</span><span class="hg-tag">Self-Discovery</span></div>
                </div>
            </div>

            <div class="hg-divider"></div>

            <!-- Item 02 -->
            <div class="hg-item">
                <span class="hg-num">02</span>
                <div class="hg-thumb">
                    <img src="https://images.unsplash.com/photo-1516062423079-7ca13cdc7f5a?w=300&q=80&auto=format&fit=crop" alt="Relationship Growth Sessions">
                </div>
                <div class="hg-info">
                    <h3 class="hg-title">Relationship Growth<br>Sessions</h3>
                    <p class="hg-item-desc">Strengthen emotional bonds and build healthier relationship patterns.</p>
                </div>
                <div class="hg-meta">
                    <div class="hg-duration"><span class="hg-clock">?</span> 75 Minutes</div>
                    <div class="hg-tags"><span class="hg-tag">Communication</span><span class="hg-tag">Trust</span></div>
                </div>
            </div>

            <div class="hg-divider"></div>

            <!-- Item 03 -->
            <div class="hg-item">
                <span class="hg-num">03</span>
                <div class="hg-thumb">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=300&q=80&auto=format&fit=crop" alt="Mindfulness & Resilience Program">
                </div>
                <div class="hg-info">
                    <h3 class="hg-title">Mindfulness &amp; Resilience<br>Program</h3>
                    <p class="hg-item-desc">Practical tools and mindful practices to restore balance and energy.</p>
                </div>
                <div class="hg-meta">
                    <div class="hg-duration"><span class="hg-clock">?</span> 6 Weeks</div>
                    <div class="hg-tags"><span class="hg-tag">Stress</span><span class="hg-tag">Overwhelm</span></div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* --- Healing & Growth Section -------------------- */
.hg-section {
    background: #f5efe8;
    padding: 80px 72px;
    border-top: 1px solid rgba(0,0,0,.07);
}
.hg-inner {
    display: grid;
    grid-template-columns: 1fr 1.7fr;
    gap: 64px;
    align-items: start;
    max-width: 1200px;
    margin: 0 auto;
}

/* - Left - */
.hg-left { display: flex; flex-direction: column; gap: 36px; }
.hg-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(2rem, 3.5vw, 3rem);
    font-weight: 300; color: #1a1a1a; line-height: 1.15;
    margin-bottom: 14px;
}
.hg-desc {
    font-family: 'Inter', sans-serif;
    font-size: .85rem; color: #777; line-height: 1.7;
    max-width: 240px; margin-bottom: 24px;
}
.hg-btn {
    display: inline-flex; align-items: center;
    background: #1a1a1a; color: #fff;
    font-family: 'Inter', sans-serif;
    font-size: .82rem; font-weight: 500; letter-spacing: .04em;
    padding: 12px 24px; border-radius: 50px;
    border: none; cursor: pointer;
    box-shadow: 0 4px 16px rgba(0,0,0,.18);
    transition: box-shadow .28s ease, transform .28s ease, background .28s ease;
    text-decoration: none;
}
.hg-btn:hover {
    background: #2d5a32;
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(45,90,50,.35);
}

/* - Hero image - */
.hg-hero-img {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    aspect-ratio: 1 / 1;
    max-width: 240px;
}
.hg-hero-photo {
    width: 100%; height: 100%;
    object-fit: cover;
    filter: brightness(.88) saturate(.85);
    transition: transform .4s ease;
}
.hg-hero-img:hover .hg-hero-photo { transform: scale(1.04); }
.hg-overlay-art {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    pointer-events: none;
}

/* - Right - */
.hg-right { display: flex; flex-direction: column; }
.hg-divider {
    height: 1px;
    background: rgba(0,0,0,.08);
    margin: 0;
}

/* - Service item - */
.hg-item {
    display: grid;
    grid-template-columns: 40px 100px 1fr auto;
    gap: 20px;
    align-items: center;
    padding: 28px 0;
    transition: background .25s;
    border-radius: 12px;
}
.hg-item:hover { background: rgba(255,255,255,.55); padding-left: 10px; padding-right: 10px; margin: 0 -10px; }

/* Number badge */
.hg-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.05rem; color: #aaa; font-weight: 300;
    text-align: center;
}

/* Thumbnail */
.hg-thumb {
    width: 100px; height: 100px;
    border-radius: 14px; overflow: hidden; flex-shrink: 0;
}
.hg-thumb img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform .35s ease;
}
.hg-item:hover .hg-thumb img { transform: scale(1.07); }

/* Content */
.hg-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.18rem; font-weight: 400; color: #1a1a1a;
    line-height: 1.25; margin-bottom: 8px;
}
.hg-item-desc {
    font-family: 'Inter', sans-serif;
    font-size: .78rem; color: #999; line-height: 1.65; margin: 0;
}

/* Meta */
.hg-meta { display: flex; flex-direction: column; align-items: flex-end; gap: 10px; min-width: 120px; }
.hg-duration {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(0,0,0,.05); border: 1px solid rgba(0,0,0,.09);
    border-radius: 50px; padding: 5px 13px;
    font-family: 'Inter', sans-serif; font-size: .72rem; color: #666;
    white-space: nowrap;
}
.hg-clock { font-size: .85rem; }
.hg-tags { display: flex; flex-direction: column; align-items: flex-end; gap: 5px; }
.hg-tag {
    display: inline-block;
    background: transparent;
    border: 1px solid rgba(0,0,0,.12);
    border-radius: 50px; padding: 3px 12px;
    font-family: 'Inter', sans-serif; font-size: .7rem; color: #888;
}

/* - Responsive ------------------------------------ */
@media (max-width: 960px) {
    .hg-section { padding: 60px 32px; }
    .hg-inner { grid-template-columns: 1fr; gap: 40px; }
    .hg-left { flex-direction: row; flex-wrap: wrap; align-items: flex-start; }
    .hg-text { flex: 1; min-width: 200px; }
    .hg-hero-img { max-width: 200px; }
}
@media (max-width: 640px) {
    .hg-section { padding: 48px 20px; }
    .hg-left { flex-direction: column; }
    .hg-hero-img { max-width: 100%; }
    .hg-item { grid-template-columns: 32px 80px 1fr; grid-template-rows: auto auto; }
    .hg-meta { grid-column: 2 / 4; flex-direction: row; align-items: center; flex-wrap: wrap; }
    .hg-tags { flex-direction: row; }
}
</style>

<!-- FAQ + BLOG SECTIONS -->
<section class="faq-section">
    <div class="faq-inner">

        <!-- Left -->
        <div class="faq-left">
            <h2 class="faq-heading">Answers to Common Questions</h2>
            <div class="faq-cats">
                <button class="faq-cat" onclick="filterFaq('therapy-sessions',this)">Therapy &amp; Sessions</button>
                <button class="faq-cat active" onclick="filterFaq('therapy-care',this)">Therapy &amp; Care</button>
                <button class="faq-cat" onclick="filterFaq('wellness',this)">Wellness &amp; Practical Info</button>
            </div>
        </div>

        <!-- Right: accordion -->
        <div class="faq-right">
            <div class="faq-list" id="faq-list">

                <div class="faq-item" data-cat="therapy-care">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>Who are your therapists?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>Our therapists are fully licensed, trained mental health professionals with expertise across a range of therapeutic modalities including CBT, mindfulness, and integrative approaches.</p>
                    </div>
                </div>

                <div class="faq-item faq-open" data-cat="therapy-care">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>How are therapists matched with clients?</span>
                        <span class="faq-icon">-</span>
                    </button>
                    <div class="faq-a" style="max-height:200px">
                        <p>We consider your goals, preferences, and areas of concern to recommend a therapist who aligns with your needs.</p>
                    </div>
                </div>

                <div class="faq-item" data-cat="therapy-care">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>Can I switch therapists if needed?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>Absolutely. Your comfort is our priority. You can request a therapist change at any time with no additional fees.</p>
                    </div>
                </div>

                <div class="faq-item" data-cat="therapy-sessions">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>What therapy approaches do you use?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>We use evidence-based approaches including Cognitive Behavioural Therapy (CBT), Acceptance and Commitment Therapy (ACT), somatic work, and mindfulness-based interventions.</p>
                    </div>
                </div>

                <div class="faq-item" data-cat="therapy-care">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>Are your therapists licensed and certified?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>Yes. All Therawell therapists hold valid professional licenses and undergo continuous education to maintain the highest standards of care.</p>
                    </div>
                </div>

                <div class="faq-item" data-cat="wellness">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>How long are therapy sessions?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>Standard sessions are 50�60 minutes. Extended sessions (75�90 minutes) are available for certain programs and couples therapy.</p>
                    </div>
                </div>

                <div class="faq-item" data-cat="wellness">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        <span>Is everything I share kept confidential?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-a">
                        <p>Yes. All sessions are strictly confidential and protected under professional ethics and applicable privacy laws.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- INSIGHTS / BLOG SECTION -->
<section class="blog-section">
    <div class="blog-header">
        <h2 class="blog-heading">Insights for Mindful Living</h2>
        <p class="blog-sub">Articles and resources to support your mental and emotional well-being.</p>
    </div>
    <div class="blog-grid">

        <article class="blog-card">
            <div class="blog-img-wrap">
                <img src="https://images.unsplash.com/photo-1517960413843-0aee8e2b3285?w=600&q=80&auto=format&fit=crop" alt="Anxiety article">
            </div>
            <div class="blog-body">
                <time class="blog-date">May 12, 2030</time>
                <h3 class="blog-title">Understanding Anxiety Triggers and How to Manage Them</h3>
                <a href="#" class="blog-read">Read More</a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-img-wrap">
                <img src="https://images.unsplash.com/photo-1474552226712-ac0f0961a954?w=600&q=80&auto=format&fit=crop" alt="Relationships article">
            </div>
            <div class="blog-body">
                <time class="blog-date">May 4, 2030</time>
                <h3 class="blog-title">Building Healthy Communication in Relationships</h3>
                <a href="#" class="blog-read">Read More</a>
            </div>
        </article>

        <article class="blog-card">
            <div class="blog-img-wrap">
                <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=600&q=80&auto=format&fit=crop" alt="Mindfulness article">
            </div>
            <div class="blog-body">
                <time class="blog-date">April 26, 2030</time>
                <h3 class="blog-title">The Power of Mindfulness in Daily Life and Mental Well-Being</h3>
                <a href="#" class="blog-read">Read More</a>
            </div>
        </article>

    </div>
</section>

<style>
/* -- FAQ Section ----------------------------------- */
.faq-section {
    background: #f5efe8;
    padding: 88px 72px;
    border-top: 1px solid rgba(0,0,0,.08);
}
.faq-inner {
    display: grid;
    grid-template-columns: 1fr 1.6fr;
    gap: 64px;
    max-width: 1200px;
    margin: 0 auto;
    align-items: start;
}
.faq-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.7rem, 3vw, 2.6rem);
    font-weight: 300; color: #1a1a1a; line-height: 1.2;
    margin-bottom: 32px;
}
.faq-cats {
    display: flex; flex-direction: column; gap: 10px; align-items: flex-start;
}
.faq-cat {
    background: transparent;
    border: 1px solid rgba(0,0,0,.14);
    border-radius: 50px;
    padding: 8px 20px;
    font-family: 'Inter', sans-serif;
    font-size: .78rem; color: #666; cursor: pointer;
    transition: background .25s, color .25s, border-color .25s;
    text-align: left;
}
.faq-cat:hover { background: rgba(0,0,0,.05); color: #1a1a1a; }
.faq-cat.active { background: #1a1a1a; color: #fff; border-color: #1a1a1a; }

/* Accordion */
.faq-list { display: flex; flex-direction: column; }
.faq-item { border-bottom: 1px solid rgba(0,0,0,.08); }
.faq-q {
    width: 100%; display: flex; justify-content: space-between; align-items: center;
    gap: 16px; padding: 20px 4px;
    background: transparent; border: none; cursor: pointer;
    font-family: 'Inter', sans-serif; font-size: .88rem;
    color: #1a1a1a; text-align: left;
    transition: color .2s;
}
.faq-q:hover { color: #2d5a32; }
.faq-icon {
    font-size: 1.2rem; color: #999; flex-shrink: 0;
    font-weight: 300; width: 20px; text-align: center;
    transition: color .2s;
}
.faq-item.faq-open .faq-icon { color: #1a1a1a; }
.faq-a {
    max-height: 0; overflow: hidden;
    transition: max-height .35s ease, padding .35s ease;
}
.faq-a p {
    font-family: 'Inter', sans-serif;
    font-size: .82rem; color: #888; line-height: 1.72;
    padding: 0 4px 18px;
}

/* -- Blog Section ---------------------------------- */
.blog-section {
    background: #f5efe8;
    padding: 80px 72px 96px;
    border-top: 1px solid rgba(0,0,0,.07);
}
.blog-header {
    display: flex; justify-content: space-between; align-items: flex-end;
    gap: 40px; margin-bottom: 44px;
    max-width: 1200px; margin-left: auto; margin-right: auto;
}
.blog-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.8rem, 3vw, 2.6rem);
    font-weight: 300; color: #1a1a1a; line-height: 1.18;
}
.blog-sub {
    font-family: 'Inter', sans-serif;
    font-size: .84rem; color: #888; line-height: 1.68;
    max-width: 260px; text-align: right;
}
.blog-grid {
    display: grid; grid-template-columns: repeat(3,1fr);
    gap: 24px; max-width: 1200px; margin: 0 auto;
}

/* Card */
.blog-card {
    background: transparent;
    border-radius: 16px; overflow: hidden;
    display: flex; flex-direction: column;
    transition: transform .28s ease, box-shadow .28s ease;
}
.blog-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,.09); }
.blog-img-wrap {
    border-radius: 14px; overflow: hidden;
    aspect-ratio: 4 / 3;
}
.blog-img-wrap img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .4s ease;
    display: block;
}
.blog-card:hover .blog-img-wrap img { transform: scale(1.06); }
.blog-body { padding: 18px 2px 8px; }
.blog-date {
    display: block;
    font-family: 'Inter', sans-serif;
    font-size: .72rem; color: #aaa; margin-bottom: 10px; letter-spacing: .03em;
}
.blog-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem; font-weight: 400; color: #1a1a1a;
    line-height: 1.4; margin-bottom: 14px;
}
.blog-read {
    font-family: 'Inter', sans-serif;
    font-size: .78rem; color: #555;
    text-decoration: none; letter-spacing: .03em;
    border-bottom: 1px solid rgba(0,0,0,.18); padding-bottom: 1px;
    transition: color .2s, border-color .2s;
}
.blog-read:hover { color: #2d5a32; border-color: #2d5a32; }

/* Responsive */
@media (max-width: 900px) {
    .faq-section, .blog-section { padding: 60px 32px; }
    .faq-inner { grid-template-columns: 1fr; gap: 32px; }
    .faq-cats { flex-direction: row; flex-wrap: wrap; }
    .blog-header { flex-direction: column; align-items: flex-start; gap: 10px; }
    .blog-sub { text-align: left; }
    .blog-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
    .faq-section, .blog-section { padding: 48px 20px; }
    .blog-grid { grid-template-columns: 1fr; }
}
</style>

<script>
function toggleFaq(btn) {
    var item = btn.closest('.faq-item');
    var answer = item.querySelector('.faq-a');
    var icon = item.querySelector('.faq-icon');
    var isOpen = item.classList.contains('faq-open');
    // Close all
    document.querySelectorAll('.faq-item.faq-open').forEach(function(el) {
        el.classList.remove('faq-open');
        el.querySelector('.faq-a').style.maxHeight = '0';
        el.querySelector('.faq-icon').textContent = '+';
    });
    if (!isOpen) {
        item.classList.add('faq-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
        icon.textContent = '-';
    }
}
function filterFaq(cat, btn) {
    document.querySelectorAll('.faq-cat').forEach(function(b){ b.classList.remove('active'); });
    btn.classList.add('active');
    document.querySelectorAll('.faq-item').forEach(function(item) {
        item.style.display = item.dataset.cat === cat ? '' : 'none';
    });
    // Close all open on filter change
    document.querySelectorAll('.faq-item.faq-open').forEach(function(el) {
        el.classList.remove('faq-open');
        el.querySelector('.faq-a').style.maxHeight = '0';
        el.querySelector('.faq-icon').textContent = '+';
    });
}
// Init: show only active category
(function(){
    document.querySelectorAll('.faq-item').forEach(function(item) {
        if(item.dataset.cat !== 'therapy-care') item.style.display = 'none';
    });
    // Open second item by default
    var second = document.querySelectorAll('.faq-item[data-cat="therapy-care"]')[1];
    if(second){ second.classList.add('faq-open'); var a=second.querySelector('.faq-a'); a.style.maxHeight=a.scrollHeight+'px'; second.querySelector('.faq-icon').textContent='-'; }
})();
</script>

<!-- YOUR HEALING JOURNEY -->
<section class="jhny-section">
    <div class="jhny-header">
        <h2 class="jhny-heading">Your Healing Journey</h2>
        <p class="jhny-sub">A supportive and simple path toward personal growth and balance.</p>
    </div>

    <div class="jhny-steps-wrap">
        <!-- Connecting line -->
        <div class="jhny-line" aria-hidden="true"></div>

        <div class="jhny-steps">

            <!-- Step 01 -->
            <div class="jhny-step">
                <div class="jhny-num-wrap">
                    <span class="jhny-num">01</span>
                </div>
                <div class="jhny-img-box">
                    <img src="/images/step1.png" alt="Book a Clarity Call">
                </div>
                <h3 class="jhny-title">Book a Clarity Call</h3>
                <p class="jhny-desc">Schedule your session at your preferred time.</p>
            </div>

            <!-- Step 02 -->
            <div class="jhny-step">
                <div class="jhny-num-wrap">
                    <span class="jhny-num">02</span>
                </div>
                <div class="jhny-img-box">
                    <img src="/images/step2.png" alt="Explore Your Goals">
                </div>
                <h3 class="jhny-title">Explore Your Goals</h3>
                <p class="jhny-desc">Share your story, goals, and challenges openly.</p>
            </div>

            <!-- Step 03 -->
            <div class="jhny-step">
                <div class="jhny-num-wrap">
                    <span class="jhny-num">03</span>
                </div>
                <div class="jhny-img-box">
                    <img src="/images/step3.png" alt="Create a Personalized Plan">
                </div>
                <h3 class="jhny-title">Create a Personalized Plan</h3>
                <p class="jhny-desc">Build a tailored path for healing and growth.</p>
            </div>

            <!-- Step 04 -->
            <div class="jhny-step">
                <div class="jhny-num-wrap">
                    <span class="jhny-num">04</span>
                </div>
                <div class="jhny-img-box">
                    <img src="/images/step4.png" alt="Grow with Ongoing Support">
                </div>
                <h3 class="jhny-title">Grow with Ongoing Support</h3>
                <p class="jhny-desc">Receive consistent guidance toward lasting balance.</p>
            </div>

        </div>
    </div>
</section>

<style>
/* -- Your Healing Journey --------------------------- */
.jhny-section {
    background: #f5efe8;
    padding: 88px 72px 96px;
    border-top: 1px solid rgba(0,0,0,.08);
}

/* Header */
.jhny-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 48px;
    margin-bottom: 64px;
    max-width: 1200px;
    margin-left: auto; margin-right: auto;
    margin-bottom: 64px;
}
.jhny-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.9rem, 3.5vw, 3rem);
    font-weight: 300; color: #1a1a1a; line-height: 1.15;
    flex-shrink: 0;
}
.jhny-sub {
    font-family: 'Inter', sans-serif;
    font-size: .84rem; color: #888; line-height: 1.7;
    max-width: 280px; text-align: right;
}

/* Steps wrapper � positions the connecting line */
.jhny-steps-wrap {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* Horizontal connecting line across top of steps */
.jhny-line {
    position: absolute;
    top: 20px; /* aligns with centre of number badge */
    left: calc(12.5% - 10px);
    right: calc(12.5% - 10px);
    height: 1px;
    background: rgba(0,0,0,.12);
    z-index: 0;
}

/* Steps grid */
.jhny-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    position: relative;
    z-index: 1;
}

/* Individual step */
.jhny-step {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 0 8px;
    transition: transform .28s ease, box-shadow .28s ease;
}
.jhny-step:hover { transform: translateY(-6px); box-shadow: 0 8px 24px rgba(0,0,0,.07); border-radius: 16px; }

/* Number badge */
.jhny-num-wrap {
    width: 40px; height: 40px;
    border-radius: 50%;
    background: #fdfaf6;
    border: 1px solid rgba(0,0,0,.12);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 28px;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0,0,0,.06);
}
.jhny-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: .9rem; font-weight: 400; color: #888;
    line-height: 1;
}

/* Image container � fixed size, uniform for all steps */
.jhny-img-box {
    width: 180px;
    height: 180px;
    flex-shrink: 0;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 28px;
    background: #fdfaf6;
    border: 1px solid rgba(0,0,0,.07);
    box-shadow: 0 4px 16px rgba(0,0,0,.05);
    display: flex;
    align-items: center;
    justify-content: center;
}
.jhny-img-box img {
    width: 140px;
    height: 140px;
    object-fit: contain;
    display: block;
    flex-shrink: 0;
    transition: transform .35s ease;
}
.jhny-step:hover .jhny-img-box img { transform: scale(1.06); }

/* Text */
.jhny-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.18rem; font-weight: 400; color: #1a1a1a;
    line-height: 1.3; margin-bottom: 10px;
}
.jhny-desc {
    font-family: 'Inter', sans-serif;
    font-size: .78rem; color: #999; line-height: 1.65;
    margin: 0;
}

/* -- Responsive ------------------------------------- */
@media (max-width: 900px) {
    .jhny-section { padding: 60px 32px 72px; }
    .jhny-header { flex-direction: column; align-items: flex-start; gap: 12px; }
    .jhny-sub { text-align: left; max-width: 100%; }
    .jhny-steps { grid-template-columns: 1fr 1fr; gap: 40px 24px; }
    .jhny-line { display: none; }
}
@media (max-width: 560px) {
    .jhny-section { padding: 48px 20px 64px; }
    .jhny-steps { grid-template-columns: 1fr; gap: 40px; }
    .jhny-img-box { width: 140px; height: 140px; } .jhny-img-box img { width: 110px; height: 110px; }
}


<script>
(function () {
    var accordion = document.getElementById('faq-accordion');
    function closeAll() {
        accordion.querySelectorAll('.faq-item.open').forEach(function(item) {
            item.classList.remove('open');
            item.querySelector('.faq-answer').style.maxHeight = null;
            item.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        });
    }
    accordion.addEventListener('click', function (e) {
        var question = e.target.closest('.faq-question');
        if (!question) return;
        var item = question.closest('.faq-item');
        var answer = item.querySelector('.faq-answer');
        var isOpen = item.classList.contains('open');
        closeAll();
        if (!isOpen) {
            item.classList.add('open');
            answer.style.maxHeight = answer.scrollHeight + 'px';
            question.setAttribute('aria-expanded', 'true');
        }
    });
    accordion.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            var question = e.target.closest('.faq-question');
            if (question) { e.preventDefault(); question.click(); }
        }
    });
    document.querySelectorAll('.faq-filter-btn').forEach(function(btn) {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.faq-filter-btn').forEach(function(b) { b.classList.remove('active'); });
            btn.classList.add('active');
            var cat = btn.dataset.category;
            closeAll();
            accordion.querySelectorAll('.faq-item').forEach(function(item) {
                item.style.display = item.dataset.category === cat ? '' : 'none';
            });
        });
    });
}());
</script>

<!-- ══════════════════════════════════════════════════════════════
     THERAWELL FOOTER
     ══════════════════════════════════════════════════════════════ -->
<style>
/* ── Footer Root ─────────────────────────────────────────────── */
/* Use !important + both background shorthand and background-color
   to guarantee the dark theme wins against any cream-colored
   parent/sibling sections in welcome.blade.php                   */
footer.tw-footer,
.tw-footer {
    background-color: #141c15 !important;
    background:       #141c15 !important;
    color: #fff !important;
    font-family: 'Inter', sans-serif;
    position: relative;
    overflow: hidden;
}

/* Subtle top gradient accent */
.tw-footer::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: linear-gradient(90deg,
        transparent 0%,
        rgba(122,158,126,0.6) 30%,
        rgba(168,197,171,0.8) 50%,
        rgba(122,158,126,0.6) 70%,
        transparent 100%);
}

/* Faint radial glow in top-left */
.tw-footer::after {
    content: '';
    position: absolute;
    top: -120px; left: -80px;
    width: 480px; height: 480px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(74,117,80,0.12) 0%, transparent 70%);
    pointer-events: none;
}

/* ── Main Grid ───────────────────────────────────────────────── */
.tw-footer-main {
    display: grid;
    grid-template-columns: 1.3fr 1fr 0.9fr 1fr 0.8fr;
    gap: 0;
    padding: 72px 56px 56px;
    max-width: 1360px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

/* Vertical separator between columns */
.tw-footer-col {
    padding: 0 40px;
    position: relative;
}
.tw-footer-col:first-child { padding-left: 0; }
.tw-footer-col:last-child  { padding-right: 0; }

.tw-footer-col:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 4px; right: 0;
    width: 1px;
    height: calc(100% - 8px);
    background: linear-gradient(to bottom,
        transparent 0%,
        rgba(255,255,255,0.09) 20%,
        rgba(255,255,255,0.09) 80%,
        transparent 100%);
}

/* ── Column Headings ─────────────────────────────────────────── */
.tw-fcol-label {
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(168,197,171,0.9);
    margin-bottom: 22px;
    display: block;
}

/* ── Col 1: Branding ─────────────────────────────────────────── */
.tw-footer-brand-heading {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.55rem;
    font-weight: 300;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 14px;
    letter-spacing: -0.01em;
}

.tw-footer-brand-desc {
    font-size: 0.8rem;
    color: rgba(255,255,255,0.45);
    line-height: 1.75;
    margin-bottom: 28px;
    max-width: 220px;
}

/* Logo word mark */
.tw-footer-logo {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.15rem;
    font-weight: 400;
    letter-spacing: 0.14em;
    color: rgba(255,255,255,0.88);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 24px;
}
.tw-footer-logo-dot {
    width: 6px; height: 6px;
    border-radius: 50%;
    background: #7a9e7e;
    display: inline-block;
    box-shadow: 0 0 6px rgba(122,158,126,0.7);
}

/* Social icons row */
.tw-footer-socials {
    display: flex;
    gap: 10px;
    margin-top: 4px;
}
.tw-social-btn {
    width: 34px; height: 34px;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,0.13);
    background: rgba(255,255,255,0.05);
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    transition: background 0.25s, border-color 0.25s, transform 0.2s;
    text-decoration: none;
    color: rgba(255,255,255,0.6);
}
.tw-social-btn:hover {
    background: rgba(122,158,126,0.22);
    border-color: rgba(122,158,126,0.55);
    color: #a8c5ab;
    transform: translateY(-2px);
}
.tw-social-btn svg { width: 14px; height: 14px; fill: currentColor; }

/* ── Col 2: Newsletter ───────────────────────────────────────── */
.tw-newsletter-form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-top: 2px;
}

.tw-newsletter-field-label {
    font-size: 0.7rem;
    font-weight: 500;
    letter-spacing: 0.08em;
    color: rgba(255,255,255,0.38);
    text-transform: uppercase;
    margin-bottom: 2px;
}

.tw-newsletter-input {
    width: 100%;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 10px;
    padding: 12px 16px;
    color: #fff;
    font-family: 'Inter', sans-serif;
    font-size: 0.82rem;
    outline: none;
    transition: border-color 0.25s, background 0.25s, box-shadow 0.25s;
    caret-color: #a8c5ab;
}
.tw-newsletter-input::placeholder { color: rgba(255,255,255,0.28); }
.tw-newsletter-input:focus {
    border-color: rgba(122,158,126,0.65);
    background: rgba(122,158,126,0.08);
    box-shadow: 0 0 0 3px rgba(122,158,126,0.12);
}

.tw-newsletter-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: rgba(255,255,255,0.92);
    color: #1a2c1b;
    font-family: 'Inter', sans-serif;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    padding: 12px 24px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background 0.25s, box-shadow 0.25s, transform 0.2s;
    width: 100%;
    margin-top: 4px;
}
.tw-newsletter-btn:hover {
    background: #fff;
    box-shadow: 0 6px 20px rgba(255,255,255,0.18);
    transform: translateY(-1px);
}
.tw-newsletter-btn svg { width: 14px; height: 14px; }

.tw-newsletter-note {
    font-size: 0.7rem;
    color: rgba(255,255,255,0.25);
    line-height: 1.6;
    margin-top: 2px;
}

/* ── Col 3: Quick Links ──────────────────────────────────────── */
.tw-footer-links {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 2px;
    margin-top: 2px;
}
.tw-footer-links li a {
    display: inline-block;
    color: rgba(255,255,255,0.55);
    text-decoration: none;
    font-size: 0.83rem;
    font-weight: 400;
    padding: 7px 0;
    letter-spacing: 0.01em;
    transition: color 0.22s, letter-spacing 0.22s;
    position: relative;
}
.tw-footer-links li a::after {
    content: '';
    position: absolute;
    bottom: 4px; left: 0;
    width: 0; height: 1px;
    background: rgba(168,197,171,0.7);
    transition: width 0.25s ease;
}
.tw-footer-links li a:hover {
    color: rgba(255,255,255,0.92);
    letter-spacing: 0.03em;
}
.tw-footer-links li a:hover::after { width: 100%; }

/* ── Col 4: Contact ──────────────────────────────────────────── */
.tw-contact-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 2px;
}
.tw-contact-item {}

.tw-contact-key {
    font-size: 0.67rem;
    font-weight: 500;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.3);
    display: block;
    margin-bottom: 4px;
}
.tw-contact-val {
    font-size: 0.83rem;
    color: rgba(255,255,255,0.78);
    line-height: 1.6;
    font-weight: 400;
}
.tw-contact-val a {
    color: inherit;
    text-decoration: none;
    transition: color 0.2s;
}
.tw-contact-val a:hover { color: #a8c5ab; }

/* ── Col 5: Legal ────────────────────────────────────────────── */
.tw-legal-links {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 2px;
    margin-top: 2px;
}
.tw-legal-links li a {
    display: inline-block;
    color: rgba(255,255,255,0.45);
    text-decoration: none;
    font-size: 0.81rem;
    padding: 7px 0;
    transition: color 0.22s;
}
.tw-legal-links li a:hover { color: rgba(255,255,255,0.85); }

/* ── Bottom Bar ──────────────────────────────────────────────── */
.tw-footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.06);
    padding: 20px 56px;
    max-width: 1360px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    position: relative;
    z-index: 1;
}
.tw-footer-copyright {
    font-size: 0.73rem;
    color: rgba(255,255,255,0.28);
    letter-spacing: 0.03em;
}
.tw-footer-bottom-links {
    display: flex;
    gap: 24px;
}
.tw-footer-bottom-links a {
    font-size: 0.73rem;
    color: rgba(255,255,255,0.28);
    text-decoration: none;
    transition: color 0.2s;
}
.tw-footer-bottom-links a:hover { color: rgba(255,255,255,0.65); }

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1100px) {
    .tw-footer-main {
        grid-template-columns: 1fr 1fr;
        gap: 48px 0;
        padding: 60px 40px 48px;
    }
    .tw-footer-col { padding: 0 28px; }
    .tw-footer-col:first-child { padding-left: 0; }
    .tw-footer-col:nth-child(2) { padding-right: 0; }
    .tw-footer-col:nth-child(3) { padding-left: 0; }
    .tw-footer-col:nth-child(4) { padding-right: 0; }
    .tw-footer-col:nth-child(5) { padding-left: 0; grid-column: 1 / -1; }

    /* Remove vertical separators on tablet */
    .tw-footer-col::after { display: none; }
    /* Add subtle horizontal line between row groups */
    .tw-footer-col:nth-child(3) { border-top: 1px solid rgba(255,255,255,0.06); padding-top: 40px; }
}

@media (max-width: 680px) {
    .tw-footer-main {
        grid-template-columns: 1fr;
        padding: 48px 24px 40px;
    }
    .tw-footer-col { padding: 0 !important; }
    .tw-footer-col:not(:first-child) {
        border-top: 1px solid rgba(255,255,255,0.06);
        padding-top: 36px !important;
        margin-top: 8px;
    }
    .tw-footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 12px;
        padding: 20px 24px;
    }
}
</style>

<footer class="tw-footer" role="contentinfo" aria-label="Site footer" style="background-color:#141c15!important;background:#141c15!important;color:#fff!important;">
    <div class="tw-footer-main">

        <!-- ── Col 1: Branding ── -->
        <div class="tw-footer-col">
            <div class="tw-footer-logo">
                <span class="tw-footer-logo-dot"></span>
                therawell
            </div>
            <h2 class="tw-footer-brand-heading">Stay Connected with Your Wellness Journey</h2>
            <p class="tw-footer-brand-desc">Receive practical tips, mental health insights, and program updates directly to your inbox.</p>

            <div class="tw-footer-socials">
                <!-- Instagram -->
                <a href="#" class="tw-social-btn" aria-label="Instagram" id="footer-instagram">
                    <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <!-- Twitter / X -->
                <a href="#" class="tw-social-btn" aria-label="Twitter" id="footer-twitter">
                    <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <!-- Facebook -->
                <a href="#" class="tw-social-btn" aria-label="Facebook" id="footer-facebook">
                    <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <!-- LinkedIn -->
                <a href="#" class="tw-social-btn" aria-label="LinkedIn" id="footer-linkedin">
                    <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>

        <!-- ── Col 2: Newsletter ── -->
        <div class="tw-footer-col">
            <span class="tw-fcol-label">Newsletter</span>
            <div class="tw-newsletter-form">
                <div>
                    <div class="tw-newsletter-field-label">Email</div>
                    <input
                        type="email"
                        id="footer-newsletter-email"
                        class="tw-newsletter-input"
                        placeholder="Email Address"
                        aria-label="Email address for newsletter"
                    >
                </div>
                <button type="button" id="footer-subscribe-btn" class="tw-newsletter-btn">
                    Subscribe
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </button>
                <p class="tw-newsletter-note">No spam, ever. Unsubscribe at any time.</p>
            </div>
        </div>

        <!-- ── Col 3: Quick Links ── -->
        <div class="tw-footer-col">
            <span class="tw-fcol-label">Quick Links</span>
            <ul class="tw-footer-links">
                <li><a href="/about" id="footer-link-about">About Us</a></li>
                <li><a href="/services" id="footer-link-services">Services</a></li>
                <li><a href="/contact" id="footer-link-contact">Contact</a></li>
            </ul>
        </div>

        <!-- ── Col 4: Contact Info ── -->
        <div class="tw-footer-col">
            <span class="tw-fcol-label">Contact Info</span>
            <div class="tw-contact-items">
                <div class="tw-contact-item">
                    <span class="tw-contact-key">Phone</span>
                    <span class="tw-contact-val">
                        <a href="tel:+16045552874">8882599398</a>
                    </span>
                </div>
                <div class="tw-contact-item">
                    <span class="tw-contact-key">Email</span>
                    <span class="tw-contact-val">
                        <a href="mailto:therawell@gmail.com">therawell@gmail.com</a>
                    </span>
                </div>
                <div class="tw-contact-item">
                    <span class="tw-contact-key">Address</span>
                    <span class="tw-contact-val">New Lane,<br>Salt Lake, Kolkata, India</span>
                </div>
            </div>
        </div>

        <!-- ── Col 5: Legal ── -->
        <div class="tw-footer-col">
            <span class="tw-fcol-label">Legal</span>
            <ul class="tw-legal-links">
                <li><a href="/privacy-policy" id="footer-privacy">Privacy Policy</a></li>
                <li><a href="/terms" id="footer-terms">Terms &amp; Conditions</a></li>
            </ul>
        </div>

    </div><!-- /tw-footer-main -->

    <!-- Bottom bar -->
    <div class="tw-footer-bottom">
        <p class="tw-footer-copyright">© therawell 2035. All rights reserved.</p>
        <div class="tw-footer-bottom-links">
            <a href="/privacy-policy" id="footer-bottom-privacy">Privacy Policy</a>
            <a href="/terms" id="footer-bottom-terms">Terms &amp; Conditions</a>
            <a href="/sitemap" id="footer-bottom-sitemap">Sitemap</a>
        </div>
    </div>

</footer>

<script>
// Newsletter subscribe micro-interaction
(function () {
    var btn   = document.getElementById('footer-subscribe-btn');
    var input = document.getElementById('footer-newsletter-email');
    if (!btn || !input) return;

    btn.addEventListener('click', function () {
        var email = input.value.trim();
        var re    = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!re.test(email)) {
            input.style.borderColor = 'rgba(200,80,80,0.6)';
            input.focus();
            setTimeout(function () { input.style.borderColor = ''; }, 1800);
            return;
        }
        btn.textContent = 'Subscribed ✓';
        btn.style.background = 'rgba(122,158,126,0.35)';
        btn.style.color = '#c8dfc9';
        btn.style.border = '1px solid rgba(122,158,126,0.45)';
        input.value = '';
        setTimeout(function () {
            btn.innerHTML = 'Subscribe <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px"><path d="M4 10h12M10 4l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            btn.style.background = '';
            btn.style.color = '';
            btn.style.border = '';
        }, 3000);
    });

    // Press Enter in input = click subscribe
    input.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') btn.click();
    });
}());
</script>

</body>
</html>