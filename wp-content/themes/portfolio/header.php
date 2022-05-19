<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" type="text/css" href="<?/*= dw_mix('css/style.css'); */?>">
    <script type="text/javascript" src="<?/*= dw_mix('js/script.js'); */?>"></script>-->

    <?php wp_head(); ?>

    <title><?= wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
</head>
<body>
<header class="header">
    <h1 role="heading" aria-level="1"><?= the_title() ?></h1>
    <a href="/">
        <img src="" alt="logo">
    </a>
    <nav class="header__nav nav" role="navigation">
        <h2 class="nav__title" role="heading" aria-level="2">
            Menu principal
        </h2>
        <ul class="nav__container">
            <?php foreach (dw_get_menu_items('primary') as $link): ?>  <!--la fonction renvoie un tableau d'item-->
                <li class="<?= $link->getBemClasses('nav__item') ?>">
                    <a href="<?= $link->url ?>" class="nav__link"><?= $link->label ?></a>
                    <?php if($link->hasSubItems()): ?>
                        <ul class="nav__subitems">
                            <?php foreach ($link->subitems as $sub): ?>
                                <li class="<?= $link->getBemClasses('nav__subitem') ?>">
                                    <a href="<?= $sub->url ?>" class="nav__link"><?= $sub->label ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>