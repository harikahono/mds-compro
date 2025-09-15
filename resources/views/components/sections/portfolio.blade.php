@push('styles')
<style>
/* Portfolio Section Styles */
#portfolio { 
    background-color: #ffffff; 
}

.portfolio-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 98px;
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
}

.portfolio-image-wrapper {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    margin-bottom: 24px;
}

.portfolio-image { 
    width: 100%; 
    height: auto; 
    display: block; 
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
}

.award-badge { 
    background-color: #000; 
}

.award-badge img { 
    margin-bottom: 5px; 
}

.stat-badge { 
    background-color: #caf291; 
    color: #000; 
}

.stat-badge strong { 
    font-size: 28px; 
    font-weight: 400; 
    line-height: 1.1; 
}

.stat-badge span { 
    font-size: 13px; 
}

.portfolio-caption h3 {
    font-size: clamp(1.8rem, 3vw, 2.7rem);
    font-weight: 400;
    line-height: 1.2;
    margin: 0 0 10px;
}

.portfolio-caption p {
    font-size: clamp(1rem, 1.8vw, 1.3rem);
    line-height: 1.8;
    margin: 0;
}

.cta-block {
    background-color: #ef694c;
    color: white;
    padding: 60px;
    border-radius: 20px;
}

.cta-block h3 {
    font-size: clamp(3rem, 7vw, 6rem);
    font-weight: 400;
    line-height: 1.1;
    margin: 0 0 20px;
    position: relative;
}

.cta-smile {
    width: clamp(60px, 8vw, 122px);
    position: absolute;
    top: 0;
    right: 0;
    transform: rotate(15deg);
}

.cta-block p { 
    font-size: 21px; 
    line-height: 1.8; 
}

.cta-buttons { 
    display: flex; 
    gap: 20px; 
    margin-top: 40px; 
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
}

.btn-primary { 
    background-color: #75b501; 
    color: #111111; 
}

.btn-secondary { 
    border: 2px solid #caf291; 
    color: white; 
}

@media (max-width: 992px) {
    .portfolio-grid { 
        grid-template-columns: 1fr; 
    }
    .column-offset { 
        margin-top: 0; 
    }
}
</style>
@endpush

<section id="portfolio" class="section-container">
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
                    <div class="cta-block">
                        <h3>{!! $item['title'] !!} <img src="{{ asset($item['icon']) }}" alt="Smile icon" class="cta-smile"></h3>
                        <p>{{ $item['description'] }}</p>
                        <div class="cta-buttons">
                            @foreach($item['buttons'] as $button)
                                <a href="{{ $button['link'] }}" class="btn {{ $button['class'] }}">{{ $button['text'] }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ $item['link'] }}" class="portfolio-item">
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
            <div class="cta-block">
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
            ] as $item)
                <a href="{{ $item['link'] }}" class="portfolio-item">
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