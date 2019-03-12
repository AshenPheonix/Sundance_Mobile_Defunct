<?php 
$_SESSION['optout']=true;
header('Location:http://www.sundanceglass.com/dichroic-glass-main.php');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Dichroic Glass for Fusing Flame Working Glassblowing Glass Bead Making - Sundance Art Glass Center';
$description='Dichroic Glass for Fusing Flame Working Glassblowing Glass Bead Making - Sundance Art Glass Center';
$keywords='Dichroic Glass for Fusing Flame Working Glassblowing Glass Bead Making, CBS Dichroic and dicro Glass - Sundance Art Glass Center';
include_once(ROOT .'/mobile/includes/header.php'); 
?>



<div class="row justify-content-center">
    <div class="col">
        <h1>Dichroic Glass COE90</h1><br>
        <h2>for Fusers, Flameworkers, and Lampworkers</h2>
    </div>
</div>

<br>

<div class="row justify-content-center">
    <div class="col">
        <p>This <span class="font-weight-bold">COE 90</span> works with Bullseye Glass and Uroboros 90 Glass</p>
    </div>
</div>

<div class="row border border-dark pt-3">
    <div class="col">
        <a href="flat.php">
            <figure class="figure">
                <img src="../images/dichroic-glass-color-violet.jpg" class="figure-img img-fluid rounded" alt="Purple Dichroic"><br>
                <img src="../images/dichroic-glass-color-pink-teal.jpg" class="figure-img img-fluid rounded" alt="Pink and Teal Dichroic"><br>
                <img src="../images/dichroic-glass-color-rainbow1.jpg" class="figure-img img-fluid rounded" alt="Rainbow Dichroic">
                <figcaption class="figure-caption text-xs-right">Flat Colors</figcaption>
            </figure>
        </a>
    </div>
    <div class="col">
        <a href="pattern.php">
            <figure class="figure">
                <img src="../images/dichroic-glass-pattern-pixie_tn.jpg" class="figure-img img-fluid rounded" alt="Dichroic Lines"><br>
                <img src="../images/dichroic-glass-pattern-cool-lava.jpg" class="figure-img img-fluid rounded" alt="Dichroic Lava"><br>
                <img src="../images/dichroic-glass-pattern-sq316_tn.jpg" class="figure-img img-fluid rounded" alt="Dichroic Squares">
                <figcaption class="figure-caption text-xs-right">Pattern</figcaption>
            </figure>
        </a>
    </div>
    <?php /*
    <div class="col">
        <a href="texture.php">
            <figure class="figure">
                <img src="../images/dichroic-glass-testure-radium.jpg" class="figure-img img-fluid rounded" alt="Dichroic Radium"><br>
                <img src="../images/dichroic-glass-texture-fabroid.jpg" class="figure-img img-fluid rounded" alt="Dichroic Fabric"><br>
                <img src="../images/dichroic-glass-texture-accordion.jpg" class="figure-img img-fluid rounded" alt="Dichroic Columns">
                <figcaption class="figure-caption text-xs-right">Textured</figcaption>
            </figure>
        </a>
    </div>
    <div class="col">
        <a href="borderline.php">
            <figure class="figure">
                <img src="../images/SPIRALS-MX-FUSION-sm.jpg" class="figure-img img-fluid rounded" alt="Dichroic Sprials"><br>
                <img src="../images/SCALE-MX-FUSION-sm.jpg" class="figure-img img-fluid rounded" alt="Dichroic Scales"><br>
                <img src="../images/BUBBLES-AURBOR-MX-FUSION-sm.jpg" class="figure-img img-fluid rounded" alt="Dichroic Bubbles">
                <figcaption class="figure-caption text-xs-right">Borderline</figcaption>
            </figure>
        </a>
    </div>
    */ ?>
</div>

<?php
include_once ROOT.'/mobile/includes/rightcol.php';