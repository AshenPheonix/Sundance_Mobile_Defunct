<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
$title = 'Gold Silver Luster Powder Reduction Frit Iridizing Spray for Flameworking Glass Beadmaking- Sundance Art Glass Center';
$description = 'Decorate your beads with something special! For glass beadmakers, lampworkers, and flameworkers. Add luster powder, silver highlights, iridescent sheens, liquid gold, enamels, and more! Goldstone in more sizes than found anywhere else Easy ordering and shipping even overseas.';
$keywords = 'Etching Cream,Iridizing Liquid,Liquid Gold,Gold wire,silver wire,Paladium leaf,Gold leaf,silver leaf,,enamil poweders,goldstone,supplies,decorative items,accesory';
$abstract = 'Flameworking Lampworking Glass Beadmaking Luster Powders Iridescent Sheen Dichroic , Sparkle Glass Hi-Lite , metallic sheen on glass, enamel powders, morettti glass COE 104, Fusing Firing Kiln Gold Silver Palladium, Liquid Gold, White Gold , gold silver wire Fuming glass , iridizing spray beads marbles sculptures pipes, etching cream frosted, goldstone aventurine rods sparkles sparkley';
$location = 'goldsilverr.php';
include_once ROOT . '/mobile/includes/header.php';
require_once DBROOT.'goldstone.php';
?>
<style>
    ul.inner>li {
        list-style-type: disc;
    }

    ul.inner {
        text-align: left;
    }
</style>
<div class="row">
    <div class="col">
        <h1>Supplies and Decorative Accessory Items</h1><br>
        <h2>for Flameworking, Lampworking, & Glass Beadmaking</h2>
    </div>
</div>

<div class="row">
    <div class="col"><img src="images/goldstone-1lg-lampworking-glass-beadmaking-words.jpg" alt="Piles of Goldstone" class="img-fluid"></div>
</div>

<div class="row">
    <div class="col">
        <h4>Goldstone Aventurine</h4>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            Aventurine isn't perfectly compatible, although Effetre COE104 seems to tolerate it. Great for making stringers and decorating beads. Make a stringer out of a chunk or roll your molten bead across small pieces. The shape of each piece is different than
            our competitors. They have "chips" which are very different in shape than our more desirable nearly round pieces. We use a special technique to achieve this shape. The piles in the picture are about 1 Ounce. Available in 2 sizes.<br>
            <br>Stringers can be made by picking up a piece, encasing it in clear, pulling and marvering until desired length and diameter are reached.
        </p>
    </div>
</div>

<?php
foreach ($goldstone as $value)
    $value->display('goldstone');
?>

<div class="row">
    <div class="col">
        <img src="images/gold%20aventurine.jpg" alt="Gold Aventurine" class="img-fluid">
    </div>
    <div class="col">
        <img src="images/blue%20aventurine.jpg" alt="Blue Aventurine" class="img-fluid">
    </div>
    <div class="col">
        <img src="images/green%20aventurine.jpg" alt="Green Aventurine" class="img-fluid">
    </div>
</div>
<hr>

<div class="row" id="enamels">
    <div class="col"><img src="images/thompson-med.jpg" alt="Some Enamel Powders" class="img-fluid clickImg" data-bigImg="images/thompsonlg.jpg" data-title="Enamel Powders"></div>
</div>

<div class="row">
    <div class="col">
        <h3>Enamel Powders</h3>
    </div>
    <div class="w-100"></div>
    <div class="col">
        Our enamel manufacturer is now making colored enamels that are compatible with Effetre (Moretti) Glass! COE 104 This is used to easily apply a thin coating of color or to add a tiny dot pattern to glass. To use, place powder on your work bench on a graphite
        marvering pad or in a small bowl. Roll or dip your glass into the powder. Put the glass back into the torch flame and melt into the glass surface. Surface can then be encased with a transparent glass for yet another effect. Each item is one ounce
        of powder.
    </div>
</div>
<br>
<?php /*
<div class="row border border-dark border-right-0 border-left-0 beige">
<div class="col">
SAMPG<br> Sample Pack - one of each color including the new transparent colors. This is 40 now, with more as new colors are made. 8-10 grams per color.
</div>
<div class="col flex-image">
<span class="red font-weight-bold">$78</span><br>
<a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=4b984c41f3a143239747d58220c350f1"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
</div>
</div>
 */?>
<br>
<div class="row">
    <div class="col">
        <h3>Transparents</h3>
    </div>
</div>
<br>

<?php
include_once DBROOT . 'Enamels.php';
foreach ($transparent as $value) {
    $value->display();
}
?>
<br>
<div class="row">
    <div class="col">
        <h3>Opaques</h3>
    </div>
</div>
<br>
<?php foreach ($opaque as $value) {
    $value->display();
}
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <img src="/mobile/glow_items/images/104pendant.jpg" alt="Glowing Glass" class="img-fluid">
    </div>
</div>
<div class="row">
    <div class="col">
        <h3>Use Glow Powders with Glass Fusing</h3>
        <br><a href="../glow_items/index.php">Click Here for Glow Glass Powders</a>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>Metal Leaf</h3>
    </div>
</div>
<div class="row">
    <div class="col flex-image">
        <img src="images/gold-leaf-heavy.jpg" alt="Gold Leaf" class="img-fluid">
    </div>
    <div class="col">
        Very thin squares of the real thing. Place small pieces of this metal on your graphite marvering pad and roll your bead across it to pick it up. Be careful, the direct flame will melt away the metal. Cover the metal with dabs of transparent glass. Don't
        be fooled with the commonly available inexpensive leaf that is only colored aluminum. Approximate Sheet Sizes are 3-3/8" to 3-3/4" Square.
    </div>
</div>

<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        #12700<br>
        <strong>Copper</strong> Leaf (very thin) sheet size 5&frac12;" sq.
    </div>
    <div class="col flex-text">
        25 Sheets<br>
        <span class="red font-weight-bold">$9.50</span>
    </div>
    <div class="col">
        <label>Qty: <input type="number" min="0" value="0" step="1" id="b81e6095f8ce4024b55492dd710f5599"></label>
        <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>
<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        #16502<br>
        <strong>Silver</strong> Leaf (very thin)
    </div>
    <div class="col flex-text">
        25 Sheets<br>
        <span class="red font-weight-bold">$9.50</span>
    </div>
    <div class="col">
        <label>Qty: <input type="number" id="6f0e24df2c844d6ba40150363df43b07" value="0" step="1" min="0"></label><br>
        <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>
<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        #16503<br> Heavy <strong>Silver</strong> Leaf (Medium Thickness) - a thin foil*
    </div>
    <div class="col flex-text">
        25 Sheets<br>
        <span class="red font-weight-bold">$25.50</span>
    </div>
    <div class="col">
        <label for="031aa33cca72403c80e753d20e2e09f2">Qty: <input type="number" name="031aa33cca72403c80e753d20e2e09f2" id="031aa33cca72403c80e753d20e2e09f2"min="0" value="0" step="1"></label><br>
        <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>
<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        #16501<br>
        <strong>Gold</strong> Leaf 22Kt Very Thin
    </div>
    <div class="col flex-text">
        25 Sheets<br>
        <span class="red font-weight-bold">$74</span>
    </div>
    <div class="col">
        <label for="2369e33e0b5840809386560e581bdd26">Qty: <input type="number" name="2369e33e0b5840809386560e581bdd26" id="2369e33e0b5840809386560e581bdd26" min="0" value="0" step="1"></label>
        <button class="btn btn-link qtyBuy">
            <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
        </button>
    </div>
</div>
<div class="row beige border border-dark border-right-0 border-left-0">
    <div class="col">
        #16522<br>
        <strong>Gold</strong> Leaf 23Kt Medium Thick**
    </div>
    <div class="col flex-text">
        10 Sheets<br>
        <span class="red font-weight-bold">$88</span>
    </div>
    <div class="col">
        <label for="c0bd4580d9f549a5a62f891687c48a06">Qty: <input type="number" name="c0bd4580d9f549a5a62f891687c48a06" id="c0bd4580d9f549a5a62f891687c48a06" min="0" value="0" step="1"></label>
        <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>

<div class="row">
    <div class="col font-weight-bold">
        *Some of our competitors are selling this item as "FOIL"<br> **Average Weight of 65g/1000 leaves
    </div>
</div>

<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>Gold and Silver Wire</h3><br> for fuming glass
    </div>
    <div class="w-100"></div>
    <div class="col"><img src="images/goldwire-250x154.jpg" alt="Gold and Silver Wire" class="img-fluid clickImg" data-bigImg="images/goldwire.jpg" data-title="Gold and Silver Wire"></div>
</div>
<div class="row">
    <div class="col">
        <ul class="text-left">
            <li>Nearly Pure Gold and Silver Wire.</li>
            <li>Cut off a short piece and heat.</li>
            <li>Stick it to the end of a borosilicate(Pyrex) glass rod.</li>
            <li>Put the metal in the direct flame and let it get hot.</li>
            <li>The metal will slowly burn off and make "smoke"</li>
            <li>When you place glass in the "smoke," it fumes the glass</li>
            <li class="red font-weight-bold">Always use proper ventilation, never breathe any type of metal fumes.</li>
        </ul>
        <br> Silver will easily stick to glass.<br><br> Pure gold (24 Ct.) does not easily stick to glass, so either<br> 1) Put down a silver coating and then use the pure on top of the silver coating or<br>2) Use the less pure cold (22 Ct), the impurities
        will help the gold stick to the glass
    </div>
</div>
<?php
include ROOT . '/mobile/includes/dbs/goldWire.php';
foreach ($goldWire as $key => $value) {
    $value->display('wire');
}
?>
<br>
<hr class="my-2">

<div class="row">
    <div class="col">
        <h3 class="font-weight-bold">
            Beeswax
        </h3>
    </div>
</div>
<div class="row border border-right-0 border-left-0 border-dark">
    <div class="col-4 flex-image">
        <img src="/lampworking-glass-beadmaking-supplies-tools/beeswax.jpg" alt="Beeswax" class="img-fluid">
    </div>
    <div class="col-8 beige">
        <p>
            Metal Tools will stick to molten glass. It is common to cool metal tools in water. Coat your metal with this beeswax, then dunk your hot tools in cold water.
        </p>
        <strong class="red">$3.00</strong>
        <br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=e88d1d8d1ff84d6da9f2794a6b8b9e68">
            <img src="/mobile/images/cart_button_1.png" alt="Add to Cart" class="img-fluid">
        </a>
    </div>
</div>
<hr class="my-2">
<br>
<?php
include ROOT . '/mobile/includes/dbs/lavender.php';
?>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h3>Etching Cream</h3><br> Simply dip or brush this etching cream to frost the surface of the glass. It will give a frosted matte surface finish.
    </div>
</div>

<div class="row">
    <div class="col"><img src="images/etchingcream.jpg" alt="Etching Cream" class="img-fluid"></div>
</div>
<div class="row border border-dark border-right-0 border-left-0 beige py-2">
    <div class="col">ETCH3 - Etching Cream 3 oz.</div>
    <div class="col">
        <span class="red font-weight-bold">$7.95</span><br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=5f824e6ebd5e47dfa5d9072f4d2f365c"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
    </div>
</div>
<div class="row border border-dark border-right-0 border-left-0 beige py-2">
    <div class="col">ETCH10 - Etching Cream 10 oz.</div>
    <div class="col">
        <span class="red font-weight-bold">$15.99</span><br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=4213010fd7d64c93b6453581744e6c1b"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
    </div>
</div>
<div class="row border border-dark border-right-0 border-left-0 beige py-2">
    <div class="col">
        ETCH22 - Etching Cream 22 oz.
    </div>
    <div class="col">
        <span class="red font-weight-bold">$23.95</span><br>
        <strong>Temporarily out of stock</strong>
        <?php /*
<a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=dd550f48618b457b98c75692c5a19f60"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
 */?>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        Frit Bowl<br>
        <br> Great little stainless steel bowl! Keep all your frit in one place. Easily roll the end of a molten glass rod in the lip for a nice even coating of frit without spreading it across your work space.
    </div>
</div>

<div class="row beige border border-dark border-left-0 border-right-0">
    <div class="col"><img src="fusing/images/6111.jpg" alt="Frit Bowl" class="img-fluid"></div>
    <div class="w-100"></div>
    <div class="col flex-image">
        Frit Bowl<br><br> Volume Discount<br><br> Buy <strong>One</strong> Pay <span class="red font-weight-bold">$8.00</span> each<br> Buy <strong>Two</strong> Pay <span class="red font-weight-bold">$7.20</span> each<br> Buy <strong>Three</strong> Pay
        <span class="red font-weight-bold">$6.40</span> each<br> Buy <strong>Four</strong> Pay <span class="red font-weight-bold">$5.60</span> each<br>
    </div>
    <div class="col flex-text">
        <label for="18ffe26c2365428c9b029fb03383a540">Qty: <input type="number" name="18ffe26c2365428c9b029fb03383a540" id="18ffe26c2365428c9b029fb03383a540" step="1" min="0" value="0"></label><br>
        <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>
<br>
<hr>
<?php include_once ROOT . '/mobile/includes/rightcol.php';