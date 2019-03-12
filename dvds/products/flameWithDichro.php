<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Focus on Flamework: Flameworking with Dichroic Glass Video by Milon Townsend - Sundance Art Glass';
    $description='Focus on Flamework: Flameworking with Dichroic Glass by Milon Townsend. Instructional Video for creating glass scultpures working with Dichoric glass. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Flameworking Videos Lampworking Videos Beadmaking Videos Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California, patterns project ideas workshop craft designs designer lighting painting hobbies hobby gift ideas unique creative international on about how to make dicro making lamps rods lampshades melting patterns projects ideas cheap beginner cutting sheets advanced instructor classes fuming reference manual class sophisticated dichroic sale wholesale retail beautiful ornaments holidays crafts convention centers display hearts spring winter summer fall crafty new easy techniques tips hints dos and donts guides';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/flameworking-dichroic.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Focus on Flamework - Flameworking with Dichroic Glass</h1>
        <h4>by Milon Townsend</h4>
        <img src="../images/focus_flamework_dichroic_townsend_dvdlg.JPG" alt="Flameworking with Dichroic Glass DVD Case" class="img-fluid my-2">
        <p>
            In this third DVD of the "Focus on Flamework" series, some of the many ways to incorporate dichroic coated glass in flameworked
            pieces are demonstrated. The DVD includes techniques such as embedding dichroic color, etching patterns in the
            dichroic coating, flamepolishing, and applying dichroic glass to an object. The DVD is also interspersed with
            interviews with artist Milon Townsend and images of finished pieces.
        </p>
        <p>
            A 16 page, full-color booklet containing the subject matter is also included, so you can have a reference handy while at the torch. 
        </p>
    </div>
</div>

<?=$dvd->purch();?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';