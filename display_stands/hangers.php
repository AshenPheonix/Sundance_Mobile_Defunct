<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Hanging Display Stands for Glass Fusing - Sundance Art Glass Center';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing Display Stands,Art Glass Display Stands,Drop Through,Drop Throughs,Slumping,Fusing,Fused and Slumped Projects,Art Glass Center California, Bullseye COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
require_once ROOT .'/mobile/includes/header.php'; 
?>

<?php include_once ROOT .'/mobile/includes/secondaryNavs/stands.php'; ?>

<div class="row">
    <div class="col">
        <h1>Hanger Display Stands</h1>
        <h5>For Fused and Slumped Glass Projects</h5>
        <img src="images/hanger-stands-header.JPG" alt="Hangers Stands" class="img-fluid">
        <p>
            Note: Measurements presume project will hang between all bars, not the true maximum width.
        </p>
    </div>
</div>
<div class="row">
    <div class="col"><img src="images/measurements-sm.jpg" alt="How these are measured" class="img-fluid clickImg" data-bigimg="images/measurements-lg.jpg" data-title="How These are Measured"></div>
</div>
<div class="row" style="width:100%;margin-bottom:1em;">
    <div class="col" style="postion:relative;width:25%;height:95px;">
        <img src="images/display-stand-hanger.jpg" alt="Hanger Stand" class="slip">
        <img src="images/display-stand-hanger-rainbow-line.jpg" alt="Hanger Stand" class="slip" style="display:none;">
    </div>
    <div class="col" style="postion:relative;width:25%;">
        <img src="images/display-stand-hanger-2.jpg" alt="Hanger Stand" class="slip">
        <img src="images/display-stand-hanger-blk.jpg" alt="Hanger Stand" class="slip" style="display:none;">
    </div>
    <div class="col" style="postion:relative;width:25%;">
        <img src="images/display-stand-hanger-4.jpg" alt="Hanger Stand" class="slip">
        <img src="images/display-stand-hanger-rainbow-circle.jpg" alt="Hanger Stand" class="slip" style="display:none;">
    </div>
    <div class="col" style="postion:relative;width:25%;">
        <img src="images/display-stand-hanger-5.jpg" alt="Hanger Stand" class="slip">
        <img src="images/display-stand-hanger-glass.jpg" alt="Hanger Stand" class="slip" style="display:none;">
    </div>
</div>

<?php 
    require_once DBROOT.'stands.php';
    foreach ($stands as $key => $value) {
        $value->display('hanger');
    }
?>
<hr class="my-4">
<div class="row">
    <div class="col">
        <h4>You are going to need some hole saws to use these stands, so pick one up while you are at it!</h4>
    </div>
</div>

<?php
    require_once DBROOT.'drillBits.php';
    foreach ($Bits as $key => $value) {
        $value->display('holesaw set');
        $value->display('dremel bit');
    }
?>

<div class="row mt-4">
    <div class="col">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/rSqk1cjyWDM?feature=player_detailpage" frameborder="0" class="embed-responsive-item"></iframe>
        </div>
    </div>
</div>

<script>
        $(document).ready(function(){
            setInterval(function(){
                $('.slip').fadeToggle(1000);
            }, 4000);
        });
</script>

<?php require_once ROOT.'/mobile/includes/rightcol.php';