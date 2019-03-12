<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Crucibles Glass Crucibles - Sundance Art Glass Center';
    $description='Crucibles Glass Crucibles Pot Melt Vitrograph Glassblowing';
    $keywords='Crucibles Glass Crucibles Pot Melt Vitrograph Glassblowing';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require_once DBROOT .'crucibles.php';
?>

<div class="row">
    <div class="col">
        <h1>Crucibles</h1>
        <img src="images/crucibles-glass.JPG" alt="A stack of Cruicibles" class="img-fluid">
        <p>
            All crucibles on this page are made with high temperature material and will be able to melt glass and most metals. Diameters are outside diameters. Good to 2400 °F - Fused Silica.
        </p>
        <p>
            <a href="/blowWEB/crucible-specs.jpg" target="_blank">Click Here</a> for specifications on crucibles.
        </p>
    </div>
</div>

<?php
    foreach ($crucibles as $key => $value) {
        $value->display('crucible');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h4 class="red">Shipping Disclaimer</h4>
        <p>
        We require that the shipping costs for all orders including C4 Crucibles (and larger) be calculated by our customer service representatives; the shipping that you are quoted in check out may not necessarily reflect the actual shipping cost of your order, as such large crucibles are fragile and must be shipped separately. You will be contacted by one of our customer service representatives once your order has been processed and your shipping costs have been figured accurately.
        </p>
    </div>
</div>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h4>Crucible Catch Dish</h4>
        <p>
            <img src="images/crucibledishsm.JPG" alt="Crucible with dish" class="img-fluid float-left">
            Fits all of the above crucibles - made from the same high temperature crucible material.<br><br>
            Fused Silica-Inevitably glass will drip down the sides of the crucible. When molten glass comes in contact with the kiln fire brick, it will slowly eat away the brick. Even coating the bottom of the kiln with kiln wash or covering with fiber paper will not help much. A good way to protect the bottom of the kiln is by placing as large as possible a kiln shelf underneath the crucible to catch the flowing glass.
        </p>
        <p>
            Better yet, set the smaller sized crucible on top of a crucible catch dish as pictured (listed below). It can take the high temperatures you will be firing to. The two will "bond" together with the dripped glass, which is OK. Eventually all crucibles break and if it is full, it will flood the bottom of the kiln and you will have to replace the bottom bricks. Unfortunately this is just normal maintenance for crucible kilns. Using a catch dish alleviates these kinds of headaches
        </p>
    </div>
</div>

<?php 
foreach ($crucibles as $key => $value) {
    $value->display('dish');
}
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <p>
            To Calculate how many pounds of glass a container holds, multiple 5 times number of liquid quarts.
        </p>
        <p>
            Soda/Lime glass weighs 150 pounds per cubic foot.
        </p>
    </div>
</div>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5 class="red">
            Please Take Note...
        </h5>
        <p class="mt-4">
            There is a problem with heating ceramic material. It may break or crack due to thermal shocking. As ceramic or most all materials heat up it also expands. If the entire piece heats uniformly, it will also expand uniformly. No problem with cracking. But if the entire piece is heating unevenly, it will also expand unevenly. One end is expanding faster then the other and it could crack (called thermal shocking).
        </p>
        <p>
            These crucibles are made from a material that is less likely to crack from thermal shocking. But still can and eventually will crack thus flooding the bottom of your kiln - yuk. A way to help prevent thermal shocking is to heat the crucible slowly, thus keeping all parts evenly heated and therefore expanding evenly. How slow you ask - a big question, depends on the size of the crucible - how evenly your kiln heats - etc., etc... If you force me to give you a speed then I will give you a very conservative speed of 200°F per hour.  And it is not only heating, but cooling that can thermal shock your crucible. If your crucible is empty or nearly empty, then letting your kiln naturally slow cool should be good enough. Another big reason crucibles crack is if you are cooling a crucible that is partially full of glass. It is more sensitive to thermal shocking. Think about it, if the bottom half of the crucible is a large mass of glass and ceramic, it will cool slower and then shrink slower than the thinner lip of the crucible which means possible cracking. Most glassblowers empty out the crucible before cooling. Good luck!
        </p>
        <img src="images/bandw50spull.jpg" alt="Black and White of a glassworker pouring glss" class="img-fluid">
    </div>
</div>

<hr class="my-4">

<div class="row">
    <div class="col">
        <strong>Some crucible Configurations for an 8 Inch&sup2; Kiln.</strong><br>
        <img src="images/IMG_1123.JPG" alt="crucibles in kiln" class="img-fluid m-1">
        <img src="images/IMG_1126.JPG" alt="crucibles in kiln" class="img-fluid m-1">
        <img src="images/IMG_1125.JPG" alt="crucibles in kiln" class="img-fluid m-1">
        <img src="images/IMG_1124.JPG" alt="crucibles in kiln" class="img-fluid m-1">
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';