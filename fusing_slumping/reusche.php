<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Stained Glass Paint Supplies for Glass - Sundance Art Glass Center';
    $description='Glass paints and stains supplies. Reusche paints and stainers of many colors opaque and transparent, blending options, even lead-free nad cadmium-free paints. International shipping.- Sundance Art Glass Center';
    $keywords='Stained Glass Paint Supplies for Glass, glass stainers, enamel stainers, reusche paints, vitreous, ground glass pigment oxide powder crushed glass gum arabic firing transparent opaque luster oxhair tracing brush matting pencil weather resistant silver nitrate gomboge gum bulk quantity wholesale blending blendable bend bending lead free cadmium free shading highlighting - Sundance Art Glass Center';
    $abstract='Stained Glass Paint Supplies for Glass - Sundance Art Glass Center';
    $location='glass-paints-reusche.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once ROOT.'/mobile/includes/dbs/paints.php';
    function remember()
    {
        ?>
            <div class="row">
                <div class="col">
                    <strong>Please remember our <span class="red">$20</span> minimum on merchandise per order.</strong><br>
                    <strong class="red my-2">Reusche Paint orders can take 10 business days to process before being shipped</strong>
                </div>
            </div>
        <?php
    }
?>

<div class="row">
    <div class="col">
        <h1>Reusche Glass Paints</h1>
        <p>
            Add a personal touch to your glass art with paints, enamel stainers, glass stainers and more! Reusche paints come in a great variety of options such as silver stains, transparent paints, blendable bending opaque colors, and lead-free and cadmium-free colors.
        </p>
    </div>
</div>

<div class="row border">
    <div class="col-12 border my-2">
        <a href="http://www.sundanceglass.com/PDF/reuche.pdf" class="btn bg-chrome" style="border:outset gray 3px;">Tap here to download a PDF<br>Color chart of these paints</a>
    </div>
    <div class="col">
        <img src="images/sgpaintlg.jpg" alt="Paint Demonstration" class="img-fluid"><br>
        <strong>Vitreous Paints & Stains:</strong>
        <p>
            Vitreous Paint is a mixture of ground glass and a pigment oxide. These superior glass stains and paints from Reusche are offered in <strong>1 oz. (28.3 gm) packets,</strong> containing powdered colors which may be mixed with water and gum arabic or other mixing agents before application to glass and subsequent kiln firing. 1 ounce covers 300 square inches.
        </p>
       
    </div>
</div>
<hr class="my-2">
<?php
    foreach ($paints as $key => $value) {
        $value->display('brush');
    }
?>
<hr class="my-2">
<div class="row mt-4">
    <div class="col">
        <div class="h5">Tap here for <a href="reusche-kits.php">Reusche Glass Paint Kits</a></div>
    </div>
</div>
<hr class="my-4">

<?=remember();?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <h5 class="red font-weight-bold">
            Glass Stainers
        </h5>
        <p>
            Firing Temperatures 1200° to 1250°F. Not bright, transparent stains, these are basic paints for painting on glass. Opaque colors are limited to black, browns, flesh, reds and grey-greens.
        </p>
        <strong>
            Weather Resistant
        </strong>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('core');
    }
?>
<hr class="my-4">
<?=remember();?>
<hr class="my-4">
<div class="row">
    <div class="col">
        <h5>Blend-able Bending Colors</h5>
        <p>
            Can be used in Fusing and Slumping Projects. Firing Temperature: 1160° to 1300°F. 
        </p>
        <p>
            Unique because they liquefy before the glass reaches bending temperature. Opaque colors remain fluid without running through the glass bending or slumping stage. They do not burn out or change color (as is common with some transparent colors, particularly cadmium or selenium colors: red, orange, maroon, etc.). 
        </p>
        <p>
            Bending colors are stable through the 1160° - 1300°F. firing range. May be fired while glass is flat. Colors can be lightened by adding White (7410-D201581). Adding other colors will achieve entirely different colors. 
        </p>
    </div>
</div>
<?php
    foreach ($paints as $key => $value) {
        $value->display('bendable');
    }
?>
<hr class="my-2">
<?=remember();?>
<hr class="my-2">

<div class="row">
    <div class="col">
        <h4 class="red font-weight-bold">Transparent Glass Paints</h4>
        <p>
            Firing Temperature: 1050° to 1080°F.
        </p>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('transparent');
    }
?>
<hr class="my-2">
<?=remember();?>
<hr class="my-2">
<div class="row">
    <div class="col">
            <h4 class="red font-weight-bold">Reusche Glass Stainers Enamels</h4>
        <p>
            firing Temperature 1050&deg;-1080&deg;F
        </p>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('enamel');
    }
?>

<hr class="my-2">
<?=remember();?>
<hr class="my-2">
<div class="row">
    <div class="col">
        <h4 class="font-weight-bold red">Silver Stains</h4>
        <p>
            Firing Temperature: 1050° to 1250° F. Contains Silver Nitrate and Gamboge gum.
        </p>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('silver');
    }
?>

<hr class="my-2">
<?=remember();?>
<hr class="my-2">
<div class="row">
    <div class="col">
        <h4 class="red font-weight-bold">Lead-Free and Cadmium-Free Glass Paints</h4>
        <p>
            All lead-free and cadmium-free glass paints by Reusche. Colors may be intermixed and fired at temperatures of 1150° to 1400°F
        </p>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('leadfree');
    }
?>

<hr class="my-2">
<?=remember();?>
<hr class="my-2">

<div class="row">
    <div class="col">
        <h4 class="red font-weight-bold">Enamel Stainers</h4>
        <p>
            Firing Temperature: 1050° to 1080°F. <br>
            Enamels become transparent when fired at lower temperatures. Not as durable as glass stainers weather resistant colors.
        </p>
    </div>
</div>

<?php
    foreach ($paints as $key => $value) {
        $value->display('stainers');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';