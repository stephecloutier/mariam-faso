<?php
/*
    Template Name: On parle de nous
*/
get_header();
?>

<main class="main">
    <div class="press">
        <div class="press__introduction introduction">
            <h1 class="introduction__title"><?= __('Mariam Faso dans la presse', 'mf'); ?></h1>
            <p class="introduction__content"><?= __('À plusieurs reprises, l’ASBL Mariam Faso est mentionnée dans la presse pour ses projets et voyages en Afrique, plus précisément au Burkina Faso et au Maroc.', 'mf'); ?></p>
        </div>

        <div class="press__list-wrapper">
            <ul class="press__list">
                <?php

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    //$posts = new WP_Query('posts_per_page=3&paged=' . $paged . '&post_type=article');
                    $posts = new WP_Query(['posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'article']);
                ?>
                <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                <?php $fields = get_fields(); ?>
                <li>
                    <a href="<?= the_permalink(); ?>">
                    <p><?= $fields['articleTitle']; ?></p>
                    </a>
                </li>
                <?php endwhile; else: ?>
                <li>
                    <p class="press__empty"><?= __('Il n’y a pas d’articles à afficher pour le moment.', 'mf'); ?></p>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </section>

    <?php if(function_exists('wp_pagenavi')) {
        wp_pagenavi( array(
            'query' => $posts
        ));
    }
    //var_dump(get_the_posts_pagination());
    ?>

</main>


<?php get_footer(); ?>
