<?php
require '../root/connection.php';

$query = "SELECT * FROM promotions WHERE id=:id";
$response = $bdd->prepare($query);
$response->execute(['id' => $_GET['id']]);
$data = $response->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteQuery = "DELETE FROM promotions WHERE id=:id";
    $deleteResponse = $bdd->prepare($deleteQuery);
    if ($deleteResponse->execute(['id' => $_GET['id']])) {
        header('location: homepage.php');
        exit();
    } 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a yearbook</title>
</head>
<body>
    <h2>Suppression d'un yearbook</h2>
</body>
</html>