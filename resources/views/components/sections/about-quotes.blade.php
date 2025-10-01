<style>
.passion {
  padding: 48px 0;
}
.passion .wrap {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}
.passion .card {
  background: #0879ED;              /* biru utama proyek */
  color: #fff;
  border-radius: 22px;
  padding: 38px;
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: 40px;
  box-shadow: 0 20px 40px rgba(8,121,237,.18);
}
.passion .quote-mark {
  font-size: 48px;
  opacity: .7;
  line-height: 1;
  display: block;
  margin-bottom: 8px;
}
.passion .title {
  margin: 0 0 14px;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  line-height: 1.25;
  text-transform: uppercase;
  font-size: clamp(1.4rem, 2.6vw, 1.9rem);
}
.passion .title .green { color: #CAF291; }
.passion .desc {
  font-size: .92rem;
  line-height: 1.9;
  opacity: .95;
  max-width: 520px;
}
.passion .author {
  margin-top: 22px;
  font-size: .82rem;
  opacity: .9;
}
.passion .author b { font-weight: 700; }

/* Kolase gambar */
.passion .media {
  position: relative;
  min-height: 280px;
  border-radius: 16px;
  overflow: visible;
}
.passion .img-1,
.passion .img-2,
.passion .img-3 {
  position: absolute;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 14px 32px rgba(0,0,0,.25);
}
.passion .img-1 {                /* gambar besar belakang kiri */
  top: 0; left: 0;
  width: 62%; height: 62%;
}
.passion .img-2 {                /* gambar besar belakang kanan */
  top: 0; right: 0;
  width: 62%; height: 78%;
  border-radius: 18px;
}
.passion .img-3 {                /* kartu kecil di depan */
  bottom: -6%; left: 38%;
  width: 42%; height: 58%;
  border-radius: 12px;
}
.passion .img-1 img,
.passion .img-2 img,
.passion .img-3 img {
  width: 100%; height: 100%; object-fit: cover; display: block;
}

/* Responsive */
@media (max-width: 980px) {
  .passion .card { grid-template-columns: 1fr; gap: 28px; }
  .passion .desc { max-width: none; }
  .passion .media { min-height: 320px; }
}
@media (max-width: 640px) {
  .passion .card { padding: 26px; }
  .passion .media { min-height: 260px; }
}
</style>

<section class="passion">
  <div class="wrap">
    <div class="card">
      <div class="text">
        <span class="quote-mark">“</span>
        <h3 class="title">
          Passion fuels<br>
          <span class="green">everything we do</span>
        </h3>
        <p class="desc">
          <?= $text ?? "I believe the strength of Eyekiller is rooted in our unwavering commitment to quality, creativity, and collaboration. Leading this team, I’ve seen firsthand how our passion transforms digital challenges into engaging experiences. It’s incredibly rewarding to work alongside such talented individuals, and I’m proud of the difference we make every day." ?>
        </p>
        <p class="author">Agipati Dolken, <b>Founder & Managing Director</b></p>
      </div>

      <div class="media" aria-hidden="true">
        <div class="img-1">
          <img src="<?= $img1 ?? asset('images/4d5f67de931daf0e3c9bca026aecdbec7565583f.png') ?>" alt="">
        </div>
        <div class="img-2">
          <img src="<?= $img2 ?? asset('images/6a363afc9995605a45ff951516de39b174892d53.png') ?>" alt="">
        </div>
        <div class="img-3">
          <img src="<?= $img3 ?? asset('images/95d8abc3c20ea611762e4c3b7fb3ff8817884abd.png') ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
