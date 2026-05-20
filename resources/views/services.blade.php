<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Therawell Services – Healing and growth programs designed for your wellness journey.">
    <title>Services – thērawell</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* ─── Reset & Base ─────────────────────────────────── */
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --beige: #fcfaf6;
            --text-dark: #1a1a1a;
            --text-muted: #666666;
            --accent-dark: #1a1a1a;
            --white: #ffffff;
            --nav-bg: rgba(0, 0, 0, 0.04);
            --nav-active-bg: #ffffff;
            --glow-color: rgba(26, 26, 26, 0.2);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--beige);
            color: var(--text-dark);
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* ─── Header (Top Bar) ────────────────────────────── */
        header {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            padding: 32px 64px;
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
        }

        /* Navigation Menu */
        .nav-pills {
            display: flex;
            gap: 4px;
            background: var(--nav-bg);
            padding: 4px;
            border-radius: 50px;
            width: fit-content;
        }

        .nav-item {
            text-decoration: none;
            color: var(--text-muted);
            font-size: 0.85rem;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-item:hover {
            color: var(--text-dark);
            background: rgba(255, 255, 255, 0.5);
        }

        .nav-item.active {
            background: var(--nav-active-bg);
            color: var(--text-dark);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .active-dot {
            width: 4px;
            height: 4px;
            background-color: #4a7550;
            border-radius: 50%;
        }

        /* Brand Logo */
        .brand-logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            letter-spacing: 0.05em;
            color: var(--text-dark);
            font-weight: 400;
            text-align: center;
        }

        /* CTA Button */
        .header-cta {
            justify-self: end;
        }

        .btn-book {
            background: var(--accent-dark);
            color: var(--white);
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-book:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 8px 24px var(--glow-color);
        }

        /* ─── Hero Section ────────────────────────────────── */
        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            padding: 60px 64px 100px;
            max-width: 1440px;
            margin: 0 auto;
            gap: 60px;
        }

        .hero-content {
            max-width: 520px;
        }

        .hero-heading {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(3.5rem, 6vw, 5rem);
            font-weight: 500;
            line-height: 1.1;
            margin-bottom: 32px;
            color: var(--text-dark);
        }

        .hero-subtext {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--text-muted);
            max-width: 460px;
        }

        .hero-image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 40px;
        }

        .hero-image {
            width: 80%;
            max-width: 360px;
            height: auto;
            max-height: 400px;
            object-fit: contain;
            border-radius: 20px;
        }

        /* ─── Responsiveness ──────────────────────────────── */
        @media (max-width: 1024px) {
            header {
                padding: 24px 40px;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
            .brand-logo {
                grid-row: 1;
                grid-column: 1 / span 2;
                margin-bottom: 20px;
            }
            .nav-pills { grid-row: 2; grid-column: 1; }
            .header-cta { grid-row: 2; grid-column: 2; }

            .hero {
                padding: 40px 40px 80px;
                gap: 40px;
                grid-template-columns: 1fr 1fr;
            }
            .hero-heading {
                font-size: 3.2rem;
            }
            .hero-image-container {
                padding-right: 0;
            }
            .hero-image {
                max-width: 280px;
            }
        }

        @media (max-width: 768px) {
            header {
                display: flex;
                flex-direction: column;
                gap: 24px;
                padding: 24px 20px;
            }
            .nav-pills {
                order: 2;
                overflow-x: auto;
                max-width: 100%;
                padding: 4px 8px;
            }
            .brand-logo { order: 1; margin-bottom: 0; }
            .header-cta { order: 3; width: 100%; text-align: center; }
            .btn-book { display: block; width: 100%; }

            .hero {
                grid-template-columns: 1fr;
                padding: 20px 20px 60px;
                text-align: center;
                gap: 40px;
            }
            .hero-content {
                margin: 0 auto;
                order: 1;
            }
            .hero-image-container {
                order: 2;
                padding-right: 0;
            }
            .hero-image {
                width: 50%;
                max-width: 240px;
            }
            .hero-heading {
                font-size: 2.6rem;
                margin-bottom: 20px;
            }
            .hero-subtext {
                margin: 0 auto;
            }
        }

        /* ─── Our Services Section ─────────────────────────── */
        .services-section {
            padding: 120px 64px;
            max-width: 1440px;
            margin: 0 auto;
            background-color: var(--beige);
        }

        .services-header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: end;
            margin-bottom: 80px;
            gap: 40px;
        }

        .services-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(3rem, 5vw, 4.5rem);
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1;
        }

        .services-header-desc {
            max-width: 420px;
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.6;
            justify-self: end;
        }

        .services-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
        }

        .service-card {
            background: #fdfcf9; /* Slightly lighter than main beige */
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.02);
            transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
        }

        /* Layered Image Effect */
        .card-image-wrapper {
            position: relative;
            width: 100%;
            height: 340px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.02);
            border-radius: 16px;
        }

        .image-layer-bg {
            position: absolute;
            width: 240px;
            height: 240px;
            background: #e8e2d9;
            border-radius: 12px;
            transform: rotate(3deg) translate(12px, 8px);
            z-index: 1;
            opacity: 0.6;
            transition: all 0.5s ease;
        }

        .card-image {
            position: relative;
            z-index: 2;
            width: 240px;
            height: 240px;
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover .card-image {
            transform: scale(1.05);
        }
        
        .service-card:hover .image-layer-bg {
            transform: rotate(5deg) translate(15px, 10px);
        }

        /* Card Content */
        .card-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem;
            font-weight: 500;
            color: var(--text-dark);
            line-height: 1.2;
        }

        .duration-badge {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f1f1f1;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            color: var(--text-muted);
            font-weight: 500;
            white-space: nowrap;
        }

        .card-desc {
            color: var(--text-muted);
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .card-footer {
            margin-top: 12px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .issues-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #b0b0b0;
            font-weight: 600;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            background: #f8f8f8;
            border: 1px solid #eeeeee;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            color: #777;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: #eeeeee;
            color: var(--text-dark);
        }

        /* Responsive adjustments for services */
        @media (max-width: 1024px) {
            .services-section { padding: 100px 40px; }
            .services-grid { grid-template-columns: 1fr; gap: 40px; }
            .services-header { grid-template-columns: 1fr; text-align: left; gap: 24px; }
            .services-header-desc { justify-self: start; text-align: left; }
        }

        @media (max-width: 768px) {
            .services-section { padding: 80px 24px; }
            .services-title { font-size: 3rem; }
            .service-card { padding: 32px; }
            .card-image-wrapper { height: 280px; }
            .card-image, .image-layer-bg { width: 200px; height: 200px; }
            .card-title { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <header>
        <nav class="nav-pills">
            <a href="/" class="nav-item">Home</a>
            <a href="/about" class="nav-item">About</a>
            <a href="/services" class="nav-item active">
                <span class="active-dot"></span>
                Services
            </a>
            <a href="/contact" class="nav-item">Contact</a>
        </nav>

        <div class="brand-logo">thērawell</div>

        <div class="header-cta">
            <a href="/assessment/phq9" class="btn-book">Book A Session</a>
        </div>
    </header>

    <main class="hero">
        <div class="hero-content">
            <h1 class="hero-heading">Healing & Growth Programs</h1>
            <p class="hero-subtext">
                Thoughtfully designed therapy and wellness services that support healing, and personal growth.
            </p>
        </div>

        <div class="hero-image-container">
            <img src="{{ asset('images/service1.png') }}" alt="Healing Illustration" class="hero-image">
        </div>
    </main>

    <section class="services-section">
        <div class="services-header">
            <h2 class="services-title">Our Services</h2>
            <p class="services-header-desc">
                Personalized sessions and programs focused on nurturing clarity, balance, and sustainable well-being.
            </p>
        </div>

        <div class="services-grid">
            <!-- Card 1: Emotional Healing Program -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg"></div>
                    <img src="{{ asset('images/emotional.jpg') }}" alt="Emotional Healing" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Emotional Healing Program</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            60 Minutes
                        </div>
                    </div>
                    <p class="card-desc">
                        Gentle, guided support to process past experiences and rebuild resilience.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Trauma</span>
                            <span class="tag">Grief</span>
                            <span class="tag">Emotional Recovery</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Relationship Growth Sessions -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg" style="transform: rotate(-3deg) translate(-12px, 8px);"></div>
                    <img src="{{ asset('images/relationship.jpg') }}" alt="Relationship Growth" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Relationship Growth Sessions</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            75 Minutes
                        </div>
                    </div>
                    <p class="card-desc">
                        Strengthen emotional bonds and build healthier relationship patterns.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Communication</span>
                            <span class="tag">Trust</span>
                            <span class="tag">Connection</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Personal Growth Sessions -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg"></div>
                    <img src="{{ asset('images/yoga.jpg') }}" alt="Personal Growth" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Personal Growth Sessions</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            60 Minutes
                        </div>
                    </div>
                    <p class="card-desc">
                        Guided and personalized sessions to deepen self-awareness and emotional clarity.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Self-Discovery</span>
                            <span class="tag">Anxiety</span>
                            <span class="tag">Life Transitions</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4: Guided Mindfulness Sessions -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg" style="transform: rotate(-3deg) translate(-12px, 8px);"></div>
                    <img src="{{ asset('images/therapy.jpg') }}" alt="Mindfulness" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Guided Mindfulness Sessions</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            45 Minutes
                        </div>
                    </div>
                    <p class="card-desc">
                        Therapist-led mindfulness sessions to build presence and emotional balance.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Presence</span>
                            <span class="tag">Mental Clarity</span>
                            <span class="tag">Stress Reduction</span>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 5: Holistic Wellness Coaching -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg"></div>
                    <img src="{{ asset('images/coaching.jpg') }}" alt="Holistic Wellness Coaching" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Holistic Wellness Coaching</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            60 Minutes
                        </div>
                    </div>
                    <p class="card-desc">
                        Integrative coaching that aligns mental clarity, physical wellness, and sustainable daily habits.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Lifestyle Balance</span>
                            <span class="tag">Energy Management</span>
                            <span class="tag">Personal Growth</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6: Mindfulness & Resilience Program -->
            <div class="service-card">
                <div class="card-image-wrapper">
                    <div class="image-layer-bg" style="transform: rotate(-3deg) translate(-12px, 8px);"></div>
                    <img src="{{ asset('images/resiliance.jpg') }}" alt="Mindfulness & Resilience Program" class="card-image">
                </div>
                <div class="card-content">
                    <div class="card-top">
                        <h3 class="card-title">Mindfulness & Resilience Program</h3>
                        <div class="duration-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            6-Weeks
                        </div>
                    </div>
                    <p class="card-desc">
                        Practical tools and mindful practices to restore balance and energy.
                    </p>
                    <div class="card-footer">
                        <span class="issues-label">Issues</span>
                        <div class="tags-container">
                            <span class="tag">Burnout</span>
                            <span class="tag">Stress</span>
                            <span class="tag">Overwhelm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Healing Journey Section -->
    <section class="bg-[#fcfaf6] py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-24 items-start">
            
            <!-- Text Content (Left on Desktop, Top on Mobile) -->
            <div class="space-y-6">
                <h2 class="font-['Cormorant_Garamond'] text-5xl lg:text-6xl text-slate-900 leading-tight">Your Healing Journey</h2>
                <p class="text-slate-500 text-lg lg:text-xl leading-relaxed max-w-md">
                    A supportive and simple path toward personal growth and balance.
                </p>
            </div>

            <!-- Timeline (Right on Desktop, Bottom on Mobile) -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-6 top-0 bottom-0 w-[1px] bg-slate-200 hidden md:block"></div>

                <div class="space-y-16">
                    <!-- Step 1 -->
                    <div class="relative flex items-start gap-8 group">
                        <div class="z-10 flex-shrink-0 w-12 h-12 bg-white border border-slate-100 rounded-full flex items-center justify-center font-['Inter'] text-sm font-medium text-slate-400 shadow-sm">01</div>
                        <div class="flex items-center gap-8">
                            <img src="{{ asset('images/step1.png') }}" alt="Book Call" class="w-24 h-24 object-contain">
                            <div class="space-y-1">
                                <h3 class="font-['Cormorant_Garamond'] text-2xl font-medium text-slate-900">Book a Clarity Call</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">Schedule your session at your preferred time.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative flex items-start gap-8 group">
                        <div class="z-10 flex-shrink-0 w-12 h-12 bg-white border border-slate-100 rounded-full flex items-center justify-center font-['Inter'] text-sm font-medium text-slate-400 shadow-sm">02</div>
                        <div class="flex items-center gap-8">
                            <img src="{{ asset('images/step2.png') }}" alt="Explore Goals" class="w-24 h-24 object-contain">
                            <div class="space-y-1">
                                <h3 class="font-['Cormorant_Garamond'] text-2xl font-medium text-slate-900">Explore Your Goals</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">Share your story, goals, and challenges openly.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative flex items-start gap-8 group">
                        <div class="z-10 flex-shrink-0 w-12 h-12 bg-white border border-slate-100 rounded-full flex items-center justify-center font-['Inter'] text-sm font-medium text-slate-400 shadow-sm">03</div>
                        <div class="flex items-center gap-8">
                            <img src="{{ asset('images/step3.png') }}" alt="Personalized Plan" class="w-24 h-24 object-contain">
                            <div class="space-y-1">
                                <h3 class="font-['Cormorant_Garamond'] text-2xl font-medium text-slate-900">Create a Personalized Plan</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">Build a tailored path for healing and growth.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="relative flex items-start gap-8 group">
                        <div class="z-10 flex-shrink-0 w-12 h-12 bg-white border border-slate-100 rounded-full flex items-center justify-center font-['Inter'] text-sm font-medium text-slate-400 shadow-sm">04</div>
                        <div class="flex items-center gap-8">
                            <img src="{{ asset('images/step4.png') }}" alt="Ongoing Support" class="w-24 h-24 object-contain">
                            <div class="space-y-1">
                                <h3 class="font-['Cormorant_Garamond'] text-2xl font-medium text-slate-900">Grow with Ongoing Support</h3>
                                <p class="text-slate-500 text-sm leading-relaxed">Receive consistent guidance toward lasting balance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- CTA Section -->
    <section class="bg-white py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch overflow-hidden rounded-3xl border border-slate-100 shadow-sm">
            
            <!-- Left Side: Image -->
            <div class="h-[400px] lg:h-auto overflow-hidden">
                <img src="{{ asset('images/service2.png') }}" alt="Begin Your Journey" class="w-full h-full object-cover">
            </div>

            <!-- Right Side: Content -->
            <div class="bg-[#fcfaf6] p-12 lg:p-20 flex flex-col justify-center space-y-8">
                <div class="space-y-4">
                    <h2 class="font-['Cormorant_Garamond'] text-4xl lg:text-5xl text-slate-900 leading-tight">Begin Your Healing Journey</h2>
                    <p class="text-slate-500 text-lg leading-relaxed">
                        Take the first step toward clarity, balance, and lasting personal growth with professional support tailored to you.
                    </p>
                </div>
                <div>
                    <a href="/assessment/phq9" class="inline-block bg-slate-900 text-white px-10 py-4 rounded-full font-medium transition-all hover:bg-slate-800 hover:scale-105">
                        Book A Session
                    </a>
                </div>
            </div>

        </div>
    </section>

    <style>
    /* ── Footer Root ─────────────────────────────────────────────── */
    footer.tw-footer,
    .tw-footer {
        background-color: #141c15 !important;
        background:       #141c15 !important;
        color: #fff !important;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
    }

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

    .tw-footer::after {
        content: '';
        position: absolute;
        top: -120px; left: -80px;
        width: 480px; height: 480px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(74,117,80,0.12) 0%, transparent 70%);
        pointer-events: none;
    }

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

    .tw-fcol-label {
        font-size: 0.68rem;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: rgba(168,197,171,0.9);
        margin-bottom: 22px;
        display: block;
    }

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

    .tw-contact-items {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 2px;
    }

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

        .tw-footer-col::after { display: none; }
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

    <footer class="tw-footer" role="contentinfo" aria-label="Site footer">
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
                    <a href="#" class="tw-social-btn" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                    <a href="#" class="tw-social-btn" aria-label="Twitter"><svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                    <a href="#" class="tw-social-btn" aria-label="Facebook"><svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
                    <a href="#" class="tw-social-btn" aria-label="LinkedIn"><svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                </div>
            </div>

            <!-- ── Col 2: Newsletter ── -->
            <div class="tw-footer-col">
                <span class="tw-fcol-label">Newsletter</span>
                <div class="tw-newsletter-form">
                    <div>
                        <div class="tw-newsletter-field-label">Email</div>
                        <input type="email" id="footer-newsletter-email" class="tw-newsletter-input" placeholder="Email Address">
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
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <!-- ── Col 4: Contact Info ── -->
            <div class="tw-footer-col">
                <span class="tw-fcol-label">Contact Info</span>
                <div class="tw-contact-items">
                    <div class="tw-contact-item">
                        <span class="tw-contact-key">Phone</span>
                        <span class="tw-contact-val"><a href="tel:+16045552874">8882599398</a></span>
                    </div>
                    <div class="tw-contact-item">
                        <span class="tw-contact-key">Email</span>
                        <span class="tw-contact-val"><a href="mailto:hello@therawell.com">hello@therawell.com</a></span>
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
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms &amp; Conditions</a></li>
                </ul>
            </div>

        </div>

        <div class="tw-footer-bottom">
            <p class="tw-footer-copyright">© therawell 2035. All rights reserved.</p>
            <div class="tw-footer-bottom-links">
                <a href="/privacy-policy">Privacy Policy</a>
                <a href="/terms">Terms &amp; Conditions</a>
                <a href="/sitemap">Sitemap</a>
            </div>
        </div>
    </footer>

    <script>
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
                btn.style.background = ''; btn.style.color = ''; btn.style.border = '';
            }, 3000);
        });

        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') btn.click();
        });
    }());
    </script>
</body>
</html>
