<?php


require './root/connection.php';

$id=$_GET['id'];

if (isset($_POST['name'])) {
    $query='SELECT * FROM students ORDER BY name ASC WHERE promotion_id='.$id;
} else if (isset($_POST['namerev'])) {
    $query='SELECT * FROM students ORDER BY name DESC WHERE promotion_id='.$id;
} else if(isset($_POST['birthdate'])) {
    $query='SELECT * FROM students ORDER BY birthday DESC WHERE promotion_id='.$id;
}else if(isset($_POST['birthdaterev'])) {
    $query='SELECT * FROM students ORDER BY birthday ASC WHERE promotion_id='.$id;
}else if(isset($_POST['aime'])) {
    $query='SELECT * FROM students ORDER BY aime DESC WHERE promotion_id='.$id;
}else if(isset($_POST['aimerev'])) {
    $query='SELECT * FROM students ORDER BY aime ASC WHERE promotion_id='.$id;
} else {
$query='SELECT * FROM students WHERE promotion_id='.$id;
}

$response = $bdd->query($query);
$datas = $response->fetchAll();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_GET['Id'];
    $req = $bdd->prepare('DELETE FROM students WHERE promotion_id=:id');
    $req->execute(array(':id'=> $id));
    header('location: ?page=yearbook');

}

require dirname(__DIR__) . '/view/yearbook.php';
