<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

class MailController extends AbstractController
{
    #[Route('/send-mail', name: 'app_send_mail')]
    public function sendMail(MailerInterface $mailer): Response
    {
//        return $this->render('mail/index.html.twig');
        $email = (new Email())
            ->from('admin@phonstore.com')
            ->to('client@phonestore.com')
            ->subject('Confirmation de votre commande !')
            ->text('PhoneStore vous remercie pour votre commande !');

        $mailer->send($email);

        return new Response('Email envoyé !');
    }
}
