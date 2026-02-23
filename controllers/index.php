<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors = [];
$success = "Your message has been sent!";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (! Validator::string($_POST['first-name'], 1, 50)) {
    $errors['first-name'] = 'error';
  }

  if (! Validator::string($_POST['last-name'], 1, 50)) {
    $errors['last-name'] = 'error';
  }

  if (! Validator::string($_POST['email'], 1, 100)) {
    $errors['email'] = 'error';
  }

  if (! Validator::string($_POST['subject'], 1, 50)) {
    $errors['subject'] = 'error';
  }

  if (! Validator::string($_POST['message'], 1, 1000)) {
    $errors['message'] = 'error';
  }

  if (empty($errors)) {
      $db->query(
      "insert into contacts(first_name, last_name, email, subject, message)
       values(:first_name, :last_name, :email, :subject, :message);", [
        'first_name' => $_POST['first-name'],
        'last_name' => $_POST['last-name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
      ]
    );

    $errors['success'] = 'success'; 
  }
}

return view("index.view.php", [
  'errors' => $errors,
  'success' => $success,
  'heading' => 'My name is <br> Brandon Thomas Murray',
  'subheading' => 'I am a web developer'
]);