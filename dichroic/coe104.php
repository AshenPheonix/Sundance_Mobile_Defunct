<?php 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Dichroic Moretti Glass - Sundance Art Glass Center';
 $description='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center!';
 $keywords='Dichroic Glass Beadmaking Flameworking Fusing Firing Torch Kiln Moretti Effectre COE 104 Coefficient of Expansion 104, Glass rods dichroic iridescent shimery sheen alabalone rainbow metalic sheen dichro dicro , hotstix';
 $location='dichroic-moretti-glass.php';
 include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Dichroic Glass <span class="font-weight-bold">Rods and Strips -</span> <span class="font-weight-bold red">COE 104</span></h1><br>
        <h3>for Beadmaking and Flameworking</h3>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col">
        <h3>Compatible with Effetre Moretti</h3><br>
        <figure class="figure">
            <img src="images/dichroic-glass-sizzle-med.jpg" class="figure-img img-fluid rounded" alt="A rainbow scattering of colored rods">
            <figcaption class="figure-caption text-sm-center">Hotsticks - on flattened round rod</figcaption>
        </figure>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            These are 8" long flattened rods with dichroic coating on one side. Even these rods are shorter than some rods, there are 3 times more dichro on these rods as compared to rounded rods, because they are flattened rods. Various colors. Sorry, we choose
            the color.
        </p>
    </div>
</div>

<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        <figure class="figure">
            <img src="images/dichroic-glass-sizzle-stix.JPG" class="figure-img img-fluid rounded" alt="Assorted colors of Hotstix">
            <figcaption class="figure-caption text-sm-center">Hotstix Assorted colors</figcaption>
        </figure>
    </div>
    <div class="w-100"></div>
    <div class="col">
        On Black<br> #16564
        <br>
        <span class="red">$5.95</span><br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=25ae8017889a4bc29d6c481c4922cb1d"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart" class="img-fluid"></a>
    </div>
    <div class="col">
        On Clear<br> #16563
        <br>
        <span class="red">$5.95</span><br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=c1da9cc0a09f431aaca0abf92d97c368"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart" class="img-fluid"></a>
    </div>
</div>

<br>
<hr>
<br>
<div class="row">
    <div class="col"><img src="images/dichroic-glass-effetre-moretti-strips-rods-med.jpg" alt="Hand gripping 4 dichro strips" class="img-fluid"></div>
</div>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            Flat Strips
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        Strips can be made in 2 ways:<br> 1) They can be cut from a pre coated sheet, which leaves them with Sharp Edges.<br> 2) The strips can be fired in a kiln which rounds the edges and then can be coated with dichro. The smooth edge produced by this
        process is better for handling and the dicro coating slightly wraps around the edge. Not really a big deal. This is how the below strips are made.
    </div>
</div>

<?php
    require_once DBROOT.'dichFlatStrips.php';
    foreach ($dichFlatStrips as $key => $value) {
        $value->display('104Dich');
    }
?>

<?php require_once ROOT.'/mobile/includes/rightcol.php';