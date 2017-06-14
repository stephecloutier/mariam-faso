<?php

/*
    Template Name: Actualités (individuelle)
*/

get_header();
$fields = get_fields();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="single-news">
        <h1 class="single-news__title main-title"><?= $fields['newsTitle']; ?></h1>
        <?php
            if($fields['newsImg']):
                $image = $fields['newsImg'];
        ?>
        <img width="500" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="single-news__img">
        <?php endif; ?>
        <div class="single-news__content main-intro">
            <?= $fields['newsContent']; ?>
        </div>
    </div>
    <a href="<?= mf_get_page_url('template-news.php') ?>" class="back__link news__back" title="<?= __('Aller sur la page des actualités', 'mf'); ?>"><?= __('Aller à la page des actualités', 'mf'); ?></a>
    <a href="index.php" class="back__link news__back" title="<?= __('Aller sur la page d’accueil', 'mf'); ?>"><?= __('Retourner sur la page d’accueil', 'mf'); ?></a>
</main>

<?php get_footer(); ?>
