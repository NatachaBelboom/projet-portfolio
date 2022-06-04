<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>">
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>

    <?php wp_head(); ?>

    <title><?= wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
</head>
<body>
<div class="border-foreground">
    <header class="header">
        <div class="container header__header">
            <h1 role="heading" aria-level="1" class="sro"><?= the_title(); ?></h1>
            <div class="logo">
                <a href="/">
                    <svg id="Calque_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.79 69.11" width="30" height="30">
                        <g>
                            <circle cx="12.76" cy="60.43" r="8.68" style="fill:#77A38E;"/>
                            <path d="M69.1,60.43c0,4.79-3.89,8.68-8.68,8.68-2.54,0-4.84-1.1-6.43-2.84l-.05-.06L2.84,15.11l-.4-.4c-1.51-1.56-2.44-3.69-2.44-6.03C0,3.89,3.89,0,8.68,0c2.34,0,4.47,.93,6.03,2.44l.4,.4,51.15,51.16,.35,.34c1.54,1.57,2.49,3.71,2.49,6.09Z"
                                  style="fill:#77A38E;"/>
                            <circle cx="61.1" cy="8.68" r="8.68" style="fill:#77A38E;"/>
                        </g>
                    </svg>
                </a>
                <?php if (!is_front_page()): ?>
                    <p>Portfolio d'une web designer et developer</p>
                <?php endif; ?>
            </div>
            <nav class="header__nav nav" role="navigation">
                <h2 class="nav__title sro" role="heading" aria-level="2">
                    Menu principal
                </h2>
                <ul class="nav__container">
                    <?php foreach (dw_get_menu_items('primary') as $link): ?>  <!--la fonction renvoie un tableau d'item-->
                        <li class="<?= $link->getBemClasses('nav__item') ?>">
                            <a href="<?= $link->url ?>" class="nav__link"><?= $link->label ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </nav>
            <div class="header__hamburger menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.81" height="20.364" viewBox="0 0 21.81 20.364"
                     class="header__hamburger--open">
                    <g id="menuBurger" data-name="menuBurger" transform="translate(-345.373 -37.5)">
                        <line id="Ligne_10" data-name="Ligne 10" x2="19.81" transform="translate(346.373 38.5)"
                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                        <line id="Ligne_17" data-name="Ligne 17" x2="19.81" transform="translate(346.373 47.683)"
                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                        <line id="Ligne_12" data-name="Ligne 12" x2="19.81" transform="translate(346.373 56.864)"
                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                    </g>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="21.81" height="20.364" viewBox="0 0 22.134 21.692"
                     class="header__hamburger--close">
                    <g id="Groupe_20" data-name="Groupe 20" transform="translate(-344.959 -36.586)">
                        <line id="Ligne_10" data-name="Ligne 10" x2="19.305" y2="18.5" transform="translate(346.373 38)"
                              fill="none" stroke="#000" stroke-linecap="round" stroke-width="2"/>
                        <line id="Ligne_12" data-name="Ligne 12" y1="18.864" x2="19.305"
                              transform="translate(346.373 38)" fill="none" stroke="#000" stroke-linecap="round"
                              stroke-width="2"/>
                    </g>
                </svg>
            </div>
        </div>
    </header>