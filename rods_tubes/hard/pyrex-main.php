<?php 
    define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
    $title="Colored Borosilicate Glass Tubing - Sundance Art Glass";
    $description="Glass Alchemy and imported Colored Borosilicate Tubes. Sundance Art Glass!";
    $keywords="Tailor Made Tubes,Northstar Colored Tubing,Glass Alchemy,Northstar Glass,Colored Boroscilicate Tubing,colored glass,Chinese,Color,Glass,Tubing,blue,black,green,lavender,pink,rainbow,water,fire,unity,dragons eye ";
    $abstract="At Sundance Art Glass you will find beautiful colored tubing for lampworkers and glassblowers!";
    $location='pyrex-glass-colored-tubing.php';
    include_once(ROOT ."/mobile/includes/header.php");
    $hardGlass=true;
?>

<!-- START content -->
<div class="row">
    <div class="col">
        <h1 class="text-center">Solid Colored Borosilicate Tube<br>
    </div>
</div>
<div class="row">
    <p class="centerBS col text-center">
        This glass is compatible with Pyrex, Schott, Duran, Sunsilica, Northstar, Glass Alchemy, Borostix and any other COE 33 Borosilicate Glass.
        <br>
    </p>
</div>
<br>
<div class="row">
    <img class="img-fluid mx-auto" src="images/pipes.jpg" alt="Glass bubblers made with 1 inch Kimble tubing. " width="288" height="222"><br>
</div>
<br>
<div class="row">
    <p class="alignLeft col text-center">
        Borosilicate (pyrex) colored glass tubing. This is Imported. However, it is a serious improvement over older imported tubing. This has a stable COE whereas in the past imported colored tubing was very unstable. Treat it with respect and it will return
        the favor.
    </p>
    <br>
</div>
<div class="row">
    <p class="alignLeft block bold red col text-center">
        For Shipping we often cut the tubes in half to 24 inches to save shipping costs. If you need full length tubes please make a note on your order.
    </p>
</div>
<hr>
<div class="row">
    <div class="col text-center">
        <span class="x-large"><strong>Borosilicate Pyrex Type Colored Tubing</strong></span>
    </div>
</div>
<hr class="my-4">

<?php 
    require_once DBROOT.'asianBoroColor.php';
    foreach ($asianBoroColor as $key => $value) {
        $value->display('tube');
    }
?>

<hr class="my-4">

<!--<div class="row">
            <TD class="white">        
                    
            <img alt="borosilicate pyrex type colored glass tubing" src="images/green-scallop.jpg"></div> 
            <div class="col ">        Green Scallop<br>
            <br>		#BS45X1.8G</div> 
            <div class="col ">        1-3/4&#34; diameter<br>		
            45mm diameter<br>		<br>		1.8mm wall<br>		<br>		51&#34; Long Tube</div> 
            <div class="col ">        $20.00<br><br>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=e252f87ee929497fac72636b1d52f93d">
            <img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/></a>	</div> 
            </div>-->
<!--<div class="row">
            <TD class="white">        
                    
            <img alt="borosilicate pyrex type colored glass tubing" src="images/blue-scallop.jpg"></div> 
            <div class="col ">  Cobalt Blue Scallop<br>
            <br>		#BS45X1.8B</div> 
            <div class="col ">        1-3/4&#34; diameter<br>		
            45mm diameter<br>		<br>		1.8mm wall<br>		<br>		51&#34; Long Tube</div> 
            <div class="col ">        $20.00<br><br>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=9a29e49fc47f41489365c4a6bd055650">
            <img src="/mobile/images/cart_button_1.png"  alt="click here to purchase"/>	</div> 
            </div>-->

<br>
<hr>
<br>
<br>
<a href="murrini.php"><img src="images/murrini-words.jpg" alt="Borosilicate Millefirori Murrini Pyrex Decorative Designs" width="144" height="64"></a><span class="style8"><br>
  <br>
  <a href="murrini.php">Click here to see Borosilicate 
  Murrini!</a></span><br>
<br>
<hr class="block">
<h1><span class="red block margin_10">Need Colored Glass Rod?</span></h1>
<div class="row">
    <div class="col text-center">
        <h3 class="white"><img class="mx-auto img-fluid" src="/mobile/images/dichroic_tubes.jpg" alt="Need Colored Hard Glass?"></h3>
    </div>
</div>
<div class="row">
    <div class="col text-center"><a href="index.php">Click Here for colored Glass Rod</a></div>
</div>
<!-- END content -->
<hr style="margin-top:25px;">

<?php include_once(ROOT ."/mobile/includes/rightcol.php"); ?>