<?php 
	define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
	$title="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
	$description="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
	$keywords="Bullseye Frit, Bullseye Powder, Enamel, Bullseye Glass,Sundance Art Glass Center";
    $abstract="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
    $location='bullseye-frit-transparent.php';
	include_once(ROOT ."/mobile/includes/header.php"); 
?>
<style>
    .pl-0 li {
        list-style-type: disc;
    }
</style>
<div class="row justify-content-center">
    <div class="col">
        <h1>Bullseye Transparent Frit</h1>
        <h5>
            Crushed and Graded<br>
            <a href="opaqueFrit.php">Click Here</a> to go to Opaque Frit and Powder. All COE 90 for Glass Fusing, Glass Casting, Glassblowing, and Glass Beadmaking. <br>Smalts for Sign Makers.
        </h5>
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="images/bulfritlg.jpg" alt="Frit Size Chart" class="img-fluid">
    </div>
    <div class="col flex-text text-left">
        <p>
            Available in solid and transparent colors.<br> Available in 4 sizes.
            <ul class="pl-0">
                <li>Powder - .2mm and finer</li>
                <li>Fine - .2mm to 1.2mm</li>
                <li>Medium - 1.2mm to 2.7mm</li>
                <li>Course - 2.7mm to 5.2mm</li>
            </ul>
        </p>
    </div>
</div>

<div class="row">
    <div class="col"><img src="frit_images/bullseye-frit-stock-575x97.jpg" alt="Some of our Stock" class="img-fluid"></div>
</div>
<br>
<hr>
<br>
<div id="target">

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/riot/3.7.2/riot.min.js"></script>
<script src="<?=strstr(CLASSROOT.'FritClass.js','/mobile');?>"></script>
<script src="<?=strstr(DBROOT.'fritStore.js','/mobile');?>"></script>
<script src="views/fritRenderer.js"></script>
<script src="views/frit.js"></script>
<script>
    riot.mount('div#target', 'frit-renderer', {
        store: transparent
    })
</script>
<br>
<div class="row">
    <div class="col">
        <h3 class="text-left">Frit Tints</h3>
    </div>
</div><br>
<div id="tintTarget"></div>
<script>
    riot.mount('div#tintTarget','frit-renderer',{
        //Which Frits to Show
        store:tints
    })
</script>
<?php 
    $fusing=true;
    include_once ROOT.'/mobile/includes/rightcol.php';