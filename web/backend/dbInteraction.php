<?php
include 'dbReq.php';

$isSubmit = false;
$errorMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signUp'])) {
    $login = trim($_POST['username']);
    $password = trim($_POST['password']);
    $retryPassword = trim($_POST['retry-password']);
    $email = trim($_POST['email']);

    if($login === '' || $email === '' || $password === '') {
        echo 'Error';
    } elseif (mb_strlen($login, 'UTF8') < 2) { 
        echo 'Error';
    } elseif ($password !== $retryPassword){
        echo 'Error';
    } else {
        $existence = selectOne('users', ['email' => $email]);

        if ($existence['email'] === $email || $existence['login'] === $login) {
            echo 'Error';
        } else {

            $post = [
                'login' => $login,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email
            ];

            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['login'];
            header('location: http://localhost/WebApp/mainPage.html');
            $isSubmit = true;
        }
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signIn'])) {
    $login = trim($_POST['login']);
    $password = trim($_POST['pass']);

    if($login === '' || $password === '') {
        echo 'Error';
    } else {
        $existence = selectOne('users', ['login' => $login]);
        if($existence && password_verify($password, $existence['password'])) {
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['login'];
            header('location: http://localhost/WebApp/mainPage.html');
        } else {
            echo 'Error';
        }
    }
}