<div class="container">
    <div class="yearbook-main-title">Yearbook</div>
    <a href="?page=new-yearbook" class="homepage-new-student">Ajouter un nouveau yearbook</a>
    <div class="homepage-year-display">
        <?php 
        foreach($datas as $data) {?>
        <div>
        <a href="#"><div class="homepage-year-contain">
            <div class="homepage-grayscale"><img src="data:image/jpeg;base64,<?= base64_encode($data['image_content'])?>" class="homepage-year-img"></div>
                <div class="homepage-year-title"><?= $data['start_period']?> - <?= $data['end_period']?></div>
            <div class="homepage-year-number">XX étudiants</div>
        </div></a>
        <div class="yearbook-modiadd">
            <a href="?page=delate-yearbook" class="yearbook-delete"><ion-icon name="trash-outline" class="yearbook-mod-icon"></ion-icon>Supprimer
        </div></a>
        </div>
        <?php } ?>
    </div>
</div>






