<?php get_header(); ?>
<main class="layout">
    <section class="layout__single single">
        <span class="line"></span>
        <h2 class="single__title" role="heading" aria-level="2"><?= the_title(); ?></h2>
        <p><time datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>"><?= get_field('date'); ?></time></p>
        <figure class="single__fig">
            <?= get_the_post_thumbnail(null, 'large', ['class' => 'single__thumb']) ?>
        </figure>
        <div class="single__description">
            <p><?= get_field('description'); ?></p>
            <a href="">Voir le site</a>
        </div>
        <div>

        </div>
        <a href="<?= get_post_type_archive_link('project'); ?>">Retour sur les projets</a>
    </section>
    <section class="layout__contact contact">
        <h2 role="heading" aria-level="2">Démarrons un projet ensemble, n'hésitez pas à me <a href="<?= get_permalink(dw_get_template_page('template-contact')); ?>">contacter</a></h2>
    </section>

</main>
<?php get_footer(); ?>
