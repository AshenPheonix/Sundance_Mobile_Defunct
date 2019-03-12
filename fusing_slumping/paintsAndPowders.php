<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Glass Paints and Powders - Painting on Glass - Sundance Art Glass Center';
    $description='Add shading, shimmers, layers, and personal designs to your hot glass pieces with glass stainers, glass paints, luster powders, enamel stainers, blendable paints, crushed glass and more! Compatibilty options for just about every kind of glass. International shipping.';
    $keywords='Glass Paints,enamels,stainers,powders,crushed glass,fixtures shades,shading,shimmers,shiny,dichroic,luster,transparent,opaque,blending,blendable,paint,mixture,brush effects,contemporary,gold,silver,abalone,iridescent,Painting on Glass,Sundance Art Glass Center';
    $abstract='Glass Paints - Painting on Glass - Sundance Art Glass Center';
    $location='glass-paints.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Glass Paints and Powders</h1>
        <p class="mt-5">
            Add a personal touch to your glass art with paints, powders, enamel stainers, glass stainers and more! Reusche paints come
            in a great variety of options such as silver stains, transparent paints, blendable bending opaque colors, and
            lead-free and cadmium-free colors. We offer glass powders in a variety of colors that are compatible with Bullseye,
            soft glass, Moretti, Effetre, Lauscha, borosilicate. Luster powders add a great shiny sheen and sparkle! The
            limits to your creativity are expanded when you add shading and layers with glass powders and special details
            with paints and stainers.
        </p>
    </div>
</div>

<div class="row border">
    <div class="col-4 py-2 fakeBtn">
        <a href="/mobile/supplies/index.php#enamels">
            <figure class="figure">
                <img src="/mobile/supplies/images/thompson-med.jpg" class="figure-img img-fluid rounded" alt="A pile of enamel powders">
                <figcaption class="figure-caption text-xs-right">104 Moretti/Effetre Enamel Powder</figcaption>
            </figure>
        </a>
    </div>
    <div class="col-4 py-2 fakeBtn">
        <a href="reusche.php">
            <figure class="figure">
                <img src="images/reusche-sm.jpg" class="figure-img img-fluid rounded" alt="A pile of blue dust">
                <figcaption class="figure-caption text-xs-right">Reusche Paint, 1200 Degree Low fire Paint</figcaption>
            </figure>
        </a>
    </div>
    <div class="col-4 py-2 fakeBtn">
        <a href="/mobile/glass/bullseye/frit.php">
            <figure class="figure">
                <img src="/mobile/glass/bullseye/images/frit_powder_1.jpg" class="figure-img img-fluid rounded" alt="some frit powders">
                <figcaption class="figure-caption text-xs-right">Bullseye Powders, COE90 Glass</figcaption>
            </figure>
        </a>
    </div>
    <div class="col py-2 fakeBtn">
        <a href="paints.php">
            <figure class="figure">
                <img src="images/pens_medium.jpg" class="figure-img img-fluid rounded" alt="Some Glass Paint in &quot;Pen&quot; form">
                <figcaption class="figure-caption text-xs-right">Glassline Paint Pens</figcaption>
            </figure>
        </a>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';