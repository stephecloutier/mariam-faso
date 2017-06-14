<?php

/*
    Template Name: Agenda
*/
get_header();
?>
<?php
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
            $nextEventsFields[] = $event;
        } else {
            $previousEventsFields[] = $event;
        }
    }
    usort($previousEventsFields, function($a, $b) {
        return $b['eventDate'] <=> $a['eventDate'];
    });
    usort($nextEventsFields, function($a, $b) {
        return $a['eventDate'] <=> $b['eventDate'];
    });

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
    <div class="agenda__events agenda__events--next">
        <div class="events__wrapper">
            <span class="agenda__nextEvents"><?= __('Évènements à venir', 'mf'); ?></span>
            <?php
                if($nextEventsFields) :
                    foreach($nextEventsFields as $nextEvent) :
            ?>
            <article class="agenda__event nextEvent">
                <h2 class="event__title"><?= $nextEvent['eventName'] ?></h2>
                <?php if($nextEvent['eventImg']): ?>
                <img width="300" height="auto" src="<?= $nextEvent['eventImg']['url']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                <?php endif; ?>
                <?php $date = new DateTime($nextEvent['eventDate']); ?>
                <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>
                <p class="event__desc"><?= $nextEvent['eventShortDesc'] ?></p>
                <a href="<?php the_permalink(); ?>" class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($nextEvent['eventName']); ?></span></a>
            </article>
            <?php endforeach; else: ?>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas d’évènements à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <div class="agenda__events agenda__events--previous">
        <div class="events__wrapper">
            <span class="agenda__previousEvents"><?= __('Évènements passés', 'mf'); ?></span>
            <?php
                if($previousEventsFields) :
                    foreach($previousEventsFields as $previousEvent) :
            ?>
            <article class="agenda__event previousEvent">
                <h2 class="event__title"><?= $previousEvent['eventName'] ?></h2>
                <?php if($previousEvent['eventImg']): ?>
                <img width="300" height="auto" src="<?= $previousEvent['eventImg']['url']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
                <?php endif; ?>
                <?php $date = new DateTime($previousEvent['eventDate']); ?>
                <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>
                <p class="event__desc"><?= $previousEvent['eventShortDesc'] ?></p>
                <a href="<?php the_permalink(); ?>" class="event__link"><?= __('Voir les informations', 'mf'); ?><span class="hidden"> <?= __('sur', 'mf'); ?> <?= strtolower($previousEvent['eventName']); ?></span></a>
            </article>
            <?php endforeach; else: ?>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas d’évènements passés à afficher.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
