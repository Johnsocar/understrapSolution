<?php
/**
 * Games setup
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Get the three latests Games
$games = new WP_Query([
    'post_type'     =>      'mbt_game',
    'post_per_page' =>      3,
]);

if ($games->have_posts() ) {
//great success

?>

<div class="wrapper" id="wrapper-games">
    <div class="container">
        <div class="row">
            <?php while ($games->have_posts()) : $games->the_post(); ?>
    
<!-- For each post, include this template part -->
    <?php get_template_part('loop-templates/content', 'game'); ?>

        
        <?php endwhile; ?>
   
            <?php //Dont forget to reser postdata
                wp_reset_postdata();
        ?>
        </div>
    </div>
</div>

<?php } ?>