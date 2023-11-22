<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $route ?></title>
</head>
<body>
    <header>
        <?php
        if (isset($_SESSION['user_id'])) {
        ?>
            <nav>
                <div class="nav">
                    <a href="?page=homepage" title="homepage" class="nav-link">home</a>
                    <a href="?page=logout" title="logout" class="nav-link">logout</a> 
                </div>  
            </nav>
            <?php }
            else { ?>
            <nav>
                <div class="nav">
                    <a href="?page=homepage" title="homepage" class="nav-link">home</a>
                    <span>
                        <a href="?page=login" title="login" class="nav-link">login</a> 
                    </span>
                </div>   
            </nav>
            <?php 
        }?>
    </header>
    <main>
		<?php require dirname(__DIR__) . '/controllers/' . $route . '-controllers.php'; ?>
	</main>
</body>
</html>