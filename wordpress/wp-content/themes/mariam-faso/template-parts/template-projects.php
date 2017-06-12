<?php

/*
    Template Name: Page des projets
*/
get_header();
echo 'All projects';
$fields = get_fields();
var_dump($fields);
?>

<main class="main">
    <div class="projects">
        <h1 class="projects__title main-title"></h1>
        <div class="projects__intro main-intro">
            
        </div>
    </div>

</main>

<?php get_footer(); ?>
