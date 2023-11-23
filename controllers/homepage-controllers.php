<?php

require './root/connection.php';
 
$query='SELECT * FROM promotions';

$response = $bdd->query($query);
$datas = $response->fetchAll();

require dirname(__DIR__) . '/view/homepage.php';