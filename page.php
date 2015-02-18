<?php
/**
 * Created by PhpStorm.
 * User: Anil Bhaila
 * Date: 2/17/15
 * Time: 1:06 PM
 */

get_header();

if (have_posts()):
    while (have_posts()): the_post(); ?>
        <article class="page">
            <h2> <?php the_title(); ?></h2>

            <?php the_content(); ?>
        </article>
    <?php
    endwhile;

else:
    echo '<p>No content found</p>';

endif;
get_footer();
?>