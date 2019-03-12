<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Effetre - Moretti Glass Rods for Flameworking &amp; Glass Beadmaking - Sundance Art Glass';
$description='Effetre - Moretti Glass Rods for Flameworking & Glass Beadmaking time honored maker of fine glass- Sundance Art Glass';
$keywords='Moretti Effetre Double Helix Glass Rod Flameworking Lampworking Glassblowing Beads Glass Sculptures Glass Beadmaking Sundance Art Glass Glassblowing Pipes Glass Blowing Glass Sculptures Sculpturing Glass Rods';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$location='effetre-moretti-glass-rods-COE104-1.php';
include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Effetre Moretti Glass Rod</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        Melt these "soft" glass rods with a torch to make beads, sculptures, buttons, marbles, or fuse them together with the compatible, flat clear sheets. These rods are COE 104. Colors shown are not exact. The glass is not streaky as shown in the pictures.
        All colors are solid. Average 5 to 6 mm thickness (some of the "hand pulled" colors are often thinner). A Quarter pound is often more and occasionally a little less.
    </div>
</div>
<br>
<hr>
<br>
<div class="row border border-dark border-right-0 border-top-0 border-left-0">
    <div class="col">
        <p class="font-weight-bold">
            Effetre Moretti Transparent Rods<br>
            <br> 1/4 pound packs are comprised of 13" cut rods. It's okay to mix with pastels and other types of Effetre rods.
        </p>
    </div>
</div>

<?php
    include_once DBROOT.'effetre.php';
    foreach ($trans as $key => $value) {
        $value->display();
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <p>Striking means that the color of the rod will change when heated. Rods are usually much lighter in color before heating</p><br>
    </div>
</div>
<div class="row">
    <div class="col">
        <p class="font-weight-bold" id="black">Why is Black considered transparent?</p>
        <br>
        <p>
        In glass, black is technically considered a transparent because in all glass brands "black" is 
made of a dense, dark transparent glass that prevents the transmission of light, which makes it 
appear black. Black in and of itself is not technically a color (rather, it is a complete lack thereof),
so other colors must be manipulated in such a way so as to resemble it. Effetre Moretti, for example,
makes their black glass with a very dark transparent purple.
        </p>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col font-weight-bold">Effetre Moretti Pastels</div>
    <br>
</div>

<?php
    foreach ($pastels as $key => $value) {
        $value->display();
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <p>Striking means that the color of the rod will change when heated. Rods are usually much lighter in color before heating</p><br>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col font-weight-bold">Effetre Moretti Filigranas and Aventurine</div>
</div>

<?php
    foreach ($filigranas as $key => $value) {
        $value->display();
    }
?>

<br>
<hr>
<br>
<div class="row">
    <div class="col font-weight-bold">Effetre Moretti Alabaster</div>
</div>

<?php
    foreach ($alabaster as $key => $value) {
        $value->display();
    }
?>
<br>
<div class="row">
    <div class="col">Striking means that the color of the heated glass will be the actual color discribed. Rod is usually a much lighter color before heating</div>
</div>
<br>
<hr>
<div class="row">
    <div class="col font-weight-bold">Effetre Moretti Opalinos</div>
</div>
<?php
    foreach ($opalinos as $key => $value) {
        $value->display();
    }
?>

<br>
<div class="row">
    <div class="col">Striking means that the color of the heated glass will be the actual color discribed. Rod is usually a much lighter color before heating</div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">Effetre Moretti Specials</div>
</div>

<?php
    foreach ($specials as $key => $value) {
        $value->display();
    }
?>

<br>
<div class="row">
    <div class="col">+Striking means that the color of the heated glass will be the actual color described.
Rod is usually a much lighter color before heating</div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">Effetre Moretti Cools</div>
</div>

<?php
    foreach ($cools as $key => $value) {
        $value->displayCools();
    }
?>

<?php
include_once ROOT .'/mobile/includes/rightcol.php';