<?php
require_once '../SendEmailHelper.php';

$name = isset($_POST["nome"]) ? $_POST["nome"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$subject = isset($_POST["assunto"]) ? $_POST["assunto"] : '';
$content = isset($_POST["conteudo"]) ? $_POST["conteudo"] : '';

$ok = true;
$messages = [];

if ( !isset($name) || empty($name) ) {
  $ok = false;
  $messages[] = 'O campo nome é obrigatório';
}

if ( !isset($email) || empty($email) ) {
  $ok = false;
  $messages[] = 'O campo email é obrigatório';
}

if ( !isset($subject) || empty($subject) ) {
  $ok = false;
  $messages[] = 'O campo assunto é obrigatório';
}

if ( !isset($content) || empty($content) ) {
  $ok = false;
  $messages[] = 'O campo conteudo é obrigatório';
}

$send_email = new SendEmail();

if ($ok) {
  $send_email->sendMail($name, $email, $subject, $content);
  $messages[] = 'Enviado o email de contato com sucesso';
} else {
  $ok = false;
  $messages[] = 'Não foi possível o envio do email';
}

header('Content-type: application/json');
echo json_encode([
  'ok' => $ok,
  'mensagens' => $messages
]);
