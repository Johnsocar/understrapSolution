<?php
/**
 * Hero setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$portfolio_items = new WP_Query([
    'post_type'         =>  'us_portfolio',
    'post_per_page'     =>  -1,
]);

if ($portfolio_items->have_posts())  :

    ?>

        <div class="wrapper" id="wrapper-portfolio-items">
            <div class="container">
               <div class="row">
                   <!-- Loop over the portfolio items -->
                   <?php while($portfolio_items->have_posts()) : ?>
                  <?php $portfolio_items->the_post(); ?>

                 <?php  get_template_part('loop-templates/content-us_portfolio');
                   ?>
                   <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>

               </div>
            </div>
        </div>
                   <?php endif; ?>