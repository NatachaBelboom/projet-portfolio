<div class="project__card project">
    <a href="<?= get_permalink() ?>">En savoir plus <span class="sro">sur le projet <?= get_the_title(); ?></span></a>
    <div class="project__infos">
        <div class="project__gradient"></div>
        <figure class="project__fig">
            <?= get_the_post_thumbnail(null, 'large', ['class' => 'post__thumb']) ?>
        </figure>
        <div class="project__infos--div">
            <h3 class="project__title" role="heading" aria-level="3"><?= the_title(); ?></h3>
            <p class="project__description"><?= get_field('small-description'); ?></p>
        </div>
    </div>
</div>