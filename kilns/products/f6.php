<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Kiln Fusion6 Fusion 6 F6 Glass Fusing Kiln Annealing Kiln - Sundance Art Glass';
    $description='Paragon Fusion 6 Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $keywords='Paragon,Fusion6,Fusion 6,F6,Kiln,Annealing Kilns,Flameworking Kilns,Lampworking Kilns,Glass Fusing Kilns,Beadmaking Kilns - Sundance Art Glass';
    $abstract='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns by Paragon,Aim,Olympic,Heat,Skuttle,Sundance Art Glass';
    $location='glass-fusing-kiln-fusion6.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require_once 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Fusion 6</h1>
        <h5>
            Electric Glass Kiln<br>
            for Glass Fusers, Flameworkers, and Lampworkers
        </h5>
        <img src="../images/fusion6.jpg" alt="The Fusion 6 Kiln" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col py-2 border flex-text">
        <div class="row">
            <div class="col">
                Outside Dimension
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col">
                19" x 20" x21"
            </div>
        </div>
    </div>
    <div class="col py-2 border flex-text">
        <div class="row">
            <div class="col">
                Inside Height
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col">
                6&frac12;"
            </div>
        </div>
    </div>
    <div class="col py-2 border flex-text">
        <div class="row">
            <div class="col">
                Floor Area for Fusing
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col">
                11" x 11"
            </div>
        </div>
    </div>
    <div class="col py-2 border flex-text">
        <div class="row">
            <div class="col">
                Volts and Amps
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col">
                120V / 15A
            </div>
        </div>
    </div>
</div>

<?php
    $kiln->purch();
?>
<hr class="my-2">
<?php
    include 'scripts/kilnShipping.php';
?>

<?php 
    $demo=true;
    include 'scripts/fusionOpts.php';
?>


<div class="row">
    <div class="col-12">
        <strong>Features of the Paragon Fusion6 Glass Fusing Kiln</strong>
        <p>
            Paragon's new Fusion-series digital hot glass kilns are packed with exciting features. They come in 6, 7, 8 and 10-sided versions. The Fusion-6 is the affordable 6-sided version, perfect for beginners.
        </p>
        <p>
            Imagine the glass you could sag, slump, and fuse with this kiln. Make small bowls, pendants, earrings, cufflinks, and even bracelets. Enjoy the glittering beauty of dichroic. Make treasured gifts. When you own a Paragon kiln, you can experiment with new glass ideas to your heart's content.
        </p>
        <p>
            Becky Johnson, a glass teacher in Dallas, Texas, describes the excitement of a kiln: "I like to open the kiln with my students so that we can review and admire each other's treasures together. The transformation of the glass inside the kiln is magical and mystical. It changes from pieces of arranged cut glass to awe-inspiring art. To be some part of that process is a true gift."
        </p>
        <p>
            The digital Sentry Xpress 3 key controller comes standard on all Fusion-series kilns. Control both heating and cooling with simple 3-key operation.
        </p>
        <p>
            The Fusion-series lid elements use a new element groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins.
        </p>
        <p>
            A heavy galvanized steel base covers the reversible brick bottom completely. It folds up under the stainless case on all sides to strengthen the firing chamber. This is one more assurance that your Paragon kiln is built to last.The Fusion-series lid elements use a new element groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins.The digital Sentry Xpress 3 key controller comes standard on all Fusion-series kilns. Control both heating and cooling with simple 3-key operation.
        </p>
        <p>
            The Fusion-6 offers the convenience of 120 volt operation.
        </p>
    </div>
</div>

<?php 
    specifications('Top Loading Round', ['Sides', 6], .42, 6.5, null, ['Width', 11], [19,20,31], [28.5, 28.5, 21.80], 99, 1700, 15, 1, 1800, '5-15P', 20, '12', 'Y','N',120, 60, '5-15RW100.jpg', 'This Kiln Ships Via UPS');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';