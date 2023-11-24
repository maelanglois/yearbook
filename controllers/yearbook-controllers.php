<?php


require './root/connection.php';

if (isset($_POST['name'])) {
    $query='SELECT * FROM students ORDER BY name ASC';
} else if (isset($_POST['namerev'])) {
    $query='SELECT * FROM students ORDER BY name DESC';
} else if(isset($_POST['birthdate'])) {
    $query='SELECT * FROM students ORDER BY birthday DESC';
}else if(isset($_POST['birthdaterev'])) {
    $query='SELECT * FROM students ORDER BY birthday ASC';
}else if(isset($_POST['aime'])) {
    $query='SELECT * FROM students ORDER BY aime DESC';
}else if(isset($_POST['aimerev'])) {
    $query='SELECT * FROM students ORDER BY aime ASC';
} else {
$query='SELECT * FROM students';
}

$response = $bdd->query($query);
$datas = $response->fetchAll();

require dirname(__DIR__) . '/view/yearbook.php';