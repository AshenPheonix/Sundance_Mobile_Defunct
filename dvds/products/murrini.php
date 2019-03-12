<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='The Making of Murrini: Faces, Lettering, Mosaics Video by Crystal Myths - Sundance Art Glass Center';
    $description='The Making of Murrini: Faces, Lettering, Mosaics Video by Lewis C. Wilson of Crystal Myths. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/videomurrini.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>The Making of Murrini: Faces, Lettering, Mosaics</h1>
        <h4>By Crystal Myths with Lewis C. Wilson</h4>
        <img src="../images/murrini.JPG" alt="Murrini Case" class="img-fluid my-2">
        <p>
            Murrini making provides the glass bead maker with incredible detail. The possibility of including faces, words, or mosaic designs within a bead is exciting to most bead makers. This video shows how to use a minor bench burner and Moretti Glass Rods to create many types of Murrini. The techniques are simple and done at the torch. Studio designs and signature chips could easily be learned by following the techniques on this video.
        </p>
        <p>
            Lewis C. Wilson has been a lampworker for 25 years. His sculptural pieces have been 
            presented to Presidents Bill Clinton and George Bush and King Juan Carlos of Spain by 
            his Native State of New Mexico.
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';