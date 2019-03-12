<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Focus on Flamework: Surface Decoration by Milon Townsend - Sundance Art Glass Center';
    $description='Focus on Flamework: Surface Decoration by Milon Townsend. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $keywords='Focus on Flamework: Surface Decoration by Milon Townsend. Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass- Sundance Art Glass Center!';
    $abstract='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='bookWEB/video-focus-flamework-surface-decoration.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Focus On Flamework - Surface Decoration</h1>
        <h4>By Milon Townsend</h4>
        <img src="../images/focus_flamework_surface_decoration_townsend_dvdlg.JPG" alt="Surface Decoration DVD Cover" class="img-fluid my-2">
        <p>
            In chapter five of the Focus on Flamework series, Milon Townsend demonstrates some very exciting techniques as he produces a fascinating mask using borosilicate glass, including reverse raking. Townsend also illustrates the process of creating a cameo blank through the application of multiple layers of different colours of powder and frit, as well as how to apply a stencil and etch through the layers of color to create a specific image. Townsend also illustrates organic, natural effects with applications of various frits, rod and powders and also demonstrates how to produce shards with interesting color patterning.
        </p>
        <p>
            A 16 page, full-color booklet of the subject matter is also included, so you can have a reference handy while at the torch.
        </p>
    </div>
</div>

<?php
    $dvd->purch();
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';