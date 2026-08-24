<?php
/*
Template Name: Services Template
*/

get_header();

$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/'; // TODO: biblioteca de medios local

$services = array(
  array(
    'num'   => '01',
    'title' => 'Roofing',
    'desc'  => 'Reliable roofing services focused on multi-housing and commercial buildings in New Mexico. CLI Constructions offers roof installation, repairs, and maintenance to protect your investment.',
    'href'  => '/service/roofing/',
    'img'   => '/wp-content/uploads/2026/08/RoofingCLI.jpg',
  ),
  array(
    'num'   => '02',
    'title' => 'Remodels',
    'desc'  => 'Comprehensive remodeling for commercial and multi-housing properties. CLI Constructions transforms spaces with expert design and skilled workmanship in Albuquerque and nearby communities.',
    'href'  => '/service/remodels/',
    'img'   => '/wp-content/uploads/2026/08/CLIRemodels.jpg',
  ),
  array(
    'num'   => '03',
    'title' => 'Stucco',
    'desc'  => 'Top-quality stucco application and repair in Albuquerque. CLI Constructions specializes in durable, weather-resistant stucco solutions tailored for commercial and multi-housing buildings.',
    'href'  => '/service/stucco/',
    'img'   => '/wp-content/uploads/2026/08/CLIStucco.webp',
  ),
  array(
    'num'   => '04',
    'title' => 'Painting',
    'desc'  => 'Professional interior and exterior painting services for commercial and multi-housing properties in New Mexico. CLI Constructions delivers durable finishes that boost aesthetics and property value.',
    'href'  => '/service/painting/',
    'img'   => '/wp-content/uploads/2026/08/PaintingCLI-scaled.webp',
  ),
  array(
    'num'   => '05',
    'title' => 'Renovations',
    'desc'  => 'Expert renovation services in Albuquerque and surrounding areas. CLI Constructions enhances multi-housing and commercial properties with quality craftsmanship, timely completion, and lasting value.',
    'href'  => '/service/renovations/',
    'img'   => '/wp-content/uploads/2026/08/CLIRenovations.webp',
  ),
);

$why = array(
  array(
    'title' => 'Family-Owned with Trusted Expertise',
    'desc'  => 'As a family-owned and managed construction company in Albuquerque, CLI Constructions brings personalized service and trusted expertise to every multi-housing and commercial project.',
  ),
  array(
    'title' => 'Comprehensive Construction Solutions',
    'desc'  => 'From renovations and painting to stucco, remodels, and roofing, we offer full-service construction solutions tailored to meet the unique needs of commercial and multi-housing properties.',
  ),
  array(
    'title' => 'Certified and Trusted Partners',
    'desc'  => 'Certified by the Better Business Bureau and affiliated with the Apartment Association of New Mexico, CLI Constructions is a reliable choice committed to quality, ethics, and customer satisfaction.',
  ),
);
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Services
      </h1>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed">
        Explore our full range of expert services, including renovations,
        painting, stucco, remodels, and roofing, tailored specifically for
        commercial and multi-housing properties.
      </p>
    </div>
  </div>
</section>

<!-- ============ SERVICIOS — carrusel manual ============ -->
<section class="cli-cubes" data-cli-carousel>
  <div class="max-w-7xl mx-auto px-4 pt-16 lg:pt-24 flex items-end justify-between gap-6">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Explore Each Service
    </h2>
    <div class="flex gap-2 shrink-0">
      <button type="button" class="cli-carousel-btn" data-prev aria-label="Previous service">&larr;</button>
      <button type="button" class="cli-carousel-btn" data-next aria-label="Next service">&rarr;</button>
    </div>
  </div>

  <div
    class="cli-carousel__track mt-10 pb-16 lg:pb-24 flex gap-5 overflow-x-auto snap-x snap-mandatory px-4 lg:px-[max(1rem,calc((100vw-80rem)/2))]"
    data-track
  >
    <?php foreach ($services as $s) : ?>
      <article class="w-[88%] md:w-[75%] lg:w-[64%] shrink-0 snap-start grid md:grid-cols-2 bg-paper border border-ink/15 cli-reveal-stagger">
        <div class="cli-card-media min-h-64 md:min-h-full">
          <img
            src="<?php echo esc_url(strpos($s['img'], '/') === 0 ? home_url($s['img']) : $live . $s['img']); ?>"
            alt="<?php echo esc_attr($s['title'] . ' — CLI Constructions'); ?>"
            class="w-full h-full object-cover"
            loading="lazy"
          >
        </div>
        <div class="flex flex-col p-7 lg:p-10">
          <span class="cli-spec text-silver"><?php echo esc_html($s['num']); ?></span>
          <h3 class="mt-2 font-display font-extrabold text-ink tracking-tight text-[clamp(1.4rem,2.5vw,2rem)] leading-tight">
            <?php echo esc_html($s['title']); ?>
          </h3>
          <p class="mt-4 text-ink/70 leading-relaxed">
            <?php echo esc_html($s['desc']); ?>
          </p>
          <div class="mt-auto pt-7 flex flex-wrap items-center gap-5">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta">
              <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
            </a>
            <a href="<?php echo esc_url(home_url($s['href'])); ?>" class="cli-link text-ink">
              Keep Reading
            </a>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<!-- ============ WHY US ============ -->
<section class="cli-gradient">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Why Us?
    </h2>
    <div class="mt-12 grid gap-px bg-ink/15 border border-ink/15 md:grid-cols-3">
      <?php foreach ($why as $w) : ?>
        <div class="bg-paper p-8 cli-reveal-stagger">
          <h3 class="font-display font-bold text-ink text-xl tracking-tight">
            <?php echo esc_html($w['title']); ?>
          </h3>
          <p class="mt-3 text-ink/65 leading-relaxed">
            <?php echo esc_html($w['desc']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIFull.jpg')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
    loading="lazy"
  >
  <div class="absolute inset-0 bg-ink/75" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Expert Construction Solutions You Can <span class="text-brand">Count On</span>
    </h2>
    <p class="mt-6 text-silver-2 text-lg leading-relaxed max-w-2xl">
      Partner with CLI Constructions for trusted commercial and multi-housing
      renovations, roofing, and more &mdash; serving Albuquerque, Santa Fe, and
      surrounding New Mexico communities with pride.
    </p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-9 bg-brand !text-paper">
      <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php get_footer(); ?>