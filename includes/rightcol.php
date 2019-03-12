</div>
<!-- End of center column -->
<div class="d-lg-block d-none col-lg-2" id="layoutRightColumn">

    <span style="font-size:12px;">
        <a href="https://www.mcssl.com/Portal/Register.aspx?mid=/*private*/">
            Register Account
        </a>
        <a href="https://www.mcssl.com/Portal/Login.aspx?mid=/*private*/">
            Login
        </a><br>
        <a href="https://www.mcssl.com/Portal/Account/Profiles.aspx?mid=/*private*/">	View Account
        </a> | 
        <a href="https://www.mcssl.com/Portal/Logout.aspx?mid=/*private*/">
            Logout
        </a>
    </span>

    <div class="greyContainer">
        <div class="containerHeader">Shopping Cart</div>
        <button class="cartButton margin_10" style="cursor:pointer" onClick="window.location='http://www.mcssl.com/SecureCart/SecureCart.aspx?mid=/*private*/'">View Cart
                    </button>
    </div>
    <div class="greyContainer" style="border-collapse:collapse;">
        <div class="containerHeader">Secure Shopping</div>
        <img style="cursor:pointer;padding:10px;" alt="Secure Checkout" src="/mobile/images/learn-more-now-web.jpg" width="140" onClick='window.open("http://www.1shoppingcart.com/features/4", "infoWindow","width=500,height=500")'><br>
    </div>

    <div class="greyContainer">
        <div class="containerHeader" id="cleanSearch">Search</div>
        <br>
        <?php include ROOT.'/mobile/includes/search.php';?>
    <!--
        <div style="padding: 0px 0px 10px 0px;">
            <br>
            <script>
                (function() {
                    var cx = '000409918650992771376:z7zjmcijfh4';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                        '//www.google.com/cse/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();
            </script>
            <gcse:searchbox-only></gcse:searchbox-only>

            <div id="google_translate_element"></div>
            <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        gaTrack: true,
                        gaId: 'UA-8723721-3'
                    }, 'google_translate_element');
                }
            </script>
            <script src="/mobile//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
        -->
    <br>
    </div>
    <div class="greyContainer containerUL">
        <div class="containerHeader">Specials!</div>
        <span class="block red bold larger margin_top_6">New Stuff And Sales!</span>
        <!--<ul class="ulLink">-->
        <ul class="paddingLeft18" style="text-align:left;">
            <li><a href="/mobile/lgnew.php">Glassblowing/Pipe making</a></li>
            <li><a href="/mobile/glass-bead-new.php">Bead making</a></li>
            <li><a href="/mobile/glass-fusing-sale.php">Fusing</a></li>
        </ul>
        <br>
    </div>
    <?php if( isset($hardGlass)):?>
    <div class="greyContainer containerUL">
        <div class="containerHeader">Need an Annealer?</div>
        <p class="block bold">We have some great Annealing Kilns</p>
        <a href="/mobile/kilns/annealing.php">
            <p class="block bold">Follow me to the kilns!</p>
        </a>
    </div>
    <?php endif;?>
    <div class="greyContainer containerUL">
        <div class="containerHeader"><span class="red">Clearance Items!</span></div>
        <!--<ul class="ulLink">-->
        <ul class="paddingLeft18" style="text-align:left;">
            <li>Used items</li>
            <li>Prototypes</li>
            <li>Discontinued Items</li>
            <li>Surplus Items</li>
            <li>Cosmetic Issues</li>
            <li>Dirty Packaging</li>
            <li>Overstocked items</li>
            <li>Always functional</li>
            <li>Always a great deal</li>
            <li><a href="https://www.clearanceit.com/" target="_blank">Click here</a> to visit<br> Clearanceit.com</li>
        </ul>
    </div>
    <!-- Get the classes-->
    <!--START new items-->
    <!--<div class="greyContainer">
	<div class="containerHeader red">New Items</div>
		<span class="red bold larger">New Items!</span>
        <ul>
		  <li class="newico"><a href="../colour-de-verre-molds.php">Fusible Casting Molds!</a></li>
	      <li class="newico"><a href="../glass-bead-tools-r.php">Glass Bead Reamer!</a></li>
		  <li class="newico"><a href="../glass-bead-tools-r.php">Hollow Mandrels!</a></li>
	      <li class="newico"><a href="../effetre-glass-rods-transparents.php">
			Moretti - Effetre New Colors!</a></li>
		  <li class="newico"><a href="../glass-fusing-kiln-fusion14.php">New 14&quot; 
			Kiln!</a></li>
		  <li class="newico"><a href="../glass-fusing-kiln-fusion16.php">New 16&quot; 
			Kiln!</a></li>
	    </ul>
		&nbsp;<br>
	</div>-->
    <!--END new items-->
    <!--START sale items-->
    <!--<div class="greyContainer containerUL">
	<div class="containerHeader red">Sales</div>
	<span class="red bold larger">Sales</span>
        <ul class="sale">
        	<li>
			<a title="25% OFF PRECISION" href="../glass-rod-precision-104.phpl">Precision Soft Glass 104</a><br>
			</li>
			<li>
			<a href="../bookWEB/videos-flameworking.php">DVD&#39;s on Sale</a>
			</li>
			<li>
			<a href="../northstar-glass-rod-odd-seconds.php">Northstar Odds and Seconds</a>
			</li>
			<li>
			<a href="../glass-alchemy-discontinued-rods.php">Alchemy Limited Edition and Clearance!</a><br></li>
			</ul>
		&nbsp;<br>
	</div>
	<br>&nbsp;-->
    <!--END sale items-->
</div>
</div>
<div class="row">
    <div class="col-12 d-sm-none d-md-none d-lg-none d-xl-none">
        <span>Clearance Items!</span><br>
        <ul id="phoneClearance" class="list-unstyled">
            <li>Used Items</li>
            <li>Prototypes</li>
            <li>Discontinued Items</li>
            <li>Surplus Items</li>
            <li>Cosmetic Issues</li>
            <li>Dirty Packaging</li>
            <li>Overstocked Items</li>
        </ul>
        Always functional and always a great deal! <a href="http://www.clearanceit.com">Click Here</a> to visit our companion site, www.clearanceit.com.
    </div>
</div>
<?php include_once(ROOT . '/mobile/includes/footer.php'); ?>