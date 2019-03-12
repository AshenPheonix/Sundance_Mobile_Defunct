<?php 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Glass Beadmaking and lampworking Tools';
 $description='Your source for tools for artists making glass beads';
 $keywords='Flameworking,Lampworking,Glass Beadmaking,Sundance Glass,Bead Mandrels,Graphite Paddles,Graphite Shapers,Mandrel Release,Brians Multi-Tool,Marvering,Reamers,Vermiculite,diamond dressing tools,bead hole scrapers';
 $abstract='Flameworking Lampworking Glass Beadmaking Sundance Art Glass, All the tools you could want, mandrels reamers,mandrel release, graphite paddles, marvering plates, brians multi tool, roller shapers';
 $location='glass-bead-tools-r.php';
 require_once(ROOT .'/mobile/includes/header.php');
?>

<div class="row">
    <div class="col">
        <h1 id="mandrel">
            Tools for Glass Beadmakers
        </h1>
        <h5 class="font-weight-bold">
            Sundance Glass - Since 1975<br>
            Manufacturer of Quality Tools
        </h5>
        <h3>
            Mandrels
        </h3>
        <img src="images/mandrels.jpg" alt="Mandrels" class="img-fluid">
        <p>
            For making glass beads. Tired of bend mandrels?
        </p>
        <p>
            Our Mandrels are high quality and are made to resist bending. Compare, take one of our mandrels and a competitors - Bend them together until the competitors stay bent while ours returns straight. Made with high temperature metal that has low heat transfer, keeping your fingers cool while the hot end is red hot. Make a glass bead with a hole by wrapping molten glass around these rods. Remember putting almost anything in a 4000°F flame for a few seconds will melt this and almost any metal. You never need to put a flame directly on the bare mandrel.
        </p>
        <p>
            Watch out, many of our competitors sell 10" long mandrels. Ours are a full 12" length which makes a big difference for comfort and rotating!
        </p>
        <p class="red font-weight-bold">
            Made in the USA
        </p>
    </div>
</div>

<?php 
    require_once DBROOT.'mandrels.php';
    foreach ($mandrels as $key => $value) {
        $value->display('bead');
    }
?>
<div class="row">
    <div class="col">
        <p class="font-weight-bold">* When the rods are cut, there is a small burr on each end<br>Most people can use them with the burr, but you can easily sand or grind the burr off.</p>
    </div>
</div>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Button Mandrels</h4>
    </div>
</div>

<?php
    foreach ($mandrels as $key => $value) {
        $value->display('button');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Large Diameter Tube Mandrels</h4>
        <img src="images/mandrel-tube.jpg" alt="3 tube mandrels" class="img-fluid">
        <p class="font-weight-bold red">Made in the USA</p>
        <p class="font-weight-bold">Sold Individually, Price each is per mandrel</p>
        <p class='text-left'>
            Stainless steel tubes used for large hole glass bead and glassblowing. If used for bead mandrels, plug the end so hot air/steam can't travel back through the tube toward your hand. Use mandrel release or you can use a little bit of ceramic fiber. Heavy walls are used instead of solid rods to make a lighter weight mandrel. Made with low heat conductive metal which helps keep the heat from traveling up to your hand.
        </p>
    </div>
</div>

<?php 
    foreach ($mandrels as $key => $value) {
        $value->display('tube');
    }
?>

<hr class="my-3">

<?php
    require_once ROOT.'/mobile/includes/dbs/shaper.php';
    foreach ($shapers as $key => $value) {
        $value->display('mini mandrel');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Special Mandrel to Make Hollow Beads</h4>
        <img src="images/mandrel-hollow-glass-bead-small.jpg" alt="" class="img-fluid">
        <p>
            Build a wall on each side of the hole. Put a roof between the walls leaving a sealed space between the walls. Blow through the hollow tube mandrel to puff out the hollow bead. Unlike those made by others Our mandrels are sealed on the end and have 2 holes instead of just one
        </p>
    </div>
</div>

<?php 
    foreach ($mandrels as $key => $value) {
        $value->display('hollow');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Mandrel Holders</h4>
        <img src="images/mandrel-holder.jpg" alt="Mandrel holder holding a mandrel" class="img-fluid">
        <p>
           Mandrels are hard to hold, turn and tire your hand. This light weight mandrel holder has the perfect diameter handle for easy turning. Completely adjustable: use any length mandrel, the long mandrels simply slide through the handle. Our special collets assure mandrels don't rock once the tool is tightened. A quick turn of the pin vice will free the mandrel for fast replacement. 
        </p>
    </div>
</div>

<?php 
foreach ($mandrels as $key => $value) {
    $value->display('holder');
}
?>

<br>
<hr id="release">
<br>

<div class="row">
    <div class="col">
        <h4 class="font-weight-bold">Mandrel Release</h4>
        <img src="images/mrelease.jpg" alt="Mandrel Releases in containers" class="img-fluid">
        <p>
            Coat metal mandrels with this release to prevent the molten glass from sticking to the metal mandrels. We believe the best bead release made is Blue Coat! If you are not sure which to get - get the Blue Coat! <a href="mandrelRelease.php">Click here to learn how to use mandrel release.</a>
        </p>
    </div>
</div>

<?php 
    foreach ($mandrels as $key => $value) {
        $value->display('release');
    }
?>
<div class="row">
    <div class="col">
        <ul class="text-left">
            <li class="disc">
                <strong>Regular -</strong> Easiest to remove the bead from the mandrel when cooled but then also easiest to detach when working in the flame.
            </li>
            <li class="disc">
                <strong>Medium -</strong> Medium holding power and medium removability.
            </li>
            <li class="disc">
                <strong>Tough -</strong> When you really need to be sure the release does not detach from the mandrel when working large beads or boro beads or beads that take a long time to make - But than this is the hardest to remove the bead from the mandrel when cooled.
            </li>
            <li class="disc">
                <strong>Flame Dry -</strong> Dries immediately in the flame. No need to pre-dry. Similar to regular holding power.
            </li>
        </ul>
    </div>
</div>

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
        <h4>
            Pin Vice Sets
        </h4>
        <p>
            A pin vice has the jaws of a drill. The tip will clamp down on a small rod like a drill bit. Set of three different sizes. Useful in your studio; holds mandrels, tungsten picks, drill bits, your bead hole cleaning tools, etc.
        </p>
        <p>
            Smallest holds up to a 1/16" shaft<br>
            Second size holds up to 5/64"
        </p>
    </div>
</div>

<?php 
require_once DBROOT.'various.php';
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
            Brian's Multi-Tool
        </h4>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('multi tool');
}
?>

<br>
<hr>
<br>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('roller');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col"><img src="images/bead-shaping-tool-2011-sm.jpg" alt="marble shaping pads" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <h4>Bead and Marble Shaping Tool</h4>
        <p>
            A tool to help shape beads and marbles. Mandrel grooves help prevent the mandrel release from breaking off the mandrel while making beads. The grooves do not interfere when making marbles. Three different sizes per paddle. Pictured twice to show the top bottom. On one side is a half sphere to make round beads and marbles. The other side are half cylinders to help shape cylindrical beads. Made from polished carbon graphite. Made in the USA Lifetime Sundance Warranty. 
        </p>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('marble maker');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>
            Lentil Making Tools
        </h4>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('lentil');
}
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Bead Cleaning Sets - Diamond
        </h3>
        <p>
            Diamond Glass Bead Cleaning and Reaming Tool Sets
            Two longer tools ream and clean the inside of the hole.
            Two shorter tools dress the bead holes.
        </p>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/drillBits.php';
    foreach ($Bits as $key => $value) {
        $value->display('cleaners');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Bead Cleaning Kit
        </h3>
        <p>
            Set of 4 Diamond Glass Bead Cleaning and Reaming Tools with one universal pin vice. With storage tube. The pieces can also be put in your electric drill or similar tool for faster cleaning. Shaft diameter is .115 inches (3mm).
        </p>
        <p>
            Two longer tools ream and clean inside the hole.<br>Two shorter tools dress the bead holes.
        </p>
    </div>
</div>

<?php 
    foreach ($Bits as $key => $value) {
        $value->display('cleaner set');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Bead Cleaning Set - Wire
        </h3>
        <img src="/mobile/supplies/fusing/images/cleantool.jpg" alt="Black handled tools" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p class="text-left">
        TOP - Bead Cleaning Wire No.2106 - Spiral wire on a wooden handle. Push this wire back and forth through the hole in your bead to remove mandrel release powder.<br>
MIDDLE - Bead Hole Scraper No. 2107 - Small particles of abrasive tungsten carbide are fused on a wire and the wire is mounted on a wooden handle. This tool is more aggressive and will actually remove small amounts of glass.<br>
BOTTOM - Bead Cleaning Brush No. 2105 - This double ended brush, each a different style, cleans and removes mandrel release from the bead hole. Remember always clean your beads under water to prevent dust.
        </p>
    </div>
</div>

<?php 
    foreach ($Bits as $key => $value) {
        $value->display('wire cleaner');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Diamond End Bits
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="/mobile/supplies/fusing/images/db8p.jpg" alt="8 shiny bits in a bluish looking container" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="/mobile/supplies/fusing/images/db20p.jpg" alt="20 shiny bits in a bluish looking container" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            These diamond coated bits are the perfect accessory to the engraver or any Dremel tool. Can be used to engrave glass or drill holes in glass. Also popular for dressing the holes on a glass bead. 3/16" shaft.
        </p>
    </div>
</div>

<?php
    foreach ($Bits as $key => $value) {
        $value->display('dremel set');
    }
?>
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
    require_once ROOT.'/mobile/includes/rightcol.php';