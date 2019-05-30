<?php
    $term = get_field('categoria-lista');
?>
<div class="news-list">
    <h2 class="news-list-title"><?php echo $term->name; ?></h2>
    <ul class="news-list-items">
        <?php 
            $args = array(
                'category_name' => $term->name,
                'posts_per_page' => 5
            );
            $query = new WP_Query( $args );
        ?>
        <?php while($query->have_posts()) : $query->the_post(); ?>
        <li class="news-list-item"><a href="<?php the_permalink(); ?>" class="news-list-item-link"><span class="news-list-item-date"><?php echo get_the_date('d/m/Y'); ?></span> - <?php the_title(); ?></a></li>
        <?php endwhile; ?> 
    </ul>
    <div class="news-list-more">
    
        <a href="<?php echo get_term_link( $term ) ?>" class="news-list-more-link">+ Mais</a>
    </div>

    <?php wp_reset_postdata(); ?>
</div>
