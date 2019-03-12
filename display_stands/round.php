<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Display Stands for Glass- Sundance Art Glass Center';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash GLASS FUSING Sundance  Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing,Glass Slumping,Display Stands,Fused and Slumped Projects,Art Glass Center California,Bullseye,Round Display Stands,U Style, COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
$location='fused-slumped-glass-display-stand-round.php';
include_once(ROOT .'/mobile/includes/header.php');
require_once DBROOT.'stands.php';
?>
<?php include_once(ROOT .'/mobile/includes/secondaryNavs/stands.php'); ?>
<div class="row">
    <h1 class="col-12 text-center">Round Display Stands</h1><br>
    <h2 class="col-12 text-center">for fused and slumped glass projects</h2><br>
</div>
<br>
<button type="button" class="btn beige border-dark mb-2" data-toggle="modal" data-target="#discountModal">Looking for Discounts?</button>

<br>
<br>

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
                            </strong><br /> Purchase at least $100 in Display Stands to Qualify for a 5% Discount
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
</div>

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
        $value->display('round');
    }
?>

<hr class="my-2">

<div class="row splitter">
    <div class="col w-100"></div>
</div>
<div class="row">
    <div class="col flex flex-image"><img src="finished_images/90620sm.jpg" alt="Project Display Stand" class="img-fluid mx-auto clickImg" data-bigImg="finished_images/90620.jpg" data-title="Project Display Stand"></div>
    <div class="col">
        <strong>Project Display Stand</strong> - 1/4&#34; metal wire rod. Actually works for many sizes by bending the metal curve. I was able to adjust the 15&#34; semi-circle to accommodate a 12&#34; and then up to a 18&#34; project. I believe I could
        have bent it even more for a wider range of sizes. The only skill involved was bending it to keeping it in a round shape. <a href="/fuseWEB/90620-3pictures.jpg">Click Here</a> to see pictures of the bent stand.<br>
        <br>We sell Stands Imported and America <br>
    </div>
</div>
<br>
<button type="button" class="btn beige border-dark mb-2" data-toggle="modal" data-target="#discountModal2">Looking for Discounts?</button>

<?php
    foreach ($stands as $key => $value) {
        $value->display('wire');
    }
?>


    <script src="/mobile/includes/js/cartDisplay.js"></script>
    <?php include_once(ROOT .'/mobile/includes/rightcol.php'); ?>