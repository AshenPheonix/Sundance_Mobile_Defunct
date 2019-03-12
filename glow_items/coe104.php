<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Glow Glass Glow104 Frit - Sundance Art Glass';
$description='Glow Glass Glow in The Dark Efftre Colors. Compatible with Moretti, Effetre and all 104 COE - Sundance Art Glass';
$keywords='Glow Glass Lightsabers COE104 Moretti Effetre 104 COE Glass Flameworking Glass Rod Lampworking Beadmaking Bead Making Sundance Art Glass';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more. With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Boroscilicate, Alchemy. With all the glass art studio equipment you need';
include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>COE 104 Glow Rod and Frit</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>COE 104 Glowing Rod</h2>
        <h3 class="font-weight-bold">Works with Moretti, CiM (Messy), Double Helix, and other COE 104 glass.</h3><br>
        <h3 class="text-danger font-weight-bold">Does not work with Borosilicate Glass (COE 33)</h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            These strips/rods are thin and delicate. We can not guarntee they will not break during shipping. They are
            easy to fuse back together or attach to a handle rod.
        </p>
    </div>
</div>

<?php
require_once DBROOT.'glowRods.php';
foreach ($glowRods as $key => $value) {
    $value->display('104');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h2>COE 140 Glowing Frit</h2>
    </div>
</div>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/fine-frit.jpg" class="figure-img img-fluid rounded" alt="Orange Fine Frit">
            <figcaption class="figure-caption text-sm-center">Fine</figcaption>
        </figure>
    </div>
    <div class="col">
        <figure class="figure">
            <img src="images/medium-frit.jpg" class="figure-img img-fluid rounded" alt="Pink Medium Frit">
            <figcaption class="figure-caption text-sm-center">Medium</figcaption>
        </figure>
    </div>
    <div class="col">
        <figure class="figure">
            <img src="images/large-frit.jpg" class="figure-img img-fluid rounded" alt="Pink Large Frit">
            <figcaption class="figure-caption text-sm-center">Large</figcaption>
        </figure>
    </div>
</div>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Glass Frit that glows in the dark!<br>
            <span class="red">Please note that this frit is ONLY comptable with COE 104 glass</span><br>
            <a href="coe33_powder.php">Click here</a> for COE 33 Glow Frit, or <a href="coe33_rod.php">click here</a>
            for COE 33 Rods.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Glow Glass Powders are non-toxic, non-radioactive and non-carcinogenic. They are charged by shining light
            on them. Any light for about one minute will give short term glowing, while strong sunlight for about one
            hour will charge the glass long enough to glow for hours.
        </p>
    </div>
</div>

<br>
<hr id="frit">
<br><br>
<div class="row">
    <div class="col">*14 gram bags are &plusmn; 1 gram.</div>
</div>

<?php 
    require_once DBROOT.'coe104Frit.php';
    foreach ($frit as $key => $value) {
        $value->display();
    }
?>


<?php
require_once ROOT.'/mobile/includes/rightcol.php';