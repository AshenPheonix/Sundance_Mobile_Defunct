<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Focus on Flamework: An Introduction to Using Borocolor Video by Milon Townsend - Sundance Art Glass';
    $description='Focus on Flamework: &quot;An Introduction to Using Borocolour&quot; by Milon Townsend. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Flameworking Videos Lampworking Videos Beadmaking Videos Milon Townsend Sundance Art Glass';
    $abstract='Your source for artists working glass with a torch - Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/video-mt-borocolor.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Focus On Flamework - An Introduction to Using Borocolor</h1>
        <h4>By Milon Townsend</h4>
        <img src="../images/focus_flamework_borocolour_townsend_dvdlg.jpg" alt="An Introduction to Using Borocolor DVD Case" class="img-fluid my-2">
        <p>
            This video explains the properties of the various color families, including the stable colors, striking 
            colors, oxidation/reduction colors, amber/purple colors, and the cadmium colors, of Northstar's 
            Borocolour&reg; colored borosilicate glass. It combines demonstrations with interviews of Townsend, 
            showing and telling the important foundational concepts for the artist who wants to have control of 
            the final results.
        </p>
        <p>
            A 16 page, full-color booklet containing the subject matter is also included, so you can have a reference handy while at the torch. 
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';