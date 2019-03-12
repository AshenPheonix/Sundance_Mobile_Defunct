<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $description='Paragon Glass Fusing Kiln GF10BD - Sundance Art Glass';
    $keywords='Paragon,Glass Fusing Kiln,GF10BD,Glass Fusing Kilns,Aim,heat,olympicSundance Art Glass';
    $abstract='Paragon Glass Fusing Kilns - Sundance Art Glass';
    $location='glass-fusing-kiln-Pearl22.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require 'scripts/fetch.php';
?>

<div class="row">
    <div class="col">
        <h1>Paragon Pearl 22 Glass Fusing Kiln</h1>
        <img src="../images/Pearl22Closed.jpg" alt="Pearl 22 In black" class="img-fluid">
    </div>
</div>

<div class="row mb-2">
    <div class="col-3 flex-text border">
        <p>
            Outside Dimensions
        </p>
        <hr class="my-2">
        <p>
            32" x 37" x 26"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Inside Height
        </p>
        <hr class="my-2">
        <p>
            13"
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Floor Area for Fusing
        </p>
        <hr class="my-2">
        <p>
            22" square
        </p>
    </div>
    <div class="col-3 flex-text border">
        <p>
            Volts and Amps
        </p>
        <hr class="my-2">
        <p>
            240 V - 30 Amps
        </p>
    </div>
</div>

<?php $kiln->purch();?>

<hr class="my-4">

<?php include 'scripts/kilnShipping.php'; ?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>Features of the Pearl-22 Glass Fusing Kiln</h5>
        <p>
            Create breathtaking glass in the deluxe Pearl-22 Professional Series glass kiln. The Pearl-22 is proudly made in America
            by skilled workers. The kiln includes features not found on competitive kilns.
        </p>
        <p>
            The Pearl-22 top lifts away to give access to the shelf area. Air pistons assist in lifting the top. You can place the Pearl
            on a table without an extra stand.
        </p>
        <p>
            “You can compose directly on the kiln shelf, then close the kiln top,” said glass artist Judith Conway, who uses the Pearl-18
            in her Washington, DC studio. “There is no need to balance and carry a heavy kiln shelf from your work table
            over to your kiln, trying to load the shelf in the kiln while not disturbing the glass pieces in your design.”
        </p>
        <p>
            The elements in the top are mounted in pin less element grooves. Since the groove opening is narrower than the element coil,
            the elements stay in place without pins. This is one more reason your Pearl-22 will give you hassle-free firing.
            Enjoy the improved heat distribution of a side element, which is mounted in the top section of the kiln sidewalls.
        </p>
        <p>
            Electrical components are mounted inside the base of the kilns. Costly heavy-gauge nickel-plated copper wiring is covered
            with high temperature glass-braided insulation. The thermocouple, which senses temperature inside the kiln, is
            protected with a high-nickel stainless steel sheath for long life. The Pearl-22 uses the digital 12-key Sentry
            2.0 controller.
        </p>
        <p>
            A mercury relay is standard on this kiln. The relay sends power to the elements on command from the digital controller. The
            mercury relay in the Pearl-22 is industrial-grade and far outlasts mechanical relays. The life of the quiet,
            reliable mercury relay has been measured in millions of on/off cycles.
        </p>
        <p>
            You will be amazed at the convenience of digital firing. The reliable solid-state Sentry controller continually monitors
            the firing so you can spend your time productively without closely watching the kiln. (Please remember, however,
            to check the kiln during firing and to monitor it near the expected shutoff time.) The sealed touch pad keeps
            out dust and is easy to wipe clean.
        </p>
        <p>
            You will be amazed at the convenience of digital firing. The reliable solid-state Sentry controller continually monitors
            the firing so you can spend your time productively without closely watching the kiln. (Please remember, however,
            to check the kiln during firing and to monitor it near the expected shutoff time.) The sealed touch pad keeps
            out dust and is easy to wipe clean.
        </p>
        <p>
            Do you ever wonder how much electricity your kiln uses? The digital controller can figure this for you with the press of
            a button. Find out how little a kiln actually costs to fire.
        </p>
        <p>
            The Pearl-22 has a durable high temperature, water-base finish. We chose water-base paint because of the low emissions during
            spraying. This creates a safer working environment for our employees and cuts down on pollution.
        </p>

        <strong>Features of the Pearl-22</strong>
        <ul class="text-left">
            <li>
                Heating elements in the top of the kiln are mounted in pin less grooves.
            </li>
            <li>
                Heating elements in the top and walls for uniform heating
            </li>
            <li>
                &frac14;” heavy duty sheathed Type-K thermocouple
            </li>
            <li>
                12-key Sentry 2.0 digital controller
            </li>
            <li>
                Safety switch and pilot light
            </li>
            <li>
                Air pistons assist lifting the lid.
            </li>
            <li>
                Louvered switch box, heavy duty wiring
            </li>
            <li>
                Includes a built-in stand.
            </li>
        </ul>
    </div>
</div>

<?php
    specifications('Top Loading Square', ['Sides', 4], 3.64, 13, 22, ['Width', 22], [32, 37, 26], [36, 40, 38], 321, 1700, 30, 1, 7200, '6-30R', 40, 8, 'Y', 'Y', 240, 60, '6-30R.jpg', 'This Kiln Ships Via Truck');
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';