<?php

require './root/connection.php';
require dirname(__DIR__) . '/view/login.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "SELECT * FROM students WHERE email = :email";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();
    
    $user = $stmt->fetch();

    if ($utilisateur && password_verify($password, $utilisateur['password'])) 
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['status'] = 'connected';
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['firstname'] = $user['firstname'];
        header("Location: ./view/homepage.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}