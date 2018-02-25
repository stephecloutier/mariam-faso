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
    <div class="introduction__wrapper projects__introduction">
        <h1 class="projects__title main-title"><?= __('Nos projets', 'mf'); ?></h1>
        <div class="projects__intro main-intro">
            <?= $fields['projectsIntro']; ?>
        </div>
        <a href="<?= mf_get_page_url('template-gallery.php'); ?>" class="projects__button"><?= __('Voir la galerie photos', 'mf'); ?></a>
    </div>

    <div class="projects">
        <div class="projects__inside-wrapper">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $posts = new WP_Query([
                    'posts_per_page' => 6,
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
            <a class="project__link-wrapper"  href="<?= the_permalink(); ?>" title="<?= __('Aller sur la page individuelle du projet', 'mf'); ?>">
                <article class="projects__project project">
                    <span tabindex="0" class="about__project  about__project<?= ($projectFields['projectIsOver']) ? ('--over') : ('--inProgress'); ?>"><?= ($projectFields['projectIsOver']) ? ('Projet terminé') : ('Projet en cours'); ?></span>
                    <h2 class="project__title"><?= mf_get_the_excerpt(mf_remove_all_tags($projectFields['projectName']), false, 65); ?></h2>
                    <div class="project__img--wrapper">
                        <?php if($projectFields['projectImg']): $image = $projectFields['projectImg']; ?>
                        <img width="500" height="auto" src="<?= $image['sizes']['500']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" class="projectImg">
                        <?php else: ?>
                        <img class="project__img" width="200" height="auto" src="<?= get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?= __('Jeunes burkinabés', 'mf'); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="project__content--wrapper">
                        <p class="project__desc"><?= $projectFields['projectShortDesc']; ?></p>
                        <span class="project__link"><?= str_replace(':projectName', '<span class="hidden">' . mf_remove_all_tags($projectFields['projectName']) . '</span>', __('Voir le projet :projectName', 'mf')); ?></span>
                    </div>
                </article>
            </a>
            <?php endwhile; else: ?>
                <span class="projects__empty loop__empty"><?= __('Il n’y a pas de projets à afficher pour le moment', 'mf'); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <?php if(function_exists('wp_pagenavi')): ?>
    <div class="pagination__wrapper">
        <?php wp_pagenavi(array('query' => $posts)); ?>
    </div>
    <?php endif; ?>

    <div class="learn-more moreTrips">
        <div class="learn-more__wrapper">
            <p class="more__catchPhrase"><?= str_replace(':mariam-faso', '<strong class="more--strong">Mariam Faso</strong>', __('Envie de voir d’autres projets de :mariam-faso&nbsp;?', 'mf')); ?></p>
            <a href="<?= mf_get_page_url('template-trips.php'); ?>" class="more__link"><?= __('Découvrir nos voyages', 'mf'); ?></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
