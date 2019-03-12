<?php 
$_SESSION['optout']=true;
header('Location:http://www.sundanceglass.com/dichroic-glass-main.php');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Glass Fusing Bullseye Glass- Sundance Art Glass Center';
$description='Your California West Coast, North America, and International source for dichroic glass- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
$keywords='Glass Fusing Bullseye Kiln work Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
# $location='';
include_once(ROOT .'/mobile/includes/header.php'); ?>

<?php include_once ROOT.'/mobile/includes/secondaryNavs/dichroSheet.php';?>

<div class="row">
    <div class="col">
        <h1>Dichroic Sheet Glass - COE90</h1><br>
        <h5>on thin clear and black glass</h5>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col">
        <figure class="figure">
            <img src="../images/dichroic-glass-4x4-med.jpg" alt="Some sheets of Dichro" class="img-fluid clickImg figure-img rounded" data-bigImg="../images/dichroic-glass-4x4-lg.jpg" data-title="Some Dichro Sheets">
            <figcaption class="figure-caption text-sm-center">This COE 90 glass works with Bullseye Glass and Uroboros 90 glass</figcaption>
        </figure>
    </div>
</div>

<?php 
include_once ROOT.'/mobile/dichroic/scripts/sheetGlass.php';
include_once ROOT.'/mobile/dichroic/scripts/store.php';
foreach($flat as $product){
    $product->display();
}
?>

<br>
<hr>
<br>

We have the glass below, however we have not gotten pictures of them yet. Available coated on clear clear and black glass.<br>
All are on Thin(1.6mm) Bullseye Glass.
<br>
<?php foreach($flatLimbo as $value)$value->display();
?>

<br>
<hr>
<br>
<?php include_once ROOT.'/mobile/includes/rightcol.php';