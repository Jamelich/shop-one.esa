<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Неверная длина логина (от 5 до 50)";
    exit;
} elseif (mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
    echo "Неверная длина пароля (от 2 до 6)";
    exit;
}

require_once('dbConnect.php');

$sql = 'INSERT INTO users(login,password,email) VALUES(:login,:pass,:email)';
$params = ['login' => $login, 'pass' => $pass, 'email' => $email];
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
