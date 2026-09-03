<?php
/*
Template Name: Gallery Template
*/

get_header();

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
  'flooring'    => 'Flooring',
);

$projects = array(
  array(
    'id'        => 1,
    'category'  => 'roofing',
    'title'     => 'Multi-Housing Roofing',
    'city'      => 'Albuquerque, NM',
    'desc'      => 'Reliable roofing focused on multi-housing and commercial buildings: installation, repairs, and maintenance that protect the property and its tenants.',
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
    'desc'      => 'Comprehensive remodeling for commercial and multi-housing properties: expert design and skilled workmanship from scope to final walk-through.',
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
    'desc'      => 'Durable, weather-resistant stucco tailored for commercial and multi-housing buildings, a New Mexico specialty done right.',
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
    'desc'      => 'Property renovations with quality craftsmanship, timely completion, and lasting value, with one accountable partner for the whole scope.',
    'scope'     => 'Property renovations · Craftsmanship · Timely completion',
    'img'       => '/wp-content/uploads/2026/08/CLIRenovations.webp',
    'before'    => '',
    'has_ba'    => false,
    'size'      => '',
  ),

  /* ── Fotos de campo agregadas a la biblioteca de medios (agosto 2026) ──
   * Categorizadas a partir del contenido de cada foto (sin datos de
   * dirección/cliente reales); ajustar título/desc/categoría si hace falta. */
  array(
    'id' => 6, 'category' => 'renovations', 'title' => 'Home Addition: Framing Stage',
    'city' => 'Albuquerque, NM',
    'desc' => 'A residential addition captured mid-framing, part of a larger renovation scope built from the ground up.',
    'scope' => 'Framing · Structural build-out',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-27.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 7, 'category' => 'renovations', 'title' => 'Unit Renovation: Bedroom Turn',
    'city' => 'Albuquerque, NM',
    'desc' => 'A fully turned bedroom with new flooring and closet doors, ready for the next tenant.',
    'scope' => 'Flooring · Closet doors · Paint',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-41.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 8, 'category' => 'renovations', 'title' => 'Unit Renovation: Living Area Turn',
    'city' => 'Albuquerque, NM',
    'desc' => 'A renovated living area with fresh paint and flooring, finished on schedule for move-in.',
    'scope' => 'Flooring · Paint · Move-in ready',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-44.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 9, 'category' => 'renovations', 'title' => 'Single-Family Home Renovation: Exterior',
    'city' => 'Albuquerque, NM',
    'desc' => 'A full exterior renovation with a new stucco finish and updated garage door and windows.',
    'scope' => 'Exterior renovation · Garage door · Windows',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-52.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 10, 'category' => 'renovations', 'title' => 'Single-Family Home Renovation: Garage & Driveway',
    'city' => 'Albuquerque, NM',
    'desc' => 'Same property, a second angle showing the finished garage and driveway after renovation.',
    'scope' => 'Exterior renovation · Driveway · Garage door',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-53.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 11, 'category' => 'renovations', 'title' => 'Manufactured Home Renovation',
    'city' => 'Albuquerque, NM',
    'desc' => 'A manufactured home refreshed with updated siding, windows, and exterior finishes.',
    'scope' => 'Siding · Windows · Exterior refresh',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-56.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 12, 'category' => 'renovations', 'title' => 'Unit Renovation: Bedroom with Barn Doors',
    'city' => 'Albuquerque, NM',
    'desc' => 'A renovated bedroom featuring sliding barn-door closets and new wood-look flooring.',
    'scope' => 'Barn doors · Flooring · Paint',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-66.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 13, 'category' => 'renovations', 'title' => 'Unit Renovation: Open Living Space',
    'city' => 'Albuquerque, NM',
    'desc' => 'An open living space renovated with new flooring and a fresh coat of paint throughout.',
    'scope' => 'Flooring · Paint · Trim',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-68.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 14, 'category' => 'renovations', 'title' => 'Unit Renovation: Hallway & Kitchen Access',
    'city' => 'Albuquerque, NM',
    'desc' => 'A renovated hallway leading into the kitchen, finished with matching flooring and paint.',
    'scope' => 'Flooring · Paint · Interior doors',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-70.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 15, 'category' => 'renovations', 'title' => 'Unit Renovation: Bedroom Turn',
    'city' => 'Albuquerque, NM',
    'desc' => 'Another completed bedroom turn, with new flooring, paint, and ceiling fan installed.',
    'scope' => 'Flooring · Paint · Fixtures',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-72.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 16, 'category' => 'flooring', 'title' => 'New Flooring: Living Room Turn',
    'city' => 'Albuquerque, NM',
    'desc' => 'A renovated living room with new flooring and glass patio doors letting in natural light.',
    'scope' => 'Flooring · Patio doors · Paint',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-74.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 17, 'category' => 'renovations', 'title' => 'Community Common Area: Ramada & Courtyard',
    'city' => 'Albuquerque, NM',
    'desc' => 'A multi-housing common area renovated with a new shade ramada and landscaped courtyard.',
    'scope' => 'Ramada construction · Landscaping · Hardscape',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-80.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 18, 'category' => 'renovations', 'title' => 'Community Common Area: Landscaping',
    'city' => 'Albuquerque, NM',
    'desc' => 'Refreshed landscaping and turf at a multi-housing community, improving curb appeal for residents.',
    'scope' => 'Landscaping · Turf · Retaining walls',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-81.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 19, 'category' => 'renovations', 'title' => 'Community Common Area: Courtyard',
    'city' => 'Albuquerque, NM',
    'desc' => 'A renovated courtyard at a multi-housing property, with new landscaping and walkways.',
    'scope' => 'Landscaping · Walkways · Hardscape',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-82.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 20, 'category' => 'renovations', 'title' => 'Community Common Area: Patio & BBQ Area',
    'city' => 'Albuquerque, NM',
    'desc' => 'A shared patio and BBQ area renovated for a multi-housing community, built for everyday use.',
    'scope' => 'Hardscape · Outdoor amenities · Landscaping',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-83.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 21, 'category' => 'renovations', 'title' => 'Unit Renovation: Bedroom Turn',
    'city' => 'Albuquerque, NM',
    'desc' => 'A completed unit turn with new carpet, paint, and lighting ready for the next resident.',
    'scope' => 'Carpet · Paint · Lighting',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-88.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 22, 'category' => 'renovations', 'title' => 'Interior Renovation: Framing & Insulation',
    'city' => 'Albuquerque, NM',
    'desc' => 'Mid-project view of interior framing and insulation during a larger renovation build-out.',
    'scope' => 'Framing · Insulation · Rough-in',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-96.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 23, 'category' => 'renovations', 'title' => 'Interior Renovation: Structural Framing',
    'city' => 'Albuquerque, NM',
    'desc' => 'Structural framing in progress, opening up the interior ahead of drywall and finishes.',
    'scope' => 'Framing · Structural work',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-98.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 24, 'category' => 'renovations', 'title' => 'Commercial Building Renovation: Exterior',
    'city' => 'Albuquerque, NM',
    'desc' => 'A large-scale commercial renovation, with exterior work underway across the full building.',
    'scope' => 'Exterior renovation · Commercial scope',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-103.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 25, 'category' => 'renovations', 'title' => 'Interior Renovation: Drywall Finish',
    'city' => 'Albuquerque, NM',
    'desc' => 'Freshly finished drywall ahead of paint, with a new patio door bringing in natural light.',
    'scope' => 'Drywall · Patio door · Paint prep',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-105.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),

  array(
    'id' => 26, 'category' => 'remodels', 'title' => 'Kitchen Remodel: White Cabinetry',
    'city' => 'Albuquerque, NM',
    'desc' => 'A full kitchen remodel with white shaker cabinetry, a center island, and stainless appliances.',
    'scope' => 'Cabinetry · Island · Appliances',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-15.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 27, 'category' => 'remodels', 'title' => 'Bathroom Remodel: Tub & Shower',
    'city' => 'Albuquerque, NM',
    'desc' => 'A remodeled bathroom with a new tub-shower combo and updated vanity.',
    'scope' => 'Tub-shower · Vanity · Tile',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-46.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 28, 'category' => 'remodels', 'title' => 'Bathroom Remodel: Marble-Look Tile',
    'city' => 'Albuquerque, NM',
    'desc' => 'A bathroom remodel finished with marble-look tile surround from floor to ceiling.',
    'scope' => 'Tile surround · Tub · Lighting',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-61.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 29, 'category' => 'remodels', 'title' => 'Bathroom Remodel: Vanity & Tub',
    'city' => 'Albuquerque, NM',
    'desc' => 'A remodeled bathroom pairing a new vanity and mirror with a refreshed tub and tile.',
    'scope' => 'Vanity · Mirror · Tile',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-62.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 30, 'category' => 'remodels', 'title' => 'Bathroom Remodel: Vanity & Lighting',
    'city' => 'Albuquerque, NM',
    'desc' => 'A compact bathroom remodel with a new vanity, updated lighting, and fresh finishes.',
    'scope' => 'Vanity · Lighting · Finishes',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-76.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 31, 'category' => 'remodels', 'title' => 'Kitchen Remodel: Full Galley Kitchen',
    'city' => 'Albuquerque, NM',
    'desc' => 'A galley kitchen remodel with new cabinetry, countertops, and appliances end to end.',
    'scope' => 'Cabinetry · Countertops · Appliances',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-78.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),

  array(
    'id' => 32, 'category' => 'stucco', 'title' => 'Commercial Stucco: Leasing Office Exterior',
    'city' => 'Albuquerque, NM',
    'desc' => 'A commercial leasing office finished with a clean, durable stucco exterior.',
    'scope' => 'Stucco application · Commercial exterior',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-7.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 33, 'category' => 'stucco', 'title' => 'Stucco Finish: Building Signage Wall',
    'city' => 'Albuquerque, NM',
    'desc' => 'A textured stucco finish on a multi-housing building wall, framing the property signage.',
    'scope' => 'Stucco texture · Exterior finish',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-10.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 34, 'category' => 'stucco', 'title' => 'Stucco Monument Sign',
    'city' => 'Albuquerque, NM',
    'desc' => 'A stucco-finished monument sign structure, built to match the property\'s exterior finishes.',
    'scope' => 'Stucco application · Monument sign',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-11.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),
  array(
    'id' => 35, 'category' => 'stucco', 'title' => 'New Stucco Application: Home Exterior',
    'city' => 'Albuquerque, NM',
    'desc' => 'A fresh stucco application across a full home exterior, weather-resistant and New Mexico tough.',
    'scope' => 'Stucco application · Weather-resistant finish',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-58.webp', 'before' => '', 'has_ba' => false, 'size' => '',
  ),

  array(
    'id' => 36, 'category' => 'painting', 'title' => 'Exterior Painting: Multi-Housing Stairwell',
    'city' => 'Albuquerque, NM',
    'desc' => 'Exterior painting on a multi-housing stairwell, with bright accent doors against clean white walls.',
    'scope' => 'Exterior painting · Accent doors',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-85.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 37, 'category' => 'painting', 'title' => 'Exterior Painting: Unit Doors & Railings',
    'city' => 'Albuquerque, NM',
    'desc' => 'Freshly painted unit doors and railings finish off this multi-housing exterior painting project.',
    'scope' => 'Exterior painting · Doors · Railings',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-86.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
  array(
    'id' => 38, 'category' => 'painting', 'title' => 'Exterior Painting: Building Unit Numbering',
    'city' => 'Albuquerque, NM',
    'desc' => 'A crisp, freshly painted building exterior with clear unit numbering for a multi-housing property.',
    'scope' => 'Exterior painting · Building signage',
    'img' => '/wp-content/uploads/2026/08/IMAGE-CLI-87.webp', 'before' => '', 'has_ba' => false, 'size' => 'tall',
  ),
);

/* Editable: agrega/quita videos copiando un bloque. 'file' = ruta local en
 * la biblioteca de medios de WP (siempre a partir de "/wp-content/..."),
 * resuelta con home_url() al renderizar — así sobrevive intacta el cambio
 * de dominio al migrar a producción. 'title' = etiqueta mostrada en el
 * reproductor principal y en la miniatura. */
$videos = array();
for ($i = 1; $i <= 15; $i++) {
  $videos[] = array(
    'file'  => '/wp-content/uploads/2026/08/VIDEO-CLI-' . $i . '.mp4',
    'title' => 'Project Video ' . str_pad($i, 2, '0', STR_PAD_LEFT),
  );
}
?>

<!-- ============ PAGE HERO — foto + scrim ============ -->
<section class="relative bg-ink overflow-hidden">
  <img
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/CLIRemodels.jpg')); ?>"
    alt=""
    class="absolute inset-0 w-full h-full object-cover"
  >
  <div class="absolute inset-0 bg-ink/70" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-20 lg:py-28">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-paper leading-[1.05] tracking-tight text-[clamp(2.25rem,5vw,3.5rem)]">
        Gallery
      </h1>
      <p class="mt-5 text-silver-2 text-lg leading-relaxed">
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
      <p class="mt-2 text-ink/60">Check back soon, new work is added regularly.</p>
    </div>
  </div>
</section>

<!-- ============ VIDEOS — loop principal + carrusel continuo de cartillas ============
     El video grande arriba siempre está reproduciéndose en loop, muteado.
     Abajo, un carrusel continuo (mismo patrón que Services) de cartillas con
     miniatura; al seleccionar una, ese video pasa a reproducirse arriba. -->
<section id="videos" class="relative cli-cubes overflow-hidden">
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/08/Steel-Gemetry-Background.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil cli-bg-video__veil--dark" aria-hidden="true"></div>
  <div class="relative max-w-7xl mx-auto px-4 py-16 lg:py-24">
    <h2 class="font-display font-extrabold text-paper tracking-tight text-[clamp(1.75rem,3.5vw,2.75rem)] leading-tight cli-reveal-up">
      Videos
    </h2>
    <p class="mt-4 text-silver-2 text-lg leading-relaxed max-w-2xl">
      Watch recent projects come together, from prep work to the final
      walk-through.
    </p>

    <!-- Reproductor principal — loop muteado, siempre activo -->
    <div id="cli-v-main" class="relative aspect-video bg-ink-2 overflow-hidden mt-10 mb-6">
      <video
        id="cli-v-player"
        class="absolute inset-0 w-full h-full object-cover"
        src="<?php echo esc_url(home_url($videos[0]['file'])); ?>"
        data-index="0"
        autoplay
        muted
        loop
        playsinline
        preload="auto"
      ></video>
      <span id="cli-v-label" class="cli-spec absolute bottom-3 left-3 bg-ink/70 text-paper px-2.5 py-1">
        <?php echo esc_html($videos[0]['title']); ?>
      </span>
      <button
        id="cli-v-mute"
        type="button"
        class="absolute bottom-3 right-3 flex items-center justify-center w-9 h-9 bg-ink/70 text-paper hover:bg-brand transition-colors"
        aria-label="Unmute video"
        aria-pressed="false"
      >
        <svg id="cli-v-mute-icon-off" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M3 10v4h4l5 5V5L7 10H3z" />
          <path d="M16 8.5a4.5 4.5 0 0 1 0 7" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" />
          <line x1="19" y1="6" x2="19" y2="18" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" transform="rotate(45 19 12)" />
        </svg>
        <svg id="cli-v-mute-icon-on" class="w-4 h-4 hidden" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M3 10v4h4l5 5V5L7 10H3z" />
          <path d="M16 8.5a4.5 4.5 0 0 1 0 7M18.5 6a8 8 0 0 1 0 12" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linecap="round" />
        </svg>
      </button>
    </div>

    <!-- Carrusel continuo de cartillas (mismo patrón que Services) -->
    <div id="cli-v-thumbs" class="relative cli-marquee cli-marquee--cards" aria-label="Video thumbnails">
      <div class="cli-marquee__track flex items-stretch gap-4 w-max pr-4">
        <?php for ($copy = 0; $copy < 2; $copy++) : ?>
          <?php foreach ($videos as $i => $v) : ?>
            <button
              type="button"
              data-index="<?php echo esc_attr($i); ?>"
              data-src="<?php echo esc_url(home_url($v['file'])); ?>"
              data-title="<?php echo esc_attr($v['title']); ?>"
              class="cli-v-card group relative w-56 sm:w-64 shrink-0 aspect-video overflow-hidden border transition-colors <?php echo $i === 0 ? 'border-brand' : 'border-silver/25 hover:border-brand/70'; ?>"
              <?php echo $copy ? 'aria-hidden="true" tabindex="-1"' : ''; ?>
            >
              <video
                class="cli-v-card-video absolute inset-0 w-full h-full object-cover"
                src="<?php echo esc_url(home_url($v['file'])); ?>"
                muted
                playsinline
                preload="metadata"
              ></video>
              <div class="absolute inset-0 bg-ink/25 group-hover:bg-ink/10 transition-colors"></div>
              <div class="absolute top-1.5 right-1.5 flex items-center justify-center w-6 h-6 rounded-full bg-paper/90 text-ink">
                <svg class="w-3 h-3 ml-0.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M8 5v14l11-7z" />
                </svg>
              </div>
              <span class="cli-spec absolute bottom-1.5 left-1.5 right-1.5 text-paper truncate text-left">
                <?php echo esc_html($v['title']); ?>
              </span>
            </button>
          <?php endforeach; ?>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>

<script>
(function () {
  const player = document.getElementById('cli-v-player');
  const label = document.getElementById('cli-v-label');
  const muteBtn = document.getElementById('cli-v-mute');
  const thumbsWrap = document.getElementById('cli-v-thumbs');
  if (!player || !thumbsWrap) return;

  const cards = thumbsWrap.querySelectorAll('.cli-v-card');

  /* Cartillas: fijan un frame estático como miniatura sin reproducirse */
  thumbsWrap.querySelectorAll('.cli-v-card-video').forEach(function (video) {
    function showFrame() {
      try { video.currentTime = Math.min(0.15, (video.duration || 1) / 10); } catch (e) { /* noop */ }
    }
    if (video.readyState >= 1) showFrame();
    else video.addEventListener('loadedmetadata', showFrame, { once: true });
  });

  function activate(idx, src, title) {
    if (player.getAttribute('data-index') === String(idx)) return;
    player.setAttribute('data-index', idx);
    player.src = src;
    player.load();
    const playPromise = player.play();
    if (playPromise !== undefined) {
      playPromise.catch(function () { /* autoplay bloqueado; reintenta en el próximo gesto */ });
    }
    label.textContent = title;

    cards.forEach(function (c) {
      const isActive = c.getAttribute('data-index') === String(idx);
      c.classList.toggle('border-brand', isActive);
      c.classList.toggle('border-silver/25', !isActive);
    });
  }

  cards.forEach(function (card) {
    card.addEventListener('click', function () {
      activate(card.getAttribute('data-index'), card.getAttribute('data-src'), card.getAttribute('data-title'));
    });
  });

  if (muteBtn) {
    muteBtn.addEventListener('click', function () {
      player.muted = !player.muted;
      muteBtn.setAttribute('aria-pressed', String(!player.muted));
      muteBtn.setAttribute('aria-label', player.muted ? 'Unmute video' : 'Mute video');
      document.getElementById('cli-v-mute-icon-off').classList.toggle('hidden', !player.muted);
      document.getElementById('cli-v-mute-icon-on').classList.toggle('hidden', player.muted);
    });
  }
})();
</script>

<!-- ============ CIERRE ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-20 lg:py-24">
    <h2 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3.25rem)] max-w-3xl">
      Like What You See?
    </h2>
    <p class="mt-5 text-ink/70 text-lg leading-relaxed max-w-2xl">
      Tell us about your property and the scope you have in mind,
      and we&rsquo;ll get back to you with next steps.
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