<section id="hero-service" class="relative overflow-hidden py-16">
    <div class="max-w-7xl mx-auto px-4 relative flex flex-col items-center justify-center min-h-[60vh] lg:min-h-[70vh]">
        
        <!-- Top badge dengan animasi fade-down -->
        <div class="z-20 mb-6" data-aos="fade-down" data-aos-duration="800" data-aos-delay="200">
            <span class="inline-block text-xs tracking-wider uppercase px-3 py-1 rounded-md border border-[#B7E5A3] text-[#1A1A1A] bg-white/70 shadow-sm">
                Services
            </span>
        </div>

        <!-- Heading dengan animasi zoom-in -->
        <div class="relative z-20 w-full lg:w-4/5 flex flex-col items-center text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
            <h1 class="text-4xl lg:text-8xl font-poppins font-normal leading-tight uppercase">
                <span class="text-[#1A1A1A]">Delivering</span><br class="lg:hidden">
                <span class="text-[#7ED321]">Results</span>
                <span class="text-[#1A1A1A]">for</span><br class="hidden lg:block">
                <span class="text-[#1A1A1A]">Top Brands</span>
            </h1>

            <!-- Smiley dengan animasi fade-left -->
            <img
                class="absolute -right-2 top-1/2 translate-y-[-55%] w-10 lg:w-16 h-auto"
                src="{{ asset('images/2_8.svg') }}"
                alt="Smiley icon"
                data-aos="fade-left" 
                data-aos-duration="800"
                data-aos-delay="600"
            >
        </div>

        <!-- Subtext dengan animasi fade-up -->
        <p class="z-20 mt-6 text-base lg:text-xl text-center max-w-2xl text-[#4B5563]" 
           data-aos="fade-up" 
           data-aos-duration="800"
           data-aos-delay="800">
            Bold ideas. Smarter strategies. Game-changing results.
            <br class="hidden lg:block">Let's elevate your brand and unlock its full potential.
        </p>

        <!-- CTA Button dengan animasi bounce -->
        <div class="z-20 mt-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="1000">
            <a href="#contact" class="inline-flex items-center px-6 py-3 bg-[#7ED321] text-white font-medium rounded-lg hover:bg-[#6BB820] transition-colors duration-300 shadow-md">
                Get Started
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>

        <!-- Background elements dengan animasi -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <!-- Animated circles -->
            <div class="absolute -top-20 -right-20 w-40 h-40 rounded-full bg-[#7ED321]/10" 
                 data-aos="fade-down-left" 
                 data-aos-duration="1500"></div>
            <div class="absolute -bottom-20 -left-20 w-60 h-60 rounded-full bg-[#7ED321]/5" 
                 data-aos="fade-up-right" 
                 data-aos-duration="1500"></div>
            
            <!-- Floating elements -->
            <div class="absolute top-1/4 left-10 w-6 h-6 rounded-full bg-[#B7E5A3]/30" 
                 data-aos="fade" 
                 data-aos-duration="2000"
                 data-aos-delay="500"></div>
            <div class="absolute bottom-1/3 right-20 w-4 h-4 rounded-full bg-[#7ED321]/20" 
                 data-aos="fade" 
                 data-aos-duration="2000"
                 data-aos-delay="700"></div>
        </div>
    </div>
</section>

<!-- Script untuk menginisialisasi AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true, // Animasi hanya berjalan sekali
            mirror: false,
            offset: 100
        });
    });
</script>

<!-- Tambahkan link CSS AOS di head template Anda -->
<!--
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
-->