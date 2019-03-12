<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Drop Out Ceramic Slumping Forms for Glass Fusing - Sundance Art Glass Center';
    $description='Glass Fusing Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
    $keywords='glass,slumping,molds,glass slumping molds,drop through,metal mold,drop,display stand 90625,';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='glass-slumping-molds-drop-r.php';
    require_once(ROOT .'/mobile/includes/header.php');
?>

<div class="row">
    <div class="col">
        <h1>Drop Through Molds</h1>
        <h5>for Glass Fusing Applications</h5>
        <p>
            Slipcast from a specially formulated clay body, these ceramic molds have exceptionally 
            smooth surfaces, accept kilnwash uniformly, and do not crack under repeated usage if handled 
            properly. Dimensions shown are the largest measurements of the actual mold, to help you determine the kiln space required. Be sure to take this into consideration when choosing the right mold for your 
            project. Individual molds may vary slightly from the dimensions shown. Whether pre-fusing or 
            cutting unfired glass, create your blank to fit the actual mold.
        </p>

        <p>
            Please keep in mind that while our products are of the finest quality, we do not guarantee any items that are made to be used in a kiln firing.
        </p>
        <p class="font-weight-bold">Click on the images for details on a given mold.</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">Drop Through Molds for Glass</div>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('drop');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/fgdroplg.jpg" class="figure-img img-fluid rounded" alt="some projects in their molds before removing">
            <figcaption class="figure-caption text-sm-center">Made using the #8631</figcaption>
        </figure>
        <div class="h4">Even More Drop Through Molds</div>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('drop2');
}
?>
<hr class="my-3">

<div class="row">
    <div class="col">
        <img src="images/fused-glass-drop-out-display-stand-5x8-sm.jpg" alt="a stand, a stand, and a project with a stand" class="img-fluid"><br>
        <p class="h4">Display Stands for Drop Through Projects</p>
    </div>
</div>

<?php
include_once DBROOT.'dropStands.php';
foreach ($stands as $key => $value) {
    $value->display('drop');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col">
        <div class="h4">Stainless Steel Drop Through Molds</div>
        <img src="images/square-drop-out-stainless.jpg" alt="purple project as made though one of these molds" class="img-fluid">
        <p>
            Stainless steel square metal drop through mold #1689 makes the piece in the above picture.
            16" x 16" outside diameter with an 8" x 8" hole. These molds come both flat or with a slightly 
            curved side, like in the picture. Works for more gentle drop through, because metal mold 
            wants to grab the glass on deep drop through projects.
        </p>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('drop metal');
}
?>

<?php require_once ROOT.'/mobile/includes/rightcol.php';