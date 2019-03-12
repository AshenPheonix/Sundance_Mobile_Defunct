<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Glow Glass Powders - Sundance Art Glass';
$description='Glow Glass Powders Glow Glass Dust Glow in The Dark Powders. Compatible with Pyrex, Kimble, Northstar, Alchemy, Sunsilica, Simax, and Duran. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass!';
$keywords='Glow Glass Powders Glow Glass Dust Glow in The Dark Powders. Borostix, Pyrex, Kimble, Northstar, Alchemy, Sunsilica, Simax, Duran. Glass Flameworking, Glass Rod, Lampworking Glass Rod Glass Rods Borosilicate Glass Rods Sundance Art Glass';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Boroscilicate, Alchemy. With all the glass art studio equipment you need!';
$location='glow-glass-main.php';
require_once(ROOT .'/mobile/includes/header.php');
?>

<style>
    .shadowed {
        box-shadow: 1px 2px 2px 2px black;
    }
</style>

<div class="row">
    <div class="col">
        <h1>Glow Glass</h1><br>
        <p>Glow in the dark glass and powders</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Glow Glass Powders are non-toxic, non-radioactive and non-carcinogenic. Charged by shining light on them. Any light for about one minute will give short term glowing. Strong sunlight for about one hour will charge the glass long enough to glow for hours.
        </p>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <img src="/mobile/images/ANIEYES.GIF" alt="Animated Eyes looking left and right" class="img-fluid"><a href="suppliments/info.php">Click here to see info about glow powders</a>
    </div>
</div>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <a href="coe33_powder.php">
            <figure class="figure border border-dark rounded shadowed beige">
                <img src="/mobile/images/placeholder.jpg" class="figure-img img-fluid rounded" alt="Placeholder">
                <figcaption class="figure-caption text-sm-center">COE 33 Powder</figcaption>
            </figure>
        </a>
    </div>
    <div class="col">
        <a href="coe33_rod.php">
            <figure class="figure border border-dark rounded shadowed beige">
                <img src="/mobile/images/placeholder.jpg" class="figure-img img-fluid rounded" alt="Placeholder">
                <figcaption class="figure-caption text-sm-center">COE 33 Stick</figcaption>
            </figure>
        </a>
    </div>
    <div class="col">
        <a href="coe104.php">
            <figure class="figure border border-dark rounded shadowed beige">
                <img src="images/glowbalt.jpg" class="figure-img img-fluid rounded" alt="Blue-Purple glowing frit" title="To glow in the dark COE 104 frit">
                <figcaption class="figure-caption text-sm-center">COE 104 Rods and Frit</figcaption>
            </figure>
        </a>
    </div>
</div>

<?php 
    include_once 'scripts/glowBase.php';
?>


<?php
    require_once ROOT.'/mobile/includes/rightcol.php';