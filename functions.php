<?php

function cli_load_assets() {
  wp_enqueue_style(
    'cli-fonts',
    'https://fonts.googleapis.com/css2?family=Archivo:wght@600;700;800&family=Instrument+Sans:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap',
    array(),
    null
  );
  wp_enqueue_script(
    'ourmainjs',
    get_theme_file_uri('/build/index.js'),
    array('wp-element', 'react-jsx-runtime'),
    filemtime(get_theme_file_path('/build/index.js')),
    true
  );
  wp_enqueue_style(
    'ourmaincss',
    get_theme_file_uri('/build/index.css'),
    array(),
    filemtime(get_theme_file_path('/build/index.css'))
  );

  /* Config del Navbar — un solo lugar para datos de contacto y redes.
     TODO: reemplazar logoUrl por la ruta real en la biblioteca de medios
     y completar las URLs de redes (LinkedIn es prioridad del brief). */
  wp_localize_script('ourmainjs', 'cliConfig', array(
    'homeUrl'      => esc_url(home_url('/')),
    'logoUrl'      => '', // p. ej. content_url('/uploads/2026/08/cli-logo.png')
    'logoWhiteUrl' => '', // versión blanca para el footer
    'agencyUrl'    => 'https://828marketingsolutions.com',
    'phone'     => '(505) 518-1965',
    'phoneRaw'  => '+15055181965',
    'email'     => 'office@cliconstructions.com',
    'geoLabel'  => 'Albuquerque, NM',
    'mapsUrl'   => 'https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM',
    'facebook'  => '#',
    'instagram' => '#',
    'yelp'      => '#',
    'linkedin'  => '#',
  ));
}

add_action('wp_enqueue_scripts', 'cli_load_assets');

function cli_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cli_add_support');