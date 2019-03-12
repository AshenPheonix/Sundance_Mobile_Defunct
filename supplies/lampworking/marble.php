<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Specialized Tools for Making Glass Marbles at great prices';
    $description='Your source for artists making glass marbles with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center!';
    $keywords='graphite,marble,mold,marble mold,1 hole,2 hole,4 hole,5 hole,7 hole,polished,glass marble,tweezers,rod holder,DVD,hemostats,5/8,3/4,7/8,1,1 1/4,1 /12,1 3/4,2, inch';
    $abstract='Flameworking Lampworking Glass Beadmaking Sundance Art Glass Flameworking Lampworking Glass Paradise CA Beadmaking Sundance Art Glass Flameworking Lampworking Glass Beadmaking Sundance Art Glass Center California';
    $location='lgtoolwebmarbler.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Glass Marble Making Tools</h1>
        <h4>
            for Flameworkers, Lampworkers and Glassblowers Making Glass Marbles
        </h4>
        <p>
            Sundance Glass - 1975 Manufacturer of Quality Tools
        </p>
        <img src="images/marblelg.JPG" alt="a half dozen marbles of various colors and sizes" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <h4>
            Graphite Marble Molds - Bowl Style
        </h4>
        <img src="images/marble-mold.jpg" alt="2 graphite marble molds" class="img-fluid">
        <p>
            Heat and work a blob of glass on the end of a glass rod into the marble mold hole. Actually many artists rotate the glass on the rim of the hole, not needing to go to the bottom of the hole. (Also works for shaping beads on the mandrel by riding on the rim of the hole.) When rounded as much as possible, punties on the rounded side (use a small attachment point) and remove the glass rod used as the original handle. Finish rounding by reheating and shaping. Repeat the above procedure until you are happy with the shape. Break off the last punties, keeping the marble in the marble mold, fire polish the glass nub left on the marble. Put marble in an annealing kiln.
        </p>
        <p class="red font-weight-bold">
            Made in the USA
        </p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/marbles.php';
foreach ($marbles as $key => $value) {
    $value->display('mold');
}
?>


<div class="row">
    <div class="col">
        <h4>Seven Hole Glass Marble Mold</h4>
        <img src="images/marble-mold-7-hole-glass-sm.jpg" alt="7 hole marble mold" class="img-fluid">
        <p>
            Highest quality polished graphite carbon used to help shape glass beads, marbles or paperweights.
        </p>
        <p>
            Seven Sizes 3/8" 1/2" 5/8" 3/4" 7/8" 1" and 1-1/8". You won't find this perfect combination of sized holes anywhere else. <br>Made in the USA by Sundance<br>Lifetime Sundance Warranty!  # MM7 - <span class="red font-weight-bold">$36</span>
        </p>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>Marble and Paperweight Mold</h4>
        <p>
            Large set of four Molds for Making Marbles or paperweights. You wont find this combination of correct sized holes and mounting bracket anywhere else. Now in Two Sizes.
        </p>
        <img src="images/MM4sn-med.jpg" alt="a marble mold" class="img-fluid clickImg" data-bigImg="images/MM4sn.jpg">
        <p>
        The Bracket on side allows you to hold the mold to the table while aggressive shaping. Without it it will surely move around on the worktable! Made from carbon graphite. Quality Highly Polished.
        </p>
        <span class="red font-weight-bold">Made inthe USA!</span> Lifetime Sundance Warranty!
    </div>
</div>
<?php
foreach ($marbles as $key => $value) {
    $value->display('large mold');
}
?>

<hr class="my-3">


<div class="row">
    <div class="col">
        <h4>
            Brian's Multi-Tool
        </h4>
        <a href="multi-tool.php">Click here for more details of these tools.</a>
    </div>
</div>

<?php 
require_once ROOT.'/mobile/includes/dbs/shaper.php';
foreach ($shapers as $key => $value) {
    $value->display('multi tool');
}
?>

<hr class="my-3">

<div class="row">
    <div class="col">
        <h4>Marble and bead holders</h4>
        <p>
            Excellent tools to hold a marble, bead or round bowl of glass.
        </p>
    </div>
</div>

<?php
require_once ROOT.'/mobile/includes/dbs/boroTools.php';
foreach ($boro as $key => $value) {
    $value->display('marble');
    $value->display('hemostat');
    $value->display('ball grabber');
}
include ROOT.'/mobile/display_stands/marbles.php';
?>


<?php require_once ROOT.'/mobile/includes/rightcol.php';