<?php

/*
    Template Name: Page des projets
*/
get_header();
$fields = get_fields();
?>

<main class="main">
    <div class="projects">
        <h1 class="projects__title main-title"><?= __('Nos projets', 'mf') ?></h1>
        <div class="projects__intro main-intro">
            <?= $fields['projectsIntro']; ?>
        </div>
        <div class="projects__buttons">
            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="projects__button"><?= __('Faire un don', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-travel.php'); ?>" class="projects__button"><?= __('Voyager', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-gallery.php'); ?>" class="projects__button"><?= __('Voir toutes les photos', 'mf'); ?></a>
        </div>




    </div>

</main>

<?php get_footer(); ?>
