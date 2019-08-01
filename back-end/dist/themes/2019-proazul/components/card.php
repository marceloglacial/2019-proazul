
<div class="card">
  <a href="<?php echo get_permalink($post_id); ?>" class="card-link">
      <div class="card-img">
        <img src="<?php echo catch_that_image($post_id); ?>" alt="" class="card-img-top">
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo mb_strimwidth(get_the_title($post_id), 0, 40, '...'); ?></h5>
		    <p class="card-text"><?php echo mb_strimwidth(get_excerpt_by_id($post_id), 0, 65, '...'); ?></p>
      </div>    
  </a>
</div>
