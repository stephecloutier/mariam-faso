<?php
/*
    Template Name: À propos
*/
get_header();
?>

<main class="main">
    <section class="about">
        <?php $fields = get_fields(); ?>
        <h2><?= __('À propos', 'mf'); ?></h2>
        <article class="about__introduction introduction">
            <h3><?= __('L’ASBL Mariam Faso', 'mf'); ?></h3>
            <p class="introduction__content"><?= $fields['aboutIntroduction']; ?></p>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="introduction__link"><?= __('Voir nos projets', 'mf'); ?></a>
        </article>

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
            <h3><?= the_sub_field('aboutContentTitle'); ?></h3>
            <p class="article__content"><?= the_sub_field('aboutContentP') ?></p>
            <?php if(get_sub_field('aboutContentImg')): ?>
                <?php $image = get_sub_field('aboutContentImg'); ?>
            <img width="300" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('aboutContentImg'); ?>">
            <?php endif; ?>
        </article>
        <?php endwhile; endif; ?>
    </section>

    <section class="learn-more">
        <h2><?= __('En savoir plus', 'mf'); ?></h2>
        <p class="learn-more__catchphrase"><?= str_replace(':culture', '<span class="learn-more__catchphrase--bold">culture</span>', __('Envie d’en savoir plus sur la :culture de là-bas&nbsp;?', 'mf')); ?></p>
        <p class="learn-more__links"><?= str_replace([':burkina-faso', ':maroc', ':trips'], ['<a href="' . mf_get_page_url('template-burkinafaso.php') . '" class="learn-more__link">Burkina Faso</a>', '<a href="' . mf_get_page_url('template-maroc.php') . '" class="learn-more__link">Maroc</a>', '<a href="' . mf_get_page_url('template-trips.php') . '" class="learn-more__link">voyages</a>'], __('Découvrez la culture du :burkina-faso et du :maroc ou découvrez nos :trips', 'mf')); ?></p>
    </section>
</main>

<?php get_footer(); ?>
