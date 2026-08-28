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
    'img'   => '/wp-content/uploads/2026/08/CLIRenovations.webp',
    'title' => 'Renovations',
    'desc'  => 'Expert renovation services in Albuquerque and surrounding areas, focused on multi-housing and commercial properties.',
    'href'  => '/service/renovations/',
  ),
  array(
    'num'   => '02',
    'img'   => '/wp-content/uploads/2026/08/PaintingCLI-scaled.webp',
    'title' => 'Painting',
    'desc'  => 'Professional interior and exterior painting services for commercial and multi-housing projects.',
    'href'  => '/service/painting/',
  ),
  array(
    'num'   => '03',
    'img'   => '/wp-content/uploads/2026/08/CLIStucco.webp',
    'title' => 'Stucco',
    'desc'  => 'Top-quality stucco application and repair, a New Mexico specialty done right.',
    'href'  => '/service/stucco/',
  ),
  array(
    'num'   => '04',
    'img'   => '/wp-content/uploads/2026/08/CLIRemodels.jpg',
    'title' => 'Remodels',
    'desc'  => 'Comprehensive remodeling for commercial and multi-housing properties.',
    'href'  => '/service/remodels/',
  ),
  array(
    'num'   => '05',
    'img'   => '/wp-content/uploads/2026/08/RoofingCLI.jpg',
    'title' => 'Roofing',
    'desc'  => 'Reliable roofing services focused on multi-housing and commercial buildings in New Mexico.',
    'href'  => '/service/roofing/',
  ),
);

$locations = array(
  array('city' => 'Albuquerque, NM', 'href' => 'https://www.google.com/maps/search/?api=1&query=Albuquerque+NM'),
  array('city' => 'Los Lunas, NM',   'href' => 'https://www.google.com/maps/search/?api=1&query=Los+Lunas+NM'),
  array('city' => 'Santa Fe, NM',    'href' => 'https://www.google.com/maps/search/?api=1&query=Santa+Fe+NM'),
  array('city' => 'Santa Rosa, NM',  'href' => 'https://www.google.com/maps/search/?api=1&query=Santa+Rosa+NM'),
);

/* Ya viven en la biblioteca de medios local; si se agrega una foto que aún
 * solo exista en el sitio en producción, se puede referenciar como nombre
 * suelto (sin "/" inicial) y cae al fallback de $live, igual que $services. */
$gallery = array(
  '/wp-content/uploads/2026/08/CLIRenovations.webp',
  '/wp-content/uploads/2026/08/PaintingCLI-scaled.webp',
  '/wp-content/uploads/2026/08/CLIStucco.webp',
  '/wp-content/uploads/2026/08/CLIRemodels.jpg',
  '/wp-content/uploads/2026/08/RoofingCLI.jpg',
  '/wp-content/uploads/2026/08/CLIFull.jpg',
  '/wp-content/uploads/2026/08/CLIFotos1-scaled.webp',
  '/wp-content/uploads/2026/08/CLIFotos62-scaled.webp',
  '/wp-content/uploads/2026/08/CLIFotos54-scaled.webp',
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
<section class="relative bg-ink overflow-hidden flex flex-col min-h-[calc(100svh-7.5rem)]">
  <video
    class="absolute inset-0 w-full h-full object-cover"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIHero.mp4')); ?>"
    autoplay muted loop playsinline
  ></video>
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative w-full max-w-7xl mx-auto px-4 py-16 lg:py-20 flex-grow flex items-center">
    <div class="w-full grid gap-10 lg:grid-cols-12 items-center">
    <div class="lg:col-span-7 max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-paper leading-[1.02] tracking-tight text-[clamp(2.25rem,5.5vw,4rem)]">
        Trusted Construction Experts for Multi&#8209;Housing &amp; Commercial Projects
      </h1>
      <p class="mt-6 text-silver-2 text-lg leading-relaxed max-w-xl">
        Family-owned renovations, roofing, painting, stucco &amp; remodels
        serving Albuquerque, Santa Fe, and surrounding areas in New Mexico.
      </p>
      <div class="mt-9 flex flex-wrap gap-4">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta bg-brand !text-paper">
          <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
        </a>
        <a href="#services" class="cli-cta !text-paper"><span class="cli-cta__text">Explore Our Services</span></a>
      </div>
    </div>

    <!-- Contact Form (React) — panel del hero -->
    <div class="lg:col-span-5 cli-reveal-right is-visible">
      <div
        class="bg-paper border border-ink/15 shadow-[0_18px_44px_-18px_rgb(0_0_0_/_0.35)]"
        data-cli-contact-form
        data-variant="card"
      ></div>
    </div>
    </div>
  </div>

  <!-- Franja de credenciales — marquee continuo -->
  <?php $creds = array('Family-Owned', 'BBB Certified', 'Apartment Association of New Mexico', 'Licensed &amp; Insured'); ?>
  <div class="relative bg-brand py-4 cli-marquee" aria-label="Credentials">
    <div class="cli-marquee__track flex items-center gap-10 w-max pr-10">
      <?php for ($copy = 0; $copy < 2; $copy++) : ?>
        <?php foreach ($creds as $c) : ?>
          <span class="cli-spec text-paper whitespace-nowrap" <?php echo $copy ? 'aria-hidden="true"' : ''; ?>>
            <?php echo $c; ?>
          </span>
          <span class="text-ink" aria-hidden="true">&#9670;</span>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ ABOUT — split 50/50 foto full-bleed / texto ============ -->
<section class="cli-cubes">
  <div class="grid lg:grid-cols-2 items-stretch">
    <div class="min-h-80 lg:min-h-[34rem]">
      <img
        src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/AboutSectionHome-scaled.webp')); ?>"
        alt="The CLI Constructions team"
        class="w-full h-full object-cover"
        loading="lazy"
      >
    </div>
    <div class="flex items-center">
      <div class="w-full max-w-xl mx-auto px-6 py-16 lg:px-10 lg:py-24 cli-reveal-right">
        <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
          A Little About Us
        </h2>
        <p class="mt-5 text-silver-2 text-lg leading-relaxed">
          CLI Constructions is a family-owned Albuquerque construction company
          specializing in trusted multi-housing and commercial renovations,
          roofing, painting, and stucco services across New Mexico. One
          accountable partner for the whole scope &mdash; from first
          walk-through to final inspection.
        </p>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="cli-link inline-block mt-7 text-paper">
          Keep Reading
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES — carrusel continuo de cards (patrón IPR) ============ -->
<section id="services" class="relative bg-paper cli-on-light py-20 lg:py-28 overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIBluePrintPattern.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Our Services
    </h2>
    <p class="mt-4 text-ink/70 text-lg leading-relaxed max-w-3xl">
      Explore our full range of expert services, including renovations,
      painting, stucco, remodels, and roofing, tailored specifically for
      commercial and multi-housing properties.
    </p>
  </div>

  <div class="relative cli-marquee cli-marquee--cards mt-12" aria-label="Services">
    <div class="cli-marquee__track flex items-stretch gap-5 w-max pr-5">
      <?php for ($copy = 0; $copy < 2; $copy++) : ?>
        <?php foreach ($services as $s) : ?>
          <a
            href="<?php echo esc_url(home_url($s['href'])); ?>"
            class="group w-80 shrink-0 flex flex-col bg-paper border border-ink/15"
            <?php echo $copy ? 'aria-hidden="true" tabindex="-1"' : ''; ?>
          >
            <div class="cli-card-media">
              <img
                src="<?php echo esc_url(strpos($s['img'], '/') === 0 ? home_url($s['img']) : $live . $s['img']); ?>"
                alt=""
                class="w-full aspect-[4/3] object-cover"
                loading="lazy"
              >
            </div>
            <div class="flex flex-col flex-grow p-6">
              <h3 class="font-display font-bold text-ink text-xl tracking-tight group-hover:text-brand-2 transition-colors">
                <?php echo esc_html($s['title']); ?>
              </h3>
              <p class="mt-2 text-ink/65 text-sm leading-relaxed">
                <?php echo esc_html($s['desc']); ?>
              </p>
              <span class="cli-spec mt-auto pt-5 text-brand-2">
                Learn More <span aria-hidden="true">&rarr;</span>
              </span>
            </div>
          </a>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4 mt-10">
    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="cli-link text-ink">
      Explore All Services
    </a>
  </div>
</section>

<!-- ============ GALLERY — cinta horizontal ============ -->
<section class="bg-ink py-16 lg:py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 flex flex-wrap items-end justify-between gap-6">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Recent Work
    </h2>
    <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="cli-link text-paper">Explore Full Gallery</a>
  </div>
  <div class="cli-marquee cli-marquee--cards mt-10" aria-label="Recent work">
    <div class="cli-marquee__track flex items-center gap-4 w-max pr-4">
      <?php for ($copy = 0; $copy < 2; $copy++) : ?>
        <?php foreach ($gallery as $img) : ?>
          <img
            src="<?php echo esc_url(strpos($img, '/') === 0 ? home_url($img) : $live . $img); ?>"
            alt="<?php echo $copy ? '' : 'CLI Constructions project'; ?>"
            <?php echo $copy ? 'aria-hidden="true"' : ''; ?>
            class="h-64 lg:h-80 w-auto object-cover shrink-0"
            loading="lazy"
          >
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ LOCATIONS ============ -->
<section class="relative bg-paper overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIBluePrintPattern.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Where We Work
    </h2>
    <div class="mt-12 grid gap-px bg-ink/15 border border-ink/15 sm:grid-cols-2 lg:grid-cols-4">
      <?php foreach ($locations as $loc) : ?>
        <a
          href="<?php echo esc_url($loc['href']); ?>"
          target="_blank"
          rel="noopener noreferrer"
          class="group bg-paper p-7 hover:bg-paper-2 transition-colors cli-reveal-stagger"
        >
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

<!-- ============ REVIEWS — Yelp ============ -->
<?php
/* Reseñas reales de Yelp (yelp.com/biz/c-l-i-construction-albuquerque-2) */
$reviews = array(
  array(
    'quote'  => 'Had Miguel come out to look at my roof for wind damage. Miguel was able to get my roof covered with nothing out my pocket. CLI also put in new windows in my house and did an amazing job. Windows came out beautiful, and they did a great job with cleaning up afterwards. I recommend CLI construction for any of your roofing needs and construction. They got the job done from start to finish and in a timely matter.',
    'author' => 'Rosalyn M.',
  ),
  array(
    'quote'  => 'Came out immediately and helped with a few different issues in the bathroom and kitchen. Super professional, kind, and helpful. I would definitely recommend',
    'author' => 'Dara C.',
  ),
  array(
    'quote'  => 'Great work, very nice guys. Did a great job and kept their word. Professional and easy to talk to! Would definitely work with them again.',
    'author' => 'Alisa A.',
  ),
  array(
    'quote'  => 'Great customer service !! David the supervisor, is Amazing very professional with his crew !! Very clean and the outcome to our roof turned out Amazing!!',
    'author' => 'Letty A.',
  ),
);
$yelp_biz    = 'https://www.yelp.com/biz/c-l-i-construction-albuquerque-2';
$yelp_review = 'https://www.yelp.com/writeareview/biz/c-l-i-construction-albuquerque-2';
?>
<section id="reviews" class="relative cli-cubes overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/Steel-Gemetry-Background.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil cli-bg-video__veil--dark" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
        What Clients Say
      </h2>
      <a
        href="<?php echo esc_url($yelp_biz); ?>"
        target="_blank"
        rel="noopener noreferrer"
        class="cli-link text-paper"
      >
        Read All Reviews on Yelp
      </a>
    </div>

    <div class="mt-12 grid gap-px bg-silver/25 border border-silver/25 md:grid-cols-2">
      <?php foreach ($reviews as $r) : ?>
        <figure class="bg-paper p-8 flex flex-col cli-reveal-stagger">
          <div class="text-brand tracking-[0.2em]" aria-label="5 star review">
            &#9733;&#9733;&#9733;&#9733;&#9733;
          </div>
          <blockquote class="mt-4 text-ink/75 leading-relaxed flex-grow">
            <?php echo esc_html($r['quote']); ?>
          </blockquote>
          <figcaption class="cli-spec mt-6 text-silver">
            <?php echo esc_html($r['author']); ?> &middot; Yelp
          </figcaption>
        </figure>
      <?php endforeach; ?>
    </div>

    <a
      href="<?php echo esc_url($yelp_review); ?>"
      target="_blank"
      rel="noopener noreferrer"
      class="cli-cta mt-10 bg-brand !text-paper"
    >
      <span class="cli-cta__text">Leave a Review</span>
      <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<!-- ============ FAQ — filas de acordeón ============ -->
<section class="relative bg-paper overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIBluePrintPattern.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil" aria-hidden="true"></div>
  <div class="relative max-w-4xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
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
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            <?php echo esc_html($f['a']); ?>
          </p>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE — split 50/50 mapa / formulario ============ -->
<section class="cli-cubes">
  <div class="grid lg:grid-cols-2 items-stretch">
    <div class="min-h-80 lg:min-h-[34rem] cli-reveal-left">
      <iframe
        src="https://www.google.com/maps?q=CLI+Construction+Albuquerque+NM&output=embed"
        class="w-full h-full grayscale-20 contrast-[1.05]"
        style="border:0;"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="CLI Constructions location map"
      ></iframe>
    </div>
    <div class="flex items-center">
      <div class="w-full max-w-xl mx-auto px-6 py-16 lg:px-10 lg:py-24 cli-reveal-right">
        <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
          Expert Construction Solutions You Can <span class="text-brand">Count On</span>
        </h2>
        <p class="mt-5 text-silver-2 text-lg leading-relaxed">
          Partner with CLI Constructions for trusted commercial and
          multi-housing renovations, roofing, and more &mdash; serving
          Albuquerque, Santa Fe, and surrounding New Mexico communities with
          pride.
        </p>
        <!-- Contact Form (React) -->
        <div class="mt-8 bg-paper border border-ink/15" data-cli-contact-form></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>