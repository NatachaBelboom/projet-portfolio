<?php
/*
* Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main class="layout">
        <div class="container">
            <section class="layout__contactMe contactMe slide-in">
                <span class="line"></span>
                <h2 class="contactMe__title title">Contactez-moi <span class="sro">Natacha Belboom</span></h2>
                <div class="contactMe__container">
                    <div class="contactMe__informations" itemscope itemtype="https://schema.org/Person">
                        <p>Vous aimez ce que je fais? Envoyez-moi un mail ou contactez-moi sur mes réseaux sociaux!</p>
                        <h3>Mes informations</h3>
                        <ul class="contactMe__informations--list">
                            <li class="contactMe__informations--item">
                                <svg id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" xmlns="http://www.w3.org/2000/svg" width="24.516" height="16.972" viewBox="0 0 24.516 16.972">
                                    <path id="Tracé_1" data-name="Tracé 1" d="M27.69,10.35l-6.341,6.459a.114.114,0,0,0,0,.165L25.787,21.7a.765.765,0,0,1,0,1.084.768.768,0,0,1-1.084,0l-4.42-4.709a.121.121,0,0,0-.171,0l-1.078,1.1A4.745,4.745,0,0,1,15.65,20.6,4.84,4.84,0,0,1,12.2,19.131L11.16,18.076a.121.121,0,0,0-.171,0l-4.42,4.709a.768.768,0,0,1-1.084,0,.765.765,0,0,1,0-1.084l4.438-4.726a.125.125,0,0,0,0-.165L3.575,10.35a.116.116,0,0,0-.2.083V23.356a1.891,1.891,0,0,0,1.886,1.886H26a1.891,1.891,0,0,0,1.886-1.886V10.433A.118.118,0,0,0,27.69,10.35Z" transform="translate(-3.375 -8.27)"/>
                                    <path id="Tracé_2" data-name="Tracé 2" d="M15.771,18.665a3.2,3.2,0,0,0,2.3-.966l9.246-9.411a1.852,1.852,0,0,0-1.167-.413H5.393a1.84,1.84,0,0,0-1.167.413L13.472,17.7A3.2,3.2,0,0,0,15.771,18.665Z" transform="translate(-3.513 -7.875)"/>
                                </svg>
                                <p itemprop="email">natacha.belboom@hotmail.com</p>
                            </li>
                            <li class="contactMe__informations--item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24.515" height="24.515" viewBox="0 0 24.515 24.515">
                                    <path id="Icon_metro-phone" data-name="Icon metro-phone" d="M20.549,18.565c-1.634,1.634-1.634,3.269-3.269,3.269s-3.269-1.634-4.9-3.269-3.269-3.269-3.269-4.9,1.634-1.634,3.269-3.269-3.269-6.537-4.9-6.537-4.9,4.9-4.9,4.9c0,3.269,3.358,9.9,6.537,13.075s9.806,6.537,13.075,6.537c0,0,4.9-3.269,4.9-4.9s-4.9-6.537-6.537-4.9Z" transform="translate(-2.571 -3.856)"/>
                                </svg>
                                <p itemprop="telephone">0497/79.42.75</p>
                            </li>
                            <div>
                                <li class="contactMe__informations--item">
                                    <a href="https://dribbble.com/">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24.515" height="24.515" viewBox="0 0 42.925 42.928">
                                            <path id="Icon_metro-dribbble" data-name="Icon metro-dribbble" fill="#000" d="M24.253,18.223A111.492,111.492,0,0,0,17.447,7.659a18.376,18.376,0,0,0-10.118,12.8,67.773,67.773,0,0,0,16.924-2.237Zm2.282,6.159c.238-.077.481-.149.721-.219-.46-1.043-.961-2.088-1.486-3.117A67.01,67.01,0,0,1,6.953,23.659c-.007.2-.016.387-.016.583a18.249,18.249,0,0,0,4.7,12.253l-.012-.014s5.016-8.9,14.906-12.1ZM14,38.691v-.009c-.135-.1-.28-.2-.415-.315C13.833,38.565,14,38.691,14,38.691ZM20.877,6.444l-.035.009a.124.124,0,0,1,.033,0l0,0Zm16.5,4.041A18.318,18.318,0,0,0,20.947,6.425,93.973,93.973,0,0,1,27.8,17.12c6.91-2.587,9.521-6.56,9.572-6.635ZM25.268,45.7A21.464,21.464,0,1,1,46.732,24.243,21.463,21.463,0,0,1,25.268,45.7ZM28.385,27.24C17.627,30.99,14.074,38.528,14,38.682A18.312,18.312,0,0,0,32.421,41.12,75.96,75.96,0,0,0,28.5,27.2l-.119.042Zm.826-7.386c.429.87.835,1.759,1.22,2.657.138.315.266.635.4.947a42.525,42.525,0,0,1,12.769.6A18.289,18.289,0,0,0,39.427,12.6c-.042.054-2.984,4.3-10.216,7.258Zm2.732,6.5A79.734,79.734,0,0,1,35.51,39.442a18.333,18.333,0,0,0,7.855-12.3,26.656,26.656,0,0,0-11.422-.8Z" transform="translate(-3.806 -2.776)"/>
                                        </svg>
                                        <p>Dribbble</p>
                                    </a>

                                </li>
                                <li class="contactMe__informations--item">
                                    <a href="https://github.com/NatachaBelboom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24.515" height="24.515" viewBox="0 0 42.921 43.007">
                                            <path id="Icon_zocial-github" data-name="Icon zocial-github" fill="#000" d="M0,21.28a20.7,20.7,0,0,1,1.72-8.343,20.772,20.772,0,0,1,11.4-11.4,21.093,21.093,0,0,1,16.687,0,20.952,20.952,0,0,1,11.4,11.4,21.093,21.093,0,0,1,0,16.687A21.107,21.107,0,0,1,29.8,41.107a21.093,21.093,0,0,1-16.687,0A20.923,20.923,0,0,1,1.72,29.624,20.7,20.7,0,0,1,0,21.28Zm3.355,0A17.494,17.494,0,0,0,6.967,32.118,19.334,19.334,0,0,0,16.3,38.784V35.344A4.186,4.186,0,0,1,18.02,31.6,12.345,12.345,0,0,1,16,31.3a10.162,10.162,0,0,1-3.742-1.376q-3.914-2.365-3.914-8.558a7.733,7.733,0,0,1,2.15-5.5,7.235,7.235,0,0,1,.215-5.5h.86a3.538,3.538,0,0,1,1.075.215,14.788,14.788,0,0,1,3.742,1.892,20.286,20.286,0,0,1,5.161-.688,20.783,20.783,0,0,1,5.2.688,18.323,18.323,0,0,1,3.139-1.72,4.662,4.662,0,0,1,1.978-.43l.516.043a7.511,7.511,0,0,1,.215,5.5,7.733,7.733,0,0,1,2.15,5.5q0,4.817-2.365,7.268a8.648,8.648,0,0,1-3.4,2.15,14.79,14.79,0,0,1-3.914.817,4.281,4.281,0,0,1,1.763,3.742v3.441A19.478,19.478,0,0,0,36,32.032,17.526,17.526,0,0,0,39.523,21.28,18.125,18.125,0,0,0,38.1,14.227,18.3,18.3,0,0,0,21.46,3.175a18.29,18.29,0,0,0-7.053,1.462A18.909,18.909,0,0,0,8.644,8.464a19.95,19.95,0,0,0-3.871,5.763A18.125,18.125,0,0,0,3.355,21.28Z" transform="translate(0 0.18)"/>
                                        </svg>
                                        <p>Github</p>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <?php if (! isset($_SESSION['feedback_contact_form']) || ! $_SESSION['feedback_contact_form']['success']): ?> <!--quand tout va bien -->
                        <form action="<?= get_home_url() ?>/wp-admin/admin-post.php" method="POST" class="contact__form form ">
                            <h3 class="sro">Le formulaire de contact</h3>
                            <?php if (isset($_SESSION['feedback_contact_form']) && ! $_SESSION['feedback_contact_form']['success']) : ?>
                                <p class="form__errors">Oups! Ce formulaire contient des erreurs, merci de les corriger.</p>
                            <?php endif; ?>
                            <div class="form__field">
                                <label for="firstname" class="form__label">Prénom *</label>
                                <input type="text" name="firstname" id="firstname" class="form__input" value="<?= dw_get_contact_field_value('firstname') ?>" placeholder="Votre prénom">
                                <?= dw_get_contact_field_error('firstname') ?>
                            </div>
                            <div class="form__field">
                                <label for="lastname" class="form__label">Nom *</label>
                                <input type="text" name="lastname" id="lastname" class="form__input" value="<?= dw_get_contact_field_value('lastname') ?>" placeholder="Votre nom">
                                <?= dw_get_contact_field_error('lastname') ?>
                            </div>
                            <div class="form__field">
                                <label for="email" class="form__label">Email *</label>
                                <input type="email" name="email" id="email" class="form__input" value="<?= dw_get_contact_field_value('email') ?>" placeholder="Votre email">
                                <?= dw_get_contact_field_error('email') ?>
                            </div>
                            <div class="form__field">
                                <label for="message" class="form__label">Message *</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form__textarea" placeholder="Votre message"><?= dw_get_contact_field_value('message') ?></textarea>
                                <?= dw_get_contact_field_error('message') ?>
                            </div>
                            <div class="form__field--last">
                                <div class="form__field--checkbox">
                                    <label for="rules" class="form__label">
                                        <input type="checkbox" name="rules" id="rules" class="form__checkbox" value="1">
                                        <span class="form__checklabel">J'ai lu et j'accepte les <a href="#">conditions générales d'utilisations</a>.</span>
                                    </label>
                                    <?= dw_get_contact_field_error('rules') ?>
                                </div>
                                <div class="form__actions">
                                    <?php wp_nonce_field('nonce_submit_contact'); ?>
                                    <input type="hidden" name="action" value="submit_contact_form" />
                                    <button type="submit" class="form__button button">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    <?php else: ?>
                        <p class="form__feedback">Merci de nous avoir contacté. A bientot!</p>
                    <?php endif; ?>
                    <?php unset($_SESSION['feedback_contact_form']); ?>
                </div>
            </section>
        </div>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
