<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Schott Borosilicate coe33 Glass Rod and Tube - sundance art glass center';
$description='Schott Borosilicate coe33 Glass Rod and Tubes. Your california West coast, north america, and international source for artists working glass with a torch sample sets and short sets, ground joints for your art work!';
$keywords='Schott Borosilicate coe33 Glass Rod and Tube,Ground Joints,Assortments,Pyrex,made in america,compatible with pyrex duran sunsilica northstar alchemy borosilicate glass,glass tubing for making sculptures,glass tubes,heavy wall standard wall thickness diameter';
$abstract='At Sundance Art Glass offers sample sets of colored glass rod, Monka nd Northstar shorts and ground joints for your art work!';
$location='borosilicate-pyrex-assortments.php';
include_once(ROOT .'/mobile/includes/header.php'); ?>

<div class="row">
    <div class="col">
        <h1>Borosilicate Assortment Packages</h1>
        <h4 class="text-capitalize">highest quality borosilicate glass</h4>
        <p>
            Compatible with: Pyrex, Kimble, Duran, Momka, Northstar, Glass Alchemy, and
            all other COE33 Borosilicate Hard Glass.
        </p>
    </div>
</div>
<div class="row">
    <div class="col"><button class="btn btn-secondary float-right clickWindow" data-target="boro-assort-discount.php">Assortment Discounts</button></div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/boroAssort.php';
    foreach ($assortments as $key => $value) {
        $value->display('assortment');
    }
?>
<div class="row">
    <div class="col">
        <p>*Factory Packed - The Price and quantity of colors change: Sometimes daily as new colors are made and others discontinued. </p>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">COE33 Glass Rod Sample Sets and Assortments</h4><br>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="images/glass-rod-random-assortment-momkas-med.jpg" alt="A series of multicolored rods" class="img-fluid">
    </div>
</div>
<div class="row">
    <div class="col">
        <h5 class="font-weight-bold">
            Momka, Northstar, Alchemy, and Trautman short ends!
        </h5>
        <p>
            We sell glass rod from our suppliers in 16" lengths, these shorts are various colors and lengths of high quality borosilicate rod that for whatever reason, is no longer 16" long. These are not always available as they are random left over's. Walk ins are encouraged to ask if shorts are available. This rod works with all COE 33 glass including Glass Alchemy, Momka, Northstar, Pyrex, Trautman Art Glass, and Schott. 
        </p>
        <p class="font-weight-bold bg-warning">
            Please note that due to supply limitations we have to impose a 
            limit of 3 lbs on Shorts (this includes mix & match) - we apologize for the inconvenience.
        </p>
    </div>
</div>

<?php
    foreach ($assortments as $key => $value) {
        $value->display('shorts');
    }
?>


<?php require_once ROOT .'/mobile/includes/rightcol.php';