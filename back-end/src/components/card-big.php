<div class="card card-big">
  <a href="<?php echo get_permalink($post_id); ?>" class="card-link">
      <div class="card-img">
      <?php if (get_the_post_thumbnail($post_id)) { ?>
        <img src="<?php echo  get_the_post_thumbnail_url($post_id); ?>" alt="" class="card-img-top">
      <?php } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png" alt="" class="card-img-top">
      <?php } ?>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo mb_strimwidth(get_the_title($post_id), 0, 40, '...'); ?></h5>
      </div>    
  </a>
</div>
