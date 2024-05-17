<?php


$availableKeys = ['first_name', 'last_name', 'age', 'gender', 'email', 'phone'];

foreach ($availableKeys as $key) {
    if (!array_key_exists($key, $_POST)) {
        die('invalid request');
    }
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];


$pdo = new PDO(
    'mysql:host=db;dbname=form-app',
    'user',
    'secret'
); // TODO: add composer and dotenv library

$sqlStatement = 'INSERT INTO form_submissions(
                             first_name,
                             last_name,
                             age,
                             gender,
                             email,
                             phone
                ) VALUES (?, ?, ?, ?, ?, ?)';

$pdo->prepare($sqlStatement)
    ->execute([$first_name, $last_name, $age, $gender, $email, $phone]);

echo 'Form was sent successfully';