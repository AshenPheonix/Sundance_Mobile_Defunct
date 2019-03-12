<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Essential Glass Bead Making Video by Crystal Myths - Sundance Art Glass Center';
    $description='Essential Beadmaking: Beginners Techniques for Soft Glass and Borosilicate. Glass lampworking instructional DVD or VHS. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Essential Beaadmaking Video Glass Lampworking , jay shuster justin mcburnett, freeman corbin, At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $abstract='Essential Beaadmaking Video Glass Lampworking , jay shuster justin mcburnett, freeman corbin';
    $location='bookWEB/essential-beadmaking-video.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Essential Beadmaking DVD</h1>
        <h5>With Jay Shuster, Justin McBurnett and Freeman Corbin</h5>
        <img src="../images/essential-beadmaking-dvd-video-cover-lg.jpg" alt="Essential Beadmaking cover" class="img-fluid">
        <p>
            A comprehensive beginning glass bead making video that shows techniques for both soft and borosilicate 
            glass including shaping, artwork and design, Filigrana, Latticinos, ribbons, furrowing, soft and boro glass, mandrel beads, inside out tubing beads, bead sets, poking, and more!
        </p>
    </div>
</div>
<?php
    require_once 'fetch.php';
    $dvd->purch();
?>
<?php
    require_once ROOT.'/mobile/includes/rightcol.php';