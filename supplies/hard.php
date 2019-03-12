<?php 
	define('ROOT',$_SERVER['DOCUMENT_ROOT']);
	$title='Decorative Accessories for Flameworking Glass Beadmaking - Sundance Art Glass';
	$description='Decorative Accessories for Flameworking Glass Beadmaking - Sundance Art Glass!';
	$keywords='tools, glass, supplies, bead making, art glass, gold wire,fuming, sculptures, glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    $location='decaccesspyrex.php';
	include_once(ROOT .'/mobile/includes/header.php'); 
?>

<style type="text/css">
    @import url('/mobile/includes/css/basic.css'); 
    .style1 {
        text-align: center;
    }
    
    .style3 {
        text-align: center;
        border-width: 1px;
    }
    
    .style8 {
        font-size: x-large;
    }
    
    .style10 {
        border-width: 1px;
        text-align: center;
        background-color: #ffffca;
    }
</style>


<!-- START content -->
<div class="row">
    <div class="col-12 text-center">
        <h1 class="xx-large">Accessories</h1><br>
        <h2 class="medium">for Glassblowing, Lampworking, Glass <br>Bead Making and Flame Working</h2><br><br>
    </div>
</div>
<hr> 
<?php include ROOT.'/mobile/includes/dbs/lavender.php'; ?>
<hr>

<hr>
<br>
<div class="row">
    <div class="col-12 text-center">
        <span class="style8">Gold and Silver Wire</span><br> <span class="large">for fuming glass</span><br><br>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col-12">
        <img class="img-fluid float-left clickImg" src="images/goldwiresm.jpg" alt="gold and silver wire for fuming glass" data-bigimg="lampworking/images/goldwire.jpg"  data-title="Gold and Silver Wire")> Nearly pure gold and
        silver wire. Cut off a short piece and heat stick it to the molten end of a borosilicate (Pyrex) glass rod. Put the metal in the direct flame and get it hot. The metal will slowly burn off and make &quot;smoke&quot;. When you place glass in the
        &quot;smoke&quot; it will fume the glass. Use proper ventilation, never breath any type of metal fumes.<br><br> The silver will easily stick to the glass, but pure gold (24 kt.) <br> does not want to stick to the glass, so either:
        <br><br> 1) Put down a silver coating and then use the pure (24kt.) on top of the silver coating
        <br><strong>OR</strong> 2) Use the less pure gold (22kt.), the impurities will help the gold stick to the glass.<br><br> Each method will actually give you a slightly different effect.<br>
        <br><strong>Please bear in mind that there is a minimum order 
            <br>amount for each item in this section.</strong><br><br>
    </div>
</div>
<br>
<hr>

<?php
    include DBROOT.'goldWire.php';
    foreach ($goldWire as $key => $value) {
        $value->display('wire');
    }
?>

<hr>

<div class="row">
    <div class="col-12 text-center">
        <br><span class="red"><strong>DISCLAIMER</strong></span>: Please keep in mind that due to the constantly fluctuating price of <br>precious metals these prices are subject to immediate and sudden change.
    </div>
</div>
<br>
<br>
<hr><br>
<br>
<!--<IMG SRC="lampWEB/thompsonsm.jpg" WIDTH="65" HEIGHT="55" ><span class="style8">Moon Dust</span><br> <br>

	<br>

	Moon Dust - Also known as Luster Powders and Pixie Dust are used to add sparkle,
   luster, or hi-lite to glass. (Also used as the &quot;sparkle&quot;
   stuff in the liquid glass chambers filled with mineral oil.)
   <br>

	<br>

	To use, place powder on your work bench, graphite marvering pad or in a 

	small bowl. Roll or dip your glass into the powder. Blow off excess powder 

	and replace the bead into the flame to fuse the powder into the glass. It 

	will not fully melt into the glass. Do not overheat or the metallic sheen 

	will burn off, leaving a white residue. Moon Dust is composed of high 

	temperature minerals. It actually never melts but just sticks to the molten 

	glass, and therefore has minimal compatibility problems and works for all 

	kinds of glass, hard or soft.<br><br><span class="large">All colors packaged 

	and priced in 2 ounce portions.</span><span class="medium"><br></span>

	<br><br>


			 <div class="row">
				 <td style="width: 40px; height: 18px;" class="auto-style8">Item #</div>
				
				 <td class="auto-style8" style="width: 299px; height: 18px;">Description</div>
				 <td class="auto-style9" style="height: 18px">Price</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4210</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Solid Golden</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=f5a2e7e3432b47a3b206211eca80e5e5"> 
				 <img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
				 </div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4211</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Solid Cobalt Blue</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=f9390adff3074deea472aaf9e243d8a1"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4212</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Emerald</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=d817870903fe40b7941f4060e077faa6"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4213</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-White</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=4b5a578a9e67421bb4002bbb18fd0d57"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4214</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Black</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=4d015b58987544eb9c62f28e72001eb8"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4215</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Red</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=076b60a454774cbc9656eff3f0ca1802"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4216</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Yellow</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=a81c1c8814a7471c80b4ac3e0d6d7940"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4217</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder&nbsp;-Pink</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=d92d45749db946f8baef3ebe3b3b9517"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4218</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder-Blue</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=1f6e2333a460416b81a5831141cf89ca"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>
<hr>
<div class="row">
				 <td class="auto-style4" style="width: 40px">4219</div>
				 <td class="auto-style4" style="width: 299px">Moon Dust, Luster Powder-Turquoise</div>
				 <td class="auto-style7">$4.50<br><br>
				 <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=24fd93028e7f41daae6f213bcf4381a4"><img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>
</div>
			 </div>

		 
		 
<br><br>

<IMG SRC="devidgol.gif" WIDTH="477" HEIGHT="7">-->


<!-- END content -->



<?php include_once(ROOT .'/mobile/includes/rightcol.php');  ?>