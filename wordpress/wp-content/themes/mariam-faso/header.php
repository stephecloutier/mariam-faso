<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" href="wp-content/themes/mariam-faso/assets/css/main.css">
</head>
<body>
    <?php if(is_front_page()): ?>
    <header class="header header--home">
        <h1 class="header__title">
            <a href="index.php" class="header__link">
                <img src="wp-content/themes/mariam-faso/assets/images/mariamfaso_logo_alt.svg" alt="<?php bloginfo('name') ?>" width="175" height="auto" class="header__logo"><!--
                --><span class="hidden"><?php bloginfo('name') ?></span>
            </a>
        </h1>
    <?php else: ?>
        <header class="header">
            <h1 class="header__title">
                <a href="index.php" class="header__link">
                    <img src="wp-content/themes/mariam-faso/assets/images/mariamfaso_logo.svg" alt="<?php bloginfo('name') ?>" width="175" height="auto" class="header__logo"><!--
                    --><span class="hidden"><?php bloginfo('name') ?></span>
                </a>
            </h1>
    <?php endif; ?>
        <nav class="navigation">
            <h2 class="hidden"><?= __('Navigation principale', 'mf'); ?></h2>
            <ul class="navigation__container">
                <?php foreach(mf_get_nav_items('main') as $item): ?>
                <li class="navigation__item">
                    <a href="<?= $item->url; ?>" class="navigation__link"><?= $item->label; ?></a>

                    <?php if($item->children): ?>
                    <ul class="navigation__sub-container">

                        <?php foreach($item->children as $sub): ?>
                        <li class="navigation__sub-item">
                            <a href="<?= $sub->url; ?>" class="navigation__link"><?= $sub->label; ?></a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                    <?php endif; ?>

                </li>
            <?php endforeach; ?>
            </ul>
        </nav>

        <?php if(is_front_page()): ?>
            <p class="landing__title">
                <?= get_field('landingCatchPhrase'); ?>
            </p>
            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="landing__button"><?= __('Faire un don', 'mf'); ?></a>
        <?php endif; ?>

        <?php if(!is_front_page()): ?>
        <ul class="breadcrumb">
        <?php mf_display_breadcrumb(); ?>
        </ul>
        <?php endif; ?>

    </header>
