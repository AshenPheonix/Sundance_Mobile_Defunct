<?php 
 	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	$title='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	$description='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	$keywords='Kiln Xpress Quick Guide - Sundance Art Glass Center';
	include_once(ROOT .'/mobile/includes/header.php'); 
 ?>
<style type="text/css">
    @import url('/mobile/includes/css/basic.css'); 
    .stylebold {
        font-weight: bold
    }
    
    .styleredcf {
        color: #F00;
    }
</style>
<!-- START content -->
<div class="row">
    <div class="row">
        <div class="col-12 text-center">
            <span class="stylebold styleredcf">Paragon Sentry Xpress Quick Start Guide</span><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            Please read the instruction manual for more detailed information. For a copy, <a href="SenXpresSS_RH_8seg_06.pdf">click here.</a></span><br> Press START/STOP at any time to stop a firing. To return to IdLE after the firing is completed, press
            START. Single-Speed Instructions Fires to a temperature, holds temperature if needed, then shuts off.
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            <ol>
                <li>From IDLE, press START.</li><br>
                <li>To select a firing speed, press the Up Arrow key repeatedly until the desired firing speed appears.
                    <ul>
                        <li class="disc">
                            SPd1 = 200°F or 111°C rate per hour
                        </li>
                        <li class="disc">
                            SPd2 = 500°F or 277°C rate per hour
                        </li>
                        <li class="disc">
                            SPd3 = 1000°F or 555°C rate per hour
                        </li>
                        <li class="disc">
                            SPd4 = 1500°F or 833°C rate per hour
                        </li>
                        <li class="disc">
                            SPd5 = Full Power
                        </li>
                        <li class="disc">
                            Then press START.
                        </li>
                    </ul>
                </li>
                <li>Use the arrow keys to enter the temperature you are firing to and press START.</li><br>
                <li>Use arrow keys to enter the hold time (hours.minutes). (If not needed, enter 00.00). Press START. Strt will appear.</li><br>
                <li>Press START again. -On- will appear. The kiln is firing.</li>
            </ol>
            <br>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-12 text-center">
            <span class="stylebold"><span class="styleredcf">Ramp-Hold Instructions</span><br> Fires up to 8 speeds and temperatures (segments). Controls<br> heating and cooling.</span><br>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-left">
            <ol>
                <li>From IdLE, press START.</li><br>
                <li>Press the Up Arrow key. Select PrO1, PrO2, PrO3, or PrO4.<br> Press START.</li><br>
                <li>rA 1 will appear. Use the arrow keys to enter firing rate<br> (temperature change per hour) for segment 1. (1° = slowest<br> rate. 1799°F/999°C = full power.) Press START.</li><br>
                <li>°F 1 or °C 1 will appear. Use the arrow keys to enter the<br> temperature you are firing to. Press START.</li><br>
                <li>HLd 1 will appear. Use the arrow keys to enter the hold time<br> (hours.minutes). (If not needed, enter 00.00.) Press START.</li><br>
                <li>Continue entering values for the segments needed. When rA<br> appears for the next segment that you don’t need, select 0000.<br> (This will zero out any remaining unused segments.) Then<br> press START. Strt will appear.</li><br>
                <li>Press START again. -On- will appear. The kiln is firing.</li><br>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            A video on programming Ramp-Hold on the 3 Key Controller
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <video width="320" height="260" controls>
                <source src="videos/Sentry_Xpress_Ramp-Hold_Demonstration.mp4" type="video/mp4">
                Your Browser does not support the video tag, please consider updating.
            </video>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            A video on advanced programming techniques on the 3 Key Controller
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <video width="320" height="260" controls>
                <source src="videos/Sentry_Xpress_3-Key_Controller_Advanced_Features.mp4" type="video/mp4">
                Your Browser does not support the video tag, please consider updating.
            </video>
        </div>
    </div>
</div>
<!-- END content -->
<?php include_once(ROOT .'/mobile/includes/rightcol.php');  ?>