<?php
/*
    Template Name: Page de contact
*/

get_header();
?>
<?php $fields = get_fields(); ?>
<main class="main">
    <ul class="breadcrumb">
    <?php mf_display_breadcrumb(); ?>
    </ul>
    <div class="introduction__wrapper">
        <h1 class="main-title contact__title"><?= __('Contact', 'mf'); ?></h1>
        <div class="contact__intro main-intro">
            <?= $fields['contactIntro']; ?>
        </div>
    </div>
    <article class="contact__infos infos">
        <div class="infos__wrapper">
            <div class="infos__general">
                <p class="infos__title infos__title--general"><?= __('Coordonnées générales', 'mf'); ?></p>
                <div class="infos__address">
                    <?php
                        if($fields['contactGeneralAddress']) {
                            echo $fields['contactGeneralAddress'];
                        } else {
                            echo '-';
                        }
                    ?>
                </div>
                <p class="infos__phone">
                    <?php
                        if($fields['contactGeneralPhone']) {
                            echo $fields['contactGeneralPhone'];
                        } else {
                            echo '-';
                        }
                    ?>
                </p>
                <p class="infos__mail">
                    <?php
                        if($fields['contactGeneralMail']) {
                            echo $fields['contactGeneralMail'];
                        } else {
                            echo '-';
                        }
                    ?>
                </p>
            </div>
            <div class="infos__persons">
                <?php if(have_rows('contactRepeater')):
                    while(have_rows('contactRepeater')): the_row();
                ?>
                <div class="infos__person">
                    <p class="infos__title"><?= get_sub_field('contactTitle'); ?></p>
                    <p class="infos__personName"><?= get_sub_field('contactName'); ?></p>

                    <div class="infos__address">
                    <?php
                        if(get_sub_field('contactAddress')) {
                            the_sub_field('contactAddress');
                        } else {
                            echo '-';
                        }
                    ?>
                    </div>
                    <p class="infos__phone">
                    <?php
                        if(get_sub_field('contactPhone')) {
                            the_sub_field('contactPhone');
                        } else {
                            echo '-';
                        }
                    ?>
                    </p>
                    <p class="infos__mail">
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
        </div>
    </article>

    <section class="contact__form">
        <div class="form__wrapper">
            <h2 class="form__title second-title"><?= __('Formulaire de contact', 'mf'); ?></h2>
            <div class="form__content">
                <p class="form__mendatoryfields"><?= __('Les champs munis d’un * sont obligatoires', 'mf') ?></p>
                <form action="#" method="post" class="form">
                    <label for="formName" class="form__label form__label--required"><?= __('Nom et prénom', 'mf'); ?></label>
                    <input required="required" type="text" name="sender-name" id="formName" class="form__input form__input--text" placeholder="Jean Valjean"></input>

                    <label for="formMail" class="form__label form__label--required"><?= __('Adresse mail', 'mf'); ?></label>
                    <input required="required" type="email" name="mail" id="formMail" class="form__input form__input--mail" placeholder="jeanvaljean@mail.be"></input>

                    <label for="formSubject" class="form__label"><?= __('Sujet', 'mf'); ?></label>
                    <input type="text" name="subject" id="formSubject" class="form__input form__input--text"></input>

                    <label for="formMessage" class="form__label form__label--required"><?= __('Message', 'mf'); ?></label>
                    <textarea rows="8" required="required" name="message" id="formMessage" class="form__input form__input--textarea"></textarea>

                    <button class="form__button" type="submit"><?= __('Envoyer', 'mf'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
