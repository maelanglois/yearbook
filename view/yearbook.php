<div>
    <div class="yearbook-main-title"> Classe de l'année 2022-2023</div>
    <div class="yearbook-filters-display">
        <form method="POST">
            <?php if(!empty($_SESSION)){
                if(isset($_POST["name"])){ ?>
                <button class="yearbook-sort" name="namerev">Trier par nom <ion-icon name="arrow-up-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php }}
            else{ ?>
                <button class="yearbook-sort" name="name">Trier par nom <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php };
            if(isset($_POST["birthdate"])){ ?>
                <button class="yearbook-sort" name="birthdaterev">Trier par date de naissance <ion-icon name="arrow-up-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php }
            else{ ?>
                <button class="yearbook-sort" name="birthdate">Trier par date de naissance <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php };
            if(isset($_POST["aime"])){ ?>
                <button class="yearbook-sort" name="aimerev">Trier par j'aime <ion-icon name="arrow-up-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php } else{ ?>
                <button class="yearbook-sort" name="aime">Trier par j'aime <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
            <?php }; ?>
        </form>
    </div>
    <?php if(!empty($_SESSION)){
        if($_SESSION['role'] === 'admin') { ?>
        <a href="" class="yearbook-new-student">Ajouter un élève</a>
    <?php }} ?>
</div>
<div class="homepage-year-display">
    <?php
    foreach($datas as $data) {?>
    <div class="yearbook-display">
        <div class="yearbook-card">
            <div class="yearbook-img-contain"><img src="images/avatar01.jpg" alt="<?= $data['name'], $data['firstname']?>" class="yearbook-img"></div>
            <div class="yearbook-title"><?=$data['name'], " ", $data['firstname']?></div>

            <div class="yearbook-infos-display">
                <span><div class="yearbook-infos"><?=$data['email']?></div>
                <div class="yearbook-infos"><?=$data['birthday']?></div></span>
                <span class="yearbook-like-margin">
                    <ion-icon name="heart-outline" class="yearbook-like"></ion-icon><span class="yearbook-like-txt"><?=$data['aime'] ?> j'aime(s)</span></span>
            </div>
        </div>
        <div class="yearbook-modiadd">
        <?php if(!empty($_SESSION)){
        if($_SESSION['role'] === 'admin') { ?>
            <a href="?page=yearbook&id=<?= $data['id'] ?>" class="yearbook-delete"><ion-icon name="trash-outline" class="yearbook-mod-icon"></ion-icon>Supprimer</a>
        <?php }};if(!empty($_SESSION)){
         if($_SESSION['role'] === 'admin' || $_SESSION['id' ]=== $data['id']) { ?>
            <a href="?page=profile-edit&userId=<?= $data['id']?>" class="yearbook-modify"><ion-icon name="pencil-outline" class="yearbook-mod-icon"></ion-icon> Modifier</a>
        <?php }} ?>
        </div>
    </div>
    <?php } ?>
</div>