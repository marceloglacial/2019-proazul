<section class="section container home-content">
    <div class="row">
        <div class="col-12 col-xl-4 no-text">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-12">
                    <?php get_template_part('components/card-big'); ?>
                </div>
                <div class="col-12 col-lg-6 col-xl-12">
                    <?php get_template_part('components/card-big'); ?>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <?php 
                    $post_objects = get_field('conteudo-horizontal');

                    if( $post_objects ):
                        foreach( $post_objects as $post_object): 
                        set_query_var('post_id', $post_object->ID); 
                ?>
                            <div class="col-12 col-lg-4">
                                <?php get_template_part('components/card'); ?>
                            </div>
                <?php 
                        endforeach;
                    endif; 
                ?>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <?php get_template_part('components/news-list'); ?>
                </div>
                <div class="col-12 col-lg-6">
                    <?php get_template_part('components/photo-gallery'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
