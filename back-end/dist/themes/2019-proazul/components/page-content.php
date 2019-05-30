<main class="container page page-single">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <?php get_template_part('components/breadcrumb'); ?>
        <article class="page-article">
        <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p class="page-timestamp"><time><?php the_date(); ?></time></p>
        </header>
        <section class="page-content">
            <?php the_content() ?>
            </section>
        </article>
    <?php endwhile; else: ?>
        <article class="page-article">
            <header class="page-header">
                <h1 class="page-title">Desculpe, não encontramos a sua página..</h1>
            </header>
        </article>
    <?php endif; ?>
</main>
