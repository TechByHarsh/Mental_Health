<nav class="tw-nav" role="navigation" aria-label="Main navigation">
    <div class="tw-nav-left">
        <a href="/" class="nav-home-pill">
            <span class="nav-dot"></span> Home
        </a>
        <ul class="tw-nav-links">
            <li><a href="/about"    class="{{ request()->is('about')    ? 'active' : '' }}">About</a></li>
            <li><a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a></li>
            <li><a href="/contact"  class="{{ request()->is('contact')  ? 'active' : '' }}">Contact</a></li>
        </ul>
    </div>
    <div class="tw-nav-logo">therawell</div>
    <a href="/assessment/phq9" class="btn-nav">Book A Session</a>
</nav>
