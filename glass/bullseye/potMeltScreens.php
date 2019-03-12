<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Pot Melting Glass for Glass Fusing and Glass Casting - Sundance Art Glass';
$description='Pot Melting Glass for Glass Fusing and Glass Casting. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
$keywords='Pot Melting Glass for Glass Fusing and Glass Casting Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
$abstract='Pot Melting Glass for Glass Fusing and Glass Casting. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Screens for Pot Melting</h1>
    </div>
</div>

<?php
    require_once DBROOT .'potGlass.php';
    foreach ($potGlass as $key => $value) {
        $value->display('screen');
    }
?>

<hr class="my-3">
 <a href="potMeltScreens2.php"><span class="h3">Click here for more details on how to use your screen</span></a>
<hr class="my-3">

<div class="row">
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-5-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-6-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-7-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-8-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-9-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-6 border p-1"><img src="potMelt/images/screen-melt-tray-10-240.jpg" alt="" class="img-fluid"></div>
    <div class="col-4 border p-1"><img src="potMelt/images/Pot-Melt-Glass-2-150.jpg" alt="" class="img-fluid"></div>
    <div class="col-4 border p-1"><img src="potMelt/images/Pot-Melt-Glass-4-150.jpg" alt="" class="img-fluid"></div>
    <div class="col-4 border p-1"><img src="potMelt/images/Pot-Melt-Glass-1-150.jpg" alt="" class="img-fluid"></div>
</div>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';