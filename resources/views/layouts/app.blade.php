<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description', 'Therawell – Guided therapy and holistic wellness programs to help you heal, grow, and build lasting balance.')">
    <title>@yield('title', 'Therawell – Emotional & Physical Growth')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/therawell.css">
    @yield('head')
</head>
<body>

@unless(View::hasSection('no_nav'))
    @include('partials.nav')
@endunless

@yield('content')

@unless(View::hasSection('no_footer'))
    @include('partials.footer')
@endunless

<script>
    // Navbar scroll shrink
    const nav = document.querySelector('.tw-nav');
    if (nav) {
        window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 40));
    }
    // Intersection observer fade-up
    const fadeEls = document.querySelectorAll('[data-fade]');
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('anim-fade-up'); io.unobserve(e.target); } });
    }, { threshold: .12 });
    fadeEls.forEach(el => io.observe(el));
</script>
@yield('scripts')
</body>
</html>