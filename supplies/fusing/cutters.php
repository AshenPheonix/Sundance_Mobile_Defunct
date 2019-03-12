<?php
    define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
    $title="Stained Glass Glass Cutters - Sundance Art Glass";
    $description="Your source for Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics Etched Glass, Sandblasted Glass, Glass Painting, tools for cutting glass toyo cutters - Sundance Art Glass Center!";
    $keywords="Stained Glass,Leaded Glass,Beveled Glass,Glass Mosaics,Etched Glass,Sandblasted Glass,Glass Painting,Glass Cutters,Scoring Glass,Toyo Pistol Grip Supercutter,Inland Score 1,Circle and Strip Cutter,Fletcher,Armour,Ephrem,Sundance Art Glass California";
    $abstract="Stained Glass, Leaded Glass, Beveled Glass, Glass Mosaics, Etched Glass, Sandblasted Glass, Glass Painting, Glass Cutters, Scoring Glass, Toyo Pistol Grip Supercutter, Inland Score 1, Circle and Strip Cutter, Fletcher, Armour, Ephrem - Sundance Art Glass California";
    $location='glass-cutting-tools-circle-pistol.php';
    require_once(ROOT ."/mobile/includes/header.php"); 
?>

<div class="row">
    <div class="col">
        <h1>
            Glass Cutters
        </h1><br>
        <a href="aboutCutters.php">
            About Glass Cutters
        </a>
        <img src="images/glass-cutter-toyol-pistol-grip-1med.jpg" alt="Pistol Grip cutter, blue and transparent" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            <span class="font-weight-bold">Pistol Grip</span><br>
            by Toyo
        </p>
        <p>
        <em>Self Oiling</em> - The hollow handle holds cutting oil which then drips through a wick to lubricate the cutting wheel. This cutting wheel, by Toyo, is the best in the world because it is made from tungsten carbide. Tungsten is one of the hardest materials with a sharp h1 (angle) to give the best score. Often imitated but never duplicated! Replacement cutting blades also available. Now available with the best cutting blade on the market. The Toyo tap wheel.
        </p>
    </div>
</div>

<?php 
    require_once DBROOT.'cutters.php';
    $temp=[];
    foreach ($Cutters as $key => $value) {
        $value->display('toyo pistol');
    }
    foreach ($Blades as $key => $value) {
        $value->display('tap blade');
    }

?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>Pistol Grip</h3>
        <h6>Import</h6>
        <img src="images/glass-cutter-pistol-import-2019-1med.jpg" alt="Purple and transparent pistol gripped cutter" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            <em>Self Oiling</em> - The hollow handle holds cutting oil which then drips through a wick to lubricate the cutting wheel. Replacement cutting blades also available.
        </p>
    </div>
</div>

<?php
    foreach ($Cutters as $key => $value) {
        $value->display('imp pistol');
    }
    foreach ($Blades as $key => $value) {
        $value->display('imp blade');
    }
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Brass Super Cutter
        </h3>
        <h4>
            by Toyo
        </h4>
        <img src="images/brasscutterlg.JPG" alt="" class="img-fluid">
        <p>Brass handled Glass Cutter - <em>Self Oiling</em> - The hollow handle holds cutting oil which then drips through a wick to lubricate the cutting wheel. This cutting wheel imported. Tungsten is one of the hardest materials with a sharp h1 (angle) to give the best score. Often imitated but never duplicated! Replacement cutting blades also available.</p>
    </div>
</div>

<?php
    foreach ($Cutters as $key => $value) {
        $value->display('super cutter toyo');
    }
    foreach ($Blades as $key => $value) {
        $value->display('tap blade');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Brass Super Cutter
        </h3>
        <h6>Imported</h6>
        <img src="images/glass-cutter-import-2018-12med.png" alt="brass straight cutter" class="img-fluid">
        <p>
            Brass handled Glass Cutter - <em>Self Oiling</em> - The hollow handle holds cutting oil which then drips through a wick to lubricate the cutting wheel.

            Replacement cutting blades also available.
        </p>
    </div>
</div>

<?php
    foreach ($Cutters as $key => $value) {
        $value->display('super cutter imp');
    }
    foreach ($Blades as $key => $value) {
        $value->display('imp blade');
    }
?>

<br>
<hr>
<br>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('cutting fluid');
    }
?>
<br>
<div class="row">
    <div class="col">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe src="http://www.youtube.com/embed/fNYo2X9dlq8?feature=player_detailpage" frameborder="0" class="embed-responsive-item"></iframe>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Rod Cutter, Glass Nippers
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/rodcutterlg.jpg" alt="cutter and nippers" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            These round wheel cutters are great for cutting chunks out of sheet glass (great for mosaics where speed not accuracy is needed). cuts stringer, sizzle stix, rods and more. These break by focusing pressure is an exact location where the 2 round wheels almost meet, making the "cut" much more precise and exact!
        </p>
        <p>
            Wheel style cutters have round cutting wheels that can be turned as they get dull. The advantage of this over the green handled 1s is that it cuts more clean, which doesn't really matter unless you are cutting murrini chips or stringer. A must if you will be cutting murrini chips or stringers as these are least likely to break rods.
        </p>
        <p>
            Green handled cutters are carbide tipped. 7½" long. Advantage of this over the wheeled cutter is that it is 'quicker" to use, grab and cut without much aiming between the cutting blades. Please keep in mind these are more susceptible to crushing rods or stringers due to the lack of precision.
        </p>
    </div>
</div>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('nipper');
    }
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Fletcher Glass Cutter
        </h3>
        <img src="images/fletcher07lg.JPG" alt="Single black, blue and metalic cutter" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            Standard Fletcher Glass Cutter - This glass cutter is a great inexpensive cutter. Works for cutting glass or tiles, however does not last very long. Disposable.
        </p>
    </div>
</div>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('disposable');
    }
?>

<br>
<hr>
<br>

<div class="row" id="CircleCutterToyo">
    <div class="col">
        <h3>
            Glass Circle Cutter
        </h3>
        <h4>
            By Toyo
        </h4>
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/glass-circle-cutter-toyo-med.jpg" alt="Brass and silver mechanism, the circle cutter" class="img-fluid"></div>
    <div class="col"><img src="images/circle-cutter-glass-sm.jpg" alt="Same mechanism, with circles of glass in varying colors" class="img-fluid"></div>
</div>

<div class="row">
    <div class="col">
        <p>
            Perhaps the finest glass circle cutter made. Has a replaceable cutting head.
        </p>
        <p>
            This Toyo cutting wheel is the best in the world and the cutting wheel is what makes a glass cutter great!
        </p>
        <p>
            This Toyo Circle Cutter has a sharp h1 (angle) to give the best score, but this angle only works if the wheel material is strong. These Toyo wheels are made from Tungsten Carbide, one of the hardest materials in the world!
        </p>
        <p>
            I have cut thousands of circles using all types of circle cutters, and I wouldn't use anything else. Smallest circle this can make is 3", but this can make up to 27" diameter circles. Most of the circles I make are much smaller, so I cut the long bar shorter so it doesn't get in the way.
        </p>
        <p>
            The Toyo Circle Cutter features a rubber vacuum cup and alignment demarcations for accurate tool placement. The thrust bearing unit is positioned on a pivoting radius bar which is ruled for precise adjustment. The blade rotates 360⁰ to allow for positive tracking along the path of the circle at any radius. The cutting head has a replaceable wheel and axle.
        </p>
    </div>
</div>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('toyo circle');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Circle & Strip Cutter
        </h3>
        <h4>
            By Inland
        </h4>
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/inlandcirclestrip.jpg" alt="2 T shaped tools with pink handled cutters inserted" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            A tool that can make circle or strip using your own tools. Place your cutter, Exacto knife, pencil or pen - into this handy tool. Replaces their old cutter. <!--<a href="50060.php">Click Here</a> to see more about this tool!-->
        </p>
    </div>
</div>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('circle strip cut');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col"><img src="images/L-squares-sm.jpg" alt="2 L squares" class="img-fluid clickImg" data-bigImg="images/L-squares-lg.jpg" data-title="2 L Squares"></div>
    <div class="w-100"></div>
    <div class="col">
        <h3 class="font-weight-bold">
            L Squares for Glass Cutting
        </h3>
    </div>
</div>

<?php 
    foreach ($Cutters as $key => $value) {
        $value->display('l square');
    }
?>
<br>
<hr>
<br>
<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';