<?php 
$_SESSION['optout']=true;
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Dichroic Glass Rods - Sundance Art Glass';
$description='Dichroic Glass Rods - Sundance Art Glass!';
$keywords='Glass Fusing Bullseye Kiln work Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$location='dichroic-glass-COE90-rods.php';
require_once(ROOT .'/mobile/includes/header.php');
require_once DBROOT.'dichroic90.php';
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Glass Flat Rods - <span class="red">COE 90</span></h1>
        <h4>New from Bullseye</h4><br>
        <h5>Sizzle Stixs</h5>
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="../images/newsizzlestix.jpg" alt="Sizzlestix in a bundle on black background" class="img-fluid my-4">
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('sizzle');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>Compatable with Bullseye Glass and Uroboros 90 Glass</h5>
        <img src="../images/dichroic-glass-sizzle-med.jpg" alt="Some Strips of Dichroic Glass" class="img-fluid clickImg my-2" data-bigImg="../images/dichroic-glass-sizzle-lg.jpg" data-title='Colorful Dichroic Glass'>
        <p>
            Flat Rods - Sizzle Sticks - 16" long on thin 1/16" thick glass - COE 90 - It will work with Bullseye Glass or Uroboros COE 90 glass. 
        </p>
        <p>
            Coating colors are assorted, but you can choose if the base glass is clear or black and you choose the width, either 1/8" or 1/4". 
        </p>
        <p>
            The Stringer Strip (2 mm) 
        </p>
    </div>
</div>

<?php 
    foreach ($dichroic90 as $key => $value) {
        $value->display('stringer strip');
    }
?>

<hr class="my-2">

<div class="row">
    <div class="col">
        <h5>Narrow 1/8" Strips (3 mm) strip</h5>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('narrow strip');
    }
?>

<hr class="my-2">

<div class="row">
    <div class="col">
        <h5>The Wider 1/4" Strip (6mm)</h5>
    </div>
</div>

<?php
    foreach ($dichroic90 as $key => $value) {
        $value->display('wide strip');
    }
?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';