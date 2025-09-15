@push('styles')
<style>
/* Logos Section Styles */
#logos {
    background-color: #ffffff;
    padding: 40px 0;
}

.marquee-wrapper {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.marquee-track {
    display: flex;
    width: fit-content;
    animation: marquee 60s linear infinite;
}

.logo-item {
    flex-shrink: 0;
    width: 220px;
    height: 140px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
}

.logo-item img {
    max-width: 100%;
    max-height: 60px;
    object-fit: contain;
}

@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
</style>
@endpush

<section id="logos" class="section-container" style="padding-top: 0; padding-bottom: 0;">
    <div class="marquee-wrapper">
        <div class="marquee-track">
            @php
                $logos = $logosData ?? [
                    ['src' => 'images/2_28.png', 'alt' => 'Sse arena logo'],
                    ['src' => 'images/2_47.png', 'alt' => 'W5 logo'],
                    ['src' => 'images/bf1ce1cfea78ee3ff6d830e1c35eb484fc947fcb.png', 'alt' => 'Van morrison logo'],
                    ['src' => 'images/2_54.png', 'alt' => 'Grand opera house logo'],
                    ['src' => 'images/2_86.png', 'alt' => 'Miller theatre logo'],
                    ['src' => 'images/2_93.png', 'alt' => 'Story museum logo'],
                    ['src' => 'images/2_106.png', 'alt' => 'Lyric theatre logo'],
                    ['src' => 'images/2_118.png', 'alt' => 'Firmus Energy Logo'],
                    ['src' => 'images/e9804880a131061cd81f4c2b50edd23ad2f11a61.png', 'alt' => 'Game of thrones tour logo'],
                    ['src' => 'images/2_143.png', 'alt' => 'Arts Council Northern Ireland Logo'],
                    ['src' => 'images/2_175.png', 'alt' => 'Belfast Giants Logo']
                ];
            @endphp
            
            {{-- First set of logos --}}
            @foreach($logos as $logo)
                <div class="logo-item">
                    <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}">
                </div>
            @endforeach
            
            {{-- Duplicate for seamless scroll --}}
            @foreach($logos as $logo)
                <div class="logo-item">
                    <img src="{{ asset($logo['src']) }}" alt="{{ $logo['alt'] }}">
                </div>
            @endforeach
        </div>
    </div>
</section>