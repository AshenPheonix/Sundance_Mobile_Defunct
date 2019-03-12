<?php 
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Momka Glass Rods Borosilicate Color Rod - Sundance Art Glass';
  $description='Momka Colored Glass Rods. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
  $keywords='Flameworking Glass Lampworking Glass Pyrex Glass Borosilcate Glass Glass Tubing  Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
  $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
  $location='borosilicate-glass-rod-coe33-random.php';
  include_once(ROOT .'/mobile/includes/header.php'); 
?>
<style type="text/css">
    @import url('./includes/css/basic.css');
    td.beige {
        padding: 10px;
    }
</style>


    <!-- START content -->
    <div class="row">
        <div class="col-12">
            <h1 class="x-large"><strong>COE33 Glass Rod Shorts</strong></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <img alt="borosilicate glass rod" src="/mobile/rods_tubes/hard/images/momkas/glass-rod-random-assortment-momkas-med.jpg" class="img-fluid mx-auto"><br>
        </div>
    </div>

    <a name="anchorshorts"></a>

    <?php
        require_once ROOT.'/mobile/includes/dbs/boroAssort.php';
        foreach ($assortments as $key => $value) {
            $value->display('shorts');
        }
    ?>


<!-- END content -->
<?php include_once(ROOT .'/mobile/includes/rightcol.php');  ?>