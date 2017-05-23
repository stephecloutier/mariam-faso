<footer class="footer">
    <div class="footer__questions">
        <span class="footer__title">Des questions&nbsp;?</span>
        <p class="footer__address">Mariam Faso ASBL</p>
        <p class="footer__address">Rue de la gare, 15</p>
        <p class="footer__address">6600 Bastogne</p>

        <a href="mailto:info@mariam-faso.be" class="footer__mail">info@mariam-faso.be</a>

        <a href="<?php mf_get_page_url('template-contact'); ?>" class="footer__button--contact">Contactez-nous</a>
    </div>
    <div class="footer__help">
        <span class="footer__title">Aidez-nous</span>
        <p class="footer__desc">Les dons à partir de <span class="footer__desc--strong">40&nbsp;€</span> effectués depuis la Belgique sont fiscalement déductibles.</p>

        <a href="<?php mf_get_page_url('template-help'); ?>" class="footer__button--donate">Faire un don</a>
    </div>
    <div class="footer__follow">
        <span class="footer__title">Suivez-nous</span>
        <p class="footer__desc">N'hésitez pas à consulter notre page <span class="footer__desc--strong">Facebook</span> pour être au courant des évènements à venir&nbsp;!</p>

        <a href="#" class="footer__button--social">Facebook</a>
        <a href="#" class="footer__button--social">Youtube</a>
    </div>

    <span class="footer__copyright">Site web réalisé par <a href="www.behance.net/stephecloutier" class="footer__copyright--link">Stéphanie Cloutier</a></span>
</footer>
<?php if(is_user_logged_in()) {wp_footer();}; ?>
