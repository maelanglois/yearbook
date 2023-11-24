<?php 

require '../root/connection.php';

$response=$bdd->prepare("select * FROM students WHERE id=:id");
$response->execute([":id"=> $_GET['userId']]);
$user=$response->fetch();
var_dump($user);

$response = $bdd->prepare("UPDATE students SET name=:name WHERE id=:id");
    $response->execute([
        ":id" => $userId,
        ":name" => $name
    ]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le profil</title>
</head>
<body>
    <form method="POST" action="profile-edit.php?userId=<?php echo $user['id']; ?>">
        <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
        
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>