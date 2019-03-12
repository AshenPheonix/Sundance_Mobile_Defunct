<?php 
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Paragon Glass Kiln Caldera HG8D HG8B9D Annealin Kiln - Sundance Art Glass';
  $description='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
  $keywords='Paragon Caldera,HG8D,HG8B9D,Kiln,Aim,Annealing Kilns,Flameworking Kilns,Lampworking Kilns,Glass Fusing Kilns,Beadmaking Kilns,Sundance Art Glass';
  $abstract='Annealing Kilns Flameworking Kilns Lampworking Kilns Glass Fusing Kilns Beadmaking Kilns - Sundance Art Glass';
  $location='warming-oven.php';
  include_once(ROOT .'/mobile/includes/header.php'); 
?>
<style type="text/css">
    @import url('/mobile/includes/css/basic.css'); 
    table.w600 td {
        padding: 10px;
    }
    
    p {
        text-align: justify;
        padding: 10px;
    }
</style>

<!-- START content -->
<div class="row">
    <div class="col-12 text-center">
        <h1 class="block margin_10 xx-large">Glass Warming Oven</h1>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center">
        <h2 class="block margin_10">For Flame workers and Lamp workers</h2>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center">
        <img class="img-fluid mx-auto" alt="Glass Warming Kiln " src="../images/warming-oven-590x615.jpg">
    </div>
</div>
<div class="row">
    <div class="col-12 mx-auto">
        <span class="block bold margin_10 large">
            Warming Oven
        </span>
        <p>
            Have you ever lost a piece to thermal shock? Have you ever been concerned by how much electricity you're using to pre-warm your smaller work and glass in your kiln?
        </p>
        <p>
            Our ceramic warming oven solves both of these problems. It uses common household electricity and requires considerably less electricity than even the smallest of kilns. If you're working a smaller piece such as a marble, pendant, small sculpture, etc.
            it can provide huge savings from not having to turn on your kiln. Additionally prewarming prevents sensitive colors like white or Cadmiums from boiling; by evenly heating your work the surface and core temperatures will remain consistent.
            This means less frustration and less wasted glass, not to mention better looking work.
        </p>
        <span class="alignLeft bold block margin_10 medium">
            Features:
        </span>
        <ul class="alignLeft margin_left_20">
            <li class="disc">4&#189;" x 3&#189;" Floor size</li>
            <li class="disc">4&#189;" x 2&#189;" Opening</li>
            <li class="disc">Save on electricity by reducing the amount of time your kiln is on</li>
            <li class="disc">Prevents thermal shock to pieces as you work them</li>
            <li class="disc">Extendable rod and handle rest</li>
            <li class="disc">115 volts @ 5 Amps (600 Watts) 60hz</li>
            <li class="disc">Ceramic surface will not mar or mark glass</li>
            <li class="disc">Never reaches strain temperatures</li>
        </ul>
    </div>
</div>

<?php
    include 'scripts/fetch.php';
    $kiln->purch();
?>
<hr>
<?php include_once(ROOT .'/mobile/includes/rightcol.php');  ?>