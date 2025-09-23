<style>
.agency-intro {
  padding: 72px 0;
}
.agency-intro .container {
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  align-items: center;
  gap: 48px;
}
.agency-intro .eyebrow {
  display: block;
  font-size: 0.9rem;
  letter-spacing: 1.6px;
  text-transform: uppercase;
  color: #111;
  margin-bottom: 8px;
}
.agency-intro .heading {
  margin: 0 0 18px;
  font-family: 'Poppins', sans-serif;
  font-weight: 600;
  line-height: 1.15;
  color: #111;
  text-transform: uppercase;
  font-size: clamp(1.6rem, 3.2vw, 2.2rem);
}
.agency-intro .copy {
  color: #4b5563;
  font-size: 0.92rem;
  line-height: 1.8;
}
.agency-intro .copy p { margin: 0 0 14px; }
.agency-intro .img-wrap {
  width: 100%;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,.08);
}
.agency-intro .img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}
@media (max-width: 980px) {
  .agency-intro .container {
    grid-template-columns: 1fr;
    gap: 28px;
  }
  .agency-intro { padding: 56px 0; }
}
</style>

<section class="agency-intro">
  <div class="container">
    <div class="text">
      <span class="eyebrow">We’re a</span>
      <h2 class="heading">Full Service Digital Agency</h2>
      <div class="copy">
        <p>At Eyebillar, your success is our focus. We understand what it takes to launch a digital project and the challenges that come with it. Tight deadlines, shifting priorities, complex requirements? We’ve seen it all. That’s why we bring more than creative ideas. We bring clarity, structure and no‑nonsense project management that keeps things moving.</p>
        <p>We partner with ambitious clients who want to do things right. Whether you’re building from the ground up or scaling to the next level, we meet you where you are, align on what matters, and move fast to make it happen.</p>
      </div>
    </div>

    <div class="media">
      <div class="img-wrap">
        <img class="img" src="<?= asset('images/AKU_RAJA.jpg') ?>" alt="Team working at the office">
      </div>
    </div>
  </div>
</section>
