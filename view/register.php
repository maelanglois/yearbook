<?php 
require './root/connection.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>inscription eleve</h1>

    <form action="/controllers/register-controller.php" method="post" enctype="multipart/form-data">
        <label for="name">name</label>
        <input type="text" placeholder="enter name" name="name"><br><br>
        <label for="firstname">firstname</label>
        <input type="text" placeholder="enter lastname" name="lastname"><br><br>
        <label for="email">email</label>
        <input type="email" name="email" placeholder="enter email"><br><br>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="enter password"><br><br>
        <label for="avatar">photo de l'eleve</label>
        <input type="file" name="avatar" id="">
        <input type="submit">

    </form>
</div>
    
</body>
</html>
