<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Dichroic Glass for Fusing - Sundance Art Glass Center';
    $description='Dichroic Glass for Fusing Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Dichroic,Dicro Glass,Fusing,Bullseye,COE 90,frit,fusing,GLASS FUSING,Sundance Art Glass,Bullseye COE 90';
    $location='dichroic-glass-COE90-frit.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'dichroic90.php';
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Glass Frit Flakes</h1>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('frit flakes');
    }
?>
<hr class="my-2">

<div class="row">
    <div class="col">
        <h4>
            Dichroic Extract
        </h4>
        <p>
            CBS Dichroic extract is a pure form of their high quality coatings literally extracted from the surface of the glass and preserved in a glass container. CBS Dichroic Extract is sold not by weight, or by volume, but rather by <strong>sheet glass equivalents</strong>. This is one of the few products out there that by using less creates a better result than using more. Also, you can break down the large grain into a more powdered form should you desire a different result. If you use too much, it can turn gray, so use sparingly!
        </p>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('dichro frit');
    }
?>

<hr class="my-2">

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';