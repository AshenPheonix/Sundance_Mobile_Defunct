<?php
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    $title = 'Glassline Pens, Paints, Chalks and Paper - Sundance Glass';
    $description = 'Glassline Pens, Paints, Chalks and Paper. Huge selection of glass, tools, equipment, and informational material for fusing and kiln working. Including fusing chemicals, project stands, slumping molds, dichoric glass, frits, crucibles, glassline paints and more.';
    $keywords = 'Glassline Pens, Paints, Chalks and Paper. Glass Fusing Kiln work Dichroic glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90 window soda effetre moretti, crucibles, fiber blanket, sandblasting, paint, frit, cutting, pyrometers, stands, displays, kiln wash, glassline paints, glass line paints';
    $abstract = 'Glassline Pens, Paints, Chalks and Paper. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $location = 'glassline-glass-line-pens-paints-fusing.php';
    require_once ROOT . '/mobile/includes/header.php';
?>

<div class="row">
    <div class="col">
        <h1 class="font-weight-bold">Glassline Paint Pens</h1>
        <h4>For Glass Fusing Applications</h4>
        <img src="images/glassline-pens-lg.jpg" alt="several paint containers" class="img-fluid">
        <p class="font-weight-bold">
            Note:
            <strong class="red">These are NOT actually pens as the name would imply.</strong> Glassline calls them paint pens, but these are
            actually squeeze bottles (as pictured) that you can use screw-on pen tips with to draw designs on your projects.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            The Glassline Pens are used as a lining and shading material for glass. They're simple in design, easy to use, and can be
            thinned with water. A metal tip set is recommended for fine line drawings on glass. The Tip Set consists of one
            each of the following size tips, find, medium, and bold. These tips are placed on the applicator bottle and used
            to achieve a variety of line widths.
        </p>
        <p>
            The Glassline colors can be applied between multiple layers of glass or on the top surface for a complex dimensional look.
            To further explore your creative edge, Glassline colors may be sprayed to achieve subtle shading variations on
            glass. Glassline Pen colors are compatible with most types of glass from float 82 to 90 to 96 COE. These Paints
            work GREAT on Bullseye Glass! For best results "tack fuse" individual sheets of glass before stacking your full
            fuse.
        </p>
        <p>
            Glassline colors are best fired to 1500° F., but may be fired lower or higher depending upon desired results. Glassline products
            are lead-free and food safe when fired.
        </p>
    </div>
</div>

<div class="row">
    <div class="col-12 flex-image">
        <img src="images/93sm-90725-glass-fusing-class-green-1.jpg" alt="Sunflower painted under a blue sky" class="img-fluid">
    </div>
    <div class="col flex-text my-2">
        Available in 2-oz Bottles
        <br>
    </div>
</div>

<div class="row">
    <div class="col">
        <h4>Paint Sets</h4>
    </div>
</div>

<?php
require_once ROOT . '/mobile/includes/dbs/glasslinePaints.php';
foreach ($glassline as $key => $value) {
    $value->display('pen kit');
}
?>

<hr class="my-4">

<div class="row">
    <div class="col">
        <h5>Individual Pens</h5>
        <p>
            Buy 10 or more individual pens and get
            <strong>Free Shipping</strong> on the Glassline Pens. Coupon Code will be
            <br>
            <strong>Glass line shipping</strong>
            <br>
            <em class="font-weight-bold bg-alert">Does Not include International Orders or orders to Alaska or Hawaii</em>
        </p>
    </div>
</div>

<?php
foreach ($glassline as $key => $value) {
    $value->display('individual');
}
?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <h2>Bubble Pens</h2>
        <p>(Click on the image for samples of color on clear, white, and black glass)</p>
    </div>
</div>

<?php
foreach ($glassline as $key => $value) {
    $value->display('bubble');
}
?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <h2>Classline Pen Tip Set</h2>
        <img src="images/cac_gl_tipset.jpg" alt="Tip Set" class="img-fluid">
        <p>
            <strong>
                Add Intricate Designs to Glass Tip set includes 3 tips: fine, medium and bold. The three different sizes allows you, the
                artist, the maximum amount of creativity and freedom when designing with the pens. This tip set
                is to be used with the Glassline pen bottles.
            </strong>
        </p>
    </div>
</div>

<?php 
    foreach ($glassline as $key => $value) {
        $value->display('tips');
    }
?>

<hr class="my-4">
<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            The Glassline Pens are used as a lining and shading material for glass. They're simple in design, easy to use, 
            and can be thinned with water. A metal tip set is recommended for fine line drawings on glass. The Tip Set consists 
            of one each of the following size tips, fine, medium, and bold. These tips are placed on the applicator bottle and 
            used to achieve a variety of line widths. The Glassline colors can be applied between multiple layers of glass or 
            on the top surface for a complex dimensional look. To further explore your creative edge, Glassline colors may be 
            sprayed to achieve subtle shading variations on glass. Glassline Pen colors are compatible with most types of glass 
            from Float to 90 and 96 COE. For best results "tack fuse" individual sheets of glass before stacking your full fuse. 
            Glassline colors are best fired to 1500° F., but may be fired lower or higher depending upon desired results. Glassline 
            Pens are available in fourteen vibrant standard colors and three new metallic colors. Glassline products are lead-free 
            and food safe when fired. Comes in 2-oz bottles
        </p>
    </div>
</div>

<?php
require_once ROOT . '/mobile/includes/rightcol.php';
?>