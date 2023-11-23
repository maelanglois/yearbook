<?php


require 'connection.php';
 
$query='SELECT * FROM students';

$response = $bdd->query($query);
$datas = $response->fetchAll();

require dirname(__DIR__) . '/view/yearbook.php';