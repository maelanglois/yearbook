<?php
session_start();

# CONNECTION BASE DE DONNÉE MAC
$bdd = new PDO('mysql:host=localhost;dbname=yearbook;charset=utf8;port:8889','root', 'root');

# CONNECTION BASE DE DONNÉE WINDOWS

// $bdd = new PDO('mysql:host=localhost;dbname=yearbook;charset=utf8','root', '');

$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

