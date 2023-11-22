<?php 
require './root/connection.php';

if(isset($_POST["title"]) && isset($_POST["text"]) && isset($_POST["date"]) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] === 0 && $_FILES['avatar']['size'] <= 200000 && $_FILES['avatar']['type'] === 'avatar/png')
{
    
    $sql = "INSERT INTO students (name, firstname, email, password, birthday, avatar, promotion) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $requete = $bdd->prepare($sql);

    move_uploaded_file($_FILES['avatar']['tmp_name'], '/login' . basename($_FILES['avatar']['name']));
    $requete->execute(array($_POST['name'], $_POST['firstname'], $_POST['email'], $password, $_POST['birthday'], $_POST['avatar'], $_POST['promotion']));

    
}

   
