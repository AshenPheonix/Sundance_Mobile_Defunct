<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Bullseye Sheet Glass - Standard Glass - Sundance Art Glass Center';
$description='Bullseye Sheet Glass - Standard Glass - Sundance Art Glass Center';
$keywords='Bullseye Sheet Glass - Standard Glass - Sundance Art Glass Center';
$abstract='Bullseye Sheet Glass - Standard Glass - Sundance Art Glass Center';
$location='fusing-clear-glass.php';
include_once(ROOT .'/mobile/includes/header.php'); 
include_once ROOT.'/mobile/includes/secondaryNavs/bullseye.php';
require_once DBROOT.'/bullseyeClear.php';
?>

<div class="row justify-content-center">
    <div class="col">
        <h1>Bullseye Clear Glass</h1>
        <br> All Tested Compatible - COE 90
        <br>
        <span style="cursor:pointer; color:blue; text-decoration:underline" onClick='window.open("../wholesale/bullseye-wholesale-popup.php", "infoWindow","width=500,height=450")'>Bullseye Wholesale Pricing</span>
    </div>
</div>

<?php
    foreach ($bullseyeClear as $key => $value) {
        $value->display('square');
    }
?>

<hr>
<div class="row justify-content-center">
    <div class="col">
        <h2 class="x-large">Clear Rounds
            <br> Fuseable Bullseye Tekta COE90</h2>
        <br> Tekta - Your choice for clear - flatter - easier to cut - less expensive clear glass.
        <br>
        <span class="style4">COUPON</span> - BUY $60 OR MORE OF THE BELOW CLEAR ROUNDS
        <br> AND TAKE 10% OFF - BE SURE TO USE COUPON CODE
        <span class="style4">ROUND60</span>
        <br>
        <p>Each below is for one(1) pre-cut circle of clear Bullseye Tekta glass. Each piece is 3mm thick.</p>
    </div>
</div>

<?php
    foreach ($bullseyeClear as $key => $value) {
        $value->display('round');
    }
?>


<br>
<a href="rounds.php">
    <img src="images/2047-11f-sm.jpg" width="126" height="129">Click Here</a>&nbsp; for Colored Glass Rounds
<hr>

<?php
include_once ROOT.'/mobile/includes/rightcol.php';