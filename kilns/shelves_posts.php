<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Kiln Shelves and Kiln Posts for Glass Fusing - Sundance Art Glass Center';
    $description='Kiln Shelves and Kiln Posts for Glass Fusing - Sundance Art Glass Center';
    $keywords='Kiln Shelves and Kiln Posts for Glass Fusing - Sundance Art Glass Center';
    $abstract='Kiln Shelves and Kiln Posts for Glass Fusing - Sundance Art Glass Center';
    $location='kilnshelfr.php';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'shelves.php';
?>

<div class="row">
    <div class="col">
        <h1>Kiln Shelves</h1>
        <h5>for Glass Fusing</h5>
        <img src="images/shelving/fgkilnshelflg.jpg" alt="Stacked Shelving" class="img-fluid">
        <p class="bg-alert">
            <strong class="red">Importnt Note:</strong> If you fire with the smallest size shelf for your project you will have less mass to heat up, saving energy and saving you money. It will also cause your kiln to heat more rapidly, if desired. Most important, the more space you have between the shelf and sides of your kiln, the less risk of thermal shocking your glass. Remember to lift your shelf off the kiln floor with posts, listed below, for more even heating. You might consider purchasing a variety of shelves. You must coat kiln shelves with separator before firing so glass does not stick.
        </p>
        <p>
            Shelves are Magnesium Alumina Silicate with 50% Alumina Cordierite and Mullite This great material has a very low thermal expansion which helps limit shelf cracking. Remember even kin shelves can crack like glass due to thermo shocking.
        </p>
    </div>
</div>

<div class="row fakeBtn beige border border-dark">
    <div class="col py-2">
        <a class="infoPopper" data-text="/mobile/kilns/remote/kilnshelfDamage.php">
            Most kiln shelves are made for ceramics. Most of these shelves have many 
            imperfections in them because it doesn't affect ceramicists, but glass 
            workers need a better surface on their shelves. We found a line of 
            shelves that are as good as they come. Most often our shelves are very 
            nice condition, but some will have some imperfections. Examples of these imperfections can be seen by clicking here. Kiln wash and/or paper will 
            usually minimize or eliminate any issues. Divots are easily filled in. A 
            little  Sanding will also help to to even out the surface.
            <div class="row">
                <div class="col"><img src="images/shelving/kiln-shelf (1) thumb.png" alt="kiln shelf damage" class="img-fluid"></div>
                <div class="col"><img src="images/shelving/kiln-shelf (2) thumb.png" alt="kiln shelf damage" class="img-fluid"></div>
                <div class="col"><img src="images/shelving/kiln-shelf (3) thumb.png" alt="kiln shelf damage" class="img-fluid"></div>
                <div class="col"><img src="images/shelving/kiln-shelf (4) thumb.png" alt="kiln shelf damage" class="img-fluid"></div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col"><strong>Kiln Shelves</strong></div>
</div>

<?php
    foreach ($shelves as $key => $value) {
        $value->display('shelf');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col-12 flex-image"><img src="images/shelving/fgkilnpostlg.JPG" alt="Kiln Shelf posts of varying sizes" class="img-fluid"></div>
    <div class="col flex-text">
        <p>
            It is important to lift your kiln shelf off the floor of your kiln to allow heat to get under the shelf.
            This allows the shelf and your glass to heat more uniform, preventing the glass
            from breaking due to thermal shock and will allow you to heat the 
            kiln at a faster rate. Lay 3 or 4 kiln posts under your shelf to 
            raise it 1 to 1-1/2". It is OK to stack more than one shelf in 
            your kiln if you have elements on the sides of your kiln (as opposed to only in the lid).
        </p>
        <p>
            Heat from the side element will travel between the shelf layers. Although you still might experience some uneven heating.
        </p>
        <p>
            Style may vary - may be square or triangle
        </p>
    </div>
</div>

<?php
    foreach ($shelves as $key => $value) {
        $value->display('post');
    }
?>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';