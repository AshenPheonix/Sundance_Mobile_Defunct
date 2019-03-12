<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Slumping Molds for Glass Fusing - Sundance Art Glass Center';
$description='Huge selection of different sized molds for hot glass slumping and forming making plates, dishes, bowls, and special shapes with fused prjects or plain sheet glass. International shipping.';
$keywords='kiln dams,kiln bricks,Brix,Slumping Forms,Fusing,Sundance Art Glass Center,California';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$location='slumping-fusing-forms-molds-dams.php';
require_once(ROOT .'/mobile/includes/header.php'); ?>

<div class="row">
    <div class="col">
        <h1>Slumping Dams</h1>
        <h4>for Glass Fusing and Slumping</h4>
        <img src="images/brix-damz.jpg" alt="Some Dams in use on a project" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Kiln Brix</h4>
        <p>
            A heavier more dense brick usually used to support layups.
        </p>
        <p>
            Check out our great selection and variety of fusing and slumping dams and bricks (Brix) for slumping in a kiln! All different sizes and lengths. Make a beautiful square platter for a gift or a special dish for yourself! Check out how you can use these for fun drop out molds. Prop up the custom made drop set up to make a deeper dish by raising up the dams with kiln furniture.
        </p>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/molds.php';
    foreach ($molds as $key => $value) {
        $value->display('brix');
    }
?>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Kiln Dams</h4>
        <p>
            Dams feature crip edges for excellent contact with the kiln shelf.<br>Buy $50 worth of mixed Dams and qualify for a <span class="red font-weight-bold">10% discount</span>. Use code FUSEDAM1 when you check out.
        </p>
    </div>
</div>
<?php
    foreach ($molds as $key => $value) {
        $value->display('dam');
    }
?>
<hr class="my-3">

<div class="row">
    <div class="col-6">
        <img src="images/dam-slumping-fusing-12-6-sm.jpg" alt="dams on a shelf" class="img-fluid">
    </div>
    <div class="col-6">
        <img src="images/dam-slumping-fusing-12-4-sm.jpg" alt="dams on a shelf" class="img-fluid">
    </div>
    <div class="col">
        <img src="images/dam-slumping-fusing-12-5-sm.jpg" alt="dams on a shelf" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>Stack kiln furniture to make a deeper drop through.</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/dam-slumping-fusing-12-7-sm.jpg" class="figure-img img-fluid rounded" alt="set as jewelry troughs">
            <figcaption class="figure-caption text-xs-center">Lay up Jewelry Troughs</figcaption>
        </figure>
    </div>
</div>

<div class="row">
    <div class="col-4"><img src="images/dam-slumping-fusing-12-1-sm.jpg" alt="dams set up" class="img-fluid"></div>
    <div class="col-4"><img src="images/dam-slumping-fusing-12-2-sm.jpg" alt="dams set up" class="img-fluid"></div>
    <div class="col-4"><img src="images/dam-slumping-fusing-12-3-sm.jpg" alt="dams set up" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <p>WOW - Size of drop is adjustable</p>
    </div>
</div>

<hr class="my-3">

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Stainless Steel Dam Rings</h4>
    </div>
    <div class="w-100"></div>
    <div class="col-6">
        <img src="images/frit-plate-holdsm.jpg" alt="Frit Rings" class="img-fluid">
    </div>
    <div class="col-6">
        <img src="images/fritplatesm.jpg" alt="Frit Rings on a purple surface" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Frit Plate Holder and Container, Stainless Steel Casting Ring, and Pot Melt Holder and Container 
        </p>
        <p class="font-weight-bold">You can use these for three things:</p>
        <p>
            <span class="font-weight-bold">1)</span>Use this stainless steel ring to hold your frit, crushed glass, to shape desired when firing. You can also bend to your custom shape. This flexible band can be bent by hand to any shape, round, squares with rounded corners, ovals, etc. Coat with separator and sprinkle frit, strips or pattern bar pieces, and then fire. Click here for more detailed instructions.
        </p>
        <p>
            Special expansion slots allow metal to expand, preventing glass form breaking when cooling. This expansion slot is critical. Our competitors' don't have these. I don't see how it could work without one. This is needed because as the glass and metal cools, the metal will shrink more than the glass and will grab the glass so tight it actually distorts the metal band and you can't get the band off.
        </p>
        <p>
            After firing the edge will be flat but not smooth. It may need an extra firing to fire polish the edge. Reusable.
        </p>
        <p>
            <span class="font-weight-bold">2)</span> Use as a slumping mold. Place a glass sheet on the top edge and heat. The glass will slump through the hole. Stop it before it hits the shelf or continue heating and let the glass touch the shelf to make a flat spot. Glass needs to be a bit bigger than the metal ring. Practice and Experiment on this one for sure
        </p>
        <p>
            <span class="font-weight-bold">3)</span> Use to contain the flowing glass when pot melting.
        </p>
        <p>
            Width of metal banding is changing. We are slowly changing from the wider 2" to a ¾". The 2" is overkill and the ¾" will be easier to bend or form to a shape.
        </p>
    </div>
</div>

<?php
    foreach ($molds as $key => $value) {
        $value->display('ring');
    }
?>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';
?>