<div class="wrapper-portfolio col-md-6 col-lg-4">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
    
    <?php the_excerpt(); ?>

    <?php $link = get_post_meta($post->ID, 'Link');
    
    
    if($link) : ?>
    <a href="<?php echo $link[0]; ?>">Link to this project</a>
    <?php endif  ?>
    <?php var_dump($portfolio_items); ?>
</div>