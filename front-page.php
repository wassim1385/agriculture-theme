<?php
    get_header('front');

    while(have_posts()) : the_post(); ?>
        <section class="welcome section text-center">
            <h2 class="text-primary"><?php the_field('welcome_tittle'); ?></h2>
            <p><?php the_field('welcome_description'); ?></p>
        </section>
        <section class="section grey">
            <?php agriprod_team(); ?>
        </section>
        <section>
            <div class="container section">
                <h2 class="text-primary text-center">Nos services</h2>
                <?php agriprod_services_list(2); ?>
                <div class="button-container">
                    <a class="button" href="<?php echo get_permalink(get_page_by_title('Nos Services')); ?>">Tous nos services</a>
                </div>
            </div>
        </section>

    <?php endwhile;

    get_footer();