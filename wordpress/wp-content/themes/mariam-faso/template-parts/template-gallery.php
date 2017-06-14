<?php

/*
    Template Name: Galerie photos
*/

get_header();
$fields = get_fields();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="gallery">
        <h1 class="main-title gallery__title"><?= __('Galerie photos', 'mf'); ?></h1>
        <div class="main-intro gallery__intro">
            <?= $fields['galleryIntro']; ?>
        </div>

        <div class="gallery__photos">
            <?php $images = $fields['galleryImgs']; ?>
            <?php foreach($images as $image): ?>
            <figure class="gallery__figure">
                <img width="300" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="gallery__img">
                <?php if($image['description']): ?>
                <figcaption class="gallery__figcaption">
                    <?= $image['description']; ?>
                </figcaption>
                <?php endif; ?>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
