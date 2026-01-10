<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passion Component with AOS</title>
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
            background: #f8fafc;
            color: #333;
            line-height: 1.6;
        }
        
        .passion {
            padding: 80px 0;
            background: #f8fafc;
        }
        .passion .wrap {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .passion .card {
            background: #0879ED;
            color: #fff;
            border-radius: 22px;
            padding: 38px;
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            gap: 40px;
            box-shadow: 0 20px 40px rgba(8,121,237,.18);
        }
        .passion .quote-mark {
            font-size: 48px;
            opacity: .7;
            line-height: 1;
            display: block;
            margin-bottom: 8px;
        }
        .passion .title {
            margin: 0 0 14px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            line-height: 1.25;
            text-transform: uppercase;
            font-size: clamp(1.4rem, 2.6vw, 1.9rem);
        }
        .passion .title .green { 
            color: #CAF291; 
        }
        .passion .desc {
            font-size: .92rem;
            line-height: 1.9;
            opacity: .95;
            max-width: 520px;
        }
        .passion .author {
            margin-top: 22px;
            font-size: .82rem;
            opacity: .9;
        }
        .passion .author b { 
            font-weight: 700; 
        }

        /* Kolase gambar */
        .passion .media {
            position: relative;
            min-height: 280px;
            border-radius: 16px;
            overflow: visible;
        }
        .passion .img-1,
        .passion .img-2,
        .passion .img-3 {
            position: absolute;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 14px 32px rgba(0,0,0,.25);
            transition: transform 0.3s ease;
        }
        .passion .img-1:hover,
        .passion .img-2:hover,
        .passion .img-3:hover {
            transform: translateY(-5px);
        }
        .passion .img-1 {                /* gambar besar belakang kiri */
            top: 0; 
            left: 0;
            width: 62%; 
            height: 62%;
        }
        .passion .img-2 {                /* gambar besar belakang kanan */
            top: 0; 
            right: 0;
            width: 62%; 
            height: 78%;
            border-radius: 18px;
        }
        .passion .img-3 {                /* kartu kecil di depan */
            bottom: -6%; 
            left: 38%;
            width: 42%; 
            height: 58%;
            border-radius: 12px;
        }
        .passion .img-1 img,
        .passion .img-2 img,
        .passion .img-3 img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
            display: block;
        }

        /* Responsive */
        @media (max-width: 980px) {
            .passion .card { 
                grid-template-columns: 1fr; 
                gap: 28px; 
            }
            .passion .desc { 
                max-width: none; 
            }
            .passion .media { 
                min-height: 320px; 
            }
        }
        @media (max-width: 640px) {
            .passion .card { 
                padding: 26px; 
            }
            .passion .media { 
                min-height: 260px; 
            }
            .passion .img-3 {
                bottom: -4%;
            }
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Komponen Passion -->
    <section class="passion">
        <div class="wrap">
            <div class="card" data-aos="fade-up" data-aos-duration="800">
                <div class="text">
                    <span class="quote-mark" data-aos="fade-down" data-aos-delay="200">"</span>
                    <h3 class="title" data-aos="fade-right" data-aos-delay="300">
                        Passion fuels<br>
                        <span class="green" data-aos="fade-right" data-aos-delay="400">everything we do</span>
                    </h3>
                    <p class="desc" data-aos="fade-up" data-aos-delay="500">
                        I believe the strength of Eyekiller is rooted in our unwavering commitment to quality, creativity, and collaboration. Leading this team, I've seen firsthand how our passion transforms digital challenges into engaging experiences. It's incredibly rewarding to work alongside such talented individuals, and I'm proud of the difference we make every day.
                    </p>
                    <p class="author" data-aos="fade-up" data-aos-delay="600">Agipati Dolken, <b>Founder & Managing Director</b></p>
                </div>

                <div class="media" aria-hidden="true">
                    <div class="img-1" data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Team collaboration">
                    </div>
                    <div class="img-2" data-aos="zoom-in" data-aos-delay="400">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Creative workspace">
                    </div>
                    <div class="img-3" data-aos="zoom-in" data-aos-delay="500">
                        <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Project discussion">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS dengan konfigurasi untuk animasi setiap scroll
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false, // Animasi akan berjalan setiap kali elemen muncul di viewport
            mirror: true, // Animasi akan berjalan juga saat scroll ke atas
            offset: 100, // Jarak dari viewport sebelum animasi dimulai
        });
        
        // Refresh AOS saat halaman di-resize
        window.addEventListener('resize', function() {
            AOS.refresh();
        });
    </script>
</body>
</html>