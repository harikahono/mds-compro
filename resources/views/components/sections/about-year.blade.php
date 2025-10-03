<style>
.yexp {
  position: relative;
  padding: 84px 0 56px;
  overflow: hidden;
}
.yexp .container {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
  text-align: center;
  position: relative;
}
.yexp .badge {
  position: absolute;
  right: 6px;
  top: -6px;
  transform: rotate(8deg);
  background: #ffbad4;
  color: #fff;
  font-size: 12px;
  line-height: 1;
  letter-spacing: .6px;
  padding: 10px 14px;
  border-radius: 8px;
  box-shadow: 0 10px 24px rgba(0,0,0,.12);
  white-space: nowrap;
  transition: transform .3s ease, box-shadow .3s ease;
}
.yexp .hgroup {
  display: inline-block;
}
.yexp .line {
  display: block;             /* paksa baris baru */
  margin: 0;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  color: #111;
  text-transform: uppercase;
  font-size: clamp(2.2rem, 6.5vw, 4.5rem);
  line-height: 1.08;
}
.yexp .line + .line { margin-top: 10px; }

.yexp .line--bottom {
  display: inline-flex;       /* untuk ikon + teks */
  align-items: center;
  gap: 14px;
}

.yexp .icon-bubble {
  width: clamp(44px, 6vw, 68px);
  height: clamp(44px, 6vw, 68px);
  min-width: 44px;
  min-height: 44px;
  border-radius: 9999px;
  background: #C7EE9A;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: transform .3s ease, box-shadow .3s ease;
}
.yexp .icon-bubble svg {
  width: 26px; height: 26px;
}

.yexp .icon-bubble:hover {
  transform: scale(1.08) rotate(3deg);
  box-shadow: 0 8px 22px rgba(0,0,0,.12);
}

.yexp .badge:hover {
  transform: rotate(8deg) translateY(-2px) scale(1.05);
  box-shadow: 0 14px 28px rgba(0,0,0,.16);
}

.yexp .sub {
  margin: 18px auto 0;
  max-width: 860px;
  color: #4b5563;
  font-size: clamp(.95rem, 1.6vw, 1.05rem);
  line-height: 1.9;
}
@media (max-width: 768px) {
  .yexp { padding: 64px 0 44px; }
  .yexp .badge { right: 10px; top: -38px; }
}
</style>

<section class="yexp" data-aos="fade-up">
  <div class="container">
    <div class="badge" data-aos="fade-down" data-aos-delay="100"><?= $badge ?? '22+ YEARS EXPERIENCE' ?></div>

    <div class="hgroup" aria-label="22 years and still killin it" data-aos="zoom-in-up" data-aos-delay="150">
      <h2 class="line" data-aos="fade-up" data-aos-delay="150"><?= $titleTop ?? '22 YEARS AND' ?></h2>
      <h2 class="line line--bottom" data-aos="fade-up" data-aos-delay="250">
        <span class="icon-bubble" aria-hidden="true">
          <!-- peace hand -->
          <svg viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 12V5"></path>
            <path d="M13 12V4.5"></path>
            <path d="M5 13c0 4 3 7 7 7s7-3 7-7c0-1.6-.5-2.7-1.3-3.5-.8-.8-1.8-1.2-2.8-1.3-1.3-.2-2.7 0-3.9.6"></path>
          </svg>
        </span>
        <span><?= $titleBottom ?? "STILL KILLIN' IT" ?></span>
      </h2>
    </div>

    <p class="sub" data-aos="fade-up" data-aos-delay="300">
      <?= $subtitle ?? "Since 2003, we’ve partnered with amazing clients to create impactful, engaging digital experiences that deliver real results." ?>
    </p>
  </div>
</section>
