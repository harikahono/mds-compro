<style>
.awards {
  padding: 72px 0 60px;
  text-align: center;
}
.awards .wrap {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}
.awards .icons {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 840px;
  margin: 0 auto 10px;
}
.awards .bubble {
  width: 48px; height: 48px; border-radius: 9999px;
  display: inline-flex; align-items: center; justify-content: center;
  box-shadow: 0 10px 20px rgba(0,0,0,.08);
}
.awards .b-pink { background: #ffc3d2; }
.awards .b-green { background: #caf291; }

.awards .title {
  margin: -42px 0 8px; /* naikkan agar diapit ikon */
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  text-transform: uppercase;
  color: #111;
  line-height: 1.15;
  font-size: clamp(1.8rem, 4.6vw, 3rem);
}
.awards .title .blue { color: #0879ED; }

.awards .subtitle {
  margin: 0 auto 32px;
  max-width: 760px;
  color: #6b7280;
  font-size: .98rem;
  line-height: 1.85;
}

.awards .grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 18px;
  margin-top: 10px;
}
.awards .card {
  background: #75B501;
  border-radius: 16px;
  padding: 24px;
  min-height: 120px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 14px 28px rgba(117,181,1,.22);
}
.awards .logo {
  color: #fff;
  font-weight: 700;
  letter-spacing: .6px;
  font-size: .95rem;
  opacity: .95;
  text-transform: lowercase;
}
.awards .card img {
  width: 120px; height: auto; object-fit: contain; filter: brightness(0) invert(1);
}

/* CTA */
.awards .cta {
  margin-top: 28px;
}
.awards .btn {
  display: inline-block;
  padding: 12px 22px;
  border-radius: 9999px;
  border: 1.5px solid #75B501;
  color: #111;
  background: #fff;
  font-weight: 600;
  font-size: .9rem;
  text-decoration: none;
  box-shadow: 0 10px 22px rgba(117,181,1,.18);
  transition: transform .15s ease, box-shadow .15s ease, background .15s ease;
}
.awards .btn:hover {
  background: #f6ffe8;
  transform: translateY(-1px);
  box-shadow: 0 12px 26px rgba(117,181,1,.22);
}

/* Responsive */
@media (max-width: 1024px) {
  .awards .grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 560px) {
  .awards { padding: 56px 0 48px; }
  .awards .icons { margin-bottom: 6px; }
  .awards .title { margin-top: -36px; }
  .awards .grid { grid-template-columns: repeat(2, 1fr); }
}
</style>

<section class="awards">
  <div class="wrap">
    <div class="icons">
      <span class="bubble b-pink" aria-hidden="true">
        <!-- star -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="12 2 15 9 22 9 16.5 13.5 18.5 21 12 16.8 5.5 21 7.5 13.5 2 9 9 9 12 2"/>
        </svg>
      </span>
      <h2 class="title">Recognised<br>by the <span class="blue">Best</span></h2>
      <span class="bubble b-green" aria-hidden="true">
        <!-- rocket -->
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M14 4l6 6c-1 4-5 8-9 9l-6-6C6 9 10 5 14 4z"/>
          <path d="M5 19l4-4"/>
          <path d="M15 9h0"/>
        </svg>
      </span>
    </div>

    <p class="subtitle">
      <?= $subtitle ?? 'Explore the awards and recognition that highlight our commitment to delivering exceptional results.' ?>
    </p>

    <?php
      $items = $awards ?? [
        ['label' => 'awwwards.'],
        ['label' => 'digital DNA'],
        ['label' => 'the LLEMEDIAAW'],
        ['label' => 'eComm Awards'],
        ['label' => 'WA'],
        ['label' => 'DANI Awards'],
      ];
    ?>

    <div class="grid">
      <?php foreach ($items as $it): ?>
        <div class="card">
          <?php if (!empty($it['img'])): ?>
            <img src="<?= $it['img'] ?>" alt="<?= $it['label'] ?? 'Award' ?>">
          <?php else: ?>
            <span class="logo"><?= $it['label'] ?? 'Award' ?></span>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="cta">
      <a class="btn" href="<?= $ctaHref ?? '#' ?>"><?= $ctaText ?? 'See All Awards' ?></a>
    </div>
  </div>
</section>
