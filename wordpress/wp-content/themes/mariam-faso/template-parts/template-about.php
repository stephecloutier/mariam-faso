<?php
/*
    Template Name: À propos
*/
get_header();
?>

<main class="main">
    <div class="about">
        <?php $fields = get_fields(); ?>
        <h1 class="about__title main-title"><?= __('À propos', 'mf'); ?></h1>
        <div class="about__introduction introduction">
            <h2 class="introduction__title main-title"><?= __('L’ASBL Mariam Faso', 'mf'); ?></h2>
            <div class="introduction__content main-intro">
                <?= $fields['aboutIntroduction']; ?>
            </div>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="introduction__link"><?= __('Voir nos projets', 'mf'); ?></a>
        </div>

        <blockquote class="about__quote quote">
            <p class="quote__content"><?= $fields['aboutQuote']; ?></p>
            <?php if($fields['aboutQuoteCite']): ?>
            <cite class="quote__author"><?= $fields['aboutQuoteCite']; ?></cite>
            <?php endif; ?>
        </blockquote>

        <?php if(have_rows('aboutContentRepeater')):
            while(have_rows('aboutContentRepeater')): the_row();
        ?>
        <article class="about__article article">
            <h2><?= the_sub_field('aboutContentTitle'); ?></h2>
            <p class="article__content"><?= the_sub_field('aboutContentP') ?></p>
            <?php if(get_sub_field('aboutContentImg')): ?>
                <?php $image = get_sub_field('aboutContentImg'); ?>
            <img width="300" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('aboutContentImg'); ?>">
            <?php endif; ?>
        </article>
        <?php endwhile; endif; ?>
    </div>

    <section class="learn-more">
        <h2><?= __('En savoir plus', 'mf'); ?></h2>
        <p class="learn-more__catchphrase"><?= str_replace(':culture', '<span class="learn-more__catchphrase--bold">culture</span>', __('Envie d’en savoir plus sur la :culture de là-bas&nbsp;?', 'mf')); ?></p>
        <p class="learn-more__links"><?= str_replace([':burkina-faso', ':maroc', ':trips'], ['<a href="' . mf_get_page_url('template-burkinafaso.php') . '" class="learn-more__link">Burkina Faso</a>', '<a href="' . mf_get_page_url('template-maroc.php') . '" class="learn-more__link">Maroc</a>', '<a href="' . mf_get_page_url('template-trips.php') . '" class="learn-more__link">voyages</a>'], __('Découvrez la culture du :burkina-faso et du :maroc ou découvrez nos :trips', 'mf')); ?></p>
    </section>
</main>

<?php get_footer(); ?>
