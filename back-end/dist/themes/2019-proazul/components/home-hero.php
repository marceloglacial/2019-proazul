<?php 
    $image = get_field('imagem');

    if ($image) {
?>
<div class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo $image['url']; ?>')">
    <div class="hero-text container d-flex flex-column justify-content-center justify-content-lg-end align-items-end">
        <a href="<?php the_field('link'); ?>" class="hero-link">
            <h1 class="hero-title"><?php the_field('titulo'); ?></h1>
            <p class="hero-lead lead"><?php the_field('subtitulo'); ?></p>
        </a>
    </div>
</div>
<?php 
    }
?>
