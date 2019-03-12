<?php 
  define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
  $title="Schott Borosilicate coe33 Glass Rod and Tube - sundance art glass center";
  $description="Schott Borosilicate coe33 Glass Rod and Tubes. Your california West coast, north america, and international source for artists working glass with a torch and a kiln- flameworking lampworking glass beadmaking fusing firing- sundance art glass center!";
  $keywords="Schott Borosilicate coe33 Glass Rod and Tube,made in america,compatible with pyrex duran sunsilica northstar alchemy borosilicate glass, glass tubing for making sculptures,glass tubes,heavy wall,standard wall,glass tube case discounts,sliders downstems,clear glass rods,colored tubes, blue lavender tubes, borosilicate millefiori murrini";
  $abstract="At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: bullseye fusing glass, morretti soft glass, effetre soft glass, northstar hard glass, precision glass, pyrex, momka, borascilica, alchemy, bethlehem torches, red max torches, baracuda torches, and more! With all the glass art studio equipment you need!";
  #$hardGlass=true;
  include_once(ROOT ."/mobile/includes/header.php");
  require_once DBROOT.'clearBoro.php';
?>
<!--
    Modals
-->
<div class="modal fade" id="discountModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="discountModalTitle">Discounts on Bulk</h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="close"><span area-hidden="true">&times;</span></button>
            </div>
            <div id="dicountBody" class="modal-body" style="background-color:lemonchiffon">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Multiple Case Pricing</h2>
                        <h3 class="text-center">
                            On full cases of Borosilicate clear rod and tubing only
                        </h3>
                        <br>
                        <p class="text-center">
                            Spending more than $300 (about 4 cases of Clear Borosilicate Rod and Tubing) entitles you to a discount of <span class="red">10%</span> off our case price, which is already 50% off the $8/lb. retail price.
                        </p>
                        <h3 class="text-center">Enter Discount Code <span class="red">BC6C</span></h3>
                        <p class="text-center">at the checkout cart</p>
                        <br>
                        <p class="text-center">
                            Spending more than $600 (about 9 cases of Clear Borosilicate Rod and Tubing) entitles you to a discount of <span class="red">20%</span> off our cart price, which is already 50% off the $8/lb. retail price.
                        </p>
                        <h3 class="text-center">Add Discount Code <span class="red">BC11C</span></h3>
                        <p class="text-center">at the checkout cart</p>
                        <br>
                        <p class="text-center">
                            Spending more than $900 (about 20 cases of Clear Borosilicate Rod and Tubing) entitles you to a discoutn of <span class="red">30%</span> off our cart price, which is already 50% off the $8/lb. retail price.
                        </p>
                        <h3 class="text-center">
                            Add Together All Three Discount Codes <span class="red">BC26C</span>
                        </h3>
                        <p class="text-center">at the checkout cart</p>
                        <br>
                        <h3 class="text-center">Sundance Glass</h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- start content -->
<div class="row">
    <h1 class="col-12 mx-auto mainBanner">Highest Quality Borosilicate Glass</h1>
</div>
<div class="row">
    <h2 class="col-12 mx-auto mainBanner">German Schott Glass Rod and Tube</h2>
</div>
<div class="row">
    <div class="col-12">
        <img class="img-fluid float_left" src="images/tubing-duran-image-156131.jpg" alt="borosilicate tubes, borosilicate rods" title="borosilicate tubes, borosilicate rods">

        <div style="text-align:left;">
            Compatible with: Pyrex, Kimble, Duran, Momka, Northstar, Glass Alchemy, and all other COE 33 borosilicate glass.<br>
            <span class="red bold">*With the exception of cases we cut the rod or tube in half for ease of shipping.</span><br> There is no boxing charge when we do this. ($10 charge for full cases). Cutting tubes may result in rough ends.<br> Tell us
            if you do not want us to cut down full length rods and tubes.<br> Shipping would be more with the longer rods or tubes. We will contact you with any increased shipping cost.<br> Cases shipped via UPS are subject to a $5 boxing charge per case.<br>            Cases shipped via freight on a pallet are subject to a $10 pallet charge per case (no boxing charge).
        </div>
        <br><br>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <span class="bold large text-center">Heavy Wall Tubing</span>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <span class="bold medium text-center">5* foot long tubes</span>
    </div>
</div>
<hr>
<div class="row hidden-md-up" id="betterPricePhone">
    <div class="col-6 flex offset-6">
        <button class="btn btn-secondary" data-toggle="modal" data-target="#discountModal">Bulk Discounts</button>
    </div>
</div>

<hr class="my-2">
<?php 
    foreach ($clearBoro as $key => $value) {
        $value->display('heavyWall');
    }
?>
<hr class="my-2">
<div class="row ">
    <div class="col-12 ">
        <span class="block bold margin_10 ">
            <span class="red ">
                *The shipping department will cut full length individual rods and tubes 
                in half for shipping.
            </span><br> If you want full length pieces, please specify so in the comments section when ordering.<br>
        </span>
    </div>
</div>
<div class="row beige ">
    <div class="col-12 text-center "><span class="bold large ">Borosilicate Glass Rod</span>
    </div>
</div>
<hr>
<div class="row beige ">
    <div class="col-12 text-center "><span class="bold medium ">*5 foot long rods</span></div>
</div>
<hr class="my-2">
<?php 
    foreach ($clearBoro as $key => $value) {
        $value->display('rod');
    }
?>
<hr class="my-2">
<div class="row ">
    <div class="col-12 text-center ">
        <span class="block bold margin_10 ">*Diameter and wall thickness vary by +/- 0.14mm for small rod and tube to<br> +/- 0.50mm for large rod and tube<br>
      *Length Dimensions on this page are +/- 1/2&quot; Outer Diameter<br>
      <span class="red bold ">*With the exception of cases we cut the rod or tube 
		in half for ease of shipping.</span></span><br> There is no boxing charge when we do this. ($10 charge for full cases).
        <br> Cutting tubes may result in rough ends.
        <br> Tell us if you do not want us to cut down full length rods and tubes.
        <br> Shipping would be more with the longer rods or tubes.
        <br> We will contact you with any increased shipping cost.
        <br> Cases shipped via UPS are subject to a $5 boxing charge per case.
        <br> Cases shipped via freight on a pallet are subject to a $10 pallet charge per case (no boxing charge).
    </div>
</div>
<hr class="my-4">



<hr class="my-2">
<br>
<div class="row">
    <div class="col-12 mx-auto">
        <h1><a href="pyrex-main.php ">Click here</a> for colored tubes !!</h1><br>
        <a href="pyrex-main.php "><img class="img-fluid mx-auto " src="images/pipes.jpg " alt="glass bubblers made with 1 inch kimble tubing. " width="288 " height="222 "></a>
    </div>
</div>
<hr class="block margin_10 ">
<a href="murrini.php "><img class="img-fluid mx-auto " src="images/murrini-words.jpg " alt="borosilicate millefirori murrini pyrex decorative designs " width="144 " height="64 "><br>Click here to see Borosilicate Millifori!
</a>
<hr class="block margin_10 ">
<span class="block bold large margin_10 ">Need colored glass rod?</span>

<div class="row ">
    <div class="col-12 ">
        <h3><img class="mx-auto " src="/mobile/images/dichroic_tubes.jpg " alt="need colored hard glass? "></h3>
    </div>
</div>
<div class="row ">
    <div class="col-12 text-center "><a href="index.php ">Click here for colored glass rod</a></div>
</div>
<hr>

<script>
    $(document).ready(() => {
        $('a[data-toggle="modal"]').on('click tap', function(){
            $('#discountModal').modal('toggle');
        })
    })
</script>

<!-- end content -->

<?php 
include_once ROOT.'/mobile/includes/rightcol.php';
?>