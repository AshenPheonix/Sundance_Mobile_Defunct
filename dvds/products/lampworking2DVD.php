<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Lampworking Video by Crystal Myths Lewis C. Wilson - Sundance Art Glass Center';
    $description='Crystal Myths Lewis C. Wilson Lampworking Video. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/video-lampworking.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Lampworking 2 DVD Set</h1>
        <h4>by Crystal Myths with Lewis C. Wilson</h4>
        <img src="../images/dvd-video-lampworking-lewis-wilson-2lg.jpg" alt="Lampworking 2 DVD set Case" class="img-fluid my-2">
        <p>
            This aproximately four hour video comes in two parts and covers advanced bead making techniques such as lattacinno, pulled goldstone stringer, muretti dichroic, Phoenician face beads and amphora bottles. This video also features Keven O'Grady showing Pyrex bracelet making, Keith Kreitter "drawing on glass," Gerry Colman making marbles and Scott Cahoon doing an S.C swirl. Finally, this video features a complete 28 minute section of the production of a double dragon bead made of borosilicate glass.
        </p>
        <p>
            Six different torches are used and new tools and books are discussed.
        </p>
        <p>
            Lewis C. Wilson has been a lampworker for 25 years. His sculptural pieces have been presented to Presidents Bill Clinton and George Bush and King Juan Carlos of Spain by his Native State of New Mexico. 
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';