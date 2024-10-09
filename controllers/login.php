<?php

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $username = $_POST['username'];
    $password = $_POST['password'];
    $userQuery = 'SELECT * FROM users WHERE username LIKE :username';
    $user = $db->query($userQuery, [':username'=>$username])->findOne();

    if(!$user){
        $errors['user'] = 'User does not exist';
    }
    if($password !== $user['password']){
        $errors['pass'] = 'Incorrect credentials';
    }

    if(empty($errors)){
        session_start();
        $_SESSION['username'] = $username;
        header('location: /landing');
    }
}

require "views/login.view.php";