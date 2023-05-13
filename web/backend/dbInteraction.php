<?php
include "dbReq.php";


if(isset($_POST['username'])) {
    $login = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $post = [
        'login' => $login,
        'password' => $password,
        'email' => $email
    ];

    insert('users', $post);
}