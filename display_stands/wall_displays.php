<?php 
    define( 'ROOT',$_SERVER[ 'DOCUMENT_ROOT']); 
    $title='Walls Display Stands for Fusing and Slumping Projects - Sundance Art Glass Center';
    $description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California'; 
    $keywords='Glass Fusing, Display Stands, Fused and Slumped Projects, wall mounted display stand,Sundanceglass,Northern California';
    $abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California'; 
    $location='fused-slumped-glass-display-stand-wall.php';
    include_once(ROOT . '/mobile/includes/header.php');
    require_once DBROOT.'stands.php';
?>
<!-- START content -->
<?php include_once(ROOT .'/mobile/includes/secondaryNavs/stands.php'); ?>
<br>
<div class="row">
    <div class="col">
        <h1><strong>Walls Display Stands</strong></h1><br>
    </div>
</div>

<hr class="my-4">

<?php
    foreach ($stands as $key => $value) {
        $value->display('wall');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>
            Project Holder and Wall Hanger. Holes in the stand allow for mounting.
        </h5>
        <img src="images/908601-2sm.jpg" alt="the stand" class="img-fluid clickImg my-2" data-bigImg="images/908601-2lg.JPG" data-title="Project display and Wall Hanger">
    </div>
</div>

<?php
    foreach ($stands as $key => $value) {
        $value->display('proj');
    }
?>

<hr class="my-4">

<?php
    foreach ($stands as $key => $value) {
        $value->display('holder');
    }
?>

<br>
<hr>

<!-- END content -->

<?php 
$fusing=true;
include_once(ROOT .'/mobile/includes/rightcol.php'); ?>