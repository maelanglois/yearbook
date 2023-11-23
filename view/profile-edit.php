<?php
require '../root/connection.php';

$response = $bdd->query('select * FROM students WHERE id = '.$_GET['userId']);
$data = $response->fetch();

if(!$data) {
    header('Location : ?page=homepage');
}
var_dump($data);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le profil</title>
</head>
<body>
    <form>
        Nom : <?= $_GET['name'] ?>
        Prénom : <?php $_GET['firstname'] = ''; ?>
        E-mail : <?php $_GET['email'] = ''; ?>
        Mot de passe : <?php $_GET['password'] = ''; ?>
        Date de naissance : <?php $_GET['birthday'] = ''; ?>
        Avatar : <?php $_GET['avatar'] = ''; ?>
        Role : <?php $_GET['role'] = ''; ?>
        Aime : <?php $_GET['aime'] = ''; ?>
    </form>
</body>
</html>