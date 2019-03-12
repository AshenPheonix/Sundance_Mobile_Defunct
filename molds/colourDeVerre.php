<?php
define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
$title="Special Ceramic Casting Forms for Glass Fusing - Sundance Art Glass Center";
$description="Colour de Verre Glass Molds and Castable Shapes! Sundance Art Glass Center";
$keywords="colour,glass,deverre,molds,ceramic,Boxes,Candle Holders,Lighting,Plants,Nature,Animals,Sea Life,Jewelry,Plants,tiles,fusing,slumping";
$abstract="Molds for Fusing and Casting by Colour De Verre";
$location='colour-de-verre-molds.php';
include_once(ROOT ."/mobile/includes/header.php"); ?>

<div class="row">
    <div class="col">
        <img src="images/colour-de-verre-logo.jpg" alt="Colour de Verre Logo" class="img-fluid">
        <h1>Molds for casting with your fusing kiln.</h1>
        <h4>Work with almost every type of glass frit</h4>
        <ul class="text-left">
            <li class="disc"><a href="../glass/bullseye/frit.php">Click Here</a> to see glass frit for use with these molds</li>
            <li class="disc"><a href="http://sundanceglass.com/colour-de-verre-mold/Tricks.pdf">Click Here</a> for special working instructions, project sheets, and more information.</li>
            <li class="disc">Molds are all Ceramic and reusable</li>
            <li class="disc">Made in the <span class="red font-weight-bold">USA</span></li>
            <li class="disc">Designed for COE 96 and COE 90 glass, such as <a href="../glass/bullseye/frit.php">Bullseye Frit</a></li>
            <li class="disc">Make sure to check the project sheets after purchase. Some molds have specific requirements, such as a certain mold release, and a little research can save a lot of headaches</li>
        </ul>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">Snowflake 2016</div>
        <p>
            Snowflake ’16 is the latest and largest snowflake mold in the annual snowflake series. These are beautful filled with clear frit, or can be made very special with dichroic flakes and frit. <a href="/colour-de-verre-mold/snowflakes.pdf">Download the Project Sheet</a> to learn how to prime, fill, and fire this design.
        </p>
        <p class="font-weight-bold">Scroll down to see our full selection of Plant Nature molds</p>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="images/snowflake16header.jpg" alt="snowflake mold with blue glass" class="img-fluid">
    </div>
</div>
<hr class="my-3">

<div class="row">
    <div class="col">
        <div class="h4">Boxes</div>
        <p>
            For box molds measurements are given for the larger mold i.e. the mold that makes the base of the box. The lid mold are always smaller dimensionally than the base molds. If the base/larger mold fits in your kiln you can be certaint the lid mold will as well
        </p>
    </div>
</div>

<?php require_once ROOT.'/mobile/includes/dbs/molds.php';
foreach ($molds as $key => $value) {
    $value->display('colour boxes');
}?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">Candle Holders & Lighting</div>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('colour candle');
}?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">Plants and Nature</div>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('colour nature');
}
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">Animals & Sea Life</div>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('colour animal');
}
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Jewelry</h4>
    </div>
</div>

<?php
foreach ($molds as $key => $value) {
    $value->display('colour jewelry');
}
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<hr class="my-3">
<div class="row">
    <div class="col">
        <div class="h4">
            Plates and Tiles
        </div>
    </div>
</div>

<?php
    foreach ($molds as $key => $value) {
        $value->display('colour plate');
    }
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">Measurements are approximate and do not include lids for boxes-lids are always smaller</p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';