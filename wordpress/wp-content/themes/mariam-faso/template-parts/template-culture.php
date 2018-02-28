<?php
/*
    Template Name: Culture
*/

get_header();
?>

<?php $fields = get_fields(); ?>

<main class="main">
    <div class="single-landing culture__landing">
        <div class="single-landing--color">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <div class="single-landing__content">
                <h1 class="single-landing__title culture__title"><?= mf_remove_p_tags($fields['cultureTitle']); ?></h1>
                <div class="single-landing__intro culture__intro">
                    <?= $fields['cultureIntro']; ?>
                </div>
                <a href="<?= mf_get_page_url('template-travels.php'); ?>" class="single-landing__button culture__button"><?= __('Voyage avec nous', 'mf'); ?></a>
                <?php if($fields['cultureImg']): ?>
                <style>
                    .culture__landing {
                        background-image: url('<?= $fields['cultureImg']['url']; ?>');
                    }
                </style>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php $i = 0; $j = 0; $q = 0; ?>
    <?php if(have_rows('cultureRepeater')):
        while(have_rows('cultureRepeater')): the_row();
        $images = get_sub_field('cultureImgs');
    ?>
    <article class="culture__article">
        <div class="culture__wrapper">
            <div class="culture__content">
                <h2 class="culture__subtitle second-title"><?= get_sub_field('cultureSubtitle'); ?></h2>
                <div class="culture__text">
                    <?= get_sub_field('cultureTextualContent'); ?>
                </div>
            </div>

            <div class="culture__imgs--wrapper">
                <?php foreach($images as $image): ?>
                <div class="culture__img--wrapper">
                    <img width="400" height="auto" src="<?= $image['sizes']['500']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="culture__img">
                </div>
                <?php endforeach; ?>
            </div>
                <?php if(get_sub_field('cultureVideo')): ?>
            <div class="culture__video--wrapper">
                <?= get_sub_field('cultureVideo'); ?>
            </div>
                <?php endif; ?>
        </div>
    </article>

        <?php if($i % 3 === 1): ?>
            <?php if($fields['cultureQuoteRepeater'][$q]['cultureQuote']): ?>
    <blockquote class="culture__quote quote">
        <div class="quote__wrapper">
            <div class="quote__content">
                    <?= $fields['cultureQuoteRepeater'][$q]['cultureQuote']; ?>
            </div>
            <?php if($fields['cultureQuoteRepeater'][$q]['cultureCite']): ?>
            <span class="quote__author">- <?= $fields['cultureQuoteRepeater'][$q]['cultureCite']; ?></span>
            <?php endif; ?>
        </div>
    </blockquote>
            <?php endif; ?>
        <?php endif; ?>
    <?php $i++; ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
