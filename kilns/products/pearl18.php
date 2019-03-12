<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $description='Paragon Glass Fusing Kiln GF10BD - Sundance Art Glass';
    $keywords='Paragon,GlassKiln,GF10BD,glassblowing,annealing,fusing,slumping,AIM,Olympic,heat,skutte,Glass Fusing Kilns,Sundance Art Glass';
    $abstract='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-Pearl18.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Paragon's Pearl 18 Glass Fusing Kiln</h1>
        <img src="../images/Pearl18open.jpg" alt="Open Pearl 18 Kiln" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col border">
        Outside Dimensions
        <hr class="my-2">
        <p>
            27" x 34" x 21&frac12;"
        </p>
    </div>
    <div class="col border">
        Inside Height
        <hr class="my-2">
        <p>
            8&frac12;"
        </p>
    </div>
    <div class="col border">
        Floor Area for Fusing
        <hr class="my-2">
        <p>
            18" Square
        </p>
    </div>
    <div class="col border">
        Volts and Amps
        <hr class="my-2">
        <p>
            240 V and 17 A
        </p>
    </div>
</div>

<?php 
    $kiln->purch();
?>

<hr class="my-4">

<?php 
    include 'scripts/kilnShipping.php';
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>
            Features of the Paragon Pearl-18 Glass Fusing Kiln
        </h5>
        <p>
            The Pearl-18 is packed with exciting features. The top lifts away to give access to the shelf area from three sides. Air pistons assist in lifting the top. You can place the Pearl on a table without an extra stand.
        </p>
        <p>
            "You can compose directly on the kiln shelf, then close the kiln top," said glass artist Judith Conway, who uses the Pearl-18 in her Washington, DC studio. “There is no need to balance and carry a heavy kiln shelf from your work table over to your kiln, trying to load the shelf in the kiln while not disturbing the glass pieces in your design.” 
        </p>
        <p>
            The elements in the top are mounted in pinless element grooves. Since the groove opening is narrower than the element coil, the elements stay in place without pins.
        </p>
        <p>
            Electrical components are mounted inside the base of the kilns. The Pearl-18 uses the digital 3-key Sentry Xpress controller.
        </p>
        <p>
            The reliable Sentry Xpress 3-key controller is packed with features. It includes two modes: Single Speed and 8-segment Ramp-Hold.
        </p>
    </div>
</div>

<?php
    specifications('Top Loading Square', ['Sides', 4], 1.59, 8.5, 18, ['Width', 18], [27, 34, 29], [36, 40, 29], 253, 1700, 17, 1, 4000, null, 20, 12, 'Y', 'Y', 240, 60, null, 'This Kiln Ships via Truck');
?>

<?php
    require_once ROOT .'/mobile/includes/rightcol.php';