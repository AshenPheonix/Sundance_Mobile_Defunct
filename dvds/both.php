<?php 
	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	$title='Flameworking Videos Lampworking Videos Glass Beadmaking Videos- Sundance Art Glass Center';
	$description='Videos and DVDs for Glass Beadmaking, Lampworking and Flameworking. Including Essential Marbles, Marbles on DVD, How to make Glass Murrinis by Crystal Myths.';
	$keywords='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass Mosaics Sandblasting Etching- Sundance Art Glass Center! Northern California International West Coast United States California American West Coast Paradise International Shipping Great rates retail wholesale best deal california over seas country good cost shipping free Northern California CA US Express Mail World Wide FedEx ';
    $abstract='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing Stained Glass Mosaics Sandblasting Etching- Sundance Art Glass Center! Northern California International West Coast United States California American West Coast Paradise International Shipping Great rates retail wholesale best deal california over seas country good cost shipping free Northern California CA US Express Mail World Wide FedEx ';
    $location='bookWEB/video-torch.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'dvds.php';
?>

<div class="row">
    <div class="col">
        <h1>DVDs</h1>
        <h4>
            for Glass Beadmaking, Lampworking, Marblemaking, and Flameworking
        </h4>
    </div>
</div>

<?php 
    foreach ($dvds as $key => $value) {
        $value->display('both');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';