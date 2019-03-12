<?php  
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Tools for Shaping Glass';
  $description='Your source for artists working glass with a torch - Shaping tools of all type, marble molds, paddles, marvering pads!';
  $keywords='Flameworking,Lampworking,Glass Beadmaking,Sundance Art Glass,Bead Mandrels,Graphite Paddles,Graphite Shapers,Graphite,Marvering,Core Vessel,Napkin,Lentil,Marble,Roller shaper,Mandrel Release,Brians Multi-Tool,Stump Shaper';
  $abstract='Tools for Shaping Glass Flameworking Lampworking Glass Beadmaking Sundance Art Glass';
  $location='lampworking-glassblowing-shaping-tools.php';
  require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Shaping Tools
        </h1>
        <h4>
            for Glass Beadmakers, Glassblowers, and Lampworkers
        </h4>
        <p>
            Sundance Glass - Since 1975<br>
            Manufacture of Quality Tools
        </p>
    </div>
</div>

<div class="row" id="paddle">
    <div class="col">
        <img src="images/paddle.jpg" alt="4 paddles" class="img-fluid">
        <h3>
            Paddles
        </h3>
        <p>
            These hand held paddles are used to shape molten glass. The extra long handles are rubber coated for comfort. Remember, do not put this or any tool directly into the flame, work and shape your glass out of the flame. Watch Out - Some other suppliers out there on the internet are selling paddles that are grainy material, not sanded, weak handles. Ours are made from fine grained material that is then further sanded to ensure as smooth a surface as possible. Our handles are also very sturdy, and comfortable.
        </p>
        <p>
            Made in the USA by Sundance
        </p>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/shaper.php';
foreach ($shapers as $key => $value) {
    $value->display('paddle');
}
?>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>Milli Press</h3>
        <img src="/mobile/supplies/lampworking/images/milli-press-ht.jpg" alt="Milli Press in action" class="img-fluid"><br>
        <strong>Limited Quantity!!!</strong>
    </div>
</div>
<?php
    foreach ($shapers as $key => $value) {
        $value->display('milliPress');
    }
?>
<hr class="my-4">
<div class="row">
    <div class="col">
        <h3>
            Shaping Paddles
        </h3>
        <p>
            These hand held paddles are used to shape molten glass. Extra long handles are rubber coated for comfort and have shaped edges to better shape your molten glass. Available in graphite or brass. Graphite is preferred because it is lighter and can be re-sanded. Where the brass is a more durable material and it is easier to keep the chiseled edge intact. Remember, do not put this or any tool directly into the flame, work and shape your glass out of the flame.
        </p>
        <p>
            <span class="font-weight-bold">The Wedgie</span> - The forward edge is tapered to a sharp chiseled point. This allows you to cut into the molten glass to make a groove. A typical use for this is to make a melon shaped bead. 
        </p>
        <p>
            <span class="font-weight-bold">The Basic Shaper</span> - Chiseled edge plus one side edge is rounded for additional shaping.<br><span class="red font-weight-bold">Available in graphite or brass</span>
        </p>
        <p>
            <span class="font-weight-bold">Super Shaper</span> - Sometimes called the Stump Shaper. Similar to the Basic Shaper but with additional ground shapes. <span class="red font-weight-bold">Available in graphite or brass.</span>
        </p>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('shaper');
}
?>

<div class="row">
    <div class="col">
        <p>
            Sizes are approximate.
        </p>
    </div>
</div>
<hr>

<div class="row">
    <div class="col">
        <h4>
            Brian's Multi-Tool
        </h4>
        <a href="multi-tool.php">Click here for more details of these tools.</a>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('multi tool');
}
?>

<hr>
<?php 
foreach ($shapers as $key => $value) {
    $value->display('roller');
}
?>

<br>
<hr>
<br>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('bead maker');
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
<div class="row">
    <div class="col">
        <h4>Masher pads</h4>
        <p>
            <strong>Very Limited Quantity</strong>, so order while you can.
        </p>
    </div>
</div>
<?php
    foreach ($shapers as $key => $value) {
        $value->display('plates');
    }
?>
<hr class="my-2">

<div class="row">
    <div class="col">
        <img src="images/marvergrovedmlg.gif" alt="Metal Marver" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <h4>
            Metal Grooved Marvering Plate
        </h4>
        <p>
            Roll your glass or press your glass into this metal surface to make a pattern. Roll it twice across the surface each at a different angle to get a pineapple pattern. 
        </p>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('metal');
}
?>

<div class="row">
    <div class="col">
        <h4>
            Shaping Tool Set
        </h4>
        <p>
        Sets of stainless steel shaping tools . Press the ends into the hot glass to shape or make impressions. Use the sharp ends to rake or feather your glass. Sharpen some ends to make even more sharp knife sharp impressions. 
        These can also be used as a mini spatula set to move small amounts of powders and frits. Also great for carving wax for glass casting, with the wax burn out method. And a great set of tools for Pate de Verre work. Can also be used for PMC and Art Clay Silver. Approximately 6 Inch long. 
        </p>
    </div>
</div>

<?php 
foreach ($shapers as $key => $value) {
    $value->display('set');
}
?>

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
<hr>
<div class="row">
    <div class="col"><img src="images/corelg.gif" alt="some round shaping tools" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <h4>Core Vessel and Napkin Wrapper</h4>
        <p>
            <b>Core Vessel</b> - LEFT - Makes Core vessels as described in Richard Prevost's video "Glass Core Vessels" (not out of publication). 1" diameter 2" long sliced in half with handle.
        </p>
        <p>
            <b>Napkin Wrapper</b> - RIGHT - Wrap a band of hot glass around this 1" round graphite rod to make a quick and simple napkin ring. Make your own customized tool by carving and sanding the end of the rod. Graphite is 2" long and 1" in diameter. 
        </p>
    </div>
</div>

<?php
foreach ($shapers as $key => $value) {
    $value->display('circular');
}
?>

<br>
<hr>
<br>

<?php
foreach ($shapers as $key => $value) {
    $value->display('mini mandrel');
}
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>Raised Marvering Pads</h3>
    </div>
</div>
<?php
foreach ($shapers as $key => $value) {
    $value->display('raised marvering');
}
?>

<br>
<hr>
<br>

<div class="row" id="marvers">
    <div class="col">
        <h3>Graphite Marvering Pads</h3>
        <img src="images/graphite-slab-sm.jpg" alt="Graphite Slab" class="img-fluid">
        <p>
        Place on top of your work bench. Use to marver, sprinkle frit, enamel, gold leaf, etc. and roll your bead across it. Pads can be easily cut with any saw or sanded with sandpaper. All graphite needs to be occasionally resurfaced with a 600 grit sandpaper. One side sanded. Thickness is under 1/2" except where noted. The Steel Plate has a factory Finish, not sanded. <span class="red">Made in USA</span>
        </p>
    </div>
</div>

<?php
foreach ($shapers as $key => $value) {
    $value->display('marver');
}
?>
<?php require_once ROOT.'/mobile/includes/rightcol.php';