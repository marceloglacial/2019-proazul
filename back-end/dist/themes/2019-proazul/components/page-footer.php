<footer class="page-footer">
    <div class="container">
        <div class="row">
        <?php get_template_part('components/page-footer-menu') ?>
            <div class="col-12 col-lg">
                <div class="page-footer-list-container page-footer-social d-flex">
                <?php if ($GLOBALS['cgv']['facebook']) { ?>
                    <div class="page-footer-social-item page-footer-social-item-facebook"><a href="<?php echo $GLOBALS['cgv']['facebook'] ?>" target="_blank">Facebook</a></div>
                <? } ?>
                <?php if ($GLOBALS['cgv']['twitter']) { ?>
                    <div class="page-footer-social-item page-footer-social-item-twitter"><a href="<?php echo $GLOBALS['cgv']['twitter'] ?>" target="_blank">Twitter</a></div>
                <? } ?>
                </div>

                <div class="page-footer-list-container page-footer-newsletter">
                    <h5 class="page-footer-newsletter-title">Receba nosso boletim informativo</h5>
                    <form class="form-inline">
                        <input class="form-control w-100" type="search" placeholder="Digite seu e-mail" aria-label="Digite seu e-mail">
                    </form>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <?php get_template_part('components/page-footer-address') ?>
</footer>
