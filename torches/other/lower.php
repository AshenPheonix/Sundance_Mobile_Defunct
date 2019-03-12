<?php

if (strpos($_SERVER['PHP_SELF'],'oxygen_concentrator.php')===false) :?>
<hr>
<div class="row">
    <div class="col">
        <h2 class="font-weight-bold">Gas Equipment</h2><br>
        <h3>For lampworkers, Glass Beadmakers, and Glassblowers</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <img src="/mobile/torches/images/OGSI-white.jpg" alt="M5 Oxygen Concentrator" class="img-fluid">
    </div>
    <div class="col">
        <span class="font-weight-bold h3">Oxygen Concentrators</span><br>
        <p>
            <a href="/mobile/torches/oxygen_concentrator.php">Click here</a> to see our Oxygen Generator Systems International (OGSI) Oxygen Concentrators.
        </p>
    </div>
</div>

<?php endif;

if(strpos($_SERVER['PHP_SELF'],'foot-pedals.php')===false):?>
<hr>
<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">
            Foot Pedals
        </h1>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <figure class="figure">
            <div class="row">
                <div class="col">
                    <img src="images/Fire-Switch-200x142.jpg" class="figure-img img-fluid rounded" alt="Fire Switch Foot Pedal in Gray">
                </div>
                <div class="col">
                    <img src="images/Rocket_5-150x150.jpg" alt="Rock It Foot Pedal in Brass" class="figure-img img-fluid rounded">
                </div>
            </div>
            <figcaption class="figure-caption text-sm-center"><a href="foot-pedals.php">Click here</a> to see our foot pedals</figcaption>
        </figure>
    </div>
</div>
<?php endif;

if (strpos($_SERVER['PHP_SELF'],'gas_equipment.php')===false) :?>
<hr>
<?php
    include_once ROOT.'/mobile/torches/gas_inner.php';
endif;