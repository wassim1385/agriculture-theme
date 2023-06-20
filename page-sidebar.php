<?php
/*
* Template Name: Page avec Sidebar
*/
get_header(); ?>
    <main class="container page section with-sidebar">
        <div class="page-content">
            <?php get_template_part('template-parts/page','loop'); ?>
            <?php
                if(is_page('a-propos')):
                    agriprod_team();
                endif;
                if(is_page('nos-services')):
                    agriprod_services_list();
                endif;
            ?>
        </div>
        <?php get_sidebar(); ?>
    </main>

<?php get_footer(); ?>