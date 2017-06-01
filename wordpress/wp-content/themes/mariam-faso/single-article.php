<?php
/*
    Template Name: Article (presse)
*/
get_header();
 ?>
<?php $fields = get_fields(); ?>
<img width="300" height="auto" src="<?= wp_get_attachment_image_src($fields['articleImg']['id'], 'full')[0]; ?>" alt="<?= mf_get_image_alt('articleImg'); ?>">

 <?php get_footer(); ?>
