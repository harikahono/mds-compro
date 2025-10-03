<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Makes Us Different - White Background</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #333;
            line-height: 1.6;
        }
        
        .spacer {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8f9fa;
            color: #1A1A1A;
            font-size: 2rem;
            text-align: center;
            padding: 20px;
        }
        
        .diff {
            padding: 72px 0 84px;
            background: #ffffff;
        }
        .diff .wrap {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }
        .diff .title {
            margin: 0 0 8px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            color: #111;
            line-height: 1.1;
            font-size: clamp(1.8rem, 4.6vw, 3rem);
            letter-spacing: 1px;
        }
        .diff .subtitle {
            margin: 0 auto 36px;
            max-width: 820px;
            color: #6b7280;
            font-size: .98rem;
            line-height: 1.9;
        }
        .diff .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px 38px;
            text-align: left;
        }
        .diff .item {
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 12px 16px;
            padding: 20px;
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        .diff .item:hover {
            background: #f8f9fa;
            transform: translateY(-5px);
        }
        .diff .bubble {
            width: 44px; height: 44px; border-radius: 12px;
            display: inline-flex; align-items: center; justify-content: center;
            box-shadow: 0 8px 18px rgba(0,0,0,.08);
            transition: transform 0.3s ease;
        }
        .diff .item:hover .bubble {
            transform: scale(1.1);
        }
        .diff .b-pink  { background: #ffd6e6; }
        .diff .b-green { background: #caf291; }
        .diff .b-lilac { background: #e6d9ff; }
        .diff .b-cyan  { background: #c8f5f7; }
        .diff .b-yellow{ background: #fff0b3; }
        .diff .b-peach { background: #ffd9c6; }

        .diff .item h4 {
            margin: 2px 0 6px;
            font-size: .78rem;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: #1f2937;
            font-weight: 700;
        }
        .diff .item p {
            grid-column: 2 / -1;
            margin: 0;
            color: #4b5563;
            font-size: .9rem;
            line-height: 1.8;
        }

        /* CTA */
        .diff .cta {
            margin-top: 30px;
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }
        .diff .avatars {
            display: inline-flex;
        }
        .diff .avatars img {
            width: 30px; height: 30px; border-radius: 9999px; object-fit: cover;
            border: 2px solid #fff; box-shadow: 0 6px 12px rgba(0,0,0,.12);
            margin-left: -6px;
            transition: transform 0.3s ease;
        }
        .diff .avatars:hover img {
            transform: translateY(-2px);
        }
        .diff .avatars img:first-child { margin-left: 0; }
        .diff .btn {
            display: inline-flex; align-items: center; gap: 8px;
            background: #caf291; color: #1a1a1a;
            border-radius: 9999px; padding: 10px 16px;
            font-weight: 600; font-size: .9rem; text-decoration: none;
            box-shadow: 0 10px 20px rgba(202,242,145,.5);
            transition: all 0.3s ease;
        }
        .diff .btn:hover { 
            filter: brightness(.98); 
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(202,242,145,.6);
        }

        /* Responsive */
        @media (max-width: 960px) {
            .diff .grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 640px) {
            .diff { padding: 56px 0 68px; }
            .diff .grid { grid-template-columns: 1fr; gap: 22px; }
            .diff .cta {
                flex-direction: column;
                gap: 16px;
            }
        }
        
        .footer {
            text-align: center;
            padding: 40px 20px;
            background: #1A1A1A;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Komponen What Makes Us Different -->
    <section class="diff">
        <div class="wrap">
            <h2 class="title" data-aos="fade-up" data-aos-delay="100">What makes<br>us different?</h2>
            <p class="subtitle" data-aos="fade-up" data-aos-delay="150">
                Bold strategies. Proven expertise. Real results. We combine creativity, strategy, and
                execution to drive measurable growth and lasting impact.
            </p>

            <div class="grid">
                <div class="item" data-aos="fade-up" data-aos-delay="200">
                    <span class="bubble b-pink" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                        </svg>
                    </span>
                    <h4>Proven expertise</h4>
                    <p>Over two decades of experience and industry‑recognised awards—we know what works and how to make it happen.</p>
                </div>

                <div class="item" data-aos="fade-up" data-aos-delay="250">
                    <span class="bubble b-lilac" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/>
                        </svg>
                    </span>
                    <h4>Strategic execution</h4>
                    <p>Driven by data and designed to deliver measurable growth. We strategise, implement, and optimise for results.</p>
                </div>

                <div class="item" data-aos="fade-up" data-aos-delay="300">
                    <span class="bubble b-cyan" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7 10 12 15 17 10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                    </span>
                    <h4>Efficiency that delivers</h4>
                    <p>Streamlined processes, seamless teamwork, and transparent communication—efficient and impactful.</p>
                </div>

                <div class="item" data-aos="fade-up" data-aos-delay="350">
                    <span class="bubble b-yellow" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20l9-16H3l9 16z"/>
                        </svg>
                    </span>
                    <h4>We design. We build. We grow.</h4>
                    <p>A full‑service approach that turns strategy into impact. We create, execute, and refine digital solutions that deliver measurable results.</p>
                </div>

                <div class="item" data-aos="fade-up" data-aos-delay="400">
                    <span class="bubble b-peach" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="8" y1="12" x2="16" y2="12"/>
                        </svg>
                    </span>
                    <h4>No fluff. Just results.</h4>
                    <p>Straight‑talking, down‑to‑earth professionals who make digital simple, effective, and profitable for your business.</p>
                </div>

                <div class="item" data-aos="fade-up" data-aos-delay="450">
                    <span class="bubble b-green" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 6H9l-7 7h11l7-7z"/>
                            <path d="M7 13v5a2 2 0 0 0 2 2h11"/>
                        </svg>
                    </span>
                    <h4>We make digital work for you</h4>
                    <p>A close‑knit team combining creativity, strategy, and execution to deliver real impact. Let's build something that drives results.</p>
                </div>
            </div>

            <div class="cta" role="group" aria-label="Contact" data-aos="fade-up" data-aos-delay="500">
                <span class="avatars">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face" alt="Team member 1">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face" alt="Team member 2">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="Team member 3">
                </span>
                <a class="btn" href="#">
                    <span>Let's talk</span>
                </a>
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
        
        // Refresh AOS saat halaman di-resize
        window.addEventListener('resize', function() {
            AOS.refresh();
        });
    </script>
</body>
</html>