<?php
require '../root/connection.php';

$query = "SELECT * FROM students WHERE id=:id";
$response = $bdd->prepare($query);
$response->execute(['id' => $_GET['id']]);
$data = $response->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $deleteQuery = "DELETE FROM students WHERE id=:id";
    $deleteResponse = $bdd->prepare($deleteQuery);
    if ($deleteResponse->execute(['id' => $_GET['id']])) {
        header('location: yearbook.php');
        exit();
    }
}
?>