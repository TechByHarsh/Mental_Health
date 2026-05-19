<!-- ─── Premium Contact Us Section ─── -->
<section id="contact-us" class="relative w-full py-28 px-6 md:px-12 xl:px-24 bg-[#050505] bg-[radial-gradient(circle_at_top_left,rgba(255,255,255,0.03),transparent_40%)] overflow-hidden flex justify-center">

    <div class="relative z-10 w-full max-w-[1240px] grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-8 items-center">
        <!-- Left Side: Typography & Illustration -->
        <div class="flex flex-col text-left">
            <h2 class="font-serif text-5xl md:text-6xl lg:text-[76px] font-light text-cream-light leading-tight mb-8 tracking-tight relative">
                We’re Here <br>
                When You 
                <span class="text-sage-light relative inline-block">
                    Need Us
                    <!-- Decorative stroke -->
                    <svg class="absolute w-full h-3 -bottom-1 left-0 text-sage-light" viewBox="0 0 100 10" preserveAspectRatio="none">
                        <path d="M0 5 Q 50 10 100 2" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"/>
                    </svg>
                </span>
                <!-- Small heart icon -->
                <svg class="inline-block w-8 h-8 text-sage-light ml-3 -mt-6 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                </svg>
            </h2>

            <p class="font-sans text-lg text-cream-light/80 font-light max-w-md leading-relaxed mb-12">
                Have a question, need support, or want to share feedback? We’d love to hear from you. Our team is here to help.
            </p>

            <div class="w-full max-w-md mt-auto">
                <img src="{{ asset('images/contact-illustration.png') }}" alt="Contact Us Illustration" class="w-full h-auto drop-shadow-[0_15px_35px_rgba(0,0,0,0.5)] opacity-95 transition-transform duration-700 hover:scale-[1.02] filter contrast-105" loading="lazy">
            </div>
        </div>

        <!-- Right Side: Contact Form Card -->
        <div class="w-full flex justify-end">
            <div class="bg-cream-light rounded-[32px] p-8 md:p-12 w-full max-w-[580px] shadow-[0_8px_30px_rgba(0,0,0,0.5)] relative overflow-hidden group/card">
                <!-- Top of Form -->
                <div class="flex items-center gap-5 mb-10">
                    <div class="w-16 h-16 rounded-full bg-sage-light/20 flex items-center justify-center flex-shrink-0 shadow-inner">
                        <svg class="w-7 h-7 text-olive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-serif text-3xl text-olive font-medium mb-1">Contact Us</h3>
                        <p class="font-sans text-sm text-olive-light/80 font-light">Fill out the form below and we’ll get back to you soon.</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.submit') }}" class="space-y-8">
                    @csrf
                    <!-- Row 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="relative group">
                            <label class="block font-sans text-xs font-semibold tracking-wider uppercase text-olive-light/80 mb-2">Full Name</label>
                            <input type="text" name="full_name" value="{{ auth()->user()->name }}" required class="w-full bg-transparent border-t-0 border-x-0 border-b border-olive-light/20 text-olive text-sm px-0 py-2.5 focus:ring-0 focus:border-olive transition-colors placeholder:text-olive-light/40" placeholder="Enter your full name">
                        </div>
                        <div class="relative group">
                            <label class="block font-sans text-xs font-semibold tracking-wider uppercase text-olive-light/80 mb-2">Email Address</label>
                            <input type="email" name="email" value ="{{ auth()->user()->email }}" readonly required class="w-full bg-transparent border-t-0 border-x-0 border-b border-olive-light/20 text-olive text-sm px-0 py-2.5 focus:ring-0 focus:border-olive transition-colors placeholder:text-olive-light/40" placeholder="Enter your email address">
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="relative group">
                            <label class="block font-sans text-xs font-semibold tracking-wider uppercase text-olive-light/80 mb-2">Phone Number <span class="normal-case font-normal text-olive-light/50 tracking-normal">(Optional)</span></label>
                            <input type="tel" name="phone" class="w-full bg-transparent border-t-0 border-x-0 border-b border-olive-light/20 text-olive text-sm px-0 py-2.5 focus:ring-0 focus:border-olive transition-colors placeholder:text-olive-light/40" placeholder="Enter your phone number">
                        </div>
                        <div class="relative group">
                            <label class="block font-sans text-xs font-semibold tracking-wider uppercase text-olive-light/80 mb-2">Subject</label>
                            <select name="subject" class="w-full bg-transparent border-t-0 border-x-0 border-b border-olive-light/20 text-olive text-sm px-0 py-2.5 focus:ring-0 focus:border-olive transition-colors appearance-none cursor-pointer">
                                <option value="" disabled selected class="text-olive-light/40">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="support">Support</option>
                                <option value="feedback">Feedback</option>
                            </select>
                            <div class="absolute right-0 bottom-3.5 pointer-events-none text-olive-light/50 group-focus-within:text-olive transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="relative group">
                        <label class="block font-sans text-xs font-semibold tracking-wider uppercase text-olive-light/80 mb-2">Message</label>
                        <div class="relative rounded-xl border border-olive-light/15 bg-white/40 focus-within:border-olive/40 focus-within:bg-white transition-all overflow-hidden shadow-sm">
                            <textarea name="message" rows="4" required class="w-full bg-transparent border-0 text-olive text-sm p-4 focus:ring-0 placeholder:text-olive-light/40 resize-none" placeholder="Type your message here..."></textarea>
                            <div class="absolute bottom-3 right-4 text-[10px] text-olive-light/50 font-sans tracking-wide">0/1000</div>
                        </div>
                    </div>

                    <!-- Bottom Info Box -->
                    <div class="bg-sage-light/15 rounded-xl p-4.5 flex items-start gap-3.5 mt-2 border border-sage-light/20">
                        <div class="mt-0.5 text-olive">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-sans text-[13px] font-semibold text-olive">Your privacy matters</h4>
                            <p class="font-sans text-[12px] text-olive-light/90 mt-1 leading-relaxed">Your information is safe with us. We’ll never share your details.</p>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-3">
                        <button type="submit" class="group relative flex items-center justify-center gap-2.5 bg-[#0B0B0B] border border-[#1A1A1A] text-[#F5F5F5] font-sans text-[15px] font-medium py-4 px-10 rounded-full shadow-[0_8px_20px_rgba(0,0,0,0.35)] hover:bg-[#111111] hover:border-[#2A2A2A] hover:shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-300 hover:scale-[1.02] active:scale-95 overflow-hidden">
                            <!-- Subtle Glow -->
                            <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            
                            <svg class="w-4.5 h-4.5 transition-transform duration-300 group-hover:-translate-y-0.5 group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                            </svg>
                            <span>Send Message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
