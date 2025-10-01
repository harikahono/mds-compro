@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Testimonials Section Styles */
#testimonials-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    padding: 120px 0;
    position: relative;
    overflow: hidden;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Header Animations */
.testimonials-header {
    opacity: 0;
    transform: translateY(50px);
    transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.testimonials-header.visible {
    opacity: 1;
    transform: translateY(0);
}

.testimonials-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    position: relative;
}

.testimonials-title .text-red-500 {
    color: #ef694c;
    position: relative;
    display: inline-block;
}

.testimonials-title .text-red-500::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 3px;
    background: #ef694c;
    transition: width 1s ease 0.5s;
}

.testimonials-header.visible .text-red-500::after {
    width: 100%;
}

.testimonials-subtitle {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease 0.3s;
}

.testimonials-header.visible .testimonials-subtitle {
    opacity: 1;
    transform: translateY(0);
}

/* Grid Wrapper */
.testimonials-grid-wrapper {
    position: relative;
}

/* Testimonial Cards Animations */
.testimonials-grid {
    position: relative;
}

.testimonial-card {
    background: linear-gradient(135deg, #ef694c 0%, #ff8c6c 100%);
    border: 2px solid transparent;
    transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    opacity: 0;
    transform: translateY(80px) scale(0.9);
    position: relative;
    overflow: hidden;
}

.testimonial-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
    transition: left 0.7s ease;
}

.testimonial-card:hover::before {
    left: 100%;
}

.testimonial-card.visible {
    opacity: 1;
    transform: translateY(0) scale(1);
}

.testimonial-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(239, 105, 76, 0.3);
    border-color: rgba(255, 255, 255, 0.2);
}

/* Staggered Animation untuk Cards */
.testimonial-card:nth-child(1) { transition-delay: 0.2s; }
.testimonial-card:nth-child(2) { transition-delay: 0.4s; }
.testimonial-card:nth-child(3) { transition-delay: 0.6s; }

/* Rating Stars Animation */
.rating {
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.6s ease 0.4s;
}

.testimonial-card.visible .rating {
    opacity: 1;
    transform: translateX(0);
}

.rating img {
    transition: all 0.3s ease;
    filter: brightness(0) invert(1);
}

.testimonial-card:hover .rating img {
    transform: scale(1.2) rotate(10deg);
    filter: brightness(0) invert(1) drop-shadow(0 2px 8px rgba(255,255,255,0.5));
}

/* Blockquote Animation */
blockquote {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease 0.6s;
    position: relative;
}

blockquote::before {
    content: '"';
    position: absolute;
    top: -20px;
    left: -10px;
    font-size: 4rem;
    color: rgba(255,255,255,0.2);
    font-family: serif;
    line-height: 1;
}

.testimonial-card.visible blockquote {
    opacity: 1;
    transform: translateY(0);
}

/* Figcaption Animation */
figcaption {
    opacity: 0;
    transform: translateX(-30px);
    transition: all 0.6s ease 0.8s;
}

.testimonial-card.visible figcaption {
    opacity: 1;
    transform: translateX(0);
}

.client-logo {
    transition: all 0.5s ease;
    border: 3px solid transparent;
}

.testimonial-card:hover .client-logo {
    transform: scale(1.1);
    border-color: rgba(255,255,255,0.3);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Button Styles */
.testimonials-footer {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s ease 1s;
}

.testimonials-footer.visible {
    opacity: 1;
    transform: translateY(0);
}

.btn-reviews {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    border: 2px solid #75b501;
    color: #111;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    overflow: hidden;
}

.btn-reviews::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(117, 181, 1, 0.1), transparent);
    transition: left 0.6s ease;
}

.btn-reviews:hover::before {
    left: 100%;
}

.btn-reviews:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(117, 181, 1, 0.3);
    background: #75b501;
    color: white;
    border-color: #75b501;
}

/* Floating Background Elements */
.testimonials-bg-elements {
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
    opacity: 0.1;
    animation: floatOrb 8s ease-in-out infinite;
}

.orb-1 {
    width: 150px;
    height: 150px;
    background: #ef694c;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.orb-2 {
    width: 100px;
    height: 100px;
    background: #75b501;
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

@keyframes floatOrb {
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

/* Pulse Animation untuk Cards */
@keyframes cardPulse {
    0%, 100% {
        box-shadow: 0 10px 30px rgba(239, 105, 76, 0.2);
    }
    50% {
        box-shadow: 0 15px 40px rgba(239, 105, 76, 0.3);
    }
}

.testimonial-card.pulse {
    animation: cardPulse 3s ease-in-out infinite;
}

/* Mobile Responsive */
@media (max-width: 1024px) {
    #testimonials-section {
        padding: 80px 0;
    }
    
    .testimonials-grid {
        gap: 40px;
    }
}

@media (max-width: 768px) {
    #testimonials-section {
        padding: 60px 0;
    }
    
    .container {
        padding: 0 15px;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .testimonial-card {
        padding: 30px;
    }
    
    .testimonials-title {
        font-size: 2rem;
    }
}

/* Performance Optimizations */
.testimonial-card,
.btn-reviews,
.testimonials-header {
    will-change: transform, opacity;
}

/* Reduced Motion Support */
@media (prefers-reduced-motion: reduce) {
    .testimonial-card,
    .testimonials-header,
    .testimonials-footer,
    .rating,
    blockquote,
    figcaption,
    .bg-orb {
        animation: none !important;
        transition: none !important;
        opacity: 1 !important;
        transform: none !important;
    }
}
</style>
@endpush

<section id="testimonials-section" class="py-24 text-center">
    <!-- Background Elements -->
    <div class="testimonials-bg-elements">
        <div class="bg-orb orb-1" data-aos="fade" data-aos-delay="200"></div>
        <div class="bg-orb orb-2" data-aos="fade" data-aos-delay="400"></div>
        <div class="bg-orb orb-3" data-aos="fade" data-aos-delay="600"></div>
    </div>
    
    <div class="container mx-auto px-4">
        <header class="testimonials-header"
                data-aos="fade-up"
                data-aos-duration="1000">
            <h2 class="testimonials-title text-4xl md:text-5xl font-poppins font-normal leading-tight uppercase">
                <span class="text-gray-900">See why our</span>
                <span class="relative inline-block">
                    <span class="text-gray-900">clients</span>
                </span>
                <span class="text-red-500">trust us</span>
            </h2>
            <p class="testimonials-subtitle max-w-3xl mx-auto mt-4 text-lg font-light text-gray-600">
                We believe in getting the details right, keeping our promises, and always going the extra mile. It's how we work and why our clients trust us.
            </p>
        </header>

        <div class="testimonials-grid-wrapper relative mt-16">
            <div class="testimonials-grid grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <article class="testimonial-card rounded-2xl p-8 shadow-lg text-left"
                         data-aos="fade-up"
                         data-aos-delay="200">
                    <figure class="m-0">
                        <div class="rating flex gap-1 mb-4">
                            <img src="{{ asset('images/2_1324.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1326.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1328.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1330.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1332.svg') }}" alt="Star" class="w-5 h-5">
                        </div>
                        <blockquote class="text-lg leading-relaxed italic font-light text-white">
                            "The Eyekiller team were fantastic to work with. Their passion and skill shines through in each interaction and their dedication to our project ensured that the final product went beyond expectation. We are delighted with our new website and the feedback from our customers has been brilliant!"
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img class="w-16 h-16 rounded-full object-cover client-logo" 
                                 src="{{ asset('images/1bf43bf456fb7e75bbbd9d845cb0c76923820fd4.png') }}" 
                                 alt="Grand Opera House logo">
                            <div class="flex flex-col">
                                <strong class="font-semibold text-white">Jen Rae</strong>
                                <span class="text-sm text-white text-opacity-80">Grand Opera House</span>
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <!-- Testimonial 2 -->
                <article class="testimonial-card rounded-2xl p-8 shadow-lg text-left"
                         data-aos="fade-up"
                         data-aos-delay="400">
                    <figure class="m-0">
                        <div class="rating flex gap-1 mb-4">
                            <img src="{{ asset('images/2_1341.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1343.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1345.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1347.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1349.svg') }}" alt="Star" class="w-5 h-5">
                        </div>
                        <blockquote class="text-lg leading-relaxed italic font-light text-white">
                            "Eyekiller deliver visionary design, technical competence, SEO expertise and excellent project management to create best of breed websites. A dedicated team of professionals that we would wholeheartedly recommend."
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img class="w-16 h-16 rounded-full object-cover client-logo" 
                                 src="{{ asset('images/5b86e2ab436c6eada9914fb3e784b150abf7d5d9.png') }}" 
                                 alt="Mahlatini logo">
                            <div class="flex flex-col">
                                <strong class="font-semibold text-white">Liane Goldring</strong>
                                <span class="text-sm text-white text-opacity-80">Mahlatini</span>
                            </div>
                        </figcaption>
                    </figure>
                </article>

                <!-- Testimonial 3 -->
                <article class="testimonial-card rounded-2xl p-8 shadow-lg text-left"
                         data-aos="fade-up"
                         data-aos-delay="600">
                    <figure class="m-0">
                        <div class="rating flex gap-1 mb-4">
                            <img src="{{ asset('images/2_1358.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1360.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1362.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1364.svg') }}" alt="Star" class="w-5 h-5">
                            <img src="{{ asset('images/2_1366.svg') }}" alt="Star" class="w-5 h-5">
                        </div>
                        <blockquote class="text-lg leading-relaxed italic font-light text-white">
                            "Eyekiller are an absolute pleasure to work with. They are undoubtedly experts in their field and we are delighted with our new customer-focused website that puts our customers at the centre of our online offering. I am very excited to continue to work with Eyekiller as W5's digital development partner."
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-4">
                            <img class="w-16 h-16 rounded-full object-cover client-logo" 
                                 src="{{ asset('images/6d4f0a58aca3607b93afa5d26973310f6236cbad.png') }}" 
                                 alt="W5 logo">
                            <div class="flex flex-col">
                                <strong class="font-semibold text-white">Ann Graham</strong>
                                <span class="text-sm text-white text-opacity-80">W5</span>
                            </div>
                        </figcaption>
                    </figure>
                </article>
            </div>

            <div class="testimonials-footer mt-16 text-center"
                 data-aos="fade-up"
                 data-aos-delay="800">
                <a href="#" class="btn-reviews inline-block border-2 px-8 py-4 rounded-full font-semibold">
                    Read Customer Reviews
                </a>
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
    const testimonialsSection = document.getElementById('testimonials-section');
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const header = document.querySelector('.testimonials-header');
    const footer = document.querySelector('.testimonials-footer');

    // Intersection Observer untuk custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate header
                header.classList.add('visible');
                
                // Animate cards dengan staggered delay
                testimonialCards.forEach((card, index) => {
                    setTimeout(() => {
                        card.classList.add('visible', 'pulse');
                    }, index * 200 + 300);
                });
                
                // Animate footer
                setTimeout(() => {
                    footer.classList.add('visible');
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

    observer.observe(testimonialsSection);

    // Hover effects untuk cards
    testimonialCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
            this.classList.add('pulse');
        });
        
        card.addEventListener('mouseleave', function() {
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
    const reviewBtn = document.querySelector('.btn-reviews');
    if (reviewBtn) {
        reviewBtn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        reviewBtn.addEventListener('mouseleave', function() {
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