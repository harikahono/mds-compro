@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
:root {
  --color-text-dark: #000000;
  --color-text-light: #ffffff;
  --color-primary-green: #75b501;
  --card-bg-blue: rgba(8, 121, 237, 0.8);
  --card-bg-orange: #ef694c;
  --card-bg-green: #75b501;
  --tag-bg-pink: #ffb3db;
  --tag-bg-lime: #caf291;
  --tag-bg-cyan: #70e6ed;
  --border-dark: #4d4d4d;
  --border-light: rgba(255, 255, 255, 0.5);
}

/* Services Section */
.services-section {
  padding: 120px 0;
  position: relative;
  overflow: hidden;
}

.container {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 20px;
  position: relative;
  z-index: 2;
}

/* Header */
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
  color: #666;
}

/* Services Grid - PERBAIKAN UTAMA */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  align-items: start;
}

.service-card {
  position: relative;
  border-radius: 40px;
  padding: 100px 40px 40px;
  color: var(--color-text-light);
  min-height: 600px;
  display: flex;
  flex-direction: column;
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

/* Background Colors dengan Gradient */
.service-card--design { 
  background: linear-gradient(135deg, var(--card-bg-blue) 0%, #0879ED 100%);
}

.service-card--build { 
  background: linear-gradient(135deg, var(--card-bg-orange) 0%, #ff8c6c 100%);
}

.service-card--grow { 
  background: linear-gradient(135deg, var(--card-bg-green) 0%, #8ed106 100%);
}

/* Card Tags - RAPI DAN KONSISTEN */
.card-tag-wrapper {
  position: absolute;
  top: -30px;
  left: 40px;
  border-radius: 15px;
  padding: 15px 30px;
  transform: rotate(-2deg);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.service-card--design .card-tag-wrapper { 
  background-color: var(--tag-bg-pink);
}

.service-card--build .card-tag-wrapper { 
  background-color: var(--tag-bg-lime);
}

.service-card--grow .card-tag-wrapper { 
  background-color: var(--tag-bg-cyan);
}

.card-tag {
  margin: 0;
  font-weight: 600;
  color: #111111;
  font-size: 2.5rem;
  line-height: 1;
  text-transform: uppercase;
  letter-spacing: -0.5px;
}

/* Card Description - RAPI DAN SEJAJAR */
.card-description {
  margin: 0 0 40px;
  font-size: 1.25rem;
  line-height: 1.7;
  font-weight: 400;
  opacity: 0.95;
  flex-grow: 1;
}

/* Service List - KONSISTEN TINGGI */
.service-list {
  list-style: none;
  padding: 0;
  margin: 0;
  flex-shrink: 0;
}

.service-list li {
  border-bottom: 1px solid;
  transition: all 0.3s ease;
}

.service-card--design .service-list li { 
  border-color: rgba(255, 255, 255, 0.3); 
}

.service-card--build .service-list li { 
  border-color: rgba(255, 255, 255, 0.3); 
}

.service-card--grow .service-list li { 
  border-color: rgba(255, 255, 255, 0.3); 
}

.service-list li:last-child {
  border-bottom: none;
}

.service-list a {
  display: block;
  padding: 20px 0;
  color: var(--color-text-light);
  text-decoration: none;
  font-size: 1.125rem;
  line-height: 1.4;
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
}

.service-list a:hover {
  padding-left: 15px;
  opacity: 0.9;
}

.service-list a::before {
  content: '→';
  position: absolute;
  left: -5px;
  opacity: 0;
  transition: all 0.3s ease;
}

.service-list a:hover::before {
  left: 0;
  opacity: 1;
}

/* Animasi Hover untuk Cards */
.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
}

.service-card:hover .card-tag-wrapper {
  transform: rotate(0deg) scale(1.05);
}

/* Background Elements */
.services-bg-elements {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 1;
}

.bg-shape {
  position: absolute;
  border-radius: 50%;
  opacity: 0.03;
  animation: floatShape 8s ease-in-out infinite;
}

.shape-1 {
  width: 200px;
  height: 200px;
  background: var(--card-bg-blue);
  top: 10%;
  left: 5%;
}

.shape-2 {
  width: 150px;
  height: 150px;
  background: var(--card-bg-orange);
  top: 20%;
  right: 10%;
  animation-delay: 2s;
}

.shape-3 {
  width: 100px;
  height: 100px;
  background: var(--card-bg-green);
  bottom: 30%;
  left: 8%;
  animation-delay: 4s;
}

@keyframes floatShape {
  0%, 100% {
    transform: translateY(0) rotate(0deg);
  }
  50% {
    transform: translateY(-20px) rotate(180deg);
  }
}

/* Responsive Design */
@media (max-width: 1200px) {
  .services-grid {
    grid-template-columns: 1fr;
    gap: 80px;
    max-width: 600px;
    margin: 0 auto;
  }
  
  .service-card {
    min-height: 500px;
    padding: 90px 35px 35px;
  }
}

@media (max-width: 768px) {
  .services-section {
    padding: 80px 0;
  }
  
  .services-header {
    margin-bottom: 80px;
  }
  
  .service-card {
    padding: 80px 25px 25px;
    min-height: 450px;
  }
  
  .card-tag-wrapper {
    left: 25px;
    top: -25px;
    padding: 12px 25px;
  }
  
  .card-tag {
    font-size: 2rem;
  }
  
  .card-description {
    font-size: 1.125rem;
    margin-bottom: 30px;
  }
  
  .service-list a {
    font-size: 1rem;
    padding: 18px 0;
  }
}

@media (max-width: 480px) {
  .container {
    padding: 0 15px;
  }
  
  .service-card {
    padding: 70px 20px 20px;
    min-height: 400px;
  }
  
  .card-tag-wrapper {
    left: 20px;
    top: -20px;
    padding: 10px 20px;
  }
  
  .card-tag {
    font-size: 1.75rem;
  }
}

/* AOS Animations */
[data-aos] {
  opacity: 0;
  transition: all 0.8s ease;
}

[data-aos].aos-animate {
  opacity: 1;
}
</style>
@endpush

<section id="services" class="services-section">
  <!-- Background Elements -->
  <div class="services-bg-elements">
    <div class="bg-shape shape-1" data-aos="fade" data-aos-delay="200"></div>
    <div class="bg-shape shape-2" data-aos="fade" data-aos-delay="400"></div>
    <div class="bg-shape shape-3" data-aos="fade" data-aos-delay="600"></div>
  </div>
  
  <div class="container">
    <header class="services-header" data-aos="fade-up" data-aos-duration="1000">
      <h1 class="main-title">
        Helping you<br>
        <span class="highlight-green">transform your</span><br>
        business
      </h1>
      <p class="subtitle">
        {{ $servicesData['subtitle'] ?? "Bold ideas. Smarter strategies. Game-changing results. Let's elevate your brand and unlock its full potential." }}
      </p>
    </header>

    <div class="services-grid">
      <!-- Design Card -->
      <article class="service-card service-card--design" data-aos="fade-up" data-aos-delay="200">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">DESIGN</h2>
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
      <article class="service-card service-card--build" data-aos="fade-up" data-aos-delay="400">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">BUILD</h2>
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
      <article class="service-card service-card--grow" data-aos="fade-up" data-aos-delay="600">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">GROW</h2>
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

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize AOS
  AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: 'ease-out-cubic'
  });

  // Smooth hover effects
  const serviceCards = document.querySelectorAll('.service-card');
  
  serviceCards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-10px)';
    });
    
    card.addEventListener('mouseleave', function() {
      this.style.transform = 'translateY(0)';
    });
  });
});
</script>
@endpush