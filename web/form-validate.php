<?php
require_once '../SendEmailHelper.php';

$name = isset($_POST["nome"]) ? $_POST["nome"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$subject = isset($_POST["assunto"]) ? $_POST["assunto"] : '';
$content = isset($_POST["conteudo"]) ? $_POST["conteudo"] : '';

$ok = true;
$messages = [];
$msg_name = '';
$msg_email = '';
$msg_subject = '';
$msg_content = '';

if ( !isset($name) || empty($name) ) {
  $ok = false;
  $msg_name = 'O campo nome é obrigatório';
}

if ( !isset($email) || empty($email) ) {
  $ok = false;
  $msg_email = 'O campo email é obrigatório';
}

if ( !isset($subject) || empty($subject) ) {
  $ok = false;
  $msg_subject = 'O campo assunto é obrigatório';
}

if ( !isset($content) || empty($content) ) {
  $ok = false;
  $msg_content = 'O campo conteudo é obrigatório';
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
  'mensagens' => $messages,
  'msg_name' => $msg_name,
  'msg_email' => $msg_email,
  'msg_subject' => $msg_subject,
  'msg_content' => $msg_content,
]);
