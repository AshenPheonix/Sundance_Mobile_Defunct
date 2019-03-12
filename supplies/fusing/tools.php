<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Fusing Tools and Equipment - Sundance Art Glass Center';
    $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
    $keywords='High Temperature Gloves,Glass Rack,Open Weave Sand Paper,Reaching Pliers,Powder Sifter,Sifting Screans,Haik Brush,Diamond Grinder bit,Scribe Pen,Polishing System,Kiln Wire,Glass Crusher,Face Shields,Glass Fusing,High Temperature Fusing Gloves,The Glove Kevlar Nomex,bead boxes,';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='fusing-glass-tools.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
 ?>
<style>
    
</style>

<div class="row">
    <div class="col">
        <h1>
            Glass Fusing and Slumping Supplies
        </h1>
        <h4>
            High Temperature Gloves
        </h4>
    </div>
</div>

<?php include_once ROOT.'/mobile/includes/gloves.php';?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Glass Rakes
        </h3>
        <p>
            For raking or manipulating molten glass in a kiln. Ends are angled and have sharpened tips.
        </p>
    </div>
</div>

<?php 
    require_once DBROOT.'fusingTools.php';
    foreach ($fusingTools as $key => $value) {
        $value->display('rake');
    }
?>
<br>
<hr>
<br>
<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('sand paper');
    }
?>
<div class="row">
    <div class="col">
        <p>
            This excellent tool is used to remove kiln wash from your kiln shelves or molds. The open weave design prevents kiln wash from building up and clogging your sand paper.<br>#4817
        </p>
    </div>
</div>
<br>
<hr>
<br>

<?php foreach ($fusingTools as $key => $value) {
    $value->display('pliers');
}
?>

<br>
<hr>
<br>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('sifter');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col flex-image">
        <img src="images/haiklg.JPG" alt="Haik Brushes" class="img-fluid clickImg" data-zoom="true">
    </div>
    <div class="col">
        <h3>Haik Brush</h3>
        <p>
            Sheep Hair! The perfect soft bristle brush for applying kiln wash separator. Any bristles that fall off onto the kiln wash surface will not cause any problems. Coat kiln shelves and all surfaces that would come in contact with glass with kiln wash.
        </p>
    </div>
</div>
<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('brush');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Diamond Hand Pads
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col flex-image">
        <img src="images/diamond-pads-120med.jpg" alt="some red handled green pads" class="img-fluid">
    </div>
    <div class="col">
        These Diamond Hand Pads are extremely useful. Always use with water to preserve the diamond grit and the glass. If you don't have a diamond grinder machine you need these! Even if you do have a diamond grinder, you will like these because they are so
        quick and easy! You can take off any rough edges before or after firing your glass with just a few quick passes with these pads. You can even use the different grits to smooth it out. These will also allow you to hand finish your work. Each 2½"
        X 3½ X 1½. The Larger the grit number the smaller the diamond (smoother).
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('diamond paper');
    }
?>

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
    foreach ($fusingTools as $key => $value) {
        $value->display('diamond grinder');
    }
?>

<div class="row">
    <div class="col">
        <img src="images/wandapendants2small.png" alt="6 pendants of varying shapes and sizes" class="img-fluid">
        <h3 class="font-weight-bold">
            Jewelry Glue
        </h3>
        <h3>
            Glass Glue
        </h3>
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('glue');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Scribe Pen
        </h3>
        <p>
            Scribe to sign your glass pieces. Also engrave item numbers, or name of your glass 
            pieces. Has a hard Tungsten Carbide Tip. Also works on many other materials like 
            stone or plastic. Scribe ID on your TV or valuables.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('scribe');
    }
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>
            Titanium Pen
        </h3>
        <p>
        Scribe into most any glass surface. Titanium metal will be transferred as a metal deposit into the scribe mark making a silver colored inscription. Great for signing your work or inscribing your logo or mark. Makes a fine line. Wider line by dulling the tip. Wet glass surface for smoother writing. The more you use the pen the better it works and the better you get used to it. If possible, heating the glass will make the titanium more visible.
        </p>
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('pen');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col flex-image">
        <img src="images/5702.jpg" alt="Felt polishing head for a drill" class="img-fluid">
    </div>
    <div class="col flex-text">
        <p>
            Removes small scratches from glass. Also removes Devitrification - but 
            with a bit of effort. Use Pumice first to grind away more glass. It will 
            leave a slight haze. Finish by using Cerium Oxide which leaves a glossy surface finish. You must use a different polishing wheel for each abrasive. 
            Do not cross contaminate. If you want to use both polishing compounds, 
            you will need to order two.
        </p>
    </div>
</div>
<div class="row">
    <div class="col flex-text">
        <p>
        Mount the polisher on a drill. 1/4" shaft. Make a paste with water. Apply paste to the polishing wheel. Work wheel against glass. Too fast a speed throws the paste off the wheel. Remember, you would need to polish to the bottom of a scratch to remove the scratch completely, so it doesn't work fast for deeper scratches. Also works for Devitrification with a bit of effort. The 5716 bottles store the polishing wheel. Use another one to mix and store the polishing paste.
        </p>
    </div>
    <div class="col flex-image">
        <img src="images/5702-2.jpg" alt="Polishing a vibrant plate with a pink compound" class="img-fluid">
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('polishing');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            High Temperature Kiln Wire
        </h3>
        <p>
            Holds up to the high temperatures of a kiln. Make a loop to hang glass by placing 
            looped wire between layers of glass, great for the loop to hang fused glass jewelry, many other uses too! (The smaller the gauge (ga.) number the thicker the wire)
        </p>
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('kiln wire');
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Fire Brick
        </h3>
        <p>
            Soft brick can be shaved, carved and cut into almost any shape for custom molds. Coat 
            with Shelf Primer. This insulating fire brick is also used to make or repair kilns. Limit is 
            2300°F (1260°C) 2½" x 4½" x 9"
        </p>
    </div>
</div>

<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('fire brick');
    }
?>

<div class="row">
    <div class="col">
        <h3>
            Glass Crusher
        </h3>
    </div>
</div>
<?php 
    foreach ($fusingTools as $key => $value) {
        $value->display('crusher');
    }
?>

<br>
<hr>
<br>

<?php
    foreach ($fusingTools as $key => $value) {
        $value->display('face shield');
    }
?>

<?php
require_once ROOT.'/mobile/includes/rightcol.php';