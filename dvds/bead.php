<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Flameworking Videos Lampworking Videos Glass Beadmaking Videos- Sundance Art Glass Center';
    $description='Videos and DVDs for Glass beadmaking, Lampworking, and Flameworking. Including Essential Beadmaking VHS or DVD, Essential Boro Beadmaking Using Borosilicate (pyrex) Hard Glass DVD or VHS, Glass Bead Making, Paperweight Techniques, Crystal Myths, The Best Bead Show Exhibitors, and Animal Beads and Glass Candies by Crystal Myths.';
    $keywords='Flameworking Videos Lampworking Videos Beadmaking Videos Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='Glass Art Videos: Northern California International West Coast United States California American West Coast Paradise International Shipping Great rates retail wholesale best deal california over seas country good cost shipping free Northern California CA US Express Mail World Wide FedEx ';
    $location='bookWEB/video-dvd-glass-lampworking-glassblowing.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Soft Glass DVD's</h1>
        <h4>For Glass Beadmaking, Lampworking, and Flameworking</h4>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/dvds.php';
    foreach ($dvds as $key => $value) {
        $value->display('soft');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';