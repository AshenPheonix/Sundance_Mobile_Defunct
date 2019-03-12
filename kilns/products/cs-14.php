<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='CS 14 Glass Fusing Kiln Annealing Kiln - Sundance Art Glass Paragon CS14';
    $description='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $keywords='Paragon,CS14,CS 14,CS14D,CS14S,S,D,Kiln,Fusing Kilns,Slumping Kilns,Clamshell Kilns,Glass Fusing Kilns,Aim,Olimpic,Heat,Skuttle,Sundance Art Glass';
    $abstract='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
    $location="glass-fusing-kiln-cs14.php";
    include_once(ROOT .'/mobile/includes/header.php');
    include 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>14 Inch Clameshell Kiln by Paragon</h1>
        <h5>for Glass Fusers, Flameworkers, and Lampworkers</h5>
    </div>
</div>

<div class="row mb-4">
    <div class="col">
        <h5 class="font-weight-bold">
        <figure class="figure">
            <img src="../images/CS14S_Open.jpg" class="figure-img img-fluid rounded" alt="Paragon's 14 Inch Clamshell Kiln">
            <figcaption class="figure-caption text-xs-center">Paragon's 14 Inch Clamshell Kiln CS14S - Single Lid</figcaption>
        </figure>
        </h5>
    </div>
</div>

<?=$kiln->purch();?>

<div class="row mt-4">
    <div class="col">
        <figure class="figure">
            <img src="../images/CS14D_open.jpg" class="figure-img img-fluid rounded" alt="14 Inch Clamshell Dual Lid - By Paragon">
            <figcaption class="figure-caption text-xs-right">Paragon's 14 inch Clamshell Kiln, CS14D - Dual Lid</figcaption>
        </figure>
    </div>
</div>

<?php include 'scripts/kilnShipping.php'; ?>

<div class="row">
    <div class="col">
        <h5 class="red font-weight-bold">Features of the Paragon CS-14 Glass Fusing Kilns</h5>
        <p>
            Paragon's square CS-14 digital glass clamshell kiln operates on a standard household outlet and fires up to nine 4" x 4" glass tiles. Imagine the murals you could make with this kiln.
        </p>
        <p>
            Fire small glass bowls, pendants, earrings, cufflinks, and even bracelets. Try out the newest glass techniques. Enjoy glittering dichroic glass. Make gifts that your loved ones will treasure. When you own a Paragon CS-14 clamshell, you can experiment with glass fusing to your heart's content. 
        </p>
        <p>
            The CS-14 heats from the top for even heat distribution across the glass surface. The lid elements are mounted in pin less element grooves. Element pins are no longer needed because the element coils are wider than the groove opening. This helps eliminate dust in the firing chamber. 
        </p>
        <p>
           <strong>Kiln Lifts Out of the Way for Easy Loading: </strong>The kiln lifts up and out of the way so you can assemble glass pieces inside the kiln. Add stringers and frit to delicate designs. When the kiln shelf is loaded and you are ready to fire, lower the kiln in place.
        </p>
        <p>
            The kiln is easy to open because of two counter-weight springs mounted under the kiln. The kiln base extends 4" in the back to support the weight of the kiln when in the open position. The base comes with mar-proof rubber feet.
        </p>
        <p>
            The CS-14D is dual-opening: You can open the kiln by lifting the kiln body or by lifting only the lid. Lift the kiln body out of the way to assemble glass directly on the shelf; open the lid to load glass over a slumping mold.
        </p>
        <p>
            The clamshell on the CS-14D kiln can be opened by lifting the kiln body or the kiln lid, but never both at the same time. The kiln is equipped with safety latches on the side. The gravity-operated top latch holds the lid closed; the lever-operated bottom latch holds the kiln body closed. The kiln body and lid are one piece on the CS-14S, so if you want to open just the lid, you will need to get the CS-14D.
        </p>
        <strong>Protective Steel Lid Cover</strong>
        <p>
            The top of the lid is protected with a painted sheet metal cover. The sheet metal is bent to cover the sides of the lid, and the steel is welded at the corners. You will be amazed at the sturdy construction that has made Paragon kilns renowned. The self-adjusting lid floats at fusing temperatures.
        </p>
        <strong>Optional Ceramic Fiber Top</strong>
        <p>
            The standard CS-14 comes with an insulating firebrick top. You can also upgrade your kiln with the optional deluxe ceramic fiber top, which has the same type of pin less groove as the standard top. The fiber top helps keep the kiln interior even cleaner. 
        </p>
        <strong>Reliability at the Heart of the Kiln</strong>
        <p>
            The CS-14 has a two-year warranty. The temperature sensor, called a thermocouple, is sheathed with high-nickel stainless steel for long life. A heavy steel base supports the reversible brick bottom completely. These features are extra assurance that your Paragon kiln is built to last. No extra stand is needed.
        </p>
        <p>
            The reliable CS-14 has dual mechanical relays for long life. The digital controller sends a signal to the relays to turn on the heating elements. The two relays in the CS-14 last longer than the single relay of competitive kilns because of the reduced amperage going through each relay.
        </p>
        <strong>Convenient Features</strong>
        <p>
        For your convenience, flip the switch on the front panel to turn off power to the controller when the kiln is not in use. The large, comfortable wooden lid and kiln handles stay cool.
        </p>
        <p>
            The CS-14 is painted with a durable high temperature, water-base finish. Paragon chose water-base paint because of the low emissions during spraying. This creates a safer working environment for our employees and cuts down on pollution.
        </p>
        <p>
            Note: The bead door and high-temperature glass window are not available on the CS-14D. However, they are available on the CS-14S.
        </p>
    </div>
</div>

<?php
    specifications('Top Loading Square', ['Sides', 4], .73, 14, 14, 14, [27,28,15], [33,31,24], 157, 1700, 15, 1, 1800, '5-15R', 20, '12', 'Y', 'Y', 120, 60, '5-15RW100.jpg', 'This Kiln Ships Via Truck');
?>

<hr class="my-4">

<?php 
    include 'scripts/shortFusionOpts.php';
?>

<hr class="my-4">


<?php
    require_once ROOT .'/mobile/includes/rightcol.php';
?>