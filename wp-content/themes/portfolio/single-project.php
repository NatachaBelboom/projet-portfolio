<?php get_header(); ?>
<main class="layout">
    <div class="container">
        <section class="layout__single single">
            <span class="line"></span>
            <h2 class="single__title title" role="heading" aria-level="2"><?= the_title(); ?></h2>
            <p><time datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>"><?= get_field('date'); ?></time></p>
            <figure class="single__fig">
                <?= get_the_post_thumbnail(null, 'large', ['class' => 'single__thumb']) ?>
            </figure>
            <div class="single__description">
                <p><?= get_field('description'); ?></p>
                <?php if (!empty(get_field('link'))): ?>
                    <a href="<?= get_field('link'); ?>" target="_blank" class="button">Voir le site</a>
                <?php endif; ?>
            </div>
            <div class="single__images">
                <?php if(get_field('img_phone2') !== null): ?>
                    <?= wp_get_attachment_image(get_field('img_desktop'), 'large', false, array('class' => 'single__img--desktop')); ?>
                <?php endif; ?>
                <p>Version téléphone</p>
                <?= wp_get_attachment_image(get_field('img_phone1'), 'large', false, array('class' => 'single__img', 'id' => 'phone')); ?>
                <?= wp_get_attachment_image(get_field('img_phone2'), 'large', false, array('class' => 'single__img', 'id' => 'phone')); ?>
            </div>
            <a href="<?= get_post_type_archive_link('project'); ?>" class="button">Retour sur les projets</a>
        </section>
        <section class="layout__contact contact">
            <h2 role="heading" aria-level="2" class="contact__title title">Démarrons un projet ensemble, n'hésitez pas à me <a href="<?= get_permalink(dw_get_template_page('template-contact')); ?>" class="contact__link"><span class="big-line">contacter</span></a></h2>
        </section>
    </div>
</main>
<?php get_footer(); ?>
