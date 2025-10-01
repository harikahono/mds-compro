@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
/* Portfolio Section Styles */
#portfolio { 
    background-color: #ffffff; 
    padding: 100px 0;
    position: relative;
    overflow: hidden;
}

.section-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
}

.portfolio-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 98px;
    position: relative;
}

.portfolio-column {
    display: flex;
    flex-direction: column;
    gap: 98px;
}

.column-offset { 
    margin-top: 120px; 
}

.portfolio-item { 
    text-decoration: none; 
    color: inherit;
    position: relative;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.portfolio-item:hover {
    transform: translateY(-10px);
}

.portfolio-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 24px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
}

.portfolio-item:hover .portfolio-image-wrapper {
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    transform: scale(1.02);
}

.portfolio-image { 
    width: 100%; 
    height: auto; 
    display: block;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.portfolio-item:hover .portfolio-image {
    transform: scale(1.1);
}

.portfolio-badge {
    position: absolute;
    bottom: -10px;
    right: -10px;
    width: 98px;
    height: 110px;
    border-radius: 4px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    font-size: 12.5px;
    line-height: 1.4;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.5s ease 0.2s;
    z-index: 10;
}

.portfolio-item:hover .portfolio-badge {
    transform: translateY(0);
    opacity: 1;
}

.award-badge { 
    background-color: #000; 
}

.award-badge img { 
    margin-bottom: 5px; 
    transition: transform 0.3s ease;
}

.portfolio-item:hover .award-badge img {
    transform: scale(1.1) rotate(5deg);
}

.stat-badge { 
    background-color: #caf291; 
    color: #000; 
}

.stat-badge strong { 
    font-size: 28px; 
    font-weight: 400; 
    line-height: 1.1; 
    transition: transform 0.3s ease;
}

.portfolio-item:hover .stat-badge strong {
    transform: scale(1.1);
}

.stat-badge span { 
    font-size: 13px; 
}

.portfolio-caption h3 {
    font-size: clamp(1.8rem, 3vw, 2.7rem);
    font-weight: 400;
    line-height: 1.2;
    margin: 0 0 10px;
    transition: color 0.3s ease;
}

.portfolio-item:hover .portfolio-caption h3 {
    color: #ef694c;
}

.portfolio-caption p {
    font-size: clamp(1rem, 1.8vw, 1.3rem);
    line-height: 1.8;
    margin: 0;
    color: #666;
    transition: color 0.3s ease;
}

.portfolio-item:hover .portfolio-caption p {
    color: #333;
}

/* CTA Block Styles */
.cta-block {
    background: linear-gradient(135deg, #ef694c 0%, #ff8c6c 100%);
    color: white;
    padding: 80px 60px;
    border-radius: 30px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s ease;
}

.cta-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 50px rgba(239, 105, 76, 0.3);
}

.cta-block::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
    transform: rotate(45deg);
    transition: all 0.6s ease;
    opacity: 0;
}

.cta-block:hover::before {
    opacity: 1;
    animation: shine 1.5s ease;
}

@keyframes shine {
    0% { transform: rotate(45deg) translateX(-100%); }
    100% { transform: rotate(45deg) translateX(100%); }
}

.cta-block h3 {
    font-size: clamp(3rem, 7vw, 6rem);
    font-weight: 400;
    line-height: 1.1;
    margin: 0 0 20px;
    position: relative;
    z-index: 2;
}

.cta-smile {
    width: clamp(60px, 8vw, 122px);
    position: absolute;
    top: 0;
    right: 0;
    transform: rotate(15deg);
    transition: all 0.5s ease;
}

.cta-block:hover .cta-smile {
    transform: rotate(25deg) scale(1.1);
}

.cta-block p { 
    font-size: 21px; 
    line-height: 1.8; 
    position: relative;
    z-index: 2;
    opacity: 0.9;
}

.cta-buttons { 
    display: flex; 
    gap: 20px; 
    margin-top: 40px;
    position: relative;
    z-index: 2;
}

.btn {
    padding: 20px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-size: 21px;
    font-weight: 400;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    position: relative;
    overflow: hidden;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s ease;
}

.btn:hover::before {
    left: 100%;
}

.btn-primary { 
    background-color: #75b501; 
    color: #111111; 
    box-shadow: 0 5px 15px rgba(117, 181, 1, 0.3);
}

.btn-primary:hover {
    background-color: #8ed106;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(117, 181, 1, 0.4);
}

.btn-secondary { 
    border: 2px solid #caf291; 
    color: white; 
    background: transparent;
}

.btn-secondary:hover {
    background-color: #caf291;
    color: #111;
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(202, 242, 145, 0.3);
}

/* Floating Background Elements */
.portfolio-bg-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.bg-circle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.03;
    animation: float 6s ease-in-out infinite;
}

.bg-circle-1 {
    width: 200px;
    height: 200px;
    background: #ef694c;
    top: 10%;
    left: 5%;
    animation-delay: 0s;
}

.bg-circle-2 {
    width: 150px;
    height: 150px;
    background: #75b501;
    bottom: 20%;
    right: 10%;
    animation-delay: 2s;
}

.bg-circle-3 {
    width: 100px;
    height: 100px;
    background: #0879ED;
    top: 50%;
    left: 80%;
    animation-delay: 4s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
    }
}

/* Responsive Design */
@media (max-width: 1200px) {
    .section-container {
        padding: 0 30px;
    }
    
    .portfolio-grid {
        gap: 60px;
    }
    
    .portfolio-column {
        gap: 60px;
    }
}

@media (max-width: 992px) {
    .portfolio-grid { 
        grid-template-columns: 1fr; 
        gap: 80px;
    }
    
    .column-offset { 
        margin-top: 0; 
    }
    
    .cta-block {
        padding: 60px 40px;
    }
    
    .cta-buttons {
        flex-direction: column;
        gap: 15px;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    #portfolio {
        padding: 60px 0;
    }
    
    .section-container {
        padding: 0 20px;
    }
    
    .portfolio-grid {
        gap: 60px;
    }
    
    .portfolio-column {
        gap: 60px;
    }
    
    .cta-block {
        padding: 40px 30px;
        text-align: center;
    }
    
    .cta-smile {
        position: relative;
        top: auto;
        right: auto;
        margin: 0 auto 20px;
        display: block;
    }
}

@media (max-width: 480px) {
    .section-container {
        padding: 0 15px;
    }
    
    .cta-block {
        padding: 30px 20px;
    }
    
    .btn {
        padding: 16px 30px;
        font-size: 18px;
    }
    
    .portfolio-badge {
        width: 80px;
        height: 90px;
        font-size: 11px;
    }
    
    .stat-badge strong {
        font-size: 22px;
    }
}

/* Scroll Animations */
.portfolio-item,
.cta-block {
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.portfolio-item.visible,
.cta-block.visible {
    opacity: 1;
    transform: translateY(0);
}

/* Staggered Animation Delays */
.portfolio-column:nth-child(1) .portfolio-item:nth-child(1) { transition-delay: 0.1s; }
.portfolio-column:nth-child(1) .portfolio-item:nth-child(2) { transition-delay: 0.2s; }
.portfolio-column:nth-child(1) .cta-block { transition-delay: 0.3s; }

.portfolio-column:nth-child(2) .portfolio-item:nth-child(1) { transition-delay: 0.2s; }
.portfolio-column:nth-child(2) .portfolio-item:nth-child(2) { transition-delay: 0.3s; }
.portfolio-column:nth-child(2) .portfolio-item:nth-child(3) { transition-delay: 0.4s; }
</style>
@endpush

<section id="portfolio" class="section-container">
    <div class="portfolio-bg-elements">
        <div class="bg-circle bg-circle-1" data-aos="fade" data-aos-delay="200"></div>
        <div class="bg-circle bg-circle-2" data-aos="fade" data-aos-delay="400"></div>
        <div class="bg-circle bg-circle-3" data-aos="fade" data-aos-delay="600"></div>
    </div>
    
    <div class="portfolio-grid">
        {{-- Column 1 --}}
        <div class="portfolio-column">
            @foreach($portfolioData['column1'] ?? [
                [
                    'image' => 'images/558da5eed4886cb11c4bd43f24f89a29ad0f7036.png',
                    'alt' => 'Mahlatini project',
                    'badge' => ['type' => 'award', 'icon' => 'images/2_1274.svg', 'text' => 'Awwwards<br>Nominee'],
                    'title' => 'Mahlatini',
                    'description' => 'Transforming a luxury travel brand with premium design, seamless functionality and intelligent UX.',
                    'link' => '#'
                ],
                [
                    'image' => 'images/0500323502f89ff1f30c2a3066feb4be4725ab4d.png',
                    'alt' => 'Game of Thrones Studio Tour project',
                    'title' => 'Game of Thrones<br>Studio Tour',
                    'description' => 'Reimagining an iconic attraction with immersive design, storytelling, and seamless booking.',
                    'link' => '#'
                ]
            ] as $index => $item)
                @if(isset($item['type']) && $item['type'] === 'cta')
                    <div class="cta-block" 
                         data-aos="fade-up" 
                         data-aos-delay="{{ ($index + 1) * 100 }}">
                        <h3>{!! $item['title'] !!} <img src="{{ asset($item['icon']) }}" alt="Smile icon" class="cta-smile"></h3>
                        <p>{{ $item['description'] }}</p>
                        <div class="cta-buttons">
                            @foreach($item['buttons'] as $button)
                                <a href="{{ $button['link'] }}" class="btn {{ $button['class'] }}">{{ $button['text'] }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}" 
                       class="portfolio-item"
                       data-aos="fade-up" 
                       data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="portfolio-image-wrapper">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}" class="portfolio-image">
                            @if(isset($item['badge']))
                                <div class="portfolio-badge {{ $item['badge']['type'] === 'award' ? 'award-badge' : 'stat-badge' }}">
                                    @if($item['badge']['type'] === 'award')
                                        <img src="{{ asset($item['badge']['icon']) }}" alt="Awwwards icon">
                                        <span>{!! $item['badge']['text'] !!}</span>
                                    @else
                                        <strong>{{ $item['badge']['stat'] }}</strong>
                                        <span>{!! $item['badge']['text'] !!}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="portfolio-caption">
                            <h3>{!! $item['title'] !!}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                @endif
            @endforeach
            
            {{-- CTA Block --}}
            <div class="cta-block" 
                 data-aos="fade-up" 
                 data-aos-delay="300">
                <h3>Like what<br>you see? <img src="{{ asset('images/2_1302.svg') }}" alt="Smile icon" class="cta-smile"></h3>
                <p>Explore our portfolio and discover what we can achieve for you. Let's create something extraordinary together.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Let's Talk</a>
                    <a href="#" class="btn btn-secondary">See all work</a>
                </div>
            </div>
        </div>
        
        {{-- Column 2 --}}
        <div class="portfolio-column column-offset">
            @foreach($portfolioData['column2'] ?? [
                [
                    'image' => 'images/c1fbc0d3bb9d8dc037dc7b90865d4deeecc3308a.png',
                    'alt' => 'Oliver Jeffers project',
                    'badge' => ['type' => 'award', 'icon' => 'images/2_1261.svg', 'text' => 'Honorable<br>Mention'],
                    'title' => 'Oliver Jeffers',
                    'description' => 'Bringing Oliver world-famous art and stories to life through vibrant design and creative content.',
                    'link' => '#'
                ],
                [
                    'image' => 'images/4d5f67de931daf0e3c9bca026aecdbec7565583f.png',
                    'alt' => 'Grand Opera House project',
                    'badge' => ['type' => 'stat', 'stat' => '114%', 'text' => 'More Users<br>Converted'],
                    'title' => 'Grand Opera House',
                    'description' => 'Enabling a standout user experience with flexible design and powerful Spektrix integration.',
                    'link' => '#'
                ],
                [
                    'image' => 'images/6a363afc9995605a45ff951516de39b174892d53.png',
                    'alt' => 'Arts Council of NI project',
                    'title' => 'Arts Council of<br>Northern Ireland',
                    'description' => 'Advancing accessibility and engagement with intuitive design, inclusivity, and innovation.',
                    'link' => '#'
                ]
            ] as $index => $item)
                <a href="{{ $item['link'] }}" 
                   class="portfolio-item"
                   data-aos="fade-up" 
                   data-aos-delay="{{ ($index + 1) * 100 + 200 }}">
                    <div class="portfolio-image-wrapper">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['alt'] }}" class="portfolio-image">
                        @if(isset($item['badge']))
                            <div class="portfolio-badge {{ $item['badge']['type'] === 'award' ? 'award-badge' : 'stat-badge' }}">
                                @if($item['badge']['type'] === 'award')
                                    <img src="{{ asset($item['badge']['icon']) }}" alt="Awwwards icon">
                                    <span>{!! $item['badge']['text'] !!}</span>
                                @else
                                    <strong>{{ $item['badge']['stat'] }}</strong>
                                    <span>{!! $item['badge']['text'] !!}</span>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="portfolio-caption">
                        <h3>{!! $item['title'] !!}</h3>
                        <p>{{ $item['description'] }}</p>
                    </div>
                </a>
            @endforeach
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

    // Custom scroll animations
    const portfolioSection = document.getElementById('portfolio');
    const portfolioItems = document.querySelectorAll('.portfolio-item, .cta-block');
    
    // Intersection Observer untuk custom animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                portfolioItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('visible');
                    }, index * 150);
                });
            }
        });
    }, {
        threshold: 0.1
    });

    observer.observe(portfolioSection);

    // Hover effects untuk portfolio items
    portfolioItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Parallax effect untuk background circles
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const circles = document.querySelectorAll('.bg-circle');
        
        circles.forEach((circle, index) => {
            const speed = 0.3 + (index * 0.1);
            const yPos = -(scrolled * speed);
            circle.style.transform = `translateY(${yPos}px) rotate(${yPos}deg)`;
        });
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