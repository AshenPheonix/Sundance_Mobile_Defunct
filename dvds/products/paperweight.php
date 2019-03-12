<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paperweight Techniques with Borosilicate Glass Video by Crystal Myths - Sundance Art Glass';
    $description='Paperweight Techniques by Lewis C. Wilson of Crystal Myths using the Jen-Ken Kilns Electric Crucible Furnace. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass borosilicate Sundance Art Glass Northern California Glassblowing vases ornaments graphite punty punting ribbons spirals inside-out mushrooms decals symbols designs jars goblets tubes Tools Flameworking Pipes Kits equipment annealing Lampworking marbles wine goblets Sculptures flaring combining frit coloring dichroic Equipment Glassblowing making animals Glass West Coast cutting International America latticinos Sundance Art Glass Blowing Glass rods Sculptures fuming California tools Flameworking Lampworking Sculpturing Glass paper weights tubing  Sundance Art Glass Center California National International';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/videopprwt.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Paperweight Techniques</h1>
        <h4 class="font-italic">
            by Crystal Myths with Lewis C. Wilson
        </h4>
        <img src="../images/paperweight-techlg.JPG" alt="Paperweight Techniques" class="img-fluid mb-2">
        <p>
            In this 2 part DVD set Wilson demonstrates how to set up an electric crucible furnace and charge it with glass. Safety tips and suggestions regarding the location of the furnace are discussed. Wilson also shows how most lampworkers have the opportunity to try advanced techniques by gathering glass from a crucible and using a torch and a glory hole.
        </p>
        <p>
            Jennifer Wilson shows how to make three very small animals with Moretti glass: a snake, a turtle and a frog. These and many more items are encased in pendants, buttons, and paperweight marbles by Lewis. The largest pieces made are approximately 2-1/4" in diameter.
        </p>
        <p class="font-italic">
            Lewis Wilson has been a lampworker for 25 years. His sculptural pieces have been presented to Presidents Bill Clinton and George Bush and King Juan Carlos of Spain by his Native State of New Mexico.
        </p>
    </div>
</div>

<?php
    $dvd->purch();
?>

<?php
    require_once ROOT .'/mobile/includes/rightcol.php';