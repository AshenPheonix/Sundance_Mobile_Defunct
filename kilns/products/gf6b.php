<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='GF6B Kilns - Sundance Art Glass';
    $description='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $keywords='GF6B, Paragon, table top kilns , Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass ';
    $abstract='GF6B, At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='gf6b.php';
    require_once  ROOT .'/mobile/includes/header.php';
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Electric Glass GF6B Kiln</h1>
        <strong class="red">
            Discontinued by the manufacturer. Please see above for similar kilns. Kept for records.
        </strong>
        <h3>For Glass Fusers, Flameworkers, and lampworkers</h3>
        <img src="/kiln/gf6.jpg" alt="GF-6B Kiln" class="img-fluid"><br>
        <strong>Our most affordable glass fusing kiln!</strong><br>
        <P>
            With a decent size shelf! Accepts a 10" round shelf!<br>
            <strong>still small enough to be sent by UPS instead of expensive shelf shipping</strong>
        </P>
    </div>
</div>
<div class="row">
    <div class="col-3 border">
        Outside Dimensions<br>
    </div>
    <div class="col-3 border">
        Inside Height<br>
    </div>
    <div class="col-3 border">
        Floor Area for Fusing<br>
    </div>
    <div class="col-3 border">
        Volts and Amps<br>
    </div>
</div>
<div class="row">
    <div class="col-3 border beige">
        19" x 20" x 21"
    </div>
    <div class="col-3 border beige">
        6.5"
    </div>
    <div class="col-3 border beige">
        11" (accepts 10" Round Shelf)
    </div>
    <div class="col-3 border beige">
        120V - 15 Amp<br>
        plugs into 15 amp wall sockets
    </div>
</div>

<?php
    include 'scripts/kilnShipping.php';
?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <div class="h2">Features</div><br>
        <p><strong>Paragon GF-6B Glass Fusing Kiln</strong></p>
        <p class="text-left">
            Our first glass fusing kilns, the GF-series, have passed the test of time since 1985. They helped start the glass fusing revolution.
        </p>
        <p class="text-left">
            "I've fired your kilns all over the country during my seminars. I never hear complaints about your kilns. They are reliable and last a hell of a long time." Dan Fenton, Fenton Glass Studio, Oakland, California
        </p>
        <p class="text-left">
            The GF-6B manual-fire kilns uses an infinite control switch. It comes with a safety pilot light.
        </p>
        <p class="text-left">
            Plug in the 120 volt GF-6B. This kiln, of course, can be ordered for any electrical system world wide.
        </p>
    </div>
</div>
<div class="row">
    <div class="col">
        <strong>Additional Features:</strong>
        <ul class="text-left">
            <li class="disc">Heating Elements in Lid</li>
            <li class="disc">Chain Lid Support</li>
            <li class="disc">Galvanized Steel Base</li>
            <li class="disc">Reversible Brick Bottom</li>
            <li class="disc">Heavy-duty stand with mar-proof plastic feet</li>
        </ul>
    </div>
</div>
<?php
    specifications('Top Loading Round', ['Sides',6], .42, 6.5, null, ["Diameter",11], [19,20,31], [26,26,24], 99, 1700, 15, 1, 1800, '5-15P', 20, 12, 'Y', 'N', 120, 60, '5-15RW100.jpg', 'This kiln ships Via UPS');
    require_once ROOT.'/mobile/includes/rightcol.php';