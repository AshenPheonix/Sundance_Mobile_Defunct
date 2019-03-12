<?php  
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Tools for Flameworking Lampworking Glass Beadmaking Supplies and Information - Sundance Art Glass';
 $description='We manufacture and sell a wide variety of tools for all your glassblowing, lampworking, flameworking,fusing,Tungsten rods, marvering pads, pliers, mandrels,stump shapers,cutters,paddles,molds,international shipping.';
 $keywords='tools for flameworking,tools for lampworking,stump shaper,torches,tungsten rods,molten tools utensils,pin vice wooden handle,mandrels, diamond bits,drill bits,files,rod high temperature,steel rake,bowl pushers,shaping sets,wax carving,art clay silver pmc, rod cutter ,graphite,brass,paddles,pads,micro graphite carbon,shaping,shaper basic shaper,sharon sculpting tool,core vessel napkin wrapper,richard prevost,marvering steel,work bench,table,frit,enamel,gold leaf foil,warming tray, paperweight mold, grooved metal marvering plate, glass shears, millipress make murrini flowers designs,bracelet rings,vermiculite crockpot fiber kiln,beads,optic boxes storage, napkin rings';
 $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from stump shaper glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
 $location='lgtoolweb.php';
 require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Tools for Flameworkers       
        </h1>
        <h4 class='font-weight-bold'>
            Sundance - Original Manufacturer of Tools Since 1975.
        </h4>
        <p>
            Tools for Glassworking, Glassblowing and Glass Beadmaking
        </p>
    </div>
</div>

<div class="row" id="tungsten_rods">
    <div class="col">
        <h3>
            Tunsten Rods with Handle
        </h3>
        <img src="images/tungsten-handles-2.jpg" alt="" class="img-fluid">
        <p>
            <span class="font-weight-bold">Tungsten</span> is an amazing metal tolerant of high temperature, which unlike stainless steel, is less likely to melt or burn up in the flame and is less likely to stick to the glass. An ideal metal to manipulate glass by dragging, raking, feathering, or swirling the surface. Can be used to make air bubbles, poke out unwanted air bubbles or poke holes through the glass. Available as a straight sharpened rod or with the end bent for easier raking. This is one of the few tools you can actually put into the torch flame for certain techniques like making holes in glass.
        </p>
        <p>
            Buy $100 or more tungsten rods, combine any of these sizes tungsten rods and take an additional 10% off your purchase of Tungsten rods, even off any volume discounts - Use Coupon Code TUNG100
        </p>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <h4>Why Use Shorter 60mm Rod</h4>
        <p>
            Your hand is working closer to the tip which gives you more control but then can be uncomfortable working that close to the heat. It depends on which technique you are using the tungsten for.
        </p>
    </div>
    <div class="col-6">
        <h4>
            Why Use Longer 120mm Rod
        </h4>
        <p>
            Your hand is more comfortable working farther away from the heat but when your hand is farther away you have less control. You would eventually want both lengths in your tool box.
        </p>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Metal Handles
        </h4>
    </div>
</div>

<?php
    require_once DBROOT.'various.php';
    foreach ($various as $key => $value) {
        $value->display('metal handle');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Wooden Handle
        </h4>
    </div>
</div>

<?php
    foreach ($various as $key => $value) {
        $value->display('wood handle');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Tungsten Rods
        </h4>
        <p>
            Replacement Tungsten Metal Probes, just the shapened metal probe, no handle.
        </p>
        <p class="smaller">
            buy $100 or more tungsten rods, combine any of these sizes tungsten rods and take an additional 10% off your purchase of Tungsten rods, even off any volume discounts - Use Coupon Code TUNG100
        </p>
    </div>
</div>

<?php 
    foreach ($various as $key => $value) {
        $value->display('probe');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Two Pointed Ends
        </h4>
    </div>
</div>

<?php 
    foreach ($various as $key => $value) {
        $value->display('dual probe');
    }
?>

<div class="row">
    <div class="col">
        <p>
        <span class="font-weight-bold">Why two ends pointed?</span> - if one end gets damaged or dull - turn it around in the pin vice for a new end. Works only where the tungsten can be removed from handle like pin vices.
        </p>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Pin Vice Sets
        </h3>
        <p>
            A pin vice has the jaws of a drill. The tip will clamp down on a small rod like a drill bit. Set of three different sizes. Useful in your studio; holds mandrels, tungsten picks, drill bits, your bead hole cleaning tools, etc.
        </p>
    </div>
</div>

<?php 
    foreach ($various as $key => $value) {
        $value->display('pin vise set');
    }
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>
            Steel Rake
        </h4>
        <p>
            Handy all stainless steel tool. One side is a pick (or probe) the other is a rake. An ideal tool to manipulate by dragging, raking, feathering, or swirling the surface of the glass. Can be used to make air bubbles or poke holes through the glass. A tungsten pick and rake listed above is a better material.
        </p>
    </div>
</div>

<?php 
    foreach ($various as $key => $value) {
        $value->display('steel rake');
    }
?>

<div class="row">
    <div class="col">
        <h3>
            Shaping Tool Sets
        </h3>
        <p>
            Sets of stainless steel shaping tools. Press the ends into the hot glass to shape or make impressions. Use the sharp ends to rake or feather your glass. Sharpen some ends to make even more sharp knife sharp impressions.
        </p>
        <p>
            These can also be used as a mini spatula set to move small amounts of powders and frits. Also great for carving wax for glass casting, with the wax burn out method. And a great set of tools for Pate de Verre work. Can also be used for PMC and Art Clay Silver. Approximately 6" long.
        </p>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/shaper.php';
foreach ($shapers as $key => $value) {
    $value->display('set');
}
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>Rod Cutter</h3>
        <img src="images/rodcutterlg.jpg" alt="Two Rod Cutters" class="img-fluid">
        <p>
            These vinyl coated rod cutters are great for cutting glass rods, from thin to 1/2" thick. They achieve this by concentrating force in a specific location to break the rod! 
        </p>
        <p>
            Wheel style cutters have round cutting wheels that can be turned as they get dull. The advantage of this over the green handled ones is that it cuts more clean, which doesn't really matter unless you are cutting murrini chips or stringer. A must if you will be cutting murrini chips or stringers as these are least likely to break rods.
        </p>
        <p>
            Green handled cutters are carbide tipped. 7½" long. Advantage of this over the wheeled cutter is that it is 'quicker" to use, grab and cut without much aiming between the cutting blades. Please keep in mind these are more susceptible to crushing rods or stringers due to the lack of precision. 
        </p>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/cutters.php';
foreach ($Cutters as $key => $value) {
    $value->display('nipper');
}
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Sculpting Tool
        </h4>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('sculpting');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Core Vessel and Napkin Wrapper</h4>
        <img src="images/coremed.gif" alt="Two circular shapers" class="img-fluid">
        <p>
            <strong>Core Vessel</strong> - LEFT - Makes Core vessels as described in Richard Prevost's video "Glass Core Vessels" (not out of publication). 1" diameter 2" long sliced in half with handle.
        </p>
        <p>
            <strong>Napkin Wrapper</strong> -RIGHT - Wrap a band of hot glass around this 1" round graphite rod to make a quick and simple napkin ring. Make your own customized tool by carving and sanding the end of the rod. Graphite is 2" long and 1" in diameter.
        </p>
    </div>
</div>

<?php 
    foreach ($shapers as $key => $value) {
        $value->display('circular');
        $value->display('mini mandrel');
    }
?>
<br>
<hr>
<br>

<?php
    foreach ($shapers as $key => $value) {
        $value->display('raised marvering');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>
            Graphite Marvering Pads
        </h4>
        <img src="images/graphite-slab-sm.jpg" alt="Graphite marvering Pad" class="img-fluid">
        <p>
           Place on top of your work bench. Use to marver, sprinkle frit, enamel, gold leaf, etc and roll your bead across it. Pads can be easily cut with any saw or sanded with sandpaper. All graphite needs to be occasionally resurfaced with a 600 grit sandpaper. One side sanded. Thickness is under 1/2" except where noted. The Steel Plate has a factory Finish, not sanded. <span class="red font-weight-bold">Made in the USA by Sundance</span>
        </p>
        <p>
            Below pads are Flat both sides and sanded smooth one side.
        </p>
    </div>
</div>

<?php 

foreach ($shapers as $key => $value) {
    $value->display('marver');
}
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>
            Metal Grooved Marvering Plate
        </h4>
        <img src="images/marvergrovedmlg.gif" alt="metal marvering pad" class="img-fluid">
        <p>
            Roll your glass or press your glass into this metal surface to make a pattern. Roll it twice across the surface each at a different angle to get a pineapple pattern. <span class="red font-weight-bold">Made in the USA by Sundance.</span>
        </p>
    </div>
</div>

<?php 
    foreach ($shapers as $key => $value) {
        $value->display('metal');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>
            Glass Shears
        </h4>
        <img src="images/glass-blowing-shears-2lg.jpg" alt="Two Glass Shears" class="img-fluid">
        <p>
            Tool used to cut glass when it is molten. Cut excess glass off the lip of a vessel, or when removing glass from a crucible kiln, cut the trailing edge of the dripping molten glass with these shears. The Gold colored handle pair is not only pretty but the blades are better machined and have a smoother action.
        </p>
    </div>
</div>

<?php 
    foreach ($various as $key => $value) {
        $value->display('shears');
    }
?>

<br>
<hr>
<br>

<a href="mandrels.php">
<div class="row fakeBtn pt-2">
    <div class="col">
            <h4>Bracelet Mandrels and Ring Mandrels</h4>
        <div class="row">
            <div class="col-3 flex-image">
                <img src="images/bracelet-mandrel-end.jpg" alt="mandrel ends" class="img-fluid">
            </div>
            <div class="col-9 flex-image">
                <img src="images/bracelet-mandrel-1606.jpg" alt="Side view of two mandrels" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col"><img src="images/ring-mandrel.jpg" alt="A ring Mandrel" class="img-fluid"></div>
        </div>
        <div class="row">
            <div class="col-4 flex-image"><img src="images/glass-bracelet-mandrel-1lg.jpg" alt="a ring on a mandrel" class="img-fluid"></div>
            <div class="col-8 flex-image"><img src="images/ring-finger-mandrel-2.jpg" alt="a pair of rings on a mandrel" class="img-fluid"></div>
        </div>
    </div>
</div>
</a>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Cooling your Glass</h4>
        <p>
            There are three ways to help you cool your glass slowing to help prevent thermal shocking or breaking.
        </p>
        <ul>
            <li class="disc">Kiln</li>
            <li class="disc">Crockpot full of hot vermiculite</li>
            <li class="disc">Two Fiber Pads</li>
        </ul>
        <p>
            To use, place your hot glass between these pads as soon as you are done with it on the torch. The pads hold the heat to slow down the cooling rate. The timing for placing the glass between the fiber is critical. If you place them to soon, when the glass surface is still molten, fibers may stick to the glass. If you wait to long, the glass may cool to much and the risk of breaking is greater. Experiment with the timing. Fiber supplied 2 sizes. Remember only a kiln or flame annealing can anneal glass.
        </p>
        <div class="row">
            <div class="col"><img src="images/vermiculite.jpg" alt="Crock Pot full of brown pellets and mandrels sticking up" class="img-fluid"></div>
            <div class="col"><img src="images/fiber-blanket.jpg" alt="some fiber blankets with 4 bead mandrels sticking out" class="img-fluid"></div>
        </div>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/fiber.php';
foreach ($Fibers as $key => $value) {
    $value->display('fiber sheet');
    $value->display('vermiculite');
}
?>

<div class="row">
    <div class="col">
        <h4>
            About Our Vermiculite!
        </h4>
        <p>
            Our vermiculite is superior to the common vermiculite usually available. Ours is very large and coarse, as opposed to the fine vermiculite often sold by our competitors.
        </p>
        <h4>
            The Advantages of Ours
        </h4>
        <ul class="text-left">
            <li class="disc">Coarse Grains Create large dead air spaces which insulate better</li>
            <li class="disc">Less airborne fine particles of vermiculite.</li>
            <li class="disc">Ours is certified Asbestos Free</li>
            <li class="disc">Over time the particles break down to smaller and smaller sizes. Because you are starting with the extra large size, your vermiculite lasts longer.</li>
        </ul>
    </div>
</div>
<br>
<hr>
<br>
<?php 
    include_once ROOT.'/mobile/includes/fritBowl.php';
?>


<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';