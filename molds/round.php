<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Ceramic Slumping Forms for Glass Fusing - Wholesale - Sundance Art Glass Center';
    $description='Ceramic Slumping Forms for Glass Fusing - Wholesale - Sundance Art Glass Center';
    $keywords='Ceramic,Slumping Forms,Bowl,Plate,Classic,Ball,Pasta Bowl,Glass Fusing,Sundance Art Glass Center';
    $abstract='Ceramic Slumping Forms for Glass Fusing - Wholesale - Sundance Art Glass Center';
    $location='slumping-forms-round-r.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Round Slumping Molds</h1>
        <h4>Ceramic Slumping Molds for Glass Fusing Applications</h4>
        <p>
            Slipcast from a specially formulated clay body, these ceramic molds have exceptionally smooth surfaces, accept kiln wash uniformly, and do not crack under repeated usage if handled properly. Dimensions shown are for and the mold footprint approximately, so be sure to take this into consideration when choosing the right mold for your kiln & project. Individual molds may vary slightly from the dimensions shown. Whether pre-fusing or cutting unfired glass, create your blank to fit the actual mold.<br><br>
            Please keep in mind that while our products are of the finest quality, we do not guarantee any items that are made to be used in a kiln firing. <strong>Click the images for details on a given mold.</strong>
        </p>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/molds.php';
    foreach ($molds as $key => $value) {
        $value->display('round');
    }
?>

<hr class="my-3">

<?php
foreach ($molds as $key => $value) {
    $value->display('round2');
}
?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';