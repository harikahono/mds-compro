    {{-- resources/views/components/header.blade.php --}}
    <section id="header-section">
        <header class="site-header">
            <div class="header-container">
                {{-- Logo Section --}}
                <a href="{{ url('/') }}" class="logo-link" aria-label="Home page">
                    <img src="{{ asset('images/01407926ba6ff8d7d0d9ea5ee3212ee7f55f7d00.png') }}" alt="MDS Logo">
                </a>

                {{-- Main Navigation --}}
                <nav class="main-navigation" role="navigation">
                    <ul>
                        <li><a href="#work" class="nav-link {{ request()->is('work') || request()->is('/') ? 'active' : '' }}" data-text="Work">Work</a></li>
                        <li><a href="#services" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" data-text="Services">Services</a></li>
                        <li><a href="#about" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" data-text="About">About</a></li>
                        <li><a href="#blog" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" data-text="Blog">Blog</a></li>
                    </ul>
                </nav>

                {{-- Header Actions --}}
                <div class="header-actions">
                    <button class="btn-icon accessibility-btn" aria-label="Toggle accessibility menu">
                        <img src="{{ asset('images/2_1678.png') }}" alt="Accessibility Icon">
                    </button>
                    <a href="#contact" class="btn btn-primary" data-text="Let's Talk">
                        <span>Let's Talk</span>
                    </a>
                </div>

                {{-- Mobile Menu Toggle --}}
                <button class="mobile-menu-toggle" aria-label="Toggle mobile menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
    </section>

    @push('styles')
    <style>
    /* CSS Variables untuk konsistensi */
    :root {
        --color-primary: #ef694c;
        --color-secondary: #caf291;
        --color-accent: rgba(117, 181, 1, 0.7);
        --color-text-light: #ffffff;
        --color-text-dark: #111111;
        --font-family-main: 'Poppins', sans-serif;
        --header-height: 100px;
        --header-scroll-height: 80px;
    }

    /* Header Styles */
    .site-header {
        width: 100%;
        padding: 12px 0;
        background-color: rgba(255, 255, 255, 0.95);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .site-header.scrolled {
        padding: 8px 0;
        background-color: rgba(255, 255, 255, 0.98);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1920px;
        margin: 0 auto;
        padding: 0 40px;
        min-height: var(--header-height);
        transition: min-height 0.3s ease;
    }

    .site-header.scrolled .header-container {
        min-height: var(--header-scroll-height);
    }

    /* Logo Styles */
    .logo-link {
        display: flex;
        align-items: center;
        height: 100%;
        line-height: 0;
        transition: all 0.3s ease;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }

    .logo-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(239, 105, 76, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .logo-link:hover::before {
        left: 100%;
    }

    .logo-link:hover {
        transform: scale(1.05);
    }

    .logo-link img {
        display: block;
        height: 100%;
        width: auto;
        max-width: 220px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .site-header.scrolled .logo-link img {
        height: 80%;
    }

    /* Navigation Styles */
    .main-navigation {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .main-navigation ul {
        display: flex;
        align-items: center;
        gap: 30px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-link {
        font-size: 18px;
        font-weight: 500;
        color: var(--color-text-dark);
        text-decoration: none;
        padding: 12px 24px;
        position: relative;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        white-space: nowrap;
        display: inline-block;
        border-radius: 25px;
        border: 2px solid transparent;
        overflow: hidden;
    }

    .nav-link::before {
        content: attr(data-text);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--color-text-light);
        transform: translateY(100%);
        transition: transform 0.4s ease;
    }

    .nav-link:hover {
        transform: translateY(-2px);
        border-color: var(--color-primary);
        background: var(--color-primary);
        color: transparent;
    }

    .nav-link:hover::before {
        transform: translateY(0);
    }

    .nav-link.active {
        background: linear-gradient(135deg, var(--color-accent), rgba(117, 181, 1, 0.9));
        color: var(--color-text-light);
        border-color: transparent;
        box-shadow: 0 4px 15px rgba(117, 181, 1, 0.3);
        transform: translateY(-2px);
    }

    .nav-link.active::before {
        transform: translateY(0);
    }

    /* Header Actions */
    .header-actions {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-shrink: 0;
    }

    .accessibility-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 44px;
        height: 44px;
        background: transparent;
        border: 2px solid var(--color-secondary);
        border-radius: 50%;
        padding: 0;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        position: relative;
        overflow: hidden;
    }

    .accessibility-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(202, 242, 145, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .accessibility-btn:hover::before {
        left: 100%;
    }

    .accessibility-btn:hover {
        border-color: var(--color-primary);
        background-color: rgba(239, 105, 76, 0.1);
        transform: scale(1.1) rotate(15deg);
        box-shadow: 0 4px 12px rgba(239, 105, 76, 0.2);
    }

    .accessibility-btn img {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
    }

    .accessibility-btn:hover img {
        transform: scale(1.1);
    }

    /* CTA Button */
    .btn.btn-primary {
        background: linear-gradient(135deg, var(--color-secondary), #a8e05a);
        color: var(--color-text-dark);
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        border-radius: 50px;
        padding: 16px 32px;
        line-height: 1;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        border: none;
        cursor: pointer;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(202, 242, 145, 0.4);
    }

    .btn.btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.6s ease;
    }

    .btn.btn-primary:hover::before {
        left: 100%;
    }

    .btn.btn-primary:hover {
        background: linear-gradient(135deg, #a8e05a, var(--color-secondary));
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(202, 242, 145, 0.6);
    }

    .btn.btn-primary:active {
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(202, 242, 145, 0.4);
    }

    /* Mobile Menu Toggle */
    .mobile-menu-toggle {
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 0;
        position: relative;
        z-index: 1001;
    }

    .mobile-menu-toggle span {
        width: 25px;
        height: 2px;
        background-color: var(--color-primary);
        margin: 3px 0;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    .mobile-menu-toggle.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
    }

    .mobile-menu-toggle.active span:nth-child(2) {
        opacity: 0;
    }

    .mobile-menu-toggle.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Responsive Styles */
    @media (max-width: 1200px) {
        .header-container {
            padding: 0 20px;
        }
        .main-navigation ul {
            gap: 20px;
        }
        .nav-link {
            font-size: 16px;
            padding: 10px 20px;
        }
    }

    @media (max-width: 992px) {
        .header-container {
            flex-wrap: nowrap;
            justify-content: space-between;
        }
        
        .main-navigation {
            position: fixed;
            top: 0;
            left: -100%;
            width: 80%;
            height: 100vh;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            transition: left 0.4s ease;
            z-index: 999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .main-navigation.active {
            left: 0;
        }
        
        .main-navigation ul {
            flex-direction: column;
            gap: 30px;
            width: 100%;
            padding: 0 20px;
        }
        
        .nav-link {
            font-size: 18px;
            padding: 15px 30px;
            width: 100%;
            text-align: center;
        }
        
        .mobile-menu-toggle {
            display: flex;
        }
        
        .header-actions {
            gap: 10px;
        }
        
        .btn.btn-primary {
            padding: 12px 24px;
            font-size: 14px;
        }
    }

    @media (max-width: 768px) {
        .header-container {
            padding: 0 15px;
            min-height: 80px;
        }
        
        .site-header.scrolled .header-container {
            min-height: 70px;
        }
        
        .logo-link img {
            height: 35px;
        }
        
        .header-actions {
            gap: 8px;
        }
        
        .accessibility-btn {
            width: 36px;
            height: 36px;
        }
        
        .btn.btn-primary {
            padding: 10px 20px;
            font-size: 13px;
        }
    }

    @media (max-width: 640px) {
        .header-actions .btn.btn-primary {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .header-container {
            padding: 0 10px;
        }
        
        .logo-link img {
            height: 30px;
        }
        
        .mobile-menu-toggle {
            width: 25px;
            height: 25px;
        }
        
        .mobile-menu-toggle span {
            width: 20px;
        }
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }

    /* Focus states untuk accessibility */
    .nav-link:focus,
    .accessibility-btn:focus,
    .btn.btn-primary:focus {
        outline: 2px solid var(--color-primary);
        outline-offset: 2px;
    }

    /* Animation untuk entrance */
    @keyframes slideInDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .site-header {
        animation: slideInDown 0.6s ease-out;
    }

    /* High contrast mode */
    @media (prefers-contrast: high) {
        .nav-link {
            border: 2px solid transparent;
        }
        
        .nav-link:hover,
        .nav-link.active {
            border-color: var(--color-primary);
        }
        
        .accessibility-btn {
            border-width: 3px;
        }
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
        
        .site-header {
            animation: none;
        }
    }

    /* Mobile menu overlay */
    .mobile-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .mobile-menu-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    </style>
    @endpush

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const header = document.querySelector('.site-header');
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const mainNavigation = document.querySelector('.main-navigation');
        const navLinks = document.querySelectorAll('.nav-link');
        const accessibilityBtn = document.querySelector('.accessibility-btn');

        // Scroll effect untuk header
        function handleScroll() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            mobileMenuToggle.classList.toggle('active');
            mainNavigation.classList.toggle('active');
            
            // Create overlay
            let overlay = document.querySelector('.mobile-menu-overlay');
            if (!overlay) {
                overlay = document.createElement('div');
                overlay.className = 'mobile-menu-overlay';
                document.body.appendChild(overlay);
            }
            
            overlay.classList.toggle('active');
            
            // Close menu when clicking overlay
            overlay.addEventListener('click', closeMobileMenu);
        }

        function closeMobileMenu() {
            mobileMenuToggle.classList.remove('active');
            mainNavigation.classList.remove('active');
            const overlay = document.querySelector('.mobile-menu-overlay');
            if (overlay) {
                overlay.classList.remove('active');
            }
        }

        // Smooth scroll untuk anchor links
        function handleNavClick(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const headerHeight = header.offsetHeight;
                const targetPosition = targetSection.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu after click
                closeMobileMenu();
            }
        }

        // Accessibility button functionality
        function handleAccessibilityClick() {
            // Toggle high contrast mode
            document.body.classList.toggle('high-contrast');
            
            // Show feedback
            const isHighContrast = document.body.classList.contains('high-contrast');
            console.log(`High contrast mode: ${isHighContrast ? 'ON' : 'OFF'}`);
            
            // Add visual feedback
            this.style.transform = 'scale(1.2)';
            setTimeout(() => {
                this.style.transform = '';
            }, 300);
        }

        // Event listeners
        window.addEventListener('scroll', handleScroll);
        mobileMenuToggle.addEventListener('click', toggleMobileMenu);
        navLinks.forEach(link => link.addEventListener('click', handleNavClick));
        
        if (accessibilityBtn) {
            accessibilityBtn.addEventListener('click', handleAccessibilityClick);
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mainNavigation.classList.contains('active') && 
                !mainNavigation.contains(e.target) && 
                !mobileMenuToggle.contains(e.target)) {
                closeMobileMenu();
            }
        });

        // Initialize header state
        handleScroll();
    });

    // Re-initialize when navigating (for SPA)
    if (window.livewire) {
        window.livewire.hook('message.processed', () => {
            // Re-attach event listeners if needed
        });
    }
    </script>
    @endpush