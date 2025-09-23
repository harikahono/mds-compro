<style>
.sectors {
  padding: 36px 0;
  overflow: hidden;
  position: relative;
}
.sectors .eyebrow {
  text-align: center;
  font-size: 11px;
  letter-spacing: 1.6px;
  text-transform: uppercase;
  color: #75B501;
  margin-bottom: 10px;
}
.sectors .viewport {
  mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
  -webkit-mask-image: linear-gradient(90deg, transparent, #000 10%, #000 90%, transparent);
}
.sectors .track {
  display: inline-flex;
  white-space: nowrap;
  gap: 56px;
  will-change: transform;
  animation: marquee-rtl 30s linear infinite;
  /* arah kiri -> kanan (RTL = right-to-left view; animasi ke kanan) */
  animation-direction: reverse;
}
.sectors .row {
  display: inline-flex;
  white-space: nowrap;
  gap: 56px;
}
.sectors .item {
  font-family: 'Poppins', sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
  font-size: clamp(1.4rem, 4.2vw, 3rem);
}
.sectors .c-green { color: #75B501; }
.sectors .c-orange { color: #FE975C; }
.sectors .c-blue { color: #0879ED; }

/* Pause saat hover (opsional) */
.sectors:hover .track { animation-play-state: paused; }

@keyframes marquee-rtl {
  0%   { transform: translateX(-50%); }
  100% { transform: translateX(0%); }
}

/* Responsif spasi */
@media (max-width: 640px) {
  .sectors .track, .sectors .row { gap: 32px; }
}
</style>

<section class="sectors">
  <div class="eyebrow"><?= $eyebrow ?? 'Custom solutions for every sector' ?></div>
  <div class="viewport" aria-hidden="false">
    <div class="track">
      <div class="row">
        <span class="item c-orange">Real Estate</span>
        <span class="item c-green">Visitor Attractions</span>
        <span class="item c-blue">Education</span>
        <span class="item c-green">Public Sector</span>
        <span class="item c-blue">Legal</span>
        <span class="item c-orange">Energy & Utilities</span>
      </div>
      <!-- duplikasi untuk loop mulus -->
      <div class="row">
        <span class="item c-orange">Real Estate</span>
        <span class="item c-green">Visitor Attractions</span>
        <span class="item c-blue">Education</span>
        <span class="item c-green">Public Sector</span>
        <span class="item c-blue">Legal</span>
        <span class="item c-orange">Energy & Utilities</span>
      </div>
    </div>
  </div>
</section>
