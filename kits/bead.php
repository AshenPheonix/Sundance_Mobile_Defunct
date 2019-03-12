<?php 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Lamp working Kits Flame working Kits Glass Bead making Kits - Sundance Art Glass';
 $description='Kits for lamp workers, flame workers, glass beadmakers and other hot glass artists. For beginners to advanced students and professionals. These kits provide almost everything you need to begin designing and making your own beautiful glass beads and sculptures. We ship overseas.';
 $keywords='beads making,bead making kit,beads,glass bead making,glass bead making kit,making glass beads,making marbles,making sculpture,glass pipes,hot head torch,soft,hard,moretti effetre,  tools equipment,any country lightweight international kit,gas hoses,gas regulators,Professional,Beginner,Advanced';
 $abstract='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center! At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
 $location='kitslamp.php';
 require_once(ROOT .'/mobile/includes/header.php'); 
 ?>

<div class="row">
    <div class="col">
        <h1>
            Tool and Torch Kits
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">
            Sale Kits
        </h4>   
    </div>
</div>
<?php 
    require_once ROOT. '/mobile/includes/dbs/kits.php';

    foreach ($kits as $key => $value) {
        $value->display('sale');
    }
?>
<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">
            Soft Glass Kits
        </h4>
    </div>
</div>

<?php 
    foreach ($kits as $key => $value) {
        $value->display('soft');
    }
?>

 <?php
 require_once ROOT.'/mobile/includes/rightcol.php';