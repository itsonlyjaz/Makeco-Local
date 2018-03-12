<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="universal-nav">
  
  <div class="nav-level-1">
    <nav class="container">

      <ul class="nav-level-1-nav">
        <li class="nav-zine">
          <a href="https://makezine.com/">
            <span title="Latest">Latest</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
        <li class="nav-make">
          <a href="http://www.make.co/">
            <span title="Membership">Membership</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
        <li class="nav-shed">
          <a href="https://www.makershed.com/">
            <span title="Shop">Shop</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
        <li class="nav-share">
          <a href="https://makershare.com/learning/">
            <span title="Learn">Learn</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
        <li class="nav-share-p">
          <a href="https://makershare.com/makers">
            <span title="Portfolios">Portfolios</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
        <li class="nav-faire">
          <a href="https://makerfaire.com/">
            <span title="Events">Events</span>
          </a>
          <div class="nav-level-2-arrow"></div>
        </li>
      </ul>

      <a href="https://makezine.com/" class="navbar-brand">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/make_logo.svg" class="img-responsive" alt="Make: brand logo" />
      </a>

      <ul class="nav-level-1-auth">
        <li><a href="#">Login</a></li>
        <li><span>|</span></li>
        <li><a href="#">Signup</a></li>
      </ul>

    </nav>
  </div><!-- .nav-level-1 -->

  <div class="nav-level-2">
    <div class="container">
        <?php
          // wp_nav_menu( array(
          //     'menu'              => 'primary',
          //     'theme_location'    => 'primary',
          //     'depth'             => 1,
          //     'container'         => '',
          //     'container_class'   => '',
          //     'menu_class'        => 'nav navbar-nav',
          //     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          //     'walker'            => new wp_bootstrap_navwalker())
          // );
        ?>
    </div>
  </div><!-- .nav-level-2 -->

  <div id="nav-flyout">

    <?php get_template_part('mega-menu-remove-this-when-made-exterenal'); ?>
  
  </div>

  <div class="nav-hamburger">
    <div class="container">
      <div id="hamburger-click-event">
        <div id="hamburger-icon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <img id="hamburger-makey" src="<?php echo get_stylesheet_directory_uri(); ?>/img/makey_logo.svg" alt="Makey roboto logo" />
      </div>
    </div>
  </div><!-- .nav-hamburger -->

</header>
<div class="nav-flyout-underlay"></div>
