<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php 
            if ($post->post_parent) {
            $parent_title = get_the_title($post->post_parent); 
        ?>
            <li class="breadcrumb-item active"><?php echo $parent_title;?></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        <?php
            }
        ?>
    </ol>
</nav>
