<?php 
define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
$title="Fiber Products for Glass Fusing - Sundance Art Glass Center";
$description="Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!";
$keywords="ThinFire,Fiber Shelf Paper,Fiber Board,Thin Fire Kiln Shelf Wash,Glass Fusing,Bullseye,Fuse Equipment,Kiln work,kiln wash,fiber blanket";
$abstract="At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!";
$location='kilnmatr.php';
require_once(ROOT ."/mobile/includes/header.php"); 
?>

<div class="row">
    <div class="col">
        <h1>
            Fiber Products
        </h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3>
            ThinFire Fiber Shelf Paper
        </h3>
        <p>
        There are two popular ways to protect your kiln shelf when fusing: Kiln Wash and this, ThinFire Paper. Use this ThinFire (or actually any of the fiber paper listed below) between the kiln shelf and your glass so the glass will not stick to the shelf. This saves you from coating the kiln shelf with kiln wash. ThinFire also creates the smoothest backing possible. ThinFire Kiln Shelf Paper is a ceramic-based paper specially formulated for glass fusing. The ThinFire is not reusable. <a href="thinfire.php">Click here to learn more about ThinFire</a>
        </p>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/fusingChemicals.php';

    foreach ($fusingChem as $key => $value) {
        if($value->id=='TF20'){
            $value->display('thinfire sheet',true,4);
        }else {
            $value->display('thinfire sheet');
        }
    }
?>

<br>
<hr>
<br>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('thinfire roll');
    }
?>

<br>
<hr>
<br>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('thinfire full roll');
    }
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold bg-warning">
            **Note: The 41 Inch roll nees to be shipped in a long box - often in it's own box if ordered with other items. This will incur additional shipping charges
        </p>
        <div class="row">
            <div class="col">
                <img src="images/fiber.jpg" alt="rolled fiber blanket" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <h3>
            FIber Paper
        </h3>
        <p>
        These papers become stiff with an organic ridigizer. During the first firing, you will see it turn black and then white again as the binder burns off. There will be some smoke and smell. The paper will be less rigid if you choose to reuse the paper. Fiber paper can be used to make holes in glass by cutting strips and placing between layers. After firing the glass, expose the hole by poking out the paper. Also used to make design indentations on the back of fused pieces by placing design strips under the glass before fusing.
        </p>
    </div>
</div>
<?php 
    require_once ROOT.'/mobile/includes/dbs/fiber.php';

    foreach ($Fibers as $key => $value) {
        $value->display('fiber paper');
        if ($key%2==1) {
            echo "<br>";
        }
    }
?>
<hr>
<br>
<div class="row">
    <div class="col"><img src="images/fiber-blanket.jpg" alt="Man holding a large bat of fiber blanket" class="img-fluid"></div>
</div>
<div class="row">
    <div class="col">
        <h3>
            Fiber Blanket
        </h3>
        <p>
            Used to make custom molds. To harden the fiber when making a slumping mold, soak the blanket with rigidizer. Drape the wet blanket over any form and dry. When dry, coat with kiln wash and use as a slumping mold. Also used for kiln and furnace insulation.
        </p>
    </div>
</div>

<?php 
    foreach ($Fibers as $key => $value) {
        $value->display('fiber blanket');
    }
?>

<div class="row">
    <div class="col">
        <p>
            *Density - how many pounds per cubic foot (Kgs per square meter) the denser the blanket, the 
            more the insulating value but less flexible than a less dense blanket (less dense may be better for 
            you if make molds) It is interesting to note that most of insulating value of fiber products is in the 
            NUMBER of fibers. This is why we list the density of the fiber products. If you took a piece of fiber 
            and squashed it thinner, it would have close to the same insulating value.
        </p>
    </div>
</div>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Rigidizer
        </h3>
        <p>
            Fiber Mold Hardener. Soak fiber paper or fiber blanket with this rigidizer and dry. Fiber will harden. <br>
            <span class="font-weight-bold">This item can not be sent out of the USA. </span>
        </p>
    </div>
</div>

<?php 
    foreach ($Fibers as $key => $value) {
        $value->display('rigidizer');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Fiber Blanket
        </h3>
        <img src="images/fiber-sheets.jpg" alt="woman placing a series of beads between two of these blankets" class="img-fluid">
        <p>
            For glass beads, sculptures, ornaments, vessels or any other projects. These help cool your glass slowly to help prevent thermal shocking or breaking.
        </p>
        <p>
            To use, place your hot glass between these pads as soon as you are done with it on the torch. The pads hold the heat to slow down the cooling rate. The timing for placing the glass between the fiber is critical. If you place them to soon, when the glass surface is still molten, and fibers may stick to the glass. If you wait to long, the glass may cool to much and break. Experiment with the timing.
        </p>
    </div>
</div>

<?php 
    foreach ($Fibers as $key => $value) {
        $value->display('fiber sheet');
    }
?>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';