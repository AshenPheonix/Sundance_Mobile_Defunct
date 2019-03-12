<?php 
    define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
    $title="Square Ceramic Slumping Forms for Glass Fusing -  - Sundance Art Glass Center";
    $description="Ceramic Slumping Forms for Glass Fusing - Square Ceramic Slumping Molds- Sundance Art Glass Center";
    $keywords="Ceramic,Slumping,Forms,Glass Fusing,Square Ceramic Slumping Molds,Mini Soft Edged Plate,Plate,Platter,Four Square,Concave,Convex,Rectagular,flat bottomSundance Art Glass Center";
    $abstract="Ceramic Slumping Forms for Glass Fusing - Square Ceramic Slumping Molds - Sundance Art Glass Center";
    $location="slumping-forms-fusing-sq-r.php";
    require_once(ROOT ."/mobile/includes/header.php"); 
?>

<div class="row">
    <div class="col">
        <h1>Square Ceramic Slumping Molds</h1>
        <h5 class="font-weight-bold">Ceramic Slumping Molds for Glass Fusing Applications</h5>
        <p>
            Slipcast from a specially formulated clay body, these ceramic molds have exceptionally smooth surfaces, accept kiln wash uniformly, and do not crack under repeated usage if handled properly. Dimensions shown are for prospective projects and not necessarily for the molds themselves, so be sure to take this into consideration when choosing the right mold for your kiln. Individual molds may vary slightly from the dimensions shown. Whether pre-fusing or cutting unfired glass, create your blank to fit the actual mold.
        </p>
        <p>
            Please keep in mind that while our products are of the finest quality, we do not guarantee any items that are made to be used in a kiln firing.
        </p>
        <p class="font-weight-bold bg-warning">Click the Images for details on a given mold</p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('square');
}
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';
?>