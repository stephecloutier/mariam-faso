<?php
/*
    Template Name: On parle de nous
*/
get_header();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="press__introduction introduction__wrapper">
        <h1 class="introduction__title main-title"><?= __('Mariam Faso dans la presse', 'mf'); ?></h1>
        <div class="introduction__content main-intro">
            <?= get_field('pressIntro'); ?>
        </div>
    </div>

    <div class="press-list__wrapper">
        <ul class="press__list">
            <?php

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                //$posts = new WP_Query('posts_per_page=3&paged=' . $paged . '&post_type=article');
                $posts = new WP_Query(['posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'article']);
            ?>
            <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                <?php $fields = get_fields(); ?>
            <li class="article <?php
                if($fields['articleProvenance'] === 'scanned') {
                    echo 'article--scanned';
                } else if($fields['articleProvenance'] === 'video') {
                    echo 'article--video';
                } else if($fields['articleProvenance'] === 'external') {
                    echo 'article--external';
                }
                ?>">
                <a href="<?= ($fields['articleProvenance'] === 'scanned') ? the_permalink() : $fields['articleLink']; ?>" class="articleLink">
                    <p><?= $fields['articleTitle']; ?></p>
                </a>
            </li>
            <?php endwhile; else: ?>
            <li>
                <p class="press__empty loop__empty"><?= __('Il n’y a pas d’articles à afficher pour le moment.', 'mf'); ?></p>
            </li>
            <?php endif; ?>
        </ul>
    </div>

    <?php if(function_exists('wp_pagenavi')): ?>
    <div class="pagination__wrapper">
        <?php wp_pagenavi(array('query' => $posts)); ?>
    </div>
    <?php endif; ?>

</main>


<?php get_footer(); ?>
