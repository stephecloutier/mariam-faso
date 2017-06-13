<?php

/*
    Template Name: Actualités
*/

get_header();
?>
<main class="main">
    <div class="main__news news">
        <h1 class="news__title main-title"><?= __('Toutes les actualités', 'mf'); ?></h1>
        <div class="main-intro news__intro">
            <?= get_field('allNewsIntro'); ?>
        </div>
        <div class="news__wrapper">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $posts = new WP_Query(['showposts' => 10, 'paged' => $paged, 'post_type' => 'news']);
            ?>
            <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
            <?php $fields = get_fields(); ?>
            <article class="news__article article">
                <h2 class="article__title second-title"><?= $fields['newsTitle']; ?></h2>
                <time class="article__date" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d/m/Y') ?></time>
                <div class="article__content">
                    <?= $fields['newsContent']; ?>
                </div>
                <?php if($fields['newsImg']): ?>
                <img width="200" height="auto" src="<?= $fields['newsImg']['url']; ?>" alt="<?= mf_get_image_alt('newsImg'); ?>" class="article__img">
                <?php endif; ?>
            </article>
            <?php endwhile; else: ?>
            <p class="events__empty loop__empty"><?= __('Il n’y a pas d’actualités à afficher pour le moment.', 'mf'); ?></p>
            <?php endif; ?>
        </div>
    </div>

    <?php if(function_exists('wp_pagenavi')) {
        wp_pagenavi( array(
            'query' => $posts
        ));
    }
    ?>

    <?php get_template_part('parts/help'); ?>
</main>

<?php get_footer(); ?>
