<hr class="my-3">
<div class="row">
    <div class="col">
        <h4>The Following Items are reccomended for your kit.</h4>
    </div>
</div>
<hr class="my-3">

<div class="row">
    <div class="col">
        <div class="h6">
            Flashback Arrestor $56<br>
            <img src="/mobile/torches/images/flashback-arrestor.jpg" alt="Flashback arrestor diagram" class="img-fluid my-2" style="max-width:200px;"><br>
            Optional Safety Equipment
        </div>
        <?php 
        include_once DBROOT.'gasEquip.php';
            foreach ($equipment as $key => $value) {
                $value->display('FA30');
            }
        ?>
    </div>
</div>

<hr class="my-3">

<div class="row border py-3" style="box-shadow: inset 1px 1px 15px lemonchiffon;">
    <div class="col">
        <img src="/mobile/torches/images/OGSI-white.jpg" alt="OGSI Oxygen Concentrator" class="img-fluid"><br>
        <div class="h4">Oxygen Concentrators</div>
        <p>
            NEVER buy Oxygen again! <a href="/mobile/torches/oxygen_concentrator.php">Tap Here</a> for Details. An Oxygen Regulator is not needed if you use an Oxygen Concentrator. We can remove the regulator from the kit and adjust the price of the kit
        </p>
    </div>
</div>
<hr class="my-3">

<?php if(isset($hardOnly)==false || $hardOnly==false):?>
    <div class="row">
        <div class="col">
            <div class="h4">Add Glass your kit<br>Pick one</div>
        </div>
        <div class="w-100"></div>
        <div class="col-6 fakeBtn">
            <a href="/mobile/glass/soft/starter.php">
                <div class="h6">Moretti Effetre<br>Soft Glass</div>
                <figure class="figure">
                    <img src="/mobile/glass/soft/images/1654.jpg" class="figure-img img-fluid rounded" alt="A fist holding glass rods">
                    <figcaption class="figure-caption text-xs-center">Click here to get some Soft Glass for your Kit</figcaption>
                </figure>
            </a>
        </div>
        <div class="col-6 fakeBtn">
            <a href="/mobile/rods_tubes/hard/assortment.php">
                <div class="h6">Borosilicate/Pyrex<br>Hard Glass</div>
                <figure class="figure">
                    <img src="/mobile/rods_tubes/hard/images/assortment-borosilicate-glass-sm.jpg" class="figure-img img-fluid rounded" alt="a bunch of glass tubes and rods">
                    <figcaption class="figure-caption text-xs-right">Tap here to get some Hard Glass for your kit</figcaption>
                </figure>
            </a>
        </div>
    </div>
<?php elseif(isset($hardOnly) && $hardOnly):?>
    <div class="row">
        <div class="col">
            <div class="h4">
                Add Some Glass to Your Kit
            </div>
            <p>
                <a href="/mobile/rods_tubes/hard/index.php">Our Hard glass products</a>
            </p>
        </div>
    </div>
<?php endif; ?>
<hr class="my-3">

<div class="row">
    <div class="col">
        <div class="h3">
            Work Surfaces<br>
            For Torch Lampworking, Glassblowing, and Glass Bead making.
        </div>
        <br>
        <div class="w-100"></div>
        <div class="col my-1">
            <img src="/mobile/supplies/images/work-surface-rod-rest.jpg" alt="The edges of our work surface make great rod rests" class="img-fluid">
        </div>
        <div class="col">
            <img src="/mobile/supplies/lampworking/images/1631w.jpg" alt="Torch connected to one of our worksurfaces" class="img-fluid">
        </div>
        <div class="w-100"></div>
        <div class="col">
            <strong>Dimensions are approximate to within &plusmn; .5 inches</strong>
        </div>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/worksurfaces.php';
    foreach ($worksurfaces as $key => $value) {
        $value->display('metal');
    }
?>

<div class="row">
    <div class="col">
        <strong>
            Accessories pictured not included
        </strong>
    </div>
</div>
<hr class="my-2">

<div class="row">
    <div class="col">
        <img src="/mobile/supplies/lampworking/images/rrt.jpg" alt="Various colored rod on a rest" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <div class="h4 font-weight-bold">Glass Rod Rests</div>
        <p>
            This movable rod rest is used to support glass rods to keep them up off the flame worker's workbench for easier grabbing, better organization, and to keep the glass rods cleaner. The rippled edge keeps the rods from rolling around. These durable stainless steel rod holders can also be placed inside a glass bead kiln to support your mandrels. 
        </p>
    </div>
</div>

<?php 
    foreach ($worksurfaces as $key => $value) {
        $value->display('rod rest');
    }
?>
<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="/mobile/supplies/lampworking/images/glass-rod-rest-lampworking-sm.jpg" class="figure-img img-fluid rounded" alt="Comparing the two sizes of rod rest">
            <figcaption class="figure-caption text-xs-right">Difference between standard and tall rod rests</figcaption>
        </figure>
    </div>
</div>

<hr class="my-3">

<?php
    foreach ($worksurfaces as $key => $value) {
        $value->display('tool caddy');
    }
?>