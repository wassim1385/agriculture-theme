<?php get_header(); ?>
    <main class="container page section no-sidebar">
        <?php get_template_part('template-parts/page','loop');
        /* Team section */ ?>
        <?php agriprod_team(); ?>
    </main>

<?php get_footer(); ?>