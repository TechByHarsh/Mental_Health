<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Therawell – Caring for the whole you.">
    <title>About Us – Therawell</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
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
            background-color: var(--beige);
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
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

        .brand-logo {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            letter-spacing: 0.05em;
            color: var(--text-dark);
            font-weight: 400;
            text-align: center;
        }

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

        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }

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
        }
    </style>
</head>
<body class="antialiased">

    <!-- Header -->
    <header>
        <nav class="nav-pills">
            <a href="/" class="nav-item">Home</a>
            <a href="/about" class="nav-item active">
                <span class="active-dot"></span>
                About
            </a>
            <a href="/services" class="nav-item">Services</a>
            <a href="/contact" class="nav-item">Contact</a>
        </nav>

        <div class="brand-logo">thērawell</div>

        <div class="header-cta">
            <a href="/assessment/phq9" class="btn-book">Book A Session</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="min-h-[80vh] flex flex-col py-16 px-8 lg:px-16">

        <!-- Hero Content -->
        <div class="flex-1 max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Side -->
            <div class="space-y-10">
                <h1 class="font-serif text-7xl lg:text-8xl leading-[1.1] text-slate-900">
                    Caring for the<br>Whole You
                </h1>
                <p class="text-slate-500 text-xl lg:text-2xl leading-relaxed max-w-lg font-light">
                    A supportive space dedicated to healing, reflection, and meaningful personal growth.
                </p>
            </div>

            <!-- Right Side -->
            <div class="flex justify-center lg:justify-end">
                <div class="max-w-md w-full p-8 lg:p-0">
                    <img src="{{ asset('images/about1.png') }}" alt="Healing Illustration" class="w-full h-auto object-contain">
                </div>
            </div>

        </div>
    </section>
    
    <!-- About Content Section -->
    <section class="py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto space-y-32">
            
            <!-- Top Row: Main Heading & Description -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Left: Main Heading -->
                <div class="space-y-8">
                    <span class="inline-block px-5 py-2 rounded-full bg-slate-100 text-slate-500 text-xs font-semibold tracking-wider uppercase">
                        About
                    </span>
                    <h2 class="font-serif text-5xl lg:text-6xl leading-tight text-slate-900">
                        Therawell began as a vision: to support individuals through healing.
                    </h2>
                </div>

                <!-- Right: Image + Description -->
                <div class="flex justify-center lg:justify-end">
                    <div class="max-w-md w-full space-y-10">
                        <div class="rounded-[2rem] overflow-hidden shadow-sm">
                            <img src="{{ asset('images/about2.jpg') }}" alt="Wellness Session" class="w-full h-[320px] object-cover">
                        </div>
                        <p class="text-slate-500 text-lg leading-relaxed font-light">
                            Therawell was created as a space where healing and personal growth come together. We believe true well-being extends beyond overcoming challenges. It's about cultivating resilience, clarity, and balance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Row: Stats & Values -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Image + Stats -->
                <div class="flex flex-col lg:flex-row items-center gap-10">
                    <div class="w-full lg:w-1/2 rounded-[2rem] overflow-hidden shadow-sm">
                        <img src="{{ asset('images/about3.jpg') }}" alt="Therapy Space" class="w-full h-[300px] object-cover">
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-col gap-8 py-4">
                        <div class="space-y-1 border-l-2 border-slate-100 pl-8">
                            <div class="font-serif text-4xl text-slate-900">15+</div>
                            <div class="text-slate-500 text-xs font-medium uppercase tracking-wider">Licensed Experts</div>
                        </div>
                        <div class="space-y-1 border-l-2 border-slate-100 pl-8">
                            <div class="font-serif text-4xl text-slate-900">1,200+</div>
                            <div class="text-slate-500 text-xs font-medium uppercase tracking-wider">Clients Supported</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Value Cards -->
                <div class="flex justify-center lg:justify-end">
                    <div class="max-w-md w-full grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Card 1: Compassion -->
                        <div class="bg-white/50 p-8 rounded-[2rem] border border-white/20 shadow-sm hover:-translate-y-2 transition-all duration-300 group">
                            <div class="w-20 h-20 bg-white rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                                <img src="{{ asset('images/symbol2.jpg') }}" alt="Compassion Icon" class="w-20 h-20 object-contain">
                            </div>
                            <h3 class="font-serif text-xl text-slate-900 mb-3">Compassion</h3>
                            <p class="text-slate-500 text-xs leading-relaxed font-light">
                                We meet every journey with empathy and patience.
                            </p>
                        </div>

                        <!-- Card 2: Holistic Growth -->
                        <div class="bg-white/50 p-8 rounded-[2rem] border border-white/20 shadow-sm hover:-translate-y-2 transition-all duration-300 group">
                            <div class="w-20 h-20 bg-white rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                                <img src="{{ asset('images/symbol1.jpg') }}" alt="Growth Icon" class="w-20 h-20 object-contain">
                            </div>
                            <h3 class="font-serif text-xl text-slate-900 mb-3">Holistic Growth</h3>
                            <p class="text-slate-500 text-xs leading-relaxed font-light">
                                We nurture mental and physical balance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Therapeutic Approach Section -->
    <section class="py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto space-y-20">
            
            <!-- Heading Section -->
            <div class="text-center space-y-6">
                <h2 class="font-serif text-5xl lg:text-6xl text-slate-900">Our Therapeutic Approach</h2>
                <p class="text-slate-500 text-lg lg:text-xl font-light max-w-2xl mx-auto leading-relaxed">
                    Evidence-based practices combined with holistic principles for comprehensive well-being.
                </p>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Card 01 -->
                <div class="bg-white/40 p-10 rounded-[2rem] text-center space-y-8 border border-white/30 shadow-sm hover:-translate-y-2 transition-all duration-300">
                    <div class="h-32 flex items-center justify-center">
                        <img src="{{ asset('images/approach1.png') }}" alt="Clinical Practice Icon" class="h-full object-contain">
                    </div>
                    <div class="space-y-4">
                        <div class="text-slate-400 text-sm font-medium tracking-widest">01</div>
                        <h3 class="font-serif text-2xl text-slate-900 leading-snug">Trauma-Informed Clinical Practice</h3>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="bg-white/40 p-10 rounded-[2rem] text-center space-y-8 border border-white/30 shadow-sm hover:-translate-y-2 transition-all duration-300">
                    <div class="h-32 flex items-center justify-center">
                        <img src="{{ asset('images/approach2.png') }}" alt="Reflective Techniques Icon" class="h-full object-contain">
                    </div>
                    <div class="space-y-4">
                        <div class="text-slate-400 text-sm font-medium tracking-widest">02</div>
                        <h3 class="font-serif text-2xl text-slate-900 leading-snug">Cognitive & Reflective Techniques</h3>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="bg-white/40 p-10 rounded-[2rem] text-center space-y-8 border border-white/30 shadow-sm hover:-translate-y-2 transition-all duration-300">
                    <div class="h-32 flex items-center justify-center">
                        <img src="{{ asset('images/approach3.png') }}" alt="Mindfulness Icon" class="h-full object-contain">
                    </div>
                    <div class="space-y-4">
                        <div class="text-slate-400 text-sm font-medium tracking-widest">03</div>
                        <h3 class="font-serif text-2xl text-slate-900 leading-snug">Mindfulness-Based Techniques</h3>
                    </div>
                </div>

                <!-- Card 04 -->
                <div class="bg-white/40 p-10 rounded-[2rem] text-center space-y-8 border border-white/30 shadow-sm hover:-translate-y-2 transition-all duration-300">
                    <div class="h-32 flex items-center justify-center">
                        <img src="{{ asset('images/approach4.png') }}" alt="Wellness Coaching Icon" class="h-full object-contain">
                    </div>
                    <div class="space-y-4">
                        <div class="text-slate-400 text-sm font-medium tracking-widest">04</div>
                        <h3 class="font-serif text-2xl text-slate-900 leading-snug">Integrative Wellness Coaching</h3>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Meet Our Specialists Section -->
    <section class="py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-8 mb-16">
                <h2 class="font-serif text-4xl lg:text-5xl text-slate-900 max-w-md leading-tight">
                    Meet Our Licensed Specialists
                </h2>
                <p class="text-slate-500 text-[0.95rem] max-w-sm font-light leading-relaxed">
                    A compassionate team of experienced professionals dedicated to emotional wellness and personal growth.
                </p>
            </div>

            <!-- Grid Container -->
            <div class="border-t border-slate-200 divide-y divide-slate-200">
                
                <!-- Location Group 1: Kolkata -->
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr]">
                    <!-- Location Label -->
                    <div class="py-8 lg:py-12 pr-8">
                        <h3 class="font-serif text-2xl text-slate-800">Kolkata, All Locations </h3>
                    </div>
                    
                    <!-- Therapists List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-200">
                        <!-- Therapist 1 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist1.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Dr. Maya Reynolds">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">Dr. Maya Reynolds, PhD</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Anxiety & Emotional Wellness</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @mayawellness
                                </div>
                            </div>
                        </div>
                        
                        <!-- Therapist 2 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist2.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Daniel Hart">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">Daniel Hart, LMFT</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Relationship Guidance</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @danieltherapy
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Group 1: Kolkata (Row 2, no label) -->
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr]">
                    <!-- Location Label (Empty) -->
                    <div class="hidden lg:block py-12 pr-8"></div>
                    
                    <!-- Therapists List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-200">
                        <!-- Therapist 3 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist3.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Sophia Clarke">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">Sophia Clarke, CWC</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Mindfulness Coaching</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @sophia_mindful
                                </div>
                            </div>
                        </div>
                        
                        <!-- Therapist 4 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist4.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Dr. Ethan Brooks">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">Dr. Ethan Brooks, PsyD</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Stress Recovery Support</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @ethanbrooks
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Location Group 2: Mumbai -->
                <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr]">
                    <!-- Location Label -->
                    <div class="py-8 lg:py-12 pr-8">
                        <h3 class="font-serif text-2xl text-slate-800">Bandra West,<br>Mumbai</h3>
                    </div>
                    
                    <!-- Therapists List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 divide-y md:divide-y-0 md:divide-x divide-slate-200">
                        <!-- Therapist 5 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist5.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="Olivia Bennett">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">Olivia Bennett, LCSW</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Holistic Therapy Practices</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @oliviabennett
                                </div>
                            </div>
                        </div>
                        
                        <!-- Therapist 6 -->
                        <div class="py-8 md:p-8 lg:p-12 flex gap-6 items-center group transition-colors hover:bg-slate-50/50">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 shrink-0 rounded-2xl overflow-hidden bg-slate-100">
                                <img src="{{ asset('images/therapist6.jpg') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="James Carter">
                            </div>
                            <div class="space-y-3">
                                <h4 class="font-serif text-xl text-slate-900">James Carter, LPC</h4>
                                <p class="text-sm text-slate-500 font-light leading-snug">Cognitive Behavioral Therapy</p>
                                <div class="inline-flex items-center px-3 py-1 bg-white rounded-full shadow-sm text-[0.7rem] sm:text-xs text-slate-500 font-medium tracking-wide">
                                    ig: @jamescarter
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-8 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <div class="bg-[#222222] rounded-[2rem] overflow-hidden flex flex-col lg:grid lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-white/10 shadow-sm">
                
                <!-- Left Image Card -->
                <div class="p-12 lg:p-16 flex items-center justify-center group">
                    <div class="relative w-full max-w-[280px] aspect-square transition-transform duration-500 group-hover:-translate-y-2">
                        <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-lg bg-white/5">
                            <img src="{{ asset('images/cta-left.png') }}" alt="Mental Wellness" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Center CTA Content -->
                <div class="p-12 lg:p-16 flex flex-col items-center justify-center text-center space-y-8">
                    <h2 class="font-serif text-4xl lg:text-5xl text-[#fcfaf6] leading-tight">
                        Begin Your Growth<br>Journey
                    </h2>
                    <p class="text-slate-300 font-light text-[0.95rem] leading-relaxed max-w-[280px]">
                        Take the first step toward deeper clarity, resilience, and lasting well-being.
                    </p>
                    <div class="pt-2">
                        <a href="/assessment/phq9" class="inline-block bg-[#fcfaf6] text-slate-900 font-medium px-8 py-3.5 rounded-full hover:shadow-[0_0_20px_rgba(252,250,246,0.15)] hover:-translate-y-1 transition-all duration-300">
                            Book A Consultation
                        </a>
                    </div>
                </div>

                <!-- Right Image Card -->
                <div class="p-12 lg:p-16 flex items-center justify-center group">
                    <div class="relative w-full max-w-[280px] aspect-square transition-transform duration-500 group-hover:-translate-y-2">
                        <!-- Layer behind -->
                        <div class="absolute inset-0 rounded-2xl overflow-hidden translate-x-4 translate-y-4 opacity-60">
                            <img src="{{ asset('images/cta-right.jpg') }}" alt="Stacked photo effect" class="w-full h-full object-cover">
                        </div>
                        <!-- Main photo -->
                        <div class="absolute inset-0 rounded-2xl overflow-hidden shadow-lg z-10 border border-white/5">
                            <img src="{{ asset('images/cta-right.jpg') }}" alt="Growth Practice" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
    /* ── Footer Root ─────────────────────────────────────────────── */
    footer.tw-footer,
    .tw-footer {
        background: linear-gradient(135deg, #111812 0%, #172418 100%) !important;
        color: #fff !important;
        font-family: 'Inter', sans-serif;
        position: relative;
        overflow: hidden;
        width: 100%;
        margin: 0;
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
        padding: 88px 56px 64px;
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
