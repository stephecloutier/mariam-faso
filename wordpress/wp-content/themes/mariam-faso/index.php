<?php

/*
    Template Name: Homepage
*/

get_header();
?>
    <main class="main">
        <section class="main__who who">
            <h2 class="who__title"><?= __('Qui sommes-nous&nbsp;?', 'mf'); ?></h2>
            <p class="who__content">
                <?= get_field('homePresentation'); ?>
            </p>
            <a href="<?= mf_get_page_url('template-about.php'); ?>" class="who__link--more"><?= __('En savoir plus', 'mf'); ?><span class="hidden"> <?= __('sur Mariam Faso', 'mf'); ?></span></a>
            <?php if(get_field('homePresentationImg')): ?>
            <img class="who__img" width="500" height="auto" src="<?= get_field('homePresentationImg')['url']; ?>" alt="<?= mf_get_image_alt('homePresentationImg'); ?>">
            <?php endif; ?>
        </section>

        <section class="main__events events">
            <h2 class="events__title"><?= __('Évènements à venir', 'mf'); ?></h2>

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
                <a href="<?php the_permalink(); ?>" class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($fields['eventName']); ?></span></a>
            </article>
            <?php endwhile; else: ?>
            <p class="events__empty"><?= __('Il n’y a pas d’évènements à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
            <a href="<?= mf_get_page_url('template-agenda.php'); ?>" class="events__link--more"><?= __('Voir notre agenda', 'mf'); ?></a>
        </section>

        <section class="main__projects projects">
            <h2 class="projects__title"><?= __('Projets en cours', 'mf'); ?></h2>
            <?php $posts = new WP_Query(['showposts' => 3, 'post_type' => 'project']); ?>
            <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
            <?php $fields = get_fields(); ?>
            <article class="projects__project project">
                <h3 class="project__title"><?= mf_remove_p_tags($fields['projectName']); ?></h3>
                <?php if($fields['projectImg']): ?>
                <img width="200" height="auto" src="<?= $fields['projectImg']['url']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" >
                <?php endif; ?>
                <p class="project__desc"><?= $fields['projectShortDesc']; ?></p>
                <a href="<?php the_permalink(); ?>" class="project__link"><?= __('Voir le projet', 'mf'); ?><span class="hidden"> <?= mf_remove_p_tags($fields['projectName']); ?></span></a>
            </article>
            <?php endwhile; else: ?>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas de projets à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
            <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="projects__link--more"><?= __('Voir tous les projets', 'mf'); ?></a>
        </section>

        <section class="main__news news">
            <h2 class="news__title"><?= __('Actualité', 'mf'); ?></h2>
            <div class="news__wrapper">
                <?php $posts = new WP_Query(['showposts' => 3, 'post_type' => 'news']); ?>
                <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                <?php $fields = get_fields(); ?>
                <article class="news__article article">
                    <h3 class="article__title"><?= $fields['newsTitle']; ?></h3>
                    <time class="article__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d/m/Y') ?></time>
                    <p class="article__content"><?= mf_get_the_excerpt('newsContent', 300); ?></p>
                    <a href="<?php the_permalink(); ?>" class="article__link"><?= __('Lire la suite', 'mf') ?><span class="hidden"> <?= __('de', 'mf') ?> <?= $fields['newsTitle']; ?></span></a>
                    <?php if($fields['projectImg']): ?>
                    <img width="200" height="auto" src="<?= $fields['newsImg']['url']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" class="article__img">
                    <?php endif; ?>
                </article>
                <?php endwhile; else: ?>
                <p class="events__empty loop__empty"><?= __('Il n’y a pas d’actualités à afficher pour le moment.', 'mf'); ?></p>
                <?php endif; ?>
            </div>
            <a href="<?= mf_get_page_url('template-news.php'); ?>" class="news__link"><?= __('Voir plus d’actualités', 'mf'); ?></a>
        </section>

        <?php get_template_part('parts/help'); ?>

    </main>

    <?php get_footer(); ?>
</body>
</html>
