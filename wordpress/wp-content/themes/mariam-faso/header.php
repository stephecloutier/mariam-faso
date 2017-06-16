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
        <div class="header__wrapper">
            <div class="header__top">
                <h1 class="header__title">
                    <a href="index.php" class="header__link">
                        <img src="wp-content/themes/mariam-faso/assets/images/mariamfaso_logo_alt.svg" alt="<?php bloginfo('name') ?>" width="175" height="auto" class="header__logo"><!--
                        --><span class="hidden"><?php bloginfo('name'); ?></span>
                    </a>
                </h1>
    <?php else: ?>
        <header class="header">
            <div class="header__wrapper">
                <div class="header__top">
                    <h1 class="header__title">
                        <a href="index.php" class="header__link">
                            <img src="wp-content/themes/mariam-faso/assets/images/mariamfaso_logo.svg" alt="<?php bloginfo('name') ?>" width="175" height="auto" class="header__logo"><!--
                            --><span class="hidden"><?php bloginfo('name') ?></span>
                        </a>
                    </h1>
    <?php endif; ?>
                <nav class="navigation">
                    <svg class="navIconSVG" id="navIconSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 142 142"  xml:space="preserve">
                        <g class="svg__group">
                            <rect class="svg__line svg__line--1" x="37.8" y="50.3" width="65" height="8"></rect>
                            <rect class="svg__line svg__line--2" x="37.8" y="67.5" width="65" height="8"></rect>
                            <rect class="svg__line svg__line--3" x="37.8" y="67.5" width="65" height="8"></rect>
                            <rect class="svg__line svg__line--4" x="37.8" y="84.7" width="65" height="8"></rect>
                        </g>
                    </svg>
                    <h2 class="hidden"><?= __('Navigation principale', 'mf'); ?></h2>
                    <ul class="navigation__list" role="menubar">
                        <?php foreach(mf_get_nav_items('main') as $item): ?>
                        <li tabindex="0" role="menuitem" class="navigation__item <?php if($item->children){ echo 'navigation__item--parent'; } ?>" <?php if($item->children) echo 'aria-haspopup="true"'; ?> >
                            <a href="<?= $item->url; ?>" class="navigation__link"><?= $item->label; ?></a>

                            <?php if($item->children): ?>
                            <ul class="navigation__sub-container" role="menu">

                                <?php foreach($item->children as $sub): ?>
                                <li tabindex="0" role="menuitem"  class="navigation__sub-item">
                                    <a href="<?= $sub->url; ?>" class="navigation__link"><?= $sub->label; ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>

                        </li>
                    <?php endforeach; ?>
                    </ul>
                </nav>
            </div>

            <?php if(is_front_page()): ?>
            <div class="landing">
                <div class="landing__title">
                    <?= get_field('landingCatchPhrase'); ?>
                </div>
                <a href="<?= mf_get_page_url('template-help.php'); ?>" class="landing__button"><?= __('Faire un don', 'mf'); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </header>

    <?php setlocale(LC_ALL, 'fr_BE.utf8'); ?>
