<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
if (isset($_SESSION['user_id'])) {
?>
    <nav>
        <div class="nav"><a href="index.php" title="homepage" class="nav-link">home</a><a href="logout.php" title="logout" class="nav-link">logout</a>   
    </nav>
    <?php }
    else { ?>
    <nav>
        <div class="nav"><a href="index.php" title="homepage" class="nav-link">home</a><span><a href="login.php" title="login" class="nav-link">login</a> <a href="register.php" title="register" class="nav-link">register</a></span></div>   
    </nav>
    <?php 
}?>
</body>
</html>