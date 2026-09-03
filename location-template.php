<?php
/*
Template Name: Locations
*/

get_header();

/* Mismas 5 áreas que "Where We Work" en el home — un cambio ahí
   conviene reflejarlo aquí también. */
$locations = array(
  array(
    'city'  => 'Albuquerque, NM',
    'href'  => 'https://www.google.com/maps/search/?api=1&query=Albuquerque+NM',
    'blurb' => 'Our home base: the majority of our renovation, roofing, painting, stucco, flooring, and remodel projects for commercial and multi-housing properties are right here in the metro.',
  ),
  array(
    'city'  => 'Rio Rancho, NM',
    'href'  => 'https://www.google.com/maps/search/?api=1&query=Rio+Rancho+NM',
    'blurb' => 'Just across the river from Albuquerque, where we handle renovations, stucco, roofing, and remodel projects for commercial and multi-housing properties with the same crews and accountability.',
  ),
  array(
    'city'  => 'Los Lunas, NM',
    'href'  => 'https://www.google.com/maps/search/?api=1&query=Los+Lunas+NM',
    'blurb' => 'A growing multi-housing and commercial market just south of Albuquerque, where we handle exterior renovations, stucco, and roofing for property managers and owners.',
  ),
  array(
    'city'  => 'Santa Fe, NM',
    'href'  => 'https://www.google.com/maps/search/?api=1&query=Santa+Fe+NM',
    'blurb' => 'From adobe-style stucco work to modern commercial renovations, we bring the same accountable, one-team approach north to Santa Fe.',
  ),
  array(
    'city'  => 'Santa Rosa, NM',
    'href'  => 'https://www.google.com/maps/search/?api=1&query=Santa+Rosa+NM',
    'blurb' => 'Serving Guadalupe County\'s commercial and multi-housing properties with the same licensed, insured crews and clear communication as our Albuquerque projects.',
  ),
);

$faqs = array(
  array(
    'q' => 'What areas does CLI Construction serve?',
    'a' => 'We work throughout Albuquerque, Rio Rancho, Los Lunas, Santa Fe, Santa Rosa, and the surrounding New Mexico communities in between.',
  ),
  array(
    'q' => 'Do you take on projects outside these five locations?',
    'a' => 'Often, yes. These are our core service areas, but we regularly travel for the right commercial or multi-housing project. Send us the address and we will confirm coverage.',
  ),
  array(
    'q' => 'Is there an extra charge for jobs outside Albuquerque?',
    'a' => 'It depends on the scope and distance. We factor travel and scheduling into every estimate, so there are no surprises once the proposal is in your hands.',
  ),
  array(
    'q' => 'How do I request an estimate for my property?',
    'a' => 'Send the form on this page, call (505) 518-1965, or email office@cliconstructions.com with your address and we will get back to you with next steps.',
  ),
);
?>

<!-- ============ PAGE HERO — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/09/LocationsHero-1-scaled.webp')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
  >
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <p class="cli-spec text-silver-2">Service Areas</p>
      <h1 class="mt-2 font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Where We Work
      </h1>
      <p class="mt-5 text-silver-2 text-lg leading-relaxed">
        Family-owned renovations, roofing, painting, stucco, flooring
        &amp; remodels for commercial and multi-housing properties across
        New Mexico.
      </p>
    </div>
  </div>
</section>

<!-- ============ GRID DE UBICACIONES ============ -->
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
      Our Service Areas
    </h2>
    <p class="mt-4 text-ink/70 text-lg leading-relaxed max-w-3xl">
      Five hubs, one accountable team. Tap a city to open it in Google Maps.
    </p>
    <div class="mt-16 space-y-16 lg:space-y-24">
      <?php foreach ($locations as $i => $loc) : $flip = $i % 2 === 1; ?>
        <div class="grid gap-8 lg:grid-cols-2 lg:gap-16 items-center">
          <div class="<?php echo $flip ? 'lg:order-2' : ''; ?> cli-reveal-<?php echo $flip ? 'right' : 'left'; ?>">
            <span class="cli-spec text-silver">New Mexico</span>
            <h3 class="mt-2 font-display font-extrabold text-ink tracking-tight text-[clamp(1.5rem,3vw,2.25rem)]">
              <?php echo esc_html($loc['city']); ?>
            </h3>
            <p class="mt-4 text-ink/70 text-lg leading-relaxed max-w-md">
              <?php echo esc_html($loc['blurb']); ?>
            </p>
            <a
              href="<?php echo esc_url($loc['href']); ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="cli-link inline-block mt-6 text-ink"
            >
              Open in Google Maps
            </a>
          </div>
          <div class="<?php echo $flip ? 'lg:order-1' : ''; ?> relative aspect-[4/3] lg:aspect-[16/11] border border-ink/15 overflow-hidden cli-reveal-<?php echo $flip ? 'left' : 'right'; ?>">
            <iframe
              src="https://www.google.com/maps?q=<?php echo urlencode($loc['city']); ?>&output=embed"
              class="w-full h-full grayscale-20 contrast-[1.05]"
              style="border:0;"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="<?php echo esc_attr('Map of ' . $loc['city']); ?>"
            ></iframe>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="cli-gradient">
  <div class="max-w-4xl mx-auto px-4 py-20 lg:py-28">
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

<!-- ============ ESTIMATE — contact form (al final) ============ -->
<section id="estimate" class="cli-cubes">
  <?php cli_dark_bg_video(); ?>
  <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24 grid gap-12 lg:grid-cols-12">
    <div class="lg:col-span-5 cli-reveal-left">
      <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.6rem,3vw,2.25rem)] leading-tight">
        Get an Estimate for Your Area
      </h2>
      <p class="mt-5 text-silver-2 leading-relaxed">
        Tell us where the property is and what you have in mind, and
        we&rsquo;ll get back to you with next steps.
      </p>
      <div class="mt-8 space-y-4 text-lg">
        <a href="tel:+15055181965" class="block text-paper hover:text-silver-2 transition-colors">(505) 518-1965</a>
        <a href="mailto:office@cliconstructions.com" class="block text-paper hover:text-silver-2 transition-colors">office@cliconstructions.com</a>
      </div>
      <p class="cli-spec mt-8 text-silver">
        Mon&ndash;Fri 9:00&ndash;5:00 &middot; Closed Weekends
      </p>
    </div>
    <div class="lg:col-span-7 cli-reveal-right">
      <!-- Contact Form (React) -->
      <div class="cli-form-panel" data-cli-contact-form></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
