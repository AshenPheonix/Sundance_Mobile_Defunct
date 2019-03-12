<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Pot Melting Glass for Glass Fusing and Glass Casting - Sundance Art Glass';
    $description='Pot Melting Glass for Glass Fusing and Glass Casting. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
    $keywords='Pot Melting Glass for Glass Fusing and Glass Casting Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='Pot Melting Glass for Glass Fusing and Glass Casting. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'potGlass.php';
?>

<div class="row">
    <div class="col">
        <h1>Small Sized Glass Scrap Glass</h1>
        <p>As with all scrap glass, clean before use</p>
    </div>
</div>

<?php
    foreach ($potGlass as $key => $value) {
        $value->display('glass');
    }
?>

<?php
    require_once ROOT . '/mobile/includes/rightcol.php';