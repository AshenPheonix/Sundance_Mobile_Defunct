<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Bracelet Mandrels - Sundance Art Glass';
    $description='Specialized tools for jewelery makers, mandrels for braclets,ear rings,rings.';
    $keywords='Sundance Art Glass,Flameworking,Lampworking,Glass,Beadmaking,Fusing,Slumping,Mnadrels,Round,Oval,Braclet,Ear Ring,Earring,mounted,stepped,5 sided,6 sided,8 sided,10sided,12 sided';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Bracelet and Ring Mandrels</h1>
        <div class="row">
            <div class="col-3 flex-image">
                <img src="images/bracelet-mandrel-end.jpg" alt="mandrel ends" class="img-fluid">
            </div>
            <div class="col-9 flex-image">
                <img src="images/bracelet-mandrel-1606.jpg" alt="Side view of two mandrels" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col"><img src="images/ring-mandrel.jpg" alt="A ring Mandrel" class="img-fluid"></div>
        </div>
        <div class="row">
            <div class="col-4 flex-image"><img src="images/glass-bracelet-mandrel-1lg.jpg" alt="a ring on a mandrel" class="img-fluid"></div>
            <div class="col-8 flex-image"><img src="images/ring-finger-mandrel-2.jpg" alt="a pair of rings on a mandrel" class="img-fluid"></div>
        </div>
        <p>
            Do not put the metal mandrel molds into flame.
            Wrap your hot glass around the cold mandrels than remove quickly.
        </p>
    </div>
</div>

<?php 
    require_once DBROOT.'mandrels.php';
    foreach ($mandrels as $key => $value) {
        $value->display('bracelet');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';