<?php 
 	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	$title='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	$description='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	$keywords='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	include_once(ROOT .'/mobile/includes/header.php'); 
?>
<style>
    ol li {
        list-style-position: outside;
    }
</style>
<div class="row">
    <div class="col">
        <h1>
            Paragon Sentry Xpress Quick Start Guide
        </h1>
        <p>
            <strong>Please read the instruction manual for more detailed information</strong>. For a copy, <a href="/kiln/SenXpresSS_RH_8seg_06.pdf">Click
                Here</a>.
            Press START/STOP at any time to stop a firing. To return to IdLE after the firing is completed, press
            START.
        </p>
        <p>
            Single-Speed firest to a temperature, holds if needed, then shuts off. Instructions:
        </p>
        <ol class="text-left">
            <li>
                From IdLE, Press START
            </li>
            <li>
                Select a Firing speed. Do this by pressing the up arrow key repeatedly until the desired firing speed
                appears
                <ul>
                    <li>SPd1 = 200 &deg;F or 111&deg;C per hour</li>
                    <li>SPd1 = 500 &deg;F or 277&deg;C per hour</li>
                    <li>SPd1 = 1000 &deg;F or 555&deg;C per hour</li>
                    <li>SPd1 = 1500 &deg;F or 833&deg;C per hour</li>
                    <li>SPd1 = Full Power</li>
                </ul>
            </li>
            <li>
                Use the Arrow Keys to enter the emperature you are firing to. Press START
            </li>
            <li>
                Use the Arrow keys to enter the hold time (hours.minutes). If not needed, enter 00.00. Press START.
                Strt will appear on the screen.
            </li>
            <li>
                Press START again. -On- will appear. The kiln is firing.
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <h4 class="red">Ramp-Hold Instructions</h4><br>
        <strong>Fires up to 8 speeds and temperatures (segments). Controls heating and cooling.</strong>
        <ol class="text-left">
            <li>
                Press the Up Arrow key. Select Pr01, Pr02, Pr03, or Pr04. Press Start
            </li>
            <li>
                rA1 will appear. Use the arrow keys to enter the firing rate in degrees per hour for segment
                one(1&deg;=slowest, 1799&deg;F/999&deg;C=max). Press START.
            </li>
            <li>
                &deg;F1 or &deg;C1 will appear. Use the arrow keys to enter the temperature you are firing to. Press
                START.
            </li>
            <li>
                HLd1 will appear. Use the arrow keys to enter the hold time (hours.minutes). If unneeded, enter 00.00.
                Press START.
            </li>
            <li>
                Continue entering the values for the segments as needed. when rA appears for the next segment you don't
                need, select 0000. This will zero out remaining segments. Then press START. Strt will appear.
            </li>
            <li>
                Press START again. -On- will appear. The kiln will fire.
            </li>
        </ol>
    </div>
</div>
<?php
    require_once ROOT.'/mobile/includes/rightcol.php';