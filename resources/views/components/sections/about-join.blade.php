<style>
.joinus {
  padding: 80px 0;
  text-align: center;
}
.joinus .wrap {
  max-width: 820px;
  margin: 0 auto;
  padding: 0 20px;
}
.joinus .title {
  margin: 0 0 12px;
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  color: #111;
  text-transform: uppercase;
  line-height: 1.05;
  font-size: clamp(2rem, 6vw, 3.5rem);
}
.joinus .title .us { color: #FE975C; }     /* oranye */
.joinus .title .q  { color: #0879ED; }     /* biru */

.joinus .sub {
  margin: 8px auto 24px;
  color: #6b7280;
  font-size: .98rem;
  line-height: 1.9;
  max-width: 660px;
}

.joinus .btn {
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
.joinus .btn:hover {
  background: #f9fff0;
  transform: translateY(-1px);
  box-shadow: 0 12px 26px rgba(117,181,1,.22);
}
</style>

<section class="joinus">
  <div class="wrap">
    <h2 class="title">
      <span><?= $line1 ?? 'Want to' ?></span><br>
      <span><?= $line2Start ?? 'Join' ?> <span class="us"><?= $us ?? 'Us' ?></span><span class="q"><?= $question ?? '?' ?></span></span>
    </h2>

    <p class="sub">
      <?= $subtitle ?? "We're always on the lookout for talented people to join our growing team. If you see a role that fits, we'd love to hear from you." ?>
    </p>

    <a class="btn" href="<?= $ctaHref ?? '#' ?>"><?= $ctaText ?? 'View Open Roles' ?></a>
  </div>
</section>
