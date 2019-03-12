<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Dichroic Glass Wavy Firestrips - Sundance Art Glass';
    $description='Dichroic Glass Wavy Firestrips - Sundance Art Glass!';
    $keywords='Glass Fusing Bullseye Kiln work Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90 firesrtips';
    $location='dichroic-glass-COE90-firestrips.php';
    include_once(ROOT .'/mobile/includes/header.php'); 
    require_once DBROOT.'dichroic90.php';
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Glass Wavy FireStrips</h1>
        <h5>Compatible with Bullseye Glass and Uroboros 90 Glass</h5>
        <img src="../images/firesrtip-banner-final-web.jpg" alt="Firestrips!" class="img-fluid">
        <p>
            Wavy "Firestrips" - Dichroic Coatings come in Primary Colors, Textured, or Pattern
            16" long on thin 1/16" thick glass - COE 90
            It will work with Bullseye Glass or Uroboros COE 90 glass.
        </p>
        <p>
            Coating colors are assorted and random, but you can choose the base glass clear or black and you choose the width, either 3mm or 6mm.
        </p>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('fire');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';