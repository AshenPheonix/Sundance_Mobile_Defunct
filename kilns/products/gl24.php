<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='GL24ADTSDKilns - Sundance Art Glass';
    $description='GL24ADTSD Kiln by Paragon, Table Top Kilns for Glassblowing, Fusing, Beadmaking, Art Clay Silver, PMC, and Ceramics. - Sundance Art Glass!';
    $keywords='GL24ADTSD, Paragon, table top kilns , Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass ';
    $abstract='GL24ADTSD, At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location='GL24ADTSD.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>GL24ADTSD Glass Fusing Kiln From Paragon</h1>
        <img src="../images/GL24ADTSD.jpg" alt="GL24ADTSD Kiln from Paragon" class="img-fluid">
    </div>
</div>

<?php 
    $kiln->purch();
?>

<hr class="my-4">

<?php
    include 'scripts/kilnShipping.php';
?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <h5>Features of the GL-24ADTSD</h5>
        <p>
            Create breathtaking glass in the deluxe GL-24ADTSD Professional Series glass kiln. The GL-24ADTSD is proudly made in America by skilled craftsmen and designed for those whose livelihood depends on glass production. The kiln includes features not found on competitive kilns.
        </p>
        <p>
            For instance, for your peace of mind, mercury relays are standard on this kiln. Relays send power to the elements on command from the digital controller. Mercury relays found on the GL-24ADTSD are industrial-grade and far outlast mechanical relays. The life of the quiet, reliable mercury relay has been measured in millions of on/off cycles.
        </p>
        <p>
            The GL-24ADTSD digital kiln heats from the top, three sides and door for unsurpassed heat distribution. It is 15" high inside with room to bend glass for curved windows or cabinet doors and to repair lampshades. Make huge glass-fused platters. Crack the door to drag a rod across the softened glass or to emboss designs in the surface. Explore small-to-medium sized casting and pâte de verre. Enjoy the glittering beauty of dichroics. Make treasured gifts.
        </p>
        <p>
            Top, Side & Door Elements
        </p>
        <p>
            Use the kiln's side heat for taller projects such as drop-out vases sagged through a ring mold. Side elements, seated in dropped, recessed brick grooves, span the three walls in six horizontal rows.
        </p>
        <p>
            The kiln's door elements offer unsurpassed heat distribution for difficult pieces. (The door, with elements, is always hinged on the right side.)
        </p>
        <p>
            The kiln uses advanced power ratio technology, pioneered by Paragon, to balance the heat between top and side/door elements. Program the digital controller to balance the heat between the top and sides in increments of 10%. (i.e., 100% top - 0% sides, 50% top - 50% sides, 80% top – 20% sides, etc.) Set the heat balance for any combination desired between the top and sides so that the total heat output equals 100%. Imagine the precise control you will have in adjusting the kiln to slump glass or to improve heat distribution over large fused panels.
        </p>
        <p>
            Paragon's GL-series are made for years of rigorous firing, as artists all over America can attest. The insulating firebrick, wrapped in heavy-gauge steel, soak up heat for slow, efficient cooling. A double heat shield and air gap between the kiln and ventilated switch box help keep electrical components cool for long, trouble-free service. Costly heavy-gauge nickel-plated copper wiring is covered with high temperature glass-braided insulation. The thermocouple, which senses temperature inside the kiln, is protected with a high-nickel stainless steel sheath for long life.
        </p>
        <p>
            The GL-series lid elements use an element groove that eliminates element pins. The element coils are wider than the groove opening, so the elements stay in place without pins.
        </p>
        <p>
            The spring-pressure latch and a &frac12;" recess around the edge of the firebrick door keep the door tightly closed. The door remains rock-steady on a heavy hinge shaft. Four hand lifts aid moving. The base is open in the back and slotted to dissipate heat.
        </p>
        <p>
            Watch the red-hot glass through two tapered peepholes, drilled one above the other in the wall opposite the switch box. Peephole plugs are included.
        </p>
        <p>
            You will be amazed at the convenience of digital firing. The reliable solid-state Sentry controller continually monitors the firing so you can spend your time productively without closely watching the kiln. (Please remember, however, to check the kiln during firing and to monitor it near the expected shutoff time.) The sealed touch pad keeps out dust and is easy to wipe clean.
        </p>
        <p>
            Paragon's innovative controller will help you achieve consistent results from one firing to the next. The controller has powerful features that you will enjoy using. Yet we have also worked hard to make the controller user-friendly.
        </p>
        <p>
            Do you ever wonder how much electricity your kiln uses? The digital controller can figure this for you with the press of a button. Find out how little a kiln actually costs to fire.
        </p>
        <p>
            The GL-24ADTSD has a durable high temperature, water-base finish. We chose water-base paint because of the low emissions during spraying. This creates a safer working environment for our employees and cuts down on pollution.
        </p>
    </div>
</div>

<?php
    specifications('Front Loading Square', ['Sides', 4], 4.68, 22.5, null, ['Width', 24], [40.50, 32, 29.5], [46.5, 36, 36.5], 365, 2000, 45, 1, 10800, '6-50R', 50, 6, 'Y', 'N', 240, 60, '6-50R.jpg', 'This Kiln Ships via Truck');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';