<div>
    <h2> Classe de l'année 2022-2023</h2>
    <p>Rajouter les filtres ici</p>
</div>
<div>
    <?php

    foreach($datas as $data) {?>
    <div>
        <img src="" alt="">
        <p><?=$data['name'], $data['firstname']?></p>

        <p><?=$data['email']?></p>
        <p><?=$data['birthday']?></p>
    </div>
    <?php } ?>
</div>