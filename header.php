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
            <img class="site-logo" src="<?php bloginfo('stylesheet_directory') ?>/images/kiwanis-logo.png" alt="Kiwanis logo">
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
        </div>
      </nav>
    </header>

    <div class="container py-3 site-wrapper">
      <main>

