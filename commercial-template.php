<?php
/*
Template Name: Commercial Template
*/

get_header();

$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/'; // TODO: biblioteca de medios local

/* Segmentos B2B — del Industry Report de 828 */
$segments = array(
  array(
    'title' => 'Commercial Building Owners',
    'desc'  => 'Exterior and interior scopes handled by one accountable company — painting, stucco, roofing, and renovations that protect your asset and your tenants\' experience.',
  ),
  array(
    'title' => 'Multi-Housing Property Managers',
    'desc'  => 'Unit turns, common areas, and building envelopes for multifamily communities, scheduled around occupancy and coordinated with your on-site team.',
  ),
  array(
    'title' => 'General Contractors',
    'desc'  => 'A reliable subcontract partner for painting, stucco, and remodel scopes — clear deliverables, controlled costs, and crews that show up.',
  ),
  array(
    'title' => 'Municipal & Public Work',
    'desc'  => 'Smaller public scopes done right — demolition, accessibility improvements, and roofing for schools and municipal facilities.',
  ),
);

$capabilities = array(
  array('num' => '01', 'title' => 'Renovations', 'href' => '/service/renovations/'),
  array('num' => '02', 'title' => 'Remodels', 'href' => '/service/remodels/'),
  array('num' => '03', 'title' => 'Painting', 'href' => '/service/painting/'),
  array('num' => '04', 'title' => 'Stucco', 'href' => '/service/stucco/'),
  array('num' => '05', 'title' => 'Roofing', 'href' => '/service/roofing/'),
);

$process = array(
  array(
    'num'   => '01',
    'title' => 'Walk-Through & Scope',
    'desc'  => 'We visit your property, walk the scope with you, and document exactly what the project needs — no assumptions, no surprises later.',
  ),
  array(
    'num'   => '02',
    'title' => 'Clear Proposal',
    'desc'  => 'You get a proposal with transparent pricing and defined deliverables, so approvals and budgeting are straightforward on your side.',
  ),
  array(
    'num'   => '03',
    'title' => 'Scheduled Execution',
    'desc'  => 'Our crews work around your tenants and operations, with one point of contact keeping you informed from start to finish.',
  ),
  array(
    'num'   => '04',
    'title' => 'Delivery & Walk-Back',
    'desc'  => 'We close with a final walk-through against the agreed scope, and we stand behind the work after the crews leave.',
  ),
);
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Commercial &amp; Multi&#8209;Housing Construction
      </h1>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed">
        One integrated partner for renovations, painting, stucco, remodels,
        and roofing across New Mexico &mdash; the whole scope, one accountable
        company.
      </p>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-8 bg-brand !text-paper">
        <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- ============ STATEMENT — split 50/50 texto / foto full-bleed ============ -->
<section class="cli-cubes">
  <div class="grid lg:grid-cols-2 items-stretch">
    <div class="flex items-center">
      <div class="w-full max-w-xl mx-auto px-6 py-16 lg:px-10 lg:py-24 cli-reveal-left">
        <h2 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(1.9rem,4vw,3rem)]">
          Efficiency. Precision. <span class="text-brand">Commercial Results.</span>
        </h2>
        <p class="mt-6 text-silver-2 text-lg leading-relaxed">
          Most commercial projects juggle separate contractors for painting,
          stucco, roofing, and remodels. CLI Constructions integrates the full
          scope under one family-owned company &mdash; one contract, one
          schedule, one team accountable for the result.
        </p>
        <p class="cli-spec mt-8 text-silver">
          Family-Owned &middot; BBB Certified &middot; AANM Member &middot; Licensed &amp; Insured
        </p>
      </div>
    </div>
    <div class="min-h-80 lg:min-h-[34rem] cli-reveal-right">
      <img
        src="<?php echo esc_url($live . 'IMAGE-CLI-1.webp'); ?>"
        alt="Commercial project by CLI Constructions"
        class="w-full h-full object-cover"
        loading="lazy"
      >
    </div>
  </div>
</section>

<!-- ============ WHO WE SERVE — grid hairline ============ -->
<section class="cli-pattern">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Who We Serve
    </h2>
    <div class="mt-12 grid gap-px bg-ink/15 border border-ink/15 md:grid-cols-2">
      <?php foreach ($segments as $seg) : ?>
        <div class="bg-paper p-8 cli-reveal-stagger">
          <h3 class="font-display font-bold text-ink text-xl tracking-tight">
            <?php echo esc_html($seg['title']); ?>
          </h3>
          <p class="mt-3 text-ink/65 leading-relaxed">
            <?php echo esc_html($seg['desc']); ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CAPABILITIES — filas spec-sheet ============ -->
<section class="bg-paper-2 cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
        Full-Scope Capabilities
      </h2>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="cli-link text-ink">Explore All Services</a>
    </div>
    <div class="mt-12 border-t border-ink/15">
      <?php foreach ($capabilities as $c) : ?>
        <a
          href="<?php echo esc_url(home_url($c['href'])); ?>"
          class="group grid grid-cols-[auto_1fr_auto] items-baseline gap-x-6 py-5 border-b border-ink/15 transition-colors hover:bg-paper cli-reveal-stagger"
        >
          <span class="cli-spec text-silver"><?php echo esc_html($c['num']); ?></span>
          <h3 class="font-display font-bold text-ink text-xl tracking-tight group-hover:text-brand-2 transition-colors">
            <?php echo esc_html($c['title']); ?>
          </h3>
          <span aria-hidden="true" class="text-brand text-xl transition-transform group-hover:translate-x-1.5">&rarr;</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ PROCESS — secuencia numerada ============ -->
<section class="cli-gradient">
  <div class="max-w-4xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-ink tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      How We Work
    </h2>
    <p class="mt-4 text-ink/70 text-lg leading-relaxed max-w-2xl">
      Clear process, defined deliverables, and schedules we keep &mdash; from
      the first walk-through to the final inspection.
    </p>
    <div class="mt-10 border-t border-ink/15">
      <?php foreach ($process as $p) : ?>
        <div class="grid grid-cols-[auto_1fr] gap-x-6 py-7 border-b border-ink/15 cli-reveal-stagger">
          <span class="cli-spec text-brand-2"><?php echo esc_html($p['num']); ?></span>
          <div>
            <h3 class="font-display font-bold text-ink text-xl tracking-tight">
              <?php echo esc_html($p['title']); ?>
            </h3>
            <p class="mt-2 text-ink/65 leading-relaxed">
              <?php echo esc_html($p['desc']); ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE ============ -->
<section class="cli-cubes">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <h2 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Let&rsquo;s Scope Your Next <span class="text-brand">Commercial Project</span>
    </h2>
    <p class="mt-6 text-silver-2 text-lg leading-relaxed max-w-2xl">
      Serving Albuquerque, Rio Rancho, Los Lunas, Santa Fe, Santa Rosa, and
      surrounding New Mexico communities.
    </p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-9 bg-brand !text-paper">
      <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<?php get_footer(); ?>