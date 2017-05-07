<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(''); ?></title>
        <link rel="stylesheet" href="<?php theme_asset('css/main.css'); ?>">
    </head>
    <body>
        <header>
            <h1><?php bloginfo('name'); ?> - [page]</h1>
            <p><?php bloginfo('description'); ?></p>
            <nav>
                <h2>Navigation principale</h2>
                <!-- <?php wp_nav_menu(['theme_location' => 'main']) ?> -->

                <ul class="navigation__container">
                    <?php foreach(mf_get_nav_items('main') as $item): ?>
                    <li class="navigation__item">
                        <a href="<?= $item->url; ?>" class="navigation__link"><?= $item->label; ?></a>

                        <?php if($item->children): ?>
                        <ul class="navigation__sub">
                            <?php foreach($item->children as $sub): ?>
                            <li class="navigation__item">
                                <a href="<?= $sub->url; ?>" class="navigation__link"><?= $sub->label; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>

                    </li>
                    <?php endforeach; ?>
                </ul>

            </nav>
        </header>
        <main>
