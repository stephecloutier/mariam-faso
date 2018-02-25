<?php
/*
    Template Name: Article (presse)
*/
get_header();
 ?>
<?php $fields = get_fields(); ?>
<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper">
        <h1 class="pressArticle__title second-title"><?= get_the_title(); ?></h1>
        <?php if($fields['articleIntroduction']): ?>
            <div class="pressArticle__intro main-intro">
                <?= $fields['articleIntroduction']; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="pressArticle__wrapper">
        <a class="pressArticle__dl" href="<?= $fields['articleImg']['url']; ?>" title="<?= __('Télécharger l’article', 'mf'); ?>"><?= __('Télécharger l’article', 'mf'); ?></a>
        <img class="pressArticle__img" width="300" height="auto" src="<?= wp_get_attachment_image_src($fields['articleImg']['id'], 'full')[0]; ?>" alt="<?= mf_get_image_alt('articleImg'); ?>">
        <a class="pressArticle__back back__link" href="<?= mf_get_page_url('template-press.php'); ?>" title="<?= __('Retourner à la liste d’articles', 'mf'); ?>"><?= __('Retourner à la liste d’articles', 'mf'); ?></a>
    </div>
    <div class="moreProjects learn-more">
        <div class="learn-more__wrapper">
            <p class="more__catchPhrase"><?= str_replace(':mariam-faso', '<strong class="more--strong">Mariam Faso</strong>', __('Envie d’en savoir plus sur :mariam-faso&nbsp;?', 'mf')); ?></p>
            <a class="more__link" href="<?= mf_get_page_url('template-projects.php'); ?>" title="<?= __('Aller à la page des projets', 'mf'); ?>"><?= __('Découvrir nos projets', 'mf'); ?></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
