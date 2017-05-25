<?php
/*
    Template Name: À propos
*/
get_header();
?>

<main class="main">
    <section class="about">
        <h2><?= __('À propos', 'mf'); ?></h2>
        <article class="about__introduction introduction">
            <h3><?= __('L’ASBL Mariam Faso', 'mf'); ?></h3>
            <p class="introduction__content"></p>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="introduction__link"><?= __('Voir nos projets', 'mf'); ?></a>
        </article>

        <blockquote class="about__quote quote">
            <p class="quote__content"></p>
            <cite class="quote__author"></cite>
        </blockquote>

        <article class="about__objectives objectives">
            <h3><?= __('Objectifs', 'mf'); ?></h3>
            <p class="objectives__content"></p>
            <img src="#" alt="#">
        </article>

        <article class="about__relations relations">
            <h3><?= __('Relations nord-sud', 'mf'); ?></h3>
            <p class="relations__content"></p>
            <img src="#" alt="#">
        </article>
    </section>

    <section class="learn-more">
        <h2><?= __('En savoir plus', 'mf'); ?></h2>
        <p class="learn-more__catchphrase"><?= str_replace(':culture', '<span class="learn-more__catchphrase--bold">culture</span>', __('Envie d’en savoir plus sur la :culture de là-bas&nbsp;?', 'mf')); ?></p>
        <p class="learn-more__links"><?= str_replace([':burkina-faso', ':maroc', ':trips'], ['<a href="' . mf_get_page_url('template-burkinafaso.php') . '" class="learn-more__link">Burkina Faso</a>', '<a href="' . mf_get_page_url('template-maroc.php') . '" class="learn-more__link">Maroc</a>', '<a href="' . mf_get_page_url('template-trips.php') . '" class="learn-more__link">voyages</a>'], __('Découvrez la culture du :burkina-faso et du :maroc ou découvrez nos :trips', 'mf')); ?></p>
    </section>
</main>
