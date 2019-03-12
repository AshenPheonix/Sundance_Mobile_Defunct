<div class="row">
    <div class="col">
        <h2>Pyrometers</h2>
        <div class="h5">Digital Pyrometers<br>Take your Kiln's Temperature</div>
        <div class="row">
            <div class="col-6">
                <figure class="figure">
                    <img src="/mobile/kilns/images/7770-sm-5-pyrometer-kiln-temperature.jpg" class="figure-img img-fluid rounded" alt="Pyrometer">
                    <figcaption class="figure-caption text-xs-center">Standard Thermocouple</figcaption>
                </figure>
            </div>
            <div class="col-6">
                <figure class="figure">
                    <img src="/mobile/kilns/images/7771-sm-4-pyrometer-kiln-temperature.jpg" class="figure-img img-fluid rounded" alt="Heavy Duty Thermocouple">
                    <figcaption class="figure-caption text-xs-center">Heavy Duty Thermocouple</figcaption>
                </figure>
            </div>
        </div>
        <p>
            Heavy duty thermocouple is a good thing although it does not have as fast of a response time which is usually not a big deal for us glass workers. Very accurate. These Digital Pyrometers are much more accurate than the above Analog PA1 pyrometers. It is important to set your kiln to the proper temperature for annealing!  Thermocouple wire included. Battery included. Do not let the thermocouple wire touch a live heating element wire.  Pyrometer includes a 36" long thermocouple. 
        </p>
    </div>
</div>

<?php
    require_once DBROOT.'pyrometers.php';
    foreach ($pyrometers as $key => $value) {
        $value->display('pyrometer');
    }
    foreach ($pyrometers as $key => $value) {
        $value->display('thermocouple');
    }
?>

<div class="row">
    <div class="col">
        <p>
            The tip of the thermocouple wire may eventually break. There are two wires in the thermocouple welded at the end. Carefully inspect to see if the two wires are disconnected. 
            If it is disconnected, either: Order a replacement thermocouple, or 
            if you have the ability and the equipment, weld the ends together with your torch. 
            It's a little tricky.
        </p>
    </div>
</div>