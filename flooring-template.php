<?php
/*
Template Name: Service — Flooring
*/

get_header(); ?>

<!-- ============ PAGE HERO — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/IMAGE-CLI-74.webp')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
  >
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <p class="cli-spec text-silver-2">Our Services</p>
      <h1 class="mt-2 font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Flooring
      </h1>
      <p class="mt-5 text-silver-2 text-lg leading-relaxed">
        Durable flooring installation and replacement built for high-traffic commercial and multi-housing properties.
      </p>
      <a href="#estimate" class="cli-cta mt-8 bg-brand !text-paper">
        <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- ============ OVERVIEW + ALCANCE ============ -->
<section class="relative bg-paper cli-on-light overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIBluePrintPattern.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28 grid gap-12 lg:grid-cols-12">
    <div class="lg:col-span-7 cli-reveal-left">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight">
        Flooring Built to Last
      </h2>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
        CLI Construction installs and replaces flooring for commercial and multi-housing properties across New Mexico, matching the right material to the traffic, budget, and timeline of each space. From single unit turns to full-building rollouts, our crews work on schedule and leave the property clean.
      </p>
      <p class="cli-spec mt-8 text-silver">
        Family-Owned &middot; BBB Certified &middot; AANM Member &middot; Licensed &amp; Insured
      </p>
    </div>
    <div class="lg:col-span-5 cli-reveal-right">
      <div class="bg-paper border border-ink/15 p-8">
        <p class="cli-spec text-silver">What's Included</p>
        <ul class="mt-4 space-y-3">
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Vinyl plank &amp; laminate installation
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Tile flooring
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Carpet replacement for unit turns
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Commercial &amp; multi-housing properties
            </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ DEL SERVICIO ============ -->
<section class="cli-gradient">
  <div class="max-w-4xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Flooring FAQs
    </h2>
    <div class="mt-10 border-t border-ink/15">
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              What flooring materials do you install?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            We install vinyl plank, laminate, tile, and carpet, matched to the traffic and maintenance needs of commercial and multi-housing properties.
          </p>
        </details>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              Do you handle flooring for unit turns?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            Yes. Flooring replacement is one of the most common scopes in our unit turns, completed on schedule between tenants.
          </p>
        </details>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              Where do you offer flooring services?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            We serve Albuquerque, Rio Rancho, Santa Fe, Los Lunas, Santa Rosa, and surrounding New Mexico areas.
          </p>
        </details>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              How do I get a flooring estimate?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            Send the form on this page or call (505) 518-1965 and we will assess the property with you.
          </p>
        </details>
    </div>
  </div>
</section>

<!-- ============ ESTIMATE — contact form ============ -->
<section id="estimate" class="cli-cubes">
  <?php cli_dark_bg_video(); ?>
  <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24 grid gap-12 lg:grid-cols-12">
    <div class="lg:col-span-5 cli-reveal-left">
      <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.6rem,3vw,2.25rem)] leading-tight">
        Get a Flooring Estimate
      </h2>
      <p class="mt-5 text-silver-2 leading-relaxed">
        Tell us about your property and the scope you have in mind,
        and we&rsquo;ll get back to you with next steps.
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

<!-- ============ OTROS SERVICIOS ============ -->
<section class="cli-gradient">
  <div class="max-w-7xl mx-auto px-4 py-14 lg:py-16 flex flex-wrap items-center gap-x-8 gap-y-4">
    <span class="cli-spec text-silver">More Services</span>
    <a href="<?php echo esc_url(home_url('/service/roofing/')); ?>" class="cli-link text-ink">Roofing</a>
    <a href="<?php echo esc_url(home_url('/service/remodels/')); ?>" class="cli-link text-ink">Remodels</a>
    <a href="<?php echo esc_url(home_url('/service/stucco/')); ?>" class="cli-link text-ink">Stucco</a>
    <a href="<?php echo esc_url(home_url('/service/painting/')); ?>" class="cli-link text-ink">Painting</a>
    <a href="<?php echo esc_url(home_url('/service/renovations/')); ?>" class="cli-link text-ink">Renovations</a>
  </div>
</section>

<?php get_footer(); ?>
