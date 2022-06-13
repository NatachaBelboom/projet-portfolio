<?php get_header(); ?>
<main class="layout">
    <div class="container">
        <section class="layout__projects projects__all slide-in">
            <span class="line"></span>
            <h2 class="projects__title title" role="heading" aria-level="2">Mes projets</h2>
            <div class="projects__container">
                <?php if (($projects = dw_get_projects(10))->have_posts()) : while ($projects->have_posts()) : $projects->the_post();
                    dw_include('project', ['modifier' => 'index']);
                endwhile;
                else: ?>
                    <p class="projects__empty">Il n'y a pas encore de projets à vous montrer</p>
                <?php endif; ?>
            </div>
        </section>
        <section class="layout__contact contact slide-in">
            <h2 role="heading" aria-level="2" class="contact__title title">Démarrons un projet ensemble, n'hésitez pas à me <a href="<?= get_permalink(dw_get_template_page('template-contact')); ?>" class="contact__link"><span class="big-line">contacter</span></a></h2>
        </section>
    </div>
</main>
<?php get_footer(); ?>
