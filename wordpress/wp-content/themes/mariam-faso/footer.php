        <footer class="footer">
            <div class="footer__wrapper">
                <div class="footer__columns">
                    <div class="footer__questions footer__column">
                        <span class="footer__title"><?= __('Des questions&nbsp;?', 'mf'); ?></span>
                        <p class="footer__address">
                            <span class="footer__address--line">Mariam Faso <span class="footer--important">ASBL</span></span>
                            <span class="footer__address--line">Rue de la gare, 15</span>
                            <span class="footer__address--line">6600 Bastogne</span>
                            <a href="mailto:info@mariam-faso.be" class="footer__mail" title="<?= __('Envoyer un mail à Mariam Faso', 'mf'); ?>">info@mariam-faso.be</a>
                        </p>

                        <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="footer__button footer__button--contact"><?= __('Contactez-nous', 'mf'); ?></a>
                    </div>
                    <div class="footer__help footer__column">
                        <span class="footer__title"><?= __('Aidez-nous', 'mf'); ?></span>
                        <p class="footer__desc"><?= str_replace(':amount', '<span class="footer--important">40&nbsp;€</span>', __('Les dons à partir de :amount effectués depuis la Belgique sont fiscalement déductibles.', 'mf')); ?></p>

                        <a href="<?= mf_get_page_url('template-help.php'); ?>" class="footer__button footer__button--donate"><?= __('Faire un don', 'mf'); ?></a>
                    </div>
                    <div class="footer__follow footer__column">
                        <span class="footer__title"><?= __('Suivez-nous', 'mf'); ?></span>
                        <p class="footer__desc"><?= str_replace(':facebook', '<span class="footer__desc--strong"><a class="footer__link" href="https://www.facebook.com/MariamFaso/">Facebook</a></span>', __('N’hésitez pas à consulter notre page :facebook pour être au courant des évènements à venir&nbsp;!', 'mf')); ?></p>

                        <div class="footer__social">
                            <a href="https://www.facebook.com/MariamFaso/" class="footer__button--social footer__facebook">Facebook</a>
                            <a href="#" class="footer__button--social footer__youtube">Youtube</a>
                        </div>
                        <div class="footer__copyright">
                            <span class="footer__copyright"><?= __('Site web réalisé par', 'mf'); ?> <a href="http://stephanie.cloutier.pro" class="footer__copyright--link">Stéphanie Cloutier</a></span>
                        </div>

                    </div>
                </div>


            </div>
        </footer>
        <script src="wp-content/themes/mariam-faso/assets/js/script.js"></script>
    </body>
</html>
<!-- <?php //if(is_user_logged_in()) {wp_footer();}; ?> -->
