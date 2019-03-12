<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Bullseye Glass Confetti - Sundance Art Glass';
$description='Bullseye Glass Confetti - Sundance Art Glass';
$keywords='Bullseye Frit Glass Confetti Shards - Sundance Art Glass';
$abstract='Bullseye Frit Glass Confetti Shards - Sundance Art Glass';
$location='bullseye-glass-confetti.php';
include_once(ROOT .'/mobile/includes/header.php'); ?>
<?php include_once ROOT.'/mobile/includes/secondaryNavs/bullseye.php';?>

<div class="row">
    <div class="col">
        <h1>Bullseye Glass Confetti</h1>
    </div>
</div>

<br>

<div class="row">
    <div class="col">
        <div class="3">All COE 90 for Glass Fusing, Casting, Glassblowing, and Glass Bead Making. Smelts for sign makers.</div>
    </div>
</div>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        Opal Solid Colors
    </div>
</div>

<?php 
    include_once DBROOT.'confetti.php';
foreach($confetti as $value){
    $value->display('solid');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        Transparent Colors
    </div>
</div>
<br>

<?php foreach($confetti as $value){
    $value->display('transparent');
}
?>

<?php include_once ROOT.'/mobile/includes/rightcol.php';