<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Diamond Drill Bits Diamond Tools - Sundance Art Glass';
    $description='Diamond Drill Bits Diamond Tools - Sundance Art Glass';
    $keywords='Small,Diamond Drill Bits,Inverted Cone,Diamond end bits,Core Drill,Wire Wrap,Bead Cleaning Set,Bead Hole Scraper,Bead Cleaning Brush,Made in the U.S.A.,Glass,Marble.Stone,Rock,Sundance Art Glass';
    $location='diamond-tools-drills.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Drill and Grinder Bits
        </h1>
        <img src="images/grinder-bits.gif" alt="3 diamond grinder bits of varying sizes" class="img-fluid">
    </div>
</div>
<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            These bits fit on all Inland grinders and Glastar grinders unless otherwise specified
        </h3>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/drillBits.php';

    foreach ($Bits as $key => $value) {
        $value->display('grinder');
    }
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Diamond Drill Bits
        </h3>
        <img src="images/pak.jpg" alt="5 drill of varing size" class="img-fluid">
        <p>
        Long lasting quality Made in the USA diamond drill bits at a great price. We have been using these in our studio and I'm impressed. Electroplated. Great for glass, tile or stone. The 3/8" shaft fits in your 3/8" or larger drill chuck.  Wall thickness .05<br><br>And the best part is that these are<br>Made In The USA! 
        </p>
    </div>
</div>


<?php 
    foreach ($Bits as $key => $value) {
        $value->display('holesaw');
    }
?>
<br>
<div class="row">
    <div class="col">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="//www.youtube.com/embed/rSqk1cjyWDM?feature=player_detailpage" frameborder="0" class="embed-responsive-item"></iframe>
        </div>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Diamond Hole Saw Set
        </h3>
        <img src="images/diamond-drill-bits-6-1med.jpg" alt="drill bits in a case with green lining" class="img-fluid">
        <p>
            These diamond coated bits are imported and have a rougher (lower) grit than the American bits above.
        </p>
    </div>
</div>

<?php 
    foreach ($Bits as $key => $value) {
        $value->display('holesaw set');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <img src="images/small-diamond-bit.jpg" alt="2 small diamond drill bits" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <h3>
            Small Diamond Drill Bits
        </h3>
        <p>
            Great for glass jewelry, wind chimes, or hanging glass projects using small string or fishing line.
        </p>
    </div>
</div>

<?php 
    foreach ($Bits as $key => $value) {
        $value->display('dremel bit');
    }
?>

<div class="row">
    <div class="col">
        <p>
            I put a # 80302 1/16" bit in my Dremel Drill and tried it out on a standard 1/8" thickness glass. I easily punched thru 25 holes with no problem. The last hole didn't seem to take any longer than the first hole. Each hole took under 10 seconds. Don't forget to push than ease up, push than ease up trick to get some water coolant to the tip of the bit.
        </p>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Inverted Cone Point Diamond Tip
        </h3>
        <p>
            Electric Engraver, Flex Shaft™ Accessory or any hand held rotary tool with an adjustable chuck.<br>
            <span class="font-weight-bold">Key Features</span>
        </p>
        <ul class="text-left">
            <li class="disc">
                Durable diamond plating for long lasting use.
            </li>
            <li class="disc">
                Standard shaft size for use in a wide range of tools.
            </li>
            <li class="disc">
                Create your own custom details and designs, engrave on stone, marble, granite, plastics, glass, and hundreds of other materials.
            </li>
        </ul>
        <p>
            Shaft Diameter: 29/32" (2.3mm)<br>
            Overall Length: 1.75" (44mm)
        </p>
    </div>
</div>

<?php 
    foreach ($Bits as $key => $value) {
        $value->display('engraver');
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
        <img src="images/db8p.jpg" alt="8 shiny bits in a bluish looking container" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="images/db20p.jpg" alt="20 shiny bits in a bluish looking container" class="img-fluid">
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
        Diamond Grinder Bit for Wire Wrapping Glass
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/jewelry-bit.jpg" alt="A grinder bit" class="img-fluid">
    </div>
    <div class="col flex-image">
        <p>
            Use this bit on your diamond grinder. It puts a thin groove in the edge of the glass piece. A wire is placed in this groove to "Wire Wrap" your glass piece and hold the wire in place.
        </p>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/fusingTools.php';
 
    foreach ($fusingTools as $key => $value) {
        $value->display('diamond grinder');
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
        <img src="images/cleantool.jpg" alt="Black handled tools" class="img-fluid">
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


<?php
    require_once ROOT.'/mobile/includes/rightcol.php';