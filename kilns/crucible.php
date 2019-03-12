<?php 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Crucible kilns - Sundance Art Glass Center';
 $description='Crucible Kilns for glassblowers, flameworkers and lampworkers';
 $keywords='Paragon,paragon,Crucible Kilns,Crucible,crucible,Glass Beadmaking Kilns,glass beadmaking kilns,Sundance Glass';
 $location='crucible-kiln.php';
 include_once(ROOT .'/mobile/includes/header.php'); 
?>

<!-- content -->

<div class="row">
    <div class="col">
        <h1>Crucible Kilns</h1>
        <p>These electric glass blowing furnaces are designed to heat glass crucibles, without interruption, for days on end. Now available with an optional heavy duty components to handle the higher temperatures associated with  Borosilicate Glass! </p>
    </div>
</div>
<?php require_once ROOT.'/mobile/includes/secondaryNavs/kilns.php';?>
<div class="row">
    <div class="col">
        <a href="../supplies/crucibles.php">
            <figure class="figure">
                <img src="../supplies/images/crucibles-glass-metal-sm.jpg" class="figure-img img-fluid rounded" alt="white crucibles in a pair of rows" title="To crucibles">
                <figcaption class="figure-caption text-sm-center">Click here to see our crucibles</figcaption>
            </figure>
        </a>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/kilns.php';
    foreach ($kilns as $key => $value) {
        $value->display('crucible');
    }
?>

<!-- end of content -->

<?php require_once ROOT.'/mobile/includes/rightcol.php';