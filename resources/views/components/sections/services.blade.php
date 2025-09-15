@push('styles')
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

body {
  font-family: 'Poppins', sans-serif;
  background-color: #ffffff;
  color: var(--color-text-dark);
  margin: 0;
  padding: 0;
}

*, *::before, *::after {
  box-sizing: border-box;
}

/* CSS from section:services */
.services-section {
  padding: 80px 0;
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
}

.service-card--design { background-color: var(--card-bg-blue); }
.service-card--build { background-color: var(--card-bg-orange); }
.service-card--grow { background-color: var(--card-bg-green); }

.card-tag-wrapper {
  position: absolute;
  top: -44px;
  left: 60px;
  border-radius: 10px;
  padding: 8px 25px;
  transform: rotate(-4deg);
}

.service-card--design .card-tag-wrapper { background-color: var(--tag-bg-pink); }
.service-card--build .card-tag-wrapper { background-color: var(--tag-bg-lime); }
.service-card--grow .card-tag-wrapper { background-color: var(--tag-bg-cyan); }

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
}
.service-card--build .card-description { font-weight: 500; }

.service-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.service-list li {
  border-bottom: 1px solid;
}

.service-card--design .service-list li { border-color: var(--border-dark); }
.service-card--build .service-list li,
.service-card--grow .service-list li { border-color: var(--border-light); }

.service-list li:last-child {
  border-bottom: none;
}

.service-list a {
  display: block;
  padding: 18px 0;
  color: var(--color-text-light);
  text-decoration: none;
  font-size: 1.25rem;
  line-height: 2;
  font-weight: 600;
  transition: opacity 0.2s ease-in-out;
}

.service-card--design .service-list a { font-weight: 500; }
.service-card--build .service-list a,
.service-card--grow .service-list a { font-weight: 400; }

.service-list a:hover {
  opacity: 0.8;
}

@media (max-width: 1300px) {
  .services-grid {
    flex-direction: column;
    align-items: center;
  }
  .service-card {
    width: 100%;
    max-width: 600px;
  }
}

@media (max-width: 768px) {
  .services-section {
    padding: 40px 0;
  }
  .services-header {
    margin-bottom: 80px;
  }
  .service-card {
    padding: 80px 30px 30px;
  }
  .card-tag-wrapper {
    left: 30px;
    top: -30px;
  }
}
</style>
@endpush

<section id="services" class="services-section">
  <div class="container">
    <header class="services-header">
      <h1 class="main-title">
        Helping you<br>
        <span class="underline-wrapper">
          transform
          <img src="{{ asset('page/8a0483a9-d71e-4de4-b364-c77166fa8e8a/images/2_1433.svg') }}" alt="Pink underline" class="underline-img" loading="lazy">
        </span>
        <span class="highlight-green"> your</span><br>
        business
      </h1>
      <p class="subtitle">
        {{ $servicesData['subtitle'] ?? 'Bold ideas. Smarter strategies. Game-changing results. Let’s elevate your brand and unlock its full potential.' }}
      </p>
    </header>

    <div class="services-grid">
      <article class="service-card service-card--design">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">{{ $servicesData['cards'][0]['tag'] ?? 'Design' }}</h2>
        </div>
        <p class="card-description">{{ $servicesData['cards'][0]['description'] ?? 'We create stunning, user-friendly websites that engage visitors, build trust, and turn interest into action.' }}</p>
        <ul class="service-list">
          @foreach($servicesData['cards'][0]['items'] ?? [
            ['title' => 'Discovery', 'link' => '#'],
            ['title' => 'Web Design', 'link' => '#'],
            ['title' => 'User Experience Design', 'link' => '#'],
            ['title' => 'Accessible Design', 'link' => '#']
          ] as $item)
            <li><a href="{{ $item['link'] }}">{{ $item['title'] }}</a></li>
          @endforeach
        </ul>
      </article>

      <article class="service-card service-card--build">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">{{ $servicesData['cards'][1]['tag'] ?? 'Build' }}</h2>
        </div>
        <p class="card-description">{{ $servicesData['cards'][1]['description'] ?? 'We develop high-performing, scalable solutions that work seamlessly for your goals and your customers.' }}</p>
        <ul class="service-list">
          @foreach($servicesData['cards'][1]['items'] ?? [
            ['title' => 'Website Development', 'link' => '#'],
            ['title' => 'Craft CMS', 'link' => '#'],
            ['title' => 'Spektrix Integration', 'link' => '#'],
            ['title' => 'Shopify Development', 'link' => '#'],
            ['title' => 'Technical SEO', 'link' => '#']
          ] as $item)
            <li><a href="{{ $item['link'] }}">{{ $item['title'] }}</a></li>
          @endforeach
        </ul>
      </article>

      <article class="service-card service-card--grow">
        <div class="card-tag-wrapper">
          <h2 class="card-tag">{{ $servicesData['cards'][2]['tag'] ?? 'Grow' }}</h2>
        </div>
        <p class="card-description">{{ $servicesData['cards'][2]['description'] ?? 'We help you attract, engage, and convert customers with data-driven marketing that delivers results.' }}</p>
        <ul class="service-list">
          @foreach($servicesData['cards'][2]['items'] ?? [
            ['title' => 'Paid Advertising (PPC)', 'link' => '#'],
            ['title' => 'Search Engine Optimisation', 'link' => '#'],
            ['title' => 'Digital Marketing', 'link' => '#'],
            ['title' => 'Content Strategy', 'link' => '#'],
            ['title' => 'Social Media', 'link' => '#']
          ] as $item)
            <li><a href="{{ $item['link'] }}">{{ $item['title'] }}</a></li>
          @endforeach
        </ul>
      </article>
    </div>
  </div>
</section>