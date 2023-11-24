<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <?php if(isset($_POST["nightmode"])){ ?><link rel="stylesheet" href="css/style.css"><?php } else{?><link rel="stylesheet" href="css/darkstyle.css"><?php } ?>
    <title><?= $route ?></title>
</head>
<body>
    <header>
        <?php if(!empty($_SESSION)){
        if ($_SESSION['status']==='connected') {
        ?>
            <nav>
                <div class="nav">
                    <a href="?page=homepage" title="homepage" class="nav-link">home</a>
                    <span class="link-display">
                        <form method="POST">
                        <?php if(isset($_POST["nightmode"])){ ?>
                            <button type="submit" class="nav-icon" name="lightmode"><ion-icon name="moon-outline"></ion-icon></button>
                        <?php } else {?> 
                            <button type="submit" class="nav-icon" name="nightmode"><ion-icon name="sunny-outline"></button><?php 
                        }?>
                        </form>
                        <a href="?page=logout" title="logout" class="nav-link">logout</a> 
                    </span>
                </div>  
            </nav>
        <?php }}
        else { ?>
            <nav>
                <div class="nav">
                    <a href="?page=homepage" title="homepage" class="nav-link">home</a>
                    <span class="link-display">
                    <form method="POST">
                        <?php if(isset($_POST["nightmode"])){ ?>
                            <button type="submit" class="nav-icon" name="lightmode"><ion-icon name="moon-outline"></ion-icon></button>
                        <?php } else {?> 
                            <button type="submit" class="nav-icon" name="nightmode"><ion-icon name="sunny-outline"></button><?php 
                        }?>
                        </form>
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