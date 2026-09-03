<?php
/*
Template Name: Service — Roofing
*/

get_header(); ?>

<!-- ============ PAGE HERO — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/RoofingCLI.jpg')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
  >
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <p class="cli-spec text-silver-2">Our Services</p>
      <h1 class="mt-2 font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Roofing
      </h1>
      <p class="mt-5 text-silver-2 text-lg leading-relaxed">
        Reliable roofing services focused on multi-housing and commercial buildings in New Mexico.
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
        Roofing Done Right
      </h2>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
        CLI Construction offers roof installation, repairs, and maintenance to protect your investment. We focus on multi-housing and commercial buildings, where a sound roof protects tenants, operations, and the long-term value of the property.
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
              Roof installation
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Roof repairs
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Roof maintenance
            </li>
            <li class="flex items-start gap-3 text-ink">
              <span class="text-brand mt-0.5" aria-hidden="true">&#9670;</span>
              Commercial &amp; multi-housing focus
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
      Roofing FAQs
    </h2>
    <div class="mt-10 border-t border-ink/15">
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              What roofing services does CLI Construction provide?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            We provide roof installation, repairs, and maintenance, with a focus on multi-housing and commercial buildings in New Mexico.
          </p>
        </details>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              Do you work on apartment complexes and commercial buildings?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            Yes. Multi-housing and commercial properties are our primary focus, and we coordinate the work around tenants and day-to-day operations.
          </p>
        </details>
        <details class="group border-b border-ink/15">
          <summary class="flex items-center justify-between gap-6 py-5 cursor-pointer list-none [&::-webkit-details-marker]:hidden">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight">
              Where do you offer roofing services?
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
              How do I get a roofing estimate?
            </h3>
            <span aria-hidden="true" class="text-brand text-2xl leading-none transition-transform group-open:rotate-45">+</span>
          </summary>
          <p class="cli-faq-answer pb-6 text-ink/70 leading-relaxed max-w-3xl">
            Use the form on this page, call us at (505) 518-1965, or email office@cliconstructions.com and we will walk the scope with you.
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
        Get a Roofing Estimate
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
    <a href="<?php echo esc_url(home_url('/service/remodels/')); ?>" class="cli-link text-ink">Remodels</a>
    <a href="<?php echo esc_url(home_url('/service/stucco/')); ?>" class="cli-link text-ink">Stucco</a>
    <a href="<?php echo esc_url(home_url('/service/painting/')); ?>" class="cli-link text-ink">Painting</a>
    <a href="<?php echo esc_url(home_url('/service/renovations/')); ?>" class="cli-link text-ink">Renovations</a>
    <a href="<?php echo esc_url(home_url('/service/flooring/')); ?>" class="cli-link text-ink">Flooring</a>
  </div>
</section>

<?php get_footer(); ?>