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

/* Soft edge fades for cleaner look */
.marquee-wrapper::before,
.marquee-wrapper::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 80px;
    pointer-events: none;
    z-index: 1;
}
.marquee-wrapper::before {
    left: 0;
    background: linear-gradient(90deg, #ffffff 0%, rgba(255,255,255,0) 100%);
}
.marquee-wrapper::after {
    right: 0;
    background: linear-gradient(270deg, #ffffff 0%, rgba(255,255,255,0) 100%);
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
    filter: grayscale(100%) saturate(0%) opacity(.9);
    transition: transform .25s ease, filter .25s ease, opacity .25s ease;
}

/* Subtle hover reveal */
.logo-item:hover img {
    filter: none;
    opacity: 1;
    transform: scale(1.02);
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
                    ['src' => 'images/bca_logo.png', 'alt' => 'BCA'],
                    ['src' => 'images/esdm_logo.png', 'alt' => 'esdm_logo'],
                    ['src' => 'images/iti_logo.png', 'alt' => 'iti_logo'],
                    ['src' => 'images/masjid_istiqlal_logo.png', 'alt' => 'masjid_istiqlal_logo'],
                    ['src' => 'images/pertamina_logo.png', 'alt' => 'pertamina_logo'],
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