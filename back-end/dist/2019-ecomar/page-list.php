<?php /* Template Name: Page List */ ?>
<?php get_header() ?>

<?php get_template_part('components/page-header'); ?>
<main class="container page page-category">
    <section class="category-list">
        <?php 
            // The Query
            query_posts( array ( 'category_name' => 'Notícias', 'posts_per_page' => -1 ) );

            // The Loop
        while ( have_posts() ) : the_post(); 
        ?>

        <?php get_template_part('components/page-list-item'); ?>

        <?php 
            endwhile;

            // Reset Query
            wp_reset_query();
        ?>
    </section>
</main>

<?php get_template_part('components/page-footer'); ?>

<?php get_footer() ?>
