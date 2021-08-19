<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notifications Email Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the Notification library to build
    | the Notification emails. You are free to change them to anything
    | you want to customize your views to better match your platform.
    | Supported colors are blue, green, and red.
    |
    */

    // Auth Notifications
    'password_updated' => [
        'subject' => 'le mot de passe de :marketplace a été mis à jour avec succès!',
        'greeting' => 'Salut :user!',
        'message' => 'Le mot de passe de connexion de votre compte a été modifié avec succès! Si vous ne l\'avez pas fait, veuillez nous contacter dès que possible! Cliquez sur le bouton ci-dessous pour vous connecter à votre page de profil.',
        'button_text' => 'Visitez votre profil',
    ],

    // Billing Notifications
    'invoice_created' => [
        'subject' => ':marketplace Facture des frais d\'abonnement mensuels',
        'greeting' => 'Salut :merchant!',
        'message' => 'Merci pour votre soutien continu. Nous avons joint une copie de votre facture pour vos archives. S\'il vous plaît laissez-nous savoir si vous avez des questions ou des préoccupations!',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'green',
        ],
    ],

    // Customer Notifications
    'customer_registered' => [
        'subject' => 'Bienvenue sur FREEMANNA',
        'greeting' => 'Félicitation :customer!',
        'message' => 'Votre compte a été créé avec succès! Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
        'action' => [
            'text' => 'Verification',
            'color' => 'green',
        ],
    ],

    'customer_password_reset' => [
        'subject' => 'Notification de Réinitialisation de Mot de passe',
        'greeting' => 'Salut!',
        'message' => '
        Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte. Si vous n\'avez pas demandé de réinitialisation de mot de passe, ignorez simplement cette notification et aucune action supplémentaire n\'est requise.',
        'button_text' => 'Réinitialiser Mot de Passe',
    ],

    // Dispute Notifications
    'dispute_acknowledgement' => [
        'subject' => '[Commande ID: :order_id] Le litige a été soumis avec succès',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que nous avons reçu votre contestation pour le numéro de commande: order_id, notre équipe d\'assistance vous répondra dans les plus brefs délais.',
        'action' => [
            'text' => 'Afficher le litige',
            'color' => 'blue',
        ],
    ],

    'dispute_created' => [
        'subject' => 'Nouveau litige pour le numéro de commande: :order_id',
        'greeting' => 'Salut :merchant!',
        'message' => 'Vous avez reçu un Nouveau litige pour le numéro de commande: :order_id. Please review and resolve the issue with the customer.',
        'action' => [
            'text' => 'Afficher le litige',
            'color' => 'green',
        ],
    ],

    'dispute_updated' => [
        'subject' => '[Commande ID: :order_id] Le statut du litige a été mis à jour!',
        'greeting' => 'Salut :customer!',
        'message' => 'Un litige pour l\'ID de commande :order_id a été mis à jour with this message from the vendor ":reply". Please check below and contact us if you need any assistance.',
        'action' => [
            'text' => 'Afficher le litige',
            'color' => 'blue',
        ],
    ],

    'dispute_appealed' => [
        'subject' => '[Numéro de commande: :order_id] Dispute appealed!',
        'greeting' => 'Salut!',
        'message' => 'Un litige pour l\'ID de commande :order_id has been appealed with this message ":reply". Please check below for detail.',
        'action' => [
            'text' => 'Afficher le litige',
            'color' => 'blue',
        ],
    ],

    'appealed_dispute_replied' => [
        'subject' => '[Numéro de commande: :order_id] Réponse en appel pour un nouveau différend!',
        'greeting' => 'Salut!',
        'message' => 'Un litige pour l\'ID de commande :order_id has been responded with this message: </br></br> ":reply"',
        'action' => [
            'text' => 'Afficher le litige',
            'color' => 'blue',
        ],
    ],

    // Inventory
    'low_inventory_notification' => [
        'subject' => '
        Alerte d\'inventaire faible!',
        'greeting' => 'Salut!',
        'message' => 'Un ou plusieurs articles de votre inventaire deviennent bas. Il est temps d\'ajouter plus d\'inventaire pour maintenir l\'article en ligne sur le marché.',
        'action' => [
            'text' => 'Mettre à jour l\'inventaire',
            'color' => 'blue',
        ],
    ],

    // Message Notifications
    'new_message' => [
        'subject' => ':subject',
        'greeting' => 'Salut :receiver',
        'message' => ':message',
        'action' => [
            'text' => 'Voir le message sur place',
            'color' => 'blue',
        ],
    ],

    'message_replied' => [
        'subject' => ':user a répondu :subject',
        'greeting' => 'Salut :receiver',
        'message' => ':reply',
        'action' => [
            'text' => 'Voir le message sur place',
            'color' => 'blue',
        ],
    ],

    // Order Notifications
    'order_created' => [
        'subject' => '[Numéro de commande: :order] your order has been placed successfully!',
        'greeting' => 'Salut :customer',
        'message' => 'Merci de nous avoir choisi! votre commande [ID :order] a été placé avec succès. Nous vous informerons du statut de la commande.',
        'action' => [
            'text' => 'Visitez la boutique',
            'color' => 'blue',
        ],
    ],

    'merchant_order_created_notification' => [
        'subject' => 'Nouvelle commande [Numéro de commande: :order] a été placé sur votre boutique!',
        'greeting' => 'Salut :merchant',
        'message' => 'Une Nouvelle commande [ID :order] a été placé. Veuillez vérifier les détails de la commande et exécuter la commande dès que possible.',
        'action' => [
            'text' => 'Exécuter la commande',
            'color' => 'blue',
        ],
    ],

    'order_updated' => [
        'subject' => '[Numéro de commande: :order] l\'état de votre commande a été mis à jour!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que votre commande[ ID :order] a été mise à jour. Veuillez voir ci-dessous pour la commande détaillée. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
        'action' => [
            'text' => 'Visitez la boutique',
            'color' => 'blue',
        ],
    ],

    'order_fulfilled' => [
        'subject' => '[Numéro de commande: :order] Your order on it\'s way!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que votre commande [Order ID :order] has been shipped and it\'s on your way. Veuillez voir ci-dessous pour la commande détaillée. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
        'action' => [
            'text' => 'Visitez la boutique',
            'color' => 'green',
        ],
    ],

    'order_paid' => [
        'subject' => '[Numéro de commande: :order] Votre commande a été payée avec succès!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que votre commande [ ID :order] a été payé avec succès et c\'est sur votre chemin. Veuillez consulter ci-dessous pour la commande detaillee. Vous pouvez également vérifier vos commandes depuis votre tableau de bord.',
        'action' => [
            'text' => 'Visitez la boutique',
            'color' => 'green',
        ],
    ],

    'order_payment_failed' => [
        'subject' => '[Numéro de commande: :order] échec du payement !',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que Le paiement de votre commande [ ID :order] a échoué. Veuillez consulter ci-dessous pour la commande detaillee. Vous pouvez également vérifier vos commandes depuis votre tableau de bord',
        'action' => [
            'text' => 'Visitez la boutique',
            'color' => 'red',
        ],
    ],

    // Refund Notifications
    'refund_initiated' => [
        'subject' => '[Numéro de commande: :order] un remboursement a été lancé!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que nous avons initié une demande de remboursement pour votre commande :order. Un membre de notre équipe examinera bientôt la demande. Nous vous informerons du statut de la demande.',
    ],

    'refund_approved' => [
        'subject' => '[Numéro de commande: :order] a refund request has been approved!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que nous avons approved a refund request pour votre commande :order. montant remboursé est :amount.Nous avons envoyé l\'argent à votre mode de paiement, cela peut prendre quelques jours pour valider votre compte. Contactez votre fournisseur de paiement si vous ne voyez pas l\'argent effectué dans quelques jours.',
    ],

    'refund_declined' => [
        'subject' => '[Numéro de commande: :order] une demande de remboursement a été refusée!',
        'greeting' => 'Salut :customer',
        'message' => 'Ceci est une notification pour vous informer que la demande de remboursement a été refusée pour votre commande :order. Si vous n\'êtes pas satisfait de la solution du marchand, vous pouvez contacter directement le marchand à partir de la plateforme ou même faire appel du litige sur:marketplace. Nous allons intervenir pour résoudre le problème.',
    ],

    // Shop Notifications
    'shop_created' => [
        'subject' => 'votre boutique est prêt à partir!',
        'greeting' => 'Félicitation :merchant!',
        'message' => 'votre boutique :shop_name a été créé avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration des magasins.',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'green',
        ],
    ],

    'shop_updated' => [
        'subject' => 'Shop information updated successfully!',
        'greeting' => 'Salut :merchant!',
        'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name a été mis à jour avec succès!',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'blue',
        ],
    ],

    'shop_config_updated' => [
        'subject' => 'Shop configuration updated successfully!',
        'greeting' => 'Salut :merchant!',
        'message' => 'votre boutique configuration a été mis à jour avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration des magasins.',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'blue',
        ],
    ],

    'shop_down_for_maintainace' => [
        'subject' => 'votre boutique is down!',
        'greeting' => 'Salut :merchant!',
        'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name is down! No customer can visit votre boutique until it\'s back to live again.',
        'action' => [
            'text' => 'Go to the Config page',
            'color' => 'blue',
        ],
    ],

    'shop_is_live' => [
        'subject' => 'votre boutique est de retour!',
        'greeting' => 'Salut :merchant',
        'message' => 'Ceci est une notification pour vous informer que votre boutique :shop_name est de retour avec succès!',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'green',
        ],
    ],

    'shop_deleted' => [
        'subject' => 'votre boutiquea été supprimé de :marketplace!',
        'greeting' => 'Salut Merchant!',
        'message' => 'Ceci est une notification pour vous informer que votre boutique a été supprimé de la place de marché! Vous allez nous manquer.',
    ],

    // System Notifications
    'system_is_down' => [
        'subject' => 'Votre boutique :marketplace est suspendu!',
        'greeting' => 'Salut :user!',
        'message' => 'Ceci est une notification pour vous informer que Votre boutique :marketplace est suspendu! Aucun client ne peut visiter votre boutique tant qu\'il n\'est pas revenu à la vie.',
        'action' => [
            'text' => 'Aller à la page de config',
            'color' => 'blue',
        ],
    ],

    'system_is_live' => [
        'subject' => 'Votre boutique :marketplace est de retour!',
        'greeting' => 'Salut :user!',
        'message' => 'Ceci est une notification pour vous informer que Votre boutique  :marketplace est maintenant de retour!',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'green',
        ],
    ],

    'system_info_updated' => [
        'subject' => ':marketplace - les informations de la boutique ont été mises à jour avec succès!',
        'greeting' => 'Salut :user!',
        'message' => 'Ceci est une notification pour vous informer que Votre boutique  :marketplace a été mis à jour avec succès!',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'blue',
        ],
    ],

    'system_config_updated' => [
        'subject' => ':marketplace - les informations de la boutique ont été mises à jour avec succès!',
        'greeting' => 'Salut :user!',
        'message' => 'La configuration de Votre boutique  :marketplace a été mis à jour avec succès! Cliquez sur le bouton ci-dessous pour vous connecter au panneau d\'administration.',
        'action' => [
            'text' => 'Paramètres d\'affichage',
            'color' => 'blue',
        ],
    ],

    'new_contact_us_message' => [
        'subject' => 'Nouveau message via le formulaire de contact: :subject',
        'greeting' => 'Salut!',
        'message_head' => '',
        'message_footer_with_phone' => 'Vous pouvez répondre à cet e-mail ou à ce contact directement sur ce téléphone :phone',
        'message_footer' => 'Vous pouvez répondre directement à cet e-mail.',
    ],

    // Ticket Notifications
    'ticket_acknowledgement' => [
        'subject' => '[Ticket ID: :ticket_id] :subject',
        'greeting' => 'Salut :user',
        'message' => 'Ceci est une notification pour vous informer que nous avons reçu votre ticket :ticket_id avec succès! Notre équipe d\'assistance vous répondra dans les plus brefs délais.',
        'action' => [
            'text' => 'Voir le ticket',
            'color' => 'blue',
        ],
    ],

    'ticket_created' => [
        'subject' => 'New Support Ticket [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Salut!',
        'message' => 'Vous avez reçu un nouvel ID de ticket d\'assistance :ticket_id, L\'expéditeur :sender du vendeur :vendor.Revoir et attribuer le ticket à l\'équipe de support.',
        'action' => [
            'text' => 'Voir le ticket',
            'color' => 'green',
        ],
    ],

    'ticket_assigned' => [
        'subject' => 'Un ticket vient de vous être attribué [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Salut :user',
        'message' => 'Ceci est une notification pour vous informer que le ticket [Ticket ID: :ticket_id] :subject vous vous a été assigné. Vérifiez et répondez au ticket dès que possible. ',
        'action' => [
            'text' => 'Répondre au ticket',
            'color' => 'blue',
        ],
    ],

    'ticket_replied' => [
        'subject' => ':user  a répondu au ticket [Ticket ID: :ticket_id] :subject',
        'greeting' => 'Salut :user',
        'message' => ':reply',
        'action' => [
            'text' => 'Voir le ticket',
            'color' => 'blue',
        ],
    ],

    'ticket_updated' => [
        'subject' => 'Un Ticket [Ticket ID: :ticket_id] :subject a été mis à jour!',
        'greeting' => 'Salut :user!',
        'message' => 'Un de vos ID de ticket de support #:ticket_id :subject a été mis à jour. Veuillez nous contacter si vous avez besoin d\'aide.',
        'action' => [
            'text' => 'Voir le ticket',
            'color' => 'blue',
        ],
    ],

    // User Notifications
    'user_created' => [
        'subject' => ':admin vous a ajouté au  à l\'espace de marché :marketplace!',
        'greeting' => 'Félicitation :user!',
        'message' => 'Vous avez été ajouté au :marketplace par :admin! Cliquez sur le bouton ci-dessous pour vous connecter à votre compte. Utilisez le mot de passe temporaire pour la connexion initiale.',
        'alert' => 'N\'oubliez pas de changer votre mot de passe après la connexion.',
        'action' => [
            'text' => 'Visitez votre profil',
            'color' => 'green',
        ],
    ],
    'user_updated' => [
        'subject' => 'Informations sur le compte mises à jour avec succès!',
        'greeting' => 'Salut :user!',
        'message' => 'Ceci est une notification pour vous informer que votre compte a été mis à jour avec succès!',
        'action' => [
            'text' => 'Visitez votre profil',
            'color' => 'blue',
        ],
    ],

    // Vendor Notifications
    'verdor_registered' => [
        'subject' => 'Nouveau fournisseur vient de s\'inscrire!',
        'greeting' => 'Félicitation!',
        'message' => 'Votre espace de marché :marketplace vient d\'avoir un nouveau vendeur avec le nom de la boutique <strong>:shop_name</strong> et l\'adresse e-mail du marchand est:  :merchant_email',
        'action' => [
            'text' => 'Aller au tableau de bord',
            'color' => 'green',
        ],
    ],

    // User/Merchant Notification
    'email_verification' => [
        'subject' => 'Vérifier votre compte :marketplace!',
        'greeting' => 'Félicitation :user!',
        'message' => 'Votre compte a été créé avec succès! Cliquez sur le bouton ci-dessous pour vérifier votre adresse e-mail.',
        'button_text' => 'Verifier Mon Email',
    ],

];
