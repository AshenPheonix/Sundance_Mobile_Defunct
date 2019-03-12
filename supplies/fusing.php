<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Fusing Tools Equipment and Chemicals - Sundance Art Glass Center';
    $description='Great source for glass fusing supplies, chemicals, equipment, and tools for use with kilns and glass art projects. Competetive prices, high quality, international shipping.';
    $keywords='equipment,tools,fiber board,ThinFire,Thin Fire,Chemicals,supplies, gloves, Glass Fusing,Bullseye,Fuse Equipment,Kiln work,gloves,kiln wash,hot,warm,glass,COE 90,Sundance Art Glass,California';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='fgstoolschem.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Glass Fusing Supplies
        </h1>
        <p>
            Make your fusing projects spectacular! You will find all kinds of useful additions here for your fusing studio; high temperature gloves, fusing chemicals & sprays, engravers, diamond drill bits, liquid gold, and more. We also stock fiber blanket, fiber
            paper, ThinFire shelf paper, and high-temperature shelf-primer.
        </p>
    </div>
</div>

<div class="row">
    <div class="col fakeBtn pt-3 flex-image">
        <a href="fusing/tools.php">
            <figure class="figure">
                <img src="fusing/images/glovessm.JPG" class="figure-img img-fluid rounded" alt="2 pairs of white gloves">
                <figcaption class="figure-caption text-sm-center">Fusing Tools and Equipment</figcaption>
            </figure>
        </a>
    </div>
    <div class="col fakeBtn pt-3 flex-text">
        <a href="fusing/chemicals.php">
            <figure class="figure">
                <img src="fusing/images/seperatorbulsm.JPG" class="figure-img img-fluid rounded" alt="A bucket with an unreadable red label">
                <figcaption class="figure-caption text-sm-center">Fusing Supplies, Chemicals, and Separators</figcaption>
            </figure>
        </a>
    </div>
</div>
<div class="row">
    <div class="col fakeBtn flex-image pt-3">
        <a href="fusing/cutting.php">
            <figure class="figure">
                <img src="fusing/images/glass-cutter-toyol-pistol-grip-1sm.jpg" class="figure-img img-fluid rounded" alt="A transparent blue handled glass scoring tool">
                <figcaption class="figure-caption text-sm-center">Glass Cutting and Grinding tools</figcaption>
            </figure>
        </a>
    </div>
    <div class="col fakeBtn pt-3 flex-text">
        <a href="fusing/fiber.php">
            <figure class="figure">
                <img src="fusing/images/fiber.jpg" class="figure-img img-fluid rounded" alt="Hand drawn rolled up cloth">
                <figcaption class="figure-caption text-sm-center">Fiber Products</figcaption>
            </figure>
        </a>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';