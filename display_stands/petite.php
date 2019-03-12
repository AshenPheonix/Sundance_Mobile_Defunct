<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Metal Project Display Stands - Sundance Art Glass';
    $description='Metal Project Display Stands. Your Northern California, West Coast, and International source for artists working glass with a torch and a kiln - Flameworking Lampworking Glass Beadmaking Fusing Firing- Sundance Art Glass Center!';
    $keywords='Metal Project Display Stands,Square stands,invisible stands,v channel satnds,fused glass,glass art display stand,Sundance Art Glass California';
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    require_once(ROOT .'/mobile/includes/header.php');
    require_once DBROOT.'stands.php';
?>
<style>
    .hidden {
        display: none;
    }
</style>
<div class="row">
    <div class="col-12">
        <h1>
            Metal Project Display Stands
        </h1>
        <h3>
            <span class="red">New</span> Petite Series Display Stands
        </h3>
    </div>
    <div class="col-12">
        <img src="http://sundanceglass.com/fused-glass-display-stand-petite/pinto-group-500.jpg" alt="Petite Series Display Stands"
            class="img-fluid">
    </div>
    <div class="col-12">
        <a id="flipper" >
            <p class="fakeBtn beige">What some of our customers say about our stands</p>
        </a>
        <blockquote class="blockquote hidden border border-dark" id="targ">
            <p class="mb-0">
                I just wanted to say how impressed I am with your metal display stands. I am a fine art photographer in
                South Bend, Indiana, and have been looking for metal stands for my photography. I print onto copper and
                steel. I thought your prices were reasonable as well and the craftsmanship is truly wonderful. I am
                hoping that we will do business together soon!
            </p>
            <footer class="blockquote-footer">April L. Hallwood</footer>
        </blockquote>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>Upright sides are parallel. Any distortion is due to camera angle.
            If wire clip is longer than you need for your size project, you can cut it with a wire cutter.</p>
    </div>
</div>

<?php
    foreach ($stands as $key => $value) {
        $value->display('petite');
    }
?>

<script>
    $(() => {
        $('#flipper, #targ').on('click', () => {
            $('#targ').toggleClass('hidden');
        })
    })
</script>
<?php
    require_once ROOT.'/mobile/includes/rightcol.php';