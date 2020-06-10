<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="container-fluid p-0">
        <div class="header-image" style="background-image:url(<?php echo get_header_image(); ?>);">

        </div>
    </div>
<?php endif; ?>
<div class="header-text">
  <h1 class=""> <?php echo get_theme_mod('kiwanis-title-text'); ?></h1>
</div>

<div class="home-page">
  <h1 class="mt-5 header-text"> <?php the_title(); ?>   </h1>
  <?php get_template_part('includes/section','content'); ?>
</div>


<?php get_footer(); ?>
