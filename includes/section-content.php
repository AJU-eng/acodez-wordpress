<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <div style="display:flex; justify-content:center;">

            <div class="blog-div">

                <h2><?php the_title() ?></h2>
                <?php the_excerpt() ?>
                <a href="<?php the_permalink() ?>"><button class="Read-more">Read more</button></a>
                <?php echo "<br/> <br/>" ?>
            </div>
        </div>



    <?php endwhile; endif; ?>