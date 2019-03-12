<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Display Stands for Glass- Sundance Art Glass Center';
    $description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash GLASS FUSING Sundance  Art Glass Center California Bullseye COE 90';
    $keywords='Glass Fusing,Glass Slumping,Display Stands,Fused and Slumped Projects,Art Glass Center California,Bullseye,Round Display Stands,U Style, COE 90';
    $abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';
    $location='fused-slumped-glass-display-stand-garden.php';
    include_once(ROOT .'/mobile/includes/header.php'); 
    require_once DBROOT.'stands.php';
?>
<style>
    .disp {
        font-size: 10pt;
    }
</style>
<?php include_once ROOT.'/mobile/includes/secondaryNavs/stands.php' ?>

<div class="row justify-content-center">
    <div class="col">

        <h1 class="text center">
            Garden Display Stands
        </h1><br>
        <h2 class="text-center">
            for Fused and Slumped Glass
        </h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <p class="text-left disp">
            Display stands to show off your art piece! All of our stands are master designed and made to last with contemporary design motifs. Support heavy fused glass pieces or any other medium such as wood, clay, ceramic, bronze or other heavy to light metal art
            pieces. Several unique designs to support a variety of shapes circular to rectangular and square. Many art projects look amazing propped up instead of flat on a table. Take advantage of displaying your piece to add that final professional
            touch.
        </p>
    </div>
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
                            <span class="bg-warning">Discount does not apply to stand #90601</span>
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

<?php foreach($stands as $key => $value):?>
    <?=$value->display('garden');?>
<?php endforeach; ?>
<?php include_once ROOT.'/mobile/includes/rightcol.php';