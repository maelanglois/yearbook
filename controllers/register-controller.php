<?php 
require './root/connection.php';

if(isset($_POST["title"]) && isset($_POST["text"]) && isset($_POST["date"]))
{
    
    $sql = "INSERT INTO students (name, firstname, email, password, birthday, avatar, promotion) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $requete = $bdd->prepare($sql);

    $requete->execute(array($_POST['name'], $_POST['firstname'], $_POST['email', $password, ]));
}
