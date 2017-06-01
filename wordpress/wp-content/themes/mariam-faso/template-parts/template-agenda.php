<?php

/*
    Template Name: Agenda
*/
get_header();
echo 'Agenda';
?>


<section class="main__events events">
    <h1 class="events__title"><?= __('Agenda', 'mf'); ?></h1>

    <?php
        $posts = new WP_Query(['showposts' => 3, 'post_type' => 'event']);
    ?>
    <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
    <?php $fields = get_fields(); ?>
    <article class="events__event event">
        <h2 class="event__title"><?= $fields['eventName'] ?></h2>
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
