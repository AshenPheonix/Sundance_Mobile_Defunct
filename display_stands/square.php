<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Metal Project Display Stands - Sundance Art Glass';
$description='Metal Project Display Stands. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
$keywords='Metal Project Display Stands,Square stands,invisible stands,v channel satnds,fused glass,glass art display stand,Sundance Art Glass California';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
$location="fused-slumped-glass-display-stand-square.php";
include_once(ROOT .'/mobile/includes/header.php'); 
require_once DBROOT.'stands.php';
?>
<?php include_once(ROOT .'/mobile/includes/secondaryNavs/stands.php'); ?>

<div class="row">
    <div class="col">
        <h1 class="style1">Metal Project Display Stands</h1>
        <h2>
            Stands to Display Fused Glass, Slumped Glass, Stained Glass or Etched Glass
        </h2> 
        <p>
            It is important to note that these stands are made of heavy solid 3/8&quot; metal bars. Many of the stands you might find elsewhere are often made of lighter gauge round rods or hollow tubing, not as heavy and stable as our metal.
        </p>
        <a href="/display-stands-glass-fusing-w.php">Click Here</a> for Wholesale prices.
        <img src="/mobile/display_stands/finished_images/fused-glass-mask.jpg" alt="metal display stand for large creative fused face art piece" class="img-fluid">
        <img src="/mobile/display_stands/finished_images/fused-project-stands.jpg" alt="metal display stands for circle fused plate and rectangular fused art piece" class="img-fluid">
        <img src="/mobile/display_stands/finished_images/fused-project-stands-2.jpg" alt="metal display stand for eloquent fused dichroic glass art piece" class="img-fluid">
    </div>
</div>

<div class="row">
    <div class="col">
        <p>What some of our customers say about our stands:</p>
    </div>
</div>
<br />
<br />
<div class="card">
    <div class="card-block">
        <blockquote class="card-blockquote">
            <p>
                &quot;I just wanted to say how impressed I am with your metal display stands. I am a fine art photographer in South Bend, Indiana, and have been looking for metal stands for my photography. I print onto copper and steel. I thought your prices were reasonable
                as well and the craftsmanship is truly wonderful. I am hoping that we will do business together soon!&quot; 
            </p>
            <footer>--<cite title="Source title">April. L Hallwood</cite></footer>
        </blockquote>
    </div>
</div>

<div class="row">
    <div class="col">
        <button type="button" class="btn beige border-dark mb-2" data-toggle="modal" data-target="#discountModal">Looking for Discounts?</button>
    </div>
</div>




<div class="row">
    <div class="modal fade col" id="discountModal" aria-labelledby="discounts" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="discountModalTitle">Discounts on Bulk</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close"><span area-hidden="true">&times;</span></button>
                </div>
                <div id="dicountBody" class="modal-body" style="background-color:lemonchiffon">
                    <div class="row">
                        <div class="col">
                            <strong>
                                <span class="medium">
                                    To Qualify for Volume<br />
                                    Discounts on Display Stands<br />
                                    Mix and Match any stands<br />
                                </span>
                            </strong><br /> Purchase at least $100 to Qualify for a 5% Discount
                            <br /> USE COUPON CODE DS01 AT THE CHECK OUT CART<br />
                            <br /> Purchase over $200 in Display Stands Group 3 to Qualify for a 10% Discount. YOU MUST USE BOTH DS01 AND DS02 COUPON CODES AT THE CHECK OUT CART TO RECIEVE THIS DISCOUNT<br />
                            <br /> Purchase over $300 in Display Stands Group 3 to Qualify for a 15% Discount. YOU MUST USE ALL THREE COUPON CODES AT THE CHECK OUT CART-DS01, DS02, AND DS03-TO RECIEVE THIS DISCOUNT<br />
                            <span class="bg-warning">2 Piece Adjustable Stand (Item # 90649) does not qualify for this discount</span>
                            <br /><a href="http://www.sundanceglass.com" target="_blank">Sundance Glass</a> call 530 872 3021
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>        

<?php
    foreach ($stands as $key => $value) {
        $value->display('square');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col">

        <span class="style5 large"><strong>The Ultimate Glass Project Stand</strong></span>
        Slide in your fused art, stained glass, etched sandblasted or just a nice piece of art glass.
        
        <span class="medium text-left">Specifications:</span>
        <ul class="text-left">
            <li class="disc">Solid Steel</li>
            <li class="disc">Stable Heavy Base</li>
            <li class="disc">No Tubing</li>
            <li class="disc">5/8" Solid Square Steel rod construction</li>
            <li class="disc">High quality Cold Rolled Steel for smoother finish and sharper edges</li>
            <li class="disc">Powder coated for Durability</li>
        </ul>

    </div>
</div>

<?php 
    foreach ($stands as $key => $value) {
        $value->display('ultimate');
    }
?>
<hr class="my-4">
<div class="row d-md-none">
    <div class="col justify-content-center">
        <figure class="figure">
            <img src="images/90899sm6-fused-glass-display-stand.jpg" class="figure-img img-fluid rounded" alt="Large piece of glass in stand 90899">
            <figcaption class="figure-caption text-sm-center">A 20" by 34" piece in #90899</figcaption>
        </figure>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img src="finished_images/90900-30.jpg" alt="#90899 metal project display stand for glass fused projects flexible height and width" class="img-fluid">
    </div>
    <div class="col">
        <img alt="#90899 metal project display stand for glass fused projects flexible height and width" src="./finished_images/90898-30.jpg" class="img-fluid clickImg" data-bigImg="finished_images/90898-30lg.jpg" data-title="90898-30lg.jpg">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <img alt="#90899 metal project display stand for glass fused projects flexible height and width" src="./finished_images/90898-example-sm.jpg" class="img-fluid clickImg" data-bigImg="finished_images/90898-example-lg.jpg" data-title="90898-example-lg.jpg">
    </div>
    <div class="col">
        <img src="finished_images/f60625-24.jpg" alt="#90899 metal project display stand for glass fused projects flexible height and width" class="img-fluid">
    </div>
</div>
<div class="d-none d-md-block">

    <figure class="figure float-md-left">
        <img src="images/90899sm6-fused-glass-display-stand.jpg" class="figure-img img-fluid rounded" alt="Large piece of glass in stand 90899">
        <figcaption class="figure-caption text-sm-center">A 20" by 34" piece in #90899</figcaption>
    </figure>
    <div class="float-md-right">
        <img src="finished_images/90900-30.jpg" alt="#90899 metal project display stand for glass fused projects flexible height and width" width="198" height="164">

        <img style="cursor:pointer" alt="#90899 metal project display stand for glass fused projects flexible height and width" src="./finished_images/90898-30.jpg" width="158" height="153" class="img-fluid clickImg" data-bigImg="finished_images/90898-30lg.jpg"
            data-title="fuseWEB/90898-30lg.jpg">

        

        <img style="cursor:pointer" alt="#90899 metal project display stand for glass fused projects flexible height and width" src="./finished_images/90898-example-sm.jpg" width="144" height="145" class="img-fluid clickImg" data-bigImg="finished_images/90898-example-lg.jpg"
            data-title="fuseWEB/90898-example-lg.jpg">

        <img src="finished_images/f60625-24.jpg" alt="#90899 metal project display stand for glass fused projects flexible height and width" width="200" height="159">
    </div>
</div>
<hr class="my-4">
<div class="row">
    <strong><span class="large">Two Piece Adjustable Project Stand</span></strong>
    A two piece stand allows a variety of size projects. Fits square, rectangular
    and some round sized projects. 4&quot; bracket lengths.
</div>

<div class="d-md-none row my-2">
    <div class="col-6">
        <img alt="10&quot; square project displayed in item #90649 adjustable metal display stand for art pieces square, rectangle, and some circle shapes" src="images/90649-3sm.jpg" class="img-fluid clickImg" data-bigImg="finished_images/90649-3lg.jpg" data-title="fuseWEB/90649-3lg.jpg">
    </div>
    <div class="col-6">
        <img src="images/90649-1sm.jpg" alt="#90649 adjustable metal display stand for art pieces square, rectangle, and some circle shapes" class="img-fluid">
    </div>
</div>

<div class="d-none d-md-block">
    <img alt="10&quot; square project displayed in item #90649 adjustable metal display stand for art pieces square, rectangle, and some circle shapes" src="images/90649-3sm.jpg" width="216" class="img-fluid clickImg float-md-left" data-bigImg="finished_images/90649-3lg.jpg"
        data-title="fuseWEB/90649-3lg.jpg">

    <img src="images/90649-1sm.jpg" alt="#90649 adjustable metal display stand for art pieces square, rectangle, and some circle shapes" class="img-fluid my-2">
</div>

<?php
    foreach ($stands as $key => $value) {
        $value->display('adjustabl');
    }
?>

<hr class="my-4">


<!-- END content -->

<?php include_once(ROOT .'/mobile/includes/rightcol.php'); ?>