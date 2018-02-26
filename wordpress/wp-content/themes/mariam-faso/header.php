<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/main.css">
    <?php setlocale(LC_ALL, 'fr_BE.utf8'); ?>
</head>
<body>
    <?php if(is_front_page()): ?>
    <header class="header header--home">
        <div class="header__wrapper">
            <div class="header__top">
                <h1 class="header__title">
                    <a href="<?= get_home_url(); ?>" class="header__link">
                        <svg class="logo_svg logo_svg--home" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289.8 164.2"><path class="st0" d="M25.2 134.7c.2 0 .4.1.5.2.1.1.2.3.3.6l5.3 13.8v.2c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6c-.3 0-.5-.1-.6-.2-.1-.1-.2-.2-.2-.4l-.9-2.4h-6.9l-.9 2.4c0 .1-.1.2-.2.4-.1.1-.3.2-.6.2h-1.6c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.2l5.3-13.8.3-.6c.1-.1.3-.2.5-.2h2.5zm1.2 9.5L24 138l-2.4 6.2h4.8zM38.4 134.4c1 0 1.8.1 2.6.4.7.3 1.4.6 1.9 1s.9.8 1.1 1.3c.3.5.4.9.4 1.3 0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.5c-.2 0-.4 0-.6-.1-.1-.1-.2-.2-.3-.4-.2-.4-.6-.7-1-.9-.4-.3-1.1-.4-2-.4-.4 0-.7 0-1.1.1l-.9.3c-.3.2-.5.3-.6.6-.1.2-.2.5-.2.7 0 .3.1.6.2.8.1.2.4.4.7.5.3.2.8.3 1.3.4.5.1 1.2.3 2 .5.9.2 1.6.4 2.3.7.6.3 1.1.6 1.6.9.4.4.7.8.9 1.2s.3 1 .3 1.6c0 .7-.1 1.3-.4 1.8-.3.6-.7 1-1.2 1.4-.5.4-1.2.7-2 .9-.8.2-1.7.3-2.6.3-.8 0-1.6-.1-2.3-.3-.7-.2-1.4-.5-2-.9-.6-.4-1-.8-1.4-1.3-.3-.5-.5-1.1-.6-1.7 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4 0 .6.1s.2.2.3.4c.1.2.2.4.4.6.1.2.3.4.6.5.2.1.6.3.9.4.4.1.8.1 1.4.1.4 0 .9 0 1.3-.1s.8-.2 1.1-.3c.3-.2.6-.3.7-.6s.3-.5.3-.8c0-.3-.1-.6-.3-.8-.2-.2-.5-.4-.9-.5-.4-.1-.9-.3-1.5-.4-.6-.1-1.3-.3-2.1-.5-.7-.2-1.4-.4-1.9-.6-.5-.2-1-.5-1.3-.9-.4-.3-.6-.8-.8-1.2-.2-.5-.3-1-.3-1.7s.1-1.3.4-1.8c.3-.6.7-1 1.2-1.4.5-.4 1.1-.7 1.8-.9.4-.1 1.2-.3 2-.3zM47.9 149.9c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h6.4c.9 0 1.7.1 2.3.4.6.3 1.1.6 1.5 1.1.4.4.7.9.8 1.4s.2 1 .2 1.4c0 .4-.1.8-.2 1.2-.1.3-.3.6-.4.9s-.3.4-.5.6c-.2.2-.3.3-.4.3.4.3.9.7 1.2 1.3.4.6.6 1.3.6 2.1 0 .6-.1 1.1-.3 1.6-.2.5-.5 1-.9 1.5-.4.4-.9.8-1.5 1.1-.6.3-1.3.4-2 .4h-6.8zm8.4-10.8c0-.6-.2-1-.5-1.3-.3-.3-.9-.4-1.7-.4h-3.9v3.4h3.9c.8 0 1.3-.1 1.7-.4.3-.4.5-.8.5-1.3zm-6 8.1h4c.8 0 1.4-.2 1.8-.5.4-.3.6-.8.6-1.3s-.2-1-.6-1.4c-.4-.3-1-.5-1.7-.5h-4v3.7zM72.4 147.2c.2 0 .3.1.4.2.1.1.2.3.2.4v1.5c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-9.6c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.8c.2 0 .3.1.4.2.1.1.2.3.2.4v11.9h7.2zM84.6 141.2c-.9 0-1.5.2-1.9.6-.4.4-.6 1-.6 1.9v5.7c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.3.8-.6 1.2-.8.4-.2 1-.3 1.7-.3h1c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.4zM87.7 144.3c0-.8.1-1.6.4-2.3.2-.7.6-1.3 1.1-1.9.5-.5 1-.9 1.7-1.3.7-.3 1.4-.5 2.2-.5.8 0 1.6.1 2.2.4.7.3 1.2.7 1.7 1.2s.8 1.1 1.1 1.8c.2.7.4 1.4.4 2.1v1c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-7.3c0 .3.1.6.2.9.1.3.3.5.6.6s.5.3.8.4c.3.1.6.1.9.1.5 0 .8 0 1.1-.1.3-.1.5-.2.7-.4.2-.1.3-.2.4-.2.1 0 .2-.1.4-.1h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4 0 .2-.1.5-.3.8s-.5.6-.9.9c-.4.3-.9.6-1.6.8-.6.2-1.3.3-2.1.3s-1.6-.1-2.2-.4c-.7-.3-1.2-.7-1.7-1.2s-.8-1.1-1.1-1.9c-.3-.6-.4-1.4-.4-2.2zM93 141c-.4 0-.8.1-1.1.2-.3.1-.5.3-.7.5-.2.2-.4.4-.5.7-.1.2-.2.5-.2.7h4.9c0-.2-.1-.4-.2-.7-.1-.2-.2-.5-.4-.7-.2-.2-.4-.4-.7-.5-.2-.2-.6-.2-1.1-.2zM103.6 149.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3zM106.6 141.4c.1-.3.2-.6.4-1 .2-.3.5-.7.9-1 .4-.3.9-.6 1.4-.8.6-.2 1.2-.3 2-.3s1.4.1 2 .3c.6.2 1.1.5 1.5.9.4.4.8.9 1 1.4.2.6.3 1.2.3 2v6.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.7c-.3.4-.7.8-1.3 1.1-.6.3-1.3.4-2.2.4-.6 0-1.2-.1-1.7-.2-.5-.2-.9-.4-1.2-.7-.3-.3-.6-.7-.8-1.1-.2-.4-.3-.9-.3-1.4 0-1 .4-1.8 1.1-2.4.7-.6 1.7-1 2.9-1.2l3.6-.6c0-.6-.2-1-.6-1.3-.4-.2-.9-.4-1.5-.4-.4 0-.6.1-.9.2-.2.1-.4.2-.6.4-.1.1-.3.2-.4.2-.1 0-.2.1-.4.1h-2c-.1 0-.3 0-.4-.1.1 0 .1-.1.1-.2zm3.7 6.1c.5 0 .9-.1 1.3-.2s.7-.3 1-.6c.3-.2.5-.5.6-.8.1-.3.2-.6.2-.9v-.2l-3 .5c-.6.1-1 .2-1.3.4-.3.2-.4.5-.4.8 0 .3.2.5.5.7.3.3.6.3 1.1.3zM122.8 145.8c0 .4.1.8.4 1.1.2.3.7.4 1.3.4h1.3c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6c-1.4 0-2.4-.3-3.1-1-.7-.7-1.1-1.7-1.1-3v-4.7h-1.4c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-1.4c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v3.6h2.8c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-2.8v4.6zM130.9 134.4c.2 0 .3.1.4.2.1.1.2.3.2.4v1.7c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H129c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.9zm.5 14.9c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v10.2zM139.4 138.4c.8 0 1.5.1 2.2.4.6.2 1.2.6 1.7 1s.9.9 1.1 1.5c.3.6.4 1.2.5 1.9v2.2c-.1.7-.2 1.3-.5 1.9-.3.6-.7 1.1-1.1 1.5-.5.4-1 .8-1.7 1s-1.4.4-2.2.4c-.8 0-1.5-.1-2.2-.4-.7-.2-1.2-.6-1.7-1s-.8-.9-1.1-1.5c-.3-.6-.4-1.2-.5-1.9v-.5-.6-.6-.5c0-.7.2-1.3.5-1.9.3-.6.7-1.1 1.1-1.5.5-.4 1-.8 1.7-1 .7-.3 1.4-.4 2.2-.4zm2.6 4.9c0-.5-.1-.8-.3-1.1-.2-.3-.4-.5-.6-.7-.2-.2-.5-.3-.8-.4-.3-.1-.6-.1-.9-.1-.3 0-.6 0-.9.1-.3.1-.6.2-.8.4-.2.2-.5.4-.6.7-.2.3-.3.7-.3 1.1v1.9c0 .4.2.8.3 1.1.2.3.4.5.6.7.2.2.5.3.8.4.3.1.6.1.9.1.3 0 .6 0 .9-.1.3-.1.6-.2.8-.4.2-.2.4-.4.6-.7.2-.3.3-.7.3-1.1v-.4-.6-.5-.4zM158 149.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-5.5c0-.9-.2-1.6-.6-2.1-.4-.5-1-.8-1.9-.8-.8 0-1.4.3-1.8.8-.4.5-.7 1.2-.7 2.1v5.5c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.4.8-.7 1.3-.9.5-.2 1.1-.4 1.8-.4.9 0 1.6.1 2.2.4.6.3 1.1.6 1.4 1.1.4.5.6 1 .8 1.6.2.6.2 1.3.2 2v5.9zM167.1 146.7c0-.2 0-.3-.2-.4-.1-.1-.3-.2-.5-.3-.3-.1-.6-.2-1-.3-.4-.1-1-.2-1.6-.3-.6-.1-1.2-.3-1.6-.5-.4-.2-.8-.5-1-.8-.3-.3-.4-.6-.5-1-.1-.4-.2-.8-.2-1.2s.1-.9.3-1.3c.2-.4.5-.8.9-1.1.4-.3.9-.6 1.4-.8.6-.2 1.2-.3 1.9-.3s1.3.1 1.9.2c.6.2 1 .4 1.4.6.4.3.7.6.9.9s.3.7.4 1c0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.4 0-.5-.1-.1-.1-.2-.2-.4-.3-.1-.1-.3-.2-.5-.3-.2-.1-.5-.1-1-.1-.4 0-.8.1-1.2.2-.3.1-.5.4-.5.7 0 .2 0 .3.1.4.1.1.2.2.5.3.2.1.5.2.9.3.4.1.9.2 1.6.3 1.3.3 2.2.7 2.7 1.3.5.6.8 1.3.8 2.2 0 .4-.1.9-.3 1.3-.2.4-.5.8-.9 1.1-.4.3-.9.6-1.5.8-.6.2-1.3.3-2 .3-.8 0-1.5-.1-2-.3-.6-.2-1.1-.4-1.5-.7-.4-.3-.7-.6-.9-1-.2-.4-.3-.7-.3-1.1 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .4.1.5.2.1.1.2.2.4.3.1.1.3.2.6.3.2.1.6.2 1.1.2h.7c.2 0 .4-.1.6-.1.2-.1.4-.2.5-.3s0-.2 0-.3zM187.3 149.9c-.2 0-.4-.1-.6-.2l-.3-.3-6.1-9.1v9c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H178c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4.1.6.2l.3.3 6.1 9.1v-9c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.8c.2 0 .3.1.4.2.1.1.2.3.2.4v14.1c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6zM197.6 138.4c.8 0 1.5.1 2.2.4.7.2 1.2.6 1.7 1s.9.9 1.1 1.5c.3.6.4 1.2.5 1.9v2.2c-.1.7-.2 1.3-.5 1.9-.3.6-.7 1.1-1.1 1.5-.5.4-1 .8-1.7 1-.6.2-1.4.4-2.2.4-.8 0-1.5-.1-2.2-.4s-1.2-.6-1.7-1-.8-.9-1.1-1.5c-.3-.6-.4-1.2-.5-1.9v-.5-.6-.6-.5c0-.7.2-1.3.5-1.9.3-.6.7-1.1 1.1-1.5.5-.4 1-.8 1.7-1 .7-.3 1.4-.4 2.2-.4zm2.6 4.9c0-.5-.2-.8-.3-1.1-.2-.3-.4-.5-.6-.7-.2-.2-.5-.3-.8-.4-.3-.1-.6-.1-.9-.1-.3 0-.6 0-.9.1-.3.1-.6.2-.8.4-.2.2-.5.4-.6.7-.2.3-.3.7-.3 1.1v1.9c0 .4.1.8.3 1.1.2.3.4.5.6.7.2.2.5.3.8.4.3.1.6.1.9.1.3 0 .6 0 .9-.1.3-.1.6-.2.8-.4.2-.2.5-.4.6-.7.2-.3.3-.7.3-1.1v-.4-.6-.5c.1-.2.1-.3 0-.4zM210.9 141.2c-.9 0-1.5.2-1.9.6-.4.4-.6 1-.6 1.9v5.7c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.3.8-.6 1.2-.8.4-.2 1-.3 1.7-.3h1c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.4zM218.9 138.4c.4 0 .9 0 1.2.1.4.1.7.2.9.3.3.1.5.3.7.4.2.2.3.3.5.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.1.1-.3.3-.5.4-.2.2-.4.3-.7.4l-.9.3c-.4.1-.8.1-1.2.1-.7 0-1.4-.1-2-.4-.6-.3-1.1-.7-1.5-1.1-.4-.5-.7-1-1-1.6-.2-.6-.4-1.3-.4-1.9v-.8-.8c0-.7.2-1.3.4-1.9.2-.6.6-1.2 1-1.6.4-.5.9-.9 1.5-1.1.6-.3 1.2-.4 2-.4zm-2.1 5.2v1.2c.1.9.4 1.6.9 2 .5.4 1.1.6 1.8.6s1.3-.2 1.8-.6c.5-.4.8-1 .8-1.8v-.8-.8c-.1-.8-.4-1.4-.8-1.8s-1.1-.7-1.8-.7-1.3.2-1.8.6c-.5.5-.8 1.2-.9 2.1zM228.5 144.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-1.4c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h6.7c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-6.7zM243.8 134.4c1 0 1.8.1 2.6.4.7.3 1.4.6 1.9 1s.9.8 1.1 1.3c.3.5.4.9.4 1.3 0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.5c-.2 0-.4 0-.6-.1-.1-.1-.2-.2-.3-.4-.2-.4-.6-.7-1-.9-.4-.3-1.1-.4-2-.4-.4 0-.7 0-1.1.1l-.9.3c-.3.2-.5.3-.6.6-.1.2-.2.5-.2.7 0 .3.1.6.2.8.1.2.4.4.7.5.3.2.8.3 1.3.4.5.1 1.2.3 2 .5.9.2 1.6.4 2.3.7.6.3 1.1.6 1.6.9.4.4.7.8.9 1.2.2.5.3 1 .3 1.6 0 .7-.1 1.3-.4 1.8-.3.6-.7 1-1.2 1.4-.5.4-1.2.7-2 .9-.8.2-1.7.3-2.6.3-.8 0-1.6-.1-2.3-.3-.7-.2-1.4-.5-2-.9-.6-.4-1-.8-1.4-1.3-.3-.5-.5-1.1-.6-1.7 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4 0 .6.1s.2.2.3.4c.1.2.2.4.4.6s.3.4.6.5c.2.1.6.3.9.4.4.1.8.1 1.4.1.4 0 .9 0 1.3-.1s.8-.2 1.1-.3c.3-.2.6-.3.7-.6s.3-.5.3-.8c0-.3-.1-.6-.3-.8-.2-.2-.5-.4-.9-.5-.4-.1-.9-.3-1.5-.4-.6-.1-1.3-.3-2.1-.5-.7-.2-1.4-.4-1.9-.6-.5-.2-1-.5-1.3-.9-.4-.3-.6-.8-.8-1.2-.2-.5-.3-1-.3-1.7s.1-1.3.4-1.8c.3-.6.7-1 1.2-1.4.5-.4 1.1-.7 1.8-.9.4-.1 1.2-.3 2-.3zM252.4 139.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v5.5c0 .9.2 1.6.6 2.1.4.5 1 .8 1.8.8s1.4-.3 1.8-.8c.4-.5.6-1.2.6-2.1v-5.5c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v10.2c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.3.3-.7.6-1.2.9-.5.3-1.1.4-1.8.4-.9 0-1.6-.1-2.2-.4-.6-.3-1-.6-1.4-1.1-.4-.5-.6-1-.7-1.6-.1-.6-.2-1.3-.2-2v-5.9zM270.2 138.4c.4 0 .9 0 1.2.1.4.1.7.2.9.3.3.1.5.3.7.4.2.2.3.3.5.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H274c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.1.1-.3.3-.5.4-.2.2-.4.3-.7.4l-.9.3c-.4.1-.8.1-1.2.1-.7 0-1.4-.1-2-.4-.6-.3-1.1-.7-1.5-1.1-.4-.5-.7-1-1-1.6-.2-.6-.4-1.3-.4-1.9v-.8-.8c0-.7.2-1.3.4-1.9.2-.6.6-1.2 1-1.6.4-.5.9-.9 1.5-1.1.7-.3 1.3-.4 2.1-.4zm-2.1 5.2v1.2c.1.9.4 1.6.9 2 .5.4 1.1.6 1.8.6s1.3-.2 1.8-.6c.5-.4.8-1 .8-1.8v-.8-.8c-.1-.8-.4-1.4-.8-1.8-.5-.4-1.1-.7-1.8-.7s-1.3.2-1.8.6c-.5.5-.8 1.2-.9 2.1z"/><g><path class="st1" d="M16.3 98.5c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h70.2c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v5c0 .5-.2.9-.5 1.3s-.8.5-1.3.5H18.2c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3v-5z"/></g><g><path class="st0" d="M144.1 75.1c.5 0 .9.2 1.3.5s.5.8.5 1.3v4.8c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-21.7v13.2h20.3c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v4.8c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-20.3v15.6c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V76.9c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h29zM212.3 74.4c3 0 5.7.4 8 1.2 2.3.8 4.2 1.8 5.8 3.1 1.5 1.2 2.7 2.6 3.5 4 .8 1.5 1.2 2.9 1.3 4.2 0 .5-.1 1-.5 1.3-.4.3-.8.5-1.3.5h-4.8c-.8 0-1.3-.1-1.7-.4-.4-.3-.7-.7-1.1-1.2-.7-1.1-1.7-2.1-3.1-3-1.4-.8-3.4-1.3-6.1-1.3-1.2 0-2.3.1-3.4.4-1.1.2-2 .6-2.8 1.1-.8.5-1.4 1.1-1.9 1.7-.5.7-.7 1.4-.7 2.3 0 1 .2 1.9.6 2.5.4.7 1.2 1.2 2.2 1.7 1 .5 2.4.9 4 1.3 1.7.4 3.8.9 6.2 1.4 2.7.6 5.1 1.3 7 2.1 2 .8 3.6 1.7 4.8 2.9 1.2 1.1 2.2 2.4 2.8 3.8.6 1.4.9 3.1.9 5 0 2-.5 3.9-1.4 5.7-.9 1.7-2.2 3.2-3.9 4.5-1.7 1.2-3.7 2.2-6.2 3s-5.2 1.1-8.2 1.1c-2.5 0-5-.3-7.3-.9-2.3-.6-4.4-1.5-6.1-2.6-1.8-1.2-3.2-2.5-4.3-4.2-1.1-1.6-1.7-3.4-1.8-5.4 0-.5.1-1 .5-1.3.4-.3.8-.5 1.3-.5h4.8c.8 0 1.4.1 1.8.4.4.3.7.7 1 1.2.3.6.7 1.2 1.2 1.8.5.6 1.1 1.1 1.8 1.6s1.7.8 2.9 1.1c1.2.3 2.6.4 4.3.4 1.4 0 2.7-.1 3.9-.3 1.3-.2 2.4-.5 3.3-1 1-.5 1.7-1.1 2.3-1.8s.9-1.6.9-2.6-.3-1.8-1-2.4c-.6-.6-1.6-1.2-2.9-1.6-1.3-.5-2.9-.9-4.8-1.3s-4.1-.9-6.6-1.6c-2.3-.5-4.2-1.2-5.9-1.9-1.7-.7-3.1-1.7-4.2-2.8-1.1-1.1-1.9-2.4-2.5-3.8-.5-1.5-.8-3.2-.8-5.3 0-2 .4-3.9 1.4-5.6.9-1.7 2.1-3.2 3.7-4.4 1.6-1.2 3.5-2.2 5.7-2.9 2.5-.9 4.9-1.2 7.4-1.2zM236.5 92.8c.1-2.5.6-4.9 1.5-7.2.8-2.2 2.1-4.2 3.7-5.8 1.6-1.7 3.7-3 6.1-3.9 2.4-1 5.3-1.5 8.7-1.5 3.3 0 6.2.5 8.6 1.4 2.4 1 4.5 2.3 6.1 3.9s2.9 3.6 3.7 5.8c.9 2.2 1.4 4.6 1.5 7.2 0 .9.1 1.8.1 2.9v6.4c0 1-.1 2-.1 2.9-.1 2.5-.6 4.9-1.5 7.2-.8 2.2-2.1 4.2-3.7 5.8s-3.7 3-6.1 3.9c-2.5 1-5.4 1.4-8.7 1.4-3.4 0-6.2-.5-8.7-1.4-2.4-1-4.5-2.3-6.1-3.9-1.6-1.7-2.9-3.6-3.7-5.8-.8-2.2-1.3-4.6-1.5-7.2 0-.9-.1-1.8-.1-2.9v-3.2-3.2c.1-1 .1-1.9.2-2.8zm30.7.3c-.2-3.3-1.2-5.8-3.2-7.6-1.9-1.8-4.5-2.7-7.6-2.7-3.2 0-5.7.9-7.6 2.7-1.9 1.8-3 4.3-3.2 7.6-.1 1.7-.1 3.6-.1 5.7s0 4 .1 5.7c.2 3.3 1.2 5.8 3.2 7.5 1.9 1.8 4.5 2.6 7.6 2.6 3.2 0 5.7-.9 7.6-2.6 1.9-1.8 3-4.3 3.2-7.5.1-1.7.1-3.6.1-5.7s0-3.9-.1-5.7zM191 120.3l-16.6-42.9c-.3-.8-.6-1.3-1-1.7-.4-.4-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7L145 120.3c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6s.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.2-.4.2-.5zm-23-34.8l4.3 11.1h-8.6l4.3-11.1z"/></g><g><path class="st0" d="M137.5 14.8c5.7 0 10 1.3 12.9 3.9 2.9 2.6 4.4 6.3 4.4 10.9 0 3.3-.8 6.1-2.3 8.5-1.5 2.3-3.7 4.1-6.7 5.2l9.4 16.8c.1.3.2.5.2.7 0 .4-.1.8-.4 1.1-.3.3-.6.4-1.1.4h-5.8c-.9 0-1.6-.2-2-.6-.4-.4-.7-.8-.9-1.2l-8.9-15.8h-9v15.8c0 .5-.2.9-.5 1.3s-.8.5-1.3.5H120c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.6c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h17.5zm-10.2 21.4h9.9c2.6 0 4.6-.4 6.2-1.4 1.5-.9 2.3-2.6 2.3-5.2s-.8-4.2-2.3-5.1c-1.5-.9-3.6-1.3-6.2-1.3h-9.9v13zM165.3 62.3c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.6c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h5.5c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3s-.8.5-1.3.5h-5.5zM113 60L96.3 17.1c-.3-.8-.6-1.3-1-1.7-.4-.4-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7L67 60c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6s.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.2-.3.2-.5zM90 25.2l4.3 11.1h-8.6L90 25.2zM225.8 60l-16.6-42.9c-.3-.8-.6-1.3-1-1.7s-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7L179.9 60c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6s.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.2-.3.1-.5zm-22.9-34.8l4.3 11.1h-8.6l4.3-11.1zM254.2 36.3l12.9-19.7c.2-.2.5-.6.9-1.1.4-.5 1.1-.7 2-.7h4.6c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V31.2l-8.8 12.2c-.2.4-.5.7-1 1.1-.4.4-.9.6-1.6.6h-3.5c-.6 0-1.2-.2-1.6-.6-.4-.4-.7-.8-1-1.1L241 31.2v29.3c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.6c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h4.6c.9 0 1.6.2 2 .7.4.5.7.9.9 1.1l13 19.7z"/><g><path class="st0" d="M38.6 36.3l12.9-19.7c.2-.2.5-.6.9-1.1s1.1-.7 2-.7H59c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V31.2l-8.8 12.2c-.2.4-.5.7-1 1.1-.4.3-.9.5-1.5.5h-3.5c-.6 0-1.2-.2-1.6-.6-.4-.4-.7-.8-1-1.1l-8.8-12.2v29.3c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.6c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h4.6c.9 0 1.6.2 2 .7.4.5.7.9.9 1.1l12.9 19.7z"/></g></g></svg><!--
                        --><span class="hidden"><?php bloginfo('name'); ?></span>
                    </a>
                </h1>
    <?php else: ?>
        <header class="header">
            <div class="header__wrapper">
                <div class="header__top">
                    <h1 class="header__title">
                        <a href="<?= get_home_url(); ?>" class="header__link">
                            <svg class="logo_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 289.8 164.2"><path class="st0" d="M24.2 134.7c.2 0 .4.1.5.2.1.1.2.3.3.6l5.3 13.8v.2c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6c-.3 0-.5-.1-.6-.2-.1-.1-.2-.2-.2-.4l-.9-2.4h-6.9l-.9 2.4c0 .1-.1.2-.2.4-.1.1-.3.2-.6.2h-1.6c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.2l5.3-13.8.3-.6c.1-.1.3-.2.5-.2h2.5zm1.2 9.6l-2.4-6.2-2.4 6.2h4.8zM37.4 134.5c1 0 1.8.1 2.6.4.7.3 1.4.6 1.9 1s.9.8 1.1 1.3c.3.5.4.9.4 1.3 0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.5c-.2 0-.4 0-.6-.1s-.2-.2-.3-.4c-.2-.4-.6-.7-1-.9-.4-.3-1.1-.4-2-.4-.4 0-.7 0-1.1.1l-.9.3c-.3.2-.5.3-.6.6-.1.2-.2.5-.2.7 0 .3.1.6.2.8.1.2.4.4.7.5.3.2.8.3 1.3.4.5.1 1.2.3 2 .5.9.2 1.6.4 2.3.7.6.3 1.1.6 1.6.9.4.4.7.8.9 1.2.2.5.3 1 .3 1.6 0 .7-.1 1.3-.4 1.8-.3.6-.7 1-1.2 1.4-.5.4-1.2.7-2 .9-.8.2-1.7.3-2.6.3-.8 0-1.6-.1-2.3-.3-.7-.2-1.4-.5-2-.9-.6-.4-1-.8-1.4-1.3-.3-.5-.5-1.1-.6-1.7 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4 0 .6.1s.2.2.3.4c.1.2.2.4.4.6.1.2.3.4.6.5.2.1.6.3.9.4.4.1.8.1 1.4.1.4 0 .9 0 1.3-.1s.8-.2 1.1-.3.6-.3.7-.6c.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.5-.4-.9-.5-.4-.1-.9-.3-1.5-.4-.6-.1-1.3-.3-2.1-.5-.7-.2-1.4-.4-1.9-.6-.5-.2-1-.5-1.3-.9-.4-.3-.6-.8-.8-1.2-.2-.5-.3-1-.3-1.7s.1-1.3.4-1.8c.3-.6.7-1 1.2-1.4.5-.4 1.1-.7 1.8-.9.4-.2 1.2-.3 2-.3zM46.9 150c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h6.4c.9 0 1.7.1 2.3.4.6.3 1.1.6 1.5 1.1.4.4.7.9.8 1.4s.2 1 .2 1.4c0 .4-.1.8-.2 1.2-.1.3-.3.6-.4.9-.2.2-.3.4-.5.6-.2.2-.3.3-.4.3.4.3.9.7 1.2 1.3.4.6.6 1.3.6 2.1 0 .6-.1 1.1-.3 1.6-.2.5-.5 1-.9 1.5-.4.4-.9.8-1.5 1.1-.6.3-1.3.4-2 .4h-6.8zm8.4-10.9c0-.6-.2-1-.5-1.3-.3-.3-.9-.4-1.7-.4h-3.9v3.4h3.9c.8 0 1.3-.1 1.7-.4.3-.3.5-.7.5-1.3zm-6.1 8.2h4c.8 0 1.4-.2 1.8-.5.4-.3.6-.8.6-1.3s-.2-1-.6-1.4-1-.5-1.7-.5h-4v3.7zM71.4 147.3c.2 0 .3.1.4.2.1.1.2.3.2.4v1.5c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-9.6c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.8c.2 0 .3.1.4.2.1.1.2.3.2.4v11.9h7.2zM83.6 141.3c-.9 0-1.5.2-1.9.6-.4.4-.6 1-.6 1.9v5.7c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.3.8-.6 1.2-.8.4-.2 1-.3 1.7-.3h1c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.4zM86.7 144.3c0-.8.1-1.6.4-2.3.2-.7.6-1.3 1.1-1.9.5-.5 1-.9 1.7-1.3.7-.3 1.4-.5 2.2-.5.8 0 1.6.1 2.2.4.7.3 1.2.7 1.7 1.2s.8 1.1 1.1 1.8c.2.7.4 1.4.4 2.1v1c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-7.3c0 .3.1.6.2.9.1.3.3.5.6.6s.5.3.8.4c.3.1.6.1.9.1.5 0 .8 0 1.1-.1.3-.1.5-.2.7-.4.2-.1.3-.2.4-.2.1 0 .2-.1.4-.1h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4 0 .2-.1.5-.3.8s-.5.6-.9.9c-.4.3-.9.6-1.6.8-.6.2-1.3.3-2.1.3s-1.6-.1-2.2-.4c-.7-.3-1.2-.7-1.7-1.2s-.8-1.1-1.1-1.9c-.3-.5-.4-1.3-.4-2.2zm5.3-3.2c-.4 0-.8.1-1.1.2-.3.1-.5.3-.7.5-.2.2-.4.4-.5.7-.1.2-.2.5-.2.7h4.9c0-.2-.1-.4-.2-.7-.1-.2-.2-.5-.4-.7-.2-.2-.4-.4-.7-.5-.3-.2-.6-.2-1.1-.2zM102.6 149.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.3c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3zM105.6 141.4c.1-.3.2-.6.4-1s.5-.7.9-1c.4-.3.9-.6 1.4-.8.6-.2 1.2-.3 2-.3s1.4.1 2 .3c.6.2 1.1.5 1.5.9.4.4.8.9 1 1.4.2.6.3 1.2.3 2v6.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.7c-.3.4-.7.8-1.3 1.1-.6.3-1.3.4-2.2.4-.6 0-1.2-.1-1.7-.2-.5-.2-.9-.4-1.2-.7-.3-.3-.6-.7-.8-1.1-.2-.4-.3-.9-.3-1.4 0-1 .4-1.8 1.1-2.4.7-.6 1.7-1 2.9-1.2l3.6-.6c0-.6-.2-1-.6-1.3-.4-.2-.9-.4-1.5-.4-.4 0-.6.1-.9.2-.2.1-.4.2-.6.4-.1.1-.3.2-.4.2-.1 0-.2.1-.4.1h-2c-.1 0-.3 0-.4-.1.1.1.1 0 .1-.2zm3.6 6.2c.5 0 .9-.1 1.3-.2s.7-.3 1-.6c.3-.2.5-.5.6-.8.1-.3.2-.6.2-.9v-.2l-3 .5c-.6.1-1 .2-1.3.4-.3.2-.4.5-.4.8 0 .3.2.5.5.7.3.2.7.3 1.1.3zM121.8 145.9c0 .4.1.8.4 1.1.2.3.7.4 1.3.4h1.3c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6c-1.4 0-2.4-.3-3.1-1-.7-.7-1.1-1.7-1.1-3v-4.7h-1.4c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-1.4c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.4v-3.6c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v3.6h2.8c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-2.8v4.6zM129.9 134.5c.2 0 .3.1.4.2s.2.3.2.4v1.7c0 .2-.1.3-.2.4s-.3.2-.4.2H128c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-1.7c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.9zm.4 14.9c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H128c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v10.2zM138.3 138.4c.8 0 1.5.1 2.2.4.6.2 1.2.6 1.7 1s.9.9 1.1 1.5c.3.6.4 1.2.5 1.9v2.2c-.1.7-.2 1.3-.5 1.9-.3.6-.7 1.1-1.1 1.5-.5.4-1 .8-1.7 1-.6.2-1.4.4-2.2.4-.8 0-1.5-.1-2.2-.4-.7-.2-1.2-.6-1.7-1s-.8-.9-1.1-1.5c-.3-.6-.4-1.2-.5-1.9v-.5-.6-.6-.5c0-.7.2-1.3.5-1.9.3-.6.7-1.1 1.1-1.5.5-.4 1-.8 1.7-1 .7-.2 1.4-.4 2.2-.4zm2.7 4.9c0-.5-.1-.8-.3-1.1-.2-.3-.4-.5-.6-.7-.2-.2-.5-.3-.8-.4-.3-.1-.6-.1-.9-.1-.3 0-.6 0-.9.1-.3.1-.6.2-.8.4-.2.2-.5.4-.6.7-.2.3-.3.7-.3 1.1v1.9c0 .4.2.8.3 1.1.2.3.4.5.6.7.2.2.5.3.8.4.3.1.6.1.9.1.3 0 .6 0 .9-.1.3-.1.6-.2.8-.4.2-.2.4-.4.6-.7.2-.3.3-.7.3-1.1v-.4-.6-.5-.4zM157 149.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-5.5c0-.9-.2-1.6-.6-2.1-.4-.5-1-.8-1.9-.8-.8 0-1.4.3-1.8.8-.4.5-.7 1.2-.7 2.1v5.5c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.4.8-.7 1.3-.9.5-.2 1.1-.4 1.8-.4.9 0 1.6.1 2.2.4.6.3 1.1.6 1.4 1.1.4.5.6 1 .8 1.6.2.6.2 1.3.2 2v5.9zM166 146.7c0-.2 0-.3-.2-.4-.1-.1-.3-.2-.5-.3-.3-.1-.6-.2-1-.3-.4-.1-1-.2-1.6-.3-.6-.1-1.2-.3-1.6-.5-.4-.2-.8-.5-1-.8-.3-.3-.4-.6-.5-1-.1-.4-.2-.8-.2-1.2s.1-.9.3-1.3c.2-.4.5-.8.9-1.1.4-.3.9-.6 1.4-.8.6-.2 1.2-.3 1.9-.3s1.3.1 1.9.2c.6.2 1 .4 1.4.6.4.3.7.6.9.9.2.3.3.7.4 1 0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.4 0-.5-.1-.1-.1-.2-.2-.4-.3-.1-.1-.3-.2-.5-.3-.2-.1-.5-.1-1-.1-.4 0-.8.1-1.2.2-.3.1-.5.4-.5.7 0 .2 0 .3.1.4.1.1.2.2.5.3.2.1.5.2.9.3.4.1.9.2 1.6.3 1.3.3 2.2.7 2.7 1.3.5.6.8 1.3.8 2.2 0 .4-.1.9-.3 1.3-.2.4-.5.8-.9 1.1-.4.3-.9.6-1.5.8-.6.2-1.3.3-2 .3-.8 0-1.5-.1-2-.3-.6-.2-1.1-.4-1.5-.7-.4-.3-.7-.6-.9-1-.2-.4-.3-.7-.3-1.1 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .4.1.5.2.1.1.2.2.4.3.1.1.3.2.6.3.2.1.6.2 1.1.2h.7c.2 0 .4-.1.6-.1.2-.1.4-.2.5-.3s0-.1 0-.3zM186.3 150c-.2 0-.4-.1-.6-.2l-.3-.3-6.1-9.1v9c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H177c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-14.1c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4.1.6.2l.3.3 6.1 9.1v-9c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.8c.2 0 .3.1.4.2.1.1.2.3.2.4v14.1c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.6zM196.6 138.4c.8 0 1.5.1 2.2.4.7.2 1.2.6 1.7 1s.9.9 1.1 1.5c.3.6.4 1.2.5 1.9v2.2c-.1.7-.2 1.3-.5 1.9-.3.6-.7 1.1-1.1 1.5-.5.4-1 .8-1.7 1-.6.2-1.4.4-2.2.4-.8 0-1.5-.1-2.2-.4-.6-.2-1.2-.6-1.7-1s-.8-.9-1.1-1.5c-.3-.6-.4-1.2-.5-1.9v-.5-.6-.6-.5c0-.7.2-1.3.5-1.9.3-.6.7-1.1 1.1-1.5.5-.4 1-.8 1.7-1 .6-.2 1.4-.4 2.2-.4zm2.6 4.9c0-.5-.2-.8-.3-1.1-.2-.3-.4-.5-.6-.7-.2-.2-.5-.3-.8-.4-.3-.1-.6-.1-.9-.1-.3 0-.6 0-.9.1-.3.1-.6.2-.8.4-.2.2-.5.4-.6.7-.2.3-.3.7-.3 1.1v1.9c0 .4.1.8.3 1.1.2.3.4.5.6.7.2.2.5.3.8.4.3.1.6.1.9.1.3 0 .6 0 .9-.1.3-.1.6-.2.8-.4.2-.2.5-.4.6-.7.2-.3.3-.7.3-1.1v-.4-.6-.5-.4zM209.8 141.3c-.9 0-1.5.2-1.9.6-.4.4-.6 1-.6 1.9v5.7c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H205c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-10.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v.5c.4-.3.8-.6 1.2-.8.4-.2 1-.3 1.7-.3h1c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.2.2-.4.2h-1.4zM217.8 138.4c.4 0 .9 0 1.2.1.4.1.7.2.9.3.3.1.5.3.7.4.2.2.3.3.5.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.1.1-.3.3-.5.4-.2.2-.4.3-.7.4l-.9.3c-.3.1-.8.1-1.2.1-.7 0-1.4-.1-2-.4-.6-.3-1.1-.7-1.5-1.1-.4-.5-.7-1-1-1.6s-.4-1.3-.4-1.9v-.8-.8c0-.7.2-1.3.4-1.9.2-.6.6-1.2 1-1.6.4-.5.9-.9 1.5-1.1.7-.2 1.3-.4 2-.4zm-2 5.3v1.2c.1.9.4 1.6.9 2 .5.4 1.1.6 1.8.6s1.3-.2 1.8-.6c.5-.4.8-1 .8-1.8v-.8-.8c-.1-.8-.4-1.4-.8-1.8-.5-.4-1.1-.7-1.8-.7s-1.3.2-1.8.6c-.5.5-.8 1.2-.9 2.1zM227.4 144.8c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-1.4c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h6.7c.2 0 .3.1.4.2.1.1.2.3.2.4v1.4c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-6.7zM242.8 134.5c1 0 1.8.1 2.6.4.7.3 1.4.6 1.9 1s.9.8 1.1 1.3c.3.5.4.9.4 1.3 0 .2 0 .3-.2.4-.1.1-.3.2-.4.2h-1.5c-.2 0-.4 0-.6-.1s-.2-.2-.3-.4c-.2-.4-.6-.7-1-.9-.4-.3-1.1-.4-2-.4-.4 0-.7 0-1.1.1l-.9.3c-.3.2-.5.3-.6.6-.1.2-.2.5-.2.7 0 .3.1.6.2.8.1.2.4.4.7.5.3.2.8.3 1.3.4.5.1 1.2.3 2 .5.9.2 1.6.4 2.3.7.6.3 1.1.6 1.6.9.4.4.7.8.9 1.2.2.5.3 1 .3 1.6 0 .7-.1 1.3-.4 1.8-.3.6-.7 1-1.2 1.4-.5.4-1.2.7-2 .9-.8.2-1.7.3-2.6.3-.8 0-1.6-.1-2.3-.3-.7-.2-1.4-.5-2-.9-.6-.4-1-.8-1.4-1.3-.3-.5-.5-1.1-.6-1.7 0-.2 0-.3.2-.4.1-.1.3-.2.4-.2h1.5c.2 0 .4 0 .6.1s.2.2.3.4c.1.2.2.4.4.6.1.2.3.4.6.5.2.1.6.3.9.4.4.1.8.1 1.4.1.4 0 .9 0 1.3-.1s.8-.2 1.1-.3c.3-.2.6-.3.7-.6.2-.2.3-.5.3-.8 0-.3-.1-.6-.3-.8-.2-.2-.5-.4-.9-.5-.4-.1-.9-.3-1.5-.4-.6-.1-1.3-.3-2.1-.5-.7-.2-1.4-.4-1.9-.6-.5-.2-1-.5-1.3-.9-.4-.3-.6-.8-.8-1.2-.2-.5-.3-1-.3-1.7s.1-1.3.4-1.8c.3-.6.7-1 1.2-1.4.5-.4 1.1-.7 1.8-.9.4-.2 1.1-.3 2-.3zM251.4 139.2c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v5.5c0 .9.2 1.6.6 2.1.4.5 1 .8 1.8.8s1.4-.3 1.8-.8c.4-.5.6-1.2.6-2.1v-5.5c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v10.2c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2h-1.7c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.3.3-.7.6-1.2.9-.5.3-1.1.4-1.8.4-.9 0-1.6-.1-2.2-.4-.6-.3-1-.6-1.4-1.1-.4-.5-.6-1-.7-1.6-.1-.6-.2-1.3-.2-2v-5.9zM269.1 138.4c.4 0 .9 0 1.2.1.4.1.7.2.9.3.3.1.5.3.7.4.2.2.3.3.5.4V135c0-.2.1-.3.2-.4.1-.1.3-.2.4-.2h1.7c.2 0 .3.1.4.2.1.1.2.3.2.4v14.3c0 .2-.1.3-.2.4-.1.1-.3.2-.4.2H273c-.2 0-.3-.1-.4-.2-.1-.1-.2-.3-.2-.4v-.5c-.1.1-.3.3-.5.4-.2.2-.4.3-.7.4l-.9.3c-.4.1-.8.1-1.2.1-.7 0-1.4-.1-2-.4-.6-.3-1.1-.7-1.5-1.1-.4-.5-.7-1-1-1.6-.2-.6-.4-1.3-.4-1.9v-.8-.8c0-.7.2-1.3.4-1.9.2-.6.6-1.2 1-1.6.4-.5.9-.9 1.5-1.1.7-.2 1.3-.4 2-.4zm-2 5.3v1.2c.1.9.4 1.6.9 2 .5.4 1.1.6 1.8.6s1.3-.2 1.8-.6c.5-.4.8-1 .8-1.8v-.8-.8c-.1-.8-.4-1.4-.8-1.8-.5-.4-1.1-.7-1.8-.7s-1.3.2-1.8.6c-.5.5-.8 1.2-.9 2.1z"/><g><path class="st1" d="M15.3 98.5c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h70.2c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v5c0 .5-.2.9-.5 1.3s-.8.5-1.3.5H17.1c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3v-5z"/></g><g><path class="st0" d="M143.1 75.1c.5 0 .9.2 1.3.5s.5.8.5 1.3v4.8c0 .5-.2.9-.5 1.3s-.8.5-1.3.5h-21.7v13.2h20.3c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v4.8c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-20.3v15.6c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V77c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h29zM211.3 74.5c3 0 5.7.4 8 1.2 2.3.8 4.2 1.8 5.8 3.1 1.5 1.2 2.7 2.6 3.5 4 .8 1.5 1.2 2.9 1.3 4.2 0 .5-.1 1-.5 1.3-.4.3-.8.5-1.3.5h-4.8c-.8 0-1.3-.1-1.7-.4-.4-.3-.7-.7-1.1-1.2-.7-1.1-1.7-2.1-3.1-3-1.4-.8-3.4-1.3-6.1-1.3-1.2 0-2.3.1-3.4.4-1.1.2-2 .6-2.8 1.1-.8.5-1.4 1.1-1.9 1.7-.5.7-.7 1.4-.7 2.3 0 1 .2 1.9.6 2.5.4.7 1.2 1.2 2.2 1.7 1 .5 2.4.9 4 1.3 1.7.4 3.8.9 6.2 1.4 2.7.6 5.1 1.3 7 2.1 2 .8 3.6 1.7 4.8 2.9 1.2 1.1 2.2 2.4 2.8 3.8.6 1.4.9 3.1.9 5 0 2-.5 3.9-1.4 5.7-.9 1.7-2.2 3.2-3.9 4.5-1.7 1.2-3.7 2.2-6.2 3-2.4.7-5.2 1.1-8.2 1.1-2.5 0-5-.3-7.3-.9-2.3-.6-4.4-1.5-6.1-2.6-1.8-1.2-3.2-2.5-4.3-4.2-1.1-1.6-1.7-3.4-1.8-5.4 0-.5.1-1 .5-1.3.4-.3.8-.5 1.3-.5h4.8c.8 0 1.4.1 1.8.4.4.3.7.7 1 1.2.3.6.7 1.2 1.2 1.8.5.6 1.1 1.1 1.8 1.6.8.5 1.7.8 2.9 1.1 1.2.3 2.6.4 4.3.4 1.4 0 2.7-.1 3.9-.3 1.3-.2 2.4-.5 3.3-1 1-.5 1.7-1.1 2.3-1.8s.9-1.6.9-2.6-.3-1.8-1-2.4c-.6-.6-1.6-1.2-2.9-1.6-1.3-.5-2.9-.9-4.8-1.3s-4.1-.9-6.6-1.6c-2.3-.5-4.2-1.2-5.9-1.9-1.7-.7-3.1-1.7-4.2-2.8-1.1-1.1-1.9-2.4-2.5-3.8-.5-1.5-.8-3.2-.8-5.3 0-2 .4-3.9 1.4-5.6.9-1.7 2.1-3.2 3.7-4.4 1.6-1.2 3.5-2.2 5.7-2.9 2.5-.9 4.9-1.2 7.4-1.2zM235.4 92.9c.1-2.5.6-4.9 1.5-7.2.8-2.2 2.1-4.2 3.7-5.8 1.6-1.7 3.7-3 6.1-3.9 2.4-1 5.3-1.5 8.7-1.5 3.3 0 6.2.5 8.6 1.4 2.4 1 4.5 2.3 6.1 3.9s2.9 3.6 3.7 5.8c.9 2.2 1.4 4.6 1.5 7.2 0 .9.1 1.8.1 2.9v6.4c0 1-.1 2-.1 2.9-.1 2.5-.6 4.9-1.5 7.2-.8 2.2-2.1 4.2-3.7 5.8-1.6 1.7-3.7 3-6.1 3.9-2.5 1-5.4 1.4-8.7 1.4-3.4 0-6.2-.5-8.7-1.4-2.4-1-4.5-2.3-6.1-3.9-1.6-1.7-2.9-3.6-3.7-5.8-.8-2.2-1.3-4.6-1.5-7.2 0-.9-.1-1.8-.1-2.9v-3.2-3.2c.1-1 .2-2 .2-2.8zm30.8.3c-.2-3.3-1.2-5.8-3.2-7.6-1.9-1.8-4.5-2.7-7.6-2.7-3.2 0-5.7.9-7.6 2.7-1.9 1.8-3 4.3-3.2 7.6-.1 1.7-.1 3.6-.1 5.7s0 4 .1 5.7c.2 3.3 1.2 5.8 3.2 7.5 1.9 1.8 4.5 2.6 7.6 2.6 3.2 0 5.7-.9 7.6-2.6 1.9-1.8 3-4.3 3.2-7.5.1-1.7.1-3.6.1-5.7s0-4-.1-5.7zM189.9 120.4l-16.6-42.9c-.3-.8-.6-1.3-1-1.7-.4-.4-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7L144 120.4c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6.4-.4.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.2-.4.1-.5zM167 85.6l4.3 11.1h-8.6l4.3-11.1z"/></g><g><path class="st0" d="M136.5 14.8c5.7 0 10 1.3 12.9 3.9 2.9 2.6 4.4 6.3 4.4 10.9 0 3.3-.8 6.1-2.3 8.5-1.5 2.3-3.7 4.1-6.7 5.2l9.4 16.8c.1.3.2.5.2.7 0 .4-.1.8-.4 1.1-.3.3-.6.4-1.1.4h-5.8c-.9 0-1.6-.2-2-.6-.4-.4-.7-.8-.9-1.2l-8.9-15.8h-9v15.8c0 .5-.2.9-.5 1.3s-.8.5-1.3.5H119c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.7c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h17.5zm-10.2 21.4h9.9c2.6 0 4.6-.4 6.2-1.4 1.5-.9 2.3-2.6 2.3-5.2 0-2.5-.8-4.2-2.3-5.1-1.5-.9-3.6-1.3-6.2-1.3h-9.9v13zM164.2 62.4c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.7c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h5.5c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3s-.8.5-1.3.5h-5.5zM111.9 60.1L95.3 17.2c-.3-.8-.6-1.3-1-1.7-.4-.4-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7L66 60.1c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6.4-.4.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.2-.4.1-.5zM89 25.3l4.3 11.1h-8.6L89 25.3zM224.8 60.1l-16.6-42.9c-.3-.8-.6-1.3-1-1.7-.4-.4-.9-.6-1.6-.6h-7.5c-.7 0-1.3.2-1.6.6-.4.4-.7 1-1 1.7l-16.6 42.9c0 .1-.1.3-.1.5 0 .5.2.9.5 1.3.4.4.8.5 1.3.5h4.9c.9 0 1.5-.2 1.9-.6s.6-.8.7-1.1l6-15.6h15.3l6 15.6c.1.4.4.7.7 1.1.4.4 1 .6 1.9.6h4.9c.5 0 .9-.2 1.3-.5.4-.4.5-.8.5-1.3.2-.2.1-.4.1-.5zm-23-34.8l4.3 11.1h-8.6l4.3-11.1zM253.1 36.4L266 16.7c.2-.2.5-.6.9-1.1.4-.5 1.1-.7 2-.7h4.6c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5H268c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V31.2l-8.8 12.2c-.2.4-.5.7-1 1.1-.4.4-.9.6-1.6.6h-3.5c-.6 0-1.2-.2-1.6-.6-.4-.4-.7-.8-1-1.1L240 31.2v29.3c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.7c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h4.6c.9 0 1.6.2 2 .7.4.5.7.9.9 1.1l12.9 19.7z"/><g><path class="st0" d="M37.6 36.4l12.9-19.7c.2-.2.5-.6.9-1.1.4-.5 1.1-.7 2-.7H58c.5 0 .9.2 1.3.5.4.4.5.8.5 1.3v43.9c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V31.2l-8.8 12.2c-.2.4-.5.7-1 1.1-.4.4-.9.6-1.6.6h-3.5c-.6 0-1.2-.2-1.6-.6-.4-.4-.7-.8-1-1.1l-8.8-12.2v29.3c0 .5-.2.9-.5 1.3-.4.4-.8.5-1.3.5h-5.5c-.5 0-.9-.2-1.3-.5-.4-.4-.5-.8-.5-1.3V16.7c0-.5.2-.9.5-1.3.4-.4.8-.5 1.3-.5h4.6c.9 0 1.6.2 2 .7.4.5.7.9.9 1.1l13 19.7z"/></g></g></svg><!--
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
                <a href="<?= mf_get_page_url('template-projects.php'); ?>" class="landing__button"><?= __('Voir nos projets', 'mf'); ?></a>
            </div>
            <?php endif; ?>
        </div>
        <?php wp_head(); ?>
    </header>