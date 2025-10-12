<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section with AOS</title>
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --color-text-dark: #000000;
            --color-text-light: #ffffff;
            --color-primary-green: #75b501;
            --card-bg-blue: #0879ED;
            --card-bg-orange: #EF694C;
            --card-bg-green: #75B501;
            --tag-bg-pink: #ffb3db;
            --tag-bg-lime: #caf291;
            --tag-bg-cyan: #70e6ed;
            --border-dark: #4d4d4d;
            --border-light: rgba(255, 255, 255, 0.55);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: var(--color-text-dark);
            margin: 0;
            padding: 0;
        }

        *, *::before, *::after { box-sizing: border-box; }

        /* Section */
        .services-section { 
            padding: 80px 0; 
            position: relative;
            overflow: hidden;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .services-header { 
            text-align: center; 
            margin-bottom: 130px; 
        }

        .main-title {
            font-size: clamp(3rem, 7vw, 5.7rem);
            font-weight: 400;
            line-height: 1.15;
            margin: 0 0 24px;
            color: var(--color-text-dark);
            text-transform: uppercase;
        }

        .main-title .underline-wrapper { 
            position: relative; 
            display: inline-block; 
        }

        .main-title .underline-img {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 102%;
            height: auto;
            z-index: -1;
        }

        .main-title .highlight-green {
            color: var(--color-primary-green);
            font-size: clamp(3.2rem, 7.5vw, 6.1rem);
        }

        .subtitle {
            max-width: 765px;
            margin: 0 auto;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            line-height: 1.8;
            font-weight: 400;
        }

        /* Cards */
        .services-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .service-card {
            position: relative;
            border-radius: 40px;
            padding: 111px 60px 60px;
            color: var(--color-text-light);
            flex: 1 1 380px;
            max-width: 540px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .service-card--design { background-color: var(--card-bg-blue); }
        .service-card--build  { background-color: var(--card-bg-orange); }
        .service-card--grow   { background-color: var(--card-bg-green); }

        /* Tilted tag */
        .card-tag-wrapper {
            position: absolute;
            top: -44px;
            left: 60px;
            border-radius: 10px;
            padding: 8px 25px;
            transform: rotate(-4deg);
            transition: transform 0.3s ease;
        }

        .service-card:hover .card-tag-wrapper {
            transform: rotate(-2deg) scale(1.05);
        }

        .service-card--design .card-tag-wrapper { background-color: var(--tag-bg-pink); }
        .service-card--build  .card-tag-wrapper { background-color: var(--tag-bg-lime); }
        .service-card--grow   .card-tag-wrapper { background-color: var(--tag-bg-cyan); }

        .card-tag {
            margin: 0;
            font-weight: 400;
            color: #111111;
            font-size: clamp(2.5rem, 5vw, 3.75rem);
            line-height: 1.33;
            text-transform: uppercase;
        }

        .card-description {
            margin: 0 0 43px;
            font-size: 1.3125rem;
            line-height: 1.8;
            font-weight: 400;
            transition: transform 0.3s ease;
        }

        .service-card:hover .card-description {
            transform: translateX(5px);
        }

        .service-card--build .card-description { font-weight: 500; }

        /* List */
        .service-list { 
            list-style: none; 
            padding: 0; 
            margin: 0; 
        }

        .service-list li { 
            border-bottom: 1px solid var(--border-light); 
            transition: transform 0.2s ease;
        }

        .service-list li:hover {
            transform: translateX(5px);
        }

        .service-list li:last-child { border-bottom: none; }

        .service-list a {
            display: block;
            padding: 18px 0;
            color: var(--color-text-light);
            text-decoration: none;
            font-size: 0.875rem;
            line-height: 2;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.2s ease-in-out;
            position: relative;
        }

        .service-list a:hover { 
            padding-left: 10px;
        }

        .service-list a::after {
            content: '→';
            position: absolute;
            right: 0;
            opacity: 0;
            transition: all 0.2s ease;
        }

        .service-list a:hover::after {
            opacity: 1;
            right: -15px;
        }

        /* Background decorative elements */
        .bg-decoration {
            position: absolute;
            border-radius: 50%;
            z-index: -1;
            opacity: 0.1;
        }

        .bg-1 {
            width: 300px;
            height: 300px;
            background: var(--card-bg-blue);
            top: 10%;
            left: 5%;
        }

        .bg-2 {
            width: 200px;
            height: 200px;
            background: var(--card-bg-orange);
            bottom: 20%;
            right: 8%;
        }

        .bg-3 {
            width: 150px;
            height: 150px;
            background: var(--card-bg-green);
            top: 40%;
            right: 15%;
        }

        /* Responsive */
        @media (max-width: 1300px) {
            .services-grid { flex-direction: column; align-items: center; }
            .service-card { width: 100%; max-width: 600px; }
        }
        
        @media (max-width: 768px) {
            .services-section { padding: 40px 0; }
            .services-header { margin-bottom: 80px; }
            .service-card { padding: 80px 30px 30px; }
            .card-tag-wrapper { left: 30px; top: -30px; }
            
            .service-card:hover {
                transform: translateY(-5px);
            }
        }
    </style>
</head>
<body>
    <!-- Services Section -->
    <section id="services" class="services-section">
        <!-- Background decorative elements -->
        <div class="bg-decoration bg-1" data-aos="fade-right" data-aos-duration="1500"></div>
        <div class="bg-decoration bg-2" data-aos="fade-left" data-aos-duration="1500"></div>
        <div class="bg-decoration bg-3" data-aos="zoom-in" data-aos-duration="1500"></div>
        
        <div class="container">
            <!-- Header dengan AOS -->
            <div class="services-header" 
                 data-aos="fade-up" 
                 data-aos-duration="800">
                <h1 class="main-title">
                    Our <span class="highlight-green">Services</span>
                </h1>
                <p class="subtitle">
                    We provide comprehensive digital solutions to help your business thrive in the modern landscape. 
                    From design to development and growth strategies, we've got you covered.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="services-grid">
                <!-- Design Card -->
                <article class="service-card service-card--design" 
                         data-aos="fade-up" 
                         data-aos-duration="800"
                         data-aos-delay="200">
                    <div class="card-tag-wrapper">
                        <h2 class="card-tag">Design</h2>
                    </div>
                    <p class="card-description">
                        We create stunning, user-friendly websites that engage visitors, build trust, and turn interest into action.
                    </p>
                    <ul class="service-list">
                        <li><a href="#">Discovery</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">User Experience Design</a></li>
                        <li><a href="#">Accessible Design</a></li>
                    </ul>
                </article>

                <!-- Build Card -->
                <article class="service-card service-card--build" 
                         data-aos="fade-up" 
                         data-aos-duration="800"
                         data-aos-delay="400">
                    <div class="card-tag-wrapper">
                        <h2 class="card-tag">Build</h2>
                    </div>
                    <p class="card-description">
                        We develop high-performing, scalable solutions that work seamlessly for your goals and your customers.
                    </p>
                    <ul class="service-list">
                        <li><a href="#">Website Development</a></li>
                        <li><a href="#">Craft CMS</a></li>
                        <li><a href="#">Spektrix Integration</a></li>
                        <li><a href="#">Shopify Development</a></li>
                        <li><a href="#">Technical SEO</a></li>
                    </ul>
                </article>

                <!-- Grow Card -->
                <article class="service-card service-card--grow" 
                         data-aos="fade-up" 
                         data-aos-duration="800"
                         data-aos-delay="600">
                    <div class="card-tag-wrapper">
                        <h2 class="card-tag">Grow</h2>
                    </div>
                    <p class="card-description">
                        We help you attract, engage, and convert customers with data-driven marketing that delivers results.
                    </p>
                    <ul class="service-list">
                        <li><a href="#">Paid Advertising (PPC)</a></li>
                        <li><a href="#">Search Engine Optimisation</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Content Strategy</a></li>
                        <li><a href="#">Social Media</a></li>
                    </ul>
                </article>
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
    </script>
</body>
</html>