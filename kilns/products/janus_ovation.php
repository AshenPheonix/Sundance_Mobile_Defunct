<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='AIM Glass Fusing Kilns - Sundance Art Glass';
    $description='AIM Glass Fusing Kiln GF10BD - Sundance Art Glass';
    $keywords='AIM Glass Fusing Kiln GF10BD Glass Fusing Kilns - Sundance Art Glass';
    $abstract='AIM Glass Fusing Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-janus.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Janus Ovation Glass Fusing Kiln by Paragon</h1>
        <img src="../images/Janus_Oval_C2.jpg" alt="Janus Ovation kiln" class="img-fluid">
    </div>
</div>

<div class="row mb-2">
    <div class="col-3 flex-text border">
        <p>
            Outside Dimensions
        </p>
        <hr class="my-2">
        <p>
            57" x 39" x 41&frac12;"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Inside Height
        </p>
        <hr class="my-2">
        <p>
            9"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Floor Area for Fusing
        </p>
        <hr class="my-2">
        <p>
            41" x 22"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Volts and Amps
        </p>
        <hr class="my-2">
        <p>
            240 V - 67 Amps
        </p>
    </div>
</div>

<hr class="my-4">

<?php $kiln->purch();?>

<hr class="my-4">

<?php include 'scripts/kilnShipping.php'; ?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>Features of the Janus Ovation Glass/Pottery Kiln</h5>
        <p>
            The Paragon Janus Ovation can fire both pottery and glass. Heating elements are mounted in the top and sidewalls.
        </p>
        <p>
            Select between glass and pottery with the flip of a switch. With the switch in the glass position, heat comes from the top
            elements and the middle sidewall element. With the switch in the pottery position, heat comes from only the sidewall
            elements.
        </p>
        <p>
            In the glass mode, fuse and sag large glass projects placed on a single shelf. In the pottery mode, fire to cone 10. You
            can also fire several shelves of smaller glass pieces in pottery mode.
        </p>
        <p>
            If you have been firing a smaller kiln, you will be amazed at the space inside the Janus Ovation. Fire large projects such
            as bowls or platters in one load. Imagine how many clay or glass pendants you could fire in the Janus Ovation.
            As you can see, production loads can quickly pay for this kiln.
        </p>
        <p>
            Patented dual spring-assisted lid supports transfer the weight of the lid to a massive hinge assembly on the back of the
            kiln. This reduces the stress on the kiln wall to give your kiln the long life that Paragon kilns are famous
            for. The truss and floating lid allow expansion of the lid. Ask competitors if their lid spring system includes
            a floating lid.
        </p>
        <p>
            The elements in the lid are mounted in a firebrick ball groove that eliminates element pins. The element coils are wider
            than the groove opening, so the elements stay in place without pins. The groove dissipates heat efficiently.
            The lid element grooves and inner lid surface are coated for long life.
        </p>
        <p>
            Will you anneal glass for long periods in your Janus Ovation? Then you should order the mercury relay upgrade. The mercury
            relays found on our large industrial kilns outlast mechanical relays. The life of the quiet, reliable mercury
            relay has been measured in millions of on/off cycles. Please call for a price on the mercury relay upgrade.
        </p>
        <p>
            The patented control box on the Janus Ovation opens forward for easy maintenance. A folding support arm holds the box in
            the open position. The control box is finished in durable high temperature, blue water-base paint. We chose water-base
            paint because of the low emissions during spraying. This creates a safer working environment for our employees
            and cuts down on pollution.
        </p>
        <p>
            A heavy galvanized steel base covers the reversible brick bottom completely. It folds up under the stainless case on all
            sides to strengthen the firing chamber. This is one more assurance that your Paragon kiln is built to last.
        </p>
        <p>
            Two kiln stands are included at no extra charge. The stands are complete with mar-proof plastic feet and tall enough to accommodate
            the optional Orton Master Vent.
        </p>
        <p>
            Wires are fastened to the elements with heat-dissipating connectors refined and proven over many years in Paragon kilns.
            Crimp less element connectors are easy to install and are included with replacement elements.
        </p>
        <p>
            And, of course, the Paragon Janus Ovation is made in America by skilled workers. Many of them have been with Paragon for
            over a decade
        </p>
        <p>
            The digital Sentry 2.0 includes two modes: Cone-Fire with programmed slow cooling and 18-Segment Ramp-Hold. It is manufactured
            by the Orton Ceramic Foundation exclusively for Paragon.
        </p>
        <p>
            You will be amazed at the convenience of digital firing. The reliable solid-state Sentry controller continually monitors
            the firing so you can spend your time productively without closely watching the kiln. (Please remember, however,
            to check the kiln during firing and to monitor it near the expected shutoff time.) The sealed touch pad keeps
            out dust and is easy to wipe clean. The controller is mounted near the top of the switch box for easy operation.
            For your convenience, operating instructions are silk-screened onto the switch box
        </p>
        <p>
            The controller has powerful features that you will enjoy using. Yet we have also worked hard to make the controller user-friendly.
        </p>
        <p>
            Do you ever wonder how much electricity your kiln uses? The digital controller can figure this for you with the press of
            a button. Find out how little a kiln actually costs to fire. Learn to conserve energy by experimenting with firing
            speed, load density, etc.
        </p>
    </div>
</div>

<?php
    specifications('Top Loading Square', ['Sides', 10], 11.4, 22.5, 41.5, ['Width', 22.5], [57, 39, 41.5], [60, 47, 41], 550, 2350, 67, 1, 16000, 'Direct', 70, 4, 'Y', 'N', 240, 60, null, 'This Kiln Ships via Truck');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';