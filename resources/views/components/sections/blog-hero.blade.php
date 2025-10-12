<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Hero with AOS</title>
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #f97316, #84cc16, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .newsletter-form {
            background: linear-gradient(135deg, #fef7ed 0%, #f0fdf4 50%, #eff6ff 100%);
        }
    </style>
</head>
<body class="bg-white">
    <!-- Blog Hero Section -->
    <section class="relative overflow-hidden py-16 md:py-24">
        <!-- Background decorative elements -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-orange-100 rounded-full opacity-50" 
             data-aos="fade-down-left" 
             data-aos-duration="1500"></div>
        <div class="absolute -bottom-16 -left-16 w-32 h-32 bg-blue-100 rounded-full opacity-50" 
             data-aos="fade-up-right" 
             data-aos-duration="1500"></div>
        <div class="absolute top-1/4 left-1/4 w-16 h-16 bg-lime-100 rounded-full opacity-30" 
             data-aos="zoom-in" 
             data-aos-duration="1200"></div>
        
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:items-center">
                <!-- Left Content -->
                <div>
                    <!-- Badge with animation -->
                    <span class="inline-flex items-center rounded-md bg-lime-200 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-gray-900 transform transition-all duration-300 hover:scale-105"
                          data-aos="fade-down" 
                          data-aos-duration="800"
                          data-aos-delay="200">
                        Blog
                    </span>

                    <!-- Main Heading with staggered animations -->
                    <h1 class="mt-6 font-extrabold leading-none">
                        <span class="block text-4xl sm:text-6xl md:text-7xl lg:text-8xl text-orange-400 floating"
                              data-aos="fade-right" 
                              data-aos-duration="1000"
                              data-aos-delay="300">
                            THOUGHTS
                        </span>
                        <span class="mt-2 block text-4xl sm:text-6xl md:text-7xl lg:text-8xl"
                              data-aos="fade-left" 
                              data-aos-duration="1000"
                              data-aos-delay="500">
                            <span class="text-lime-500">&amp;</span>
                            <span class="ml-3 text-blue-500 gradient-text">INSIGHTS</span>
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="mt-6 max-w-xl text-base md:text-lg text-gray-600 transition-all duration-500 hover:text-gray-800"
                       data-aos="fade-up" 
                       data-aos-duration="800"
                       data-aos-delay="700">
                        Further reading on ideas worth sharing.
                    </p>

                    <!-- Newsletter Section -->
                    <div class="mt-10 max-w-xl newsletter-form rounded-2xl p-6 border border-gray-100"
                         data-aos="fade-up" 
                         data-aos-duration="800"
                         data-aos-delay="900">
                        <div class="flex items-center gap-2 text-sm font-medium text-gray-800 transform transition-all duration-300 hover:translate-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4 text-orange-500">
                                <path d="M1.5 8.67v8.58A2.25 2.25 0 003.75 19.5h16.5a2.25 2.25 0 002.25-2.25V8.67l-8.61 5.38a3.75 3.75 0 01-4.03 0L1.5 8.67z" />
                                <path d="M22.5 6.75v-.008A2.25 2.25 0 0020.25 4.5H3.75A2.25 2.25 0 001.5 6.742V6.75l9.57 5.98a2.25 2.25 0 002.36 0L22.5 6.75z" />
                            </svg>
                            <span>Get the latest insights to your inbox!</span>
                        </div>

                        <form class="mt-4 flex flex-col gap-3 sm:flex-row" 
                              action="#" 
                              method="post" 
                              onsubmit="return handleSubscribe(event);">
                            <label class="sr-only" for="blog-email">Email</label>
                            <input id="blog-email" 
                                   type="email" 
                                   placeholder="Enter your email address" 
                                   class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none ring-0 transition-all duration-300 placeholder:text-gray-400 focus:border-orange-400 focus:ring-2 focus:ring-orange-200 focus:ring-opacity-50 transform hover:scale-[1.02]"
                                   data-aos="fade-right"
                                   data-aos-duration="600"
                                   data-aos-delay="1100" />
                            <button type="submit" 
                                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-gray-900 to-black px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:from-black hover:to-gray-900 hover:shadow-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gray-900 focus-visible:ring-offset-2 transform hover:scale-105 active:scale-95 sm:w-auto"
                                    data-aos="fade-left"
                                    data-aos-duration="600"
                                    data-aos-delay="1100">
                                Sign Up
                                <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </button>
                        </form>

                        <p class="mt-2 text-xs text-gray-500 transition-opacity duration-300 hover:opacity-80"
                           data-aos="fade-up"
                           data-aos-duration="600"
                           data-aos-delay="1300">
                            By signing up you agree to our <a href="#" class="underline transition-colors duration-300 hover:text-orange-500">Privacy Policy</a>.
                        </p>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="relative">
                    <div class="rounded-3xl bg-rose-50 p-6 sm:p-8 md:p-10 transform transition-all duration-500 hover:shadow-2xl"
                         data-aos="zoom-in" 
                         data-aos-duration="1000"
                         data-aos-delay="400">
                        <div class="mx-auto max-w-xl">
                            <!-- Image Container -->
                            <div class="overflow-hidden rounded-2xl bg-black shadow-2xl ring-1 ring-black/10 transform transition-all duration-500 hover:scale-[1.02] hover:shadow-3xl"
                                 data-aos="flip-up"
                                 data-aos-duration="800"
                                 data-aos-delay="600">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                     alt="Exceptional Digital Experiences" 
                                     class="h-auto w-full object-cover transition-transform duration-700 hover:scale-110" />
                            </div>
                            
                            <!-- Featured Post Card -->
                            <div class="mt-6 rounded-2xl bg-white p-6 text-center shadow-lg ring-1 ring-gray-100 transform transition-all duration-500 hover:scale-[1.02] hover:shadow-xl"
                                 data-aos="fade-up" 
                                 data-aos-duration="800"
                                 data-aos-delay="800">
                                <h3 class="text-lg font-semibold tracking-tight text-gray-900 transition-colors duration-300 hover:text-orange-500">
                                    A new chapter for Eyekiller
                                </h3>
                                <p class="mt-2 text-sm leading-6 text-gray-600 transition-colors duration-300 hover:text-gray-800">
                                    See how we're evolving our brand, our website, and our mission to drive digital excellence.
                                </p>
                                <button class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-orange-500 transition-all duration-300 hover:gap-2 hover:text-orange-600">
                                    Read more
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-lime-300 rounded-full opacity-80 floating"
                         data-aos="fade-down"
                         data-aos-duration="1200"
                         data-aos-delay="1000"></div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-blue-300 rounded-full opacity-80 floating"
                         style="animation-delay: 2s;"
                         data-aos="fade-up"
                         data-aos-duration="1200"
                         data-aos-delay="1200"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-out-cubic',
                once: true,
                offset: 100,
                mirror: false
            });
        });
        
        // Handle form submission
        function handleSubscribe(event) {
            event.preventDefault();
            const emailInput = document.getElementById('blog-email');
            const email = emailInput.value;
            
            if (email && validateEmail(email)) {
                // Add success animation
                const button = event.target.querySelector('button[type="submit"]');
                const originalText = button.innerHTML;
                
                button.innerHTML = `
                    <svg class="h-4 w-4 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Subscribing...
                `;
                button.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    button.innerHTML = 'Subscribed!';
                    button.classList.remove('from-gray-900', 'to-black', 'hover:from-black', 'hover:to-gray-900');
                    button.classList.add('bg-green-500', 'hover:bg-green-600');
                    
                    setTimeout(() => {
                        button.innerHTML = originalText;
                        button.disabled = false;
                        button.classList.remove('bg-green-500', 'hover:bg-green-600');
                        button.classList.add('from-gray-900', 'to-black', 'hover:from-black', 'hover:to-gray-900');
                        emailInput.value = '';
                    }, 2000);
                }, 1500);
            } else {
                // Add error animation
                emailInput.classList.add('border-red-500', 'ring-2', 'ring-red-200');
                setTimeout(() => {
                    emailInput.classList.remove('border-red-500', 'ring-2', 'ring-red-200');
                }, 2000);
            }
            
            return false;
        }
        
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    </script>
</body>
</html>