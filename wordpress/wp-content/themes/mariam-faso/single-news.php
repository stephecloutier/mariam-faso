<?php

/*
    Template Name: Actualité (individuelle)
*/

get_header();
$fields = get_fields();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="news__wrapper single-news">
        <div class="single-news__heading">
            <time class="single-news__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d/m/Y') ?></time>
            <h1 class="single-news__title second-title"><?= get_the_title(); ?></h1>
        </div>

        <div class="single-news__content">
            <?php
                if($fields['newsImg']):
                    $image = $fields['newsImg'];
            ?>
            <img width="500" height="auto" src="<?= $image['sizes']['500']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="single-news__img">
            <?php endif; ?>
            <div class="single-news__content--textual">
                <?= $fields['newsContent']; ?>
            </div>
        </div>
        <div class="single-news__links">
            <a href="<?= mf_get_page_url('template-news.php') ?>" class="back__link news__back news__back--news" title="<?= __('Retourner sur la page d\'actualité', 'mf'); ?>"><?= __('Retourner à la page d\'actualité', 'mf'); ?></a>
        </div>
    </div>

</main>

<?php get_footer(); ?>
