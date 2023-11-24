<?php


require './root/connection.php';

if (isset($_POST['name'])) {
    $query='SELECT * FROM students ORDER BY name';
} else if(isset($_POST['birthdate'])) {
    $query='SELECT * FROM students ORDER BY birthday';
}else if(isset($_POST['aime'])) {
    $query='SELECT * FROM students ORDER BY aime DESC';
} else {
$query='SELECT * FROM students';
}

$response = $bdd->query($query);
$datas = $response->fetchAll();

require dirname(__DIR__) . '/view/yearbook.php';