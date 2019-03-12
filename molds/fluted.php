<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Ceramic Slumping Forms for Glass Fusing - Sundance Art Glass';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='Slumping Molds,Fluted,Shelled,Sunburst,ripple molds,draping forms,Glass Fusing,Bullseye,Sundance Art Glass,California,Bullseye COE 90, DB1 Drapery Bowl, C1, C2, C3, Conch Shell, B2, B3, Bavarian Plate';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='fusing-slumping-forms-fluite-r.php';
    require_once(ROOT .'/mobile/includes/header.php');
?>

<div class="row">
    <div class="col">
        <h1>Ripple, Fluted, and Shell Slumping Molds</h1>
        <h5>Ceramic Slumping Molds for Glass Fusing Applications</h5>
        <p class="text-left">
            Slipcast from a specially formulated clay body, these ceramic molds have exceptionally smooth surfaces, accept kiln wash uniformly, and do not crack under repeated usage if handled properly. Dimensions shown are for prospective projects and not necessarily for the molds themselves, so be sure to take this into consideration when choosing the right mold for your kiln. Individual molds may vary slightly from the dimensions shown. Whether pre-fusing or cutting unfired glass, create your blank to fit the actual mold.
        </p>
        <p>
            Please keep in mind that while our products are of the finest quality, we do not guarantee any items that are made to be used in a kiln firing.
        </p>
        <p class="font-weight-bold">Click the Images for details ona  given mold.</p>

        <p class="font-weight-bold h4">Sunburst and Rippled Slumping Molds.</p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('rippled');
}
?>
<hr class="my3">

<div class="row">
    <div class="col">
        <p class="h4 font-weight-bold">Rippled and Fluted Slumping Molds</p>
    </div>
</div>


<?php
foreach ($molds as $key => $value) {
    $value->display('fluted');
}
?>
<?php require_once ROOT.'/mobile/includes/rightcol.php';