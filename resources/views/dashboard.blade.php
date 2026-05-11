<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TheraWel — A premium, safe, and calming digital sanctuary for psychotherapy and emotional well-being.">
    <title> TheraWel</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
                        cream: {
                            light: '#fdfaf6',
                            DEFAULT: '#f0ede8',
                            dark: '#e3dfd5',
                        },
                        olive: {
                            light: '#5a7a5e',
                            DEFAULT: '#3d5c3f',
                            dark: '#243a26',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Cormorant Garamond', 'serif'],
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 1.4s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                        'fade-in-down': 'fadeInDown 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                        'fade-in': 'fadeIn 1.5s ease-out forwards',
                        'drift-slow': 'drift 35s ease-in-out infinite',
                        'drift-medium': 'drift 24s ease-in-out infinite',
                        'drift-fast': 'drift 16s ease-in-out infinite',
                        'float-soft': 'floatSoft 8s ease-in-out infinite',
                        'cloud-slow': 'cloudDrift 45s linear infinite',
                        'cloud-medium': 'cloudDrift 30s linear infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(32px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeInDown: {
                            '0%': { opacity: '0', transform: 'translateY(-24px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        drift: {
                            '0%, 100%': { transform: 'translateX(-4%) translateY(0) scale(1)' },
                            '50%': { transform: 'translateX(4%) translateY(-12px) scale(1.06)' },
                        },
                        floatSoft: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        cloudDrift: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(100vw)' }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Extra custom utility for ultra-smooth backdrops */
        .glass-navbar {
            background: rgba(240, 237, 232, 0.45);
            backdrop-filter: blur(16px) saturate(110%);
            -webkit-backdrop-filter: blur(16px) saturate(110%);
        }
        .text-shadow-sm {
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        /* Custom glass-card styling with high-fidelity transitions */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(16px) saturate(100%);
            -webkit-backdrop-filter: blur(16px) saturate(100%);
            border: 1px solid rgba(255, 255, 255, 0.12);
            transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .glass-card:hover {
            background: rgba(255, 255, 255, 0.09);
            border-color: rgba(168, 197, 171, 0.35);
            transform: translateY(-8px) scale(1.01);
            box-shadow: 
                0 20px 45px rgba(74, 117, 80, 0.18), 
                0 0 30px rgba(168, 197, 171, 0.12);
        }
        
        /* Floating particle ambient animations */
        @keyframes float-particle-ambient {
            0%, 100% {
                transform: translateY(0) translateX(0) scale(1);
                opacity: 0.15;
            }
            50% {
                transform: translateY(-70px) translateX(20px) scale(1.25);
                opacity: 0.5;
            }
        }
        .animate-float-particle-ambient {
            animation: float-particle-ambient var(--duration, 14s) ease-in-out infinite;
        }

        /* Subtle glowing light streak rays */
        @keyframes subtle-ray-pulse {
            0%, 100% { opacity: 0.18; transform: scale(1) rotate(-15deg); }
            50% { opacity: 0.4; transform: scale(1.08) rotate(-12deg); }
        }
        .animate-subtle-ray-pulse {
            transform-origin: top center;
            animation: subtle-ray-pulse 12s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-cream font-sans min-h-screen flex flex-col overflow-x-hidden antialiased">

    <!-- ─── Full-Screen Hero Section (min-h-screen) ─── -->
    <header class="relative min-h-screen w-full flex flex-col justify-between overflow-hidden bg-cover bg-center bg-fixed" 
            style="background-image: url('{{ asset('images/dashboard-bg.png') }}');">
        
        <!-- 1. Soft dark/blur/glow overlay for maximum readability and mood -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-black/5 to-black/15 backdrop-blur-[0.5px] pointer-events-none z-0"></div>
        <div class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-olive-dark/15 to-transparent pointer-events-none z-0"></div>

        <!-- 2. UI Effects: Dreamy Floating Cloud overlays weaving behind/front of content -->
        <!-- Background Cloud (Behind Heading) -->
        <div class="absolute top-[18%] left-[-20%] w-[80%] h-[40%] opacity-[0.22] mix-blend-screen blur-xl pointer-events-none animate-drift-slow z-0">
            <svg viewBox="0 0 512 256" fill="url(#cloudGrad1)" class="w-full h-full">
                <defs>
                    <radialGradient id="cloudGrad1" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#ffffff"/>
                        <stop offset="70%" stop-color="#fdfaf6" stop-opacity="0.5"/>
                        <stop offset="100%" stop-color="#f5efe8" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <path d="M420 180 a80 80 0 0 1 -120 40 a120 120 0 0 1 -200 -30 a90 90 0 0 1 20 -150 a110 110 0 0 1 180 -10 a80 80 0 0 1 120 150 z" />
            </svg>
        </div>
        
        <!-- Foreground Soft Cloud Layer 1 -->
        <div class="absolute top-[25%] -right-[15%] w-[60%] h-[35%] opacity-[0.25] mix-blend-screen pointer-events-none animate-drift-medium z-10">
            <svg viewBox="0 0 512 256" fill="url(#cloudGrad2)" class="w-full h-full filter blur-lg">
                <defs>
                    <radialGradient id="cloudGrad2" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#ffffff" stop-opacity="0.9"/>
                        <stop offset="60%" stop-color="#fdfaf6" stop-opacity="0.4"/>
                        <stop offset="100%" stop-color="#f0ede8" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <path d="M420 180 a80 80 0 0 1 -120 40 a120 120 0 0 1 -200 -30 a90 90 0 0 1 20 -150 a110 110 0 0 1 180 -10 a80 80 0 0 1 120 150 z" />
            </svg>
        </div>

        <!-- Foreground Soft Cloud Layer 2 (Cross-floating over heading) -->
        <div class="absolute top-[38%] left-[5%] w-[50%] h-[25%] opacity-[0.18] mix-blend-screen pointer-events-none animate-float-soft z-20">
            <svg viewBox="0 0 512 256" fill="url(#cloudGrad3)" class="w-full h-full filter blur-md">
                <defs>
                    <radialGradient id="cloudGrad3" cx="50%" cy="50%" r="50%">
                        <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                        <stop offset="80%" stop-color="#f5efe8" stop-opacity="0.1"/>
                        <stop offset="100%" stop-color="#f0ede8" stop-opacity="0"/>
                    </radialGradient>
                </defs>
                <path d="M420 180 a80 80 0 0 1 -120 40 a120 120 0 0 1 -200 -30 a90 90 0 0 1 20 -150 a110 110 0 0 1 180 -10 a80 80 0 0 1 120 150 z" />
            </svg>
        </div>

        <!-- 3. Transparent Glassmorphism Navbar Pill -->
        <nav class="w-full max-w-6xl mx-auto px-4 mt-6 z-50 animate-fade-in-down" aria-label="Main navigation">
            <div class="glass-navbar border border-white/35 rounded-full px-6 py-3.5 flex items-center justify-between shadow-[0_8px_32px_rgba(30,58,35,0.06)]">
                
                <!-- Logo -->
                <div class="flex items-center gap-2">
                    <span class="text-serif text-2xl font-semibold tracking-wider text-olive drop-shadow-sm select-none">TheraWel</span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-sm font-medium text-olive-light hover:text-olive transition-colors duration-300">Home</a>
                    <a href="/assessment/phq9" class="text-sm font-medium text-olive-light hover:text-olive transition-colors duration-300">Test</a>
                    <a href="/services" class="text-sm font-medium text-olive-light hover:text-olive transition-colors duration-300">Therapist</a>
                </div>

                <!-- Right Side Actions Buttons -->
                <div class="flex items-center gap-3">
                    <a href="/contact" class="text-xs md:text-sm font-medium text-olive border border-olive/35 hover:bg-cream-dark/20 px-5 py-2.5 rounded-full transition-all duration-300">
                        Contact
                    </a>
                    <a href="/assessment/phq9" class="text-xs md:text-sm font-semibold text-white bg-olive hover:bg-olive-dark shadow-[0_4px_14px_rgba(61,92,63,0.25)] px-6 py-2.5 rounded-full transition-all duration-300 hover:scale-[1.02] mr-1">
                        Book Now
                    </a>

                    <!-- Premium Profile Button & Dropdown Section -->
                    @php
                        // FUTURE BACKEND INTEGRATION PREPARATION
                        // When database & authentication are ready, simply bind these variables to your Auth system:
                        // e.g., $user_name = Auth::user()->name;
                        // For now, they fallback to elegant, premium placeholder data matching the wellness aesthetic.
                        
                        $user_name = Auth::user()?->name ?? 'Evelyn Carter';
                        $user_email = Auth::user()?->email ?? 'evelyn@therawel.com';
                        $user_avatar = Auth::user()?->profile_photo ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150&h=150';
                        $user_first_name = explode(' ', $user_name)[0];
                    @endphp

                    <div class="relative" id="profile-container">
                        <button id="profile-btn" class="flex items-center gap-2.5 p-1.5 pr-3.5 rounded-full bg-white/20 hover:bg-white/35 border border-white/30 backdrop-blur-md shadow-sm transition-all duration-300 hover:scale-[1.02] focus:outline-none group" aria-haspopup="true" aria-expanded="false">
                            <div class="w-8 h-8 rounded-full overflow-hidden border border-white/40 shadow-sm relative flex items-center justify-center bg-sage text-white font-serif font-semibold text-sm select-none">
                                <!-- Elegant Avatar Image (calming aesthetic) -->
                                <img src="{{ $user_avatar }}" alt="{{ $user_name }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            </div>
                            <span class="hidden md:inline text-xs font-semibold tracking-wider text-olive group-hover:text-olive-dark transition-colors duration-300 select-none">
                                {{ $user_first_name }}
                            </span>
                            <!-- Minimal Down Chevron -->
                            <svg class="w-3.5 h-3.5 text-olive-light group-hover:text-olive transition-transform duration-300" id="chevron-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="profile-dropdown" class="absolute right-0 mt-3 w-80 bg-white/60 backdrop-blur-2xl border border-white/45 rounded-[24px] shadow-[0_20px_50px_rgba(30,58,35,0.15)] opacity-0 scale-95 pointer-events-none transition-all duration-300 ease-[cubic-bezier(0.16,1,0.3,1)] z-50 transform origin-top-right">
                            
                            <!-- Top User Info -->
                            <div class="p-5 flex items-center gap-3 border-b border-olive/10 bg-white/30 rounded-t-[24px]">
                                <div class="w-11 h-11 rounded-full overflow-hidden border border-white/60 shadow-sm flex items-center justify-center bg-sage text-white font-serif font-semibold text-base">
                                    <img src="{{ $user_avatar }}" alt="{{ $user_name }}" class="w-full h-full object-cover">
                                </div>
                                <div class="flex flex-col items-start text-left">
                                    <span class="text-[10px] font-bold tracking-[0.15em] text-sage uppercase leading-none">Welcome Back</span>
                                    <span class="text-base font-serif font-normal text-olive leading-tight mt-1 truncate max-w-[170px]">
                                        {{ $user_name }}
                                    </span>
                                    <span class="text-[11px] text-olive-light/80 truncate max-w-[170px] font-light mt-0.5">
                                        {{ $user_email }}
                                    </span>
                                </div>
                            </div>

                            <!-- Menu Options -->
                            <div class="p-3.5 flex flex-col gap-1">
                                <!-- Option 1: Personal Details -->
                                <a href="/profile" class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-white/40 group/item transition-all duration-300 text-left">
                                    <div class="w-8 h-8 rounded-xl bg-sage/10 flex items-center justify-center text-sage group-hover/item:bg-sage group-hover/item:text-white transition-all duration-300 flex-shrink-0">
                                        <!-- Outline User Icon -->
                                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-medium text-olive group-hover/item:text-olive-dark transition-colors duration-200">Personal Details</span>
                                        <span class="text-[10px] text-olive-light/70 font-light">View your profile info</span>
                                    </div>
                                </a>

                                <!-- Option 2: Test Results -->
                                <a href="/assessment/history" class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-white/40 group/item transition-all duration-300 text-left">
                                    <div class="w-8 h-8 rounded-xl bg-sage/10 flex items-center justify-center text-sage group-hover/item:bg-sage group-hover/item:text-white transition-all duration-300 flex-shrink-0">
                                        <!-- Outline Document Check Icon -->
                                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-medium text-olive group-hover/item:text-olive-dark transition-colors duration-200">Test Results</span>
                                        <span class="text-[10px] text-olive-light/70 font-light">View your latest scores</span>
                                    </div>
                                </a>

                                <!-- Option 3: History -->
                                <a href="/assessment/history" class="flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-white/40 group/item transition-all duration-300 text-left">
                                    <div class="w-8 h-8 rounded-xl bg-sage/10 flex items-center justify-center text-sage group-hover/item:bg-sage group-hover/item:text-white transition-all duration-300 flex-shrink-0">
                                        <!-- Outline Clock/History Icon -->
                                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-medium text-olive group-hover/item:text-olive-dark transition-colors duration-200">History</span>
                                        <span class="text-[10px] text-olive-light/70 font-light">Your mental wellness path</span>
                                    </div>
                                </a>
                            </div>

                            <!-- Divider line -->
                            <div class="h-[1px] bg-olive/10 mx-5"></div>

                            <!-- Bottom logout action -->
                            <div class="p-3.5">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    @csrf
                                </form>
                                <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="w-full flex items-center gap-3 px-4 py-3 rounded-2xl hover:bg-rose-500/10 group/logout transition-all duration-300 text-left">
                                    <div class="w-8 h-8 rounded-xl bg-rose-500/10 flex items-center justify-center text-rose-500 group-hover/logout:bg-rose-500 group-hover/logout:text-white transition-all duration-300 flex-shrink-0">
                                        <!-- Outline Logout Icon -->
                                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-[13px] font-semibold text-rose-600/90 group-hover/logout:text-rose-700 transition-colors duration-200">Logout</span>
                                        <span class="text-[10px] text-rose-500/70 font-light">Safely end your session</span>
                                    </div>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- 4. Hero Center Content -->
        <div class="flex-1 flex flex-col items-center justify-center text-center px-4 md:px-8 relative z-10 pt-16 pb-20">
            
            <!-- Small Rounded Badge -->
            <div class="animate-fade-in mb-6">
                <span class="bg-olive/75 text-cream-light backdrop-blur-sm border border-white/20 px-5 py-1.5 rounded-full text-[11px] font-semibold tracking-widest uppercase shadow-sm">
                    Online & Offline
                </span>
            </div>

            <!-- Large Elegant Serif Heading -->
            <h1 class="animate-fade-in-up font-serif text-6xl sm:text-7xl md:text-9xl font-light text-olive tracking-tight leading-none mb-6 text-shadow-sm select-none"
                style="animation-delay: 200ms;">
                Therawel
            </h1>

            <!-- Short Calming Paragraph -->
            <p class="animate-fade-in-up font-sans text-base sm:text-lg md:text-xl text-olive-light max-w-xl mx-auto leading-relaxed mb-9 font-normal select-none"
               style="animation-delay: 450ms;">
                A safe journey toward healing, balance, and emotional wellness.
            </p>

            <!-- Two Call-to-Action Buttons -->
            <div class="animate-fade-in-up flex flex-col sm:flex-row items-center justify-center gap-4 w-full max-w-md mx-auto"
                 style="animation-delay: 700ms;">
                <a href="/assessment/phq9" class="w-full sm:w-auto text-center font-sans font-medium text-sm tracking-wider uppercase text-white bg-olive hover:bg-olive-dark px-9 py-4.5 rounded-full shadow-[0_8px_20px_rgba(61,92,63,0.3)] transition-all duration-300 hover:scale-105 active:scale-95">
                    Start Test
                </a>
                <a href="/services" class="w-full sm:w-auto text-center font-sans font-medium text-sm tracking-wider uppercase text-olive bg-white/25 border border-olive/35 backdrop-blur-sm hover:bg-white/45 px-9 py-4.5 rounded-full shadow-sm transition-all duration-300 hover:scale-105 active:scale-95">
                    Find Therapist
                </a>
            </div>

           
           

        </div>

    </header>

    <!-- ─── Premium Mental Wellness Tests Section ─── -->
    <section id="wellness-tests" class="relative w-full py-28 px-6 md:px-12 xl:px-24 overflow-hidden bg-cover bg-center bg-fixed flex flex-col items-center" 
             style="background-image: url('{{ asset('images/dashboard-bg.png') }}');">
        
        <!-- 1. Dreamy Dark Overlay & Ambient Vignette (Continues Hero Depth) -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/15 via-black/45 to-black/75 backdrop-blur-[0.5px] pointer-events-none z-0"></div>
        
        <!-- Ambient Plant Silhouettes / Forest edge vignettes on sides -->
        <div class="absolute -left-[5%] bottom-[-5%] w-[40%] h-[60%] opacity-[0.06] mix-blend-screen pointer-events-none filter blur-sm z-0 select-none">
            <svg viewBox="0 0 512 512" fill="#7a9e7e" class="w-full h-full">
                <!-- Abstract stylized soft branch shapes -->
                <path d="M50 450 C120 380 200 320 310 390 C220 280 240 150 120 80 C180 180 120 280 50 450 Z" />
                <path d="M150 500 C250 420 300 300 450 350 C320 250 280 100 180 150 C240 220 200 350 150 500 Z" opacity="0.8" />
            </svg>
        </div>
        <div class="absolute -right-[5%] top-[-5%] w-[35%] h-[55%] opacity-[0.05] mix-blend-screen pointer-events-none filter blur-sm z-0 select-none">
            <svg viewBox="0 0 512 512" fill="#7a9e7e" class="w-full h-full">
                <path d="M460 50 C390 120 310 200 380 310 C270 220 140 240 70 120 C170 180 270 120 460 50 Z" />
            </svg>
        </div>

        <!-- 2. Ambient Floating Glowing Particles -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
            <div class="absolute rounded-full bg-sage-light/20 blur-xl animate-float-particle-ambient" style="top: 15%; left: 8%; width: 140px; height: 140px; --duration: 15s; animation-delay: 0s;"></div>
            <div class="absolute rounded-full bg-cream-light/12 blur-lg animate-float-particle-ambient" style="top: 45%; right: 12%; width: 90px; height: 90px; --duration: 18s; animation-delay: 3s;"></div>
            <div class="absolute rounded-full bg-sage/10 blur-xl animate-float-particle-ambient" style="bottom: 15%; left: 28%; width: 180px; height: 180px; --duration: 22s; animation-delay: 1.5s;"></div>
            <div class="absolute rounded-full bg-white/8 blur-md animate-float-particle-ambient" style="top: 75%; left: 12%; width: 50px; height: 50px; --duration: 11s; animation-delay: 4s;"></div>
            <div class="absolute rounded-full bg-sage-light/15 blur-lg animate-float-particle-ambient" style="bottom: 28%; right: 6%; width: 110px; height: 110px; --duration: 16s; animation-delay: 2s;"></div>
        </div>

        <!-- 3. Soft Glowing Ray Beams (Continues Hero Lighting) -->
        <div class="absolute top-0 inset-x-0 h-full pointer-events-none overflow-hidden z-0 flex justify-center">
            <div class="w-[800px] h-[600px] opacity-[0.18] bg-gradient-to-b from-sage-light/25 via-sage/5 to-transparent filter blur-3xl animate-subtle-ray-pulse" style="transform: rotate(-15deg);"></div>
        </div>

        <!-- 4. Heading & Cloud Glow Background Layer -->
        <div class="relative w-full max-w-4xl text-center mb-16 z-10 flex flex-col items-center">
            
            <!-- Floating cloud backdrop directly behind title to give "cloudy" feel -->
            <div class="absolute -top-[50%] w-[160%] h-[200%] opacity-[0.18] mix-blend-screen pointer-events-none filter blur-2xl select-none z-0">
                <svg viewBox="0 0 512 256" fill="url(#cloudGradHeader)" class="w-full h-full">
                    <defs>
                        <radialGradient id="cloudGradHeader" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8"/>
                            <stop offset="65%" stop-color="#fdfaf6" stop-opacity="0.3"/>
                            <stop offset="100%" stop-color="#7a9e7e" stop-opacity="0"/>
                        </radialGradient>
                    </defs>
                    <path d="M420 180 a80 80 0 0 1 -120 40 a120 120 0 0 1 -200 -30 a90 90 0 0 1 20 -150 a110 110 0 0 1 180 -10 a80 80 0 0 1 120 150 z" />
                </svg>
            </div>

            <!-- Pre-heading Pill -->
            <div class="mb-4 relative z-10">
                <span class="bg-white/[0.06] border border-white/15 px-4.5 py-1.5 rounded-full text-[10px] font-semibold tracking-[0.15em] text-sage-light uppercase">
                    Guided Screenings
                </span>
            </div>

            <!-- Centered Header -->
            <h2 class="font-serif text-4xl sm:text-5xl md:text-6xl font-light text-white tracking-tight leading-tight mb-4 text-shadow-sm select-none relative z-10">
                Choose Your Wellness Test
            </h2>

            <!-- Short Calming Subtitle -->
            <p class="font-sans text-sm sm:text-base text-olive-light/85 max-w-2xl mx-auto leading-relaxed select-none relative z-10 font-light">
                Understand your emotions, stress levels, and mental well-being through safe, guided self-assessment tests.
            </p>

            <!-- Decorative separator lines -->
            <div class="flex items-center gap-4 mt-6 opacity-40 select-none relative z-10">
                <span class="w-12 h-[1px] bg-gradient-to-r from-transparent to-white"></span>
                <span class="text-[10px] text-white">❀</span>
                <span class="w-12 h-[1px] bg-gradient-to-l from-transparent to-white"></span>
            </div>
        </div>

        <!-- 5. Responsive Grid containing 10 beautiful test cards (5 cols on huge screens, 3 cols on desktops) -->
        <div class="relative w-full max-w-[1440px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 xl:gap-8 z-10">

            <!-- Card 1: Depression Test (PHQ-9) -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <!-- Inner soft glow gradient -->
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Cloud with falling rain/mist -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.5v1.5m-3-1v1m6-1v1"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Depression Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Assess mood fluctuations, persistent sadness, low energy, and interest in daily activities.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/phq9" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 2: Anxiety Test (GAD-7) -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Unwind winding line path -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.656 48.656 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3M4 12a8 8 0 018-8v16a8 8 0 01-8-8z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Anxiety Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Measure worry, cognitive and somatic tension, nervousness, and emotional distress.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/gad7" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 3: Stress Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Calming concentric circles waves -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1.5m0 15V21m-9-9h1.5m15 0H21m-3.343-5.657l-1.06 1.06m-11.18 11.18l-1.06 1.06m0-13.3l1.06 1.06m11.18 11.18l1.06 1.06M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Stress Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Evaluate recent stressors, mental workload, coping efficacy, and tension indicators.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/stress" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 4: Social Anxiety Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Interlocking rings representing connection and space -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="9" cy="12" r="4.25"></circle>
                            <circle cx="15" cy="12" r="4.25"></circle>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Social Anxiety Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Explore comfort levels, social phobias, and avoidance behaviors in interpersonal scenarios.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/socialanxiety" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 5: Sleep Quality Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Crescent moon -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Sleep Quality Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Examine sleep cycles, latency, insomnia tendencies, and daytime sleepiness symptoms.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/sleep" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 6: Burnout Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Flame outline -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Burnout Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Detect professional, mental, and physical fatigue, detachment, and emotional exhaustion.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/burnout" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 7: Panic Disorder Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Pulse EKG wave -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12h3l2.25-6L10.5 18 12.75 9l2.25 3H21.75"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Panic Disorder Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Assess sudden rushes of hyper-fear, panic episodes, palpitations, and somatic shock responses.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/panic" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 8: Emotional Wellness Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Lotus Flower Bloom -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747C19.846 13.117 18.118 12 16 12s-3.846 1.117-4.716 2.253C10.413 13.117 8.685 12 6.562 12s-3.846 1.117-4.716 2.253A9.004 9.004 0 0012 21z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Emotional Wellness
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Evaluate mood regulation, self-awareness, positive psychology markers, and wellness thresholds.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/emotional" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 9: Self-Esteem Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Shield with checkmark/star -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Self-Esteem Test
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Examine your self-worth, positive self-regard, internal confidence, and personal self-image.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/selfesteem" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

            <!-- Card 10: Relationship Health Test -->
            <div class="glass-card group relative p-7 rounded-[25px] flex flex-col h-full min-h-[330px] justify-between overflow-hidden">
                <div class="absolute inset-0 rounded-[25px] bg-gradient-to-br from-sage/8 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                
                <div class="relative z-10 flex flex-col items-start w-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 rounded-2xl bg-white/[0.08] border border-white/10 flex items-center justify-center text-sage-light mb-5 group-hover:bg-sage/20 group-hover:border-sage-light/30 group-hover:text-white transition-all duration-300">
                        <!-- Interlocking hearts -->
                        <svg class="w-6 h-6 stroke-[1.5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                        </svg>
                    </div>
                    
                    <h3 class="font-serif text-xl font-normal text-white group-hover:text-cream-light transition-colors duration-300 mb-2.5 leading-tight">
                        Relationship Health
                    </h3>
                    <p class="font-sans text-[12px] text-olive-light/75 group-hover:text-olive-light/90 transition-colors duration-300 font-light leading-relaxed select-none">
                        Analyze codependency, communication pathways, bonding, empathy, and partner trust factors.
                    </p>
                </div>
                
                <div class="relative z-10 w-full pt-5">
                    <a href="/assessment/relationship" class="block w-full text-center font-sans font-medium text-[11px] tracking-widest uppercase text-white bg-olive hover:bg-olive-dark py-3 px-6 rounded-full shadow-[0_6px_15px_rgba(61,92,63,0.2)] transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]">
                        Start Test
                    </a>
                </div>
            </div>

        </div>

        <!-- Extra ambient bottom spacing to let the design breathe elegantly -->
        <div class="h-20 w-full select-none pointer-events-none"></div>

    </section>

    <!-- ─── Premium Editorial Therapist Section (100% Static & Beautiful) ─── -->
    <section id="therapists-directory" class="relative w-full py-32 px-6 md:px-12 xl:px-24 bg-[#FAF9F6] flex flex-col items-center">
        <div class="relative w-full max-w-[1240px]">
            
            <!-- Top Section: Header with 2-Column Split -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 pb-12 mb-16 border-b border-[#E3DFD5]">
                <div class="max-w-xl">
                    <!-- Pre-title -->
                    <span class="block font-sans text-[10px] font-semibold tracking-[0.2em] text-sage uppercase mb-4 select-none">
                        Expert Practitioners
                    </span>
                    <!-- Left: Large elegant heading -->
                    <h2 class="font-serif text-4xl sm:text-5xl md:text-6xl font-light text-olive leading-none">
                        Meet Our Therapists
                    </h2>
                </div>
                <!-- Right: Supporting paragraph -->
                <div class="max-w-md md:pb-2">
                    <p class="font-sans text-sm sm:text-base text-olive-light/85 leading-relaxed font-light">
                        Experienced professionals dedicated to supporting your emotional wellness journey.
                    </p>
                </div>
            </div>

            <!-- Grid Layout: 4 Columns (2x4 symmetric layout for exactly 8 cards) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1: Dr. Maya Reynolds -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist1.jpg') }}" alt="Dr. Maya Reynolds" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Dr. Maya Reynolds
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Anxiety Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Helping individuals manage anxiety, overthinking, and emotional stress through compassionate therapy and mindfulness techniques.”
                        </p>
                    </div>
                </div>

                <!-- Card 2: Dr. Ethan Brooks -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist2.jpg') }}" alt="Dr. Ethan Brooks" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Dr. Ethan Brooks
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Stress Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Focused on stress recovery and emotional balance with practical coping strategies and supportive guidance.”
                        </p>
                    </div>
                </div>

                <!-- Card 3: Sophia Clarke -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist3.jpg') }}" alt="Sophia Clarke" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Sophia Clarke
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Depression Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Providing a safe and understanding space to navigate emotional challenges and low moods.”
                        </p>
                    </div>
                </div>

                <!-- Card 4: Dr. Liam Sterling -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist4.jpg') }}" alt="Dr. Liam Sterling" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Dr. Liam Sterling
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Sleep Quality Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Integrating gentle sleep hygiene protocols and cognitive restructuring to help you find deep, restorative night-time rest.”
                        </p>
                    </div>
                </div>

                <!-- Card 5: Clara Vance, LMFT -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist5.jpg') }}" alt="Clara Vance, LMFT" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Clara Vance, LMFT
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Relationship Health Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Mending connection, communication, and emotional intimacy through empathetic couples guidance and attachment healing.”
                        </p>
                    </div>
                </div>

                <!-- Card 6: Dr. Jonathan Hills -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="{{ asset('images/therapist6.jpg') }}" alt="Dr. Jonathan Hills" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Dr. Jonathan Hills
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Burnout Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Providing a supportive space to recover from work exhaustion, establish healthy boundaries, and restore physical vitality.”
                        </p>
                    </div>
                </div>

                <!-- Card 7: Olivia Ross, PsyD -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=400&h=400" alt="Olivia Ross, PsyD" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Olivia Ross, PsyD
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Social Anxiety Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Guiding you toward self-acceptance and quiet confidence, helping you navigate social interactions with calm self-assurance.”
                        </p>
                    </div>
                </div>

                <!-- Card 8: Dr. Marcus Sterling -->
                <div class="group relative bg-white border border-[#E3DFD5]/60 rounded-[28px] p-6 shadow-[0_4px_20px_rgba(61,92,63,0.02)] transition-all duration-500 hover:shadow-[0_16px_40px_rgba(74,117,80,0.07)] hover:-translate-y-2 flex flex-col h-full justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-12 w-24 h-24 bg-sage/5 rounded-full filter blur-xl group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>
                    <div>
                        <!-- Avatar -->
                        <div class="relative w-full aspect-square rounded-[20px] overflow-hidden mb-5 border border-black/[0.02] shadow-[inset_0_2px_4px_rgba(0,0,0,0.02)]">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=400&h=400" alt="Dr. Marcus Sterling" class="w-full h-full object-cover transition-all duration-700 ease-out transform group-hover:scale-105" loading="lazy">
                        </div>
                        <!-- Name -->
                        <h3 class="font-serif text-2xl font-light text-olive mb-1 group-hover:text-sage-dark transition-colors duration-300">
                            Dr. Marcus Sterling
                        </h3>
                        <!-- Specialization -->
                        <div class="inline-flex items-center mb-3.5">
                            <span class="text-[9px] tracking-widest font-semibold font-sans text-sage uppercase bg-sage/10 text-sage px-3.5 py-1 rounded-full">
                                Specializes in: Panic Disorder Test
                            </span>
                        </div>
                        <!-- Bio -->
                        <p class="font-sans text-[13px] text-olive-light/85 leading-relaxed font-light select-none">
                            “Supporting the resolution of sudden panic peaks and somatic stress triggers using gentle somatic integration and nervous system regulation.”
                        </p>
                    </div>
                </div>

            </div>
            
            <!-- Minimal elegant footer/CTA spacing -->
            <div class="mt-20 flex flex-col items-center">
                <div class="h-[1px] w-24 bg-[#E3DFD5] mb-8"></div>
                <p class="font-sans text-[11px] tracking-[0.2em] uppercase text-sage font-semibold">
                    TheraWel Wellness Directory
                </p>
            </div>

        </div>
    </section>

    <!-- Dropdown Interactive Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const profileBtn = document.getElementById('profile-btn');
            const profileDropdown = document.getElementById('profile-dropdown');
            const chevronIcon = document.getElementById('chevron-icon');

            if (profileBtn && profileDropdown) {
                profileBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const isExpanded = profileBtn.getAttribute('aria-expanded') === 'true';
                    if (isExpanded) {
                        closeDropdown();
                    } else {
                        openDropdown();
                    }
                });

                // Close dropdown on click outside
                document.addEventListener('click', (e) => {
                    if (!profileDropdown.contains(e.target) && !profileBtn.contains(e.target)) {
                        closeDropdown();
                    }
                });

                // Close dropdown on ESC key
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        closeDropdown();
                    }
                });
            }

            function openDropdown() {
                profileBtn.setAttribute('aria-expanded', 'true');
                profileDropdown.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                profileDropdown.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');
                if (chevronIcon) {
                    chevronIcon.classList.add('rotate-180');
                }
            }

            function closeDropdown() {
                profileBtn.setAttribute('aria-expanded', 'false');
                profileDropdown.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
                profileDropdown.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                if (chevronIcon) {
                    chevronIcon.classList.remove('rotate-180');
                }
            }
        });
    </script>

</body>
</html>
