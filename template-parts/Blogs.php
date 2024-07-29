<div class="main">
    <?php

    if (have_posts()) {
        $i=0;
        while (have_posts()) {
         
            echo $i;
            echo "<br>";
            the_post();
            // the_title();
       
          $i++;
        }
    }

    ?>
</div>