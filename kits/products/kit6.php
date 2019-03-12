<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Lamp working kits, flame working kits, glass bead making kits - Sundance Art Glass';
    $description='Kits for lamp workers and glass beadmakers. Great gift idea for artists. Your source for artists working glass with a torch - flame working lamp working glass bead making - Sundance Art Glass Center!';
    $keywords='Kits 6,Kit6,flame working,lamp working kits,glass blowing kit,glass sculptures,glass bead making,Sundance Art Glass,Northern California,glass blowing tools,flame working pipes kits,equipment lamp working,equipment glass blowing,west coast,international,';
    $abstract='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- flame working lamp working glass bead making glass sculpturing fusing firing- Sundance Art Glass Center! At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='kitslamp6.php';
    require_once(ROOT.'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Kit #6 for Lampworkers and Glass Beadmakers</h1>
        <p class="font-weight-bold">
            Our Low Price: <span class="red">$497.90</span>
        </p>
        <p class="border border-dark">
            Kit #6 with Minor Burner Torch<br>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&bid=f8274f1486f3a8052288f0346ff2958a"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
        </p>
    </div>
</div>

<div class="row border">
    <div class="col">
        <p>
            Use this kit when you want to be assured that you have the most complete set of tools for the professional lamp worker and bead maker who wants to make glass beads, buttons and small sculptures.
        </p>
        <p class="text-left">
            <img src="/mobile/torches/images/regulator-2-stage-oxygen-thumb.jpg" alt="Oxygen Regulator" class="float-left">
                If your planning to use an Oxygen Concentrator with your kit or upgrade the hose length, you can adjust these items in your shopping cart. <strong>If purchasing the Kit #6 with a Minor Burner, Without an Oxygen Regulator</strong> be sure to click the appropriate button below.
        </p>
        <strong class="h4">The following Items are included in Kit #6</strong>
        <ul class="text-left">
            <li>
                Minor Bench Burner by <strong>Nortel - only $139 when purchased with this kit</strong>. Any other torch can be substituted below
            </li>
            <li>
                Oxygen Regulator
            </li>
            <li>
                Propane Regulator
            </li>
            <li>
                Twin Hose Set
            </li>
            <li>
                Spark Lighter
            </li>
            <li>
                Didymium Safety Glasses - High Quality enhanced didymium Lens!
            </li>
            <li>
                Mandrel Release
            </li>
            <li>
                Plastic Stacking Storage Boxes
            </li>
            <li>
                15707 Tweezers Masher - 8 Inch
            </li>
            <li>
                Graphite Marble Mold - 2 hole
            </li>
            <li>
                Glass Rod Support
            </li>
            <li>
                Glass Rod Cutter
            </li>
            <li>
                8 piece set of Diamond Dressing Bits
            </li>
            <li>
                Set of Tweezers
            </li>
            <li>
                Set of 4 Shaping Tools
            </li>
            <li>
                Set of Tweezers
            </li>
            <li>
                Tungsten Pick with handle
            </li>
            <li>
                3 Piece set of Bead Hole Cleaning tools
            </li>
        </ul>
        <p>
            Just connect this torch to a BBQ type propane tank (you may have one in your back yard) and to an oxygen tank. Most people rent this oxygen tank at their local welding supply store. It might typically cost $5.00 per month to rent the tank and about $15.00 to $35.00 each time you have it refilled. It costs about $1.00 per hour to run a a torch like the Minor Burner torch.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/kit6-lampwork-glass-beadmaking-medcroped.jpg" class="figure-img img-fluid rounded" alt="The Kit laid out">
            <figcaption class="figure-caption text-xs-center">Actual Products may differ from those pictured</figcaption>
        </figure>
    </div>
    <div class="w-100"></div>
    <div class="col p-2" style="border:dashed 4px #990000">
        <div class="h4">Free with Purchase of this kit</div>
        <ul class="text-left">
            <li>Mandrels - 1 dozen .062 small diameter</li>
            <li>Selection of Moretti Millefiori Glass Chips</li>
            <li>Sample of Luster Powders</li>
            <li>Sample of Enamel Powder</li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            You can substitute the torch in this kit. Substitute any torch we sell.<br><br>Want to buy this kit and not the torch? Or remove items?<br><span class="red">All kits are adjustable whin the shopping cart</span><br>*exception is the Kit#6 with the Minor Burner
        </p>
    </div>
</div>


<?php 
    require_once ROOT.'/mobile/includes/dbs/kitSpecs.php';
    foreach ($specs as $key => $value) {
        $value->display('6');
    }
?>

<hr class="my-3">

<?php 
    require_once ROOT.'/mobile/kits/products/scripts/reccommended.php';
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';