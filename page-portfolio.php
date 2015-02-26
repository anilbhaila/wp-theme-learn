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
        <!-- column-container -->
        <div class="column-container clearfix">
            <!-- title-column -->
            <div class="title-column">
                <h2><?php the_title();?></h2>
            </div><!-- /title-column -->

            <!-- text-column -->
            <div class="text-column">
                <article class="page">
                    <?php the_content(); ?>
                </article>
            </div><!-- /text-column -->
        </div><!-- /column-container -->



    <?php
    endwhile;

else:
    echo '<p>No content found</p>';

endif;
get_footer();
?>