@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Dedicated Section Styles */
#dedicated {
    background-color: #ffffff;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 120px 0;
    overflow: hidden;
}

.section-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
}

.dedicated-bg-grid {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 1910px;
    height: auto;
    z-index: 1;
    opacity: 0.7;
    transition: all 1.5s ease;
}

.dedicated-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
}

.dedicated-title {
    font-size: clamp(3rem, 7vw, 5.8rem);
    font-weight: 400;
    line-height: 1.1;
    margin: 0;
    text-transform: uppercase;
    position: relative;
}

.dedicated-title .color-primary { 
    color: var(--color-primary, #ef694c); 
    display: inline-block;
    transition: all 0.5s ease;
}

.dedicated-title .color-accent-1 { 
    color: var(--color-accent-1, #75b501); 
    display: inline-block;
    transition: all 0.5s ease;
}

.dedicated-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.3rem);
    line-height: 1.8;
    margin: 40px auto 0;
    max-width: 825px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 1s ease 0.5s;
}

.dedicated-subtitle.visible {
    opacity: 1;
    transform: translateY(0);
}

.dedicated-arrow {
    position: absolute;
    z-index: 2;
    width: clamp(50px, 7vw, 100px);
    opacity: 0;
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.dedicated-arrow.tl { 
    top: 20%; 
    left: 15%; 
    transform: translate(-50px, -50px) rotate(-45deg);
}
.dedicated-arrow.tr { 
    top: 20%; 
    right: 15%; 
    transform: translate(50px, -50px) rotate(45deg);
}
.dedicated-arrow.bl { 
    bottom: 20%; 
    left: 15%; 
    transform: translate(-50px, 50px) rotate(-135deg);
}
.dedicated-arrow.br { 
    bottom: 20%; 
    right: 15%; 
    transform: translate(50px, 50px) rotate(135deg);
}

.dedicated-arrow.visible {
    opacity: 1;
    transform: translate(0, 0) rotate(0deg);
}

/* Floating Animation untuk Grid */
@keyframes floatGrid {
    0%, 100% {
        transform: translate(-50%, -50%) scale(1) rotate(0deg);
    }
    25% {
        transform: translate(-50%, -52%) scale(1.02) rotate(1deg);
    }
    50% {
        transform: translate(-50%, -48%) scale(0.98) rotate(-1deg);
    }
    75% {
        transform: translate(-50%, -51%) scale(1.01) rotate(0.5deg);
    }
}

.dedicated-bg-grid.animated {
    animation: floatGrid 8s ease-in-out infinite;
}

/* Text Glow Effect */
@keyframes textGlow {
    0%, 100% {
        text-shadow: 0 0 20px rgba(239, 105, 76, 0.1),
                     0 0 40px rgba(239, 105, 76, 0.05);
    }
    50% {
        text-shadow: 0 0 30px rgba(239, 105, 76, 0.2),
                     0 0 60px rgba(239, 105, 76, 0.1),
                     0 0 80px rgba(239, 105, 76, 0.05);
    }
}

.dedicated-title.animated {
    animation: textGlow 4s ease-in-out infinite;
}

/* Word Animation */
.dedicated-word {
    display: inline-block;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.dedicated-word.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Hover Effects */
.dedicated-title .color-primary:hover {
    transform: translateY(-5px) scale(1.05);
    color: #ff8c6c;
    text-shadow: 0 10px 25px rgba(239, 105, 76, 0.3);
}

.dedicated-title .color-accent-1:hover {
    transform: translateY(-5px) scale(1.05);
    color: #8ed106;
    text-shadow: 0 10px 25px rgba(117, 181, 1, 0.3);
}

/* Particle Background */
.dedicated-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.particle {
    position: absolute;
    border-radius: 50%;
    opacity: 0;
    animation: particleFloat 6s ease-in-out infinite;
}

.particle-1 {
    width: 8px;
    height: 8px;
    background: #ef694c;
    top: 30%;
    left: 20%;
    animation-delay: 0s;
}

.particle-2 {
    width: 6px;
    height: 6px;
    background: #75b501;
    top: 40%;
    right: 25%;
    animation-delay: 2s;
}

.particle-3 {
    width: 10px;
    height: 10px;
    background: #0879ED;
    bottom: 35%;
    left: 30%;
    animation-delay: 4s;
}

.particle-4 {
    width: 7px;
    height: 7px;
    background: #FE975C;
    bottom: 25%;
    right: 20%;
    animation-delay: 1s;
}

@keyframes particleFloat {
    0%, 100% {
        opacity: 0;
        transform: translateY(0) scale(0);
    }
    10% {
        opacity: 0.7;
        transform: translateY(-10px) scale(1);
    }
    90% {
        opacity: 0.7;
        transform: translateY(-100px) scale(1);
    }
}

/* Pulse Animation untuk Grid */
@keyframes gridPulse {
    0%, 100% {
        opacity: 0.7;
        filter: brightness(1);
    }
    50% {
        opacity: 0.9;
        filter: brightness(1.2);
    }
}

.dedicated-bg-grid.pulse {
    animation: gridPulse 4s ease-in-out infinite;
}

/* Arrow Hover Effects */
.dedicated-arrow {
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.dedicated-arrow:hover {
    transform: scale(1.2) rotate(15deg) !important;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, 0.3));
}

/* Staggered Animation untuk Words */
.word-delay-1 { transition-delay: 0.1s; }
.word-delay-2 { transition-delay: 0.2s; }
.word-delay-3 { transition-delay: 0.3s; }
.word-delay-4 { transition-delay: 0.4s; }
.word-delay-5 { transition-delay: 0.5s; }

/* Mobile Responsive */
@media (max-width: 992px) {
    #dedicated {
        padding: 80px 0;
    }
    
    .dedicated-arrow { 
        display: none; 
    }
    
    .dedicated-particles {
        display: none;
    }
    
    .section-container {
        padding: 0 20px;
    }
}

@media (max-width: 768px) {
    #dedicated {
        padding: 60px 0;
    }
    
    .dedicated-title {
        line-height: 1.2;
    }
    
    .dedicated-subtitle {
        margin-top: 30px;
    }
}

/* Performance Optimizations */
.dedicated-title,
.dedicated-bg-grid,
.dedicated-arrow {
    will-change: transform, opacity;
}

/* Reduced Motion Support */
@media (prefers-reduced-motion: reduce) {
    .dedicated-bg-grid,
    .dedicated-arrow,
    .dedicated-word,
    .particle,
    .dedicated-title,
    .dedicated-subtitle {
        animation: none !important;
        transition: none !important;
    }
    
    .dedicated-word {
        opacity: 1;
        transform: none;
    }
    
    .dedicated-subtitle {
        opacity: 1;
        transform: none;
    }
    
    .dedicated-arrow {
        opacity: 1;
        transform: none !important;
    }
}
</style>
@endpush

<section id="dedicated" class="section-container">
    <!-- Particle Background -->
    <div class="dedicated-particles">
        <div class="particle particle-1"></div>
        <div class="particle particle-2"></div>
        <div class="particle particle-3"></div>
        <div class="particle particle-4"></div>
    </div>
    
    <!-- Background Grid -->
    <img src="{{ asset('images/3_1726.svg') }}" alt="Grid background" class="dedicated-bg-grid" 
         data-aos="zoom-in"
         data-aos-duration="2000"
         data-aos-delay="200">

    <!-- Main Content -->
    <div class="dedicated-content">
        <h2 class="dedicated-title" 
            data-aos="fade-up"
            data-aos-duration="1000">
            <span class="dedicated-word word-delay-1">{{ $dedicatedData['title']['prefix'] ?? 'Dedicated to' }}</span>
            <span class="color-primary dedicated-word word-delay-2">{{ $dedicatedData['title']['primary'] ?? 'delivering' }}</span>
            <span class="color-accent-1 dedicated-word word-delay-3">{{ $dedicatedData['title']['accent'] ?? 'results' }}</span>
            <span class="dedicated-word word-delay-4">{{ $dedicatedData['title']['suffix'] ?? 'for top brands' }}</span>
        </h2>
        <p class="dedicated-subtitle"
           data-aos="fade-up"
           data-aos-duration="800"
           data-aos-delay="600">
            {{ $dedicatedData['subtitle'] ?? 'Collaboration is at the core of everything we do. Your goals shape the strategy, drive our creative innovation, and define success at every stage.' }}
        </p>
    </div>
    
    <!-- Decorative Arrows -->
    @if(!isset($dedicatedData['hideArrows']) || !$dedicatedData['hideArrows'])
        <img src="{{ asset('images/2_1241.svg') }}" alt="Decorative arrow" class="dedicated-arrow tl"
             data-aos="fade-down-right"
             data-aos-delay="400"
             data-aos-duration="1200">
        <img src="{{ asset('images/2_1244.svg') }}" alt="Decorative arrow" class="dedicated-arrow tr"
             data-aos="fade-down-left"
             data-aos-delay="600"
             data-aos-duration="1200">
        <img src="{{ asset('images/2_1247.svg') }}" alt="Decorative arrow" class="dedicated-arrow bl"
             data-aos="fade-up-right"
             data-aos-delay="800"
             data-aos-duration="1200">
        <img src="{{ asset('images/2_1250.svg') }}" alt="Decorative arrow" class="dedicated-arrow br"
             data-aos="fade-up-left"
             data-aos-delay="1000"
             data-aos-duration="1200">
    @endif
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
    const dedicatedSection = document.getElementById('dedicated');
    const dedicatedWords = document.querySelectorAll('.dedicated-word');
    const dedicatedSubtitle = document.querySelector('.dedicated-subtitle');
    const dedicatedArrows = document.querySelectorAll('.dedicated-arrow');
    const bgGrid = document.querySelector('.dedicated-bg-grid');
    const dedicatedTitle = document.querySelector('.dedicated-title');

    // Intersection Observer untuk custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate words dengan staggered delay
                dedicatedWords.forEach((word, index) => {
                    setTimeout(() => {
                        word.classList.add('visible');
                    }, index * 200);
                });

                // Animate subtitle
                setTimeout(() => {
                    dedicatedSubtitle.classList.add('visible');
                }, 1000);

                // Animate arrows
                dedicatedArrows.forEach((arrow, index) => {
                    setTimeout(() => {
                        arrow.classList.add('visible');
                    }, index * 200 + 600);
                });

                // Add continuous animations
                bgGrid.classList.add('animated', 'pulse');
                dedicatedTitle.classList.add('animated');

                // Start particle animations
                const particles = document.querySelectorAll('.particle');
                particles.forEach(particle => {
                    particle.style.animationPlayState = 'running';
                });
            }
        });
    }, {
        threshold: 0.3
    });

    observer.observe(dedicatedSection);

    // Parallax effect untuk background grid
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxSpeed = 0.3;
        
        if (bgGrid) {
            const yPos = -(scrolled * parallaxSpeed);
            bgGrid.style.transform = `translate(-50%, calc(-50% + ${yPos}px))`;
        }
    });

    // Hover effects untuk interactive elements
    if (dedicatedTitle) {
        const coloredWords = dedicatedTitle.querySelectorAll('.color-primary, .color-accent-1');
        
        coloredWords.forEach(word => {
            word.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.05)';
            });
            
            word.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    }

    // Arrow hover effects
    dedicatedArrows.forEach(arrow => {
        arrow.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2) rotate(15deg)';
        });
        
        arrow.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });

    // Text animation on load dengan typewriter effect (optional)
    function animateText() {
        const title = document.querySelector('.dedicated-title');
        if (title) {
            title.style.animation = 'textGlow 4s ease-in-out infinite';
        }
    }

    // Initialize text animation setelah semua element loaded
    setTimeout(animateText, 1500);
});

// Re-initialize AOS when navigating (for SPA)
if (window.livewire) {
    window.livewire.hook('message.processed', () => {
        AOS.refresh();
    });
}
</script>
@endpush