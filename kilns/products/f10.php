<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Kiln Fusion10 Fusion 10 F10 Glass Fusing Kiln Annealing Kiln - Sundance Art Glass';
    $description='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $keywords='Paragon,Fusion10,Fusion 10,F10,Kiln,Annealing Kilns,Flameworking Kilns,Lampworking Kilns,glassblowing,annealing,fusing,bead,Aim,Olympic,heat,skuttle,Glass Fusing Kilns,Beadmaking Kilns,Sundance Art Glass';
    $abstract='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-fusion10.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Paragon Fusion 10</h1>
        <h5>
            for Glass Fusers, Flameworkers, and Lampworkers
        </h5>
        <img src="../images/fusion10.jpg" alt="Open Fusion 10 Kiln" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <h4>Pargon Fusion-10 Glass Fusing Kiln</h4>
        <p>
            Paragon's new Fusion-series digital hot glass kilns are packed with exciting features. They come in 6, 7, 8 and 10-sided versions. The Fusion-10 is the 10 sided version.
        </p>
        <p>
            The Fusion-series lid elements use a new element groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins.
        </p>
        <p>
            A heavy galvanized steel base covers the reversible brick bottom completely. It folds up under the stainless case on all sides to strengthen the firing chamber. This is one more assurance that your Paragon kiln is built to last.
        </p>
        <p>
            Imagine the glass you could sag, slump, and fuse with this kiln. Make small bowls, pendants, earrings, cufflinks, and even bracelets. Enjoy the glittering beauty of Dichroics. Make treasured gifts. When you own a Paragon kiln, you can experiment with new glass ideas to your heart's content.
        </p>
        <p>
            Becky Johnson, a glass teacher in Dallas, Texas, describes the excitement of a kiln: “I like to open the kiln with my students so that we can review and admire each other's treasures together. The transformation of the glass inside the kiln is magical and mystical. It changes from pieces of arranged cut glass to awe-inspiring art. To be some part of that process is a true gift.”
        </p>
        <p>
            The digital Sentry Xpress 3 key controller comes standard on all Fusion-series kilns. Control both heating and cooling with simple 3-key operation.
        </p>
        <p>
            The reliable Sentry Xpress 3-key controller is packed with features. It includes two modes: Single Speed and 8-segment Ramp-Hold.
        </p>
        <p>
            Paragon's LiteLid is now standard on all Fusion 10 kilns.
        </p>
    </div>
</div>

<div class="row">
    <div class="col border">
        Outside Dimensions
        <hr class="my-2">
        <p>
            30.5" x 39.5" x 25.5"
        </p>
    </div>
    <div class="col border">
        Inside Height
        <hr class="my-2">
        <p>
            11"
        </p>
    </div>
    <div class="col border">
        Floor Area for Fusing
        <hr class="my-2">
        <p>
            22.5" Square
        </p>
    </div>
    <div class="col border">
        Volts and Amps
        <hr class="my-2">
        <p>
            240 V and 30 A
        </p>
    </div>
</div>

<?php
    $kiln->purch();
?>

<hr class="my-3">

<?php 
    include 'scripts/kilnShipping.php';
?>

<hr class="my-4">

<?php 
    include 'scripts/fusionOpts.php';
?>

<hr class="my-4">

<?php
    specifications('Top Loading Round', ['Sides', 10], 2.86, 11, null, ['Width', 23.50], [30.5, 39.5, 35], [36.5, 38, 24.5], 205, 1700, 30, 1, 7200, '6-30R', 40, '10', 'Y', 'N', 240, 60, null, 'This Kiln Ships Via Truck');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';