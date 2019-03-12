<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Effetre - Moretti Glass Rods for Flameworking &amp; Glass Beadmaking - Sundance Art Glass Center';
$description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
$keywords='Effetre Moretti Glass Stringers Rods Soft Torch Glass Beads Moretti Scultpures Stringers Buttons Marbles Fuse beadmaking sheets stringers lampworking kiln torch glassblowing';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$location='moretti-effetre-glass-stringers.php';
include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Soft Glass Stringers - <span class="red">COE 104</span></h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Made in Italy - Melt these "soft" glass rods with a torch to make beads, sculptures, buttons or marbles 
            or fuse them together with the compatible, flat clear sheets. COE 104. Each rod is 41" long, 2-3mm 
            thick and are often cut down to help survive shipping (expect some breakage).
        </p>
    </div>
</div>  

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Stringers are <span class="red">$1 per rod unless otherwise marked.</span></p>
    </div>
</div>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Transparent
        </p>
    </div>
</div>

<?php
    include_once DBROOT.'stringers.php';
    foreach ($trans as $key => $value) {
        $value->display();
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Pastels/Opals
        </p>
    </div>
</div>
<?php 
    foreach ($pastels as $key => $value) {
        $value->display();
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Special Colors
        </p>
    </div>
</div>

<?php
    foreach ($special as $key => $value) {
        $value->display();
    }
?>

<?php 
include_once ROOT.'/mobile/includes/rightcol.php';
