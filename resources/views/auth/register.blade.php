@extends('layouts.app')
@section('no_nav', true)
@section('no_footer', true)
@section('title', 'Register - Create Account')

@section('head')
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'brand-black': '#151515',
                    'brand-cream': '#F8F7F4',
                    'brand-green': '#9CAF88',
                    'brand-green-dark': '#7A8C69',
                },
                fontFamily: {
                    serif: ['"Cormorant Garamond"', 'serif'],
                    sans: ['Inter', 'sans-serif'],
                }
            }
        }
    }
</script>
@endsection

@section('content')
<div class="min-h-screen flex flex-col md:flex-row font-sans">
    
    <!-- Left Section (Dark Area) -->
    <div class="w-full md:w-5/12 lg:w-[45%] bg-[#1c1f1c] text-white relative flex flex-col p-10 lg:p-16 justify-center min-h-screen md:min-h-0 overflow-hidden">
        
        <div class="max-w-md z-10 mx-auto w-full mb-48 md:mb-32 lg:mb-48">
            <h1 class="text-5xl lg:text-6xl font-serif leading-tight mb-4 relative z-10 text-white">
                Welcome to TheraWel!<br>
                <span class="relative inline-block mt-2">
                    Let's Get Started
                    <!-- Soft light-green underline stroke -->
                    <svg class="absolute w-full h-3 -bottom-2 left-0 text-brand-green opacity-80" viewBox="0 0 100 10" preserveAspectRatio="none">
                        <path d="M0,5 Q50,0 100,5" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </span>
            </h1>
            <p class="text-gray-300 mt-8 text-lg font-light max-w-sm leading-relaxed">
                Login to your account or <span class="text-brand-green font-medium">create a new one</span> to continue.
            </p>
        </div>

        <!-- Cat Illustration -->
        <div class="absolute bottom-0 left-0 w-64 md:w-72 lg:w-[400px] pl-6 pb-6 lg:pl-10 lg:pb-10 z-0">
            <img src="{{ asset('images/contact-side.png') }}" alt="Cat Illustration" class="w-full h-auto opacity-90 hover:opacity-100 transition-opacity duration-500">
        </div>
        
    </div>

    <!-- Right Section (Register Card) -->
    <div class="w-full md:w-7/12 lg:w-[55%] bg-brand-cream flex items-center justify-center p-6 sm:p-10 lg:p-16 min-h-screen md:min-h-0">
        
        <!-- Register Card -->
        <div class="bg-white rounded-[30px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] w-full max-w-2xl xl:max-w-[800px] p-8 sm:p-10 lg:p-12 transition-all duration-300 hover:shadow-[0_15px_50px_rgba(0,0,0,0.06)] relative overflow-hidden">
            
            <!-- Top Tabs -->
            <div class="flex items-center justify-center space-x-12 border-b border-gray-100 mb-8 mt-2 relative">
                <a href="{{ route('login') }}" class="pb-3 text-lg font-medium text-gray-400 hover:text-gray-600 transition-colors border-b-2 border-transparent relative -bottom-[1px] z-10">
                    Login
                </a>
                <a href="{{ route('register') }}" class="pb-3 text-lg font-medium text-gray-900 border-b-2 border-brand-green relative -bottom-[1px] z-10 transition-colors">
                    Register
                </a>
            </div>

            <!-- Headers -->
            <div class="mb-8">
                <h2 class="text-3xl font-serif text-gray-900 mb-2">Create Your Account</h2>
                <p class="text-gray-500 text-sm">Join TheraWel and take a step towards a better you.</p>
            </div>

            <!-- Register Form -->
            <form action="{{ route('register') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <input type="text" id="name" name="name" required placeholder="Enter your full name" 
                                class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <input type="email" id="email" name="email" required placeholder="Enter your email" 
                                class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm"
                                value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone <span class="text-gray-400 font-normal">(Optional)</span></label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" 
                                class="block w-full pl-11 pr-4 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm"
                                value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input type="password" id="password" name="password" required placeholder="Create a password" 
                                class="block w-full pl-11 pr-12 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm">
                            
                            <button type="button" onclick="togglePassword('password', 'togglePasswordIcon')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none transition-colors">
                                <i class="fa-regular fa-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="md:col-span-2">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm your password" 
                                class="block w-full pl-11 pr-12 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm">
                            
                            <button type="button" onclick="togglePassword('password_confirmation', 'toggleConfirmPasswordIcon')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none transition-colors">
                                <i class="fa-regular fa-eye" id="toggleConfirmPasswordIcon"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Terms -->
                <div class="flex items-start mt-2">
                    <div class="flex items-center h-5 mt-0.5">
                        <input id="terms" name="terms" type="checkbox" required class="w-4 h-4 text-brand-green bg-gray-50 border-gray-300 rounded focus:ring-brand-green focus:ring-2 accent-brand-green transition-colors cursor-pointer">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-600 cursor-pointer">
                            I agree to the <a href="#" class="text-brand-green hover:text-brand-green-dark transition-colors">Terms of Service</a> and <a href="#" class="text-brand-green hover:text-brand-green-dark transition-colors">Privacy Policy</a>.
                        </label>
                    </div>
                </div>

                <!-- Register Button -->
                <div class="pt-2">
                    <button type="submit" class="w-full flex justify-center py-4 px-4 border border-transparent rounded-full shadow-md text-base font-medium text-white bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transform transition-all hover:-translate-y-0.5 duration-300">
                        Create Account
                    </button>
                </div>
                
                <!-- Divider -->
                <div class="relative my-7">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-100"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-400">or</span>
                    </div>
                </div>

                <!-- Google Register Button -->
                <div>
                    <a href="#" class="w-full flex justify-center items-center py-3.5 px-4 border border-gray-200 rounded-full shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 transition-all duration-300 group">
                        <!-- SVG Google Icon -->
                        <svg class="h-5 w-5 mr-3 group-hover:scale-105 transition-transform" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        Continue with Google
                    </a>
                </div>
                
                <!-- Bottom Text -->
                <div class="text-center pt-4">
                    <p class="text-sm text-gray-500">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="font-medium text-brand-green hover:text-brand-green-dark transition-colors ml-1">Login here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const icon = document.getElementById(iconId);
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
@endsection
