<?php
/*
    Template Name: Évènement
*/

get_header();
?>


<?php $fields = get_fields(); ?>
<div class="events__event event">
    <h1 class="event__title"><?= $fields['eventName'] ?></h1>
    <?php if($fields['eventImg']): ?>
    <img src="<?= $fields['eventImg']['url']; ?>" alt="<?= mf_get_image_alt('eventImg'); ?>">
    <?php endif; ?>
    <?php
        $date = $fields['eventDate'];
        $date = new DateTime($date);
     ?>
    <time class="event__time" datetime="<?= $date->format('c'); ?>"><?= $date->format('d'. '/'. 'm'); ?></time>

    <p class="event__desc"><?= $fields['eventShortDesc'] ?></p>
    <a href="#" class="event__link">Voir les informations<span class="hidden"> sur <?= strtolower($fields['eventName']); ?></span></a>
</div>
<?php get_footer(); ?>
