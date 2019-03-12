<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Bead Making Video by Crystal Myths Lewis C. Wilson- Sundance Art Glass';
    $description='Crystal Myths Lewis C. Wilson: Glass Bead Making Video. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Flameworking Videos Lampworking Videos Beadmaking Videos Sundance Art Glass , Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass Northern California Glassblowing tubes Tools Flameworking Pipes Kits equipment annealing Lampworking Beads Sculptures Equipment Glassblowing making animals Glass West Coast cutting International America Beadmaking Sundance Art Glass Blowing Glass rods Sculptures fuming California tools Flameworking Lampworking Sculpturing Glass Beadmaking Sundance Art Glass Center California National International';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/videogbm.php';
    include_once(ROOT .'/mobile/includes/header.php');
    require 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Glass Beadmaking</h1>
        <h4 class="font-italic">By Crystal Myths with Lewis C. Wilson</h4>
        <img src="../images/glass-beadmakinglg.JPG" alt="Glass Beadmaking, Second Edition DVD" class="img-fluid my-2">
        <p>
            "Crystal Myths, Inc. presents Lewis C. Wilson on Glass bead Making" is the definitive glass bead 
            how-to-video. The easy step-by-step format allows anyone to understand the methodology involved 
            in glass bead making. Wilson demonstrates advanced techniques such as the use of gold and silver 
            foil, clear overlays and dichroic glass are demonstrated. In this video you will also see lessons 
            given to novice students and the advanced bead making of four experienced guests.<br> Runtime of 90 Minutes.
        </p>
        <p class="font-italic">
            Lewis C. Wilson has been a lampworker for 25 years. His sculptural pieces have been presented 
            to Presidents Bill Clinton and George Bush and King Juan Carlos of Spain by his Native State 
            of New Mexico.
        </p>
    </div>
</div>

<?php
    $dvd->purch();
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';