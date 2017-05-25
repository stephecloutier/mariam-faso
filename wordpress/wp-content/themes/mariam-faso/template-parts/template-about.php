<?php
/*
    Template Name: À propos
*/
get_header();
echo 'À propos';
?>

<main class="main">
    <section class="about">
        <h2>À propos</h2>
        <article class="about__introduction introduction">
            <h3>L'ASBL Mariam Faso</h3>
            <p class="introduction__content"></p>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="introduction__link">Voir nos projets</a>
        </article>

        <blockquote class="about__quote quote">
            <p class="quote__content"></p>
            <cite class="quote__author"></cite>
        </blockquote>

        <article class="about__objectives objectives">
            <h3>Objectifs</h3>
            <p class="objectives__content"></p>
            <img src="#" alt="#">
        </article>

        <article class="about__relations relations">
            <h3>Relations nord-sud</h3>
            <p class="relations__content"></p>
            <img src="#" alt="#">
        </article>
    </section>

    <section class="learn-more">
        <h2>En savoir plus</h2>
        <p class="learn-more__catchphrase">Envie d'en savoir plus sur la <span class="learn-more__catchphrase--bold">culture</span> de là-bas&nbsp;?</p>
        <p class="learn-more__links">Découvrez la culture du <a href="#" class="learn-more__link">Burkina Faso</a> et du <a href="#" class="learn-more__link">Maroc</a> ou découvrez nos <a href="#" class="learn-more__link">voyages</a></p>
    </section>

</main>
