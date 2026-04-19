<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MindSpace — Your personal mental health assessment platform powered by PHQ-9.">
    <title>MindSpace — Mental Health Platform</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            background: #050510;
            color: #e2e8f0;
            min-height: 100vh;
        }

        /* ── Spline background ── */
        #bg-spline {
            position: fixed;
            inset: 0;
            z-index: 0;
            width: 100%;
            height: 100%;
        }

        /* ── Navigation bar ── */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            height: 64px;
            background: rgba(5, 5, 20, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .navbar-brand {
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .navbar-brand span {
            background: linear-gradient(135deg, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .navbar-links {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .nav-link {
            text-decoration: none;
            color: rgba(255,255,255,0.6);
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.4rem 0.9rem;
            border-radius: 0.5rem;
            transition: all 0.2s;
        }

        .nav-link:hover {
            color: #fff;
            background: rgba(255,255,255,0.08);
        }

        .nav-link.active {
            color: #fff;
            background: rgba(129,140,248,0.2);
        }

        .nav-logout {
            margin-left: 0.5rem;
            background: rgba(239,68,68,0.15);
            color: #fca5a5;
            border: 1px solid rgba(239,68,68,0.3);
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.4rem 0.9rem;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .nav-logout:hover {
            background: rgba(239,68,68,0.3);
            color: #fff;
        }

        .navbar-user {
            font-size: 0.8rem;
            color: rgba(255,255,255,0.4);
            margin-right: 0.5rem;
        }

        /* ── Main content wrapper ── */
        .main-content {
            position: relative;
            z-index: 10;
            padding-top: 64px; /* offset for fixed navbar */
        }

        /* ── Glass card ── */
        .glass-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 1.5rem;
            transition: border-color 0.3s ease;
        }

        .glass-card:hover {
            border-color: rgba(255,255,255,0.22);
        }

        /* ── Alerts ── */
        .alert {
            padding: 0.75rem 1.25rem;
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            border: 1px solid;
        }

        .alert-error {
            background: rgba(239,68,68,0.1);
            border-color: rgba(239,68,68,0.3);
            color: #fca5a5;
        }

        .alert-success {
            background: rgba(34,197,94,0.1);
            border-color: rgba(34,197,94,0.3);
            color: #86efac;
        }
    </style>
</head>
<body>
    <!-- 3D Spline background (only shown without nav, auth pages override with centering) -->
    <div id="bg-spline">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.5/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/6Wq1Q7nESSpYQ6pX/scene.splinecode" style="width:100%;height:100%;"></spline-viewer>
    </div>

    @auth
    <!-- Navigation bar (only for authenticated users) -->
    <nav class="navbar">
        <a href="{{ route('dashboard') }}" class="navbar-brand">
            🧠 <span>MindSpace</span>
        </a>
        <div class="navbar-links">
            <a href="{{ route('dashboard') }}"
               class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('assessment.index') }}"
               class="nav-link {{ request()->routeIs('assessment.index') ? 'active' : '' }}">
                Take Assessment
            </a>
            <a href="{{ route('assessment.history') }}"
               class="nav-link {{ request()->routeIs('assessment.history') ? 'active' : '' }}">
                History
            </a>
            <span class="navbar-user">{{ Auth::user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="nav-logout">Logout</button>
            </form>
        </div>
    </nav>
    @endauth

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>