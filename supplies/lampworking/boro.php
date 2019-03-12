<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Specialized Tools for The Glass Pipe Artist';
    $description='Specialized tools for glassblowers, making glass pipes and large to small sculptures.';
    $keywords='Tools,Graphite tools,Carbon tools,Marble Molds,ground joint holders,Flameworking,Lampworking,Glass Pipemaking,Sundance Glass,rays pokey bowl pushers,carbide scoring knife,graphite carbon rods,Brass,Octagon Reamer,flaring tools,tube holders,locking clamp,tweezer sets,reaching tongs,holding fingers,egg beaters,brass,stainless steel, high temperature fusing gloves, blow hose,swivels,corks,roller blades,blowpipes pontils, bracelet ring mandrels';
    $abstract='Your California West Coast, North America, and International source for tools for glass artists. Graphite tools, holding tools, gloves, corks, mandrels everything you need to make that pipe, bong or sculpture your dreaming of. ';
    $location='lgtoolpiper.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
    <h1>
    Specialized Tools forFlameworkers, Glassblowers, Pipe Makers 
    </h1>
    <p>
        Sundance Glass - Since 1975
        Manufacture of Quality Tools
    </p>
    </div>
</div>
 
<div class="row">
    <div class="col-6">
        <img src="images/raymonpipe2300.jpg" alt="Multi Colored Pipe" class="img-fluid">
    </div>
    <div class="col-6">
        <img src="images/borosilicate-glassblowing-tools-med.jpg" alt="various tools" class="img-fluid">
    </div>
</div>

<hr>
<div class="row">
    <div class="col">
        <h4>Tweezer Jacks</h4>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/pliers.php';
foreach ($pliers as $key => $value) {
  $value->display('jack');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>UV Lights</h4>
    </div>
</div>
<?php 
    require_once ROOT.'/mobile/includes/dbs/boroTools.php';
    foreach ($boro as $key => $value) {
        $value->display('uv light');
    }
?>
<hr class="my-2">
<div class="row">
    <div class="col">
        <h4>Carbide Scoring Knives</h4>
        <img src="images/scoreknife.jpg" alt="scoring tools" class="img-fluid">
        <p>
            Used to score and break glass rod and tube. (go to the general tool section for other style rod cutters) With some practice, these tools can be used to cut glass tubing easily. We recommend searching YouTube for videos on how to do this, before attempting it for the first time yourself.
        </p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('scorer');
}
?>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Titanium Pen</h4>
        <p>
            Scribe into most any glass surface. Titanium metal will be transferred as a metal deposit into the scribe mark making a silver colored inscription. Great for signing your work or inscribing your logo or mark. Makes a fine line. Wider line by dulling the tip. Wet glass surface for smoother writing. The more you use the pen the better it works and the better you get used to it. If possible, heating the glass will make the titanium more visible.
        </p>
    </div>
</div>


<?php 
require_once ROOT.'/mobile/includes/dbs/fusingTools.php';
foreach ($fusingTools as $key => $value) {
    $value->display('pen');
}
?>

<br>
<hr>
<br>

<div class="row" id="gcr">
    <div class="col">
        <img src="images/graphiterodsm.gif" alt="4 graphite rods of varing thickness" class="img-fluid">
        <h4 class="font-weight-bold">
            Graphite Carbon Rods
        </h4>
        <p>
            Easy to shape by sanding to make your own specialized tools. Carve a design into the end to make a custom stamp impression tool. Push these round rods in to a glass pipe to make the bowl. Most ends are flat, a couple happen to have a tapered cone pointed end. Why Carbon? Most materials like metal will stick to molten glass. Carbon / Graphite has the unique property of not sticking to molten glass. It is the ideal material for pressing and shaping molten glass. If you purchase at least $40.00 worth of graphite rods use coupon code GRAFROD to receive a 10% discount on your purchase of graphite rods. 
            <span class="red font-weight-bold">High Quality American Made Graphite Rods!</span>
        </p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('graphite rods');
}
?>
<hr class="my-2">
<div class="row" id="bowl-push">
    <div class="col-6"><img src="images/bowl-push-pipe-glassblowing-sm.jpg" alt="4 rounded bullet end bowl pushes" class="img-fluid"></div>
    <div class="col-6"><img src="images/bowl-push-glassblowingmed.jpg" alt="showing the difference between our pushes" class="img-fluid"></div>
    <div class="col">
        <h4>
            Bowl Pushes
        </h4>
        <p>
            Use these bowl pushes to push down the bowl in the end of a molten glass tube. What makes our bowl push unique is the nipple at the end which keeps the depression straight to the hole in the bottom of the depression .
        </p>
        <p class="red font-weight-bold">
            High Quality American Made
        </p>
    </div>
</div>

<br>
<hr>
<br>

<?php 
foreach ($boro as $key => $value) {
    $value->display('bowl push');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <img src="images/rays-pokie-sm.jpg" alt="A Ray's Pokie" class="img-fluid">
        <p>
            Amazing Tool When making bubblers. Keeps your stem straight when pushing your bowl.
            Bowl diameter is interchangeable.
            Also works as a tungsten pick by removing the graphite bowl push.
        </p>
        <p class="red font-weight-bold">High Quality American Made</p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('rays');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Necking Tools</h4>
        <p>
            Unlike other designs the corner comes to a sharp V instead of a rounded tool edge 
        </p>
        <p class="red red-font-weight-bold">
            High Quality American Made
        </p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('necking tool');
}
?>
<br>
<hr>
<br>

<div class="row" id="reamers">
    <div class="col">
        <p class="font-weight-bold">
            Reamers
        </p>
        <img src="images/reamer-octagon-glassblowing-lampworking-2lg.jpg" alt="2 reamers" class="img-fluid"><img src="images/reamer-cone-glassblowing-lampworking-1sm.jpg" alt="a reamer" class="img-fluid">
        <p>
            Rotate this tool in the opening of a tube to increase the opening size.
            Also used to push, pry and manipulate molten glass.
        </p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('reamer');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/ground-joint-assembly.jpg" class="figure-img img-fluid rounded" alt="hose connector">
            <figcaption class="figure-caption text-sm-center">attach your 1/4" ID latex tubing - see our blow hose system further below</figcaption>
        </figure>
    </div>
</div>

<div class="row">
    <div class="col border">
        <h4>Super Cool Sophieta Puffer Reamers</h4>
        <p>At last a reamer you can blow through</p>
        <figure class="figure">
            <img src="images/super-cool-puffer-pair.jpg" class="figure-img img-fluid rounded" alt="puffer reamers">
            <figcaption class="figure-caption text-xs-right">Long Cone Puffer Reamer Top. Short Cone Puffer Reamer on bottom</figcaption>
        </figure>
        <ul class="text-left">
            <li class="disc">
                Aggressively Tested.
            </li>
            <li class="disc">
                Precision Machined.
            </li>
            <li class="disc">
                Fully Annealed 16mm Borosilicate Glass Handles to better withstand the head of production and provide a more natural feel when working.
            </li>
            <li class="disc">
                Handle cores transfer heat very slowly, stays cool while working.
            </li>
            <li class="disc">
                Easily Attach a blow hose to barbed brass end.
            </li>
            <li class="disc font-weight-bold">
                Sundance Exclusive
            </li>
        </ul>
        <p class="red font-weight-bold">Made in the USA</p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('puffer reamer');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Graphite Lathe Donuts</h4>
    </div>
</div>

<?php
foreach ($boro as $key => $value) {
    $value->display('lathe donut');
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Super Cool Joint Holders</h4>
        <img src="images/Super-cools.jpg" alt="set of 6 holders" class="img-fluid">
        <ul class="text-left">
            <li class="disc">
                Aggressively Tested
            </li>
            <li class="disc">
                Precision machined to hold firmly and so the graphite does not extend past the ground surface.
            </li>
            <li class="disc">
                Color coded by size
            </li>
            <li class="disc">
                Fully annealed 16mm borosilicate glass handles to better withstand the heat of production and provide a more natural feel when working
            </li>
            <li class="disc">
                Handle cores transfer heat very slowly, stays cool while working
            </li>
            <li class="disc">
                Easily attach a blow hose to barbed brass end
            </li>
            <li class="disc font-weight-bold">
                Sundance Exclusive
            </li>
            <li class="disc">
                These are not ground joint molds
            </li>
        </ul>
        <span class="red font-weight-bold">Made in the USA</span>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('joint holder');
}
?>

<br>
<hr>
<br>
<div class="row" id="flares">
    <div class="col">
        <h4>Flaring Tools</h4>
        <p>
            An awesome tool developed to easily flare open the end of a Pyrex tube so that you can decorate the inside of the tube. Made of carbon, this tool will not stick to your glass. Soft rubber coated handle for comfort.
        </p>
        <span class="font-weight-bold red">High Quality American Made</span>
        <img src="images/flaring-tool-how-to.jpg" alt="demonstrating use of this tool" class="img-fluid">
        <img src="images/flaring-tool.jpg" alt="showing the various tool sizes" class="img-fluid">
    </div>
</div>

<?php
foreach ($boro as $key => $value) {
    $value->display('flaring');
}
?>
<br>
<hr>
<br>
<?php
foreach ($boro as $key => $value) {
    $value->display('roller');
}
?>

<br>
<hr>
<br>

<?php 
foreach ($boro as $key => $value) {
    $value->display('hemostat');
}
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h4>Grabbing Tongs</h4>
        <p>
            Heavy Duty Tongs. The woven sleeves are rated to 2000°F and provide plenty of insulation between the glass and the metal of the tongs. Pads are easily replaced. The handle is coated in heavy duty plastic
        </p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/pliers.php';
foreach ($pliers as $key => $value) {
    $value->display('grabbing tongs');
}
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Tube Holders</h4>
        <p>
            Different ways to grab a glass tube, vase, Xmas ornament, pipe, etc.
        </p>
    </div>
</div>

<?php 
foreach ($boro as $key => $value) {
    $value->display('tube holder');
}
?>

<br>
<hr>
<br>

<div class="row" id="fingers">
    <div class="col">
        <h4>
            Holding Fingers / Claw Grabber
        </h4>
        <p>
            Grab a vase, marble, Xmas ornament or pipe by the ball end and spin.
            These quality finger holders will grab hot glass in a variety of ways.
            One handed adjustable with a screw lock. 
        </p>
    </div>
</div>

<?php 
    foreach ($boro as $key => $value) {
        $value->display('claw grabber');
        $value->display('ball grabber');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h4>Blow Hose</h4>
        <p>
            How do you blow, say, a Christmas Ornament? Seal the end of a tube, heat the sealed end, and blow on the other cool end of the tube. Using this blow method, it is difficult to see how big and even you are blowing the bubble. But using this blow hose system, your eyes can be looking directly at the expanding bubble. 
        </p>
    </div>
</div>

<?php
foreach ($boro as $key => $value) {
    $value->display('blow hose');
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

<?php
include ROOT.'/mobile/includes/fritBowl.php';
?>

<br>
<hr>
<br>

<?php
    include ROOT .'/mobile/includes/gloves.php';
?>

<hr class="my-2">
<div class="row">
    <div class="col">
        <h4>Bark Stoppers</h4>
        <img src="images/cork-bark.jpg" alt="Bark covered corks" class="img-fluid">
        <p>
        Tops of the stoppers are actual bark. Bark tops can be a bit rough... cause they are real bark. Looks great on your jars.
        </p>
    </div>
</div>

<?php
foreach ($boro as $key => $value) {
    $value->display('bark cork');
}
?>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Graphite Scrap</h4>
        <p>
            Scrap graphite comes from our machine shop. Medium pieces are irregular chunks of graphite. Small pieces are short ends. Powder is the same size as grains of sand. This is not pure graphite. Possibly contaminated with oil and or aluminum.
        </p>
    </div>
</div>

<?php
foreach ($boro as $key => $value) {
    $value->display('graphite scrap');
}
?>

<?php require_once ROOT.'/mobile/includes/rightcol.php';