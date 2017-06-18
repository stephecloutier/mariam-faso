<?php
/*
    Template Name: Évènement
*/

get_header();
$fields = get_fields();
$date = new DateTime($fields['eventDate']);
if($fields['eventTimeStart']) {
    $startingTime = new DateTime($fields['eventTimeStart']);
    if($fields['eventTimeEnd']) {
        $endingTime = new DateTime($fields['eventTimeEnd']);
    }
}
?>

<main class="main">
    <div class="single-landing event__landing">
        <div class="single-landing--color">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <div class="single-landing__content">
                <h1 class="event__title single-landing__title single-landing__title--strong"><?= $fields['eventName'] ?></h1>
                <span class="event__subtitle single-landing__subtitle"><?= strftime("%B %Y", $date->getTimestamp()); ?></span>
                <div class="event__intro single-landing__intro">
                    <?= $fields['eventDesc']; ?>
                </div>
                <!-- <a href="" class="event__button single-landing__button"></a> -->
                <?php if($fields['eventImg']): ?>
                <style>
                    .event__landing {
                        background-image: url('<?= $fields['eventImg']['url']; ?>');
                    }
                </style>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="event__infos infos">
        <h2 class="infos__title second-title"><?= __('Informations pratiques', 'mf'); ?></h2>
        <div class="infos__wrapper">
            <div class="event__info info__single">
                <span class="info__title"><?= __('Date', 'mf'); ?></span>
                <time class="event__time" datetime="
                <?php if($startingTime) {
                        $date->setTime($startingTime->format('G'), $startingTime->format('i'));
                    }
                    echo $date->format('c');
                ?>">
                    <?= strftime("%e %B %Y", $date->getTimestamp()); ?>
                </time>
            </div>
            <?php if($startingTime): ?>
            <div class="event__info info__single">
                <span class="info__title"><?= __('Heure', 'mf'); ?></span>
                <span class="event__time">
                    <?= $startingTime->format('G'. '\h'. 'i');
                        if($endingTime):
                     ?>
                         <?= __('à ', 'mf') . $endingTime->format('G' . '\h' . 'i'); ?>
                     <?php endif; ?>
                </span>
            </div>
            <?php endif; ?>
            <div class="event__info info__single">
                <span class="info__title"><?= __('Lieu', 'mf'); ?></span>
                <div class="event__place">
                    <?= $fields['eventPlace']; ?>
                </div>
            </div>

            <?php if($fields['eventMap']): ?>
            <div class="info__single event__map map__wrapper">
                <img class="map__img" src="<?= mf_get_static_google_map($fields['eventMap']['lat'], $fields['eventMap']['lng']); ?>">
            </div>
            <?php endif; ?>

            <?php if(have_rows('eventFieldsRepeater')):
                while(have_rows('eventFieldsRepeater')): the_row();
            ?>
            <div class="event__info info__single">
                <span class="info__title"><?= get_sub_field('eventFieldName'); ?></span>
                <div class="info__content">
                    <?= get_sub_field('eventFieldContent'); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>

            <?php if($fields['eventMoreInfos']): ?>
            <div class="more__infos">
                <span class="more__infos--title">
                    <?= __('Informations supplémentaires', 'mf'); ?>
                </span>
                <div class="more__infos--content">
                    <?= $fields['eventMoreInfos']; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php
            if($fields['eventOtherImgs']):
                $images = $fields['eventOtherImgs'];
        ?>
        <div class="event__imgs">
            <span class="event__imgs-title"><?= __('Photos des éditions précédentes', 'mf'); ?></span>
            <?php foreach($images as $image): ?>
            <div class="event__img--wrapper">
                <img width="300" heigth="auto" class="event__img" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>">
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <a href="<?= mf_get_page_url('template-agenda.php'); ?>" class="event__back back__link" title="<?= __('Aller sur la page Agenda', 'mf'); ?>"><?= __('Retourner à l’agenda', 'mf'); ?></a>
    </div>

</main>
<?php get_footer(); ?>
