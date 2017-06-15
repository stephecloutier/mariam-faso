<div class="main__help help <?= 'help--' . rand(0, 2); ?>">
    <div class="help__wrapper">
        <p class="help__title"><?= __('Envie d’aider&nbsp;?', 'mf'); ?></p>
        <p class="help__desc"><?= __('Mariam Faso a besoin de votre aider pour mener à bien ses projets', 'mf'); ?></p>
        <div class="help__links">
            <a href="<?= mf_get_page_url('template-help.php'); ?>" class="help__link help__link--donate"><?= __('Faire un don', 'mf'); ?></a>
            <a href="<?= mf_get_page_url('template-agenda.php'); ?>" class="help__link help__link--events"><?= __('Participer à nos évènements', 'mf'); ?></a>
            <a href="https://www.facebook.com/MariamFaso/" class="help__link help__link--share"><?= __('Partager notre site web', 'mf'); ?></a>
        </div>
    </div>
</div>
