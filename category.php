<?php
    get_header(); ?>
        <main class="container page section with-sidebar">
            <div class="page-content">
                <?php $category = get_queried_object(); ?>
                <h2 class="text-center primary-text">
                    Catégorie: <?php echo $category->name ?>
                </h2>
                <?php echo get_template_part( 'template-parts/blog', 'loop'); ?>
            </div>
            <div class="aside">
                <?php get_sidebar();
                ?>
            </div>
        </main>
<?php get_footer(); ?>
