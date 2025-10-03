{{-- resources/views/components/header.blade.php --}}

<header id="header-container" class="fixed top-0 left-0 right-0 z-[1000] transition-all duration-500 ease-in-out">
    <div id="header-content" class="mx-auto px-4 sm:px-6 lg:px-8 transition-all duration-500 ease-in-out">
        <div class="flex items-center justify-between transition-all duration-500 ease-in-out header-height">
            <div class="flex-shrink-0 logo-container transition-all duration-500">
                <a href="{{ route('home') }}" aria-label="Home">
                    <img id="logo-img" class="h-12 w-auto transition-all duration-500" src="{{ asset('images/mdslogo.png') }}" alt="Company Logo">
                </a>
            </div>

            <nav id="main-nav" class="hidden lg:flex items-center space-x-8 nav-links transition-all duration-500">
                <a href="{{ route('landing') }}" class="nav-link text-brand-orange">Work</a>
                <a href="{{ route('services') }}" class="nav-link text-brand-orange">Services</a>
                <a href="{{ route('about') }}" class="nav-link text-brand-orange">About</a>
                <a href="{{ route('blog') }}" class="nav-link text-brand-orange">Blog</a>
            </nav>

            <div class="hidden lg:flex items-center justify-end space-x-4 action-buttons transition-all duration-500">
                {{-- PERUBAHAN DI SINI: Menambahkan kelas flex untuk centering --}}
                <button id="accessibility-btn" type="button" class="accessibility-btn-animated rounded-full flex items-center justify-center" aria-label="Accessibility options">
                    <img id="accessibility-icon" class="transition-all duration-300" src="{{ asset('images/orang.png') }}" alt="Accessibility Icon">
                </button>
                <a href="#contact" class="px-8 py-3 bg-accent-3 text-text-dark font-semibold rounded-full hover:opacity-80 transition-opacity">
                    Let's Talk
                </a>
            </div>

            <div class="lg:hidden">
                <button id="mobile-menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('landing') }}" class="nav-link text-brand-orange block">Work</a>
                <a href="{{ route('services') }}" class="nav-link text-brand-orange block">Services</a>
                <a href="{{ route('about') }}" class="nav-link text-brand-orange block">About</a>
                <a href="{{ route('blog') }}" class="nav-link text-brand-orange block">Blog</a>
            </div>
        </div>
    </div>
</header>

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
<style>
    :root {
        --color-primary: theme('colors.brand-orange', '#ef694c');
        --color-secondary: theme('colors.accent-3', '#caf2d1');
        --color-text-dark: theme('colors.text-dark', '#000000');
    }

    /* Header default state */
    #header-container {
        background-color: transparent;
    }

    #header-content {
        max-width: 1280px;
    }

    .header-height {
        height: 96px;
    }

    /* Header scrolled state - capsule shape */
    #header-container.scrolled {
        padding-top: 12px;
        padding-bottom: 12px;
    }

    #header-container.scrolled #header-content {
        max-width: fit-content;
        background-color: white;
        border-radius: 9999px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        padding-left: 1rem;
        padding-right: 1rem;
    }

    #header-container.scrolled .header-height {
        height: 56px;
        gap: 0.75rem;
    }

    #header-container.scrolled #logo-img {
        height: 1.75rem;
    }

    #header-container.scrolled .nav-links {
        gap: 0.25rem;
        margin: 0;
    }

    #header-container.scrolled .nav-link {
        font-size: 0.8125rem;
        padding: 0.375rem 0.875rem;
    }

    #header-container.scrolled .action-buttons {
        gap: 0.5rem;
    }

    #header-container.scrolled .action-buttons a {
        padding: 0.5rem 1.25rem;
        font-size: 0.8125rem;
    }

    /* Styling untuk link navigasi */
    .nav-link {
        @apply font-medium px-5 py-2 rounded-full transition-all duration-300;
    }
    .nav-link:hover {
        @apply text-text-dark;
    }
    .nav-link.active {
        @apply bg-accent-3 text-text-dark;
    }
    #mobile-menu .nav-link {
        @apply px-3 py-2 text-base;
    }

    /* Styling dan animasi untuk Tombol Ikon "Orang" (Accessibility) */
    .accessibility-btn-animated {
        /* PERUBAHAN DI SINI: Menghapus kelas flex dari @apply */
        @apply relative bg-transparent overflow-hidden cursor-pointer;
        width: 3rem;
        height: 3rem;
        border: 2px solid var(--color-secondary);
        border-radius: 9999px;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    #accessibility-icon {
        width: 1.5rem;
        height: 1.5rem;
        object-fit: contain;
    }

    .accessibility-btn-animated:hover {
        border-color: var(--color-primary);
        background-color: rgba(239, 105, 76, 0.1);
        transform: scale(1.1) rotate(15deg);
        @apply shadow-lg;
    }
    .accessibility-btn-animated:hover img {
        transform: scale(1.1);
    }

    /* Collapsed state untuk accessibility button */
    #header-container.scrolled .accessibility-btn-animated {
        width: 2.5rem;
        height: 2.5rem;
        border-width: 2px;
    }

    #header-container.scrolled #accessibility-icon {
        width: 1.25rem;
        height: 1.25rem;
    }
</style>
@endpush

@push('scripts')
{{-- Tidak ada perubahan pada script, jadi bisa dibiarkan seperti semula --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const headerContainer = document.getElementById('header-container');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section[id]');

    // Toggle mobile menu
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Sticky header with capsule effect on scroll
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) {
            headerContainer.classList.add('scrolled');
        } else {
            headerContainer.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });

    // Smooth scroll for anchor links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId && targetId.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.querySelector(targetId);
                if (targetSection) {
                    const headerHeight = headerContainer.offsetHeight;
                    const targetPosition = targetSection.offsetTop - headerHeight;
                    window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            }
        });
    });

    // Activate link on scroll
    function activateLinkOnScroll() {
        let currentSectionId = '';
        const headerHeight = headerContainer.offsetHeight;
        sections.forEach(section => {
            const sectionTop = section.offsetTop - headerHeight - 5;
            if (window.scrollY >= sectionTop) {
                currentSectionId = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + currentSectionId) {
                link.classList.add('active');
            }
        });
    }
    
    window.addEventListener('scroll', activateLinkOnScroll);
    activateLinkOnScroll();
});
</script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    if (window.AOS) {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
        });
    }
});
</script>
@endpush