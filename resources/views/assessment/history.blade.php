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

        /* Highly Legible Earthy Severity Badges & Pills */
        .sev-minimal  { background: rgba(168, 197, 171, 0.15); border: 1px solid rgba(168, 197, 171, 0.4); color: #a8c5ab; }
        .sev-mild     { background: rgba(122, 158, 126, 0.15); border: 1px solid rgba(122, 158, 126, 0.4); color: #b4ccb7; }
        .sev-moderate { background: rgba(212, 178, 140, 0.15); border: 1px solid rgba(212, 178, 140, 0.4); color: #d4b28c; }
        .sev-severe   { background: rgba(197, 142, 147, 0.15); border: 1px solid rgba(197, 142, 147, 0.4); color: #c58e93; }

        /* Custom pill spacing and borders */
        .sev-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.85rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.03em;
            white-space: nowrap;
        }

        /* Table transition rows */
        .table-row-hover {
            transition: background-color 0.3s ease;
        }
        .table-row-hover:hover {
            background-color: rgba(255, 255, 255, 0.03);
        }

        /* Mobile specific displays */
        @media (max-width: 640px) {
            .desktop-table { display: none; }
            .mobile-cards { display: block; }
        }
    </style>
@endsection

@section('content')

{{-- ════════════════════════════════════════
     PHP: derive helper variables
     (Maintained identically as original logic)
════════════════════════════════════════ --}}
@php
    $total       = $results->count();
    $latest      = $results->first();
    $latestScore = $latest ? $latest->score    : '—';
    $latestSev   = $latest ? $latest->severity : '—';

    // Returns [cssClass, barColour, emoji dot] matching the comforting earthy Spa palette of result.blade.php
    $sevMeta = function(string $s) {
        return match($s) {
            'Minimal'  => ['sev-minimal',  '#a8c5ab', '🌿'],
            'Mild'     => ['sev-mild',     '#7a9e7e', '🌤️'],
            'Moderate' => ['sev-moderate', '#d4b28c', '🌥️'],
            default    => ['sev-severe',   '#c58e93', '🆘'],
        };
    };
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
            
        </div>
    </nav>

    {{-- ── Main Container ── --}}
    <main class="flex-1 w-full max-w-4xl mx-auto px-6 pt-32 pb-24 relative z-10" id="history-main">

        {{-- ── Page heading ── --}}
        <header class="text-center mb-10 animate-fade-in">
            
            <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-light text-white tracking-tight leading-tight mb-2">
                Assessment <span class="bg-gradient-to-r from-sage-light via-[#f7f5f2] to-cream bg-clip-text text-transparent font-medium drop-shadow-[0_2px_8px_rgba(168,197,171,0.15)]">History</span>
            </h1>
            <p class="text-sm text-slate-300 tracking-wide font-light">Track your emotional wellness progress over time</p>
        </header>

        {{-- ── Summary Stats Grid ── --}}
        <section class="grid grid-cols-2 sm:grid-cols-3 gap-4.5 mb-8 animate-fade-in-up" role="region" aria-label="Summary statistics" style="animation-delay: 80ms;">
            <!-- Total Assessments Card -->
            <div class="glass-premium rounded-2xl p-5 flex flex-col gap-1 relative overflow-hidden">
                <span class="text-[10px] font-bold uppercase tracking-[0.12em] text-slate-400">Total Assessments</span>
                <span class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mt-1 drop-shadow-[0_2px_6px_rgba(168,197,171,0.15)]">
                    {{ $total }}
                </span>
                <span class="text-xs text-slate-400 font-light mt-1">attempts recorded</span>
            </div>

            <!-- Latest Score Card -->
            <div class="glass-premium rounded-2xl p-5 flex flex-col gap-1 relative overflow-hidden">
                <span class="text-[10px] font-bold uppercase tracking-[0.12em] text-slate-400">Latest Score</span>
                <span class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mt-1 drop-shadow-[0_2px_6px_rgba(168,197,171,0.15)]">
                    {{ $latestScore }}<span class="text-base font-normal text-slate-400">/27</span>
                </span>
                <span class="text-xs text-slate-400 font-light mt-1">most recent result</span>
            </div>

            <!-- Latest Severity Card -->
            <div class="glass-premium rounded-2xl p-5 col-span-2 sm:col-span-1 flex flex-col gap-1 relative overflow-hidden">
                <span class="text-[10px] font-bold uppercase tracking-[0.12em] text-slate-400">Latest Severity</span>
                <span class="text-xl sm:text-2xl font-bold tracking-tight text-sage-light mt-2.5 truncate" title="{{ $latestSev }}">
                    {{ $latestSev }}
                </span>
                <span class="text-xs text-slate-400 font-light mt-1.5">current level</span>
            </div>
        </section>

        {{-- ── Main History Card ── --}}
        <section class="glass-premium rounded-[32px] overflow-hidden mb-10 animate-fade-in-up" id="history-card" aria-label="PHQ-9 History List" style="animation-delay: 160ms;">
            
            {{-- Card Header --}}
            <div class="flex items-center justify-between px-6 py-5 md:px-8 border-b border-white/5 bg-white/[0.01]">
                <h2 class="text-xs font-bold tracking-wider uppercase text-slate-400">All Assessments</h2>
                @if($total > 0)
                    <span class="bg-sage-deep/80 border border-sage/40 text-sage-light text-xs font-bold rounded-full px-3 py-1 shadow-sm">
                        {{ $total }} {{ $total === 1 ? 'record' : 'records' }}
                    </span>
                @endif
            </div>

            @if($total === 0)
                {{-- Empty state --}}
                <div class="flex flex-col items-center justify-center text-center p-12 md:p-16 gap-4" id="empty-state">
                    <span class="text-5xl leading-none" aria-hidden="true">🧘</span>
                    <h3 class="text-lg font-medium text-white font-serif">No assessments taken yet.</h3>
                    <p class="text-sm text-slate-400 max-w-xs leading-relaxed">Your PHQ-9 history will appear here once you complete your first assessment.</p>
                    <a href="{{ url('/assessment/phq9') }}"
                       class="mt-4 relative overflow-hidden flex items-center justify-center gap-2 font-sans font-semibold text-xs tracking-[0.08em] uppercase text-white bg-gradient-to-r from-sage-dark to-sage hover:from-olive hover:to-sage-light px-6 py-4 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:scale-[1.03] active:scale-[0.97]"
                       id="first-assessment-btn">
                        ✨ Take First Assessment
                    </a>
                </div>
            @else
                {{-- ── Desktop table (visible above sm) ── --}}
                <div class="desktop-table hidden sm:block overflow-x-auto">
                    <table class="w-full border-collapse" role="table" aria-label="PHQ-9 assessment history">
                        <thead>
                            <tr class="border-b border-white/5 text-left bg-white/[0.005]">
                                <th scope="col" class="px-6 py-4 md:px-8 text-[10px] font-bold tracking-wider uppercase text-slate-400">#</th>
                                <th scope="col" class="px-6 py-4 md:px-8 text-[10px] font-bold tracking-wider uppercase text-slate-400">Date</th>
                                <th scope="col" class="px-6 py-4 md:px-8 text-[10px] font-bold tracking-wider uppercase text-slate-400">Score</th>
                                <th scope="col" class="px-6 py-4 md:px-8 text-[10px] font-bold tracking-wider uppercase text-slate-400">Severity</th>
                                <th scope="col" class="px-6 py-4 md:px-8 text-[10px] font-bold tracking-wider uppercase text-slate-400">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $index => $result)
                            @php
                                [$sevClass, $barColor, $dot] = $sevMeta($result->severity);
                                $barPct = round(($result->score / 27) * 100);
                            @endphp
                            <tr class="border-b border-white/5 table-row-hover">
                                <td class="px-6 py-5 md:px-8 text-xs font-semibold text-slate-500">
                                    {{ $index + 1 }}
                                </td>
                                <td class="px-6 py-5 md:px-8">
                                    <div class="text-sm font-semibold text-slate-100">
                                        {{ \Carbon\Carbon::parse($result->created_at)->format('M j, Y') }}
                                    </div>
                                    <div class="text-xs text-slate-400 mt-0.5">
                                        {{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}
                                    </div>
                                </td>
                                <td class="px-6 py-5 md:px-8">
                                    <div class="text-base font-bold text-white leading-none">
                                        {{ $result->score }}<span class="text-xs text-slate-400 font-normal"> / 27</span>
                                    </div>
                                    <!-- Dynamic Spa Style Score Progress Bar -->
                                    <div class="w-20 h-1.5 bg-black/40 rounded-full overflow-hidden mt-1.5 border border-white/5">
                                        <div class="h-full rounded-full transition-all duration-500"
                                             style="width:{{ $barPct }}%; background:{{ $barColor }}; box-shadow: 0 0 6px {{ $barColor }}50;"></div>
                                    </div>
                                </td>
                                <td class="px-6 py-5 md:px-8">
                                    <span class="sev-pill {{ $sevClass }}">
                                        <span class="text-base leading-none">{{ $dot }}</span>
                                        <span>{{ $result->severity }}</span>
                                    </span>
                                </td>
                                <td class="px-6 py-5 md:px-8">
                                    @if($result->severity === 'Minimal')
                                        <span class="text-xs font-medium text-[#a8c5ab] inline-flex items-center gap-1">✔ Stable</span>
                                    @elseif($result->severity === 'Mild')
                                        <span class="text-xs font-medium text-[#b4ccb7] inline-flex items-center gap-1">⚠ Monitor</span>
                                    @elseif($result->severity === 'Moderate')
                                        <span class="text-xs font-medium text-[#d4b28c] inline-flex items-center gap-1">⚠ Attention</span>
                                    @else
                                        <span class="text-xs font-medium text-[#c58e93] inline-flex items-center gap-1">🚨 Seek Help</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- ── Mobile stacked cards (visible under sm) ── --}}
                <div class="mobile-cards sm:hidden divide-y divide-white/5" aria-label="Assessment history">
                    @foreach($results as $result)
                    @php
                        [$sevClass, $barColor, $dot] = $sevMeta($result->severity);
                    @endphp
                    <div class="p-5 flex items-center justify-between gap-4 table-row-hover bg-white/[0.005]">
                        <div class="flex flex-col gap-1">
                            <span class="text-sm font-semibold text-slate-100">
                                {{ \Carbon\Carbon::parse($result->created_at)->format('M j, Y · g:i A') }}
                            </span>
                            <span class="text-xs text-slate-400">
                                {{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="flex flex-col items-end gap-2 flex-shrink-0">
                            <span class="text-base font-bold text-white leading-none">
                                {{ $result->score }}<span class="text-xs text-slate-400 font-normal">/27</span>
                            </span>
                            <span class="sev-pill {{ $sevClass }}">
                                <span class="text-xs">{{ $dot }}</span>
                                <span>{{ $result->severity }}</span>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </section>

        {{-- ── Divider ── --}}
        <hr class="border-0 border-t border-white/5 mb-8" aria-hidden="true">

        {{-- ── Action Buttons ── --}}
        <nav class="action-row flex flex-col sm:flex-row items-center justify-center gap-4.5 animate-fade-in-up" aria-label="History actions" style="animation-delay: 240ms;">
            
            <a href="{{ url('/dashboard') }}"
               class="w-full sm:w-auto flex items-center justify-center gap-2 font-sans font-semibold text-xs tracking-[0.08em] uppercase text-slate-300 bg-white/5 border border-white/10 hover:border-sage-light/40 hover:bg-white/10 px-8 py-4.5 rounded-full transition-all duration-300 hover:scale-[1.03] active:scale-[0.97]"
               id="home-btn"
               aria-label="Go back to home">
                 Back to Home
            </a>
        </nav>

    </main>

    {{-- Minimal Sleek Footer --}}
    <footer class="w-full py-6 text-center text-xs text-slate-600 border-t border-white/[0.03] mt-auto relative z-10 select-none pointer-events-none">
        &copy; {{ date('Y') }} TheraWel. All rights reserved.
    </footer>

</div>

@endsection
