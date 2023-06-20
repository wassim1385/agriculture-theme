<?php
    get_header(); ?>
        <main class="container page section with-sidebar">
            <div class="page-content">
                <?php echo get_template_part( 'template-parts/blog', 'loop'); ?>
            </div>
            <div class="aside">
                <?php get_sidebar(); ?>
            </div>
        </main>
<?php get_footer(); ?>
