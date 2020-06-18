<?php get_header(); ?>

<!-- template: archive-about.php -->

<h1>About Us</h1>
<?php get_template_part('includes/section','about'); ?>

<!-- Pagination Method 1 -->
<?php previous_posts_link();  ?>
<?php next_posts_link();  ?>

<?php get_footer(); ?>
