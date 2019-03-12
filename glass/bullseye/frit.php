<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Bullseye Glass Frit and Powder - Sundance Art Glass';
$description='Bullseye, Glass, Frit,Powder - Sundance Art Glass!';
$keywords='Glass Fusing, Bullseye Glass, Glass Frit, Glass Powder, Dichroic, warm glass, COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$abstract='Frit
Made from crushed, screened, and magnetically cleaned Bullseye Compatible sheet glass.
Frits are versatile and can be used in:
&#65533; P&#65533;te de verre and kilncasting
&#65533; Kilnforming, including &#65533;glass sketch&#65533; and &#65533;painting with light&#65533; techniques
&#65533; Torchworking and blowing, to create colors and patterns on surfaces.';
$location='bullseye-frit-powder.php';
include_once(ROOT .'/mobile/includes/header.php'); ?>

<?php 
    include_once ROOT.'/mobile/includes/secondaryNavs/bullseye.php';
?>

<div class="row justify-content-center">
    <div class="col">
        <div class="h1">Glass Frit and Powder</div><br>
        <img src="/mobile/images/bullseye-kiln-glass-resource-center-195x70.png" alt="Bullseye Resource Center Preferred Partner" class="img-fluid"><br>
        <p class="text-center">
            COE90 Bullseye Glass for Glass Fusing, Glass Casting, and Flame working.
        </p>
    </div>
</div>
<hr>

<div class="row justify-content-center border border-dark">
    <div class="col-12">
        <h1>Frit - Crushed Glass</h1>
        <div class="row">

            <div class="col-6">
                <a href="opaqueFrit.php">
                    <figure class="figure">
                        <img src="images/bullseye-frit-opaque.jpg" class="figure-img img-fluid rounded" alt="Solid Red Frit">
                        <figcaption class="figure-caption text-sm-center">Opaque Frit</figcaption>
                    </figure>
                </a>
            </div>
            <div class="col-6">
                <a href="transFrit.php">

                    <figure class="figure">
                        <img src="images/bullseye-frit-transparent.jpg" class="figure-img img-fluid rounded" alt="Violet Frit">
                        <figcaption class="figure-caption text-sm-center">Transparent Colors</figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <img src="images/bullseye-frit-stock-575x343.jpg" alt="Some of Our Stock" class="img-fluid">
    </div>
</div>
<br>
<?php
    require_once DBROOT.'fusingTools.php';
    foreach ($fusingTools as $key => $value) {
        $value->display('1414');
        $value->display('48440');
    }
?>
<hr class="my-3">

<?php 
    include ROOT.'/mobile/includes/fritBowl.php';
?>

<?php 
include_once ROOT .'/mobile/includes/rightcol.php';