<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Sundance Art Glass - Americas Art Glass Center';
    $description='Sundance Art Glass is your preferred distributor of Bethlehem, Hothead, Nortel, Carlisle, and GTT torches, Various kits for the beginning hobbyist who wants to learn more about all types of glass work including pipe making, beadmaking, marble making, fusing, lampwork, sculpture and more.  We are a proud disdiv tributor of Bullseye, Schott, div trautman, Northstar, Momka, and Glass Alchemy Rods, Frits, Powders, Sdiv tringers and Tubing. Paragon kilns always in stock, along with several other major brands. Look no further than Sundance for all of your glassworking supply and tool needs';
    $keywords='art clay silver,bethlethem burners, the grand, bullseye,clear rod,color rod,dicro rod,flameworking,glass Beads,glass blowing,glass fusing,glass working,glassblowing,glassblowing kits,glassblowing tools,glassblowing torches,glassworking,graphite tools,hot glass,hothead torch,kiln,kiln parts,lampworking,lamworked,momka,nortel minor,northstar,shaping tools,stained glass,sdiv tringer,suppliers,tungsten tools,used glassblowing supplies beadmaking,glass';
    $abstract='art clay silver,bethlethem burners, the grand, bullseye,clear rod,color rod,dicro rod,flameworking,glass Beads,glass blowing,glass fusing,glass working,glassblowing,glassblowing kits,glassblowing tools,glassblowing torches,glassworking,graphite tools,hot glass,hothead torch,kiln,kiln parts,lampworking,lamworked,momka,nortel minor,northstar,shaping tools,stained glass,sdiv tringer,suppliers,tungsten tools,used glassblowing supplies beadmaking,glass';
    include_once(ROOT .'/mobile/includes/header.php'); 
?>

<!-- START content -->

<div class="row">
    <div class="col">
        <?php if((int)date('md')>= 1101  && (int)date('md')<1201):?>
            <div id="fallHead">
                <h1>Falling for Glass</h1>
            </div>
        <?php else:?>
            <h1>Your Hot Glass Source</h1>
        <?php endif; ?>
    </div>
</div>
<hr class="my-4">
<div class="row">
    <div class="col-12 margined">
        <div class="row">
            <div class="col-6">
                <h5>Working With A Torch</h5>
            </div>
            <div class="col-6 col-sm-6 col-lg-6 col-md-6">
                <h5>Working With A Kiln</h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <a href="select.php">
                    <div class="row">
                        <div class="col p-0">
                            <img alt="glass rod tubing dichroic supplies" src="/mobile/images/dichroic_tubes.jpg" class="img-fluid float-left">
                        </div>
                        <div class="col p-0 flex-text">
                            <strong>
                                Flameworking Glass Supplies
                            </strong>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/mobile/supplies/fusing/index.php">
                    <div class="row">
                        <div class="col p-0">
                            <img class="img-fluid" alt="glass slumping and fusing supplies" src="/mobile/fusing_slumping/images/dichroic-dicro-glass-samples-sm.jpg"
                                width="85" height="75">
                        </div>
                        <div class="col flex-text p-0">
                            <strong>
                                Kilnworking Glass Supplies
                            </strong>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6">
                <a href="select.php">
                    <div class="row">
                        <div class="col p-0">
                            <img class="img-fluid float-left" alt="glass-lampworking-flameworking-glassblowing-equipment"
                                src="/mobile/torches/images/mini_thumb.jpg">
                        </div>
                        <div class="col flex-text">
                            <strong>
                                Flameworking Equipment
                            </strong>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="/mobile/supplies/fusing/index.php">
                    <div class="row">
                        <div class="col p-0">
                            <img class="img-fluid" alt="glass fusing and slumping equipment" src="/mobile/kilns/images/kiln_thumb.jpg">
                        </div>
                        <div class="col flex-text">
                            <strong>
                                Kilnworking Equipment
                            </strong>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>
<hr class="my-2">
<div class="row">
    <div class="col-6 flex-image">
        <img class="img-fluid mx-auto" alt="Main Boro Color Companies!" src="/mobile/images/TAG-logo-sm.jpg">
        <br>
        <a href="/mobile/rods_tubes/hard/products/index.php#company/trautman">
            <img class="img-fluid mx-auto" alt="New colors in stock" src="/mobile/images/clear_tubes_TAG.jpg">
        </a>
        <br>
        <span class="bold red xx-large">
            Colors
        </span>
        <span class="bold block margin_4">
            Parallax, Fade to Black, Syzygy, and Pink Proton in stock
        </span>
        <div class="pad_10">
            <span class="bold">
                <a href="/mobile/rods_tubes/hard/colored.php#company/truatman"> Click Here </a> to see our full
                selection of Trautman Art Glass colored rod
            </span>
        </div>
    </div>
    <div class="col-6">
        <span class="xx-large bold red">
            Northstar
        </span>
        <br>
        <a href="/mobile/rods_tubes/hard/products/index.php#company/ns">
            <div id="northstarCarousel" class="carousel slide mx-auto" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="Northstar Luna" src="/northstar/luna-slideshow.jpg" class="img-fluid d-block">
                    </div>
                    <div class="carousel-item">
                        <img alt="Northstar Nova" src="/northstar/nova-slideshow.jpg" class="img-fluid d-block">
                    </div>
                    <div class="carousel-item">
                        <img alt="Northstar Persephone" src="/northstar/persephone-slideshow.jpg" class="img-fluid d-block">
                    </div>
                    <div class="carousel-item">
                        <img alt="Northstar Roswell" src="/northstar/roswell-slideshow.jpg" class="img-fluid d-block">
                    </div>
                </div>
            </div>
        </a>
        <div class="font-weight-bold">
            New Northstar Colors
            <ul style="text-align:left">
                <li>149 Persephone
                <li>150 Roswell
            </ul>
            New Northstar UV Reactive Colors
            <ul style="text-align:left">
                <li>145 Luna</li>
                <li>146 Nova</li>
                <li>147 Hydra</li>
                <li>148 Siriusly</li>
            </ul>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col-6">
        <h4 class="red font-weight-bold">
            Boro Batch is here
        </h4>
        <p>
            Our Newest Boro Color Company
        </p>
        <a href="/mobile/rods_tubes/hard/products/index.php#company/bb">
            <img src="http://www.sundanceglass.com/boro-batch/BoroBatchColorPoster.jpg" alt="BoroBatch Poster" class="img-fluid">
        </a>
    </div>
    <div class="col-6">
        <div class="col-12 col-md-4">
            <div id="multiSlideshow" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a href="/mobile/torches/index.php#product/bethlehem/The_Grand">
                            <img src="/mobile/torches/images/slideshow/grand-3-200.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/kilns/annealing.php#skutt">
                            <img alt="Skutt Scarab" src="/mobile/kilns/images/ScarabCropped-slide-show.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/torches/index.php#product/bethlehem/The_Grand">
                            <img src="/mobile/torches/images/slideshow/grand-6-200.jpg">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/fusing_slumping/molds/colour_de_verre/index.php">
                            <img src="/mobile/fusing_slumping/molds/colour_de_verre/images/buddha.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/kilns/glassblowing/index.php">
                            <img src="/mobile/kilns/images/200F130.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/torches/index.php#product/bethlehem/Champion_Burner">
                            <img src="/mobile/torches/images/slideshow/250champion-side-lg.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="/mobile/torches/index.php#product/gtt/Mirage">
                            <img src="/mobile/torches/images/slideshow/mirage-business-end.jpg" class="img-fluid d-block">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row">
    <div class="col-6">
        <img alt="Main Boro Color Companies!" src="/mobile/images/TAG-logo-sm.jpg" class="img-fluid">
        <br>
        <a href="/mobile/rods_tubes/hard/products/index.php#company/trautman">
            <img alt="New colors in stock" src="/mobile/glass/hard/images/red_tubes.jpg" class="img-fluid mx-auto">
        </a>
        <br>
        <span class="bold red xx-large">
            Sale
        </span>
        <br>
        <span class="medium bold">
            Select colors
            <br> now
            <span class="red">
                30%
            </span> off!
        </span>
        <br>
        <br>
        <span class="bold">
            <a href="/mobile/rods_tubes/hard/products/index.php#company/trautman">
                Click Here
            </a>
            to see our full selection of Trautman Art Glass colored rod - Multiple pound discounts available
        </span>
        <br>
        <br>
    </div>
    <div class="col-6">
        <h4>
            Bethlehem Sharp Flame Hand Torch
        </h4>
        <a href="/mobile/torches/index.php#product/bethlehem/Sharp_Flame">
            <img src="http://sundanceglass.com/torch/sharpflame1.jpg" alt="The Sharp Flame hand torch" class="img-fluid">
        </a>
        <strong>Bethlehem Sharp Flame Hand Torch!
            <a href="/mobile/torches/index.php/product/bethlehem/Sharp_Flame">Get yours NOW!</a>
        </strong>
    </div>
</div>
<?php /*
    <div class="col-6">
        <h4>
            New Stand Design! 8 Inch Offset Circle!
        </h4>
        <a href="/mobile/display_stands/round.php#90008">
            <img src="/mobile/display_stands/images/8inch-offset-fused-glass-dispaly-stand-lg.jpg" alt="Offset Stand with Green Glass Project" class="img-fluid">
        </a>
            <p class="font-weight-bold">
                Sundance is proud to announce our new 8" Offset Wire Stand
            </p>
            <p class="font-weight-bold">
                <a href="/mobile/display_stands/round.php#90008">Tap Here</a> to view all of our amazing round wire stands.
            </p>
    </div>
    */?>

<hr class="my-4">
<div class="row">
    <div class="white pad_10 col-6 mx-auto">
        <h4 class="red bold pad_10">Clearance it!</h4>
        <ul class="bold" style="text-align:left;">
            <li class="disc">Used items</li>
            <li class="disc">Prototypes</li>
            <li class="disc">Discontinued Items</li>
            <li class="disc">Surplus Items</li>
            <li class="disc">Cosmetic Issues</li>
            <li class="disc">Dirty Packaging</li>
            <li class="disc">Overstocked items</li>
            <li class="disc">Always functional</li>
            <li class="disc">Always a great deal</li>
            <li class="disc">
                <a href="https://www.clearanceit.com/">Click here</a> to visit Clearanceit.com</li>
        </ul>
        <br>
    </div>
</div>
<hr class="my-2">
<br>

<a href="hhtp://www.sundanceglass.com">.</a>
<a href="hhtp://www.clearanceit.com">.</a>
<a href="http://www.airgasflame.com/">.</a>
<!-- END content -->
<?php
    include_once(ROOT .'/mobile/includes/rightcol.php');  
?>