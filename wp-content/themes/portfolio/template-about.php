<?php
/*
* Template Name: About Page Template
*/
?>

<?php get_header(); ?>
<main class="layout">
    <section class="layout__about about">
        <div class="about__presentation">
            <div class="about__">
                <span class="line"></span>
                <h2 role="heading" aria-level="2"><span itemprop="givenName">Natacha </span><span itemprop="familyName">Belboom</span></h2>
                <p><?= get_field('description1'); ?></p>
            </div>
            <img src="" alt="">
        </div>
        <div class="about__art">
            <img src="" alt="">
            <div>
                <span class="line"></span>
                <h2 role="heading" aria-level="2">Je suis</h2>
                <h3 role="heading" aria-level="3"><?= get_field('subtitle'); ?></h3>
                <p><?= get_field('description2'); ?></p>
            </div>
        </div>
    </section>
    <section class="layout__contact contact">
        <h2 role="heading" aria-level="2">Démarrons un projet ensemble, n'hésitez pas à me <a href="<?= get_permalink(dw_get_template_page('template-contact')); ?>">contacter</a></h2>
    </section>
</main>
<?php get_footer(); ?>
