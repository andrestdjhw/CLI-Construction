<?php
/*
Template Name: Contact Template
*/

get_header();

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

<!-- ============ PAGE HERO — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/ContactUsCLI-scaled.webp')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
  >
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Contact Us
      </h1>
      <p class="mt-5 text-silver-2 text-lg leading-relaxed">
        Get in touch with our friendly team. Whether you have questions or
        need a quote, we&rsquo;re here to help by phone, email, or in person.
      </p>
    </div>
  </div>
</section>

<!-- ============ GET IN TOUCH + FORM ============ -->
<section id="estimate" class="cli-cubes">
  <?php cli_dark_bg_video(); ?>
  <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24 grid gap-12 lg:grid-cols-12">
    <!-- Panel de contacto -->
    <div class="lg:col-span-5 cli-reveal-left">
      <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.6rem,3vw,2.25rem)] leading-tight">
        Get in Touch
      </h2>

      <div class="mt-8 space-y-5">
        <div>
          <p class="cli-spec text-silver">Phone</p>
          <a href="tel:+15055181965" class="mt-1 inline-block text-paper text-lg hover:text-silver-2 transition-colors">
            (505) 518-1965
          </a>
        </div>
        <div>
          <p class="cli-spec text-silver">Email</p>
          <a href="mailto:office@cliconstructions.com" class="mt-1 inline-block text-paper text-lg hover:text-silver-2 transition-colors">
            office@cliconstructions.com
          </a>
        </div>
        <div>
          <p class="cli-spec text-silver">Location</p>
          <a
            href="https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM"
            target="_blank"
            rel="noopener noreferrer"
            class="mt-1 inline-block text-paper text-lg hover:text-silver-2 transition-colors"
          >
            Albuquerque, NM
          </a>
        </div>
        <div>
          <p class="cli-spec text-silver">Hours</p>
          <p class="mt-1 text-paper text-lg leading-relaxed">
            Mon &ndash; Fri &middot; 9:00 AM &ndash; 5:00 PM<br>
            Saturday &middot; 10:00 AM &ndash; 2:00 PM
          </p>
        </div>
        <div>
          <p class="cli-spec text-silver">Follow Us</p>
          <div class="mt-2 flex flex-wrap gap-x-5 gap-y-2">
            <a href="https://www.facebook.com/cliconstruction" target="_blank" rel="noopener noreferrer" class="cli-spec text-silver hover:text-silver-2 transition-colors">Facebook</a>
            <a href="https://www.instagram.com/cliconstruction" target="_blank" rel="noopener noreferrer" class="cli-spec text-silver hover:text-silver-2 transition-colors">Instagram</a>
            <a href="https://www.yelp.com/biz/c-l-i-construction-albuquerque-2" target="_blank" rel="noopener noreferrer" class="cli-spec text-silver hover:text-silver-2 transition-colors">Yelp</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Formulario (React) -->
    <div class="lg:col-span-7 cli-reveal-right">
      <!-- Contact Form (React) -->
      <div class="cli-form-panel" data-cli-contact-form></div>
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

<!-- ============ CIERRE ============ -->
<section class="cli-cubes">
  <?php cli_dark_bg_video(); ?>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-24">
    <h2 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Prefer to Talk It Through?
    </h2>
    <p class="mt-6 text-silver-2 text-lg leading-relaxed max-w-2xl">
      Call us and tell us about your property &mdash; we&rsquo;ll walk you
      through scope, timelines, and next steps.
    </p>
    <a href="tel:+15055181965" class="cli-cta mt-9 bg-brand !text-paper">
      <span class="cli-cta__text">Call (505) 518-1965</span>
    </a>
  </div>
</section>

<?php get_footer(); ?>