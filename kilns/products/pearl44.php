<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $description='Paragon Glass Fusing Kiln GF10BD - Sundance Art Glass';
    $keywords='Paragon,Glass Fusing Kiln,GF10BD,Glass Fusing Kilns,Sundance Art Glass';
    $abstract='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-Pearl44.php';
    include_once(ROOT .'/mobile/includes/header.php');
    include 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Pearl 44 Glass Fusing Kiln By Paragon</h1>
        <img src="../images/Pearl44_Open.jpg" alt="The Pearl 44 Kiln, Discontinued" class="img-fluid"><br>
    </div>
</div>

<div class="row mb-2">
    <div class="col-3 flex-text border">
        <p>
            Outside Dimensions
        </p>
        <hr class="my-2">
        <p>
            62" x 33" x 47&frac12;"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Inside Height
        </p>
        <hr class="my-2">
        <p>
            13"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Floor Area for Fusing
        </p>
        <hr class="my-2">
        <p>
            44" x 22"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Volts and Amps
        </p>
        <hr class="my-2">
        <p>
            240 V - 48 Amps
        </p>
    </div>
</div>

<?php 
    $kiln->purch();
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';