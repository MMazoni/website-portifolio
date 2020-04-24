<?php

require 'vendor/autoload.php';

use SendGrid\Mail\Mail;
use Dotenv\Dotenv;

class SendEmail
{
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        $this->key = $_ENV['API_KEY'];
    }
    public function sendMail($name, $from, $subject, $content)
    {
        $email = new Mail();
        $email->setFrom($from, $name);
        $email->setSubject($subject);
        $email->addTo('matheus.andrade16@fatec.sp.gov.br', 'Matheus Mazoni');
        $email->addContent('text/plain', $content);

        $sendgrid = new SendGrid($this->key);

        try {
            $response = $sendgrid->send($email);
        } catch(Exception $e) {
            echo 'Email exception caught : ' . $e->getMessage() . '\n';
            return false;
        }
        
    }

    public function getKey()
    {
        return $this->key;
    }
}