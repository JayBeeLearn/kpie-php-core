<?php

$config = require('config.php');

$db = new Database($config['database']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];


    $userQuery = 'SELECT * FROM users WHERE email LIKE :email';
    $user = $db->query($userQuery, [':email'=>$email])->findOne();

    if(!$user){
        echo 'No such user';
        die();
    }


    $token = bin2hex(random_bytes(16));
    $token_hash = hash('sha256', $token);

    $expires_at = date('Y-m-d H:i:s', time()+60*30);


    $query = "UPDATE users SET reset_token_hash = :token, reset_token_expires_at = :expires WHERE email = :email";

    $db->query($query, ['token'=>$token_hash, 'expires'=>$expires_at, 'email'=>$email]);

    echo 'Successful';

    // var_dump($_POST['email']);
}


require "views/forgot_password.view.php";

