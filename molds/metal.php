<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Stainless Steel Metal Slumping Forms for Glass Fusing - Sundance Art Glass Center';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Metal,stainless steel,Slumping Molds,Rings,Candle Cup,Candle Votives,Floral Former,Shapers barrette,frit plate holder,ashtray,soap dish,Bullseye,Fuse Equipment,Kiln';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='slumpingforms.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>
<div class="row">
    <div class="col">
        <h1>Metal Slumping Molds</h1>
        <h4>for Glass Fusing Projects</h4>
        <img src="images/metal-slumping-molds-glass-1lg-120x120.JPG" alt="metal forms" class="img-fluid">
        <p>
            All Stainless Steel Molds include the proper number, size, and location of vent holes
        </p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('metal bowl');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col-4 flex-image"><img src="images/floral-project.jpg" alt="multicolored glass vase" class="img-fluid"></div>
    <div class="col-8 flex-image"><img src="images/floral-former-group-200.jpg" alt="many glass forms" class="img-fluid"></div>
</div>

<div class="row">
    <div class="col">
        <h4>Floral Former Candle Cup Molds</h4>
        <p>
            Place a piece of glass on top of the mold, heat kiln until glass folds around cup. Make a vase or put a candle in it. Kiln wash mold first.
        </p>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('floral');
}
?>
<hr class="my-3">
<div class="row">
    <div class="col"><img src="images/4863.jpg" alt="a stainless steel plate" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <h4>Stainless Steel Ashtray Mold</h4>
        <p>
            Use this mold to make slumped decorative ashtrays. Take a piece of glass or a fused piece and slump into this mold for a designer ashtray. Be sure to coat with kiln wash before using.
        </p>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('ashtray');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col">
        <h4>Barrette Shaper</h4>
        <img src="images/barrette-mold-lg.jpg" alt="A barrette with on the mold" class="img-fluid">
        <p>
            Barrettes are easy, fun projects to do even in small kilns! Our customers say fused glass barrettes are hot sellers at fairs. We have a unique metal barrette shaper. Slumping a fused glass barrette over this form will give you the correct curve which can then be glued to a metal barrette clip. The wider mold allows you to bend more than one barrette at a time. The curve can even be adjusted by bending the metal slightly. It will hold barrettes up to 5" long. 
        </p>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('barrette');
}
?>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Jewelry Glue</h4>
        <p>Glass Glue</p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/fusingTools.php';
foreach ($fusingTools as $key => $value) {
    $value->display('glue');
}
?>
<?php
require_once ROOT.'/mobile/includes/rightcol.php';