<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Focus on Flamework: Using Northstar Frit and Powder by Milon Townsend - Sundance Art Glass Center';
    $description='Focus on Flamework: Using Northstar Frit and Powder by Milon Townsend. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Focus on Flamework: Using Northstar Frit and Powder by Milon Townsend. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/video-focus-flamework-northstar-frit.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Focus on Flamework - Using Northstar Frit And Powder</h1>
        <h4>by Milon Townsend</h4>
        <img src="../images/focus_flamework_frit_townsend_dvdlg.JPG" alt="Using Northstar Frit and Powder DVD Case" class="img-fluid my-2">
        <p>
            <strong>Using Northstar Frit and Powder</strong> is the second in the series of five DVDs featuring glass artist Milon Townsend. Here you will find out about some of the health and safety issues important to the artist using frit and powder including how to make and sort your own frit, making cane with different frit and powder effects, how to create a solid sphere with different layers of colored frit, and several sculptural applications for frit and powder pickups.
        </p>
        <p>
            Not only is this DVD interspersed with interviews with Townsend, but it also features images of finished pieces, illustrating some of the ways that an artist can incorporate these techniques into his or her artwork.
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';