<?php

/*
    Template Name: Homepage
*/

get_header();
?>
    <main class="main">
        <section class="main__who who">
            <div class="who__wrapper">
                <div class="who__text">
                    <h2 class="who__title second-title"><?= __('Qui sommes-nous&nbsp;?', 'mf'); ?></h2>
                    <?= get_field('homePresentation'); ?>
                    <a href="<?= mf_get_page_url('template-about.php'); ?>" class="who__button"><?= __('En savoir plus', 'mf'); ?><span class="hidden"> <?= __('sur Mariam Faso', 'mf'); ?></span></a>
                </div>
                <?php if(get_field('homePresentationImg')): ?>
                <img class="who__img" width="500" height="auto" src="<?= get_field('homePresentationImg')['url']; ?>" alt="<?= mf_get_image_alt('homePresentationImg'); ?>">
                <?php endif; ?>

            </div>
        </section>

        <section class="main__events events">
            <div class="events__wrapper">
                <h2 class="events__title second-title"><?= __('Évènements à venir', 'mf'); ?></h2>

                <div class="events__inside-wrapper">
                    <?php
                        $posts = new WP_Query(['showposts' => 3, 'post_type' => 'event']);
                    ?>
                    <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                    <?php $fields = get_fields(); ?>
                    <a class="event__link-wrapper" href="<?php the_permalink(); ?>" title="<?= __('Aller sur la page individuelle de l\'évènement', 'mf'); ?>">
                        <article class="events__event event">
                            <h3 class="event__title<?php if(!$fields['eventImg']) echo " event__title--bigger"; ?>"><?= $fields['eventName'] ?></h3>
                            <?php if($fields['eventImg']): ?>
                            <div class="event__img--wrapper">
                                    <img class="event__img" width="500" height="auto" src="<?= $fields['eventImg']['url']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                            </div>
                            <?php endif; ?>
                            <?php
                                $date = $fields['eventDate'];
                                $date = new DateTime($date);
                            ?>
                            <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>

                            <div class="event__content--wrapper">
                                <p class="event__desc<?php if(!$fields['eventImg']) echo " event__desc--down"; ?>"><?= $fields['eventShortDesc'] ?></p>
                                <span class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($fields['eventName']); ?></span></span>
                            </div>
                        </article>
                    </a>
                    <?php endwhile; else: ?>
                </div>
                <p class="events__empty"><?= __('Il n’y a pas d’évènements à afficher pour le moment.', 'mf'); ?></p>
                <?php endif; ?>
            </div>
            <a href="<?= mf_get_page_url('template-agenda.php'); ?>" class="events__button"><?= __('Voir notre agenda', 'mf'); ?></a>
        </section>

        <section class="main__projects projects">
            <div class="projects__wrapper">
                <h2 class="projects__title second-title"><?= __('Projets en cours', 'mf'); ?></h2>
                <?php $posts = new WP_Query(['showposts' => 3, 'post_type' => 'project']); ?>
                <div class="projects__inside-wrapper">
                    <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                    <?php $fields = get_fields(); ?>
                    <a class="project__link-wrapper"  href="<?= the_permalink(); ?>" title="<?= __('Aller sur la page individuelle du projet', 'mf'); ?>">
                        <article class="projects__project project">
                            <h3 class="project__title"><?= mf_get_the_excerpt(mf_remove_all_tags($fields['projectName']), false, 65); ?></h3>
                            <div class="project__img--wrapper">
                            <?php if($fields['projectImg']): ?>
                                <img class="project__img" width="200" height="auto" src="<?= $fields['projectImg']['url']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" >
                            <?php else: ?>
                                <img class="project__img" width="200" height="auto" src="wp-content/themes/mariam-faso/assets/images/placeholder.jpg" alt="<?= __('Jeunes burkinabés', 'mf'); ?>" >
                            <?php endif; ?>
                            </div>
                            <div class="project__content--wrapper">
                                <p class="project__desc"><?= $fields['projectShortDesc']; ?></p>
                                <span class="project__link"><?= __('Voir le projet', 'mf'); ?><span class="hidden"> <?= mf_remove_all_tags($fields['projectName']); ?></span></span>
                            </div>
                        </article>
                    </a>
                    <?php endwhile; else: ?>
                    <p class="events__empty loop__empty"><?= __('Il n’y a pas de projets à afficher pour le moment.', 'mf'); ?></p>
                    <?php endif; ?>
                </div>
                <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="projects__button"><?= __('Voir tous les projets', 'mf'); ?></a>
            </div>
        </section>

        <section class="main__news news">
            <div class="news__wrapper">
                <h2 class="news__title second-title"><?= __('Actualité', 'mf'); ?></h2>
                <div class="news__wrapper">
                    <?php $posts = new WP_Query(['showposts' => 3, 'post_type' => 'news']); ?>
                    <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                    <?php $fields = get_fields(); ?>
                    <article class="news__article article">
                        <div class="news__content">
                            <div class="news__heading">
                                <h3 class="article__title"><?= $fields['newsTitle']; ?></h3>
                                <time class="article__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d/m/Y') ?></time>
                            </div>
                            <div class="article__content">
                                <?php $content = get_field('newsContent'); ?>
                                <?= mf_get_the_excerpt(mf_remove_all_tags($content), false, 300); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="article__link"><?= __('Lire la suite', 'mf'); ?><span class="hidden"> <?= __('de', 'mf'); ?> <?= mf_remove_all_tags($fields['newsTitle']); ?></span></a>
                        </div>
                        <div class="article__img--wrapper">
                        <?php if($fields['newsImg']): ?>
                            <img width="500" height="auto" src="<?= $fields['newsImg']['url']; ?>" alt="<?= mf_get_image_alt('newsImg'); ?>" class="article__img">
                        <?php else: ?>
                            <img class="article__img" width="500" height="auto" src="wp-content/themes/mariam-faso/assets/images/placeholder.jpg" alt="<?= __('Jeunes burkinabés', 'mf'); ?>">
                        <?php endif; ?>
                        </div>
                    </article>
                    <?php endwhile; else: ?>
                    <p class="events__empty loop__empty"><?= __('Il n’y a pas d’actualité à afficher pour le moment.', 'mf'); ?></p>
                    <?php endif; ?>
                </div>
                <a href="<?= mf_get_page_url('template-news.php'); ?>" class="news__link"><?= __('Voir plus d’actualité', 'mf'); ?></a>
            </div>
        </section>

        <?php get_template_part('parts/help'); ?>

    </main>

<?php get_footer(); ?>
