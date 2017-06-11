<?php
/*
    Template Name: Article (presse)
*/
get_header();
 ?>
<?php $fields = get_fields(); ?>
<div class="pressArticle">
    <h1 class="pressArticle__title"><?= $fields['articleTitle']; ?></h1>
    <?php if($fields['articleIntroduction']): ?>
        <p class="pressArticle__intro"><?= $fields['articleIntroduction']; ?></p>
    <?php endif; ?>
    <a class="pressArticle__dl" href="<?= $fields['articleImg']['url']; ?>" title="<?= __('Télécharger l’article', 'mf'); ?>"><?= __('Télécharger l’article', 'mf'); ?></a>
    <img width="300" height="auto" src="<?= wp_get_attachment_image_src($fields['articleImg']['id'], 'full')[0]; ?>" alt="<?= mf_get_image_alt('articleImg'); ?>">
    <a class="pressArticle__previous" href="<?= mf_get_page_url('template-press.php'); ?>" title="<?= __('Retourner à la liste d’articles', 'mf'); ?>"><?= __('Retourner à la liste d’articles', 'mf'); ?></a>
</div>
<div class="moreProjects">
    <p class="moreProjects__catchPhrase"><?= str_replace(':mariam-faso', '<strong class="moreProjects--strong">Mariam Faso</strong>', __('Envie d’en savoir plus sur :mariam-faso&nbsp;?', 'mf')); ?></p>
    <a class="moreProjects__link" href="<?= mf_get_page_url('template-projects.php'); ?>" title="<?= __('Aller à la page des projets', 'mf'); ?>"><?= __('Découvrir nos projets', 'mf'); ?></a>
</div>

<?php get_footer(); ?>
