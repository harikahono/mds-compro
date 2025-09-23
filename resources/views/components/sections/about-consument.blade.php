<style>
.stats {
  padding: 48px 0;
  position: relative;
}
.stats .wrap {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
}
.stats .rule {
  height: 1px;
  background: repeating-linear-gradient(to right, rgba(0,0,0,.12) 0 8px, transparent 8px 16px);
  opacity: .5;
}
.stats .grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px 48px;
  padding: 32px 0;
  align-items: start;
  text-align: center;
}
.stats .value {
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  font-size: clamp(2rem, 6vw, 4rem);
  line-height: 1.1;
  color: #111;
  margin: 0 0 10px;
}
.stats .desc {
  color: #4b5563;
  font-size: .95rem;
  line-height: 1.9;
  max-width: 320px;
  margin: 0 auto;
}
.stats .desc b { color: #111; font-weight: 700; }
.stats .desc a { color: #111; text-decoration: underline; }
@media (max-width: 960px) {
  .stats .grid { grid-template-columns: 1fr; gap: 26px; }
}
</style>

<section class="stats">
  <div class="wrap">
    <div class="rule"></div>

    <div class="grid">
      <div class="item">
        <h3 class="value"><?= $v1 ?? '19+' ?></h3>
        <p class="desc">
          In‑house <b>team members</b>, all locally based and working in a hybrid model to deliver exceptional service and seamless support.
        </p>
      </div>

      <div class="item">
        <h3 class="value"><?= $v2 ?? '2003' ?></h3>
        <p class="desc">
          With over <b>two decades of experience</b>, we’re trusted to deliver high‑quality digital projects on time and within budget.
        </p>
      </div>

      <div class="item">
        <h3 class="value"><?= $v3 ?? '95%' ?></h3>
        <p class="desc">
          Our year‑over‑year <b>customer retention</b> reflects our commitment to exceptional service. ❤️
          <a href="<?= $reviewsLink ?? '#' ?>">Read our Customer Reviews</a>.
        </p>
      </div>
    </div>

    <div class="rule"></div>
  </div>
</section>
