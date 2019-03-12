<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Essential Lampworking Video DVD and VHS Volumes 1 and 2 Begining and Advanced Borosilicate Lampworking';
    $description='Essential Lampworking Videos DVD. Only $19.95! Perfect beginning level instructional video for borosilicate lampworking: Latticinos, Ribbons, Marbles, Opposing Spirals, Reversals, Sectional Welding, Tube Work, Fuming, Warps, Jars, Vases, and more. 150 minutes. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $abstract='essential lampworking video dvd freeman corbin borosilicate lampworking Volume 1 2 freeman corbin , Flameworking Lampworking dvd Glassblowing Beads Glass Sculptures Glass borosilicate Sundance Art Glass Northern California Glassblowing vases ornaments graphite punty punting ribbons spirals inside-out mushrooms decals symbols designs jars goblets tubes Tools Flameworking Pipes Kits equipment annealing Lampworking marbles Sculptures Equipment Glassblowing making animals Glass West Coast cutting International America latticinos Sundance Art Glass Blowing Glass rods Sculptures fuming California tools Flameworking Lampworking Sculpturing Glass paper weights tubing  Sundance Art Glass Center California National International';
    $location="bookWEB/essential-1.php";
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'dvds.php';
    foreach ($dvds as $key => $value) {
        if ( strpos($_SERVER["PHP_SELF"], $value->pageOpt['info']) ){
            $dvd[]=$value;
        }
    }
?>

<div class="row">
    <div class="col">
        <h2>Essential Lampworking 1: The Beginning</h2>
        <h4>With Freeman Corbin & Jenny Newtson</h4>
        <img src="../images/essential-lampworking-1lg.png" alt="Essential Lampworking DVD Case" class="img-fluid my-2">
        <p>
            A great beginners first video for borosilicate lampworking
        </p>
        <p>
            Features demonstrations of latticinos, ribbons, marbles, opposing spirals, reversals, sectional welding, tube work, fuming, warps, jars, vases, and more!
        </p>
        <p>
            Approximately 150 minutes.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <h2>Essential Lampworking 2: Intermediate</h2>
        <h4>With Chris Hale, Gregor Kevrekian, Amandus Jalof, Justin McBurnett and Freeman Corbin</h4>
        <img src="../images/essential2-med.jpg" alt="Essential Lampworking 2 DVD case" class="img-fluid my-2">
        <p>
            Several artists make individual pieces, and then these pieces are assembled to make an incredible sculpture.
        </p>
        <p>
            Individual elements and techniques include latticinos to make the handle, marble for the stem, opposing spiral technique (cool!), the use of dichroic glass, fillagree, frit coloring, reversals, color mixing, sculpting, flaring, vases, combining, inside-out technique, and more!
        </p>
        <p>
            "This is a very professionally produced video. I highly recommend it." - Brian (owner of Sundance). 
        </p>
    </div>
</div>

<?php
    foreach ($dvd as $key => $value) {
        $value->purch();
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';