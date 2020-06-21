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
        <header class="taco-header uk-position-relative uk-overflow-hidden uk-light">

            <div class="taco-header-content uk-position-relative uk-padding-large uk-position-z-index">
                <?php if ($view->menu()->exists('main') || $view->position()->exists('navbar')) : ?>
                    <nav class="uk-align-right"><?= $view->menu('main', 'menu-navbar.php') ?></nav>
                <?php endif ?>
                <div class="uk-width-large">
                    <a href="<?= $view->url()->get() ?>">
                        <?php if ($logo = $params['logo']) : ?>
                            <img src="<?= $this->escape($logo) ?>" alt="">
                        <?php else : ?>
                            <?= $params['title'] ?>
                        <?php endif ?>
                    </a>
                    <?php if ($params['intro']) : ?>
                        <p class="taco-header-intro"><?= $params['intro'] ?></p>
                    <?php endif ?>
                </div>
            </div>
            
            <video class="taco-header-video uk-position-absolute uk-position-top uk-position-right" uk-video preload="auto" muted="" autoplay="" loop="">
                <source src="./packages/inspiredbynikki/theme-taco/students.mp4" type="video/mp4">
            </video>
        </header>
        <?php endif ?>
        

        <div id="taco-main" class="taco-main uk-block">
    <div class="uk-container uk-container-center">

        <div class="uk-flex">

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

    </div>
</div>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
