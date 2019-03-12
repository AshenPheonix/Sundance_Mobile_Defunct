<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Kiln Fusion7 Fusion 7 F7 Glass Fusing Kiln Annealing Kiln - Sundance Art Glass';
    $description='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $keywords='Paragon Fusion7 Fusion 7 F7 Kiln Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $abstract='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-fusion7.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>
            Fusion 7 Electric Glass Kiln
        </h1>
        <h5>
            for Glass Fusers, Flameworkers, and Lampworkers
        </h5>
        <img src="../images/fusion7.jpg" alt="The Fusion 7 kiln" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col border">
        Outside Dimensions
        <hr class="my-2">
        <p>
            22" x 24.5" x 21"
        </p>
    </div>
    <div class="col border">
        Inside Height
        <hr class="my-2">
        <p>
            6&frac12;"
        </p>
    </div>
    <div class="col border">
        Floor Area for Fusing
        <hr class="my-2">
        <p>
            14.5" Square
        </p>
    </div>
    <div class="col border">
        Volts and Amps
        <hr class="my-2">
        <p>
            120 V and 15 A
        </p>
    </div>
</div>

<?php
    $kiln->purch();
?>


<?php 
    include 'scripts/kilnShipping.php';
    $fusion=true;
    include 'scripts/fusionOpts.php';
?>

<div class="row">
    <div class="col">
        <p class="h4 red">Features</p>
        <h5>
            Paragon Fusion-7 Glass Fusing Kiln
        </h5>
        <p>
            Paragon's new Fusion-series digital hot glass kilns are packed with exciting features. They come in 6, 7, 8 and 10-sided versions. The Fusion-7 is the 7-sided version.
        </p>
        <p>
            The digital Sentry Xpress 3 key controller comes standard on all Fusion-series kilns. Control both heating and cooling with simple 3-key operation.
        </p>
        <p>
            The Fusion-7 offers the convenience of 120 volt operation. The Fusion-series lid elements use a new element groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins. The digital Sentry Xpress 3 key controller comes standard on all Fusion-series kilns. Control both heating and cooling with simple 3-key operation.
        </p>
        <p>
            A heavy galvanized steel base covers the reversible brick bottom completely. It folds up under the stainless case on all sides to strengthen the firing chamber. This is one more assurance that your Paragon kiln is built to last.
        </p>
        <p>
            Judith Conway of Vitrum Studio said, "The Paragon Fusion-7 is an excellent kiln. Operating on regular household current, it is an easy addition to your home/studio. And Paragon offers better-than-excellent customer service. We have sold many, many Fusion-7's, and all our customers/students/friends recommend them to others as both a great starter kiln and a kiln to keep on hand for both test firings and smaller firings and smaller load firings in the years to come."
        </p>
        <p>
            Imagine the glass you could sag, slump, and fuse with this kiln. Make small bowls, pendants, earrings, cufflinks, and even bracelets. Enjoy the glittering beauty of Dichroic. Make treasured gifts. When you own a Paragon kiln, you can experiment with new glass ideas to your heart's content.
        </p>
        <p>
            Becky Johnson, a glass teacher in Dallas, Texas, describes the excitement of a kiln: "I like to open the kiln with my students so that we can review and admire each other's treasures together. The transformation of the glass inside the kiln is magical and mystical. It changes from pieces of arranged cut glass to awe-inspiring art. To be some part of that process is a true gift."
        </p>
        <p>
            The Sentry Xpress 3-key controller is packed with features. It includes two modes: Single Speed and 8-segment Ramp-Hold.
        </p>
    </div>
</div>

<?php
    specifications('Top Loading round',['Sides',7], .69, 6.5, null,['Width', 14.5], [22,24.5,30.5], [30,30,26], 103, 1700, 15, 1, 1800, '5-15R', 20, '12', 'Y', 'N', 120, 60, '5-15RW100.jpg', 'This Kiln Ships Via UPS');
?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';
?>