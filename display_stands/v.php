<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Display Stands for Glass- Sundance Art Glass Center';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash GLASS FUSING Sundance  Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing,Glass Slumping,Display Stands,Fused and Slumped Projects,Art Glass Center California,Bullseye,Round Display Stands,U Style, COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$location='fused-slumped-glass-display-stands-v.php';
require_once(ROOT .'/mobile/includes/header.php'); 

require_once DBROOT.'stands.php';
?>

<?php include_once(ROOT .'/mobile/includes/secondaryNavs/stands.php'); ?>

<div class="row">
    <div class="col">
        <h1 class="text-center">V Shaped Display Stands</h1><br>
        <h2 class="text-center">for Fused and Slumped Glass</h2>
    </div>
</div>

<div class="row">
    <div class="col justify-content-center">
        <img src="images/Dislpay-stands-V-10med.jpg" class="img-fluid mx-auto" alt="Some Stands in operation">
    </div>
</div><br>
<button type="button" class="btn beige border-dark mb-2" data-toggle="modal" data-target="#discountModal">Looking for Discounts?</button><br>
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
                                    Mix and Match any stands in Group 3<br />
                                </span>
                            </strong><br /> Purchase at least $100 in Display Stands Group 3 Qualify for a 5% Discount
                            <br /> USE COUPON CODE DS01 AT THE CHECK OUT CART<br />
                            <br /> Purchase over $200 in Display Stands Group 3 to Qualify for a 10% Discount. YOU MUST USE BOTH DS01 AND DS02 COUPON CODES AT THE CHECK OUT CART TO RECIEVE THIS DISCOUNT<br />
                            <br /> Purchase over $300 in Display Stands Group 3 to Qualify for a 15% Discount. YOU MUST USE ALL THREE COUPON CODES AT THE CHECK OUT CART-DS01, DS02, AND DS03-TO RECIEVE THIS DISCOUNT<br />
                            <span class="bg-warning">Discount applies to first table, a different discount applies to the wire stands</span>
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
</div><br>
<?php 
    foreach ($stands as $key => $value) {
        $value->display('vSolid');
    }
?>
<br>
<div class="row justify-content-center">
    <div class="col">
        <figure class="figure">
            <img src="images/display-stand-fused-glass-vsm.jpg" class="figure-img img-fluid rounded clickImg" alt="Stand Displaying Glass" data-bigImg="images/display-stand-fused-glass-vlg.JPG" data-title="Displaying a piece of glass">
            <figcaption class="figure-caption text-sm-center">12" V stand</figcaption>
        </figure>
    </div>
    <div class="col">
        <figure class="figure">
            <img src="finished_images/brian-1sm.jpg" class="figure-img img-fluid rounded" alt="Stand Displaying Glass">
            <figcaption class="figure-caption text-sm-center">Holds Projects 10" or larger</figcaption>
        </figure>
    </div>
    <div class="col">
        <figure class="figure">
            <img src="finished_images/brian-2.jpg" class="figure-img img-fluid rounded" alt="Stand Displaying Glass">
            <figcaption class="figure-caption text-sm-center">Solid Metal Base</figcaption>
        </figure>
    </div>
</div>
<hr>
<div class="row splitter">
    <div class="col w-100"></div>
</div>

<div class="row">
    <div class="col justify-content-center">
        <h1 class="text-center">V Shaped Invisible Display Stands</h1>
        <h2 class="text-center">for Fused and Slumped Glass</h2><br>
        <img src="images/908506-invisible-display-stand-V-10-med.jpg" class="img-fluid mx-auto" alt="Displaying glass in an &quot;Invisible Stand&quote;">
    </div>
</div>

<?php
    foreach ($stands as $key => $value) {
        $value->display('vInvis2');
    }
?>

    <div class="row justify-content-center">
        <div class="col">
            <img src="images/908506-invisible-display-stand-V-11sm.jpg" class="img-fluid clickImg" alt="Latticework Glass in stand" data-bigImg="images/908506-invisible-display-stand-V-11.JPG" data-title="Lattice Glass in Stand">
        </div>
        <div class="col">
            <img src="images/908506-invisible-display-stand-V-9sm.jpg" alt="Glass in stand" class="img-fluid clickImg" data-bigImg="images/908506-invisible-display-stand-V-9.JPG" data-title="Glass in Stand">
        </div>
        <div class="col">
            <img src="images/908506-invisible-display-stand-V-8-1sm.jpg" alt="Glass In Stand" class="img-fluid clickImg" data-bigImg="images/908506-invisible-display-stand-V-8-1.JPG" data-title="Glass in stand">
        </div>
        <div class="col">
            <img src="images/908506-invisible-display-stand-V-8-2sm.jpg" alt="Glass in Stand" class="img-fluid clickImg" data-bigImg="images/908506-invisible-display-stand-V-8-2.JPG" data-title="Glass in stand">
        </div>
    </div>
    <hr>
    <div class="row splitter">
        <div class="col w-100"></div>
    </div>

    <div class="row justify-content-center">
        <h1 class="text-center">V Shaped Chennel Style Display Stands</h1><br>
        <h2 class="text-center">for Fused and Slumped Glass</h2><br>
    </div>
    <div class="row justify-content-center">
        <div class="col"><img src="images/display-stand-small-v-sm5.jpg" alt="Art Glass In Stand" class="img-fluid"></div>
        <div class="col"><img src="images/907049dis.jpg" alt="Art Glass in Stand" class="img-fluid"></div>
    </div>

    <?php
        foreach ($stands as $key => $value) {
            $value->display('vInvis3');
        }
    ?>
        <br>
        <div class="row justify-content-center">
            <div class="col text-center">
                <p>
                    The below 3 Projects are being displayed in a 5" chennel style Display Stand.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col"><img src="images/display-stand-4V-1sm2.jpg" alt="Glass in Stand" class="img-fluid mx-auto clickImg" data-bigImg="images/display-stand-4V-1lg2.jpg" data-title="Glass in Stand"></div>
            <div class="col"><img src="images/907044roundsm.jpg" alt="Glass in Stand" class="img-fluid mx-auto clickImg" data-bigImg="images/907044round.jpg" data-title="Glass in Stand"></div>
            <div class="col"><img src="images/display-stand-small-v-7sm.jpg" alt="Glass in Stand" class="img-fluid mx-auto clickImg" data-bigImg="images/display-stand-small-v-7.jpg" data-title="Glass in Stand"></div>
        </div>

        <div class="row splitter">
            <div class="col w-100"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col flex flex-image"><img src="finished_images/90620sm.jpg" alt="Project Display Stand" class="img-fluid mx-auto clickImg" data-bigImg="finished_images/90620.jpg" data-title="Project Display Stand"></div>
            <div class="col">
                <strong>Project Display Stand</strong> - 1/4&#34; metal wire rod. Actually works for many sizes by bending the metal curve. I was able to adjust the 15&#34; semi-circle to accommodate a 12&#34; and then up to a 18&#34; project. I believe
                I could have bent it even more for a wider range of sizes. The only skill involved was bending it to keeping it in a round shape. <a href="fuseWEB/90620-3pictures.jpg">Click Here</a> to see pictures of the bent stand.<br>
                <br>We sell Stands Imported and America <br>
                <span class="bold medium"><a href="/display-stands-glass-compare-china-usa-round.php">Click here</a> to see the difference</span>
            </div>
        </div>

        <br>
        <button type="button" class="btn beige border-dark mb-2" data-toggle="modal" data-target="#discountModal2">Looking for Discounts?</button>

<br>
<br>

<div class="row">
    <div class="modal fade col" id="discountModal2" aria-labelledby="discounts" role="dialog" tabindex="-1">
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
                                Mix and Match any stands in this table</span></strong><br> Purchase at least $50 to Qualify for a 10% Discount <span class="bg-warning">USE COUPON CODE WDS01 AT THE CHECK OUT CART</span> <br>Purchase
                            over $100 in Display Stands to Qualify for a 20% Discount. <span class="bg-warning">YOU MUST USE BOTH WDS01 AND WDS02 COUPON CODES AT THE CHECK OUT CART TO RECIEVE THIS DISCOUNT</span><br>Purchase over $150 in Display Stands
                            to Qualify for a 30% Discount. <span class="bg-warning">YOU MUST USE ALL THREE COUPON
                            CODES AT THE CHECK OUT CART. WDS01, WDS02, AND WDS03-TO RECIEVE THIS DISCOUNT</span>
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
    foreach ($stands as $value) {
        $value->display('wire');
    }
?>

            <script src="/mobile/includes/js/cartDisplay.js"></script>
            <?php include_once(ROOT .'/mobile/includes/rightcol.php'); ?>