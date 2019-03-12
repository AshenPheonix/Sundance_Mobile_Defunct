<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Fusing and Stained Glass Cutting Tools - Sundance Art Glass';
    $description='Your source for Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Sundance Art Glass!';
    $keywords='Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Glass Cutters Glass Cutter Glass Saw Glass Saws Diamond Bits Diamond Drill Bits Glass Pliers Glass Grinders';
    $abstract='Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting - Glass Cutters Glass Cutter Glass Saw Glass Saws Diamond Bits Diamond Drill Bits Glass Pliers Glass Grinders';
    $location='handtoolsmain.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Galss Cutting Tools
        </h1>
        <h3>
            For Glass Fusing and Stained Glass Artists
        </h3>
    </div>
</div>
<div class="row">
    <div class="col fakeBtn pt-2">
        <a href="cutters.php">
            <figure class="figure">
                <img src="images/glass-cutter-toyol-pistol-grip-1sm.jpg" class="figure-img img-fluid rounded" alt="A blue handled Cutter">
                <figcaption class="figure-caption text-sm-center">Glass Cutters</figcaption>
            </figure>
        </a>
    </div>
    <div class="col fakeBtn pt-2">
        <a href="pliers.php">
            <figure class="figure">
                <img src="images/pliersgroup.gif" class="figure-img img-fluid rounded" alt="5 sets of pliers">
                <figcaption class="figure-caption text-sm-centered">Glass Pliers</figcaption>
            </figure>
        </a>
    </div>
</div>
<div class="row">
    <div class="col fakeBtn pt-2">
        <a href="drill_bits.php">
            <figure class="figure">
                <img src="images/pak.jpg" class="figure-img img-fluid rounded" alt="5 drill bits in decreasing diameter">
                <figcaption class="figure-caption text-sm-center">Diamond Bits</figcaption>
            </figure>
        </a>
    </div>
    <?php /*
    <div class="col fakeBtn pt-2">
        <a href="electric_tools.php">
            <figure class="figure">
                <img src="images/taurussm.jpg" class="figure-img img-fluid rounded" alt="An orange, table saw style cutter">
                <figcaption class="figure-caption text-sm-center">Electric Tools</figcaption>
            </figure>
        </a>
    </div>
    */?>
</div>

<?php 
require_once ROOT.'/mobile/includes/rightcol.php';