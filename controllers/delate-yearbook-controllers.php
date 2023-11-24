<?php
require dirname(__DIR__) . '/root/connection.php';
require dirname(__DIR__) . '/view/delate-yearbook.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_GET['userId'];
    $req = $bdd->prepare('DELETE s.*, p.* FROM students as s INNER JOIN promotions AS p ON s.promotion_id=s.id WHERE s.promotion_id=:id and p.id=:id;');
    $req->execute(array(':id'=> $id));
    header('location: ?page=homepage');

}



