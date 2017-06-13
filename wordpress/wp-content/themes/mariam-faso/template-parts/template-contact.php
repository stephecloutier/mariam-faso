<?php
/*
    Template Name: Page de contact
*/

get_header();
?>
<?php $fields = get_fields(); ?>
<main class="main">
    <div class="contact">
        <h1 class="main-title contact__title"><?= __('Contact', 'mf'); ?></h1>
        <div class="contact__intro main-intro">
            <?= $fields['contactIntro']; ?>
        </div>

        <article class="contact__infos infos">
            <div class="infos__general">
                <p class="infos__title infos__title--general"><?= __('Coordonnées générales', 'mf'); ?></p>
                <p class="infos__address"><?= $fields['contactGeneralAddress']; ?></p>
                <p class="infos__phone"><?= $fields['contactGeneralPhone']; ?></p>
                <p class="infos__mail"><?= $fields['contactGeneralMail']; ?></p>
            </div>
            <div class="infos__persons">
                <?php if(have_rows('contactRepeater')):
                    while(have_rows('contactRepeater')): the_row();
                ?>
                <div class="infos__person">
                    <p class="infos__personTitle"><?= get_sub_field('contactTitle'); ?></p>
                    <p class="infos__personName"><?= get_sub_field('contactName'); ?></p>

                    <div class="infos__personAddress">
                    <?php
                        if(get_sub_field('contactAddress')) {
                            the_sub_field('contactAddress');
                        } else {
                            echo '-';
                        }
                    ?>
                    </div>
                    <p class="infos__personPhone">
                    <?php
                        if(get_sub_field('contactPhone')) {
                            the_sub_field('contactPhone');
                        } else {
                            echo '-';
                        }
                    ?>
                    </p>
                    <p class="infos__personMail">
                    <?php
                        if(get_sub_field('contactMail')) {
                            the_sub_field('contactMail');
                        } else {
                            echo '-';
                        }
                    ?>
                    </p>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </article>

        <section class="contact__form">
            <h2 class="form__title second-title"><?= __('Formulaire de contact', 'mf'); ?></h2>
            <p class="form__mendatoryfields"><?= __('Les champs munis d’un * sont obligatoires', 'mf') ?></p>
            <form action="#" method="post">
                <label required="required" for="formName" class="form__label form__label--required"><?= __('Nom et prénom', 'mf'); ?></label>
                <input type="text" name="sender-name" id="formName" class="form__input form__input--text" placeholder="Jean Valjean"></input>

                <label for="formMail" class="form__label form__label--required"><?= __('Adresse mail', 'mf'); ?></label>
                <input required="required" type="text" name="mail" id="formMail" class="form__input form__input--mail" placeholder="jeanvaljean@mail.be"></input>

                <label for="formSubject" class="form__label"><?= __('Sujet', 'mf'); ?></label>
                <input type="text" name="subject" id="formSubject" class="form__input form__input--text"></input>

                <label for="formMessage" class="form__label"><?= __('Message', 'mf'); ?></label>
                <textarea required="required" name="message" id="formMessage" class="form__input form__input--textarea"></textarea>

                <button type="submit"><?= __('Envoyer', 'mf'); ?></button>
            </form>
        </section>
    </div>
</main>

<?php get_footer(); ?>
