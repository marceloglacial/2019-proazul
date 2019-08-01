<section class="category-list-item row">
    <div class="category-list-item-header col-12 col-lg-4">
        <figure class="category-list-item-image">
            <img src="<?php echo catch_that_image($post_id); ?>" alt="">
        </figure>
    </div>
    <div class="category-list-item-lead col-12 col-lg">
        <div class="category-list-item-tags container-fluid">
            <ul class="category-list-item-tags-list row">
                <?php 
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        foreach( $post_tags as $tag ) { 
                ?>

                <li class="category-list-item-tags-list-item col"><?php echo $tag->name; ?></li>
                
                <?php 
                        }
                    }
                ?>
                </ul>
        </div>
        <h3 class="category-list-item-title"><?php the_title() ?></h3>
        <p class="category-list-item-description"><?php echo mb_strimwidth(get_the_excerpt($post_id), 0, 370, ' ...'); ?></p>
        <p>
            <a class="category-list-item-link" href="<?php the_permalink() ?>">Leia mais</a>
        </p>
    </div>
</section>
