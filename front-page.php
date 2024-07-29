<?php get_header(); ?>

<div>
   <!-- <h1><?php the_title(); ?></h1> -->
   <?php get_template_part('includes/section-content') ?>
   <div style="display: flex; justify-content:center;">

      <div class="">

         <?php previous_posts_link() ?>
         <?php next_posts_link() ?>
      </div>
   </div>
</div>