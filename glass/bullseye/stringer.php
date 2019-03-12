<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Bullseye Glass Stringers - Sundance Art Glass';
$description='Glass Stringers - Best Price COE 90 bullseye Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
$keywords='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$abstract='Bullseye Glass Stringers COE90, Fusing casting flameworking kiln torch';
$location='fgbulstringer.php';
include_once(ROOT .'/mobile/includes/header.php'); ?>
<?php
    include_once ROOT.'/mobile/includes/secondaryNavs/bullseye.php';
?>

    <div class="row justify-content-center">
        <div class="col">
            <h1>Bullseye Glass Stringers</h1><br><br> Threads of glass which have been pulled from re-melted fusible COE90 Bullseye Glass.
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col"><img src="images/quick_tip_fine_line_stringers.jpg" alt="Some Stringers on transparent white plates" class="img-fluid"></div>
    </div>

    <div class="row justify-content-center">
        <div class="col">
            Stringers provide linework for 2 and 3 dimensional fused or torchworked projects. Bend them with a candle or use them straight from the tube. Each tube of stringers will cover approximately 1.5 square feet.<br>
            <br> All COE90 for glass fusing, casting and flameworking.
            <br>
            <br><br> Sold in tubes Available in 35 solid and 38 transparent colors Length is approximately 18" long Thickness 0.5mm, 1mm, or 2mm Bullseye glass makes a very high quality product and will always provide excellent results as long as you
            know what to expect. We highly recommend visiting Bullseye's website and researching any glass you purchase. Many colors have unique behaviors, requirements, and capabilities. Researching and testing each color you purchase will provide exponential
            dividends to your end product, and save much unnecessary frustration.
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col font-weight-bold">Opaque Stringers</div>
    </div>
    <br>

    <?php 
    include_once DBROOT.'stringStore.php'; 
        foreach($opaqueStringers as $stringer)
            $stringer->display();
    ?>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col">
            Transparent Stringers
        </div>
    </div>

    <?php foreach($transparentStringers as $stringer)
        $stringer->display();
    ?>

    <?php
include_once ROOT.'/mobile/includes/rightcol.php'?>