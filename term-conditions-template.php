<?php
/*
Template Name: Terms and Conditions
*/

get_header();

$sections = array(
  array(
    'title' => 'Acceptance of These Terms',
    'body'  => 'By accessing or using this website, you agree to these Terms and Conditions. If you do not agree with any part of these terms, please do not use the site.',
  ),
  array(
    'title' => 'Use of This Website',
    'body'  => 'This website is provided to present the services of CLI Construction and to allow visitors to request estimates and contact our team. You agree to use the site only for lawful purposes and not to interfere with its operation, attempt to gain unauthorized access, or submit false or misleading information through our forms.',
  ),
  array(
    'title' => 'Estimates & Service Information',
    'body'  => 'Content on this website, including service descriptions, is provided for general information. Submitting an estimate request does not create a contract for services. Any engagement is defined by the written proposal and agreement we provide for a specific project.',
  ),
  array(
    'title' => 'Forms, EmailJS & reCAPTCHA',
    'body'  => 'Our forms are delivered through EmailJS and protected by Google reCAPTCHA. By submitting a form you consent to the processing described in our Privacy Policy, and your use of the forms is also subject to the Google Privacy Policy and Terms of Service that apply to reCAPTCHA.',
  ),
  array(
    'title' => 'Intellectual Property',
    'body'  => 'The content of this website, including text, photographs, logos, and design, belongs to CLI Construction or is used with permission. You may not copy, reproduce, or use this content for commercial purposes without our written consent.',
  ),
  array(
    'title' => 'Third-Party Links',
    'body'  => 'This website may contain links to third-party sites, such as our social media profiles or review platforms. We are not responsible for the content or privacy practices of those sites.',
  ),
  array(
    'title' => 'Disclaimer & Limitation of Liability',
    'body'  => 'This website is provided on an "as is" and "as available" basis. While we work to keep the information accurate and the site available, we do not guarantee that the site will be error-free or uninterrupted. To the fullest extent permitted by law, CLI Construction is not liable for damages arising from the use of, or inability to use, this website.',
  ),
  array(
    'title' => 'Governing Law',
    'body'  => 'These Terms and Conditions are governed by the laws of the State of New Mexico, without regard to conflict of law principles.',
  ),
  array(
    'title' => 'Changes to These Terms',
    'body'  => 'We may update these Terms and Conditions from time to time. Changes will be posted on this page with an updated effective date, and continued use of the site constitutes acceptance of the updated terms.',
  ),
  array(
    'title' => 'Contact Us',
    'body'  => 'If you have questions about these Terms and Conditions, contact CLI Construction at (505) 518-1965 or office@cliconstructions.com.',
  ),
);
?>

<!-- ============ PAGE HERO ============ -->
<section class="cli-gradient cli-on-light">
  <div class="max-w-7xl mx-auto px-4 py-16 lg:py-20">
    <div class="max-w-3xl border-l-2 border-brand pl-6 lg:pl-10 cli-reveal-left is-visible">
      <h1 class="font-display font-extrabold text-ink leading-[1.05] tracking-tight text-[clamp(2rem,4.5vw,3rem)]">
        Terms &amp; Conditions
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
      These Terms and Conditions govern the use of the CLI Construction
      website. Please read them together with our
      <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="underline hover:text-brand-2">Privacy Policy</a>.
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