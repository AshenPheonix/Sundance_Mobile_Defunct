<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Display Stands for Glass- Sundance Art Glass Center';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash GLASS FUSING Sundance  Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing,Glass Slumping,Display Stands,Fused and Slumped Projects,Art Glass Center California,Bullseye,Round Display Stands,U Style, COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
require_once ROOT .'/mobile/includes/header.php'; 
require_once DBROOT.'dropStands.php';
?>

<?php include_once ROOT .'/mobile/includes/secondaryNavs/stands.php'; ?>

<div class="root">
    <div class="col">
        <img src="images/drop-through-0sm.jpg" alt="Drop Stands" class="img-fluid mx-auto">
    </div>
    <div class="col">
        <h2 class="text-center">Fused and Slumped Glass</h2>
        <h1 class="text-center">Display Stands</h1>
        <p class="text-center">
            For Drop Throughs and Project Support Stands
        </p>
    </div>
</div>



<?php foreach ($stands as $value) {
    $value->display('drop');
}; ?>
    <figure class="figure">
        <img src="images/display-stand-13-in-12-stand-sm.jpg" class="figure-img img-fluid rounded" alt="Display Piece">
        <figcaption class="figure-caption text-sm-center">A 13" Fused and Slumped Project in the #908821 stand</figcaption>
    </figure>
<?php
    include_once ROOT.'/mobile/includes/rightcol.php'
?>