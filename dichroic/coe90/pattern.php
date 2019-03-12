<?php 
$_SESSION['optout']=true;
header('Location:http://www.sundanceglass.com/dichroic-glass-main.php');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Dichroic Art Glass - Sundance Art Glass Center - Dichro';
$description='Dichroic Art Glass Your California West Coast, North America, and International source for artists working glass with a torch and a kiln - Dicro Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
$keywords='Glass Fusing Bullseye Kiln work Dicro Dichroic art hot warm glass COE 90 system 96 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
include_once(ROOT .'/mobile/includes/header.php'); 
include_once ROOT.'/mobile/includes/secondaryNavs/dichroSheet.php';
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Patterned Sheet Glass COE90</h1>
        <h3>On thin Clear and Black Glass</h3>
    </div>
</div>
<div class="row">
    <div class="col"><img src="../images/dichroic-glass-4x4-med.jpg" alt="Dichroic Sheets" class="img-fluid"></div>
</div>
<div class="row">
    <div class="col">
        This COE90 glass works with Bullseye Glass and Uroboros 90 Glass.
    </div>
</div>
<br>
<?php 
    include_once ROOT.'/mobile/dichroic/scripts/store.php';
    foreach ($pattern as $key => $value) {
        $value->display();
    }
?>


<?php include_once ROOT.'/mobile/includes/rightcol.php';