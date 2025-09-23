<style>
.clients-love { padding: 70px 0 40px; text-align: center; }
.clients-love .wrap { max-width: 980px; margin: 0 auto; padding: 0 20px; }

.clients-love .title {
  margin: 0 0 6px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  color: #111;
  line-height: 1.06;
  font-size: clamp(1.9rem, 6vw, 3.4rem);
}
.clients-love .title .row { display: block; }
.clients-love .row--2 {
  display: inline-flex; align-items: center; gap: 12px;
}

.clients-love .bubble {
  width: clamp(44px, 6vw, 64px);
  height: clamp(44px, 6vw, 64px);
  border-radius: 9999px;
  background: #ffc3d2;
  display: inline-flex; align-items: center; justify-content: center;
  margin: 0 4px;
  box-shadow: 0 8px 18px rgba(0,0,0,.08);
}
.clients-love .bubble svg { width: 52%; height: 52%; }

.clients-love .us { color: #FE975C; }       /* oranye */
.clients-love .desc {
  margin: 14px auto 0;
  max-width: 800px;
  color: #4b5563;
  font-size: .98rem;
  line-height: 1.85;
}
@media (max-width: 640px) {
  .clients-love { padding: 56px 0 34px; }
  .clients-love .row--2 { gap: 8px; }
}
</style>

<section class="clients-love">
  <div class="wrap">
    <h2 class="title" aria-label="See why our clients love us">
      <span class="row row--1"><?= $line1 ?? 'See Why Our' ?></span>
      <span class="row row--2">
        <span><?= $line2Start ?? 'Clients' ?></span>
        <span class="bubble" aria-hidden="true">
          <!-- heart outline -->
          <svg viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.8 7.6a4.1 4.1 0 0 0-5.8 0L12 10.6l-3-3a4.1 4.1 0 0 0-5.8 5.8l3 3 5.8 5.1 5.8-5.1 3-3a4.1 4.1 0 0 0 0-5.8z"/>
          </svg>
        </span>
        <span class="us"><?= $us ?? 'Us' ?></span>
      </span>
    </h2>

    <p class="desc">
      <?= $subtitle ?? "We believe in getting the details right, keeping our promises, and always going the extra mile. It’s how we work and why our clients trust us." ?>
    </p>
  </div>
</section>
