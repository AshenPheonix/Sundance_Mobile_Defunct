<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Torch Foot Pedal';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing Display Stands,Fused and Slumped Projects,Bullseye Equipment, Kiln work,GLASS FUSING, Sundance Art Glass Center, California, Bullseye,COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
require_once(ROOT .'/mobile/includes/header.php');
require_once DBROOT.'pedals.php';
?>

<div class="row">
    <div class="col">
        <h1>
            Foot Pedals
        </h1>
    </div>
</div>

<?php
    foreach ($pedals as $key => $value) {
        $value->display('adam');
    }
?>
<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>The Rock It</h5>
        <img src="images/Rocket_5.jpg" alt="The Rock It 05 Pedal reflecting a brassy color" class="img-fluid my-2">
        <p>
            The Rock-It 05 pedal is a non-electric on/off control for the outer fire of any two stage, four inlet torch. This pedal is
            designed for constant outer fire usage of one hour or more, as well as rapid on/off operation. The redesigned
            Rock-It is constructed with top quality, high volume valves. You can expect years of trouble free usage with
            the new long lasting valves.
        </p>
        <p>
            The pedal is Non-electric. The opening and closing of the valves is thus a technically sound, mechanical operation
        </p>
        <p>
            The Rock-It has a maintain switch. The maintain switch will keep the outer fire on until switch is depressed a second time. This permits freedom of movement while working.
        </p>
        <p>
            The foot pedal body offers durability and professionally engineered design. The low profile design insures
            ease of use and supports appropriate posture. As a safety feature, the gas lines are located 3 inches from
            the floor and the pedal's bottom surface. The unit acts with immediate response. The on and off operations
            of the torch are instantaneous after the switch is activated.
        </p>
        <p>
            The Rock-It is compatible with all 2 stage/4 port torches, including the following: Carlisle CC, Carlisle CC+, Phantom,
            Mirage, Delta Elite, and all 4 Port Bethlehem Torches. All torches must have four inlet ports
        </p>
    </div>
</div>

<?php
    foreach ($pedals as $key => $value) {
        $value->display('rockit');
    }
?>
<?php include_once ROOT.'/mobile/includes/rightcol.php';