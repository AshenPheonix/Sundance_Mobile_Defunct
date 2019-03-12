<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Dichroic Glass for Fusing - Sundance Art Glass Center';
    $description='Dichroic Glass for Fusing Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Dichroic,Dicro Glass,Fusing,Bullseye,COE 90,scrap,fusing,GLASS FUSING,Sundance Art Glass,Bullseye COE 90';
    $location='dichroic-glass-COE90-scrap.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require_once DBROOT.'dichroic90.php';
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Scrap Glass</h1>
        <img src="../images/dichroic-cbs-scrap.jpg" alt="A pile of colorful dichroic glass" class="img-fluid">
        <h5>Dichroic glass scrap - <strong class="red">COE 90</strong></h5>
        <p>
            About a half pound of assorted dichroic pieces. Various coating and textures, available in COE 90. Prepackaged bags cannot be picked out. Your choice is dicro coated on either clear glass or black glass. Please remember, this is SCRAP which means the variety may vary from a lot to a little, it is not perfect glass and there may be scratches, etc..etc.. But it all looks great! We sell LOTS of these packages!
        </p>
        <p>
            We also have COE 30 borosilicate Pyrex type glass - available on <a href="/mobile/dichroic/hard.php">this page</a>
        </p>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('scrap');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';