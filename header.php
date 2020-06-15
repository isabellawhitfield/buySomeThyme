<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?><!-- notice the wordpress admin bar on top-->
  </head>
  <body>
    <header class="header-background">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="<?php print get_home_url(); ?>">
            <!-- <img class="site-logo" src="<?php bloginfo('stylesheet_directory') ?>/images/buySomeThyme-logo.png" alt="Buy Some Thyme logo"> -->
            <?php bloginfo('name') ?>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
          wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav mr-auto',
            'container' => 'div',
            'walker' => new WP_Bootstrap_Navwalker(),
            )
          );
          ?>

          <div class="header__cart">
            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            $count = WC()->cart->cart_contents_count;
            ?>
              <a class="header__cart__link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                <span class="dashicons dashicons-cart"></span>&nbsp;
                <span class="header__cart__count"><?php echo esc_html( $count ); ?></span>
              </a>
            <?php 
            } 
            ?>
          </div>

        </div>
      </nav>
    </header>

    <div class="container pb-3 site-wrapper">
      <main>

