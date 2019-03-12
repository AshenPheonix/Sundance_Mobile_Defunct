<div class="row">
    <div class="col">
        <img src="../images/<?=$mainImage;?>" alt="Mold" class="img-fluid">
        <div class="row">
            <?php foreach($smallImage as $key => $value):?>
                <div class="col"><img src="../images/<?=$value;?>" alt="Outline View" class="img-fluid"></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>