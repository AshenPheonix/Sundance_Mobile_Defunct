<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Special Ceramic Slumping Forms for Glass Fusing - Sundance Art Glass Center';
    $description='Slumping Forms for Fusing. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Special unusual assymetrical slumping forms,Small Channel Plate,Simple Curve,Double Curve,Lamp Bender,Taperd,Oval,Short,4 Candle,Bridge,Pyramid,Night Light,Offset,Jagged Bowl,Wave Form,Sundance Art Glass Center,California Bullseye COE 90,';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='slumpformspecr.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Special Shaped Slumping Molds</h1>
        <h4>Ceramic Slumping Molds for Glass Fusing Applications</h4>
        <p>
            Slipcast from a specially formulated clay body, these ceramic molds have exceptionally smooth surfaces, accept kiln wash uniformly, and do not crack under repeated usage if handled properly. Dimensions shown are for prospective projects and not necessarily for the molds themselves, so be sure to take this into consideration when choosing the right mold for your kiln. Individual molds may vary slightly from the dimensions shown. Whether pre-fusing or cutting unfired glass, create your blank to fit the actual mold.
        </p>
        <p>
            Please keep in mind that while our products are of the finest quality, we do not guarantee any items that are made to be used in a kiln firing.
        </p>
        <p class="font-weight-bold">Click the Images for details</p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('special');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col">
        <h4>Micro Slumping Molds</h4>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('micro');
}
?>
<div class="row">
    <div class="col">
        <p>
            It's worth noting that the outside dimensions shown are for the finished project - the actual dimension of the mold may be larger if you are wondering if it will fit in your kiln.
        </p>
    </div>
</div>
<hr class="my-3">
<?php require_once ROOT.'/mobile/includes/rightcol.php';