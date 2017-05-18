<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <header class="header">
        <h1 class="header__title">
            <a href="/">
                <img src="#" alt="<?php bloginfo('name') ?>">
                <span class="hidden"><?php bloginfo('name') ?></span>
            </a>
        </h1>
        <nav class="navigation">
            <h2 class="hidden">Navigation principale</h2>
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
            <a href="#" class="landing__button">Faire un don</a>
        <?php endif; ?>

    </header>