<?php 
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Asian Colored Rod - Sundance Art Glass';
  $description='Asian Chinese Colored Glass Rod COE33 Borosilicate Glass';
  $keywords='Asian Transparent Colored Rod,Flameworking Glass,Lampworking Glass,Pyrex Glass,Borosilcate Glass,Glass Tubing,Sundance Art Glass,Flameworking,Lampworking,Glass,Beadmaking,';
  $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
  $location='asian-boro-color-rod.php';
  require_once(ROOT .'/mobile/includes/header.php');
  $hardGlass=true;
  require_once DBROOT.'asianBoroColor.php';
?>

<!-- START content -->
<div class="row">
    <div class="col-12">
        <h1>COE33 - Asian Transparent Colored Rod</h1>
        <br> Asian color rod is consistent and very easy to use. It performs well and is a great deal.<br>
        <br> Compatible with: Pyrex, Kimble, Duran, Momka, Northstar, Glass Alchemy, and<br> all other COE33 Borosilicate Hard Glass.<br>
        <br>
    </div>
</div>
        
<div class="row">
    <div class="col-12 text-center">
        <h1>Asian Borosilicate Rod</h1>
    </div>
</div>

<?php
    foreach ($asianBoroColor as $key => $value) {
        $value->display('rod');
    }
?>

<hr>
<!-- END content -->
<?php require_once(ROOT .'/mobile/includes/rightcol.php');  ?>