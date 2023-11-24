<div>
    <div class="yearbook-main-title"> Classe de l'année 2022-2023</div>
    <div class="yearbook-filters-display">
        <form method="POST">
            <button class="yearbook-sort" name="name">Trier par nom <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
            <button class="yearbook-sort" name="birthdate">Trier par date de naissance <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
            <button class="yearbook-sort" name="aime">Trier par j'aime <ion-icon name="arrow-down-outline" class="yearbook-sort-icon"></ion-icon></button>
        </form>
    </div>
    <a href="" class="yearbook-new-student">Ajouter un élève</a>
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
            <a href="" class="yearbook-delete"><ion-icon name="trash-outline" class="yearbook-mod-icon"></ion-icon>Supprimer</a>
            <a href="" class="yearbook-modify"><ion-icon name="pencil-outline" class="yearbook-mod-icon"></ion-icon> Modifier</a>
        </div>
    </div>
    <?php } ?>
</div>