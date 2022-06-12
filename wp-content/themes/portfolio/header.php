<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Natacha Belboom">
    <meta name="description" content="Portfolio de Natacha Belboom, une jeune web designer et developer">
    <meta name="keywords" content="portfolio, web, designer, developer, projets, hepl">
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>">

    <?php wp_head(); ?>

    <title><?= wp_title('·', false, 'right') . get_bloginfo('name'); ?></title>
</head>
<body>
<div class="border-foreground">
    <header class="header">
        <div class="container header__header">
            <h1 role="heading" aria-level="1"
                class="sro"><?= is_front_page() ? 'Accueil · ' . get_bloginfo('name') : wp_title('') . ' · ' . get_bloginfo('name') ?></h1>
            <div class="logo">
                <a href="/">
                    <svg id="Calque_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.78 69.14" width="30"
                         height="30">
                        <g id="Calque_2-2">
                            <path d="M13.36,51.77c-.2,.01-.4,.02-.6,.02s-.4-.01-.6-.02c.2,0,.4-.02,.6-.02s.4,.01,.6,.02Z"
                                  style="fill:#77a38e;"/>
                            <path d="M69.1,60.43c0,4.79-3.89,8.68-8.68,8.68-2.54,0-4.84-1.1-6.43-2.84l-.05-.06L2.84,15.11l-.4-.4c-1.51-1.56-2.44-3.69-2.44-6.03C0,3.89,3.89,0,8.68,0c2.34,0,4.47,.93,6.03,2.44l.4,.4,51.15,51.16,.35,.34c1.54,1.57,2.49,3.71,2.49,6.09Z"
                                  style="fill:#77a38e;"/>
                            <path d="M20.17,53.99v6.47c0,4.79-3.61,8.68-8.04,8.68s-8.04-3.89-8.04-8.68v-6.47c0-4.79,3.6-8.68,8.04-8.68s8.04,3.89,8.04,8.68Z"
                                  style="fill:#77a38e;"/>
                            <path d="M69.78,8.68v6.47c0,4.79-3.72,8.68-8.29,8.68s-8.29-3.89-8.29-8.68v-6.47c0-4.79,3.71-8.68,8.29-8.68s8.29,3.89,8.29,8.68Z"
                                  style="fill:#77a38e;"/>
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