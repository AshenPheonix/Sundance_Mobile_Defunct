<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Slumping Molds for Glass Fusing - Sundance Art Glass Center';
$description='Huge selection of different sized molds for hot glass slumping and forming making plates, dishes, bowls, and special shapes with fused prjects or plain sheet glass. International shipping.';
$keywords='Metal Slumping Forms,Stainless Steel,Wave Forms,Glass Fusing,Bullseye,Fuse Equipment,Kiln work,Sundance Art Glass Center,California Bullseye COE 90';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$location="slumping-molds-glass-fusing-metal.php";
require_once(ROOT .'/mobile/includes/header.php'); ?>

<div class="row">
    <div class="col">
        <h1>Metal Wave Slumping Molds</h1>
        <div class="h4">For Glass Fusing and Slumping</div>
        <p>
            Use these molds to slump sheet glass or try shaping some stringers or rods. You can also try 
            using them upside down for another variation. Shapes are made both by machine and some hand 
            forming, so do expect some variation. 
        </p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('wave');
}
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';
?>