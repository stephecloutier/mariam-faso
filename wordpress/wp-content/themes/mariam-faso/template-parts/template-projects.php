<?php

/*
    Template Name: Page des projets
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <div class="projects">
        <h1 class="projects__title main-title"><?= __('Nos projets', 'mf'); ?></h1>
        <div class="projects__intro main-intro">
            <?= $fields['projectsIntro']; ?>
        </div>
        <div class="projects__buttons">
            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="projects__button"><?= __('Faire un don', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-travel.php'); ?>" class="projects__button"><?= __('Voyager', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-gallery.php'); ?>" class="projects__button"><?= __('Voir toutes les photos', 'mf'); ?></a>
        </div>

        <div class="projects__allProjects allProjects">
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
        <article class="allProjects__project project <?= ($projectFields['projectIsOver']) ? ('project--over') : ('project--inProgress'); ?>">
            <h2 class="projectTitle"><?= $projectFields['projectName']; ?></h2>
                <?php if($projectFields['projectImg']): $image = $projectFields['projectImg']; ?>
            <img width="500" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt('projectImg'); ?>" class="projectImg<?php if($projectFields['projectIsBig']) echo ' projectImg--big'; ?>">
                <?php endif; ?>
            <p class="project__shortDesc"><?= $projectFields['projectShortDesc']; ?></p>
            <a href="<?= the_permalink(); ?>" class="project__link"><?= str_replace(':projectName', '<span class="hidden">' . $projectFields['projectName'] . '</span>', __('Voir le projet :projectName', 'mf')); ?></a>
        </article>
        <?php endwhile; else: ?>
            <span class="projects__empty"><?= __('Il n’y a pas de projets à afficher pour le moment', 'mf'); ?></span>
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
