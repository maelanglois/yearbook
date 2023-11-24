<?php 

require './root/connection.php';
include './view/register.php';

/*
$requete = $bdd->query("select * from students");


$sql = "INSERT INTO students (name, firstname, email, password, birthday, avatar, promotion_id, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$requete = $bdd->prepare($sql);
$requete->execute(array($_POST['name'], $_POST['firstname'], $_POST['email'], $_POST['password'],$_POST['birthday'], 'avatar', $_POST['promotion_id'],$_POST['role']));
$bdd->lastInsertId();


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
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT );
        $birthday = $_POST['birthday'];
        $avatar = $_FILES['avatar']['name'];
        $avatar_content = file_get_contents($_FILES['avatar']['tmp_name']);
        $promotion = 8;

        $stmt = $bdd->prepare("INSERT INTO promotions (name, firstname, email, password, birthday, avatar, avartar_content, promotion_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $firstname, PDO::PARAM_STR);
        $stmt->bindParam(3, $email, PDO::PARAM_STR);
        $stmt->bindParam(4, $password, PDO::PARAM_STR);
        $stmt->bindParam(5, $birthday, PDO::PARAM_STR);
        $stmt->bindParam(6, $avatar, PDO::PARAM_STR);
        $stmt->bindParam(7, $avatar_content, PDO::PARAM_LOB);
        $stmt->bindParam(8, $promotion, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header("Location: ?page=yearbook");
        } else {
            echo "Erreur lors de l'ajout de l'image.";
        }
    } else {
        echo "Erreur lors du téléchargement de l'image.";
    }
}

