<?php get_header(); ?>
    <main class="container page section no-sidebar">
    <?php get_template_part('template-parts/page','loop'); ?>
            <?php
                if(is_page('a-propos')):
                    agriprod_team();
                endif;
                if(is_page('nos-services')):
                    agriprod_services_list();
                endif;
            ?>
    </main>

<?php get_footer(); ?>