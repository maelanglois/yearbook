<?php
require dirname(__DIR__) . '/root/connection.php';


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id=$_POST['id'];
    var_dump($id);
    $_SESSION['sup']= $id;
    var_dump($_SESSION['sup']);
    if ($_POST['confirmation'] === 'OUI'){
        $req = $bdd->prepare('DELETE FROM promotions WHERE id = :id');
        $req->execute(array(
            ':id'=> $_SESSION['sup']
            ));
            //header('location: ?page=homepage');
    }

}

require dirname(__DIR__) . '/view/delate-yearbook.php';
