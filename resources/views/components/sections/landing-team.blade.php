@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* About Team Section */
#about-team {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    position: relative;
    overflow: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Animations */
.about-team-header {
    position: relative;
    margin-bottom: 100px;
}

/* Experience Badge Animation */
.about-team-header > .inline-block {
    background: linear-gradient(135deg, #75b501 0%, #8ed106 100%);
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 0.5px;
    opacity: 0;
    transform: translateY(-30px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    box-shadow: 0 5px 15px rgba(117, 181, 1, 0.3);
}

.about-team-header.visible > .inline-block {
    opacity: 1;
    transform: translateY(0);
}

/* Title Animations */
.about-team-header h2 {
    font-size: clamp(2.5rem, 5vw, 4rem);
    opacity: 0;
    transform: translateY(50px);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.2s;
}

.about-team-header.visible h2 {
    opacity: 1;
    transform: translateY(0);
}

.about-team-header h2 span {
    display: inline-block;
    transition: all 0.5s ease;
}

.about-team-header h2 span:hover {
    transform: translateY(-3px);
    text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Diamond Icon Animation */
.icon-diamond {
    opacity: 0;
    transform: scale(0) rotate(-180deg);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.6s;
}

.about-team-header.visible .icon-diamond {
    opacity: 1;
    transform: scale(1) rotate(0deg);
}

.icon-diamond img:first-child {
    animation: diamondGlow 3s ease-in-out infinite;
}

.icon-diamond img:last-child {
    animation: diamondFloat 4s ease-in-out infinite;
}

@keyframes diamondGlow {
    0%, 100% {
        opacity: 0.7;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.1);
    }
}

@keyframes diamondFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    33% {
        transform: translateY(-5px) rotate(5deg);
    }
    66% {
        transform: translateY(3px) rotate(-3deg);
    }
}

/* Eyes Icon Animation */
.about-team-header img[alt="Eyes icon"] {
    opacity: 0;
    transform: translateX(50px) scale(0);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.8s;
    animation: eyesBlink 4s ease-in-out infinite;
}

.about-team-header.visible img[alt="Eyes icon"] {
    opacity: 1;
    transform: translateX(0) scale(1);
}

@keyframes eyesBlink {
    0%, 45%, 55%, 100% {
        transform: scale(1);
    }
    48%, 52% {
        transform: scaleY(0.1);
    }
}

/* Description Animation */
.about-team-header p {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease 1s;
}

.about-team-header.visible p {
    opacity: 1;
    transform: translateY(0);
}

/* Features Grid Animations */
.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    margin-bottom: 80px;
}

.feature-item {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    padding: 40px 20px;
    border-radius: 20px;
    background: white;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    position: relative;
    overflow: hidden;
}

.feature-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(117, 181, 1, 0.05), transparent);
    transition: left 0.6s ease;
}

.feature-item:hover::before {
    left: 100%;
}

.feature-item.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Staggered animation untuk feature items */
.feature-item:nth-child(1) { transition-delay: 0.2s; }
.feature-item:nth-child(2) { transition-delay: 0.4s; }
.feature-item:nth-child(3) { transition-delay: 0.6s; }
.feature-item:nth-child(4) { transition-delay: 0.8s; }

.feature-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

/* Icon Animations */
.feature-item img {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    filter: brightness(0) invert(0.3);
}

.feature-item:hover img {
    transform: scale(1.2) rotate(5deg);
    filter: brightness(0) invert(0.5) drop-shadow(0 5px 15px rgba(117, 181, 1, 0.3));
}

/* Title Animations */
.feature-item h3 {
    transition: all 0.3s ease;
    position: relative;
}

.feature-item:hover h3 {
    color: #75b501;
    transform: translateX(5px);
}

.feature-item h3::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: #75b501;
    transition: width 0.3s ease;
}

.feature-item:hover h3::after {
    width: 50px;
}

/* CTA Button Animations */
.cta-container {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s ease 1.2s;
}

.cta-container.visible {
    opacity: 1;
    transform: translateY(0);
}

.cta-container a {
    background: linear-gradient(135deg, #caf291 0%, #a8e05a 100%);
    color: #111;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(202, 242, 145, 0.4);
}

.cta-container a::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.6s ease;
}

.cta-container a:hover::before {
    left: 100%;
}

.cta-container a:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(202, 242, 145, 0.6);
    background: linear-gradient(135deg, #a8e05a 0%, #caf291 100%);
}

/* Background Elements */
.about-team-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.bg-orb {
    position: absolute;
    border-radius: 50%;
    opacity: 0.03;
    animation: orbFloat 8s ease-in-out infinite;
}

.orb-1 {
    width: 150px;
    height: 150px;
    background: #75b501;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.orb-2 {
    width: 100px;
    height: 100px;
    background: #ef694c;
    top: 20%;
    right: 10%;
    animation-delay: 2s;
}

.orb-3 {
    width: 80px;
    height: 80px;
    background: #0879ED;
    bottom: 30%;
    left: 8%;
    animation-delay: 4s;
}

@keyframes orbFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    33% {
        transform: translateY(-20px) rotate(120deg);
    }
    66% {
        transform: translateY(10px) rotate(240deg);
    }
}

/* Mobile Responsive */
@media (max-width: 1024px) {
    .features-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
    
    .about-team-header img[alt="Eyes icon"] {
        display: none;
    }
}

@media (max-width: 768px) {
    #about-team {
        padding: 80px 0;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        margin-bottom: 60px;
    }
    
    .feature-item {
        padding: 30px 20px;
    }
    
    .about-team-header {
        margin-bottom: 60px;
    }
    
    .about-team-header h2 {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 15px;
    }
    
    .about-team-header h2 {
        font-size: 2rem;
    }
    
    .feature-item {
        padding: 25px 15px;
    }
    
    .cta-container a {
        padding: 14px 32px;
        font-size: 0.875rem;
    }
}

/* Performance Optimizations */
.feature-item,
.cta-container a,
.about-team-header > * {
    will-change: transform, opacity;
}

/* Reduced Motion Support */
@media (prefers-reduced-motion: reduce) {
    .about-team-header > *,
    .feature-item,
    .cta-container,
    .bg-orb {
        animation: none !important;
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
    }
}
</style>
@endpush

<section id="about-team" class="py-24 text-center">
    <!-- Background Elements -->
    <div class="about-team-bg">
        <div class="bg-orb orb-1" data-aos="fade" data-aos-delay="200"></div>
        <div class="bg-orb orb-2" data-aos="fade" data-aos-delay="400"></div>
        <div class="bg-orb orb-3" data-aos="fade" data-aos-delay="600"></div>
    </div>
    
    <div class="container mx-auto px-4">
        <header class="about-team-header"
                data-aos="fade-up"
                data-aos-duration="1000">
            <div class="inline-block bg-[#75b501] text-white px-5 py-2 rounded-full text-sm font-semibold mb-6">
                <span>22+ years experience</span>
            </div>
            <h2 class="text-4xl md:text-6xl font-poppins font-normal leading-tight uppercase mb-10">
                <span class="text-gray-900">A dedicated</span><br>
                <span class="text-gray-900">team of</span><br>
                <span class="text-gray-900">professionals</span>
            </h2>
            <div class="icon-diamond relative inline-block mb-5">
                <img src="{{ asset('images/2_1502.svg') }}" alt="Diamond icon background" class="absolute inset-0 z-10 w-20 h-auto">
                <img src="{{ asset('images/2_1503.svg') }}" alt="Diamond icon foreground" class="relative z-20 w-20 h-auto">
            </div>
            <img src="{{ asset('images/2_1511.svg') }}" alt="Eyes icon" class="absolute w-10 h-auto top-4 right-40 z-30 hidden md:block">
            <p class="max-w-xl mx-auto text-lg font-light text-gray-600">
                Passionate, driven, and always prepared to go the extra mile, we bring expertise and creativity to every project, guaranteeing your success.
            </p>
        </header>

        <div class="features-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
            <!-- Feature 1 -->
            <div class="feature-item text-center px-4"
                 data-aos="fade-up"
                 data-aos-delay="200">
                <img src="{{ asset('images/2_1522.svg') }}" alt="Checkmark icon" class="w-12 h-auto mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">We're about results</h3>
                <p class="text-base text-gray-600">We deliver results-driven websites that align with your organisation's specific needs and strategic objectives.</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-item text-center px-4"
                 data-aos="fade-up"
                 data-aos-delay="300">
                <img src="{{ asset('images/2_1528.svg') }}" alt="Team icon" class="w-12 h-auto mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Experienced Team</h3>
                <p class="text-base text-gray-600">In-house team of 19+ talented UX/UI Designers, Strategists, Developers, and Digital Marketers. (No outsourcing!)</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-item text-center px-4"
                 data-aos="fade-up"
                 data-aos-delay="400">
                <img src="{{ asset('images/2_1534.svg') }}" alt="Quality icon" class="w-12 h-auto mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Quality Assurance</h3>
                <p class="text-base text-gray-600">We take immense pride in our work, ensuring the highest quality product and best practices in everything we do.</p>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-item text-center px-4"
                 data-aos="fade-up"
                 data-aos-delay="500">
                <img src="{{ asset('images/2_1540.svg') }}" alt="Support icon" class="w-12 h-auto mx-auto mb-4">
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Support & Aftercare</h3>
                <p class="text-base text-gray-600">We pride ourselves on delivering highly responsive support long after your website has been launched.</p>
            </div>
        </div>

        <div class="cta-container text-center"
             data-aos="fade-up"
             data-aos-delay="600">
            <a href="#about-us" class="inline-block bg-lime-400 text-gray-900 px-8 py-4 rounded-full font-semibold uppercase hover:bg-lime-500 transition duration-300">
                About Us
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
        easing: 'ease-out-cubic'
    });

    // Custom animations
    const aboutTeamSection = document.getElementById('about-team');
    const header = document.querySelector('.about-team-header');
    const featureItems = document.querySelectorAll('.feature-item');
    const ctaContainer = document.querySelector('.cta-container');

    // Intersection Observer untuk custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate header
                header.classList.add('visible');
                
                // Animate feature items dengan staggered delay
                featureItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('visible');
                    }, index * 150 + 300);
                });
                
                // Animate CTA
                setTimeout(() => {
                    ctaContainer.classList.add('visible');
                }, 1000);
                
                // Start background orb animations
                const orbs = document.querySelectorAll('.bg-orb');
                orbs.forEach(orb => {
                    orb.style.animationPlayState = 'running';
                });
            }
        });
    }, {
        threshold: 0.2
    });

    observer.observe(aboutTeamSection);

    // Hover effects untuk feature items
    featureItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Parallax effect untuk background orbs
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const orbs = document.querySelectorAll('.bg-orb');
        
        orbs.forEach((orb, index) => {
            const speed = 0.2 + (index * 0.1);
            const yPos = -(scrolled * speed);
            orb.style.transform = `translateY(${yPos}px) rotate(${yPos}deg)`;
        });
    });

    // Button hover effect
    const ctaButton = document.querySelector('.cta-container a');
    if (ctaButton) {
        ctaButton.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        ctaButton.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    }
});

// Re-initialize AOS when navigating (for SPA)
if (window.livewire) {
    window.livewire.hook('message.processed', () => {
        AOS.refresh();
    });
}
</script>
@endpush