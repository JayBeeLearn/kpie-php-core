<?php


$config = require('config.php');
require('Validator.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
   
    $username = $_POST['username'];
    $userQuery = 'SELECT * FROM users WHERE username LIKE :username';

    if(empty($_POST['username'])){
        $errors['username'] = 'Enter your username';
    } else if($db->query($userQuery, [':username'=>$username])->findOne()){
        $errors['username'] = 'Username is already taken. Try another';
    }


    $email = $_POST['email'];
    $emailQuery = 'SELECT * FROM users WHERE email LIKE :email';

    if(empty($_POST['email'])){
        $errors['email'] = 'Enter a valid email';
    } else if($db->query($emailQuery, [':email'=>$email])->findOne()){
        $errors['email'] = 'Email already exist. Try signing in or use another email';
    }

    $password = $_POST['password'];
    if(! Validator::string($password, 4)){
        $errors['password'] = 'Password too short. Minimum of 4 characters';
    }
    $password_confirm = $_POST['password_confirm'];

    if($password !== $password_confirm){
        $errors['confirm'] = 'Passwords do not match.';
    }



    // echo 'here again query';  
    
    // // $existingUser = $db->findOrFail();
    
    // if(Validator::string($password, 4, 64))
    
    
   if(empty($errors)){
     $query = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';
    // $values = [':username'=>$username, ':emai'=>$email, ':password'=>$password];
    
    $db->query($query, [':username'=>$username, ':email'=>$email, ':password'=>$password]);
    // var_dump($_POST['username'])
    session_start();
    $_SESSION['username'] = $username;
    header('location: /landing');
   }

}


require "views/register.view.php";