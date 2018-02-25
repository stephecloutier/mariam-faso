<?php
/*
    Template Name: À propos
*/
get_header();
?>
<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <?php $fields = get_fields(); ?>
    <div class="about__introduction introduction__wrapper">
        <h1 class="introduction__title main-title"><?= __('L’ASBL Mariam Faso', 'mf'); ?></h1>
        <div class="introduction__content main-intro">
            <?= $fields['aboutIntroduction']; ?>
        </div>
        <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="introduction__link"><?= __('Voir nos projets', 'mf'); ?></a>
    </div>

    <blockquote 
        class="about__quote quote"
        <?php if($fields['aboutQuoteImg']): ?>
        style="background-image: url('<?= $fields['aboutQuoteImg']['url']; ?>')"
        <?php endif; ?>

    >
        <div class="quote__wrapper">
            <div class="quote__content">
                <?= $fields['aboutQuote']; ?>
            </div>
            <?php if($fields['aboutQuoteCite']): ?>
            <span class="quote__author"><?= $fields['aboutQuoteCite']; ?></span>
            <?php endif; ?>
        </div>
    </blockquote>

    <?php if(have_rows('aboutContentRepeater')):
        while(have_rows('aboutContentRepeater')): the_row();
    ?>
    <div class="about__article article">
        <article class="article__wrapper">
            <div class="article__content">
                <h2 class="second-title"><?= the_sub_field('aboutContentTitle'); ?></h2>
                <?= the_sub_field('aboutContentP') ?>
            </div>
            <?php if(get_sub_field('aboutContentImg')): ?>
                <?php $image = get_sub_field('aboutContentImg'); ?>
            <div class="article__img--wrapper">
                <img class="article__img" width="500" height="auto" src="<?= $image['sizes']['500']; ?>" alt="<?= mf_get_image_alt('aboutContentImg'); ?>">
            </div>

            <?php endif; ?>
        </article>
    </div>
    <?php endwhile; endif; ?>


    <?php get_template_part('parts/help'); ?>
</main>

<?php get_footer(); ?>
