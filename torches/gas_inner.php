<div class="row">
    <div class="col">
        <h3>Gas Regulators</h3>
        <p>
            Two regulators are required when you use a two gas, (oxygen and propane) torch. They fit between the gas tanks and the gas hose. None are needed if you are using the Hot Head torch. Oxygen Regulator is not needed if you are using an Oxygen Concentrator.
        </p>
    </div>
</div>
<?php 
    define('DBROOT',ROOT.'/mobile/includes/dbs/');
    define('CLASSROOT',ROOT.'/mobile/includes/classes/');
require_once DBROOT.'gasEquip.php';

foreach ($equipment as $key => $value) {
    $value->display('regulator');
}
?>

<div class="row border border-dark border-right-0 border-left-0">
    <img src="images/hosesm.jpg" alt="Coiled Red Hose and coiled green hose" class="img-fluid mx-auto"><span class="h3">Gas Hoses</span> Use this hose when you use a two gas torch (oxygen and propane). To attach torch, push the cut ends onto the torch and secure with a hose clamp. These are twin hose sets, one for oxygen and one for propane. The brass end of the hoses are attached to the gas regulators. Propane hose fittings are left handed threads and colored red and oxygen is right handed and colored green - This prevents a mix-up when attaching hoses.<br><br>
    <span class="text-uppercase bg-warning">caution:</span><span class="bg-warning"> Do not use the easy to find oxygen/acetylene type hoses. The propane gas will rot them.</span>The hoses we sell are made for all types of gas, including propane. Hose ends have female brass fittings.
</div>

<?php
foreach ($equipment as $key => $value) {
    $value->display('hose');
}
?>
<br>
<hr>

<div class="row">
    <div class="col">
        <h2>Y - Connectors for Hose</h2><br>
        <img src="/lampWEB/fittings.jpg" alt="Y Connectors" class="img-fluid"><br>
        Y Connector - Connect this fitting at the output of the regulator and attach two hoses so you can use two torches from the same tank. Oxygen and propane Y are packaged and priced separately.
        <br><br>
        Y Connector with valves - Same as the Y connector described above except has two on/off valves, one for each hose.
    </div>
</div>

<?php 
    foreach ($equipment as $key => $value) {
        $value->display('y-connector');
    }
?>
<div class="row">
    <div class="col">
        <p>* The FA30 (below) connects between the regulator and the gas hose and is more commonly used.</p>
    </div>
</div>
<hr>
<br>
<div class="row">
    <div class="col">
        <h2>Caps for "B" size hose</h2><br>
        <img src="images/gas-hose-end-cap-lg.jpg" alt="Brass fittings with a hose" class="img-fluid">
    </div>
</div>

<?php
foreach ($equipment as $key => $value) {
    $value->display('b-cap');
}
?>

<hr>
<div class="row">
    <div class="col">
        <h2>Flashback Arrestors</h2><br>
        <img src="images/flashback-arrestor.jpg" alt="Arrestor attached to regulator attached to green tank" class="img-fluid figure-img rounded"><br>
        In some rare situations, a flame can travel back down a hose to the gas tank and cause an explosion.<br><br>
        This device helps prevent this reverse gas flow and flashback by using a reverse flow check valve and a flame arrestor.<br><br>
        Packaged and priced with both an oxygen and a propane arrestor.
    </div>
</div>

<?php
foreach ($equipment as $key => $value) {
    $value->display('flashback');
}
?>
<div class="row">
    <div class="col">
        <p>Note: Flashback arrestors have an arrow stamped on it to indicate the gas flow direction. Works in one direction only.</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/fa10.jpg" class="figure-img img-fluid rounded" alt="A flashback arrestor setup flowing right">
            <figcaption class="figure-caption text-xs-right">A2 optional, not always needed and are not included with the flashback arrestors</figcaption>
        </figure>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>*The FA30 connects between the regulator and the gas hose and <strong>is more commonly used.</strong> Requires B size fittings on the hose.</p>
    </div>
</div>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h2>All in One - 4 in 1</h2><br>
        <figure class="figure">
            <img src="images/QDF30.jpg" class="figure-img img-fluid rounded clickImg" alt="All in one flowing right" data-bigImg="images/QDF30.jpg" data-title="All in one, flowing right">
            <figcaption class="figure-caption text-sm-small">Combination flashback arrestor and Quick Connect - item #QDF30</figcaption>
        </figure><br>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=ec62cac1f789eaa0208d9b0e992c3d44">
            <img src="/mobile/images/cart_button_1.png" alt="Buy Now!" class="img-fluid">
        </a>
    </div>
</div>

<div class="row border border-dark beige">
    <div class="col">
        <p>Four Functions, one item. Shorter and less expensive than if you purchace the items separately.</p>
        <ul>
            <li class="disk">A Flashback Arrestor</li>
            <li class="disk">A Quick Connect/Disconnect</li>
            <li class="disk">An Automatic Shutoff Valve</li>
            <li class="disk">An Internal Reverse Flow Check Valve</li>
        </ul>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h2>Leak Detection Fluid</h2>
        <div class="w-100"></div>
    </div>
</div>

<div class="row beige border border-dark">
    <div class="col white">
        <figure class="figure">
            <img src="images/westernenterprisesleaksm.jpg" class="figure-img img-fluid rounded" alt="Leak Detection Fluid container">
            <figcaption class="figure-caption text-sm-center">LT100</figcaption>
        </figure>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            A must if you assemble your gas equipment. Use when connecting gas hoses, regulators, torches, flashback arrestors, quick connects, etc.
            <strong>Leak Detection Fluid</strong><br>
        </p>
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            After tightening your fittings, pressurize your gas line. Then dribble a few drops on every fitting. If there is a leak, you will see bubbles at the leaky fitting. You may hear about using soap to check for leaks. It is VERY DANGEROUS! Many soaps have oil in it and oil + pressurized oxygen can be very dangerous. Google it! This liquid is specially formulated just for this purpose and is the only liquid you should use for checking gas leaks.
        </p>
    </div>
    <div class="w-100"></div>
    <div class="col flex-text">
        <span class="red">
            $6.95
        </span>
        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=6c50c4c5194d4c11a6c41d02f21f3375">
            <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
        </a>
    </div>
</div>
<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h2>Hose Quick Connects</h2>
    </div>
</div>
<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/quickconnects.jpg" class="figure-img img-fluid rounded" alt="Three pairs of quick-connect links with flow direction">
            <figcaption class="figure-caption text-sm-center">Makes an easy job out of disconnecting and reconnecting your torch</figcaption>
        </figure>
        <p>
            Easily disconnect your torch to switch to a new torch, or put it away for safe keeping.<br><br>
            Great for quick classroom setup and take down. 
        </p>
    </div>
</div>
<?php
    foreach ($equipment as $key => $value) {
        $value->display('q-conn');
    }
?>
<hr>
<br>

<div class="row">
    <div class="col">
        <h1>Manifold Gas System</h1>
        <img src="images/manafoldsm.jpg" alt="A pair of bronze manifold systems, one completed and one not." class="img-fluid"><br>
        <p>
        Connect up to six torches to the same gas supply with this manifold system. Included are enough fittings and plugs to make 2 to 6 hose connections. Two manifolds are required, one for oxygen and one for propane. All Brass.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Custom Manifold Systems:<br>
            We can help you figure out which parts you would need for your system and pre assemble for no extra charge. Systems might also include quick connects and flashback arrestors. 
        </p>
    </div>
</div>
<div class="row border border-dark beige">
    <div class="col">
        <span class="font-weight-bold">Item #M6</span><br>
            Manifold system. Includes 1 block, 7 fittings and 4 plugs, of which 2 are required. Please specify Oxygen or Propane
    </div>
    <div class="col">
        <span class="red">$57.50</span><br>
        <select>
            <option value="0">Which Gas?</option>
            <option value="fd9158a3bdf744009dbe8dbe41273371">Oxygen</option>
            <option value="b6f7366bb7614137860d0dcbae3e0665">Propane</option>
        </select>
        <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
    </div>
</div>
<br>
<div class="row">
    <div class="col">By Parts</div>
</div>
<?php 
    foreach ($equipment as $key => $value) {
        $value->display('manifold');
    }
?>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/manafold-custom.jpg" class="figure-img img-fluid rounded" alt="Example manifold setup for 3 torches">
            <figcaption class="figure-caption text-sm-center">Example manifold setup for 3 torches</figcaption>
        </figure>
    </div>
</div>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h2>
            Gas Line Splitters
        </h2>
        <p>
            Splitters allow you to run more than one regulator. If you are running multiple torches off one tank, this allows different pressures to each torch. <a href="/mobile/torches/other/manifolds.php">Click Here</a> For a better description and to see how they work.
        </p>
    </div>
</div>

<?php 
    foreach ($equipment as $key => $value) {
        $value->display('splitter');
    }
?>

<br>
<hr>
<br>

<div class="row">
    <div class="col">
        <h2>
            Spark Lighter
        </h2>
    </div>
</div>

<?php 
    foreach ($equipment as $key => $value) {
        $value->display('lighter');
    }
?>

