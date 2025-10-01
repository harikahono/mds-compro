@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Partner Section */
#partner {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    position: relative;
    overflow: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Grid Layout */
.grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 60px;
    align-items: center;
}

@media (min-width: 1024px) {
    .grid {
        grid-template-columns: 1fr 1fr;
        gap: 80px;
    }
}

/* Image Animations */
.partner-image {
    position: relative;
    opacity: 0;
    transform: translateX(-50px);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.partner-image.visible {
    opacity: 1;
    transform: translateX(0);
}

.partner-image img {
    width: 100%;
    height: auto;
    border-radius: 24px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    z-index: 2;
}

.partner-image::before {
    content: '';
    position: absolute;
    top: -20px;
    left: -20px;
    right: 20px;
    bottom: 20px;
    background: linear-gradient(135deg, #75b501, #0879ED);
    border-radius: 28px;
    opacity: 0.1;
    z-index: 1;
    transition: all 0.8s ease 0.2s;
    transform: scale(0.95);
}

.partner-image.visible::before {
    transform: scale(1);
    opacity: 0.15;
}

.partner-image:hover img {
    transform: scale(1.02) translateY(-5px);
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.2);
}

.partner-image:hover::before {
    transform: scale(1.05) rotate(2deg);
    opacity: 0.2;
}

/* Content Animations */
.partner-content {
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s;
}

.partner-content.visible {
    opacity: 1;
    transform: translateX(0);
}

.partner-content h2 {
    font-size: clamp(2.5rem, 4vw, 3.5rem);
    font-weight: 700;
    line-height: 1.2;
    color: #1a202c;
    margin-bottom: 24px;
    position: relative;
}

.partner-content h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 0;
    height: 4px;
    background: linear-gradient(90deg, #75b501, #0879ED);
    border-radius: 2px;
    transition: width 1s ease 0.8s;
}

.partner-content.visible h2::after {
    width: 100px;
}

/* Paragraph Animations */
.partner-content p {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.partner-content.visible p:nth-child(2) {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.5s;
}

.partner-content.visible p:nth-child(3) {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.7s;
}

.partner-content p:first-of-type {
    font-size: 1.25rem;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 20px;
}

.partner-content p:last-of-type {
    font-size: 1.125rem;
    line-height: 1.7;
    color: #718096;
}

/* Link Animations */
.partner-content a {
    color: #75b501;
    font-weight: 600;
    text-decoration: none;
    position: relative;
    transition: all 0.3s ease;
    padding: 2px 4px;
    border-radius: 4px;
}

.partner-content a::before {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #75b501, #8ed106);
    transition: width 0.3s ease;
}

.partner-content a:hover {
    color: #5a8c01;
    background: rgba(117, 181, 1, 0.1);
    transform: translateY(-2px);
}

.partner-content a:hover::before {
    width: 100%;
}

/* Background Elements */
.partner-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.bg-shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.05;
    animation: shapeFloat 8s ease-in-out infinite;
}

.shape-1 {
    width: 120px;
    height: 120px;
    background: #75b501;
    top: 20%;
    left: 5%;
    animation-delay: 0s;
}

.shape-2 {
    width: 80px;
    height: 80px;
    background: #ef694c;
    bottom: 30%;
    right: 10%;
    animation-delay: 2s;
}

.shape-3 {
    width: 60px;
    height: 60px;
    background: #0879ED;
    top: 60%;
    left: 80%;
    animation-delay: 4s;
}

@keyframes shapeFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg) scale(1);
    }
    33% {
        transform: translateY(-15px) rotate(120deg) scale(1.1);
    }
    66% {
        transform: translateY(10px) rotate(240deg) scale(0.9);
    }
}

/* Floating Text Elements */
.floating-text {
    position: absolute;
    font-size: 1rem;
    font-weight: 600;
    color: rgba(117, 181, 1, 0.3);
    animation: textFloat 6s ease-in-out infinite;
}

.text-1 {
    top: 15%;
    right: 15%;
    animation-delay: 0s;
}

.text-2 {
    bottom: 25%;
    left: 10%;
    animation-delay: 2s;
}

.text-3 {
    top: 40%;
    right: 25%;
    animation-delay: 4s;
}

@keyframes textFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
        opacity: 0.3;
    }
    50% {
        transform: translateY(-10px) rotate(5deg);
        opacity: 0.6;
    }
}

/* Stats Counter Animation */
.partner-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease 1s;
}

.partner-content.visible .partner-stats {
    opacity: 1;
    transform: translateY(0);
}

.stat-item {
    text-align: center;
    padding: 20px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #75b501;
    line-height: 1;
    margin-bottom: 8px;
}

.stat-label {
    font-size: 0.875rem;
    color: #718096;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Mobile Responsive */
@media (max-width: 1023px) {
    #partner {
        padding: 80px 0;
    }
    
    .grid {
        gap: 40px;
    }
    
    .partner-image::before {
        top: -10px;
        left: -10px;
        right: 10px;
        bottom: 10px;
    }
    
    .floating-text {
        display: none;
    }
}

@media (max-width: 768px) {
    #partner {
        padding: 60px 0;
    }
    
    .container {
        padding: 0 15px;
    }
    
    .partner-content h2 {
        font-size: 2rem;
    }
    
    .partner-content p:first-of-type {
        font-size: 1.125rem;
    }
    
    .partner-stats {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

/* Performance Optimizations */
.partner-image,
.partner-content,
.partner-stats {
    will-change: transform, opacity;
}

/* Reduced Motion Support */
@media (prefers-reduced-motion: reduce) {
    .partner-image,
    .partner-content,
    .partner-stats,
    .bg-shape,
    .floating-text {
        animation: none !important;
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
    }
    
    .partner-content h2::after {
        width: 100px !important;
    }
}
</style>
@endpush

<section id="partner" class="py-24">
    <!-- Background Elements -->
    <div class="partner-bg-elements">
        <div class="bg-shape shape-1" data-aos="fade" data-aos-delay="200"></div>
        <div class="bg-shape shape-2" data-aos="fade" data-aos-delay="400"></div>
        <div class="bg-shape shape-3" data-aos="fade" data-aos-delay="600"></div>
        <div class="floating-text text-1" data-aos="fade" data-aos-delay="300">Trusted Partner</div>
        <div class="floating-text text-2" data-aos="fade" data-aos-delay="500">Since 2003</div>
        <div class="floating-text text-3" data-aos="fade" data-aos-delay="700">Digital Excellence</div>
    </div>
    
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="partner-image"
                 data-aos="fade-right"
                 data-aos-duration="1000">
                <img src="{{ asset('images/9f08be9851e213d0fe8589dfacdb885953dc13ee.png') }}" alt="Man in office" class="w-full h-auto rounded-3xl">
            </div>
            
            <!-- Content Column -->
            <div class="partner-content"
                 data-aos="fade-left"
                 data-aos-duration="1000"
                 data-aos-delay="200">
                <h2 class="text-4xl font-poppins font-bold leading-tight">Your trusted digital partner</h2>
                <p class="mt-6 text-xl">
                    We are a leading digital agency in Northern Ireland, serving businesses across Belfast, Ireland, the UK, North America and beyond. We are dedicated to delivering exceptional <a href="#" class="text-lime-400 font-bold">web design</a>, <a href="#" class="text-lime-400 font-bold">website development</a>, and <a href="#" class="text-lime-400 font-bold">digital marketing</a> solutions that are tailored to your unique needs.
                </p>
                <p class="mt-4 text-lg">
                    Since 2003, we've built a reputation for excellence, transforming global brands with innovative digital strategies. We specialise in creating visually stunning websites, data-driven marketing, and scalable development solutions.
                </p>
                
                <!-- Stats Section -->
                <div class="partner-stats">
                    <div class="stat-item">
                        <div class="stat-number" data-count="22">0</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="500">0</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="19">0</div>
                        <div class="stat-label">Team Members</div>
                    </div>
                </div>
            </div>
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
    const partnerSection = document.getElementById('partner');
    const partnerImage = document.querySelector('.partner-image');
    const partnerContent = document.querySelector('.partner-content');
    const stats = document.querySelector('.partner-stats');

    // Intersection Observer untuk custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate image and content
                partnerImage.classList.add('visible');
                partnerContent.classList.add('visible');
                
                // Start background animations
                const shapes = document.querySelectorAll('.bg-shape');
                const floatingTexts = document.querySelectorAll('.floating-text');
                
                shapes.forEach(shape => {
                    shape.style.animationPlayState = 'running';
                });
                
                floatingTexts.forEach(text => {
                    text.style.animationPlayState = 'running';
                });
                
                // Animate stats counter
                setTimeout(() => {
                    animateStats();
                }, 1000);
            }
        });
    }, {
        threshold: 0.3
    });

    observer.observe(partnerSection);

    // Stats counter animation
    function animateStats() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        statNumbers.forEach(stat => {
            const target = parseInt(stat.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                stat.textContent = Math.floor(current) + (target === 22 ? '+' : '');
            }, 16);
        });
    }

    // Parallax effect untuk background shapes
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const shapes = document.querySelectorAll('.bg-shape');
        const texts = document.querySelectorAll('.floating-text');
        
        shapes.forEach((shape, index) => {
            const speed = 0.1 + (index * 0.05);
            const yPos = -(scrolled * speed);
            shape.style.transform = `translateY(${yPos}px) rotate(${yPos}deg)`;
        });
        
        texts.forEach((text, index) => {
            const speed = 0.15 + (index * 0.03);
            const yPos = -(scrolled * speed);
            text.style.transform = `translateY(${yPos}px)`;
        });
    });

    // Hover effects
    const links = document.querySelectorAll('.partner-content a');
    links.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});

// Re-initialize AOS when navigating (for SPA)
if (window.livewire) {
    window.livewire.hook('message.processed', () => {
        AOS.refresh();
    });
}
</script>
@endpush