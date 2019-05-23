<div class="card card-big">
  <a href="<?php echo get_permalink($post_id); ?>" class="card-link">
      <div class="card-img">
        <img src="<?php echo catch_that_image($post_id); ?>" alt="" class="card-img-top">
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo mb_strimwidth(get_the_title($post_id), 0, 40, '...'); ?></h5>
      </div>    
  </a>
</div>
