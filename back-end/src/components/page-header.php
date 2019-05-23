<header class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="page-header-brand col-auto">
                <a class="page-header-logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-logo.svg" alt=""></a>
                <h1 class="page-header-title"><?php echo get_bloginfo( 'name' ); ?></h1>
            </div>
            <div class="col d-none d-md-none d-lg-block">
                <p class="page-header-description"><?php echo get_bloginfo( 'description' ); ?></p>
            </div>
            <div class="page-header-search col-2 d-none d-md-none d-lg-block">
            <?php get_template_part('components/search-form'); ?>
            </div>
            <?php if (get_field('facebook')) { ?>
            <div class="page-header-share col-auto d-none d-md-none d-lg-block">
                <a href="<?php echo get_field('facebook') ?>" target="_blank"><i class="icon icon-facebook"></i></a>
            </div>
            <? } ?>
        </div>
    </div>
</header>
<?php get_template_part('components/navbar'); ?>
