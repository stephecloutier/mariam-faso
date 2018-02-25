<?php
/*
    Template Name: Voyage
*/
get_header();
$fields = get_fields();
$date = new DateTime($fields['tripStartDate']);
?>

<main class="main">
    <div class="trip__landing single-landing">
        <div class="single-landing--color<?php if(!$fields['tripImg']) echo ' single-landing--opaque'; ?>">
            <ul class="breadcrumb">
            <?php mf_display_breadcrumb(); ?>
            </ul>
            <div class="single-landing__content">
                <h1 class="single-landing__title trip__title"><?= mf_remove_p_tags($fields['tripName']); ?></h1>
                <time class="single-landing__subtitle trip__subtitle" datetime="<?= $date->format('c'); ?>"><?= strftime("%B %Y", $date->getTimestamp()); ?></time>
                <p class="single-landing__intro trip__intro"><?= $fields['tripDesc'] ?></p>
                <?php if($fields['tripImg']): ?>
                <style>
                    .trip__landing {
                        background-image: url('<?= $fields['tripImg']['url']; ?>');
                    }
                </style>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="trip">
        <section class="trip__articles">
            <h2 class="second-title"><?= __('Description du voyage', 'mf'); ?></h2>
                <?php if(have_rows('tripContentRepeater')):
                    while(have_rows('tripContentRepeater')): the_row();
                ?>
                <div class="trip__article">
                    <article class="trip__content">
                        <div class="article__content">
                            <h3 class="trip__subtitle"><?= get_sub_field('tripContentSubtitle'); ?></h3>
                            <div class="trip__contente">
                                <?= get_sub_field('tripContent'); ?>
                            </div>
                        </div>
                        <?php
                            if(get_sub_field('tripContentImg')):
                                $image = get_sub_field('tripContentImg');
                        ?>
                        <div class="trip__img--wrapper">
                            <img width="400" height="auto" src="<?= $image['sizes']['500']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="trip__img">
                        </div>
                        <?php endif; ?>
                    </article>
                </div>
                <?php endwhile; endif; ?>
        </section>

        <?php if(have_rows('tripInfosRepeater')): ?>
        <section class="trip__infos infos">
            <h2 class="second-title"><?= __('Informations sur le voyage', 'mf'); ?></h2>
            <?php
                while(have_rows('tripInfosRepeater')): the_row();
            ?>
            <div class="trip__info info__single">
                <span class="info__title"><?= get_sub_field('tripInfoName'); ?></span>
                <div class="info__content">
                    <?= get_sub_field('tripInfoContent'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </section>
        <?php endif; ?>
    </div>
    <?php if(have_rows('tripConfessionsRepeater')): ?>
    <section class="trip__confessions confessions">
        <h2 class="confessions__title second-title"><?= __('Témoignages', 'mf'); ?></h2>
        <div class="trip__confessions--wrapper">
            <?php while(have_rows('tripConfessionsRepeater')): the_row(); ?>
            <div class="trip__confession confession">
                <div class="confession__content">
                    <?= get_sub_field('tripConfessionContent'); ?>
                </div>
                <span class="confession__author">- <?= get_sub_field('tripConfessionAuthor'); ?></span>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <?php endif; ?>

    <div class="trip__more">
        <span class="more__catchPhrase"><?= __('Vous avez participé à ce voyage et souhaitez partager votre expérience&nbsp;?', 'mf'); ?></span>
        <a class="more__button" href="<?= mf_get_page_url('template-contact.php'); ?>" title="<?= __('Aller sur la page de contact', 'mf'); ?>"><?= __('Contactez-nous&nbsp;!', 'mf'); ?></a>
    </div>


    <a href="<?= mf_get_page_url('template-trips.php'); ?>" class="trip__back back__link" title="<?= __('Aller sur la page des voyages', 'mf'); ?>"><?= __('Retourner à la liste des voyages', 'mf'); ?></a>
    <?php get_template_part('parts/help'); ?>
</main>

<?php get_footer(); ?>
