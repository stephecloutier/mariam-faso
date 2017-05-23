<?php
/*
    Template Name: Page de contact
*/

get_header();
?>

        <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <section>
                <h1><?php the_title(); ?></h1>
                <div class="content__wysiwyg wysiwyg"><?php the_content(); ?></div>
            </section>
        <?php endwhile; endif; ?>

            <section>
                <h1>Formulaire de contact</h1>
                <form class="contact__form" action="#" method="post">
                    <fieldset>
                        <label for="name">Votre nom</label>
                        <input type="text" name="name" id="name">
                        <label for="mail">Votre email</label>
                        <input type="email" name="mail" id="mail">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </fieldset>
                    <fieldset>
                        <button type="submit" name="button"></button>
                    </fieldset>
                </form>
            </section>

<?php get_footer() ?>
