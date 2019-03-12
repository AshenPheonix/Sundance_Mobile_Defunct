<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Pliers for Stained Glass Leaded Glass Beveled Glass Mosaic Glass Etched Glass - Sundance Art Glass Center';
    $description='Glass Pliers for Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Sundance Art Glass Center!';
    $keywords='Glass Pliers for Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Sundance Art Glass Center Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County';
    $abstract='Glass Pliers for Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Sundance Art Glass Center Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County';
    $location='sgpliers.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Glass Workers Pliers
        </h1>
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/2203-glass-combo-plier.jpg" alt="Combo Pliers" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <h3>
            Combo Pliers
        </h3>
        <p>
            Excellent tool for breaking and grozing even small pieces of glass. Curved jaw with grozing teeth.
        </p>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/pliers.php';
    foreach ($pliers as $key => $value) {
        $value->display('combo');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Running Pliers
        </h3>
        <p>
            These pliers are used to continue a scored straight line on a piece of glass, in place of picking up a large piece of glass with your hands to make a run.
        </p>
    </div>
</div>

<?php 
    foreach ($pliers as $key => $value) {
        $value->display('running');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Breaking Pliers
        </h3>
    </div>
</div>

<?php 
    foreach ($pliers as $key => $value) {
        $value->display('breaking');
    }
?>

<div class="row">
    <div class="col">
        <h3>
            Lead Dykes
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/lead-dyke.jpg" alt="Lead Dykes" class="img-fluid"></div>
</div>

<?php 
    foreach ($pliers as $key => $value) {
        $value->display('lead dyke');
    }
?>

<br>
<hr>
<br>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';