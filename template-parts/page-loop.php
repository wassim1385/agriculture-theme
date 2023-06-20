<?php while(have_posts()) : the_post(); ?>
    <h1 class="text-center text-primary">
        <?php the_title(); ?>
    </h1>
    <?php if(has_post_thumbnail()) : the_post_thumbnail('post'/* Taille du thumbnail */, /* juste pour ajouter une classe à l'image */array('class' => 'featured-image'));
    endif;
    ?>
    <?php
        //Check the current post type
        if(get_post_type() === 'agriprod_services'): ?>
            <div>
            <?php the_field('presentation'); ?>
            </div>
        <?php else : ?>
            <div class="text-center">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
<?php endwhile; ?>