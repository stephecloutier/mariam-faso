<?php

/*
    Template Name: Page des projets
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper">
        <h1 class="projects__title main-title"><?= __('Nos projets', 'mf'); ?></h1>
        <div class="projects__intro main-intro">
            <?= $fields['projectsIntro']; ?>
        </div>
        <div class="projects__buttons">
            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="projects__button"><?= __('Faire un don', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-travel.php'); ?>" class="projects__button"><?= __('Voyager', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-gallery.php'); ?>" class="projects__button"><?= __('Voir toutes les photos', 'mf'); ?></a>
        </div>
    </div>

    <div class="projects">
        <div class="projects__inside-wrapper">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $posts = new WP_Query([
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'post_type' => 'project',

                    'meta_key' => 'projectFeatured',
                    'orderby' => [
                        'meta_value'=>'DESC',
                    ],
                ]);
            ?>
            <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
                <?php $projectFields = get_fields(); ?>
            <article class="projects__project project <?= ($projectFields['projectIsOver']) ? ('project--over') : ('project--inProgress'); ?>">
                <h2 class="project__title"><?= mf_get_the_excerpt(mf_remove_all_tags($projectFields['projectName']), false, 65); ?></h2>
                <div class="project__img--wrapper">
                    <?php if($projectFields['projectImg']): $image = $projectFields['projectImg']; ?>
                    <img width="500" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" class="projectImg">
                    <?php else: ?>
                    <img class="project__img" width="200" height="auto" src="wp-content/themes/mariam-faso/assets/images/placeholder.jpg" alt="<?= __('Jeunes burkinabés', 'mf'); ?>">
                    <?php endif; ?>
                </div>
                <div class="project__content--wrapper">
                    <p class="project__desc"><?= $projectFields['projectShortDesc']; ?></p>
                    <a href="<?= the_permalink(); ?>" class="project__link"><?= str_replace(':projectName', '<span class="hidden">' . mf_remove_all_tags($projectFields['projectName']) . '</span>', __('Voir le projet :projectName', 'mf')); ?></a>
                </div>
            </article>
            <?php endwhile; else: ?>
                <span class="projects__empty loop__empty"><?= __('Il n’y a pas de projets à afficher pour le moment', 'mf'); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php if(function_exists('wp_pagenavi')) {
        wp_pagenavi( array(
            'query' => $posts
        ));
    }
    ?>
</main>

<?php get_footer(); ?>
