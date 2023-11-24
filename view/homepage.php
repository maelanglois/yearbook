<div class="container">
    <div class="yearbook-main-title">Yearbook</div>
    <?php if($_SESSION['role'] === 'admin') { ?><a href="?page=new-yearbook" class="homepage-new-student">Ajouter un nouveau yearbook</a><?php } ?>
    <div class="homepage-year-display">
        <?php 
        foreach($datas as $data) {?>
        <div>
        <a href="?page=yearbook&id=<?= $data['id']?>"><div class="homepage-year-contain">
            <div class="homepage-grayscale"><img src="data:image/jpeg;base64,<?= base64_encode($data['image_content'])?>" class="homepage-year-img"></div>
                <div class="homepage-year-title"><?= $data['promotion_year']?></div>
            <div class="homepage-year-number">XX étudiants</div>
        </div></a>
        <div class="yearbook-modiadd">
        <?php if($_SESSION['role'] === 'admin') { ?><a href="?page=delate-yearbook&userId=<?= $data['id']?>"  class="yearbook-delete"><ion-icon name="trash-outline" class="yearbook-mod-icon"></ion-icon>delete</a><?php } ?>
        </div>
        </div>
        <?php } ?>
    </div>
</div>






