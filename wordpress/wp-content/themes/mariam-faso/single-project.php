<?php
/*
    Template Name: Projet
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <div class="project__landing single-landing">
        <div class="single-landing--color<?php if(!$fields['projectImg']) echo ' single-landing--opaque'; ?>">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <div class="single-landing__content">
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
        </div>
    </div>
    <div class="project">
        <section class="project__articles">
            <h2 class="second-title"><?= __('Description du projet', 'mf'); ?></h2>
            <?php if(have_rows('projectContentRepeater')):
                while(have_rows('projectContentRepeater')): the_row();
            ?>
            <div class="project__article">
                <article class="project__content">
                    <div class="article__content">
                        <h3 class="project__subtitle"><?= get_sub_field('projectContentSubtitle'); ?></h3>
                        <div class="project__content">
                            <?= get_sub_field('projectContent'); ?>
                        </div>
                    </div>
                    <?php
                        if(get_sub_field('projectContentImg')):
                            $image = get_sub_field('projectContentImg');
                    ?>
                    <div class="project__img--wrapper">
                        <img width="400" height="auto" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="project__img">
                    </div>
                    <?php endif; ?>
                </article>
            </div>
            <?php endwhile; endif; ?>
        </section>

        <section class="project__infos infos">
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
        </section>
    </div>

    <?php
            if($fields['projectGallery']):
                $images = $fields['projectGallery'];
        ?>
        <section class="project__gallery">
            <span class="second-title"><?= __('Photos du projet', 'mf'); ?></span>
            <div class="project__gallery-imgs">
                <?php foreach($images as $image): ?>
                <div class="project__img--wrapper">
                    <a href="<?= $image['url']; ?>" data-lightbox="project" data-title="<?= mf_get_image_alt($image); ?>">
                        <img width="300" heigth="auto" class="project__img" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

    <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="project__back back__link" title="<?= __('Aller sur la page des projets', 'mf'); ?>"><?= __('Retourner aux projets', 'mf'); ?></a>

    <?php get_template_part('parts/help'); ?>

</main>

<?php get_footer(); ?>
