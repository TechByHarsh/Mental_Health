@extends('layouts.app')

@section('content')
<style>
    .auth-center {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 1rem;
    }

    .auth-box {
        background: rgba(255,255,255,0.07);
        backdrop-filter: blur(28px);
        -webkit-backdrop-filter: blur(28px);
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 2rem;
        padding: 3rem 2.5rem;
        width: 100%;
        max-width: 440px;
        box-shadow: 0 25px 50px rgba(0,0,0,0.4);
        transition: border-color 0.3s;
    }

    .auth-box:hover { border-color: rgba(255,255,255,0.28); }

    .auth-title {
        font-size: 1.75rem;
        font-weight: 300;
        letter-spacing: 0.12em;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 0.4rem;
    }

    .auth-subtitle {
        text-align: center;
        color: rgba(255,255,255,0.4);
        font-size: 0.85rem;
        margin-bottom: 2.2rem;
    }

    .form-group { margin-bottom: 1.2rem; }

    .form-input {
        width: 100%;
        background: rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 0.85rem;
        padding: 0.95rem 1.1rem;
        color: #fff;
        font-size: 0.95rem;
        font-family: inherit;
        outline: none;
        transition: all 0.25s;
    }

    .form-input::placeholder { color: rgba(255,255,255,0.3); }

    .form-input:focus {
        border-color: rgba(129,140,248,0.6);
        box-shadow: 0 0 0 3px rgba(129,140,248,0.15);
    }

    .form-error {
        font-size: 0.78rem;
        color: #fca5a5;
        margin-top: 0.3rem;
    }

    .btn-primary {
        width: 100%;
        background: linear-gradient(135deg, #818cf8, #a78bfa);
        color: #fff;
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.06em;
        border: none;
        border-radius: 0.85rem;
        padding: 1rem;
        cursor: pointer;
        transition: all 0.25s;
        text-transform: uppercase;
        font-family: inherit;
        margin-top: 0.5rem;
    }

    .btn-primary:hover { filter: brightness(1.15); transform: translateY(-1px); }
    .btn-primary:active { transform: scale(0.98); }

    .auth-footer {
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.4);
    }

    .auth-footer a {
        color: #818cf8;
        text-decoration: none;
        font-weight: 500;
    }

    .auth-footer a:hover { text-decoration: underline; }
</style>

<div class="auth-center">
    <div class="auth-box">
        <h1 class="auth-title">Join MindSpace</h1>
        <p class="auth-subtitle">Your journey to mental wellness starts here.</p>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul style="list-style:none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Full Name"
                       value="{{ old('name') }}" required autocomplete="name"
                       class="form-input">
                @error('name')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email Address"
                       value="{{ old('email') }}" required autocomplete="email"
                       class="form-input">
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" id="password"
                       placeholder="Password (min 8 characters)" required
                       autocomplete="new-password"
                       class="form-input">
                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation"
                       placeholder="Confirm Password" required
                       autocomplete="new-password"
                       class="form-input">
            </div>

            <button type="submit" class="btn-primary">Create Account</button>
        </form>

        <div class="auth-footer">
            Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </div>
    </div>
</div>
@endsection
