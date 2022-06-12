<?php

class ContactFormController extends BaseFormController
{
    protected function getNonceKey() : string
    {
        return 'nonce_submit_contact';
    }

    protected function getSanitizableAttributes() : array
    {
        return [
            'firstname' => TextSanitizer::class,
            'lastname' => TextSanitizer::class,
            'email' => EmailSanitizer::class,
            'phone' => TextSanitizer::class,
            'message' => TextSanitizer::class,
            'rules' => TextSanitizer::class,
        ];
    }

    protected function getValidatableAttributes() : array
    {
        return [
            'firstname' => [RequiredValidator::class],
            'lastname' => [RequiredValidator::class],
            'email' => [RequiredValidator::class, EmailValidator::class],
            'message' => [RequiredValidator::class],
            'rules' => [AcceptedValidator::class],
        ];
    }

    protected function redirectWithErrors($errors)
    {
        // C'est pas OK, on place les erreurs de validation dans la session
        $_SESSION['feedback_contact_form'] = [
            'success' => false,
            'data' => $this->data,
            'errors' => $errors,
        ];

        // On redirige l'utilisateur vers le formulaire pour y afficher le feedback d'erreurs.
        return wp_safe_redirect(($this->data['_wp_http_referer'] ?? '') . '#contact', 302);
    }

    protected function handle()
    {
        // Traitement
        $id = wp_insert_post([
            'post_title' => 'Message de ' . $this->data['firstname'] . ' ' . $this->data['lastname'],
            'post_type' => 'message',
            'post_content' => $this->data['message'],
            'post_status' => 'publish'
        ]);


        $sender    = $this->data[ 'email' ];
        $firstname = $this->data[ 'firstname' ];
        $lastname  = $this->data[ 'lastname' ];
        $message = $this->data['message'];

        $content = 'Bonjour, un nouveau message de contact a été envoyé.';
        $content .= 'de ' . ucfirst( $firstname ) . ' ' . strtoupper( $lastname );
        $content .= 'email : ' . $sender;
        $content .= 'Message : ' . $message;

        // Envoyer l'email à l'admin
        wp_mail(get_bloginfo('admin_email'), 'Nouveau message !', $content);
    }

    protected function redirectWithSuccess()
    {
        // Ajouter le feedback positif à la session
        $_SESSION['feedback_contact_form'] = [
            'success' => true,
        ];

        return wp_safe_redirect($this->data['_wp_http_referer'] . '#contact', 302);
    }
}


