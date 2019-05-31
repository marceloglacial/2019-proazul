<?php get_header() ?>

<?php get_template_part('components/page-header'); ?>
<main class="container page page-category">
    <section class="category-list">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post();  ?>
                <?php get_template_part('components/page-list-item'); ?>
        <?php endwhile; ?>

        <div class="category-list-nav">
            <div class="category-list-nav-item nav-next"><?php next_posts_link( '&#8592; Mais antigos' ); ?></div>
            <div class="category-list-nav-item nav-previous"><?php previous_posts_link( 'Mais recentes &#8594; ' ); ?></div>
        </div>

        <?php else : ?>
            <p><?php _e('Desculpe, não encontramos a sua página..'); ?></p>
        <?php endif; ?>
    </section>
</main>

<?php get_template_part('components/page-footer'); ?>

<?php get_footer() ?>
