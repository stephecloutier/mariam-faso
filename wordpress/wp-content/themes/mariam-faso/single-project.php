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
            <h1 class="single-landing__title project__title"><?= mf_remove_p_tags($fields['projectName']); ?></h1>
        </div>
    </div>

</main>

<?php get_footer(); ?>
