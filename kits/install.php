<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Lampworking Kits Flameworking Kits Glass Beadmaking Kits - Sundance Art Glass';
    $description='Your source for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center!';
    $keywords='Flameworking Kits Lampworking Kits Beadmaking Kits Sundance Art Glass  Flameworking Lampworking Glass  Beadmaking Sundance Art Glass Paradise California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='Flameworking Kits Lampworking Kits Beadmaking Kits Sundance Art Glass  Flameworking Lampworking Glass  Beadmaking Sundance Art Glass Paradise California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'kits.php';
?>

<div class="row">
    <div class="col">
        <h1>Gas Equipment</h1>
        <h4>For all Torches</h4>
    </div>
</div>

<div class="row border border-dark border-right-0 border-left-0">
    <div class="col-12 flex-image">
        <img src="images/kitwidesm.jpg" class="img-fluid" alt="Kits">
    </div>
    <div class="col-12 beige">
        <h4 class="red">Just beginning? You will need to:</h4>
        <ul class="text-left">
            <li class="disc">
                Select a Torch, (<a href="/mobile/torches/index.php">Click here</a> for our torches)
            </li>
            <li class="disc">
                Select the gas equipment kit needed to hook up your kit.
            </li>
            <li class="disc">
                Choose the Tool Kit for what you want to build and is in your budget. <a href="/mobile/kits/toolkit.php">Click Here</a>
            </li>
            <li class="disc">
                Select your kiln, if desired. <a href="/mobile/kilns/annealing.php">Click here for our kilns</a>
            </li>
        </ul>
        <p>
            Discounts will be applied automatically.
        </p>
    </div>
</div>

<hr class="my-4">

<?php
    foreach ($kits as $key => $value) {
        $value->display('gas');
    }

    require_once ROOT.'/mobile/includes/rightcol.php';