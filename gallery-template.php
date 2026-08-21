<?php
/*
Template Name: Gallery Template
*/

get_header();

$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/'; // TODO: biblioteca de medios local

/* Selección representativa del sitio en vivo — ampliar o cargar desde
   la biblioteca de medios cuando estén los assets en el local */
$images = array('IMAGE-COMPANY-1.webp', 'IMAGE-COMPANY-2.webp', 'IMAGE-COMPANY-3.webp', 'IMAGE-COMPANY-4.webp', 'IMAGE-COMPANY-5.webp', 'IMAGE-COMPANY-6.webp', 'IMAGE-COMPANY-7.webp');
for ($i = 1; $i <= 24; $i++) {
  $images[] = 'IMAGE-CLI-' . $i . '.webp';
}

$videos = array();
for ($i = 1; $i <= 15; $i++) {
  $videos[] = 'VIDEO-CLI-' . $i . '.mp4';
}
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Gallery
      </h1>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed">
        Browse photos showcasing our craftsmanship, from detailed renovations
        to large-scale roofing and painting projects across Albuquerque and
        surrounding areas.
      </p>
    </div>
  </div>
</section>

<!-- ============ IMAGES — masonry por columnas ============ -->
<section id="images" class="cli-pattern">
  <div class="max-w-7xl mx-auto px-4 py-16 lg:py-24">
    <div class="flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
        Images
      </h2>
      <a href="#videos" class="cli-link text-ink">Jump to Videos</a>
    </div>
    <div class="mt-10 columns-2 md:columns-3 lg:columns-4 gap-4 [&>img]:mb-4">
      <?php foreach ($images as $img) : ?>
        <img
          src="<?php echo esc_url($live . $img); ?>"
          alt="CLI Constructions project"
          class="w-full h-auto object-cover break-inside-avoid"
          loading="lazy"
        >
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ VIDEOS ============ -->
<section id="videos" class="bg-ink">
  <div class="max-w-7xl mx-auto px-4 py-16 lg:py-24">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      Videos
    </h2>
    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($videos as $v) : ?>
        <video
          src="<?php echo esc_url($live . $v); ?>"
          class="w-full h-auto bg-ink-2"
          controls
          muted
          playsinline
          preload="none"
        ></video>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-24">
    <h2 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Like What You See?
    </h2>
    <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
      Tell us about your property and the scope you have in mind &mdash;
      we&rsquo;ll get back to you with next steps.
    </p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-8 bg-brand !text-paper">
      <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php get_footer();