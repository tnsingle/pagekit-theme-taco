<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme', 'theme:js/theme.js') ?>
    </head>
    <body>

        <?php if ($params['logo'] || $view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
        <header class="taco-header uk-position-relative uk-light">

            <div class="taco-header-content uk-position-relative uk-padding-large uk-position-z-index">
                <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                    <nav class="uk-align-right"><?= $view->menu('main', 'menu-navbar.php') ?></nav>
                <?php endif ?>
                <div class="uk-width-3-5@m">
                    <div class="uk-margin-auto uk-margin-remove-left@s uk-width-medium uk-width-large@s">
                    <a href="<?= $view->url()->get() ?>">
                        <?php if ($logo = $params['logo']) : ?>
                            <img src="<?= $this->escape($logo) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </a></div>
                    <?php if ($params['intro']) : ?>
                        <p class="taco-header-intro"><?= $params['intro'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            
            <?php if ($params['header_video_url']) : ?>
                <video class="taco-header-video uk-position-absolute uk-position-top" uk-video preload="auto" muted="" autoplay="" loop="">
                    <source src="<?= $params['header_video_url'] ?>" type="video/mp4">
                </video>
            <?php endif ?>
            
        </header>
        <?php endif ?>
        

        <div class="taco-main uk-block uk-flex">

            <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">

                <!-- Render content -->
                <?= $view->render('content') ?>

            </main>

            <?php if ($view->position()->exists('sidebar')) : ?>
            <aside class="uk-width-medium-1-4">
                <?= $view->position('sidebar') ?>
            </aside>
            <?php endif; ?>

        </div>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
