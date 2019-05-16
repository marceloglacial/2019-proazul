<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php 
            if ($post->post_parent) {
            $parent_title = get_the_title($post->post_parent); 
        ?>
            <li class="breadcrumb-item"><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title;?></a></li>
        <?php
            }
        ?>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
</nav>
