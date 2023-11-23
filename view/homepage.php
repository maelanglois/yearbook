<div class="container">
    <div class="homepage-year-display">
        <?php 
        foreach($datas as $data) {?>
        <div class="homepage-year-contain">
            <div class="homepage-grayscale"><img src="images/<?= $data['image']?>" class="homepage-year-img"></div>
                <a href="#" title=" année XXXX" class="homepage-year-title"><?= $data['start_period']?> - <?= $data['end_period']?></a>
            <div class="homepage-year-number">XX étudiants</div>
        </div>
        <?php } ?>
        <a href="#" class="homepage-add-align" title="Ajouter un yearbook"><ion-icon name="add-circle-outline" class="homepage-add"></ion-icon></a>
    </div>
</div>






