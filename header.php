<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header">
  <nav class="nav-inner">
    <a href="<?php echo esc_url( home_url('/') ); ?>" class="site-logo">
      <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <polygon points="20,2 24,15 38,15 27,23 31,37 20,28 9,37 13,23 2,15 16,15"
          fill="none" stroke="#29c4b0" stroke-width="2" stroke-linejoin="round"/>
        <line x1="20" y1="2" x2="20" y2="28" stroke="#29c4b0" stroke-width="1.2" opacity="0.4"/>
      </svg>
      <div>
        <span>STARTECH <span class="logo-now">NOW</span></span>
        <span class="logo-sub">YOUR IDEA. OUR EXECUTION</span>
      </div>
    </a>

    <button class="hamburger" aria-label="Toggle menu" onclick="document.querySelector('.nav-menu').classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-menu" id="nav-menu">
      <li><a href="#services">Services</a></li>
      <li><a href="#vision">About</a></li>
      <li><a href="#geographies">Geographies</a></li>
      <li><a href="#clients">Clients</a></li>
      <li><a href="#contact" class="nav-cta">Contact Us</a></li>
    </ul>
  </nav>
</header>
