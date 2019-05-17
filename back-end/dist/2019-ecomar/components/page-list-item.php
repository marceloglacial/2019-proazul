<section class="category-list-item row">
    <?php if ( get_the_post_thumbnail( $post_id ) != '' ) { ?>
        <div class="category-list-item-header col-12 col-lg-4">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php } ?>        
    <div class="category-list-item-lead col-12 col-lg">
        <!-- <div class="category-list-item-tags container-fluid">
            <ul class="category-list-item-tags-list row">
                <li class="category-list-item-tags-list-item col">Tag</li>
                <li class="category-list-item-tags-list-item col">Tag</li>
                <li class="category-list-item-tags-list-item col">Tag</li>
            </ul>
        </div> -->
        <h3 class="category-list-item-title"><?php the_title() ?></h3>
        <p class="category-list-item-description"><?php the_excerpt('...') ?></p>
        <p>
            <a class="category-list-item-link" href="<?php the_permalink() ?>">Leia mais</a>
        </p>
    </div>
</section>
