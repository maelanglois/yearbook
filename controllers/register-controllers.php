<?php 

require './root/connection.php';
include './view/register.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
var_dump($_FILES);

$requete = $bdd->query("select * from students");


$sql = "INSERT INTO students (name, firstname, email, password, birthday, avatar, promotion_id, role, aime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$requete = $bdd->prepare($sql);
 echo $requete->execute(array($_POST['name'], $_POST['firstname'], $_POST['email'], $_POST['password'],$_POST['birthday'], 'avatar', $_POST['promotion_id'],$_POST['role'], $_POST['aime']));
echo $bdd->lastInsertId();


if(isset($_POST["name"]) && isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["promotion"]) && isset($_POST["birthday"]) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] === 0 && $_FILES['avatar']['size'] <= 200000 && $_FILES['avatar']['type'] === 'avatar/png'){
    
   
    $avatarPath = './login/' . basename($_FILES['avatar']['name']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT );   
    $sql = "INSERT INTO students (name, firstname, email, password, birthday, avatar, promotion) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $requete = $bdd->prepare($sql);

    move_uploaded_file($_FILES['avatar']['tmp_name'], './login/' . basename($_FILES['avatar']['name']));
    try {
        $requete->execute(array($_POST['name'], $_POST['firstname'], $_POST['email'], $password, $_POST['birthday'], $avatarPath, $_POST['promotion']));
        echo $bdd->lastInsertId();
    } catch(exception $e)
    {
        echo $e->getMessage();    
    }
 
    

    
}