<?php
/*
    Template Name: Article (presse)
*/
get_header();
 ?>
<?php $fields = get_fields(); ?>
<main class="main">
    <div class="pressArticle">
        <h1 class="pressArticle__title"><?= $fields['articleTitle']; ?></h1>
        <?php if($fields['articleIntroduction']): ?>
            <div class="pressArticle__intro main-intro">
                <?= $fields['articleIntroduction']; ?>
            </div>
        <?php endif; ?>
        <a class="pressArticle__dl" href="<?= $fields['articleImg']['url']; ?>" title="<?= __('Télécharger l’article', 'mf'); ?>"><?= __('Télécharger l’article', 'mf'); ?></a>
        <img width="300" height="auto" src="<?= wp_get_attachment_image_src($fields['articleImg']['id'], 'full')[0]; ?>" alt="<?= mf_get_image_alt('articleImg'); ?>">
        <a class="pressArticle__back back__link" href="<?= mf_get_page_url('template-press.php'); ?>" title="<?= __('Retourner à la liste d’articles', 'mf'); ?>"><?= __('Retourner à la liste d’articles', 'mf'); ?></a>
    </div>
    <div class="moreProjects more">
        <p class="more__catchPhrase"><?= str_replace(':mariam-faso', '<strong class="more--strong">Mariam Faso</strong>', __('Envie d’en savoir plus sur :mariam-faso&nbsp;?', 'mf')); ?></p>
        <a class="more__link" href="<?= mf_get_page_url('template-projects.php'); ?>" title="<?= __('Aller à la page des projets', 'mf'); ?>"><?= __('Découvrir nos projets', 'mf'); ?></a>
    </div>
</main>

<?php get_footer(); ?>
