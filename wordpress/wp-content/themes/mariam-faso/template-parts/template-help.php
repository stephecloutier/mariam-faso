<?php
/*
    Template Name: Nous aider
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper help__introduction">
        <h1 class="main-title help__title"><?= __('Nous aider', 'mf'); ?></h1>
        <div class="main-intro help__intro">
            <?= $fields['help-usIntro']; ?>
        </div>
        <a href="<?= $fields['help-usDonationLink']; ?>" class="help__button help__button--important" title="<?= __('Aller sur un site externe pour faire un don à l\'asbl Mariam Faso', 'mf'); ?>"><?= __('Faire un don', 'mf'); ?></a>
    </div>

    <div class="help__faq faq__wrapper">
        <h2 class="second-title faq__title"><?= __('FAQ', 'mf'); ?></h2>
        <?php
            if(have_rows('help-usFaqRepeater')):
                while(have_rows('help-usFaqRepeater')): the_row();
        ?>
        <div class="faq__qa">
            <p class="faq__question"><?= get_sub_field('help-usFaqQuestion'); ?></p>
            <div class="faq__answer">
                <?= get_sub_field('help-usFaqAnswer'); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>

    <div class="learn-more moreAll">
        <div class="learn-more__wrapper">
            <p class="help__more"><?= str_replace(':questions', '<span class="learn-more--important">questions</span>', __('Encore des :questions&nbsp;?', 'mf')); ?></p>
            <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="help__button more__button more__link" title="<?= __('Aller sur la page de contact','mf'); ?>"><?= __('Contactez-nous&nbsp;!', 'mf'); ?></a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
