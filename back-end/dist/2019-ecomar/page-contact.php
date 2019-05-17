<?php /* Template Name: Contact Page */ ?>

<?php get_header() ?>

<?php get_template_part('components/page-header'); ?>
<main class="container page page-contact">
    <?php get_template_part('components/breadcrumb'); ?>
    <article class="page-article">
        <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <section class="page-content">
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Seu nome completo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTel" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputTel" placeholder="Seu número de telefone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col text-sm-right">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>

        </section>
    </article>
</main>
<?php get_template_part('components/page-footer'); ?>

<?php get_footer() ?>
