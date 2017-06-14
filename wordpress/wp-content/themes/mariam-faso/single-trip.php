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
        <article class="trip__description">
            <h2 class="second-title"><?= __('Description du voyage', 'mf'); ?></h2>
            <?php if(have_rows('tripContentRepeater')):
                while(have_rows('tripContentRepeater')): the_row();
            ?>
            <div class="trip__contentWrapper">
                <span class="trip__subtitle"><?= get_sub_field('tripContentSubtitle'); ?></span>
                <div class="trip__contente">
                    <?= get_sub_field('tripContent'); ?>
                </div>
                <?php
                    if(get_sub_field('tripContentImgs')):
                        $images = get_sub_field('tripContentImgs');
                ?>
                <div class="trip__imgWrapper">
                    <?php foreach($images as $image): ?>
                    <img width="400" height="400" src="<?= $image['url']; ?>" alt="<?= mf_get_image_alt($image); ?>" class="trip__img">
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endwhile; endif; ?>
        </article>

        <div class="trip__infos infos">
            <h2 class="second-title"><?= __('Informations sur le voyage', 'mf'); ?></h2>
            <?php if(have_rows('tripInfosRepeater')):
                while(have_rows('tripInfosRepeater')): the_row();
            ?>
            <div class="trip__info info__single">
                <span class="info__title"><?= get_sub_field('tripInfoName'); ?></span>
                <div class="info__content">
                    <?= get_sub_field('tripInfoContent'); ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <?php if(have_rows('tripConfessionRepeater')): ?>
        <div class="trip__confessions confessions">
            <h2 class="confessions__title second-title"><?= __('Témoignages', 'mf'); ?></h2>
            <?php while(have_rows('tripConfessionRepeater')): the_row(); ?>
            <div class="trip__confession confession">
                <div class="confession__content">
                    <?= get_sub_field('tripConfessionContent'); ?>
                </div>
                <span class="confession__author">- <?= get_sub_field('tripConfessionAuthor'); ?></span>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

        <span class="trip__more"><?= __('Vous avez participé à ce voyage et souhaitez partager votre expérience&nbsp;?', 'mf'); ?></span>
        <a href="<?= mf_get_page_url('template-contact.php'); ?>" class="trip__button button__more" title="<?= __('Aller sur la page de contact', 'mf'); ?>"><?= __('Contactez-nous&nbsp;!', 'mf'); ?></a>

        <a href="<?= mf_get_page_url('template-trips.php'); ?>" class="trip__back back__link" title="<?= __('Aller sur la page des voyages', 'mf'); ?>"><?= __('Retourner à la liste des voyages', 'mf'); ?></a>
    </div>
    <?php get_template_part('parts/help'); ?>
</main>

<?php get_footer(); ?>
