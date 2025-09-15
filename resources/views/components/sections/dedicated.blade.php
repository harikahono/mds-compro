@push('styles')
<style>
/* Dedicated Section Styles */
#dedicated {
    background-color: #ffffff;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.dedicated-bg-grid {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 1910px;
    height: auto;
    z-index: 1;
}

.dedicated-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
}

.dedicated-title {
    font-size: clamp(3rem, 7vw, 5.8rem);
    font-weight: 400;
    line-height: 1.1;
    margin: 0;
    text-transform: uppercase;
}

.dedicated-title .color-primary { 
    color: var(--color-primary); 
}

.dedicated-title .color-accent-1 { 
    color: var(--color-accent-1); 
}

.dedicated-subtitle {
    font-size: clamp(1rem, 1.8vw, 1.3rem);
    line-height: 1.8;
    margin: 40px auto 0;
    max-width: 825px;
}

.dedicated-arrow {
    position: absolute;
    z-index: 2;
    width: clamp(50px, 7vw, 100px);
}

.dedicated-arrow.tl { top: 20%; left: 15%; }
.dedicated-arrow.tr { top: 20%; right: 15%; }
.dedicated-arrow.bl { bottom: 20%; left: 15%; }
.dedicated-arrow.br { bottom: 20%; right: 15%; }

@media (max-width: 992px) {
    .dedicated-arrow { 
        display: none; 
    }
}
</style>
@endpush

<section id="dedicated" class="section-container">
    <div class="dedicated-content">
        <h2 class="dedicated-title">
            {{ $dedicatedData['title']['prefix'] ?? 'Dedicated to' }}
            <span class="color-primary">{{ $dedicatedData['title']['primary'] ?? 'delivering' }}</span>
            <span class="color-accent-1">{{ $dedicatedData['title']['accent'] ?? 'results' }}</span>
            {{ $dedicatedData['title']['suffix'] ?? 'for top brands' }}
        </h2>
        <p class="dedicated-subtitle">
            {{ $dedicatedData['subtitle'] ?? 'Collaboration is at the core of everything we do. Your goals shape the strategy, drive our creative innovation, and define success at every stage.' }}
        </p>
    </div>
    
    <img src="{{ asset('images/3_1726.svg') }}" alt="Grid background" class="dedicated-bg-grid">
    
    @if(!isset($dedicatedData['hideArrows']) || !$dedicatedData['hideArrows'])
        <img src="{{ asset('images/2_1241.svg') }}" alt="Decorative arrow" class="dedicated-arrow tl">
        <img src="{{ asset('images/2_1244.svg') }}" alt="Decorative arrow" class="dedicated-arrow tr">
        <img src="{{ asset('images/2_1247.svg') }}" alt="Decorative arrow" class="dedicated-arrow bl">
        <img src="{{ asset('images/2_1250.svg') }}" alt="Decorative arrow" class="dedicated-arrow br">
    @endif
</section>