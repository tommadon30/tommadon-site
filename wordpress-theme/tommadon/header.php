<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <nav class="nav-container">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      <span class="logo-name">Tom Madon</span>
      <span class="logo-title">Pl. Fin., IQPF</span>
    </a>

    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'nav-links',
      'fallback_cb'    => function () {
          echo '<ul class="nav-links">
            <li><a href="/">Accueil</a></li>
            <li><a href="/planification-retraite/">Planification de la retraite</a></li>
            <li><a href="/placements/">Placements</a></li>
            <li><a href="/gestion-patrimoine/">Gestion de patrimoine</a></li>
            <li><a href="/remuneration/">Rémunération</a></li>
            <li><a href="/a-propos/">À propos</a></li>
            <li class="menu-item-cta"><a href="/contact/">Prendre contact</a></li>
          </ul>';
      },
    ]);
    ?>

    <button class="nav-hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>
