<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Essential Glass Boro Bead Making Video by Crystal Myths - Sundance Art Glass Center';
    $description='Essential Boro Beadmaking: Techniques for Borosilicate Beadmaking - glass lampworking instructional video. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='essential boro beadmaking freeman corbin , amandus jalof justin mcburnett borosilicate pyrex type hard glass shaping artwork design filligrees ribbons inside-out frit tubing beads pendants bead sets dot frogs lizards dragonflies animals insects basic';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/essential-marbles-video.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Essential Marbles</h1>
        <h4>with Freeman Corbin, Kris Hale, and Wesley Chumley</h4>
        <img src="../images/Essential-MarblesLG.jpg" alt="Essential Marbles DVD Case" class="img-fluid my-2">
        <div class="h4 beige">
            No longer available. Please click <a href="../lampworking.php">Here</a> to see our other DVD's
        </div>
        <p>
            This DVD demonstrates techniques for making marbles with Borosilicate (Pyrex) type hard glass.
            Techniques include shaping, mushrooms, compression, dots and peacocking, bass head, 
            opposing spiral, latticino, fillagree, cortex marble and more.
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';