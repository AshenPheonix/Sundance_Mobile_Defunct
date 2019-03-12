<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Schott Borosilicate coe33 Glass Rod and Tube - sundance art glass center';
    $description='Schott Borosilicate coe33 Glass Rod and Tubes. Your california West coast, north america, and international source for artists working glass with a torch sample sets and short sets, ground joints for your art work!';
    $keywords='Schott Borosilicate coe33 Glass Rod and Tube,Ground Joints,Assortments,Pyrex,made in america,compatible with pyrex duran sunsilica northstar alchemy borosilicate glass,glass tubing for making sculptures,glass tubes,heavy wall standard wall thickness diameter';
    $abstract='At Sundance Art Glass offers sample sets of colored glass rod, Monka nd Northstar shorts and ground joints for your art work!';
    $location='borosilicate-ground%20joints.php';
    include_once(ROOT .'/mobile/includes/header.php');
    $hardGlass=true;
?>
<style type="text/css">
    @import url('/mobile/includes/css/basic.css'); 
    .whiteBlock {
        background-color: white;
    }
</style>
<div class="row">
    <div class="col">
        <h1 class="mx-auto">
            Borosilicate Ground Joints
        </h1>
        <h2 class="mx-auto">
            Highest Quality Borosilicate Glass
        </h2>
        Compatible with: Pyrex, Kimble, Duran, Momka, Northstar, Glass Alchemy, and<br /> all other COE33 Borosilicate Hard Glass.<br/>
    </div>
</div>
<hr>
<br />
<div class="row">
    <div class="col">
        <h2>
            German Borosilicate Ground Joints
        </h2>
    </div>
</div>
<hr>
<div class="row beige">
    <div class="col">
        We have Graphite Joint Holders <a href="/mobile/supplies/lampworking/boro.php">Click Here</a> for Details.
    </div>
</div>
<hr>
<div class="row beige">
    <img class="img-fluid mx-auto" alt="ground joint and holder" src="images/joints/joint-holder-with-joint-female-lg.jpg"><br />
    <img class="img-fluid mx-auto" alt="Ground Joint and Holder" src="images/joints/joint-holder-with-joint-male-lg.jpg"><br />
</div>
<hr>

<?php
    require_once DBROOT.'groundJoints.php';
    foreach ($groundJoints as $key => $value) {
        $value->display('german');
    }
?>

<hr class="my-4">


<div class="row whiteBlock">
    <div class="col text-center">
        <h1>Chinese Borosilicate Ground Joints</h1><br />
    </div>
</div>

<hr class="my-4">
<?php
    foreach ($groundJoints as $key => $value) {
        $value->display('chinese');
    }
?>

<hr class="my-4">

<div class="row">
    <div class="col text-center">
        <strong><span class="large">To buy rods and tubes and cases, <a href="borosilicate-pyrex-tube-1.php">click here.</a></span></strong><br />
    </div>
</div>
<hr>

<div class="row">
    <div class="col text-center">
        <h1><a href="pyrex-main.php">Click here</a> for colored tubes !!</h1>
    </div>
</div>

<div class="row">
    <div class="col">
        <a href="pyrex-main.php"><img class="mx-auto img-fluid" src="images/pipes.jpg" alt="glass bubblers made with 1 inch kimble tubing. " width="288" height="222"></a>
    </div>
</div>

<br />
<hr>

<br />
<div class="row">
    <div class="col text-center">
        <a href="murrini.php">
            <img src="images/murrini-words.jpg" alt="borosilicate millefirori murrini pyrex decorative designs" width="144" height="64"><br /> Click here to see borosilicate Millifori!
        </a>
    </div>
</div>

<br />

<hr>
<br />
<div class="row">
    <div class="col text-center">
        <h1>Need colored glass rod?</h1>
    </div>
</div>



<div class="row beige border border-dark">
    <div class="col mx-auto">
        <img class="mx-auto img-fluid" src="/mobile/images/dichroic_tubes.jpg" alt="need colored hard glass?" width="75" height="70">
        <a href="../hard/index.php">Click here for colored glass rod</a>
    </div>
</div>


<br />
<div class="row">
    <div class="col text-center">
        *because of the large dimension tolerances diameters are are also approximate!<br />
    </div>
    <!-- end content -->
</div>
<?php include_once(ROOT .'/mobile/includes/rightcol.php');  ?>