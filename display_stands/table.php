<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Table Displays for Glass Fusing and Slumping - Sundance Art Glass Center';
$description='Best Selection of Display Stands for Glass Fusing, Etching, Ceramics, Pictures or any Art Pieces';
$keywords='Table Displays,2 piece adjustable,Table Diplay Stands,Cross Hatch,Wooden Box,Tile Holder,Fused,Slumped,Fused and Slumped,Glass,Coe 90,Fused Glass,Art Glass Display Stands,Sundanceglass,Northern California,';
$abstract='At Sundance Art Glass you will find Glass Fusing Table Display Stands Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90 tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more. With all the glass art studio equipment you need';
$location='fused-slumped-glass-display-stands-table.php';
include_once(ROOT .'/mobile/includes/header.php'); 

require_once DBROOT.'stands.php';
?> &nbsp;&nbsp;
<!-- START content -->
<?php include_once(ROOT .'/mobile/includes/secondaryNavs/stands.php'); ?>
<div class="row mt-4">
    <div class="col">
        <h1>Table Displays</h1>
        <br>
        <h2>for Fused and Slumped Glass Projects</h2>
    </div>
</div>

<?php 
    foreach ($stands as $key => $value) {
        $value->display('crosshatch');
    }
?>
<hr class="my-4">
<?php 

foreach ($stands as $key => $value) {
    $value->display('table');
}
?>
<div class="row">
    <div class="col-12 justify-content-center">
        <img alt="display stand for glass fusing table and drop out" src="images/95501-sm1.jpg" class="img-fluid mx-auto" style="float: left">
        &nbsp;These Inexpensive wire display stands hold your fused and slumped art glass. These stands can also be used
        to display &quot;drop out&quot; projects.
        <br>
    </div>
</div>


<?php foreach ($stands as $value) {
    #$value->display();
}; ?>
<figure class="figure">
    <img src="images/display-stand-13-in-12-stand-sm.jpg" class="figure-img img-fluid rounded" alt="Display Piece">
    <figcaption class="figure-caption text-sm-center">A 13" Fused and Slumped Project in the #9087713 stand</figcaption>
</figure>
<hr class="my-4">
<?php 
    foreach ($stands as $key => $value) {
        $value->display('sec');
    }
?>
<br>
<?php include ROOT.'/mobile/display_stands/marbles.php';?>
<!-- end content -->
<?php 
    $fusing=true;
    include_once(ROOT .'/mobile/includes/rightcol.php');