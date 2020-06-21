<div class="">
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
  ?>
    <div class="card mb-3">
      <div class="card-body">
        <h2 class="card-title h3 mb-4"> <?php the_title(); ?>   </h2>
        <div class="card-text">
          <?php
          the_excerpt();
          ?>

          <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more</a>
        </div>
      </div>

    </div>


  <?php endwhile;
 else:
endif;

?>
</div>
