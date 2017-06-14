<?php
/*
    Template Name: Culture
*/

get_header();
?>

<?php $fields = get_fields(); ?>

<main class="main">
    <div class="culture__landing">
        <ul class="breadcrumb">
        <?php mf_display_breadcrumb(); ?>
        </ul>
        <h1 class="landing-title culture__title"><?= mf_remove_p_tags($fields['cultureTitle']); ?></h1>
        <div class="landing-intro culture__intro">
            <?= $fields['cultureIntro']; ?>
        </div>
        <a href="<?= mf_get_page_url('template-travels.php'); ?>" class="landing-button culture__button"><?= __('Voyage avec nous', 'mf'); ?></a>
    </div>
    <?php $i = 0; $j = 0; $q = 0; ?>
    <?php if(have_rows('cultureRepeater')):
        while(have_rows('cultureRepeater')): the_row();
        $images = get_sub_field('cultureImgs');
    ?>
    <article class="culture__article">
        <h2 class="culture__subtitle second-title"><?= get_sub_field('cultureSubtitle'); ?></h2>
        <div class="culture__text">
            <?= get_sub_field('cultureTextualContent'); ?>
        </div>
        <div class="culture__imgWrapper">
            <?php foreach($images as $image): ?>
        <img width="400" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="culture__img">
            <?php endforeach; ?>
        </div>
            <?php if(get_sub_field('cultureVideo')): ?>
        <div class="culture__videoWrapper">
            <?= get_sub_field('cultureVideo'); ?>
        </div>
            <?php endif; ?>
    </article>

        <?php if($i % 3 === 1): ?>
            <?php if($fields['cultureQuoteRepeater'][$q]['cultureQuote']): ?>
    <div class="culture__quoteWrapper">
        <blockquote class="culture__quote quote">
            <?= $fields['cultureQuoteRepeater'][$q]['cultureQuote']; ?>
            <?php if($fields['cultureQuoteRepeater'][$q]['cultureCite']): ?>
            <span class="quote__author">- <?= $fields['cultureQuoteRepeater'][$q]['cultureCite']; ?></span>
            <?php endif; ?>
        </blockquote>
    </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php $i++; ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
