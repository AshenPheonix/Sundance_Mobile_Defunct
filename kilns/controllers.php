<?php 
 define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
 $title="Kiln Controllers Temperature Guages and Pyrometers - Sundance Art Glass Center";
 $description="Kiln Controllers Temperature Guages and Pyrometers - Sundance Art Glass Center";
 $keywords="Kiln Controllers Temperature Guages and Pyrometers - Sundance Art Glass Center";
 require_once(ROOT ."/mobile/includes/header.php");
 require_once DBROOT.'controllers.php';
 require_once DBROOT.'pyrometers.php';
?>

<div class="row">
    <div class="col-12">
        <h1>Controllers for Kilns</h1>
        <h4>3 Key Pad Digital Controller</h4>
    </div>
    <div class="col-6">
        <img src="images/sentry-express-40-controller-1.jpg" alt="The  controller" class="img-fluid">
    </div>
    <div class="col-6">
        <img src="images/sentry-express-40-controller-2.jpg" alt="controller face" class="img-fluid">
    </div>
</div>
<div class="row">
    <div class="col">
        <dl class="text-left">

            <dt>Single Speed</dt>
            <dd>
                This mode is quick and easy for simple firings that need only one speed and fired to one temperature.
                Choose from 5 speeds, and enter the temperature.
            </dd>

            <dt>Ramp-Hold</dt>
            <dd>
                This mode lets you program custom firings with up to 8 steps or segments. Fire thick, large glass
                pieces such as bowls and platters. Slow the cooling through the annealing range. Trade firing "recipes"
                with friends.
            </dd>

            <dt>Skip Segment</dt>
            <dd>
                Skips past a segment during Ramp-Hold without having to stop the kiln firing to reprogram.
            </dd>

            <dt>Hold(soak)</dt>
            <dd>
                Maintains a specific temperature in both Single-Speed and Ramp-Hold modes. Use hold to give yourself
                greater control of the final stage in fusing or slumping.
            </dd>

            <dt>Add Hold Time</dt>
            <dd>
                During firing in either mode without having to stop the kiln to reprogram.
            </dd>

            <dt>Change Target Temperature</dt>
            <dd>
                Allows changing the temperature in Ramp-Hold mode without having to stop the kiln to reprogram it.
            </dd>

            <dt>Program Review</dt>
            <dd>
                Lets you check the program you are about to fire is correct
            </dd>

            <dt>Temperature Alarm</dt>
            <dd>
                You can make an alarm sound when the kiln reaches specific temperatures. Set the alarm to remind
                yourself to check the kiln before the expected shutoff time so that you can watch the glass as it
                reaches the final stages of fusing.
            </dd>

            <dt>Storage Memory</dt>
            <dd>
                Ramp-Hold mode can store 4 different programs
            </dd>

            <dt>
                Delay
            </dt>
            <dd>
                You can set it to turn on the kiln at a later time to suit your schedule.
            </dd>

            <dt>Temperature Display</dt>
            <dd>
                Temperature is displayed throughout firing and cooling in your choice of &#8457; or &#8451;.
            </dd>

            <dt>Thermocouple Offset</dt>
            <dd>
                Adjusts the thrmocouple readout.
            </dd>

            <dt>
                Instruction Manual
            </dt>
            <dd>
                Written in plain English. This colorful, illustrated manual will guide you through each step
            </dd>

            <dt>
                Quick Start Guide
            </dt>
            <dd>
                This will show programming instructions for both firing modes. Place it on the wall near your kiln for
                easy reference.
            </dd>

            <dt>Error Messages</dt>
            <dd>
                Report mechanical problems such as a disconnected thermocouple, stuck relay, temporary power failure
                during firing, or broken element.
            </dd>

            <dt>
                12-Month Warranty
            </dt>

            <dt>LED Lights</dt>
            <dd>
                show whether you are in a program, review, and firing mode
            </dd>

            <dt>
                Quick Release Connectors
            </dt>
            <dd>
                on the back of the controller permit fast removal without tools.
            </dd>
        </dl>
    </div>
</div>

<div class="row my-3">
    <div class="col">
        <a href="/kiln/SenXpresSS_RH_8seg_06.pdf">Full Manual On Operation of Controller</a><br><br>
        <a href="quick-start.php">Click here for a Quick Start Guide on how to use the 3 key
            controller</a>
    </div>
</div>

<?php
    foreach ($controllers as $key => $value) {
        $value->display('3key');
    }
?>

<hr class="my-2">

<div class="row">
    <div class="col">
        <h2>12 Key Pad Digital Controller</h2>
        <img src="images/kiln-controller-paragon-tnfii-sm.jpg" alt="12 key controller" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            The new TNFII latest generation control system! For convenience, order a digital controller. The Paragon
            digital controller does 15 things...
        </p>
        <dl class="text-left">
            <dt>
                Temperature Display
            </dt>
            <dd>
                Throughout firing and cooling in your choice of °F or °C
            </dd>
            <dt>
                Firing Cost
            </dt>
            <dd>
                Enter the cost of electricity and kiln amperage in Options. After the kiln fires to completion, press
                the 8 key for the cost of electricity to fire that load.
            </dd>
            <dt>
                Rate
            </dt>
            <dd>
                At the factory, we can configure a controller for you to show rate as degrees of temperature change per
                hour (default), degrees of temperature change per minute, or elapsed time needed to reach a
                temperature.
            </dd>
            <dt>
                Stop/Back Key
            </dt>
            <dd>
                Goes back one step with each key press during programming. use this feature to correct programming
                errors.
            </dd>
            <dt>
                Add Time Key
            </dt>
            <dd>
                Adds five minutes to a temperature hold with each key press during firing. Helpful for glass with holds
            </dd>
            <dt>
                Program Review
            </dt>
            <dd>
                Lets you check that the program you are about to fire is correct
            </dd>
            <dt>
                Audible Temperature Alarm
            </dt>
            <dd>
                Reminds you to close a vented lid or check the kiln near the end of firing.
            </dd>
            <dt>
                Includes a 30 Month Warranty
            </dt>
            <dt>
                Thermocouple Selection
            </dt>
            <dd>
                The Sentry 2.0 can operate types K,S, or R thermocouples
            </dd>
            <dt>
                Error Messages
            </dt>
            <dd>
                Reports Mechancial problems such as disconnected thermocouple, bad voltage, or temperature deviation.
            </dd>
            <dt>
                14 Segment Display
            </dt>
            <dd>
                Even easier to read than a 7 segment display
            </dd>
            <dt>
                Program Safety Lock
            </dt>
            <dd>
                Locks the program in active memory. Gives you peace of mind.
            </dd>
            <dt>
                Delay Fire
            </dt>
            <dd>
                Set the time of firing. Kiln will fire at that time.
            </dd>
            <dt>
                LED Lights
            </dt>
            <dd>
                Shows when the relays are powered
            </dd>
            <dt>
                Quick Release Molex Connectors
            </dt>
            <dd>
                Permits fast removal of the controller. Replacing the Sentry 2.0 or Sentry Xpress takes only minutes
            </dd>
        </dl>
        <a href="/kiln/im167.pdf">
            <p class="mt-3">
                Click here for the complete manual
            </p>
        </a>
        <a href="12-keyFeatures.php">
            <p class="mt-3">Click here for a more detailed list of features</p>
        </a>
    </div>
</div>

<?php
    foreach ($controllers as $key => $value) {
        $value->display('12-key');
    }
?>

<hr class="my-3">
<div class="row">
    <div class="col">
        <h3>Dial Controller</h3>
        <img src="images/pcb1lg.jpg" alt="The Paragon Power Control Box Infinite Switch" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        Simply plug any kiln into this controller and then plug this controller in a standard wall socket. The type of
        controller is an ICS, Infinite Control switch. (Not a rheostat type device) This means when you set it at say
        50%, the power will be on half the time and off the other half of the time. When the power is flowing it is
        flowing at full power. It works with all 120 volt HotGlass brand Kilns. Although most HotGlass brand kilns
        already come with this type of control switch.
    </div>
</div>
<?php
    foreach ($controllers as $key => $value) {
        $value->display('ICS');
    }
?>
<div class="row">
    <div class="col">
        <p>
            Use this PCB-1 only if you have a kiln without any controller like the Quick Fire or Rapid Fire brand kilns. How to use a PCB1 or ICS control switch. A pyrometer is required if you want to:
        </p>
        <ul class="text-left">
            <li class="disc">Read the Temperature of a Kiln</li>
            <li class="disc">Hold the Kiln at a particular temperature</li>
        </ul>
        <p>
            When you want to set your kiln at a particular temperature, set the dial at any setting, say 3. Wait an hour and then read the temperature of the kiln. Make a note what the kiln temperature will be at that setting of 3. If you require a higher temperature, set the dial at a higher setting. Wait a half hour and read the new temperature. Continue this process, adjusting the dial up or down until you arrive at your desired temperature. Next time you need that temperature, you will know exactly where to set your dial. Dial settings will vary between cold and hot days. This type of control takes some babysitting. If this type of control system will not work for you than we recommend the full digital controller below.
        </p>
        <img src="images/PCB1-2lg.jpg" alt="How to Plug this ing" class="img-fluid">
    </div>
</div>

<?php include_once ROOT.'/mobile/kilns/pyroInner.php'; ?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';