@extends('layouts.app')

@section('no_nav', true)
@section('no_footer', true)

@section('head')
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sage: {
                            light: '#a8c5ab',
                            DEFAULT: '#7a9e7e',
                            dark: '#4a7550',
                            deep: '#2d4532',
                        },
                        olive: {
                            light: '#5a7a5e',
                            DEFAULT: '#3d5c3f',
                            dark: '#243a26',
                        },
                        cream: {
                            light: '#f9f8f6',
                            DEFAULT: '#f0ede8',
                            dark: '#e5e1d8',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Cormorant Garamond', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* ── Premium Styling & Keyframes ── */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0) scale(1) rotate(0deg); }
            50% { transform: translateY(-20px) scale(1.02) rotate(2deg); }
        }
        @keyframes floatMedium {
            0%, 100% { transform: translateY(0) scale(1) rotate(0deg); }
            50% { transform: translateY(15px) scale(1.03) rotate(-2deg); }
        }
        @keyframes floatFast {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-10px) scale(1.02); }
        }

        .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
        .animate-fade-in-up { animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) both; }
        .animate-float-slow { animation: floatSlow 16s ease-in-out infinite; }
        .animate-float-medium { animation: floatMedium 18s ease-in-out infinite; }
        .animate-float-fast { animation: floatFast 13s ease-in-out infinite; }

        /* Calming Transparent Green-Glass Gradient */
        .glass-premium {
            background: linear-gradient(135deg, rgba(30, 48, 35, 0.72) 0%, rgba(18, 28, 20, 0.82) 100%);
            backdrop-filter: blur(24px) saturate(130%);
            -webkit-backdrop-filter: blur(24px) saturate(130%);
            border: 1px solid rgba(168, 197, 171, 0.22);
            box-shadow: 
                0 24px 50px rgba(10, 20, 12, 0.35),
                inset 0 1px 1px rgba(255, 255, 255, 0.05);
            transition: border-color 0.4s ease, box-shadow 0.4s ease, transform 0.4s ease;
        }
        .glass-premium:hover {
            border-color: rgba(168, 197, 171, 0.38);
            box-shadow: 
                0 28px 60px rgba(10, 20, 12, 0.45);
        }

        /* Highly Legible Earthy Severity Badges */
        .sev-minimal  { background: rgba(168, 197, 171, 0.15); border: 1px solid rgba(168, 197, 171, 0.4); color: #a8c5ab; }
        .sev-mild     { background: rgba(122, 158, 126, 0.15); border: 1px solid rgba(122, 158, 126, 0.4); color: #b4ccb7; }
        .sev-moderate { background: rgba(212, 178, 140, 0.15); border: 1px solid rgba(212, 178, 140, 0.4); color: #d4b28c; }
        .sev-severe   { background: rgba(197, 142, 147, 0.15); border: 1px solid rgba(197, 142, 147, 0.4); color: #c58e93; }

        /* Highly Legible Earthy Pips */
        .inactive-pip {
            background: rgba(15, 25, 17, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.05);
            color: rgba(255, 255, 255, 0.35);
        }
        .active-minimal {
            background: rgba(168, 197, 171, 0.18);
            border: 1px solid #a8c5ab;
            color: #a8c5ab;
            box-shadow: 0 0 12px rgba(168, 197, 171, 0.15);
            font-weight: 600;
        }
        .active-mild {
            background: rgba(122, 158, 126, 0.18);
            border: 1px solid #7a9e7e;
            color: #b4ccb7;
            box-shadow: 0 0 12px rgba(122, 158, 126, 0.15);
            font-weight: 600;
        }
        .active-moderate {
            background: rgba(212, 178, 140, 0.18);
            border: 1px solid #d4b28c;
            color: #e5d1b8;
            box-shadow: 0 0 12px rgba(212, 178, 140, 0.15);
            font-weight: 600;
        }
        .active-severe {
            background: rgba(197, 142, 147, 0.18);
            border: 1px solid #c58e93;
            color: #ebd4d6;
            box-shadow: 0 0 12px rgba(197, 142, 147, 0.15);
            font-weight: 600;
        }

        /* Interactive list items with high legibility */
        .sugg-item {
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), color 0.3s ease;
        }
        .sugg-item:hover {
            transform: translateX(4px);
        }
    </style>
@endsection

@section('content')

{{-- ════════════════════════════════════════
     PHP: derive display variables
     (Maintained exactly as original, with soft sage-green display mapping)
════════════════════════════════════════ --}}
@php
    // Normalise severity to lowercase for CSS class mapping
    $sevLower = strtolower($severity);  // minimal | mild | moderate | severe

    // Ring color per severity (Calming, natural sage/earthy tones)
    $ringColor = match($severity) {
        'Minimal'  => '#a8c5ab', // Soft Sage-Light
        'Mild'     => '#7a9e7e', // Balanced Sage
        'Moderate' => '#d4b28c', // Soft Warm Sand / Ochre
        default    => '#c58e93', // Terracotta / Muted Rose (Severe)
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

    // AI Recommendations are generated and passed from the controller
@endphp

{{-- ════════════════════════════════════════
     Main Layout Wrapper
════════════════════════════════════════ --}}
<div class="relative min-h-screen w-full overflow-hidden text-cream font-sans bg-cover bg-center bg-no-repeat bg-fixed flex flex-col"
     style="background-image: url('{{ asset('images/dashboard-bg.png') }}');">
    
    <!-- Warm Earthy Forest Overlays for Calming Aesthetic & High Contrast -->
    <div class="absolute inset-0 bg-gradient-to-b from-[#1b2b1e]/90 via-[#101a12]/94 to-[#070d09]/97 pointer-events-none z-0"></div>
    <div class="absolute inset-0 backdrop-blur-[3px] pointer-events-none z-0"></div>

    <!-- Floating Ethereal Background Blobs (Soft Calm Green & Sage Lights) -->
    <div class="absolute top-[-5%] left-[-10%] w-[55vw] h-[55vw] rounded-full bg-gradient-to-tr from-sage-deep/15 via-sage/10 to-transparent filter blur-[120px] mix-blend-screen animate-float-slow pointer-events-none z-0"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-[48vw] h-[48vw] rounded-full bg-gradient-to-bl from-olive/15 via-sage-light/10 to-transparent filter blur-[120px] mix-blend-screen animate-float-medium pointer-events-none z-0"></div>
    <div class="absolute top-[35%] right-[5%] w-[38vw] h-[38vw] rounded-full bg-gradient-to-l from-olive-light/10 via-sage-deep/8 to-transparent filter blur-[100px] mix-blend-screen animate-float-fast pointer-events-none z-0"></div>

    {{-- ── Sleek Transparent Fixed Top Glass Navbar ── --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 py-4.5 md:px-12 backdrop-blur-md bg-[#101a12]/50 border-b border-white/5 flex items-center justify-between" role="navigation" aria-label="Main navigation">
        <!-- Logo / Brand -->
        <a href="/dashboard" class="flex items-center gap-2 group">
            <span class="font-serif text-2xl font-light tracking-widest text-white group-hover:text-sage-light transition-colors duration-300">TheraWel</span>
            <span class="w-1.5 h-1.5 rounded-full bg-[#a8c5ab] shadow-[0_0_8px_#a8c5ab]"></span>
        </a>

        <!-- Links (Only Home & History as per specification) -->
        <div class="flex items-center gap-8">
            <a href="/dashboard" class="text-xs font-semibold uppercase tracking-wider text-slate-300 hover:text-white transition-colors duration-300 relative py-1 after:absolute after:bottom-0 after:left-0 after:right-0 after:h-[1.5px] after:bg-sage-light after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">
                Home
            </a>
            <a href="/assessment/history" class="text-xs font-semibold uppercase tracking-wider text-slate-300 hover:text-white transition-colors duration-300 relative py-1 after:absolute after:bottom-0 after:left-0 after:right-0 after:h-[1.5px] after:bg-sage-light after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300">
                History
            </a>
        </div>
    </nav>

    {{-- ── Main Container ── --}}
    <main class="flex-1 w-full max-w-3xl mx-auto px-6 pt-32 pb-24 relative z-10" id="result-main">

        {{-- ── Page heading ── --}}
        <header class="text-center mb-10 animate-fade-in">
            
            <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-light text-white tracking-tight leading-tight mb-2">
                Your <span class="bg-gradient-to-r from-sage-light via-[#f7f5f2] to-cream bg-clip-text text-transparent font-medium drop-shadow-[0_2px_8px_rgba(168,197,171,0.15)]">Assessment Result</span>
            </h1>
            <p class="text-sm text-slate-300 tracking-wide font-light">Your current emotional wellness snapshot</p>
        </header>

        {{-- ── Main Score Card ── --}}
        <section class="glass-premium rounded-[32px] p-8 md:p-10 mb-8 flex flex-col md:flex-row items-center gap-8 md:gap-10 relative overflow-hidden animate-fade-in-up" id="score-card" aria-label="PHQ-9 Score" style="animation-delay: 100ms;">
            <!-- Subtle background glowing aura -->
            <div class="absolute -top-16 -left-16 w-32 h-32 bg-sage/10 rounded-full filter blur-2xl pointer-events-none"></div>

            {{-- Animated progress ring column --}}
            <div class="flex-shrink-0 flex items-center justify-center relative">
                <!-- Glowing halo under circle -->
                <div class="absolute w-36 h-36 rounded-full filter blur-2xl opacity-15 pointer-events-none" style="background: radial-gradient(circle, {{ $ringColor }} 0%, transparent 70%);"></div>

                <div class="ring-wrap relative" style="width: 172px; height: 172px;" role="img" aria-label="Score: {{ $score }} out of 27">
                    <svg class="ring-svg -rotate-90 block" width="172" height="172" viewBox="0 0 172 172">
                        <!-- Background track circle -->
                        <circle class="stroke-white/[0.04]" cx="86" cy="86" r="70" fill="none" stroke-width="11" />
                        <!-- Active animated circle with soft glow -->
                        <circle class="stroke-linecap-round" cx="86" cy="86" r="70" fill="none" stroke-width="11"
                                id="scoreRing"
                                stroke="{{ $ringColor }}"
                                style="stroke-dasharray: 440; stroke-dashoffset: 440; transition: stroke-dashoffset 1.8s cubic-bezier(0.34, 1.25, 0.64, 1); filter: drop-shadow(0 0 4px {{ $ringColor }}60);" />
                    </svg>

                    <!-- Score display in the center -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                        <span class="text-5xl font-extrabold tracking-tighter leading-none text-white" style="text-shadow: 0 0 15px {{ $ringColor }}50;">
                            {{ $score }}
                        </span>
                        <span class="text-[10px] text-slate-300 uppercase tracking-widest font-semibold mt-1">out of 27</span>
                    </div>
                </div>
            </div>

            {{-- Severity details column --}}
            <div class="score-info flex-1 text-center md:text-left flex flex-col items-center md:items-start gap-4">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-[0.15em] text-slate-400 block mb-1.5">Severity Level</span>
                    
                   
                </div>

                {{-- Message --}}
                <p class="sev-message text-cream/90 text-sm md:text-base leading-relaxed max-w-md">
                    {!! $sevMessage !!}
                </p>

               
                <div class="scale-strip flex flex-wrap justify-center md:justify-start gap-1.5 mt-2 w-full" role="list" aria-label="PHQ-9 severity scale">
                    <span class="scale-pip text-[10px] font-semibold px-3 py-1.5 rounded-full border transition-all duration-300 {{ $severity === 'Minimal'  ? 'active-minimal' : 'inactive-pip' }}" role="listitem" title="0–4">Minimal (0–4)</span>
                    <span class="scale-pip text-[10px] font-semibold px-3 py-1.5 rounded-full border transition-all duration-300 {{ $severity === 'Mild'     ? 'active-mild' : 'inactive-pip' }}" role="listitem" title="5–9">Mild (5–9)</span>
                    <span class="scale-pip text-[10px] font-semibold px-3 py-1.5 rounded-full border transition-all duration-300 {{ $severity === 'Moderate' ? 'active-moderate' : 'inactive-pip' }}" role="listitem" title="10–14">Mod (10–14)</span>
                    <span class="scale-pip text-[10px] font-semibold px-3 py-1.5 rounded-full border transition-all duration-300 {{ $severity === 'Severe'   ? 'active-severe' : 'inactive-pip' }}" role="listitem" title="15–27">Severe (15–27)</span>
                </div>
            </div>
        </section>

        {{-- ── Suggestions Card ── --}}
        <section class="glass-premium rounded-[32px] p-8 md:p-10 mb-10 relative overflow-hidden animate-fade-in-up" id="suggestions-card" aria-label="Personalised Suggestions" style="animation-delay: 220ms;">
            <!-- Subtle background glowing aura -->
            <div class="absolute -bottom-16 -right-16 w-32 h-32 bg-sage-light/5 rounded-full filter blur-2xl pointer-events-none"></div>

            <div class="sugg-header flex items-center gap-4.5 mb-6">
                <!-- Icon wrap -->
                
                <div class="sugg-header-text">
                    <div class="text-[10px] font-bold tracking-[0.18em] text-sage-light uppercase">Personalised Suggestions</div>
                    <div class="text-lg font-serif text-slate-100 font-medium leading-snug">AI-Generated Insights</div>
                </div>
            </div>

            {{-- Recommendations text --}}
            <div class="text-slate-200 text-sm md:text-base leading-relaxed">
                {!! nl2br(e($recommendations)) !!}
            </div>
        </section>

        {{-- ── Divider ── --}}
        <hr class="border-0 border-t border-white/5 mb-8" aria-hidden="true">

        {{-- ── Action buttons ── --}}
        <nav class="action-row flex flex-col sm:flex-row items-center justify-center gap-4.5 animate-fade-in-up" aria-label="Result Actions" style="animation-delay: 340ms;">
            <a href="{{ url('/dashboard') }}"
               class="w-full sm:w-auto relative overflow-hidden flex items-center justify-center gap-2 font-sans font-semibold text-xs tracking-[0.08em] uppercase text-white bg-gradient-to-r from-sage-dark to-sage hover:from-olive hover:to-sage-light px-8 py-4.5 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.03] active:scale-[0.97]"
               id="retake-btn"
               aria-label="Retake the PHQ-9 assessment">
                 Retake Assessment
            </a>
            <a href="{{ url('/assessment/history') }}"
               class="w-full sm:w-auto flex items-center justify-center gap-2 font-sans font-semibold text-xs tracking-[0.08em] uppercase text-slate-300 bg-white/5 border border-white/10 hover:border-sage-light/40 hover:bg-white/10 px-8 py-4.5 rounded-full transition-all duration-300 hover:scale-[1.03] active:scale-[0.97]"
               id="history-btn"
               aria-label="View your assessment history">
                 View History
            </a>
            <a href="{{ url('/dashboard') }}"
               class="w-full sm:w-auto flex items-center justify-center gap-2 font-sans font-semibold text-xs tracking-[0.08em] uppercase text-slate-300 bg-white/5 border border-white/10 hover:border-sage-light/40 hover:bg-white/10 px-8 py-4.5 rounded-full transition-all duration-300 hover:scale-[1.03] active:scale-[0.97]"
               id="home-btn"
               aria-label="Go back to home">
                 Go to Home
            </a>
        </nav>

    </main>

    {{-- Minimal Sleek Footer --}}
    <footer class="w-full py-6 text-center text-xs text-slate-600 border-t border-white/[0.03] mt-auto relative z-10 select-none pointer-events-none">
        &copy; {{ date('Y') }} TheraWel. All rights reserved.
    </footer>

</div>

{{-- ════════════════════════════════════════
     Script: animate ring on load
     (Preserved exactly as original)
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
