<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Fusing Chemicals - Sundance Art Glass';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='glass,fusing,slumping,supplies,Morretti soft glass,kiln wash,thin fire,decals,overglaze,super spray,squeege oil,bending glaze,back magic,wash-away,fusing glueglass gluebubble maker';
    $abstract='Glass Fusing Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90 , kiln wash separator, kiln shelves, Thin Fire shelf paper primer, Spray "A" Overglaze prevent divitrification, copper foil, super spray lead-free safe dichroic irridized, squeegee oil enamels fine frits adhesive, bending glaze, Back Magic back side fused pieces, Wash-Away black glass opalescent, metal mold coasting release, GlasTac Glue, Gold Silver Palladium Leaf Foil Sheets, copper luster powders';
    $location='fgchemicalsr.php';
    require_once ROOT .'/mobile/includes/header.php';
?>

<div class="row">
    <div class="col">
        <h1>
            Supplies for Glass Fusing and Slumping
        </h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Kiln Wash Separator
        </p>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/seperatorbulsm.JPG" alt="Kiln Separator" class="img-fluid">
    </div>
    
    <div class="col flex-text">
        A High temperature, low fluxing clay and aluminum mixture in a special formulation. Contains suspension agents, that when used correctly, will be the best insurance that your fused work will not stick to the shelf. Coat kiln shelves and all surfaces that would come in contact with glass.
    </div>
    <div class="w-100"></div>
    <div class="col">
        <a href="../other/KilnWashHowTo.php">How to aplly Kiln Wash separator/shelf primer</a>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/fusingChemicals.php';
    foreach ($fusingChem as $key => $value) {
        $value->display('separator');
    }
?>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Bullseye ThinFire Shelf Paper
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            Wow! No more coating kiln shelves. Simply use scissors to cut out a size to fit your kiln shelf, place glass and fire! This "Thin Fire" shelf pape leaves a smoother finish on the back of the glass than shelf primer! One time use. It has the annoying feature of rising up off the shelf in the uncovered areas and sometimes curling back on to your glass piece. Weigh down the uncovered areas with kiln posts or scrap glass. 
        </p>
    </div>
</div>

<?php 
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
            <div class="col">
                <a href="fiber.php">Click Here</a> for even more fiber paper and blanket productions.
            </div>
        </div>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col flex-image">
        <img src="images/applying-overglaze.jpg" alt="Man applying overglaze to a plate" class="img-fluid">
    </div>
    <div class="col flex-image">
        <h3 class="font-weight-bold">Super Spray Over Glaze</h3>
        <p>
            A clear, low-melting glass suspended in a spray medium. This material is applied to fused projects when they are ready for firing to prevent devitrification on the glass surface.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('overspray');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Etching Cream
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/etchingcream.jpg" alt="etching cream container" class="img-fluid">
    </div>
    <div class="col flex-image">
        <p>
            A fast acting specially formulated glass etching compound that lets you create permanently etched designs on windows, mirrors and household glassware. You can create your own custom glass etching stencil or use a pre made stencil. This unique glass etching product allows anyone to personalize and decorate glass or mirrors in minutes with no previous experience. Try it, you will love it. Not intended for use by children. Will NOT etch Pyrex (COE33). NOT recommended for etching large solid areas of glass.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('etching');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Squeegee Oil
        </h3>
        <div class="w-100"></div>
        <div class="col p">
            This is a medium used to apply enamels and fine frits, acting as an adhesive that burns off at a relatively low temperature. Apply oil to selective areas, sprinkle frit or powder on the glass, the frit sticks just to the oil areas, the rest of the frit is easily removed leaving frit in your design pattern.
        </div>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('squeegee oil');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Bending Glaze
        </h3>
        <div class="w-100"></div>
        <div class="col p">
            Matures at 1100°. Can be brushed or sprayed onto surface of glass or on ground edges to prevent Devitrification during the slumping cycle. Ideal for single layer bending. NOT safe for food bearing surfaces!
        </div>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('bending glaze');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Wash Away
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="images/wash-a-way-sm.jpg" alt="wash away" class="img-fluid">
    </div>
    <div class="col">
        <p>
            Easily removes baked-on shelf primer (kiln wash) from the bottom of fused projects, like black glass, hot colors and opalescent glass. Apply without dilution to the baked-on primer and then lightly scrub with a plastic scouring pad. This should remove even the most stubbornly adhered primer.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('wash away');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>Fusing Gel</h3>
        <p class="font-weight-bold">
            GlasTac Gel
        </p>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/glastacgel.jpeg" alt="2 blue filled plastic containers" class="img-fluid">
    </div>
    <div class="col flex-image">
        <p>
            Meet the new go-to holding agent: GlasTac Gel. This thicker version of our regular GlasTac has a “tackier" feel but still burns out cleanly
        </p>
        <ul class="text-left">
            <li class="disc">
                Holds its applied shape well (even appliable with a paintbrush)
            </li>
            <li class="disc">
                Make calligraphic powder lines easy
            </li>
            <li class="disc">
                Stays sticky longer so you have more time to work it before it dries
            </li>
            <li class="disc">
                Tacks sheet to sheet with great holding power so you can move projects sooner
            </li>
            <li class="disc">
                Great for children's projects
            </li>
            <li class="disc">
                Easy to use 4 fl oz (120 ml) applicator bottle or a large 32 fl oz refil bottle (950 ml).
            </li>
        </ul>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('fusing gel');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Fusing Glass
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/glastac.jpg" alt="a pair of red fluid containers" class="img-fluid">
    </div>
    <div class="col flex-image">
        <p class="font-weight-bold">GasTac Glue</p>
        <p>
            Lightly tacks glass pieces in place prior to firing
        </p>
        <ul class="text-left">
            <li class="disc">
                Slow drying and pliability allows readjustments as you work
            </li>
            <li class="disc">
                Ogranic colourant lets you see where you've put it on clear glass but burns out cleanly when fired
            </li>
            <li class="disc">
                Use sparingly
            </li>
            <li class="disc">
                Water Soluble
            </li>
            <li class="disc">
                Easy to use 4 fl oz (120 ml) applicator bottle or a large refill 32 fl oz bottle (950 ml)
            </li>
        </ul>
    </div>
</div>

<?php
    foreach ($fusingChem as $key => $value) {
        $value->display('fusing glue');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Glass Glue
        </h3>
        <p>
            <span class="font-weight-bold">E6000 Glue</span> - Great glue for glass to glass. Also Great for gluing metal jewelry findings to fused glass, like barrettes or pins. Has a rubber consistency. Feels and works like Clear RTV (silicone rubber).
        </p>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/fusingTools.php';
    foreach ($fusingTools as $key => $value) {
        $value->display('glue');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            CMC
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="images/cmc-demonstrated-sundanceglass.jpg" alt="man using CMC on a white and blue art piece" class="img-fluid">
    </div>
    <div class="col">
        <p>
        Used for many purposes. A common usage is to apply a thick line of powdered frit mixed with CMC using an applicator bottle. This is described in Richard LaLonde's Book by his name. Safe - it's a food additive. You can see it on the list of tortilla ingredients.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('cmc');
    }
?>

<div class="row">
    <div class="col">
        <p class="text-left">Directions</p>
        <ul class="text-left">
            <li class="disc">
                Don't forget to always wear a mask when working with any powder
            </li>
            <li class="disc">
                Add 1 tablespoon CMC to 2 cups distilled water (a little bit goes a long way)
            </li>
            <li class="disc">
                Stir and let sit overnight
            </li>
            <li class="disc">
                To create a "glass clay" add powdered glass to the mixture
            </li>
            <li class="disc">
                Fill a squeeze bottle with this "glass clay"
            </li>
            <li class="disc">
                Now squeeze out a line . You can effectively "draw with it"
            </li>
            <li class="disc">
                If it's too thick and won't come out of the bottle easily just add some water
            </li>
            <li class="disc">
                Too thin the drawn line will flow and flatten and won't hold its shape or height - just add more powder
            </li>
        </ul>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">Bubble Maker</h3>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('bubble');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Gold, Silver, and Copper
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/gold-leaf-heavy.jpg" alt="hand holding gold leaf square" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <p>
            Very thin squares of the real thing. Don't be fooled with the commonly available inexpensive leaf that is only colored aluminum. Place small pieces of this metal on your graphite marvering pad and roll your bead across it to pick it up. Be careful, the direct flame will melt away the metal. Cover the metal with dabs of transparent glass. <span class="bg-info text-light">Unless otherwise mentioned, approximate Sheet Sizes are 3-3/8" to 3-3/4" Square.</span>
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('leaf');
    }
?>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            *Watch out - Some of our competitors are selling this item simply as "FOIL". This is actually Heavy Leaf or Thin Foil<br>
            <br>**Average weight of 65g/1000 leaves<br><br>
            The 16522 leaf is used in the pictures. You can see that a single layer shows well. This glass was fully fused to 1500°F.
        </p>
    </div>
</div>
<div class="row">
    <div class="col"><img src="images/gold-foil.jpg" alt="hand holding clear glass with gold foil on and in it" class="img-fluid"></div>
    <div class="col"><img src="images/gold-foil-2.jpg" alt="pieces of gold on glass" class="img-fluid"></div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Copper Foil Sheet
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/copper-foil-sheet.jpg" alt="a roll of copper foil" class="img-fluid">
    </div>
    <div class="col flex-image">
        <p class="text-left">
          Copper foil is a great way to incorporate designs inside of fused glass projects. This thin foil is easy to cut with scissors. Seems to work with wide variety of glass. Does not work on top of the glass - must be placed between layers of glass. Copper will darken due to oxidation.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingChem as $key => $value) {
        $value->display('foil');
    }
?>

<?php require_once ROOT.'/mobile/includes/rightcol.php';