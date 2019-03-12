<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Pliers and Tweezers for Lampworkers at Great Prices';
$description='Your source for plier and tweezer tools for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking';
$keywords='Flameworking,Lampworking,Glass Beadmaking,Glassblowing,Tweezer,squashing,mashers,leaf,plier,hot glass';
$abstract='Flameworking Lampworking Glass Beadmaking,Glassblowing. Your source for the tweezers and pliers you need in your art glass studio';
$location='lampworking-pliers-r.php';
include_once(ROOT .'/mobile/includes/header.php'); ?>

<div class="row">
    <div class="col">
        <h1>
            Tools for Flameworkers
        </h1>
        <h6 class="font-weight-bold">
        Sundance - Original manufacturer of tools.<br>Since 1975
        </h6>
        <h4>
            Tweezers, Masher Pliers and Squashing Pliers
        </h4>
        <p>
            Tweezers have many uses for the flame worker.<br>
            Use them to set in Millifori chips, pull contamination out of the molten glass, hold hot glass, etc.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <h4>Tweezer Jacks</h4>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/pliers.php';
foreach ($pliers as $key => $value) {
    $value->display('jack');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Tweezers</h4>
        <p>
            All stainless steel
        </p>
    </div>
</div>

<?php 
foreach ($pliers as $key => $value) {
    $value->display('tweezers');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Squashing and Mashing Pliers</h4>
    </div>
</div>

<?php 
foreach ($pliers as $key => $value) {
    $value->display('grabbing tongs');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Tweezers Mashers</h4>
        <p>
            All Stainless Steel. Process and tool described in the book "Beads of Glass"
        </p>
    </div>
</div>

<?php 
    foreach ($pliers as $key => $value) {
        $value->display('tweezer masher');
        $value->display('micro masher');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Flame Workers Pliers</h4>
    </div>
</div>
<?php 
foreach ($pliers as $key => $value) {
    $value->display('flameworkers');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Squashing and Mashing Pliers</h4>
    </div>
</div>

<?php 
foreach ($pliers as $key => $value) {
    $value->display('squashing');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Button Making Pliers</h4>
    </div>
</div>

<?php 
foreach ($pliers as $key => $value) {
    $value->display('button maker');
}
?>

<br>
<hr>
<br>
<?php 
foreach ($pliers as $key => $value) {
    $value->display('rod holder');
}
?>
<hr>
<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';
?>