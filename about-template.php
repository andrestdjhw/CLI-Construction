<?php
/*
Template Name: About Template
*/

get_header();

$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/'; // TODO: biblioteca de medios local

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

$values = array(
  array(
    'num'   => '01',
    'title' => 'Integrity',
    'desc'  => 'At CLI Constructions, integrity guides every project. We prioritize honest communication, transparent pricing, and ethical practices to build lasting trust with our commercial and multi-housing clients in Albuquerque and beyond.',
  ),
  array(
    'num'   => '02',
    'title' => 'Accountability',
    'desc'  => 'We take full accountability for our work. From timely project delivery to quality craftsmanship, we stand behind every renovation, remodel, painting, stucco, and roofing service we provide across New Mexico.',
  ),
  array(
    'num'   => '03',
    'title' => 'Teamwork',
    'desc'  => 'Our success is built on teamwork. CLI Constructions fosters strong collaboration among our family-owned management, skilled crew, and clients to ensure exceptional results in multi-housing and commercial construction projects.',
  ),
);
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        About Us
      </h1>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed">
        Discover who we are &mdash; a family-owned construction company
        committed to quality, trust, and long-term relationships in
        multi-housing and commercial renovations.
      </p>
    </div>
  </div>
</section>

<!-- ============ INTRO — díptico ============ -->
<section class="cli-pattern">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28 grid gap-12 lg:grid-cols-12 items-center">
    <div class="lg:col-span-7">
      <p class="text-ink text-xl lg:text-2xl leading-relaxed font-medium max-w-2xl">
        CLI Constructions is a family-owned and managed construction company
        based in Albuquerque, New Mexico.
      </p>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
        Specializing in multi-housing and commercial renovations, painting,
        stucco, remodels, and roofing, we serve Albuquerque, Santa Fe,
        Los Lunas, Santa Rosa, and surrounding areas.
      </p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-8 inline-flex">
        <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
    <div class="lg:col-span-5">
      <img
        src="<?php echo esc_url($live . 'IMAGE-COMPANY-1.webp'); ?>"
        alt="The CLI Constructions team"
        class="w-full h-auto object-cover"
        loading="lazy"
      >
    </div>
  </div>
</section>

<!-- ============ MISSION / VISION — banda oscura ============ -->
<section class="bg-ink">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-24 grid gap-12 md:grid-cols-2">
    <div class="border-l-2 border-brand pl-6">
      <p class="cli-spec text-silver-2">Our Mission</p>
      <p class="mt-4 text-paper text-lg leading-relaxed">
        To provide high-quality, reliable construction services that meet
        client needs and exceed expectations, enhancing multi-housing and
        commercial properties across New Mexico with lasting value.
      </p>
    </div>
    <div class="border-l-2 border-brand pl-6">
      <p class="cli-spec text-silver-2">Our Vision</p>
      <p class="mt-4 text-paper text-lg leading-relaxed">
        To be the leading construction company in New Mexico, known for our
        commitment to quality, client relationships, and ethical practices
        that improve lives, communities, and the built environment.
      </p>
    </div>
  </div>
</section>

<!-- ============ TEAM / CREDENCIALES — díptico invertido ============ -->
<section class="cli-gradient">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28 grid gap-12 lg:grid-cols-12 items-center">
    <div class="lg:col-span-5">
      <img
        src="<?php echo esc_url($live . 'IMAGE-COMPANY-2.webp'); ?>"
        alt="CLI Constructions crew on site"
        class="w-full h-auto object-cover"
        loading="lazy"
      >
    </div>
    <div class="lg:col-span-7">
      <p class="text-ink text-xl lg:text-2xl leading-relaxed font-medium max-w-2xl">
        Our dedicated and reliable team delivers high-quality craftsmanship
        with a focus on integrity, accountability, and teamwork.
      </p>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
        Certified by the Better Business Bureau and affiliated with the
        Apartment Association of New Mexico, CLI Constructions is committed
        to exceeding client expectations through trusted, professional
        construction services.
      </p>
      <p class="cli-spec mt-7 text-silver">
        BBB Certified &middot; AANM Member &middot; Licensed &amp; Insured
      </p>
    </div>
  </div>
</section>

<!-- ============ WHY US — grid con hairlines ============ -->
<section class="cli-pattern">
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

<!-- ============ VALUES — filas numeradas ============ -->
<section class="cli-gradient">
  <div class="max-w-4xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      3 Values that Define Our Company
    </h2>
    <div class="mt-10 border-t border-ink/15">
      <?php foreach ($values as $v) : ?>
        <div class="grid grid-cols-[auto_1fr] gap-x-6 py-7 border-b border-ink/15">
          <span class="cli-spec text-brand-2"><?php echo esc_html($v['num']); ?></span>
          <div>
            <h3 class="font-display font-bold text-ink text-xl tracking-tight">
              <?php echo esc_html($v['title']); ?>
            </h3>
            <p class="mt-2 text-ink/65 leading-relaxed">
              <?php echo esc_html($v['desc']); ?>
            </p>
          </div>
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
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-9 bg-brand !text-paper">
      <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php get_footer();