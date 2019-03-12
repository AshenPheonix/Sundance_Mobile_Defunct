<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Effetre - Moretti Starter packs and Sample Sets for Flameworking &amp; Glass Beadmaking - Sundance Art Glass Center';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Flameworking Lampworking Glassblowing Glass Sculptures Glass Beadmaking Sundance Art Glass Northern California Glassblowing Flameworking Pipes Lampworking Glassblowing Glass International Beadmaking Sundance Art Glass Blowing Glass Sculptures California Flameworking Lampworking Sculpturing Glass Beadmaking Sundance Art Glass Center California National International , effetre moretti glass rods';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='moretti-starter.php';
    include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1 class="red">Effetre Moretti</h1><br>
        <h4>Glass Rod Starter Packs<br>COE 104</h4>
    </div>
</div>

<div class="row">
    <div class="col"><img src="images/1654.jpg" alt="A fist holding 45 assorted colored rods" class="img-fluid"></div>
</div>

<?php
$unlabled=[
    ['1654-30','Starter Rod Pack',30,'$34','d36c3d1a353500798691ece3d02c9d50'],
    ['1654-45','Starter Rod Pack',45,'$44','8dfe298e5dbc44fee830dfce50cfea93'],
];

$labeled=[
    ['1556AL','Alabaster Set',16,'$25','ab334786b8e46a131c71cd3ec03fe6f1'],
    ['1557FI','Filigrana Set',27,'$32','f0af126384ca9de43def9740147df9ee'],
    ['1556OP','Opalino Set',7,'$14','37acb10fd647e90f23c4d2352796ae35'],
    ['1556PA','Pastel Set',35,'$32','82e64ccd9fe31e9363aa7cd944989a2a'],
    ['1556SC','Special Colors Set',17,'$29','dd384e66a0c882077a95a1f74cc143ea'],
    ['1556TA','Transparent Set',43,'$37','3de6d85ff8e9a297781087db0fed7991'],
];
?>
    <div class="row">
        <div class="col">
            Each starter packs contain rods that are 13" long. <br>The Starter Rod Packs are unlabled and are a good selection for beginning lamp workers.
        </div>
    </div>
    <?php foreach ($unlabled as $key => $value):?>

    <div class="row beige border border-dark border-right-0 border-left-0">
        <div class="col">
            <span class="font-weight-bold"><?=$value[0];?></span><br>
            <?=$value[1];?>
        </div>
        <div class="col flex-image">
            <?=$value[2];?> pieces for
                <?=$value[3];?>
        </div>
        <div class="col flex-image">
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&amp;pid=<?=$value[4];?>"><img src="\mobile\images\cart_button_1.png" alt="Add To Cart" class="img-fluid"></a>
        </div>
    </div>

    <?php endforeach; ?>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col">
            <p>
                The following sample sets contain one of each color, labeled, in a color type. If any color is out of stock, another will be substituted. Each starter pack contains 13" rods.
            </p>
        </div>
    </div>

    <?php foreach ($labeled as $key => $value):?>

    <div class="row beige border border-dark border-right-0 border-left-0">
        <div class="col">
            <span class="font-weight-bold"><?=$value[0];?></span><br>
            <?=$value[1];?>
        </div>
        <div class="col flex-image">
            <?=$value[2];?> pieces for
                <?=$value[3];?>
        </div>
        <div class="col flex-image">
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&amp;pid=<?=$value[4];?>"><img src="\mobile\images\cart_button_1.png" alt="Add To Cart" class="img-fluid"></a>
        </div>
    </div>

    <?php endforeach; ?>

    <?php
include_once ROOT.'/mobile/includes/rightcol.php';