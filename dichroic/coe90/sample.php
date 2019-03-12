<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Fusing Bullseye Glass- Sundance Art Glass Center';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Glass Fusing Bullseye Kiln work Dichroic hot warm glass,COE 90,Dicroic,scrap,sample packs,fusing,melting,Sundance Art Glass,Sundance Glass,California';
    $location='dichroic-glass-COE90-sample-packs.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'dichroic90.php';
?>

<div class="row">
    <div class="col">
        <h1>
            Dichroic Glass Sample Packs - COE90
        </h1>
        <h5>
            for glass fusing, glass casting, and flameworking
        </h5>
        <img src="../images/dichroic-glass-4x4-med.jpg" alt="5 sheets of colorful dichroic glass" class="img-fluid">
    </div>
</div>

<hr class="my-4">

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('sample');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';