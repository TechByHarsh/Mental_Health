@extends('layouts.app')
@section('no_nav', true)
@section('no_footer', true)
@section('title', 'Login - Welcome Back')

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
                    'brand-green': '#9CAF88', /* Light green accent */
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
<style>
    .noise-bg {
        background-color: #181818;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
    }
</style>
@endsection

@section('content')
<div class="min-h-screen flex flex-col md:flex-row font-sans">
    
    <!-- Left Section (Dark Area) -->
    <div class="w-full md:w-5/12 lg:w-[45%] bg-[#1c1f1c] text-white relative flex flex-col p-10 lg:p-16 justify-center min-h-screen md:min-h-0 overflow-hidden">
        
        <div class="max-w-md z-10 mx-auto w-full mb-48 md:mb-32 lg:mb-48">
            <h1 class="text-5xl lg:text-6xl font-serif leading-tight mb-4 relative z-10 text-white">
                Welcome Back!<br>
                <span class="relative inline-block mt-2">
                    Let's Get Started
                    <!-- Soft light-green underline stroke -->
                    <svg class="absolute w-full h-3 -bottom-2 left-0 text-brand-green opacity-80" viewBox="0 0 100 10" preserveAspectRatio="none">
                        <path d="M0,5 Q50,0 100,5" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </span>
            </h1>
            <p class="text-gray-300 mt-8 text-lg font-light max-w-sm leading-relaxed">
                Please <span class="text-brand-green font-medium">login</span> to your account or <span class="text-brand-green font-medium">create a new one</span> to continue.
            </p>
        </div>

        <!-- Cat Illustration -->
        <div class="absolute bottom-0 left-0 w-64 md:w-72 lg:w-[400px] pl-6 pb-6 lg:pl-10 lg:pb-10 z-0">
            <img src="{{ asset('images/contact-side.png') }}" alt="Cat Illustration" class="w-full h-auto opacity-90 hover:opacity-100 transition-opacity duration-500">
        </div>
        
    </div>

    <!-- Right Section (Login Card) -->
    <div class="w-full md:w-7/12 lg:w-[55%] bg-brand-cream flex items-center justify-center p-6 sm:p-10 lg:p-16 min-h-screen md:min-h-0">
        
        <!-- Login Card -->
        <div class="bg-white rounded-[30px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] w-full max-w-lg xl:max-w-xl p-8 sm:p-10 lg:p-12 transition-all duration-300 hover:shadow-[0_15px_50px_rgba(0,0,0,0.06)] relative overflow-hidden">
            
            <!-- Top Tabs -->
            <div class="flex items-center justify-center space-x-12 border-b border-gray-100 mb-8 mt-2 relative">
                <a href="{{ route('login') }}" class="pb-3 text-lg font-medium text-gray-900 border-b-2 border-brand-green relative -bottom-[1px] z-10 transition-colors">
                    Login
                </a>
                <a href="{{ route('register') }}" class="pb-3 text-lg font-medium text-gray-400 hover:text-gray-600 transition-colors border-b-2 border-transparent relative -bottom-[1px] z-10">
                    Register
                </a>
            </div>

            <!-- Greeting Text -->
            <p class="text-center text-gray-500 text-sm mb-8">Welcome back! Please login to your account.</p>

            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf
                
                <!-- Email Input -->
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

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-brand-green transition-colors">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" id="password" name="password" required placeholder="Enter your password" 
                            class="block w-full pl-11 pr-12 py-3.5 border border-gray-200 rounded-2xl text-gray-900 bg-gray-50/50 focus:ring-2 focus:ring-brand-green/30 focus:border-brand-green focus:bg-white transition-all outline-none shadow-sm">
                        
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none transition-colors">
                            <i class="fa-regular fa-eye" id="togglePasswordIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Forgot Password -->
                <div class="flex justify-end pt-1 pb-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-brand-green hover:text-brand-green-dark transition-colors">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <!-- Login Button -->
                <div>
                    <button type="submit" class="w-full flex justify-center py-4 px-4 border border-transparent rounded-2xl shadow-md text-base font-medium text-white bg-gradient-to-r from-gray-900 to-black hover:from-black hover:to-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transform transition-all hover:-translate-y-0.5 duration-300">
                        Login
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

             
                
                <!-- Bottom Text -->
                <div class="text-center pt-4">
                    <p class="text-sm text-gray-500">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="font-medium text-brand-green hover:text-brand-green-dark transition-colors ml-1">Register here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('togglePasswordIcon');
        
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
