<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Decorative Accessories for Flameworking Glass Beadmaking - Sundance Art Glass';
$description='Decorative Accessories for Flameworking Glass Beadmaking - Sundance Art Glass!';
$keywords='tools, glass, supplies, bead making, art glass, gold wire,fuming, sculptures, glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
$location='decaccesspyrex.php';
require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Glassblowing Accessories. 
        </h1>
        <h4>
            for Glassblowing, Lampworking, Beadmaking, and Flameworking
        </h4>
    </div>
</div>

<br>
<hr>
<br>
<?php 
    include ROOT.'/mobile/includes/dbs/lavender.php';
    ?>

<br>
<hr>
<br>
    <div class="row">
        <div class="col">
            <h3>Gold and Silver Wire</h3><br> for fuming glass
        </div>
        <div class="w-100"></div>
        <div class="col"><img src="images/goldwire-250x154.jpg" alt="Gold and Silver Wire" class="img-fluid clickImg" data-bigImg="images/goldwire.jpg" data-title="Gold and Silver Wire"></div>
    </div>
    <div class="row">
        <div class="col">
            <ul class="text-left">
                <li>Nearly Pure Gold and Silver Wire.</li>
                <li>Cut off a short piece and heat.</li>
                <li>Stick it to the end of a borosilicate(Pyrex) glass rod.</li>
                <li>Put the metal in the direct flame and let it get hot.</li>
                <li>The metal will slowly burn off and make "smoke"</li>
                <li>When you place glass in the "smoke," it fumes the glass</li>
                <li class="red font-weight-bold">Always use proper ventilation, never breathe any type of metal fumes.</li>
            </ul>
            <br> Silver will easily stick to glass.<br><br> Pure gold (24 Ct.) does not easily stick to glass, so either<br> 1) Put down a silver coating and then use the pure on top of the silver coating or<br>2) Use the less pure cold (22 Ct), the impurities
            will help the gold stick to the glass
        </div>
    </div>

<?php
    include DBROOT.'goldWire.php';
    foreach ($goldWire as $key => $value) {
        $value->display('wire');
    }
?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';