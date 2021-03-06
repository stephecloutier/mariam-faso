<?php

/*
    Template Name: Agenda
*/
get_header();
$fields = get_fields();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$posts = new WP_Query([
                'post_type' => 'event',
                'posts_per_page' => -1,
            ]);


$fields = get_fields();
$currentDate = date('Y-m-d');

// to access fields of post type event, I store them in previous or next event array, then I order them.
$previousEventsFields = [];
$nextEventsFields = [];
foreach($posts->posts as $post) {
    $event = get_fields($post->ID);
    if($event['eventDate'] >= $currentDate) {
        $event['link'] = get_permalink($post->ID);
        $event['title'] = get_the_title($post->ID);
        $nextEventsFields[] = $event;
    } else {
        $event['link'] = get_permalink($post->ID);
        $event['title'] = get_the_title($post->ID);
        $previousEventsFields[] = $event;
    }
}
usort($previousEventsFields, function($a, $b) {
    return $b['eventDate'] <=> $a['eventDate'];
});
usort($nextEventsFields, function($a, $b) {
    return $a['eventDate'] <=> $b['eventDate'];
});

wp_reset_query();

?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper">
        <h1 class="agenda__title main-title"><?= __('Agenda', 'mf'); ?></h1>
        <div class="main-intro agenda__intro">
            <?= $fields['agendaIntro']; ?>
        </div>
    </div>
    <section class="agenda__events agenda__events--next">
        <div class="events__wrapper">
            <h2 class="agenda__nextEvents"><?= __('Évènements à venir', 'mf'); ?></h2>
            <div class="events__inside-wrapper">
            <?php
                if($nextEventsFields) :
                    foreach($nextEventsFields as $nextEvent) :
            ?>
                <a class="event__link-wrapper" href="<?= $nextEvent['link']; ?>" title="<?= __('Aller sur la page individuelle de l\'évènement', 'mf'); ?>">
                    <article class="agenda__event nextEvent event">
                        <h3 class="event__title<?php if(!$nextEvent['eventImg']) echo ' event__title--bigger'; ?>"><?= $nextEvent['title'] ?></h3>
                        <?php if($nextEvent['eventImg']): ?>
                        <div class="event__img--wrapper">
                            <img width="300" height="auto" src="<?= $nextEvent['eventImg']['sizes']['medium']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                        </div>
                        <?php endif; ?>
                        <?php $date = new DateTime($nextEvent['eventDate']); ?>
                        <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>
                        <div class="event__content--wrapper">
                            <p class="event__desc<?php if(!$nextEvent['eventImg']) echo ' event__desc--down'; ?>"><?= $nextEvent['eventShortDesc'] ?></p>
                            <span class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($nextEvent['title']); ?></span></span>
                        </div>
                    </article>
                </a>
            <?php endforeach; else: ?>
            </div>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas d’évènements à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="agenda__events agenda__events--previous">
        <div class="events__wrapper">
            <h2 class="agenda__previousEvents"><?= __('Évènements passés', 'mf'); ?></h2>
            <div class="events__inside-wrapper">
            <?php
                if($previousEventsFields) :
                    foreach($previousEventsFields as $previousEvent) :
            ?>
                <a class="event__link-wrapper" href="<?= $previousEvent['link']; ?>" title="<?= __('Aller sur la page individuelle de l\'évènement', 'mf'); ?>">
                    <article class="agenda__event previousEvent event">
                        <h3 class="event__title<?php if(!$previousEvent['eventImg']) echo ' event__title--bigger'; ?>"><?= $previousEvent['title'] ?></h3>
                        <?php if($previousEvent['eventImg']): ?>
                        <div class="event__img--wrapper">
                            <img width="300" height="auto" src="<?= $previousEvent['eventImg']['sizes']['medium']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                        </div>
                        <?php endif; ?>
                        <?php $date = new DateTime($previousEvent['eventDate']); ?>
                        <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>

                        <div class="event__content--wrapper">
                            <p class="event__desc<?php if(!$previousEvent['eventImg']) echo ' event__desc--down'; ?>"><?= $previousEvent['eventShortDesc'] ?></p>
                            <span class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($previousEvent['title']); ?></span></span>
                        </div>
                    </article>
                </a>
            <?php endforeach; else: ?>
            </div>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas d’évènements passés à afficher.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
