<?php
require '../root/connection.php';
require'profile-edit.php';

$response = $bdd->query('select * FROM students WHERE id = '.$_GET['userId']);
$data = $response->fetch();

if(!$data) {
    header('Location : ?page=homepage');
}
var_dump($data);

$input_name = $_UPDATE["name"];
$id = 1;
?>