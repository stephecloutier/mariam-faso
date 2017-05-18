<?php

/*
    Template Name: Homepage
*/

get_header();
?>
    <main class="main">
        <section class="main__who who">
            <h2 class="who__title">Qui sommes-nous&nbsp;?</h2>
            <p class="who__content">
                <?= get_field('homePresentation'); ?>
            </p>
            <a href="#" class="who__link--more">En savoir plus<span class="hidden"> sur Mariam Faso</span></a>
            <?php if(get_field('homePresentationImg')): ?>
            <img class="who__img" width="500" height="auto" src="<?= get_field('homePresentationImg')['url']; ?>" alt="<?= mf_get_image_alt('homePresentationImg'); ?>">
            <?php endif; ?>
        </section>

        <section class="main__events events">
            <h2 class="events__title">Évènements à venir</h2>

            <?php
                $posts = new WP_Query(['showposts' => 3, 'post_type' => 'event']);
            ?>
            <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
            <?php $fields = get_fields(); ?>
            <article class="events__event event">
                <h3 class="event__title"><?= $fields['eventName'] ?></h3>
                <?php if($fields['eventImg']): ?>
                <img src="<?= $fields['eventImg']['url']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                <?php endif; ?>
                <?php
                    $date = $fields['eventDate'];
                    $date = new DateTime($date);
                 ?>
                <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>

                <p class="event__desc"><?= $fields['eventShortDesc'] ?></p>
                <a href="<?php the_permalink(); ?>" class="event__link">Voir les informations<span class="hidden"> sur <?= strtolower($fields['eventName']); ?></span></a>
            </article>
            <?php endwhile; else: ?>
            <p class="events__empty">Il n'y a pas d'évènements à afficher pour le moment.</p>
            <?php endif; ?>


            <a href="#" class="events__link--more">Voir notre agenda</a>
        </section>
        <section class="main__projects projects">
            <h2 class="projects__title">Projets en cours</h2>
            <article class="projects__project project">
                <h3 class="project__title">Construction de puits</h3>
                <img src="#" alt="Photo du projet">
                <p class="project__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                <a href="#" class="project__link">Voir le projet<span class="hidden"> 'construction de puits'</span></a>
            </article>
            <a href="#" class="projects__link--more">Voir tous les projets</a>
        </section>
        <section class="main__news news">
            <h2 class="news__title">Actualité</h2>
            <div class="news__wrapper">
                <article class="news__article article">
                    <h3 class="article__title">Nouveau projet de voyage</h3>
                    <time class="article__date" datetime="2017-04-25">25/04/2017</time>
                    <p class="article__content">Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <a href="" class="article__link">Lire la suite<span class="hidden"> sur 'nouveau projet de voyage'</span></a>
                    <img src="" alt="" class="article__img">
                </article>
            </div>
            <a href="#" class="news__link">Voir plus d'actualités</a>
        </section>
        <section class="main__help help">
            <h2 class="help__title">Envie d'aider&nbsp;?</h2>
            <p class="help__desc">Mariam Faso a besoin de votre aider pour mener à bien ses projets</p>
            <div class="help__links">
                <a href="#" class="help__link">Faire un don</a>
                <a href="#" class="help__link">Participer à nos évènements</a>
                <a href="#" class="help__link">Partager notre site web</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__questions">
            <span class="footer__title">Des questions&nbsp;?</span>
            <p class="footer__address">Mariam Faso ASBL</p>
            <p class="footer__address">Rue de la gare, 15</p>
            <p class="footer__address">6600 Bastogne</p>

            <a href="mailto:info@mariam-faso.be" class="footer__mail">info@mariam-faso.be</a>

            <a href="#" class="footer__button--contact">Contactez-nous</a>
        </div>
        <div class="footer__help">
            <span class="footer__title">Aidez-nous</span>
            <p class="footer__desc">Les dons à partir de <span class="footer__desc--strong">40&nbsp;€</span> effectués depuis la Belgique sont fiscalement déductibles.</p>

            <a href="#" class="footer__button--donate">Faire un don</a>
        </div>
        <div class="footer__follow">
            <span class="footer__title">Suivez-nous</span>
            <p class="footer__desc">N'hésitez pas à consulter notre page <span class="footer__desc--strong">Facebook</span> pour être au courant des évènements à venir&nbsp;!</p>

            <a href="#" class="footer__button--social">Facebook</a>
            <a href="#" class="footer__button--social">Youtube</a>
        </div>

        <span class="footer__copyright">Site web réalisé par <a href="www.behance.net/stephecloutier" class="footer__copyright--link">Stéphanie Cloutier</a></span>
    </footer>
</body>
</html>
