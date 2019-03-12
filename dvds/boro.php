<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Flameworking Videos Lampworking Videos Glass Beadmaking Videos - Sundance Art Glass';
    $description='Videos and DVDs for Glass Beadmaking, Glassblowing, Lampworking, Marbles, and Flameworking. Your source for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center!';
    $keywords='Flameworking Videos Lampworking Videos Beadmaking Videos Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='Videos, DVDs, Northern California International West Coast United States California American West Coast Paradise International Shipping Great rates retail wholesale best deal california over seas country good cost shipping free Northern California CA US Express Mail World Wide FedEx ';
    $location='bookWEB/video-borosilicate.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'dvds.php';
?>

<div class="row">
    <div class="col">
        <h1>DVD's</h1>
        <h4>
            For Glass Bead Making, Glassblowing, Lampworking, Marbles, and Flameworking  Videos
        </h4>
    </div>
</div>

<?php
    foreach ($dvds as $key => $value) {
        $value->display('hard');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';