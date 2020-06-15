<?php get_header(); ?>

<!-- template: single.php -->

<main>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h1><?php the_title(); ?></h1>

        <?php get_template_part('includes/section','blogcontent'); ?>

        <?php wp_link_pages(); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
