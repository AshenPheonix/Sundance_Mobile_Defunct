<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Glass Paint Kits - Sundance Art Glass';
$description='';
$keywords='Reusche,Stains,Paints, kits,Sundance Art Glass,Flameworking,Lampworking,Glass,Beadmaking,';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
require_once(ROOT .'/mobile/includes/header.php');
?>

<div class="row">
    <div class="col">
        <h1>Stained Glass Paint Kits</h1>
        <p>
            May take up to a week to process paint orders
        </p>
    </div>
</div>

<?php
    require_once DBROOT.'PaintKits.php';
    foreach ($paintKits as $key => $value) {
        $value->display('paint kit');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';
