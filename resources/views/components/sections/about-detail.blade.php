<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Service with White Background</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Tailwind CSS (CDN untuk demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #1A1A1A;
            line-height: 1.6;
        }
        
        .spacer {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f5f5f5 0%, #e5e5e5 100%);
            color: #1A1A1A;
            font-size: 2rem;
            text-align: center;
            padding: 20px;
        }
        
        .footer {
            text-align: center;
            padding: 40px 20px;
            background: #1A1A1A;
            color: white;
        }
        
        /* Custom styles untuk komponen hero */
        #hero-service {
            background: #ffffff;
            position: relative;
        }
        
        #hero-service::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(126, 211, 33, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(126, 211, 33, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-badge {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid #B7E5A3;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .hero-badge:hover {
            box-shadow: 0 8px 20px rgba(183, 229, 163, 0.2);
            transform: translateY(-2px);
            border-color: #7ED321;
        }
        
        .hero-heading {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }
        
        .smiley-icon {
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.08));
        }
        
        .cta-button {
            background: #7ED321;
            box-shadow: 0 4px 15px rgba(126, 211, 33, 0.2);
        }
        
        .cta-button:hover {
            background: #6AB920;
            box-shadow: 0 6px 20px rgba(126, 211, 33, 0.3);
        }
        
        .decorative-circle {
            border-color: rgba(126, 211, 33, 0.1);
        }
    </style>
</head>
<body>
    <!-- Komponen Hero Service -->
    <section id="hero-service" class="relative overflow-hidden py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 relative flex flex-col items-center justify-center min-h-[60vh] lg:min-h-[70vh]" data-aos="zoom-in" data-aos-delay="100">
            
            <!-- Top badge -->
            <div class="z-20 mb-6" data-aos="fade-down" data-aos-delay="150">
                <span class="hero-badge inline-block text-xs tracking-wider uppercase px-3 py-1 rounded-md text-[#1A1A1A] md:hover:scale-105 transition-transform duration-300">
                    About
                </span>
            </div>

            <!-- Heading -->
            <div class="relative z-20 w-full lg:w-4/5 flex flex-col items-center text-center" data-aos="fade-up" data-aos-delay="200">
                <h1 class="hero-heading text-4xl lg:text-8xl font-poppins font-normal leading-tight uppercase">
                    <span class="text-[#1A1A1A]">we're</span><br class="lg:hidden">
                    <span class="text-[#1A1A1A]">all</span>
                    <span class="text-[#1A1A1A]">about</span><br class="hidden lg:block">
                    <span class="text-[#7ED321]">digital</span>
                </h1>

                <!-- Smiley on the right of the heading -->
                <img
                    class="smiley-icon absolute -right-2 top-1/2 translate-y-[-55%] w-10 lg:w-16 h-auto transition-transform duration-300 hover:rotate-6 hover:scale-110"
                    src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%237ED321'%3E%3Cpath d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z'/%3E%3C/svg%3E"
                    alt="Smiley icon"
                    data-aos="rotate-in" data-aos-delay="400"
                >
            </div>

            <!-- Subtext -->
            <p class="z-20 mt-6 text-base lg:text-xl text-center max-w-4xl text-[#4B5563]" data-aos="fade-up" data-aos-delay="250">
                Behind every project is a passionate team that cares about doing great work.
                <br class="hidden lg:block">Learn more about who we are, what drives us, and the difference we make.
            </p>
            
            <!-- CTA Button -->
            <div class="z-20 mt-8" data-aos="fade-up" data-aos-delay="350">
                <button class="cta-button text-white font-medium py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105">
                    Discover Our Story
                </button>
            </div>
            
            <!-- Decorative elements -->
            <div class="absolute bottom-10 left-10 w-20 h-20 opacity-20" data-aos="fade-right" data-aos-delay="500">
                <div class="w-full h-full rounded-full border-2 border-[#7ED321] decorative-circle"></div>
            </div>
            
            <div class="absolute top-10 right-10 w-16 h-16 opacity-20" data-aos="fade-left" data-aos-delay="600">
                <div class="w-full h-full rounded-full border-2 border-[#7ED321] decorative-circle"></div>
            </div>
            
            <!-- Additional decorative elements -->
            <div class="absolute bottom-20 right-20 w-12 h-12 opacity-15" data-aos="fade-up" data-aos-delay="700">
                <div class="w-full h-full rounded-full border border-[#7ED321] decorative-circle"></div>
            </div>
            
            <div class="absolute top-20 left-20 w-8 h-8 opacity-15" data-aos="fade-down" data-aos-delay="700">
                <div class="w-full h-full rounded-full border border-[#7ED321] decorative-circle"></div>
            </div>
        </div>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS dengan konfigurasi untuk animasi setiap scroll
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: false, // Animasi akan berjalan setiap kali elemen muncul di viewport
            mirror: true, // Animasi akan berjalan juga saat scroll ke atas
            offset: 50, // Jarak dari viewport sebelum animasi dimulai
        });
        
        // Custom animasi untuk smiley icon
        AOS.init({
            disable: false,
            startEvent: 'DOMContentLoaded',
            initClassName: 'aos-init',
            animatedClassName: 'aos-animate',
            useClassNames: false,
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,
            offset: 120,
            delay: 0,
            duration: 800,
            easing: 'ease-out-cubic',
            once: false,
            mirror: true,
            anchorPlacement: 'top-bottom',
        });
        
        // Refresh AOS saat halaman di-resize
        window.addEventListener('resize', function() {
            AOS.refresh();
        });
        
        // Tambahkan class untuk custom animation rotate-in
        const style = document.createElement('style');
        style.textContent = `
            [data-aos='rotate-in'] {
                transform: rotate(-180deg) scale(0.5);
                opacity: 0;
                transition-property: transform, opacity;
            }
            [data-aos='rotate-in'].aos-animate {
                transform: rotate(0deg) scale(1);
                opacity: 1;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>