<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Kilns for Glasswork- Sundance Art Glass';
    $description='Kilns for all your glass working needs. From fusing and slumping, annealing kilns, or crusible kilns at Sundance Art Glass.';
    $keywords='paragon,kiln,fusing,slumping,annealing,crusable';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='kilns.php';
    include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Kilns for Glass Working</h1>
    </div>
</div>

<?php 
    include_once ROOT.'/mobile/includes/secondaryNavs/kilns.php';
?>

<div class="row">
    <div class="col"><img src="images/Clam18.jpg" alt="Clamshell Kiln" class="img-fluid"></div>
</div>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';