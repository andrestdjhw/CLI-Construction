<?php
/*
Template Name: Home Template
*/

get_header();

/* Assets temporales desde el sitio en producción —
   TODO: reemplazar por la biblioteca de medios del local */
$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/';

$services = array(
  array(
    'num'   => '01',
    'title' => 'Renovations',
    'desc'  => 'Expert renovation services in Albuquerque and surrounding areas, focused on multi-housing and commercial properties.',
    'href'  => '/service/renovations/',
  ),
  array(
    'num'   => '02',
    'title' => 'Painting',
    'desc'  => 'Professional interior and exterior painting services for commercial and multi-housing projects.',
    'href'  => '/service/painting/',
  ),
  array(
    'num'   => '03',
    'title' => 'Stucco',
    'desc'  => 'Top-quality stucco application and repair, a New Mexico specialty done right.',
    'href'  => '/service/stucco/',
  ),
  array(
    'num'   => '04',
    'title' => 'Remodels',
    'desc'  => 'Comprehensive remodeling for commercial and multi-housing properties.',
    'href'  => '/service/remodels/',
  ),
  array(
    'num'   => '05',
    'title' => 'Roofing',
    'desc'  => 'Reliable roofing services focused on multi-housing and commercial buildings in New Mexico.',
    'href'  => '/service/roofing/',
  ),
);

$locations = array(
  array('city' => 'Albuquerque, NM', 'href' => '/location/albuquerque-nm/'),
  array('city' => 'Los Lunas, NM',   'href' => '/location/los-lunas-nm/'),
  array('city' => 'Santa Fe, NM',    'href' => '/location/santa-fe-nm/'),
  array('city' => 'Santa Rosa, NM',  'href' => '/location/santa-rosa-nm/'),
);

$gallery = array(
  'IMAGE-CLI-6.webp',
  'IMAGE-CLI-1.webp',
  'IMAGE-CLI-27.webp',
  'IMAGE-CLI-71.webp',
  'IMAGE-CLI-78.webp',
  'IMAGE-CLI-85.webp',
  'IMAGE-COMPANY-4.webp',
);

$faqs = array(
  array(
    'q' => 'What services does CLI Constructions offer?',
    'a' => 'CLI Constructions specializes in renovations, painting, stucco, remodels, and roofing for multi-housing and commercial properties in Albuquerque and surrounding New Mexico areas.',
  ),
  array(
    'q' => 'Where does CLI Constructions provide services?',
    'a' => 'We serve Albuquerque, Santa Fe, Los Lunas, Santa Rosa, and all surrounding areas throughout New Mexico.',
  ),
  array(
    'q' => 'Is CLI Constructions a licensed and certified company?',
    'a' => 'Yes, CLI Constructions is certified by the Better Business Bureau and affiliated with the Apartment Association of New Mexico.',
  ),
  array(
    'q' => 'Can CLI Constructions handle commercial construction projects?',
    'a' => 'Absolutely. We focus primarily on commercial and multi-housing construction, offering expert renovations, roofing, and remodeling services.',
  ),
  array(
    'q' => 'How can I request an estimate from CLI Constructions?',
    'a' => 'You can request a free estimate by contacting us via phone at (505) 518-1965 or email at office@cliconstructions.com.',
  ),
);
?>

<!-- ============ HERO — video, sesgado a la izquierda ============ -->
<section class="relative cli-gradient cli-on-light overflow-hidden flex flex-col min-h-[calc(100svh-7.5rem)]">
  <video
    class="absolute inset-0 w-full h-full object-cover opacity-20"
    src="<?php echo esc_url($live . 'VIDEO-Hero-Section.mp4'); ?>"
    autoplay muted loop playsinline
  ></video>
  <div class="relative w-full max-w-7xl mx-auto px-4 py-20 flex-grow flex items-center">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10">
      <h1 class="font-display font-extrabold text-ink leading-[1.02] tracking-tight text-[clamp(2.25rem,5.5vw,4rem)]">
        Trusted Construction Experts for Multi&#8209;Housing &amp; Commercial Projects
      </h1>
      <p class="mt-6 text-ink/70 text-lg leading-relaxed max-w-xl">
        Family-owned renovations, roofing, painting, stucco &amp; remodels
        serving Albuquerque, Santa Fe, and surrounding areas in New Mexico.
      </p>
      <div class="mt-9 flex flex-wrap gap-4">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta bg-brand !text-paper hover:!bg-brand-2 hover:border-brand-2">
          Get an Estimate <span aria-hidden="true">&rarr;</span>
        </a>
        <a href="#services" class="cli-cta">Explore Our Services</a>
      </div>
    </div>
  </div>

  <!-- Franja de credenciales — marquee continuo -->
  <?php $creds = array('Family-Owned', 'BBB Certified', 'Apartment Association of New Mexico', 'Licensed &amp; Insured'); ?>
  <div class="relative bg-ink py-4 cli-marquee" aria-label="Credentials">
    <div class="cli-marquee__track">
      <?php for ($copy = 0; $copy < 2; $copy++) : ?>
        <?php foreach ($creds as $c) : ?>
          <span class="cli-spec text-silver whitespace-nowrap" <?php echo $copy ? 'aria-hidden="true"' : ''; ?>>
            <?php echo $c; ?>
          </span>
          <span class="text-brand" aria-hidden="true">&#9670;</span>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ ABOUT — díptico ============ -->
<section class="cli-pattern">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28 grid gap-12 lg:grid-cols-12 items-center">
    <div class="lg:col-span-5">
      <img
        src="<?php echo esc_url($live . 'IMAGE-COMPANY-4.webp'); ?>"
        alt="The CLI Constructions team"
        class="w-full h-auto object-cover"
        loading="lazy"
      >
    </div>
    <div class="lg:col-span-7">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
        A Little About Us
      </h2>
      <p class="mt-5 text-ink/75 text-lg leading-relaxed max-w-2xl">
        CLI Constructions is a family-owned Albuquerque construction company
        specializing in trusted multi-housing and commercial renovations,
        roofing, painting, and stucco services across New Mexico. One
        accountable partner for the whole scope &mdash; from first walk-through
        to final inspection.
      </p>
      <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="cli-link inline-block mt-7 text-ink">
        Keep Reading
      </a>
    </div>
  </div>
</section>

<!-- ============ SERVICES — filas de spec-sheet, no cards ============ -->
<section id="services" class="bg-paper-2">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
        Our Services
      </h2>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="cli-link text-ink">Explore All Services</a>
    </div>

    <div class="mt-12 border-t border-ink/15">
      <?php foreach ($services as $s) : ?>
        <a
          href="<?php echo esc_url(home_url($s['href'])); ?>"
          class="group grid grid-cols-[auto_1fr_auto] items-baseline gap-x-6 gap-y-1 py-6 border-b border-ink/15 transition-colors hover:bg-paper"
        >
          <span class="cli-spec text-silver"><?php echo esc_html($s['num']); ?></span>
          <div class="min-w-0">
            <h3 class="font-display font-bold text-ink text-xl lg:text-2xl tracking-tight group-hover:text-brand-2 transition-colors">
              <?php echo esc_html($s['title']); ?>
            </h3>
            <p class="mt-1.5 text-ink/65 text-sm lg:text-base leading-relaxed max-w-2xl">
              <?php echo esc_html($s['desc']); ?>
            </p>
          </div>
          <span aria-hidden="true" class="text-brand text-xl transition-transform group-hover:translate-x-1.5">&rarr;</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ GALLERY — cinta horizontal ============ -->
<section class="bg-ink py-16 lg:py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 flex flex-wrap items-end justify-between gap-6">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      Recent Work
    </h2>
    <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="cli-link text-paper">Explore Full Gallery</a>
  </div>
  <div class="mt-10 flex gap-4 overflow-x-auto px-4 pb-4 snap-x snap-mandatory [-webkit-overflow-scrolling:touch]">
    <?php foreach ($gallery as $img) : ?>
      <img
        src="<?php echo esc_url($live . $img); ?>"
        alt="CLI Constructions project"
        class="h-64 lg:h-80 w-auto object-cover shrink-0 snap-start"
        loading="lazy"
      >
    <?php endforeach; ?>
  </div>
</section>

<!-- ============ LOCATIONS ============ -->
<section class="cli-gradient">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      Where We Work
    </h2>
    <div class="mt-12 grid gap-px bg-ink/15 border border-ink/15 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($locations as $loc) : ?>
        <a href="<?php echo esc_url(home_url($loc['href'])); ?>" class="group bg-paper p-7 hover:bg-paper-2 transition-colors">
          <span class="cli-spec text-silver">New Mexico</span>
          <h3 class="mt-2 font-display font-bold text-ink text-xl tracking-tight group-hover:text-brand-2 transition-colors">
            <?php echo esc_html($loc['city']); ?>
          </h3>
          <span class="cli-spec mt-4 inline-block text-brand-2">
            Learn More <span aria-hidden="true">&rarr;</span>
          </span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ ESTIMATE — punto de montaje del Contact Form (React) ============ -->
<section id="estimate" class="cli-pattern">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28 grid gap-12 lg:grid-cols-12">
    <div class="lg:col-span-5">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
        Get an Estimate
      </h2>
      <p class="mt-5 text-ink/75 leading-relaxed">
        Tell us about your property and the scope you have in mind &mdash;
        we&rsquo;ll get back to you with next steps.
      </p>
      <p class="cli-spec mt-8 text-silver">
        Mon&ndash;Fri 9:00&ndash;5:00 &middot; Sat 10:00&ndash;2:00
      </p>
    </div>
    <div class="lg:col-span-7">
      <!-- El componente React del Contact Form se monta aquí -->
      <div id="cli-contact-form"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ — filas de acordeón ============ -->
<section class="cli-gradient">
  <div class="max-w-4xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
      Frequently Asked Questions
    </h2>
    <div class="mt-10 border-t border-ink/15">
      <?php foreach ($faqs as $f) : ?>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              <?php echo esc_html($f['q']); ?>
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="pb-6 text-ink/70 leading-relaxed max-w-3xl">
            <?php echo esc_html($f['a']); ?>
          </p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE — statement + CTA ============ -->
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