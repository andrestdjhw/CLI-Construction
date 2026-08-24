<?php
/*
Template Name: Gallery Template
*/

get_header();

$live = 'https://cliconstructions.com/wp-content/uploads/2025/05/'; // assets aún en producción (videos)

/* ── GALLERY — PROYECTOS ─────────────────────────────────────────────────────
 * Esquema editable: agrega proyectos copiando un bloque del array.
 * 'img'    = foto principal (After). 'before' = foto Before (opcional):
 * si la pones y marcas 'has_ba' => true, se activa el comparador
 * arrastrable Before/After en el lightbox.
 * 'size' => 'tall' hace la card vertical en el masonry.
 * ─────────────────────────────────────────────────────────────────────────── */
$categories = array(
  'all'         => 'All Projects',
  'renovations' => 'Renovations',
  'remodels'    => 'Remodels',
  'painting'    => 'Painting',
  'stucco'      => 'Stucco',
  'roofing'     => 'Roofing',
);

$projects = array(
  array(
    'id'        => 1,
    'category'  => 'roofing',
    'title'     => 'Multi-Housing Roofing',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Reliable roofing focused on multi-housing and commercial buildings — installation, repairs, and maintenance that protect the property and its tenants.',
    'scope'     => 'Roof installation · Repairs · Maintenance',
    'img'       => '/wp-content/uploads/2026/08/RoofingCLI.jpg',
    'before'    => '',
    'has_ba'    => false,
    'size'      => 'tall',
  ),
  array(
    'id'        => 2,
    'category'  => 'remodels',
    'title'     => 'Commercial Remodel',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Comprehensive remodeling for commercial and multi-housing properties — expert design and skilled workmanship from scope to final walk-through.',
    'scope'     => 'Interior updates · Unit turns · Design + workmanship',
    'img'       => '/wp-content/uploads/2026/08/CLIRemodels.jpg',
    'before'    => '',
    'has_ba'    => false,
    'size'      => '',
  ),
  array(
    'id'        => 3,
    'category'  => 'stucco',
    'title'     => 'Stucco Application & Repair',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Durable, weather-resistant stucco tailored for commercial and multi-housing buildings — a New Mexico specialty done right.',
    'scope'     => 'Stucco application · Stucco repair · Weather-resistant systems',
    'img'       => '/wp-content/uploads/2026/08/CLIStucco.webp',
    'before'    => '',
    'has_ba'    => false,
    'size'      => '',
  ),
  array(
    'id'        => 4,
    'category'  => 'painting',
    'title'     => 'Interior & Exterior Painting',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Professional interior and exterior painting with durable finishes that boost aesthetics and property value.',
    'scope'     => 'Interior painting · Exterior painting · Durable finishes',
    'img'       => '/wp-content/uploads/2026/08/PaintingCLI-scaled.webp',
    'before'    => '',
    'has_ba'    => false,
    'size'      => 'tall',
  ),
  array(
    'id'        => 5,
    'category'  => 'renovations',
    'title'     => 'Multi-Housing Renovation',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Property renovations with quality craftsmanship, timely completion, and lasting value — one accountable partner for the whole scope.',
    'scope'     => 'Property renovations · Craftsmanship · Timely completion',
    'img'       => '/wp-content/uploads/2026/08/CLIRenovations.webp',
    'before'    => '',
    'has_ba'    => false,
    'size'      => '',
  ),
);

$videos = array();
for ($i = 1; $i <= 15; $i++) {
  $videos[] = 'VIDEO-CLI-' . $i . '.mp4';
}
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Gallery
      </h1>
      <p class="mt-5 text-ink/70 text-lg leading-relaxed">
        Browse photos showcasing our craftsmanship, from detailed renovations
        to large-scale roofing and painting projects across Albuquerque and
        surrounding areas.
      </p>
    </div>
  </div>
</section>

<!-- ============ BARRA DE FILTROS — sticky ============ -->
<div id="cli-g-filter-bar" class="bg-paper sticky top-20 z-40 border-b border-silver/40">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex items-center gap-2 overflow-x-auto py-4 [scrollbar-width:none]">
      <?php foreach ($categories as $key => $label) : ?>
        <button
          type="button"
          class="cli-g-filter cli-spec flex-shrink-0 px-4 py-2 border transition-colors whitespace-nowrap <?php echo $key === 'all' ? 'is-active' : ''; ?>"
          data-filter="<?php echo esc_attr($key); ?>"
        >
          <?php echo esc_html($label); ?>
          (<?php echo $key === 'all' ? count($projects) : count(array_filter($projects, function ($p) use ($key) { return $p['category'] === $key; })); ?>)
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- ============ PROJECTS — masonry + video blueprint ============ -->
<section id="images" class="relative bg-paper overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIBluePrintPattern.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-12 lg:py-16">
    <div id="cli-g-grid" class="columns-1 sm:columns-2 lg:columns-3 gap-5 space-y-5">
      <?php foreach ($projects as $p) : ?>
        <div
          class="cli-g-card break-inside-avoid bg-paper border border-ink/15 overflow-hidden cursor-pointer group"
          data-category="<?php echo esc_attr($p['category']); ?>"
          data-id="<?php echo esc_attr($p['id']); ?>"
        >
          <div class="cli-card-media relative">
            <img
              src="<?php echo esc_url(home_url($p['img'])); ?>"
              alt="<?php echo esc_attr($p['title']); ?>"
              class="w-full object-cover <?php echo $p['size'] === 'tall' ? 'aspect-[3/4]' : 'aspect-[4/3]'; ?>"
              loading="lazy"
            >
            <span class="cli-spec absolute top-3 left-3 bg-ink/70 text-paper px-2.5 py-1 backdrop-blur-sm">
              <?php echo esc_html($categories[$p['category']]); ?>
            </span>
            <?php if ($p['has_ba']) : ?>
              <span class="cli-spec absolute top-3 right-3 bg-brand text-paper px-2.5 py-1">B/A</span>
            <?php endif; ?>
          </div>
          <div class="p-5">
            <h3 class="font-display font-bold text-ink text-lg tracking-tight group-hover:text-brand-2 transition-colors">
              <?php echo esc_html($p['title']); ?>
            </h3>
            <p class="cli-spec mt-1.5 text-silver"><?php echo esc_html($p['city']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div id="cli-g-empty" class="hidden text-center py-24">
      <p class="font-display font-bold text-ink text-xl">No projects in this category yet.</p>
      <p class="mt-2 text-ink/60">Check back soon — new work is added regularly.</p>
    </div>
  </div>
</section>

<!-- ============ VIDEOS ============ -->
<section id="videos" class="cli-cubes">
  <div class="max-w-7xl mx-auto px-4 py-16 lg:py-24">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Videos
    </h2>
    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($videos as $v) : ?>
        <video
          src="<?php echo esc_url($live . $v); ?>"
          class="w-full h-auto bg-ink-2"
          controls
          muted
          playsinline
          preload="none"
        ></video>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ CIERRE ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-24">
    <h2 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Like What You See?
    </h2>
    <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
      Tell us about your property and the scope you have in mind &mdash;
      we&rsquo;ll get back to you with next steps.
    </p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-cta mt-8 bg-brand !text-paper">
      <span class="cli-cta__text">Get an Estimate</span> <span aria-hidden="true">&rarr;</span>
    </a>
  </div>
</section>

<!-- ============ LIGHTBOX ============ -->
<div
  id="cli-g-lb"
  class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-8 bg-ink/90"
  role="dialog"
  aria-modal="true"
  aria-label="Project viewer"
>
  <button id="cli-g-lb-close" class="absolute top-4 right-4 z-20 w-11 h-11 flex items-center justify-center border border-paper/60 text-paper hover:bg-brand hover:border-brand transition-colors" aria-label="Close">
    &#10005;
  </button>
  <button id="cli-g-lb-prev" class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 flex items-center justify-center border border-paper/60 text-paper hover:bg-brand hover:border-brand transition-colors" aria-label="Previous project">
    &larr;
  </button>
  <button id="cli-g-lb-next" class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 z-20 w-11 h-11 flex items-center justify-center border border-paper/60 text-paper hover:bg-brand hover:border-brand transition-colors" aria-label="Next project">
    &rarr;
  </button>

  <div class="w-full max-w-5xl max-h-full overflow-y-auto bg-paper grid lg:grid-cols-[1.4fr_1fr]">
    <!-- Imagen / comparador -->
    <div class="relative bg-ink-2 min-h-72 lg:min-h-[30rem]">
      <div id="cli-g-lb-tabs" class="absolute top-3 left-3 z-10 hidden gap-1.5">
        <button class="cli-g-lb-tab cli-spec px-3 py-1.5 bg-ink text-paper" data-tab="after">After</button>
        <button class="cli-g-lb-tab cli-spec px-3 py-1.5 bg-ink/40 text-paper" data-tab="before">Before</button>
      </div>

      <div id="cli-g-lb-img" class="absolute inset-0 bg-cover bg-center"></div>

      <!-- Comparador Before/After -->
      <div id="cli-g-lb-ba" class="hidden absolute inset-0 cursor-col-resize select-none">
        <div id="cli-g-lb-ba-before" class="absolute inset-0 bg-cover bg-center"></div>
        <div id="cli-g-lb-ba-after" class="absolute inset-0 bg-cover bg-center" style="clip-path: inset(0 50% 0 0);"></div>
        <div id="cli-g-lb-ba-handle" class="absolute top-0 bottom-0 w-0.5 bg-paper left-1/2 -translate-x-1/2 flex items-center justify-center">
          <span class="w-9 h-9 shrink-0 flex items-center justify-center bg-brand text-paper text-sm" aria-hidden="true">&harr;</span>
        </div>
        <span class="cli-spec absolute bottom-3 left-3 bg-ink/70 text-paper px-2 py-1">Before</span>
        <span class="cli-spec absolute bottom-3 right-3 bg-ink/70 text-paper px-2 py-1">After</span>
      </div>
    </div>

    <!-- Info del proyecto -->
    <div class="p-6 lg:p-8 flex flex-col">
      <div class="flex items-center gap-3 flex-wrap">
        <span id="cli-g-lb-cat" class="cli-spec bg-brand text-paper px-2.5 py-1"></span>
        <span id="cli-g-lb-city" class="cli-spec text-silver"></span>
      </div>
      <h2 id="cli-g-lb-title" class="mt-4 font-display font-extrabold text-ink text-2xl tracking-tight"></h2>
      <p id="cli-g-lb-desc" class="mt-3 text-ink/70 leading-relaxed"></p>

      <div class="mt-5 border border-ink/15 bg-paper-2 p-4">
        <p class="cli-spec text-silver">Scope Executed</p>
        <p id="cli-g-lb-scope" class="mt-1.5 text-sm text-ink leading-relaxed"></p>
      </div>

      <button id="cli-g-lb-ba-toggle" class="cli-cta mt-5 hidden">
        <span class="cli-cta__text">Compare Before / After</span>
        <span aria-hidden="true">&harr;</span>
      </button>

      <div class="mt-auto pt-6 flex items-center justify-between gap-4">
        <span id="cli-g-lb-counter" class="cli-spec text-silver"></span>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="cli-link text-ink">Get an Estimate</a>
      </div>
    </div>
  </div>
</div>

<script>
const CLI_G_PROJECTS = <?php echo wp_json_encode(array_map(function ($p) use ($categories) {
  return array(
    'id'       => $p['id'],
    'category' => $p['category'],
    'catLabel' => $categories[$p['category']],
    'title'    => $p['title'],
    'city'     => $p['city'],
    'desc'     => $p['desc'],
    'scope'    => $p['scope'],
    'img'      => home_url($p['img']),
    'before'   => $p['before'] ? home_url($p['before']) : '',
    'hasBa'    => (bool) $p['has_ba'],
  );
}, $projects)); ?>;

(function () {
  /* ── Filtros ── */
  const cards = document.querySelectorAll('.cli-g-card');
  const btns = document.querySelectorAll('.cli-g-filter');
  const empty = document.getElementById('cli-g-empty');

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      btns.forEach(b => b.classList.toggle('is-active', b === btn));
      let visible = 0;
      cards.forEach(card => {
        const show = filter === 'all' || card.dataset.category === filter;
        card.style.display = show ? '' : 'none';
        if (show) visible++;
      });
      empty.classList.toggle('hidden', visible > 0);
    });
  });

  /* ── Lightbox ── */
  const lb = document.getElementById('cli-g-lb');
  if (!lb) return;
  const lbImg = document.getElementById('cli-g-lb-img');
  const lbTabsWrap = document.getElementById('cli-g-lb-tabs');
  const lbTabs = document.querySelectorAll('.cli-g-lb-tab');
  const lbBa = document.getElementById('cli-g-lb-ba');
  const lbBaBefore = document.getElementById('cli-g-lb-ba-before');
  const lbBaAfter = document.getElementById('cli-g-lb-ba-after');
  const lbBaHandle = document.getElementById('cli-g-lb-ba-handle');
  const lbBaToggle = document.getElementById('cli-g-lb-ba-toggle');

  let current = null;
  let activeTab = 'after';
  let baActive = false;
  let dragging = false;

  const visibleIds = () =>
    Array.from(cards)
      .filter(c => c.style.display !== 'none')
      .map(c => parseInt(c.dataset.id));

  const getProject = id => CLI_G_PROJECTS.find(p => p.id === id);

  function render() {
    const p = getProject(current);
    if (!p) return;
    document.getElementById('cli-g-lb-cat').textContent = p.catLabel;
    document.getElementById('cli-g-lb-city').textContent = p.city;
    document.getElementById('cli-g-lb-title').textContent = p.title;
    document.getElementById('cli-g-lb-desc').textContent = p.desc;
    document.getElementById('cli-g-lb-scope').textContent = p.scope;

    const ids = visibleIds();
    const idx = ids.indexOf(p.id);
    document.getElementById('cli-g-lb-counter').textContent =
      String(idx + 1).padStart(2, '0') + ' / ' + String(ids.length).padStart(2, '0');

    const canBa = p.hasBa && p.before;
    lbTabsWrap.classList.toggle('hidden', !canBa || baActive);
    lbTabsWrap.classList.toggle('flex', canBa && !baActive);
    lbBaToggle.classList.toggle('hidden', !canBa);

    if (canBa && baActive) {
      lbImg.classList.add('hidden');
      lbBa.classList.remove('hidden');
      lbBaBefore.style.backgroundImage = "url('" + p.before + "')";
      lbBaAfter.style.backgroundImage = "url('" + p.img + "')";
      setBa(0.5);
    } else {
      lbBa.classList.add('hidden');
      lbImg.classList.remove('hidden');
      lbImg.style.backgroundImage =
        "url('" + (activeTab === 'before' && canBa ? p.before : p.img) + "')";
      lbTabs.forEach(t => {
        const on = t.dataset.tab === activeTab;
        t.classList.toggle('bg-ink', on);
        t.classList.toggle('bg-ink/40', !on);
      });
    }
  }

  function setBa(ratio) {
    const r = Math.min(Math.max(ratio, 0.05), 0.95);
    lbBaAfter.style.clipPath = 'inset(0 ' + (100 - r * 100) + '% 0 0)';
    lbBaHandle.style.left = r * 100 + '%';
  }

  function baFromX(x) {
    const rect = lbBa.getBoundingClientRect();
    setBa((x - rect.left) / rect.width);
  }

  function open(id) {
    current = id;
    activeTab = 'after';
    baActive = false;
    lb.classList.remove('hidden');
    lb.classList.add('flex');
    document.body.style.overflow = 'hidden';
    render();
  }

  function close() {
    lb.classList.add('hidden');
    lb.classList.remove('flex');
    document.body.style.overflow = '';
  }

  function step(dir) {
    const ids = visibleIds();
    if (!ids.length) return;
    const idx = ids.indexOf(current);
    current = ids[(idx + dir + ids.length) % ids.length];
    activeTab = 'after';
    baActive = false;
    render();
  }

  cards.forEach(card =>
    card.addEventListener('click', () => open(parseInt(card.dataset.id)))
  );
  document.getElementById('cli-g-lb-close').addEventListener('click', close);
  document.getElementById('cli-g-lb-prev').addEventListener('click', () => step(-1));
  document.getElementById('cli-g-lb-next').addEventListener('click', () => step(1));
  lb.addEventListener('click', e => {
    if (e.target === lb) close();
  });
  lbTabs.forEach(t =>
    t.addEventListener('click', () => {
      activeTab = t.dataset.tab;
      render();
    })
  );
  lbBaToggle.addEventListener('click', () => {
    baActive = !baActive;
    render();
  });

  lbBa.addEventListener('mousedown', e => { dragging = true; baFromX(e.clientX); });
  lbBa.addEventListener('touchstart', e => { dragging = true; baFromX(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mousemove', e => { if (dragging) baFromX(e.clientX); });
  window.addEventListener('touchmove', e => { if (dragging) baFromX(e.touches[0].clientX); }, { passive: true });
  window.addEventListener('mouseup', () => (dragging = false));
  window.addEventListener('touchend', () => (dragging = false));

  window.addEventListener('keydown', e => {
    if (lb.classList.contains('hidden')) return;
    if (e.key === 'Escape') close();
    if (e.key === 'ArrowLeft') step(-1);
    if (e.key === 'ArrowRight') step(1);
  });
})();
</script>

<?php get_footer(); ?>