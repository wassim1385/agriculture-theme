<?php
    get_header(); ?>
        <main class="container page section with-sidebar">
            <div class="page-content">
                <?php
                    $author = get_queried_object();
                ?>
                <h2 class="text-center primary-text">Auteur: <?php echo $author->data->display_name; ?></h2>
                <?php get_template_part('template-parts/blog','loop'); ?>
            </div>
            <div class="aside">
                <?php get_sidebar(); ?>
            </div>
        </main>

<?php get_footer(); ?>
