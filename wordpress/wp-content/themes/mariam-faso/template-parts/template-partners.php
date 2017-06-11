<?php
/*
    Template Name: Partenaires
*/
get_header();
?>

<div class="partners">
    <h1 class="partners__title main-title"><?= __('Nos partenaires', 'mf'); ?></h1>
    <p class="partners__intro main-intro"><?= get_field('partnersIntro'); ?></p>
    <ul class="partners__list">
        <?php if(have_rows('partnersRepeater')):
            while(have_rows('partnersRepeater')): the_row();
        ?>
        <li class="partners__partner partner">
        <?php if(get_sub_field('partnerLink')): ?>
            <a href="<?= the_sub_field('partnerLink'); ?>" title="<?= str_replace(':partnerName', the_sub_field('partnerName'), __('Visiter le site web de notre partenaire :partnerName', 'mf')); ?>">
            <?php if(get_sub_field('partnerLogo')): ?>
            <?php $logo = get_sub_field('partnerLogo'); ?>
            <img width="200" height="auto" src="<?= $logo['url']; ?>" alt="<?= mf_get_image_alt('partnerLogo'); ?>">
            <span class="hidden"><?= the_sub_field('partnerName'); ?></span>
            <?php else: ?>
            <span class="partner__name"><?= the_sub_field('partnerName'); ?></span>
            <?php endif; ?>
            </a>
        <?php else: ?>
            <?php if(get_sub_field('partnerLogo')): ?>
            <?php $logo = get_sub_field('partnerLogo'); ?>
            <img width="200" height="auto" src="<?= $logo['url']; ?>" alt="<?= mf_get_image_alt('partnerLogo'); ?>">
            <span class="hidden"><?= the_sub_field('partnerName'); ?></span>
            <?php else: ?>
            <span class="partner__name"><?= the_sub_field('partnerName'); ?></span>
            <?php endif; ?>
        <?php endif; ?>
        </li>
        <?php endwhile; endif; ?>
    </ul>
</div>

<div class="moreAbout more">
    <p class="more__catchPhrase"><?= str_replace(':mariam-faso', '<strong class="more--strong">Mariam Faso</strong>', __('Qui est :mariam-faso&nbsp;?', 'mf')); ?></p>
    <a class="more__link" href="<?= mf_get_page_url('template-about.php'); ?>"><?= __('Découvrez notre ASBL', 'mf'); ?></a>
</div>

<?php get_template_part('parts/help'); ?>

<?php get_footer(); ?>
