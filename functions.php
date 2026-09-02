<?php

function cli_load_assets() {
  wp_enqueue_style(
    'cli-fonts',
    'https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=DM+Sans:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
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
    'logoUrl'      => esc_url(home_url('/wp-content/uploads/2026/08/CLI_Primary_Logo.webp')),
    'agencyUrl'    => 'https://828marketingsolutions.com',
    'phone'     => '(505) 518-1965',
    'phoneRaw'  => '+15055181965',
    'email'     => 'office@cliconstructions.com',
    'geoLabel'  => '3136 Coors Blvd NW Ste B, Albuquerque, NM',
    'mapsUrl'   => 'https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM',
    'facebook'  => 'https://www.facebook.com/cliconstruction',
    'instagram' => 'https://www.instagram.com/cliconstruction',
    'yelp'      => 'https://www.yelp.com/biz/c-l-i-construction-albuquerque-2',
    'linkedin'  => '#', // prioridad del brief — pendiente de crear
    'ajaxUrl'      => esc_url(admin_url('admin-ajax.php')),
    'contactNonce' => wp_create_nonce('cli_contact'),
    'privacyUrl'   => esc_url(home_url('/privacy-policy/')),
    'termsUrl'     => esc_url(home_url('/terms-and-conditions/')),
  ));
}

add_action('wp_enqueue_scripts', 'cli_load_assets');

function cli_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cli_add_support');

/* ============ Contact Form (React) — endpoint AJAX ============ */
function cli_handle_contact() {
  check_ajax_referer('cli_contact', 'nonce');

  /* Honeypot: si viene lleno, responder OK sin enviar nada */
  if (!empty($_POST['company'])) {
    wp_send_json_success();
  }

  $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
  $phone   = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
  $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
  $service = sanitize_text_field(wp_unslash($_POST['service'] ?? ''));
  $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

  if (!$name || !$phone || !is_email($email)) {
    wp_send_json_error(array('message' => 'Missing required fields.'), 400);
  }

  $to      = apply_filters('cli_contact_recipient', 'office@cliconstructions.com');
  $subject = 'New estimate request — ' . $name;
  $body    = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nService: {$service}\n\nMessage:\n{$message}";
  $headers = array('Reply-To: ' . $name . ' <' . $email . '>');

  if (wp_mail($to, $subject, $body, $headers)) {
    wp_send_json_success();
  }

  wp_send_json_error(array('message' => 'Mail could not be sent.'), 500);
}

add_action('wp_ajax_cli_contact', 'cli_handle_contact');
add_action('wp_ajax_nopriv_cli_contact', 'cli_handle_contact');

/* ============ Video de fondo para bandas ".cli-cubes" ============
   Reemplaza el antiguo estampado de cubos isométricos. Se llama como
   primer hijo de cada <section class="cli-cubes">; el contenido que
   sigue necesita la clase "relative" para quedar por encima. */
function cli_dark_bg_video() {
  ?>
  <video
    class="cli-bg-video"
    src="<?php echo esc_url(home_url('/wp-content/uploads/2026/09/DarkBackgroundLoop2.mp4')); ?>"
    autoplay muted loop playsinline preload="metadata"
    aria-hidden="true"
  ></video>
  <div class="cli-bg-video__veil cli-bg-video__veil--dark" aria-hidden="true"></div>
  <?php
}