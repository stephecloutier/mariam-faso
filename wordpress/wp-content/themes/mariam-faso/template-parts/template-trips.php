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
            <div class="single-landing__content">
                <ul class="breadcrumb">
                <?php mf_display_breadcrumb(); ?>
                </ul>
                <h1 class="trips__title single-landing__title"><?= str_replace(':mariam-faso', '<span class="single-landing__title--strong">Mariam Faso</span>', __('Partir en voyage avec :mariam-faso', 'mf')); ?></h1>
                <div class="trips__intro single-landing__intro">
                    <?= $fields['tripsIntro']; ?>
                </div>
                <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="trips__button single-landing__button"></a>
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
    <div class="trips-wrapper">
        <h2 class="trips__title second-title"><?= __('Voyages à venir', 'mf'); ?></h2>
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
        <article class="trips_previousTrip">
            <h3 class="tripTitle"><?= mf_remove_p_tags($tripFields['tripName']); ?></h3>
            <time class="tripDate" datetime="<?= $startDate->format('c'); ?>">
                <?php echo strftime("%B %Y", $startDate->getTimestamp()); ?>
            </time>
            <?php
                if($tripFields['tripImg']):
                $image = $tripFields['tripImg'];
            ?>
            <img width="600" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('tripImg'); ?>" class="tripImg<?php if($tripFields['tripIsBig']) echo ' tripImg--big'; ?>">
            <?php endif; ?>
            <p class="trip__shortDesc"><?= $tripFields['tripShortDesc']; ?></p>
            <a href="<?= the_permalink(); ?>" class="trip__link"><?= str_replace(':tripName', '<span class="hidden">' . $tripFields['tripName'] . '</span>', __('Voir plan du voyage :tripName', 'mf')); ?></a>
        </article>
        <?php endif; endwhile; endif; ?>
        <?php if(!$nextTrip): ?>
        <span class="loop__empty trips__empty"><?= __('Il n’y a pas de voyages à venir à afficher pour le moment', 'mf'); ?></span>
        <?php endif; ?>
    </div>

    <div class="trips-wrapper">
        <h2 class="trips__title second-title"><?= __('Voyages précédents', 'mf'); ?></h2>
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
        <article class="trips_previousTrip">
            <h3 class="tripTitle"><?= mf_remove_p_tags($tripFields['tripName']); ?></h3>
            <time class="tripDate" datetime="<?= $startDate->format('c'); ?>">
                <?php echo strftime("%B %Y", $startDate->getTimestamp()); ?>
            </time>
            <?php if($tripFields['tripImg']): $image = $tripFields['tripImg']; ?>
            <img width="600" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('tripImg'); ?>" class="tripImg<?php if($tripFields['tripIsBig']) echo ' tripImg--big'; ?>">
            <?php endif; ?>
            <p class="trip__shortDesc"><?= $tripFields['tripShortDesc']; ?></p>
            <a href="<?= the_permalink(); ?>" class="trip__link"><?= str_replace(':tripName', '<span class="hidden">' . $tripFields['tripName'] . '</span>', __('Voir le résumé du voyage :tripName', 'mf')); ?></a>
        </article>
        <?php endif; endwhile; endif; ?>
        <?php if(!$previousTrip): ?>
        <span class="loop__empty trips__empty"><?= __('Il n’y a pas de voyages à précédents à afficher pour le moment', 'mf'); ?></span>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
