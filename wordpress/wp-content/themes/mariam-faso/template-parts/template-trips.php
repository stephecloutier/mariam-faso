<?php

/*
    Template Name: Page des voyages
*/
get_header();
$fields = get_fields();
$nextTrip = false;
$previousTrip = false;
?>

<main class="main">
    <div class="single-landing trips__landing">
        <div class="single-landing--color">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <div class="single-landing__content">
                <h1 class="trips__title single-landing__title"><?= str_replace(':mariam-faso', '<span class="single-landing__title--strong">Mariam Faso</span>', __('Partir en voyage avec :mariam-faso', 'mf')); ?></h1>
                <div class="trips__intro single-landing__intro">
                    <?= $fields['tripsIntro']; ?>
                </div>
                <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="trips__button single-landing__button"><?= __('Contactez-nous&nbsp;!', 'mf'); ?></a>
                <?php if($fields['tripsImg']): ?>
                <style>
                    .trips__landing {
                        background-image: url('<?= $fields['tripsImg']['url']; ?>');
                    }
                </style>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php $posts = new WP_Query(['posts_per_page' => -1, 'post_type' => 'trip']); ?>
    <section class="trips__trips trips__trips--next">
        <div class="trips__wrapper">
            <h2 class="trips__title second-title"><?= __('Voyages à venir', 'mf'); ?></h2>
            <div class="trips__inside-wrapper">
                <?php
                    if($posts->have_posts()) :
                        while($posts->have_posts()):
                        $posts->the_post();
                        $tripFields = get_fields();
                        $currentDate = date('Y-m-d');
                        $startDate = new DateTime($tripFields['tripStartDate']);
                        if($tripFields['tripEndDate']) {
                            $endDate = new DateTime($tripFields['tripEndDate']);
                        }
                        if($tripFields['tripStartDate'] > $currentDate):
                            $nextTrip = true;
                ?>
                <article class="trips__trip trip">
                    <h3 class="trip__title<?php if(!$tripFields['tripImg']) echo ' trip__title--bigger'; ?>"><?= mf_remove_p_tags($tripFields['tripName']); ?></h3>
                    <?php
                        if($tripFields['tripImg']):
                        $image = $tripFields['tripImg'];
                    ?>
                    <div class="trip__img--wrapper">
                        <img width="600" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('tripImg'); ?>" class="trip__img">
                    </div>
                    <?php endif; ?>
                    <time class="trip__time" datetime="<?= $startDate->format('c'); ?>">
                        <?php echo strftime("%B %Y", $startDate->getTimestamp()); ?>
                    </time>
                    <div class="trip__content--wrapper">
                        <p class="trip__desc<?php if(!$tripFields['tripImg']) echo ' trip__desc--down'; ?>"><?= $tripFields['tripShortDesc']; ?></p>
                        <a href="<?= the_permalink(); ?>" class="trip__link"><?= str_replace(':tripName', '<span class="hidden">' . mf_remove_all_tags($tripFields['tripName']) . '</span>', __('Voir plan du voyage :tripName', 'mf')); ?></a>
                    </div>
                </article>
                <?php endif; endwhile; endif; ?>
            </div>
            <?php if(!$nextTrip): ?>
            <p class="loop__empty trips__empty"><?= __('Il n’y a pas de voyages à venir à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="trips__trips trips__trips--previous">
        <div class="trips__wrapper">
            <h2 class="trips__title second-title"><?= __('Voyages précédents', 'mf'); ?></h2>
            <div class="trips__inside-wrapper">
                <?php
                    if($posts->have_posts()) :
                        while($posts->have_posts()):
                        $posts->the_post();
                        $tripFields = get_fields();
                        $currentDate = date('Y-m-d');
                        $startDate = new DateTime($tripFields['tripStartDate']);
                        if($tripFields['tripEndDate']) {
                            $endDate = new DateTime($tripFields['tripEndDate']);
                        }
                        if($tripFields['tripStartDate'] <= $currentDate):
                            $nextTrip = true;
                ?>
                <article class="trips__trip trip">
                    <h3 class="trip__title<?php if(!$tripFields['tripImg']) echo ' trip__title--bigger'; ?>"><?= mf_remove_p_tags($tripFields['tripName']); ?></h3>
                    <?php if($tripFields['tripImg']): $image = $tripFields['tripImg']; ?>
                    <div class="trip__img--wrapper">
                        <img width="600" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('tripImg'); ?>" class="trip__img<?php if($tripFields['tripIsBig']) echo ' tripImg--big'; ?>">
                    </div>
                    <?php endif; ?>
                    <time class="trip__time" datetime="<?= $startDate->format('c'); ?>">
                        <?php echo strftime("%B %Y", $startDate->getTimestamp()); ?>
                    </time>
                    <div class="trip__content--wrapper">
                        <p class="trip__desc<?php if(!$tripFields['tripImg']) echo ' trip__desc--down'; ?>"><?= $tripFields['tripShortDesc']; ?></p>
                        <a href="<?= the_permalink(); ?>" class="trip__link"><?= str_replace(':tripName', '<span class="hidden">' . mf_remove_all_tags($tripFields['tripName']) . '</span>', __('Voir le résumé du voyage :tripName', 'mf')); ?></a>
                    </div>
                </article>
                <?php endif; endwhile; endif; ?>
            </div>
            <?php if(!$previousTrip): ?>
            <p class="loop__empty trips__empty"><?= __('Il n’y a pas de voyages à précédents à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
