<?php
/*
* Template Name: About Page Template
*/
?>

<?php get_header(); ?>
<main class="layout">
    <div class="container">
        <section class="layout__about about slide-in">
            <div class="about__flex margin">
                <div class="size">
                    <span class="line"></span>
                    <h2 role="heading" aria-level="2" class="about__title title"><span itemprop="givenName">Natacha </span><span itemprop="familyName">Belboom</span></h2>
                    <p class="about__text"><?= get_field('description1'); ?></p>
                </div>
                <div class="about__imgContainer">
                    <?= wp_get_attachment_image(get_field('img_about'), 'large', false, array('class' => 'about__img .me')); ?>
                </div>
            </div>
            <div class="about__flex reverse">
                <div class="size">
                    <span class="line"></span>
                    <h2 role="heading" aria-level="2" class="about__title title">Je suis</h2>
                    <h3 role="heading" aria-level="3" class="about__subtitle"><?= get_field('subtitle'); ?></h3>
                    <p><?= get_field('description2'); ?></p>
                </div>
                <div class="about__imgContainer">
                    <?= wp_get_attachment_image(get_field('img_art'), 'large', false, array('class' => 'about__img')); ?>
                </div>
            </div>

        </section>
        <section class="layout__contact contact slide-in">
            <h2 role="heading" aria-level="2" class="contact__title title">Démarrons un projet ensemble, n'hésitez pas à
                me <a href="<?= get_permalink(dw_get_template_page('template-contact')); ?>" class="contact__link"><span
                            class="big-line">contacter</span></a></h2>
        </section>
    </div>
</main>
<?php get_footer(); ?>
