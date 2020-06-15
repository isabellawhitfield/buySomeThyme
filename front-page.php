<?php get_header(); ?>

<!-- template: front-page.php -->


<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
<!-- Row, when sidebar is active -->
<div class="row">
  <div class="col-md-9">
<?php else : ?>
<!-- Just regular divs, when sidebar is not active -->
<div>
  <div>
<?php endif; ?>
    <!-- Header image -->
    <?php if(has_header_image()): ?>
        <div class="p-0">
            <div class="header-image" style="background-image:url(<?php echo get_header_image(); ?>);"></div>
        </div>
    <?php endif; ?>

    <!-- Page content -->
    <div class="home-page">
      <?php get_template_part('includes/section','content'); ?>
    </div>
  </div>

  <!-- Sidebar -->
  <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <div class="col-md-3 main-sidebar">
      <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </div>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
