{{-- resources/views/components/header.blade.php --}}
<section id="header-section">
    <header class="site-header">
        <div class="header-container">
            {{-- Logo Section --}}
            <a href="#" class="logo-link" aria-label="Home page">
                <img src="{{ asset('images/01407926ba6ff8d7d0d9ea5ee3212ee7f55f7d00.png') }}" alt="MDS Logo">
            </a>

            {{-- Main Navigation --}}
            <nav class="main-navigation" role="navigation">
                <ul>
                    <li><a href="#work" class="nav-link active">Work</a></li>
                    <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#blog" class="nav-link">Blog</a></li>
                </ul>
            </nav>

            {{-- Header Actions --}}
            <div class="header-actions">
                <button class="btn-icon accessibility-btn" aria-label="Toggle accessibility menu">
                    <img src="{{ asset('images/2_1678.png') }}" alt="Accessibility Icon">
                </button>
                <a href="#contact" class="btn btn-primary">Let's Talk</a>
            </div>
        </div>
    </header>
</section>

<style>
/* CSS Variables untuk konsistensi */
:root {
    --color-primary: #ef694c;
    --color-secondary: #caf291;
    --color-accent: rgba(117, 181, 1, 0.7);
    --color-text-light: #ffffff;
    --color-text-dark: #111111;
    --font-family-main: 'Poppins', sans-serif;
}

/* Header Styles */
.site-header {
    width: 100%;
    padding: 12px 0;
    background-color: transparent;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1920px;
    margin: 0 auto;
    padding: 0 40px;
}

/* Logo Styles */
.logo-link {
    display: inline-block;
    transition: transform 0.3s ease;
}

.logo-link:hover {
    transform: scale(1.05);
}

.logo-link img {
    display: block;
    width: 200px;
    height: 80px;
    object-fit: contain;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
}

/* Navigation Styles */
.main-navigation ul {
    display: flex;
    align-items: center;
    gap: 30px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-link {
    font-size: 20px;
    font-weight: 400;
    color: var(--color-primary);
    text-decoration: none;
    padding: 8px 0;
    position: relative;
    transition: all 0.3s ease;
}

.nav-link:hover {
    opacity: 0.8;
    transform: translateY(-2px);
}

.nav-link.active {
    background-color: var(--color-accent);
    color: var(--color-text-light);
    border-radius: 20px;
    padding: 5px 35px;
    text-align: center;
}

/* Header Actions */
.header-actions {
    display: flex;
    align-items: center;
    gap: 12px;
}

.accessibility-btn {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: transparent;
    border: 2px solid var(--color-secondary);
    border-radius: 50px;
    padding: 0;
    cursor: pointer;
    transition: all 0.3s ease;
}

.accessibility-btn:hover {
    border-color: var(--color-primary);
    background-color: rgba(239, 105, 76, 0.1);
    transform: scale(1.1);
}

.accessibility-btn img {
    width: 20px;
    height: 20px;
}

/* CTA Button */
.btn.btn-primary {
    background-color: var(--color-secondary);
    color: var(--color-text-dark);
    font-size: 16.4px;
    font-weight: 400;
    text-decoration: none;
    border-radius: 1920px; /* Pill shape */
    padding: 20px 40px;
    line-height: 1;
    text-align: center;
    display: inline-block;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn.btn-primary:hover {
    background-color: #b8da82;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(202, 242, 145, 0.4);
}

.btn.btn-primary:active {
    transform: translateY(0);
    box-shadow: 0 2px 8px rgba(202, 242, 145, 0.4);
}

/* Mobile Menu Toggle (untuk nanti) */
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
}

.mobile-menu-toggle span {
    width: 20px;
    height: 2px;
    background-color: var(--color-primary);
    margin: 2px 0;
    transition: 0.3s;
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
        font-size: 18px;
    }
}

@media (max-width: 992px) {
    .header-container {
        flex-wrap: wrap;
        justify-content: space-between;
        row-gap: 20px;
    }
    
    .main-navigation {
        order: 3;
        width: 100%;
    }
    
    .main-navigation ul {
        justify-content: center;
        gap: 15px;
    }
    
    .logo-link {
        order: 1;
    }
    
    .header-actions {
        order: 2;
    }
}

@media (max-width: 768px) {
    .header-container {
        padding: 0 15px;
    }
    
    .logo-link img {
        width: 160px;
        height: 64px;
    }
    
    .nav-link {
        font-size: 16px;
    }
    
    .btn.btn-primary {
        padding: 15px 30px;
        font-size: 14px;
    }
}

@media (max-width: 640px) {
    .main-navigation ul {
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }
    
    .nav-link.active {
        padding: 5px 25px;
    }
    
    .header-actions {
        gap: 8px;
    }
    
    .btn.btn-primary {
        padding: 12px 24px;
        font-size: 13px;
    }
    
    .accessibility-btn {
        width: 36px;
        height: 36px;
    }
}

@media (max-width: 480px) {
    .main-navigation ul {
        flex-direction: column;
        gap: 8px;
        padding: 10px 0;
    }
    
    .logo-link img {
        width: 140px;
        height: 56px;
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

/* Loading states (untuk nanti) */
.loading .nav-link {
    opacity: 0.6;
    pointer-events: none;
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

/* Utility classes */
.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* Dark mode ready (untuk nanti) */
@media (prefers-color-scheme: dark) {
    :root {
        --color-text-light: #ffffff;
        --color-text-dark: #111111;
    }
}

/* High contrast mode */
@media (prefers-contrast: high) {
    .nav-link {
        border: 1px solid transparent;
    }
    
    .nav-link:hover {
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
}
</style>