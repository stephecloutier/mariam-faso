<?php
/*
    Template Name: Projet
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <div class="project">
        <div class="project__landing single-landing">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <h1 class="single-landing__title project__title"><?= mf_remove_p_tags($fields['projectName']); ?></h1>
            <p class="single-landing__intro project__intro"><?= $fields['projectDesc']; ?></p>
            <?php if($fields['projectImg']): ?>
            <style>
                .project__landing {
                    background-image: url('<?= $fields['projectImg']['url']; ?>');
                }
            </style>
            <?php endif; ?>
        </div>

        <article class="project__description">
            <h2 class="second-title"><?= __('Description du projet', 'mf'); ?></h2>
            <?php if(have_rows('projectContentRepeater')):
                while(have_rows('projectContentRepeater')): the_row();
            ?>
            <div class="project__contentWrapper">
                <span class="project__subtitle"><?= get_sub_field('projectContentSubtitle'); ?></span>
                <div class="project__content">
                    <?= get_sub_field('projectContent'); ?>
                </div>
                <?php
                    if(get_sub_field('projectContentImgs')):
                        $images = get_sub_field('projectContentImgs');
                ?>
                <div class="project__imgWrapper">
                    <?php foreach($images as $image): ?>
                    <img width="400" height="400" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="project__img">
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>
        </article>

        <div class="project__infos infos">
            <h2 class="second-title"><?= __('Informations sur le projet', 'mf'); ?></h2>
            <?php if(have_rows('projectInfosRepeater')):
                while(have_rows('projectInfosRepeater')): the_row();
            ?>
            <div class="project__info info__single">
                <span class="info__title"><?= get_sub_field('projectInfoName'); ?></span>
                <div class="info__content">
                    <?= get_sub_field('projectInfoContent'); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>

            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="infos__button" title="<?= __('Aller sur la page de don', 'mf') ?>"><?= __('Faire un don pour aider ce projet', 'mf'); ?></a>
        </div>

        <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="project__back back__link" title="<?= __('Aller sur la page des projets', 'mf'); ?>"><?= __('Retourner aux projets', 'mf'); ?></a>
    </div>

    <?php get_template_part('parts/help'); ?>

</main>

<?php get_footer(); ?>
