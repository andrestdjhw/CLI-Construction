<?php
/*
Template Name: Privacy Policy
*/

get_header();

$sections = array(
  array(
    'title' => 'Information We Collect',
    'body'  => 'When you request an estimate or contact us through the forms on this website, we collect the information you provide: your name, phone number, email address, the service you are interested in, and any message you include. We do not collect payment information through this website.',
  ),
  array(
    'title' => 'How We Use Your Information',
    'body'  => 'We use the information you submit to respond to your request, prepare estimates, schedule visits, and communicate with you about our services. We do not sell, rent, or trade your personal information to third parties for marketing purposes.',
  ),
  array(
    'title' => 'Form Delivery (EmailJS)',
    'body'  => 'Our contact and estimate forms are delivered using EmailJS, a third-party email delivery service. When you submit a form, the information you enter is transmitted through EmailJS in order to reach our team. EmailJS processes this data on our behalf and under its own privacy policy, available at emailjs.com.',
  ),
  array(
    'title' => 'Spam Protection (Google reCAPTCHA)',
    'body'  => 'This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. reCAPTCHA is used on our forms to distinguish human visitors from automated abuse, and may collect hardware and software information, such as device and application data, which is sent to Google for analysis.',
  ),
  array(
    'title' => 'Cookies & Analytics',
    'body'  => 'This website may use cookies and similar technologies for basic functionality and to understand how visitors use the site. You can control or delete cookies through your browser settings. Disabling cookies may affect how some parts of the site work.',
  ),
  array(
    'title' => 'How We Share Information',
    'body'  => 'We only share your information with service providers that help us operate this website and respond to your requests (such as the providers described above), or when required by law. These providers are only permitted to use your information to provide services to us.',
  ),
  array(
    'title' => 'Data Retention & Security',
    'body'  => 'We keep the information you submit only as long as needed to respond to your request and manage our client relationship. We take reasonable measures to protect your information, but no method of transmission over the internet is completely secure.',
  ),
  array(
    'title' => 'Your Choices',
    'body'  => 'You may request that we correct or delete the personal information you have submitted through this website at any time by contacting us using the information below.',
  ),
  array(
    'title' => 'Changes to This Policy',
    'body'  => 'We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated effective date.',
  ),
  array(
    'title' => 'Contact Us',
    'body'  => 'If you have questions about this Privacy Policy or how your information is handled, contact CLI Constructions at (505) 518-1965 or office@cliconstructions.com.',
  ),
);
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-16 lg:py-20">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3rem)]">
        Privacy Policy
      </h1>
      <p class="cli-spec mt-4 text-silver">
        Effective date: <?php echo esc_html(get_the_modified_date('F j, Y')); ?>
      </p>
    </div>
  </div>
</section>

<!-- ============ CONTENIDO ============ -->
<section class="bg-paper">
  <div class="max-w-3xl mx-auto px-4 py-16 lg:py-20">
    <p class="text-ink/70 text-lg leading-relaxed">
      CLI Constructions (&ldquo;we,&rdquo; &ldquo;us,&rdquo; or
      &ldquo;our&rdquo;) operates this website to present our construction
      services and receive estimate requests. This Privacy Policy explains
      what information we collect through the site, how we use it, and the
      choices you have.
    </p>

    <?php foreach ($sections as $i => $s) : ?>
      <div class="mt-12">
        <p class="cli-spec text-brand-2"><?php echo esc_html(str_pad($i + 1, 2, '0', STR_PAD_LEFT)); ?></p>
        <h2 class="mt-1 font-display font-bold text-ink text-2xl tracking-tight">
          <?php echo esc_html($s['title']); ?>
        </h2>
        <p class="mt-3 text-ink/70 leading-relaxed">
          <?php echo esc_html($s['body']); ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php get_footer(); ?>