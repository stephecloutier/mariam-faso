<?php
/*
    Template Name: Nous aider
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <div class="help">
        <h1 class="main-title help__title"><?= __('Nous aider', 'mf'); ?></h1>
        <div class="main-intro help__intro">
            <?= $fields['help-usIntro']; ?>
        </div>
        <div class="help__links">
            <a href="https://www.kbs-frb.be/en/Flows/Gift/Checkout?notice=L82338%20-%20Bastogne%20-%20Mariam%20Faso%20%28Burkina%20Faso%29&title=ASBL%20Mariam%20Faso%20%28Burkina%20Faso%29" class="help__button help__button--important" title="<?= __('Aller sur le site de la fondation Roi Beaudoin pour faire un don', 'mf'); ?>"><?= __('Faire un don', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-agenda.php'); ?>" class="help__button" title="<?= __('Aller sur la page des évènements', 'mf'); ?>"><?= __('Participer aux évènements', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="help__button" title="<?= __('Aller sur la page des projets', 'mf'); ?>"><?= __('Voir les projets', 'mf'); ?></a>
        </div>

        <div class="help__faq faq">
            <h2 class="second-title faq__title"><?= __('FAQ', 'mf'); ?></h2>
            <?php
                if(have_rows('help-usFaqRepeater')):
                    while(have_rows('help-usFaqRepeater')): the_row();
            ?>
            <div class="faq__qa">
                <span class="faq__question"><?= get_sub_field('help-usFaqQuestion'); ?></span>
                <p class="faq__answer"><?= get_sub_field('help-usFaqAnswer'); ?></p>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <span class="help__more"><?= __('Encore des questions&nbsp;?', 'mf'); ?></span>
        <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="help__button more__button" title="<?= __('Aller sur la page de contact','mf'); ?>"><?= __('Contactez-nous&nbsp;!', 'mf'); ?></a>
    </div>
</main>

<?php get_footer(); ?>
