<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Diamond Grinding Bits for Stained Glass - Sundance Art Glass Center';
$description='Diamond Glass Grinding Bits for Glass - Sundance Art Glass Center - Inland Glastar';
$keywords='Diamond Glass Grinding Bits for Glass Sundance Art Glass Center Inland Glastar';
$abstract='Diamond Glass Grinding Bits for Glass Sundance Art Glass Center Inland Glastar';
$location='grindaccess.php';
require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Drill and Grinder Bits
        </h1>
        <img src="images/grinder-bits.gif" alt="3 diamond grinder bits of varying sizes" class="img-fluid">
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            These bits fit on all Inland grinders and Glastar grinders unless otherwise specified
        </h3>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/drillBits.php';

    foreach ($Bits as $key => $value) {
        $value->display('grinder');
    }
?>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';