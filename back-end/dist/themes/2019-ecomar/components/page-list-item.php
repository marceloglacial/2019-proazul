<section class="category-list-item row">
    <div class="category-list-item-header col-12 col-lg-4">
        <?php if (get_the_post_thumbnail($post_id)) { ?>
            <?php the_post_thumbnail(); ?>
        <?php } else { ?>
            <img src="<?php echo catch_that_image($post_id); ?>" alt="">
        <?php } ?>
    </div>
    <div class="category-list-item-lead col-12 col-lg">
        <h3 class="category-list-item-title"><?php the_title() ?></h3>
        <p class="category-list-item-description"><?php echo mb_strimwidth(get_the_excerpt($post_id), 0, 370, ' ...'); ?></p>
        <p>
            <a class="category-list-item-link" href="<?php the_permalink() ?>">Leia mais</a>
        </p>
    </div>
</section>
