<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Cross Hatch Table Display Stands  - Sundance Art Glass';
$description='Cross Hatch Table Display Stands. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
$keywords='Flameworking Glass Lampworking Glass Pyrex Glass Borosilcate Glass Glass Tubing  Sundance Art Glass Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
$abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
$location='fused-glass-display-stand-90670.php';
include_once(ROOT .'/mobile/includes/header.php'); 

class Crosshatches{
    public $image,$number, $weight,$size,$gap,$price;
    public function __construct($image,$number,$weight,$size,$gap,$price) {
        $this->image = $image;
        $this->number=$number;
        $this->weight=$weight;
        $this->size=$size;
        $this->gap=$gap;
        $this->price=$price;
    }
}

$products=[
    new Crosshatches('cross-hatch-3sm.jpg',              90670338 ,.9,'3&frac14;', '&#8540;',18.00),
    new Crosshatches('cross-hatch-5sm-glass-fusing.jpg', 906705516,.9,5,'5/16',18.00),
    new Crosshatches('cross-hatch-6sm-glass-fusing.jpg', 906706   ,1.1,6,'&#8540;',20.00),
    new Crosshatches('cross-hatch-6sm-glass-fusing.jpg', 906706516,1.1,6,'5/16',20.00),
    new Crosshatches('cross-hatch-8sm-glass-fusing.jpg', 906708   ,2.0,8,'&#8540;',24.00),
    new Crosshatches('cross-hatch-8sm-glass-fusing.jpg', 906708516,2.0,8,'5/16',24.00),
    new Crosshatches('cross-hatch-10sm-glass-fusing.jpg',906710   ,3.4,10,'&#8540;',32.00),
    new Crosshatches('cross-hatch-10sm-glass-fusing.jpg',906710516,3.4,10,'5/16',35.00),
    new Crosshatches('cross-hatch-10sm-glass-fusing.jpg',90671012 ,3.4,10,'&frac12;',32.00),
    new Crosshatches('cross-hatch-10sm-glass-fusing.jpg',90671034 ,3.4,10,'&frac34;',32.00),
    new Crosshatches('cross-hatch-10sm-glass-fusing.jpg',90671001 ,3.4,10,1,32.00),
];

?>
<style>
    .important {
        border: 5px outset lemonchiffon;
        box-shadow: 10px 10px 10px lemonchiffon;
    }
    
    .important:hover {
        border: 5px inset lemonchiffon;
        box-shadow: inset 10px 10px 10px lemonchiffon;
    }
</style>
<div class="row">
    <div class="col flex-image">
        <h1>Display Stand</h1><br>
        <h2>For Fused Glass, Etched Glass, Sculptures, Ceramics</h2>
        <img alt="fused glass display stand" src="images/90670-cross-hatch-11vsm.jpg" class="img-fluid mx-auto my-3 d-block">
        <strong><span class="large">Table Display Stand</span></strong><br> &quot;Cross Hatch&quot;<br> Made from high quality cold rolled steel. Durable Powder Coated Paint.<br>
        <span class="red">Made in the USA!</span>
    </div>
</div>

<br>

<div class="row jutify-content-center important">
    <div class="col text-center">

        <strong>Volume Discounts!</strong></span><br>
        <strong>Mix ANY of the Cross Hatches on this page to get your discount!<br>
                This discount is exclusive for these Cross Hatch Stands and can not be 
                combined with other discounts for display stands<br>
                Buy over $42 and receive a 10% Discount. Use Coupon CH4215<br>
                Buy over $100 and&nbsp; receive a 20% Discount. 
                Also use Coupon CH10025<br>
                Buy over $200 and&nbsp; receive a 30% Discount. Add this 3rd Coupon 
                CH20035 to the other 2 coupons<br>
                <br>
                Discount will show and apply after you put in coupons in cart.<br>
            </strong>

    </div>
</div>

<br>
<div class="amazonRow">
    <select name='496368164' onChange="updateLink(this.name, this.value);">
	<option value="0" selected>Choose Size</option>
	<option value="3d730c30c4624524a56db851e424fbe5">10 inch 1 inch gap-- $32.00</option>
	<option value="e23492b0b7dc4d7da3ae08c956ed4cc1">10 inch 3/4 inch gap-- $32.00</option>
	<option value="7dfd7c6d31e14407a2bb4816815ff0db">10 inch 1/2 gap -- $32.00</option>
	<option value="2e9d38d7f5c84792ac8f1f8a1f79748d">10 inch 3/8 gap-- $32.00</option>
	<option value="c92db41f043e4e18961f94a22e368dba">10 inch 5/16 gap-- $32.00</option>
	<option value="08e8d0b1016e43be8062a5d2ef12a19e">8 inch 3/8 gap-- $24.00</option>
	<option value="0737cfdd2b064142a003478a6238f72e">8 inch 5/16 gap-- $24.00</option>
	<option value="8f5789b2a388428a9973a55b5a510923">6 inch 3/8 gap-- $20.00</option>
	<option value="9434eea0c5414da2bb3a033264d635d3">6 inch 5/16 gap-- $20.00</option>
	<option value="61b9d22c7e924a2299a806f42e8e801a">5 inch 5/16 gap-- $18.00</option>
	<option value="a0ba8dcfafb9466b86c7ca8b25073054">3 inch 3/8 gap-- $18.00</option>
</select>
    <br>
</div>
<div id='496368164' class="amazonRow">
    <img id='496368164_img' src="/mobile/images/cart_button_1.png" />
</div>

<br>

<?php
foreach($products as $key => $value):?>
    <div class="row beige border border-dark border-right-0 border-left-0">
        <div class="col">
            <figure class="figure float-left">
                <img src="images/<?=$value->image;?>" class="figure-img img-fluid rounded" alt="the stand">
                <figcaption class="figure-caption text-sm-center">Item Number
                    <?=$value->number;?>
                </figcaption>
            </figure>
        </div>
        <div class="col flex flex-text">
            <?=$value->weight;?>
                <?=($value->weight < 1)?'Pound':'Pounds' ;?>
        </div>
        <div class="col flex flex-text">
            <?=$value->size;?> Inch Wide<br>
                <?=$value->gap;?> Inch Gap
        </div>
        <div class="col red flex flex-text">
            $
            <?=$value->price;?>
        </div>
    </div>
<?php endforeach; ?>



    <br>
    <br>
    <br> <strong> 
    If your glass is a bit too thick in a couple of spots to fit in the slot, you may have to grind it a bit<br>
    <br>
	Available in 5, 6, 8 and 10 inch lengths<br>
	Material: Solid Steel (No Tubing)<br>
<br></strong>
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-3lg.JPG" class="img-fluid"><br>
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-14sm250.jpg" class="img-fluid">
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-6sm250.jpg" class="img-fluid">
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-7sm.jpg" class="img-fluid">
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-8sm250.jpg" class="img-fluid"><br> A slightly slumped piece can fit between the bars.<br>
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-9sm250.jpg" class="img-fluid">
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-10sm250.jpg" class="img-fluid"><br>
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-11sm250.jpg" class="img-fluid">
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-12sm.jpg" class="img-fluid"><br>
    <img alt="display stand for fused glass" src="images/90670-cross-hatch-1lg.JPG" class="img-fluid"><br> Display stands to show off your art piece! All of our stands are master designed and made to last with contemporary design motifs. Support heavy
    fused glass pieces or any other medium such as wood, clay, ceramic, bronze or other heavy to light metal art pieces. Several unique designs to support a variety of shapes circular to rectangular and square. Many art projects look amazing propped up
    instead of flat on a table. Take advantage of displaying your piece to add that final professional touch.

    <!-- END content -->
    <?php include_once(ROOT .'/mobile/includes/rightcol.php'); ?>