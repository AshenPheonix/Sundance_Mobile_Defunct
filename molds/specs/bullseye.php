<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Bullseye Glass Ceramic Slumping Molds - Sundance Art Glass';
    $description='Northstar Colored Glass Rods. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
    $keywords='Flameworking Glass Lampworking Glass Pyrex Glass Borosilcate Glass Glass Tubing  Bullseye Glass Ceramic Slumping Mold 8628 Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass California';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    $location='slumpformsmain.php';
    require_once(ROOT .'/mobile/includes/header.php');
    $data=$_GET['prod'];
    require_once ROOT.'/mobile/includes/dbs/molds.php';
    foreach ($molds as $key => $value) {
        if ($value->id==$data){
            $data=$value;
            break;
        }
    }
    $sender='';
    if (strpos($data->type,'round')!==FALSE) {
        $sender='round';
    } elseif($data->type=='rippled') {
        $sender='fluted';
    } elseif(strpos($data->type,'drop')!==FALSE){
        $sender='drop';
    } elseif($data->type=='square'){
        $sender='square';
    } else{
        $sender='special';
    }
    
?>

<div class="row">
    <div class="col">
        <h2>Bullseye Glass Ceramic Slumping Molds</h2><br>
        <a href="../<?=$sender;?>.php#<?=$data->id;?>">
            <button class="btn">Back</button>
        </a>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>
            These are simply the finest slumping molds we have ever found on the commercial market. Slipcast from a specially formulated clay body, they have an exceptionally smooth surface, accept kilnwash uniformly, and do not crack under repeated usage if handled properly. 
        </p>
    </div>
</div>
<?php 
    include 'opening.php';
    include 'using.php';
?>
<div class="row">
    <div class="col">
        <p>
            Note: The measurements given here are for the outer dimensions of the molds. This is to help you determine whether a given mold will fit in your kiln. Since they are handmade, individual molds will vary in size. Never cut glass to fit until you have measured your mold.
        </p>
    </div>
</div>
<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';