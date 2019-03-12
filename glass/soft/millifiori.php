<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Moretti Millefiori and Aventurine - Sundance Art Glass Center';
$description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
$keywords='moretti millefiori millie chips millefiori, Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass Northern California Glassblowing Flameworking Pipes Lampworking Glassblowing Glass International Beadmaking Sundance Art Glass Blowing Glass Sculptures California Flameworking Lampworking Sculpturing Glass Beadmaking Sundance Art Glass Center California National International';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$loation='millefiori-aventurine.php';
include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col"><img src="images/bkeffetre4sm.jpg" alt="Some Millefiori standing on end" class="img-fluid"></div>
</div>

<div class="row">
    <div class="col">
        <h1>Effetre Moretti Millefiori</h1><br>
        <h3 class="red font-weight-bold">COE 104</h3>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        These little glass jewels have been made by glass craftsmen in Murano, Italy since the 15th century. Millefiori is made from tiny glass rods arranged together in a bundle to form cross-sections of swirls, stars and flowers. Once the pattern is arranged,
        all the glass rods are fused together into one larger rod with a gas torch, the rod is stretched thin, and then the rod is cut into sections that are millefiori.
    </div>
</div>

<div class="row">
    <div class="col">
        Assorted colors & styles. Slices are approximately 3/16" to 1/4" thick. Can be used with Effetre/Moretti Sheet glass, Rods, Retticello, Grand Tronconi Slices & Butts.
    </div>
</div>
<div class="row">
    <div class="col font-weight-bold">
        Not Compatable with Bullseye, Uroboros, or Borosilicate.
    </div>
</div>

<?php
    include_once DBROOT.'millefiori.php';
    foreach($assort as $value){
        $value->display();
    }
?>

<?php 
    include_once ROOT.'/mobile/includes/rightcol.php';