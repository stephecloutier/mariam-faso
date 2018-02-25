<?php

/*
    Template Name: Actualité
*/

get_header();
?>
<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper">
        <h1 class="news__title main-title"><?= __('Toute l\'actualité', 'mf'); ?></h1>
        <div class="main-intro news__intro">
            <?= get_field('allNewsIntro'); ?>
        </div>
    </div>
    <div class="news__wrapper">
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $posts = new WP_Query(['showposts' => 5, 'paged' => $paged, 'post_type' => 'news']);
        ?>
        <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
        <?php $fields = get_fields(); ?>
        <article class="news__article article">
            <div class="news__content">
                <div class="news__heading">
                    <h2 class="article__title second-title"><?= $fields['newsTitle']; ?></h2>
                    <time class="article__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d/m/Y') ?></time>
                </div>
                <div class="article__content">
                    <?php $content = get_field('newsContent'); ?>
                    <?= mf_get_the_excerpt(mf_remove_all_tags($content), false, 300); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="article__link"><?= __('Lire la suite', 'mf'); ?><span class="hidden"> <?= __('de', 'mf'); ?> <?= mf_remove_all_tags($fields['newsTitle']); ?></span></a>
            </div>
            <div class="article__img--wrapper">
                <?php if($fields['newsImg']): ?>
                <img width="200" height="auto" src="<?= $fields['newsImg']['sizes']['medium']; ?>" alt="<?= mf_get_image_alt('newsImg'); ?>" class="article__img">
                <?php else: ?>
                <img class="article__img" width="500" height="auto" src="wp-content/themes/mariam-faso/assets/images/placeholder.jpg" alt="<?= __('Jeunes burkinabés', 'mf'); ?>">
                <?php endif; ?>
            </div>
        </article>
        <?php endwhile; else: ?>
        <p class="events__empty loop__empty"><?= __('Il n’y a pas d’actualité à afficher pour le moment.', 'mf'); ?></p>
        <?php endif; ?>
    </div>

    <?php if(function_exists('wp_pagenavi')): ?>
    <div class="pagination__wrapper">
        <?php wp_pagenavi(array('query' => $posts)); ?>
    </div>
    <?php endif; ?>

    <?php get_template_part('parts/help'); ?>
</main>

<?php get_footer(); ?>
