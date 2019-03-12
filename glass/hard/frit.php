<?php 
  define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
  $title="Northstar Glass Frit - Borosilicate Glass - Sundance Art Glass Center";
  $description="Northstar Glass Frit - Borosilicate Glass - Sundance Art Glass Center";
  $keywords="Northstar Glass Frit - Borosilicate Glass - Sundance Art Glass Center";
  $abstract="Northstar Glass Frit - Borosilicate Glass - Sundance Art Glass Center";
  $location='northstar-glass-frit.php';
  include_once(ROOT ."/mobile/includes/header.php"); 
?>
<style type="text/css">
    @import url("/mobile/includes/css/basic.css");
</style>
<!-- START content -->
<div class="row">
    <div class="col-12 text-center">
        <h1 clas s="xx-large"><strong>Northstar Glass Frit - COE 33</strong></h1>

    </div>
</div>
<hr>
<div class="row beige">
    <div class="col-3">
        <img alt="/rods_tubes/hard/images/northstar glass" class="margin_bottom_10 margin_right_10 img-fluid float-left" src="/mobile/rods_tubes/hard/images/northstar/Northstar_logo_color-WEB.jpg">
    </div>
    <div class="col-9 text-left">
        <p class="alignLeft large">
            Compatible with Pyrex, Kimble, Glass Alchemy, Duran, Momka, Borostix and Sunsilica.
        </p>
        <ul class="alignLeft margin_left_20">
            <li>&nbsp;</li>
            <li><a href="/mobile/rods_tubes/hard/images/northstarglass.php">Click here to learn all about Northstar Glass</a></li>
            <li>Frits (crushed glass) and powders are available in the listed colors.</li>
            <li>&nbsp;</li>
            <li><a href="/mobile/rods_tubes/hard/index.php">Click here</a> for compatible glass</li>
            <li><a href="/mobile/rods_tubes/hard/images/northstarglass.php">Click here</a> for tips and tricks on using Northstar frit</li>
        </ul>

    </div>

</div>
<hr style="margin: 20px auto;">

<div class="row">
    <div class="text=center col-12">
        <span class="x-large"><strong>North Star Frit</strong></span>
        <br>
        <span class="small">All colors sold in 4 oz. portions</span>
    </div>
</div>
<hr>

<?php 
    require_once ROOT.'/mobile/includes/dbs/boroFrit.php';
    foreach ($boroFrit as $key => $value) {
        $value->display('nsFrit');
    }
?>

<hr class="my-5">

   <?php 
            include ROOT.'/mobile/includes/fritBowl.php';
   ?>
<hr>
<!-- END content -->

<?php include_once(ROOT ."/mobile/includes/rightcol.php"); ?>