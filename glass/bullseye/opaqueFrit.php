<?php 
	define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
	$title="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
	$description="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
	$keywords="Bullseye Frit, Bullseye Powder, Enamel, Bullseye Glass,Sundance Art Glass Center";
    $abstract="Bullseye Frit Bullseye Powder Enamel Bullseye Glass - Sundance Art Glass Center";
    $location='fgbulfrit.php';
	include_once(ROOT ."/mobile/includes/header.php"); 
?>
<style>
    .pl-0 li {
        list-style-type: disc;
    }
</style>
<div class="row justify-content-center">
    <div class="col">
        <h1>Bullseye Opaque Frit</h1>
        <p>
            Crushed and Graded<br>
            <a href="transFrit.php">Click Here</a> to go to Transparent Frit and Powder. All COE 90 for Glass Fusing, Glass Casting, Glassblowing, and Glass Beadmaking. <br>Smalts for Sign Makers.
        </p>
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
        //Which Frits to Show
        store: opaque
    })
</script>
<?php 
    $fusing=true;
    include_once ROOT.'/mobile/includes/rightcol.php';