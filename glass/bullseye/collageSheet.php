<?php  
define('ROOT',$_SERVER['DOCUMENT_ROOT']); 
$title='Bullseye Glass Sheets, Frit, Rods, Stringers, Dichroic, and Accessories for Fusing and Lampworking. COE 90.'; 
$description='Vast selection of Bullseye glass, of COE 90 compatibility, for fusing and hot glass working with a kiln or torch. Beautiful sheets, colored rods, fine to coarse frits, dichroic textures and patterns, stringers, metals, glass chemicals, and more. International shipping.'; 
$keywords='bullseye coe 90 compatible fusing molds frit crushed sheet mosaic dichroic stringers rods opaque transparent streaky uroboros coarse frit fine meidum powder kits tubes multi packs iridizer spray gold silver palladium bronze metal fuming liquid white luster powder reduction sparkle hi-lite leaf accessories'; 
$location='fgbulfractstream.php';
include_once(ROOT .'/mobile/includes/header.php'); 
?>
<div class="row justify-content-center">
    <div class="col">
        <h1 class="text-center">Bullseye Collage Glass<br>30%off List Price</h1>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col">
        <p class="text-center">Bullseye's Casting Team makes collage glasses by arranging pre-formed glass elements - frits, stringers or confetti - onto the metal rolling table.</p>
        <p class="text-center">They then ladel clear glass over these elements and roll them into a one-of-a-kind sheet of art glass, perfect for glass fusing, glass casting, lampworking and flameworking.</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col">
        <p class="text-center">
            Great for Stained Glass - Glass Fusing - Glass Casting - Flameworking<br> All Tested compataible with COE 90 glass
        </p>
    </div>
</div>

<?php 
$GlassType='mardi';
include_once ROOT.'/mobile/glass/bullseye/scripts/info.php';
?>
<hr>
<div class="row justify-content-center">
    <div class="col">
        <h2 class="text-center">Mardi Gras Glass</h2><br>
        <p class="text-center">Mardi Gras sheets combine a colorful sprinkling of frits with glass threads (called stringers) that fuse, twist, and curve under the force of the molten glass into a lively cascade reminiscent of Carnival or ticker tape parades.</p>
    </div>
</div>
<?php
include ROOT .'/mobile/glass/bullseye/bullseyeSet.php';
?>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col">
            <h2 class="text-center">Streamer Glass</h2><br>
            <p class="text-center">
                Stringers begin as straight threads of colored glass. Rolled beneath molten clear glass, the 2 to 3 color stringer mixtures swim into free-form lines within the clear sheet.
            </p>
        </div>
    </div>

    <div id="renderStreamers"></div>
    <script>
        riot.mount('div#renderStreamers', 'renderer', {
            store: glassStore,
            type: 'stream'
        })
    </script>

    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center">
                Chopstix Glass
            </h3><br>
            <p class="text-center">
                Let the stix fall where they may! Geometric, yet spontaneous Chopstix feature straight, unwavering stringers that rest in a random criss-cross pattern on a clear base
            </p>
        </div>
    </div>

    <div id="renderChopstix"></div>
    <script>
        riot.mount('div#renderChopstix', 'renderer', {
            store: glassStore,
            type: 'chop'
        })
    </script>

    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center">Fracture - Streamer Glass</h3>
            <br>
            <p class="text-center">For a dramatic collage of sensuous lines and translucent paper thin glass shapes, choose this glass. Kiln formers often use this glass in their fused and slumped projects. </p>
        </div>
    </div>
    <div id="renderFracs"></div>
    <script>
        riot.mount('div#renderFracs', 'renderer', {
            store: glassStore,
            type: 'frac'
        })
    </script>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col">
            <h3 class="text-center">Fractures on white Glass</h3>
            <br>
        </div>
    </div>
    <div id="renderFracWhite"></div>
    <script>
        riot.mount('div#renderFracWhite', 'renderer', {
            store: glassStore,
            type: 'fracW'
        })
    </script>

    <?php
$fusing=true;
include_once(ROOT .'/mobile/includes/rightcol.php'); 
?>