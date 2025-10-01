<section id="hero-gallery" class="hero-gallery-section relative overflow-hidden py-16 bg-white">
    <div class="hero-gallery-container max-w-7xl mx-auto px-4 relative flex flex-col items-center justify-center min-h-[60vh] lg:min-h-[80vh]">

        <!-- Hero Text Content dengan Animasi -->
        <div class="hero-text-content z-20 w-full lg:w-3/5 flex flex-col items-center justify-center text-center"
             data-aos="fade-up"
             data-aos-duration="1000"
             data-aos-delay="200">
            <h1 class="hero-heading text-4xl lg:text-8xl font-poppins font-normal leading-tight uppercase">
                <span class="text-[#0879ED] hero-word" data-aos="fade-right" data-aos-delay="300">Miftah</span>
                <br class="lg:hidden">
                <span class="text-[#FE975C] hero-word" data-aos="fade-left" data-aos-delay="400">Digital</span>
                <br class="lg:hidden">
                <span class="text-[#0879ED] hero-word" data-aos="fade-right" data-aos-delay="500">Solutions</span>
            </h1>
            <p class="hero-subheading mt-4 lg:mt-8 text-lg lg:text-2xl max-w-lg lg:max-w-3xl text-gray-600"
               data-aos="fade-up"
               data-aos-delay="600">
                Driving growth for leading brands and organisations through high-performing websites and results-driven digital marketing.
            </p>
            <img class="smiley-icon w-12 lg:w-20 h-auto mt-4" 
                 src="{{ asset('images/2_8.svg') }}" 
                 alt="Smiley icon"
                 data-aos="zoom-in"
                 data-aos-delay="800">
        </div>

        <!-- Hero Background Images dengan Animasi Parallax -->
        <div class="hero-bg-images absolute inset-0 z-10 hidden lg:block">
            
            <!-- Image 1 - Designer -->
            <div class="hero-image image-1 absolute w-[9.74%] h-[13.29%] top-[15.95%] left-[4.53%] transform -translate-x-1/2 -translate-y-1/2 rounded-[10px] overflow-hidden"
                 data-aos="fade-down-right"
                 data-aos-delay="300"
                 data-aos-duration="1200">
                <img src="{{ asset('images/b27d580d000681c1c7c9715337773145538ea024.png') }}" 
                     alt="Designer drawing wireframes" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

            <!-- Image 2 - Team Meeting -->
            <div class="hero-image image-2 absolute w-[11.46%] h-[16.23%] top-[34.94%] left-[2.81%] transform -translate-x-1/2 -translate-y-1/2 rounded-[18px] overflow-hidden"
                 data-aos="zoom-in-left"
                 data-aos-delay="500"
                 data-aos-duration="1000">
                <img src="{{ asset('images/d32629df54707d2b009a6142893ab7dda48ea111.png') }}" 
                     alt="Team meeting" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

            <!-- Image 3 - Arts Council -->
            <div class="hero-image image-3 absolute w-[15.625%] h-[20.89%] top-[15.95%] left-[16.56%] transform -translate-x-1/2 -translate-y-1/2 rounded-[12px] overflow-hidden"
                 data-aos="fade-down"
                 data-aos-delay="400"
                 data-aos-duration="1500">
                <img src="{{ asset('images/09d469cdef466d7ad6a53e126c102174a42840c4.png') }}" 
                     alt="Arts council homepage screenshot" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

            <!-- Image 4 - Oliver Jeffers -->
            <div class="hero-image image-4 absolute w-[11.04%] h-[15.57%] top-[52.7%] left-[86.4%] transform -translate-x-1/2 -translate-y-1/2 rounded-[18px] overflow-hidden"
                 data-aos="fade-up-left"
                 data-aos-delay="600"
                 data-aos-duration="1200">
                <img src="{{ asset('images/f0b21ce501bf85fae96872280e15a1cae0001aee.png') }}" 
                     alt="Oliver Jeffers website on a MacBook" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

            <!-- Image 5 - Grand Opera House -->
            <div class="hero-image image-5 absolute w-[8.85%] h-[18.99%] top-[77.1%] left-[71.51%] transform -translate-x-1/2 -translate-y-1/2 rounded-[18px] overflow-hidden"
                 data-aos="zoom-in-up"
                 data-aos-delay="700"
                 data-aos-duration="1000">
                <img src="{{ asset('images/c3f1c7c572b93607f8f0baed58cba935ed360b30.png') }}" 
                     alt="Grand Opera House website on a phone" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

            <!-- Image 6 - Mahlatini Travel -->
            <div class="hero-image image-6 absolute w-[15.42%] h-[23.93%] top-[72.16%] left-[82.03%] transform -translate-x-1/2 -translate-y-1/2 rounded-[15px] overflow-hidden"
                 data-aos="fade-up-right"
                 data-aos-delay="800"
                 data-aos-duration="1300">
                <img src="{{ asset('images/8a697972c9b60c8a1074bcd6939437c0157436f2.png') }}" 
                     alt="Mahlatini travel website on a laptop" 
                     class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
            </div>

        </div>

        <!-- Floating Elements untuk Efek Tambahan -->
        <div class="floating-elements absolute inset-0 pointer-events-none z-0">
            <div class="floating-circle circle-1 absolute w-6 h-6 bg-[#0879ED] rounded-full opacity-10 top-1/4 left-1/4"
                 data-aos="fade"
                 data-aos-delay="1000"
                 data-aos-duration="2000"></div>
            <div class="floating-circle circle-2 absolute w-4 h-4 bg-[#FE975C] rounded-full opacity-15 top-3/4 right-1/3"
                 data-aos="fade"
                 data-aos-delay="1200"
                 data-aos-duration="2500"></div>
            <div class="floating-circle circle-3 absolute w-8 h-8 bg-[#0879ED] rounded-full opacity-5 bottom-1/4 left-2/3"
                 data-aos="fade"
                 data-aos-delay="1400"
                 data-aos-duration="3000"></div>
            
            <!-- Geometric Shapes -->
            <div class="floating-shape shape-1 absolute w-12 h-12 border-2 border-[#0879ED] opacity-5 top-1/3 right-1/4 rotate-45"
                 data-aos="fade"
                 data-aos-delay="1100"
                 data-aos-duration="2200"></div>
            <div class="floating-shape shape-2 absolute w-8 h-8 border border-[#FE975C] opacity-10 bottom-1/3 left-1/4"
                 data-aos="fade"
                 data-aos-delay="1300"
                 data-aos-duration="2600"></div>
        </div>

        <!-- Background Pattern -->
        <div class="background-pattern absolute inset-0 pointer-events-none z-0 opacity-5">
            <div class="absolute top-0 left-0 w-32 h-32 bg-gradient-to-br from-[#0879ED] to-transparent rounded-full blur-xl"></div>
            <div class="absolute bottom-0 right-0 w-48 h-48 bg-gradient-to-tl from-[#FE975C] to-transparent rounded-full blur-xl"></div>
        </div>

    </div>
</section>

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Custom Animations dengan Background Putih */
.hero-gallery-section {
    background: #ffffff;
    position: relative;
}

.hero-heading {
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.hero-word {
    display: inline-block;
    transition: all 0.3s ease;
}

.hero-word:hover {
    transform: translateY(-3px);
    text-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.hero-image {
    transition: all 0.5s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    border: 2px solid transparent;
    background: white;
}

.hero-image:hover {
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    border-color: rgba(8, 121, 237, 0.2);
    transform: translate(-50%, -50%) scale(1.05) !important;
    z-index: 30;
}

.hero-image img {
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.hero-image:hover img {
    transform: scale(1.1);
}

/* Floating Animation */
@keyframes float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-15px) rotate(180deg);
    }
}

@keyframes float-slow {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-10px) rotate(90deg);
    }
}

.floating-circle,
.floating-shape {
    animation: float 8s ease-in-out infinite;
}

.shape-1 {
    animation: float-slow 12s ease-in-out infinite;
}

.shape-2 {
    animation: float 10s ease-in-out infinite reverse;
}

.circle-1 {
    animation-delay: 0s;
}

.circle-2 {
    animation-delay: 2s;
}

.circle-3 {
    animation-delay: 4s;
}

.shape-1 {
    animation-delay: 1s;
}

.shape-2 {
    animation-delay: 3s;
}

/* Scroll Triggered Animations */
.hero-text-content {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.hero-text-content.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Subtle Background Pattern */
.background-pattern {
    background-image: 
        radial-gradient(circle at 20% 80%, rgba(8, 121, 237, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(254, 151, 92, 0.03) 0%, transparent 50%);
}

/* Text Styling */
.hero-subheading {
    color: #6b7280;
    font-weight: 300;
    line-height: 1.6;
}

/* Image Border Effects */
.hero-image::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #0879ED, #FE975C, #0879ED);
    border-radius: inherit;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.hero-image:hover::before {
    opacity: 1;
    animation: rotate-gradient 3s linear infinite;
}

@keyframes rotate-gradient {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Mobile Optimizations */
@media (max-width: 1024px) {
    .hero-heading {
        font-size: 3.5rem;
    }
    
    .hero-subheading {
        font-size: 1.25rem;
    }
    
    .hero-gallery-section {
        min-height: 50vh;
    }
}

@media (max-width: 768px) {
    .hero-heading {
        font-size: 2.5rem;
    }
    
    .hero-subheading {
        font-size: 1.125rem;
        max-width: 90%;
    }
    
    .hero-gallery-section {
        min-height: 50vh;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    
    .floating-elements {
        display: none;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Performance Optimizations */
.hero-image img {
    will-change: transform;
}

.hero-text-content {
    will-change: transform, opacity;
}

/* Focus States untuk Accessibility */
.hero-image:focus {
    outline: 2px solid #0879ED;
    outline-offset: 2px;
}

/* Loading States */
.hero-image {
    background: #f8fafc;
}

.hero-image img {
    background: linear-gradient(90deg, #f8fafc 25%, #e2e8f0 50%, #f8fafc 75%);
    background-size: 200% 100%;
    animation: loading 2s infinite;
}

@keyframes loading {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: -200% 0;
    }
}

.hero-image img.loaded {
    background: none;
    animation: none;
}
</style>
@endpush

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

    // Custom scroll animations
    const heroSection = document.getElementById('hero-gallery');
    const heroContent = document.querySelector('.hero-text-content');
    
    // Intersection Observer untuk trigger custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                heroContent.classList.add('visible');
                
                // Trigger floating elements animation
                const floatingElements = document.querySelectorAll('.floating-circle, .floating-shape');
                floatingElements.forEach((element, index) => {
                    element.style.animationPlayState = 'running';
                });
            }
        });
    }, {
        threshold: 0.3
    });

    observer.observe(heroSection);

    // Parallax effect on scroll (lebih subtle di background putih)
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallaxElements = document.querySelectorAll('.hero-image');
        
        parallaxElements.forEach((element, index) => {
            const speed = 0.2 + (index * 0.05); // Lebih pelan untuk background putih
            const yPos = -(scrolled * speed);
            element.style.transform = `translate(-50%, calc(-50% + ${yPos}px))`;
        });
    });

    // Hover effects untuk images
    const heroImages = document.querySelectorAll('.hero-image');
    heroImages.forEach(image => {
        image.addEventListener('mouseenter', function() {
            this.style.zIndex = '40';
        });
        
        image.addEventListener('mouseleave', function() {
            this.style.zIndex = '10';
        });
    });

    // Image loading states
    const images = document.querySelectorAll('.hero-image img');
    images.forEach(img => {
        if (img.complete) {
            img.classList.add('loaded');
        } else {
            img.addEventListener('load', function() {
                this.classList.add('loaded');
            });
        }
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