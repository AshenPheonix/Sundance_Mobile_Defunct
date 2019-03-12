<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Lampworking Kits Flameworking Kits Glass Beadmaking Kits - Sundance Art Glass';
    $description='Your source for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center!';
    $keywords='Flameworking Kits Lampworking Kits Beadmaking Kits Sundance Art Glass  Flameworking Lampworking Glass  Beadmaking Sundance Art Glass Paradise California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='Flameworking Kits Lampworking Kits Beadmaking Kits Sundance Art Glass  Flameworking Lampworking Glass  Beadmaking Sundance Art Glass Paradise California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $location='glass-pipe-kits.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Tool and Torch Kits for Pipework
        </h1>
        <h4>
            for Glassblowers, Lampworkers, Flameworkers, and Glass Beadmakers.
        </h4>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/kits.php';
    foreach ($kits as $key => $value) {
        $value->display('hard');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';