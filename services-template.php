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
    'img'   => 'IMAGE-CLI-6.webp',
  ),
  array(
    'num'   => '02',
    'title' => 'Remodels',
    'desc'  => 'Comprehensive remodeling for commercial and multi-housing properties. CLI Constructions transforms spaces with expert design and skilled workmanship in Albuquerque and nearby communities.',
    'href'  => '/service/remodels/',
    'img'   => 'IMAGE-CLI-27.webp',
  ),
  array(
    'num'   => '03',
    'title' => 'Stucco',
    'desc'  => 'Top-quality stucco application and repair in Albuquerque. CLI Constructions specializes in durable, weather-resistant stucco solutions tailored for commercial and multi-housing buildings.',
    'href'  => '/service/stucco/',
    'img'   => 'IMAGE-CLI-71.webp',
  ),
  array(
    'num'   => '04',
    'title' => 'Painting',
    'desc'  => 'Professional interior and exterior painting services for commercial and multi-housing properties in New Mexico. CLI Constructions delivers durable finishes that boost aesthetics and property value.',
    'href'  => '/service/painting/',
    'img'   => 'IMAGE-CLI-78.webp',
  ),
  array(
    'num'   => '05',
    'title' => 'Renovations',
    'desc'  => 'Expert renovation services in Albuquerque and surrounding areas. CLI Constructions enhances multi-housing and commercial properties with quality craftsmanship, timely completion, and lasting value.',
    'href'  => '/service/renovations/',
    'img'   => 'IMAGE-CLI-85.webp',
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
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10">
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

<!-- ============ SERVICIOS — dípticos alternados ============ -->
<?php foreach ($services as $i => $s) :
  $even = $i % 2 === 0; ?>
  <section class="cli-on-light <?php echo $even ? 'cli-pattern' : 'bg-paper-2'; ?>">
    <div class="max-w-7xl mx-auto px-4 py-16 lg:py-24 grid gap-10 lg:gap-16 lg:grid-cols-12 items-center">
      <div class="lg:col-span-6 <?php echo $even ? '' : 'lg:order-2'; ?>">
        <img
          src="<?php echo esc_url($live . $s['img']); ?>"
          alt="<?php echo esc_attr($s['title'] . ' — CLI Constructions'); ?>"
          class="w-full h-auto object-cover"
          loading="lazy"
        >
      </div>
      <div class="lg:col-span-6 <?php echo $even ? '' : 'lg:order-1'; ?>">
        <span class="cli-spec text-silver"><?php echo esc_html($s['num']); ?></span>
        <h2 class="mt-2 font-display font-extrabold text-ink tracking-tight text-[clamp(1.6rem,3vw,2.5rem)] leading-tight">
          <?php echo esc_html($s['title']); ?>
        </h2>
        <p class="mt-4 text-ink/70 text-lg leading-relaxed max-w-xl">
          <?php echo esc_html($s['desc']); ?>
        </p>
        <div class="mt-7 flex flex-wrap items-center gap-6">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta">
            Get an Estimate <span aria-hidden="true">&rarr;</span>
          </a>
          <a href="<?php echo esc_url(home_url($s['href'])); ?>" class="cli-link text-ink">
            Keep Reading
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>

<!-- ============ WHY US ============ -->
<section class="cli-gradient">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      Why Us?
    </h2>
    <div class="mt-12 grid gap-px bg-ink/15 border border-ink/15 md:grid-cols-3">
      <?php foreach ($why as $w) : ?>
        <div class="bg-paper p-8">
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

<!-- ============ CIERRE ============ -->
<section class="bg-ink">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Expert Construction Solutions You Can <span class="text-brand">Count On</span>
    </h2>
    <p class="mt-6 text-silver-2 text-lg leading-relaxed max-w-2xl">
      Partner with CLI Constructions for trusted commercial and multi-housing
      renovations, roofing, and more &mdash; serving Albuquerque, Santa Fe, and
      surrounding New Mexico communities with pride.
    </p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-9 bg-brand !text-paper hover:!bg-brand-2 hover:border-brand-2">
      Get an Estimate <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php get_footer();