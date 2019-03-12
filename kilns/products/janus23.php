<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Janus 23 Kilns - Sundance Art Glass';
    $description='Janus 23  Kiln by Paragon, Table Top Kilns for Glassblowing, Fusing, Beadmaking, Art Clay Silver, PMC, and Ceramics. - Sundance Art Glass!';
    $keywords='Janus 23, Paragon, table top kilns , Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass ';
    $abstract='Janus 23, At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    require_once(ROOT .'/mobile/includes/header.php');
    require 'scripts/fetch.php';
?>

<div class="row mb-4">
    <div class="col">
        <h1>Table Top Kilns</h1>
        <h4>
            Pottery, Ceramics, and Glass Multipurpose
        </h4>
        <img src="../images/Janus23.jpg" alt="Janus23 Kiln" class="img-fluid">
    </div>
</div>

<?php
    $kiln->purch();
?>

<hr class="my-4">

<?php include 'scripts/kilnShipping.php'; ?>

<div class="row mt-4">
    <div class="col">
        <h4>
            Features of the Janus-23 Glass/Pottery Kiln
        </h4>
        <p>
            Imagine the glass you could sag, slump, and fuse with this kiln. Make small bowls, pendants, earrings, cufflinks, and even bracelets in clay or glass. Make treasured gifts. When you own a Paragon kiln, you can experiment with new ideas to your heart's content.
        </p>
        <p>
            The Paragon Janus-23 can fire both pottery and glass. Heating elements are mounted in the lid and sidewalls. Select between glass and pottery with the flip of a switch. With the switch in the glass position, heat comes from the top elements and the middle sidewall element. With the switch in the pottery position, heat comes from only the sidewall elements.
        </p>
        <p>
            In the glass mode, fuse and sag large glass projects placed on a single shelf. In the pottery mode, fire to cone 10. You can also fire several shelves of smaller glass pieces using the pottery mode.
        </p>
        <p>
            The elements in the lid are mounted in a firebrick "ball" groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins. The groove dissipates heat efficiently.
        </p>
        <p>
            The lid on the Janus-23 is easy to lift with the exclusive, patented Paragon spring counter-balance. For easier maintenance, we use 2" high blank wall bricks in the top row. Since the brick is without element grooves, it is less susceptible to damage during loading.
        </p>
        <p>
            Will you anneal glass for long periods in your Janus-23? Then we recommend the mercury relay upgrade. The mercury relays found on our large industrial kilns outlast mechanical relays. The life of the quiet, reliable mercury relay has been measured in millions of on/off cycles. Please call for a price on the mercury relay upgrade.
        </p>
        <p>
            The patented control box on the Janus-23 opens forward for easy maintenance. A folding support arm holds the box in the open position.
        </p>
        <p>
            The Janus-23 control box is finished in a durable high temperature, water-base blue paint. We use water-base paint because of the low emissions during spraying. This creates a safer working environment for our employees and cuts down on pollution.
        </p>
        <p>
            Wires are fastened to the elements with heat-dissipating connectors refined and proven over many years in Paragon kilns. Elements are coiled from the finest high-temperature wire available.
        </p>
        <p>
            The thermocouple is protected with a high-nickel stainless steel sheath for long life.
        </p>
        <p>
            A kiln stand is included at no extra charge. The stand is complete with mar-proof plastic feet.
        </p>
        <p>
            Large, tapered peepholes offer a wide view of the firing chamber with little heat loss. The peepholes, both sides of the lid and top rim of sidewall firebrick are hardened and sealed with a special refractory coating to protect the ware from dust.
        </p>
        <p>
            And, of course, the Paragon Janus-1613 is made in America by skilled workers. Many of them have been with Paragon for over a decade.
        </p>
        <p>
            The digital Sentry 2.0 includes two modes: Cone-Fire with programmed slow cooling and 18-Segment Ramp-Hold. Manufactured by the Orton Ceramic Foundation exclusively for Paragon.
        </p>
        <p>
            You will be amazed at the convenience of digital firing. The reliable solid-state Sentry controller continually monitors the firing so you can spend your time productively without closely watching the kiln. (Please remember, however, to check the kiln during firing and to monitor it near the expected shutoff time.) The sealed touch pad keeps out dust and is easy to wipe clean.
        </p>
        <p>
            The controller has powerful features that you will enjoy using. Yet we have also worked hard to make the controller user-friendly.
        </p>
        <p>
            Do you ever wonder how much electricity your kiln uses? The digital controller can figure this for you with the press of a button. Find out how little a kiln actually costs to fire. Learn to conserve energy by experimenting with firing speed, load density, etc.
        </p>
        <ul class="text-left">
            <li class="disc">
                Glass/Pottery Selection Switch
            </li>
            <li class="disc">
                3" Insluating Firebrick Walls
            </li>
            <li class="disc">
                Sidewall elements in Dropped, Recessed Brick Grooves are Easy to Replace
            </li>
            <li class="disc">
                Tapered Peepholes for a wide view
            </li>
            <li class="disc">
                A steel floor pan supports the entire brick bottom of each kiln
            </li>
            <li class="disc">
                Tapered peepholes for a wide view
            </li>
            <li class="disc">
                A steel floor pan supports the entire brick bottom of each kiln
            </li>
            <li class="disc">
                One year limited warranty
            </li>
            <li class="disc">
                Available in 240, 200, 208, or 380volt, 50 or 60 hertz, single or 3 phaze
            </li>
            <li class="disc">
                Easy Access Control Box with Folding Support Arm.
            </li>
            <li class="disc">
                Since the Janus-23 is designed for porcelain, it also easily fires ceramics, china paint, decals, gold and, of course, glass
            </li>
        </ul>
    </div>
</div>

<?php
    specifications('Top Loading Round', ['Sides', 10], 4.64, 22.5, null, 22.5, [30.5, 44, 39.50], [37, 42,39], 308, 2350, 37, 1, 8919, '6-50P', 50, 6, 'Y', 'N', 240, 60, null, 'This Kiln Ships Via Truck');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';