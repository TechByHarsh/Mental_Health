<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Therawell – Reach out to us for support.">
    <title>Contact Us – Therawell</title>
    
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

        /* ─── Cards ────────────────────────────────────────── */
        .contact-card {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 48px 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            min-height: 420px;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.06);
        }

        .card-icon-container {
            width: 120px;
            height: 120px;
            margin: 32px auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-icon-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .card-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem;
            color: var(--text-dark);
            margin-bottom: 12px;
            font-weight: 400;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <!-- Header -->
    <header>
        <nav class="nav-pills">
            <a href="/" class="nav-item">Home</a>
            <a href="/about" class="nav-item">About</a>
            <a href="/services" class="nav-item">Services</a>
            <a href="/contact" class="nav-item active">
                <span class="active-dot"></span>
                Contact
            </a>
        </nav>

        <div class="brand-logo">thērawell</div>

        <div class="header-cta">
            <a href="/assessment/phq9" class="btn-book">Book A Session</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center py-16 px-6 lg:px-16 w-full max-w-[1440px] mx-auto">
        
        <!-- Header Text -->
        <div class="text-center mb-16 space-y-6">
            <h1 class="font-serif text-6xl lg:text-[4.5rem] text-slate-900 font-light">Get in Touch</h1>
            <p class="text-slate-500 font-medium text-[0.95rem] tracking-wide">Reach out to us for inquiries, appointments, or general support.</p>
        </div>

        <!-- Cards Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-6xl">
            
            <!-- Address Card -->
            <div class="contact-card">
                <h2 class="card-title">Address</h2>
                <div class="card-icon-container">
                    <img src="{{ asset('images/address.png') }}" alt="Map and Pin Illustration">
                </div>
                <div class="mt-auto space-y-1">
                    <p class="text-[0.7rem] text-slate-500 font-medium mb-2">Office</p>
                    <p class="text-slate-700 text-[0.95rem] font-medium">1004 Teuku Umar Street</p>
                    <p class="text-slate-700 text-[0.95rem] font-medium">Denpasar, Bali 80113</p>
                    <p class="text-slate-700 text-[0.95rem] font-medium">Indonesia</p>
                </div>
            </div>

            <!-- Social Media Card -->
            <div class="contact-card">
                <h2 class="card-title">Social Media</h2>
                <div class="card-icon-container">
                    <img src="{{ asset('images/socialmedia.png') }}" alt="Camera and Photos Illustration">
                </div>
                <div class="mt-auto w-full">
                    <div class="flex items-center justify-center gap-10 mb-6">
                        <div class="text-center">
                            <p class="text-[0.7rem] text-slate-500 font-medium mb-1">Instagram</p>
                            <p class="text-slate-700 text-[0.95rem] font-medium">@therawell</p>
                        </div>
                        <div class="w-[1px] h-10 bg-slate-200"></div>
                        <div class="text-center">
                            <p class="text-[0.7rem] text-slate-500 font-medium mb-1">LinkedIn</p>
                            <p class="text-slate-700 text-[0.95rem] font-medium">Therawell</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <p class="text-[0.7rem] text-slate-500 font-medium mb-1">Facebook</p>
                        <p class="text-slate-700 text-[0.95rem] font-medium">Therawell Wellness</p>
                    </div>
                </div>
            </div>

            <!-- Contact Card -->
            <div class="contact-card">
                <h2 class="card-title">Contact</h2>
                <div class="card-icon-container">
                    <img src="{{ asset('images/contact.png') }}" alt="Smartphone with Message Illustration">
                </div>
                <div class="mt-auto w-full flex items-center justify-center gap-8">
                    <div class="text-center">
                        <p class="text-[0.7rem] text-slate-500 font-medium mb-1">Email</p>
                        <p class="text-slate-700 text-[0.95rem] font-medium">hello@therawell.com</p>
                    </div>
                    <div class="w-[1px] h-10 bg-slate-200"></div>
                    <div class="text-center">
                        <p class="text-[0.7rem] text-slate-500 font-medium mb-1">Phone</p>
                        <p class="text-slate-700 text-[0.95rem] font-medium">+1 (604) 555-2874</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Visit Our Wellness Space Section -->
        <div class="w-full max-w-6xl mt-32 mb-16">
            <!-- Header Row -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-6">
                <h2 class="font-serif text-4xl lg:text-5xl text-slate-900 font-light max-w-sm leading-[1.15]">Visit Our Wellness Space</h2>
                <p class="text-slate-500 font-medium text-[0.95rem] tracking-wide max-w-[280px] md:text-left leading-relaxed">A welcoming and safe environment designed to support healing and personal growth.</p>
            </div>

            <!-- 3-Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                
                <!-- Left: Location List -->
                <div class="flex flex-col space-y-2">
                    <button class="loc-btn flex items-center justify-between w-full px-6 py-6 border-b border-transparent text-left transition-all duration-300 bg-[#f5f3ec] rounded-xl" data-loc="1">
                        <span class="text-slate-800 font-serif text-xl"><span class="text-slate-400 text-sm font-sans mr-4 font-medium">01</span> Ubud</span>
                        <span class="loc-plus text-slate-400 text-xl font-light opacity-0">+</span>
                    </button>
                    
                    <button class="loc-btn flex items-center justify-between w-full px-6 py-6 border-b border-slate-200/60 text-left transition-all duration-300 hover:bg-slate-50/50 rounded-xl" data-loc="2">
                        <span class="text-slate-800 font-serif text-xl"><span class="text-slate-400 text-sm font-sans mr-4 font-medium">02</span> Seminyak</span>
                        <span class="loc-plus text-slate-400 text-xl font-light transition-opacity duration-300">+</span>
                    </button>
                    
                    <button class="loc-btn flex items-center justify-between w-full px-6 py-6 border-b border-slate-200/60 text-left transition-all duration-300 hover:bg-slate-50/50 rounded-xl" data-loc="3">
                        <span class="text-slate-800 font-serif text-xl"><span class="text-slate-400 text-sm font-sans mr-4 font-medium">03</span> Sanur</span>
                        <span class="loc-plus text-slate-400 text-xl font-light transition-opacity duration-300">+</span>
                    </button>
                    
                    <button class="loc-btn flex items-center justify-between w-full px-6 py-6 border-b border-slate-200/60 text-left transition-all duration-300 hover:bg-slate-50/50 rounded-xl" data-loc="4">
                        <span class="text-slate-800 font-serif text-xl"><span class="text-slate-400 text-sm font-sans mr-4 font-medium">04</span> Kura Mandalika</span>
                        <span class="loc-plus text-slate-400 text-xl font-light transition-opacity duration-300">+</span>
                    </button>
                </div>

                <!-- Center: Image Display -->
                <div class="bg-[#f5f3ec] rounded-2xl p-6 lg:p-8 flex items-center justify-center">
                    <img src="{{ asset('images/location1.png') }}" alt="Wellness Location" id="loc-img" class="w-full h-full object-cover rounded-md shadow-[0_4px_20px_rgba(0,0,0,0.05)] aspect-[4/3] lg:aspect-square transition-opacity duration-500">
                </div>

                <!-- Right: Location Info -->
                <div class="bg-[#f5f3ec] rounded-2xl p-10 flex flex-col items-center justify-center text-center relative overflow-hidden min-h-[350px]">
                    <div id="loc-info-content" class="transition-opacity duration-500 flex flex-col items-center w-full space-y-8">
                        <h3 class="font-serif text-[1.7rem] text-slate-800" id="loc-name">Ubud, Bali</h3>
                        
                        <div class="w-full space-y-1">
                            <p class="text-[0.65rem] text-slate-500 font-semibold mb-2 uppercase tracking-widest">Address</p>
                            <p class="text-slate-700 text-[0.9rem] font-medium leading-relaxed" id="loc-address">
                                42 Serenity Lane<br>Ubud, Bali, Indonesia
                            </p>
                        </div>
                        
                        <div class="w-full h-[1px] bg-slate-200/70 max-w-[80px] mx-auto"></div>

                        <div class="w-full space-y-1">
                            <p class="text-[0.65rem] text-slate-500 font-semibold mb-2 uppercase tracking-widest">Open Hours</p>
                            <p class="text-slate-700 text-[0.9rem] font-medium leading-relaxed" id="loc-hours">
                                Mon – Fri<br>08:00 AM – 06:00 PM
                            </p>
                        </div>

                        <div class="pt-2 w-full flex justify-center">
                            <a href="#" class="inline-block bg-white text-slate-800 text-[0.85rem] font-semibold px-8 py-3.5 rounded-full hover:bg-slate-50 hover:shadow-md transition-all duration-300 shadow-sm border border-slate-100">
                                Open Maps
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FAQs Section -->
        <div class="w-full max-w-6xl mt-24 mb-16 px-4">
            <!-- Header -->
            <div class="text-center mb-16 space-y-4">
                <h2 class="font-serif text-5xl lg:text-6xl text-slate-900 font-light">FAQs</h2>
                <p class="text-slate-500 font-medium text-[0.95rem] tracking-wide max-w-xs mx-auto leading-relaxed">
                    Important details to guide you through your therapy and wellness journey.
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-20 lg:gap-x-24 gap-y-0">
                
                <!-- Left Column -->
                <div class="flex flex-col">
                    
                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">Is therapy confidential?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Yes. Every session is fully confidential and protected by professional ethics and established standards of care.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">Can I switch therapists if needed?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Absolutely. We believe finding the right fit is crucial for your therapeutic journey. If you feel another therapist might be a better match, we are happy to facilitate a transfer.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">How many sessions will I need?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                The number of sessions varies depending on your individual needs and goals. We typically start with an initial assessment and collaborate with you to create a personalized treatment plan.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">Can I join wellness programs without therapy?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Yes, our wellness programs, including mindfulness workshops and group sessions, are open to everyone, regardless of whether you are engaged in individual therapy.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="flex flex-col">
                    
                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">What therapy approaches do you use?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Our therapists are trained in various evidence-based modalities, including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Psychodynamic Therapy, and Mindfulness-Based Cognitive Therapy.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">How do I get started?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                You can get started by booking an initial consultation through our website or contacting our support team. We will guide you through the intake process and match you with a suitable therapist.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">Are online sessions available?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Yes, we offer secure and confidential telehealth sessions for those who prefer to engage in therapy from the comfort of their own home or have schedule constraints.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item border-b border-slate-200/70">
                        <button class="faq-btn w-full flex items-start gap-8 py-8 text-left focus:outline-none group">
                            <span class="faq-icon text-slate-400 font-light text-2xl leading-none pt-0.5 group-hover:text-slate-800 transition-colors duration-300">+</span>
                            <span class="font-serif text-[1.35rem] text-slate-800 group-hover:text-slate-900 transition-colors duration-300">Who are your therapists?</span>
                        </button>
                        <div class="faq-content overflow-hidden transition-all duration-500 max-h-0 opacity-0">
                            <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed pb-8 pl-[3.5rem] pr-4">
                                Our team consists of licensed psychologists, clinical social workers, and professional counselors with diverse backgrounds and specialized training in various areas of mental health.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Send Us a Message Section -->
        <div class="w-full mt-16 mb-8">
            <div class="bg-[#1c1f1c] rounded-[2.5rem] overflow-hidden flex flex-col lg:flex-row shadow-2xl relative w-full border border-slate-800/50">
                
                <!-- Left Side: Heading & Image -->
                <div class="w-full lg:w-1/2 p-12 lg:p-20 flex flex-col justify-between relative min-h-[500px]">
                    <h2 class="font-serif text-5xl lg:text-6xl text-[#fcfaf6] leading-[1.15] max-w-md z-10 font-light">
                        Send Us a Message.<br>We're Here to Help
                    </h2>
                    
                    <div class="mt-16 lg:mt-0 w-full max-w-[340px] lg:absolute lg:bottom-12 lg:left-12 z-0">
                        <img src="{{ asset('images/contact-side.png') }}" alt="Contact Us" class="w-full h-auto object-contain">
                    </div>
                </div>

                <!-- Right Side: Form Card -->
                <div class="w-full lg:w-1/2 p-6 lg:p-12 flex items-center justify-center bg-[#1c1f1c]">
                    <div class="bg-[#fcfaf6] rounded-2xl p-8 lg:p-12 w-full shadow-xl relative z-10">
                        <p class="text-slate-500 font-sans text-[0.95rem] leading-relaxed mb-10 max-w-md">
                            Share your questions or appointment preferences, and our team will guide you through the next steps.
                        </p>

                        <form class="space-y-8">
                            <!-- Row 1: Name & Email -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Name</label>
                                    <input type="text" placeholder="Full Name" class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-slate-800 transition-colors">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Email</label>
                                    <input type="email" placeholder="Email Address" class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-slate-800 transition-colors">
                                </div>
                            </div>

                            <!-- Row 2: Phone & Service -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-2">
                                    <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Phone <span class="text-slate-400 font-normal tracking-normal">(Optional)</span></label>
                                    <input type="tel" placeholder="Phone Number" class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-slate-800 transition-colors">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Service</label>
                                    <select class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-500 focus:outline-none focus:border-slate-800 transition-colors appearance-none cursor-pointer" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%2394a3b8%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 0.5rem center; background-size: 0.65em auto;">
                                        <option value="" disabled selected>Preferred Service</option>
                                        <option value="therapy" class="text-slate-800">Individual Therapy</option>
                                        <option value="couples" class="text-slate-800">Couples Counseling</option>
                                        <option value="coaching" class="text-slate-800">Life Coaching</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 3: Session Type -->
                            <div class="space-y-4">
                                <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Session Type <span class="text-slate-400 font-normal tracking-normal">(Choose One)</span></label>
                                <div class="flex items-center gap-8 border-b border-slate-300 pb-4">
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="radio" name="session_type" value="in-person" class="w-4 h-4 text-slate-800 bg-transparent border-slate-300 focus:ring-slate-800 cursor-pointer accent-slate-800">
                                        <span class="text-[0.95rem] text-slate-500 group-hover:text-slate-800 transition-colors">In-Person</span>
                                    </label>
                                    <label class="flex items-center gap-3 cursor-pointer group">
                                        <input type="radio" name="session_type" value="online" class="w-4 h-4 text-slate-800 bg-transparent border-slate-300 focus:ring-slate-800 cursor-pointer accent-slate-800">
                                        <span class="text-[0.95rem] text-slate-500 group-hover:text-slate-800 transition-colors">Online</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Row 4: Date & Time -->
                            <div class="space-y-2">
                                <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Date & Time</label>
                                <div class="relative">
                                    <input type="text" placeholder="Preferred Date & Time" class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-slate-800 transition-colors cursor-pointer">
                                    <svg class="w-[1.1rem] h-[1.1rem] text-slate-400 absolute right-2 top-0 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            </div>

                            <!-- Row 5: Message -->
                            <div class="space-y-2 pt-2">
                                <label class="text-[0.75rem] text-slate-500 font-medium tracking-wide">Message</label>
                                <textarea placeholder="Type Your Concern Here" rows="2" class="w-full border-b border-slate-300 bg-transparent pb-2 text-[0.95rem] text-slate-800 placeholder-slate-400 focus:outline-none focus:border-slate-800 transition-colors resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-6">
                                <button type="submit" class="bg-[#1c1f1c] text-white px-8 py-3.5 rounded-full text-[0.95rem] font-medium hover:bg-black hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        const locations = {
            1: {
                name: "Ubud, Bali",
                address: "42 Serenity Lane<br>Ubud, Bali, Indonesia",
                hours: "Mon – Fri<br>08:00 AM – 06:00 PM",
                image: "{{ asset('images/location1.png') }}"
            },
            2: {
                name: "Seminyak, Bali",
                address: "18 Taman Sari Road<br>Seminyak, Bali, Indonesia",
                hours: "Mon – Fri<br>09:00 AM – 07:00 PM",
                image: "{{ asset('images/location2.png') }}"
            },
            3: {
                name: "Sanur, Bali",
                address: "99 Coastal Path<br>Sanur, Bali, Indonesia",
                hours: "Tue – Sun<br>07:00 AM – 05:00 PM",
                image: "{{ asset('images/location3.png') }}"
            },
            4: {
                name: "Kura Mandalika",
                address: "1 Ocean View Drive<br>Mandalika, Lombok, Indonesia",
                hours: "Mon – Sat<br>10:00 AM – 08:00 PM",
                image: "{{ asset('images/location4.png') }}"
            }
        };

        const locBtns = document.querySelectorAll('.loc-btn');
        const locImg = document.getElementById('loc-img');
        const locInfoContent = document.getElementById('loc-info-content');
        const locName = document.getElementById('loc-name');
        const locAddress = document.getElementById('loc-address');
        const locHours = document.getElementById('loc-hours');

        locBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Reset all buttons to inactive state
                locBtns.forEach(b => {
                    b.classList.remove('bg-[#f5f3ec]', 'border-transparent');
                    b.classList.add('border-b', 'border-slate-200/60');
                    b.querySelector('.loc-plus').classList.remove('opacity-0');
                });
                
                // Set clicked button to active state
                btn.classList.add('bg-[#f5f3ec]', 'border-transparent');
                btn.classList.remove('border-b', 'border-slate-200/60');
                btn.querySelector('.loc-plus').classList.add('opacity-0');
                
                const locId = btn.getAttribute('data-loc');
                const data = locations[locId];

                // Fade out current content
                locImg.style.opacity = '0';
                locInfoContent.style.opacity = '0';

                // Wait for fade out, then update content and fade in
                setTimeout(() => {
                    locImg.src = data.image;
                    locName.innerHTML = data.name;
                    locAddress.innerHTML = data.address;
                    locHours.innerHTML = data.hours;

                    locImg.style.opacity = '1';
                    locInfoContent.style.opacity = '1';
                }, 300);
            });
        });

        // FAQ Accordion Logic
        const faqs = document.querySelectorAll('.faq-item');
        faqs.forEach(faq => {
            const btn = faq.querySelector('.faq-btn');
            const icon = faq.querySelector('.faq-icon');
            const content = faq.querySelector('.faq-content');
            
            btn.addEventListener('click', () => {
                const isOpen = faq.classList.contains('open');
                
                // Close all others
                faqs.forEach(f => {
                    f.classList.remove('open');
                    f.querySelector('.faq-icon').innerHTML = '+';
                    f.querySelector('.faq-content').style.maxHeight = '0px';
                    f.querySelector('.faq-content').style.opacity = '0';
                });

                if (!isOpen) {
                    faq.classList.add('open');
                    icon.innerHTML = '&minus;'; // Minus symbol
                    content.style.maxHeight = content.scrollHeight + 'px';
                    content.style.opacity = '1';
                }
            });
        });
    </script>

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
                        <span class="tw-contact-val"><a href="tel:+16045552874">+1 (604) 555-2874</a></span>
                    </div>
                    <div class="tw-contact-item">
                        <span class="tw-contact-key">Email</span>
                        <span class="tw-contact-val"><a href="mailto:hello@therawell.com">hello@therawell.com</a></span>
                    </div>
                    <div class="tw-contact-item">
                        <span class="tw-contact-key">Address</span>
                        <span class="tw-contact-val">18 Taman Sari Road,<br>Ubud, Bali, Indonesia</span>
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
