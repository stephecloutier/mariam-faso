<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__questions">
            <span class="footer__title"><?= __('Des questions&nbsp;?', 'mf'); ?></span>
            <p class="footer__address">
                <span>Mariam Faso ASBL</span>
                <span>Rue de la gare, 15</span>
                <span>6600 Bastogne</span>
            </p>

            <a href="mailto:info@mariam-faso.be" class="footer__mail">info@mariam-faso.be</a>
            <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="footer__button--contact"><?= __('Contactez-nous', 'mf'); ?></a>
        </div>
        <div class="footer__help">
            <span class="footer__title"><?= __('Aidez-nous', 'mf'); ?></span>
            <p class="footer__desc"><?= str_replace(':amount', '<span class="footer__desc--strong">40&nbsp;€</span>', __('Les dons à partir de :amount effectués depuis la Belgique sont fiscalement déductibles.', 'mf')); ?></p>

            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="footer__button--donate"><?= __('Faire un don', 'mf'); ?></a>
        </div>
        <div class="footer__follow">
            <span class="footer__title"><?= __('Suivez-nous', 'mf'); ?></span>
            <p class="footer__desc"><?= str_replace(':facebook', '<span class="footer__desc--strong"><a href="#">Facebook</a></span>', __('N’hésitez pas à consulter notre page :facebook pour être au courant des évènements à venir&nbsp;!', 'mf')); ?></p>

            <a href="#" class="footer__button--social">Facebook</a>
            <a href="#" class="footer__button--social">Youtube</a>
        </div>

        <span class="footer__copyright"><?= __('Site web réalisé par', 'mf'); ?> <a href="www.behance.net/stephecloutier" class="footer__copyright--link">Stéphanie Cloutier</a></span>
    </div>
</footer>
<!-- <?php //if(is_user_logged_in()) {wp_footer();}; ?> -->
