<?php  
define('ROOT',$_SERVER['DOCUMENT_ROOT']); 
$title='Bullseye Glass Sheets, Frit, Rods, Stringers, Dichroic, and Accessories for Fusing and Lampworking. COE 90.'; 
$description='Vast selection of Bullseye glass, of COE 90 compatibility, for fusing and hot glass working with a kiln or torch. Beautiful sheets, colored rods, fine to coarse frits, dichroic textures and patterns, stringers, metals, glass chemicals, and more. International shipping.'; 
$keywords='bullseye coe 90 compatible fusing molds frit crushed sheet mosaic dichroic stringers rods opaque transparent streaky uroboros coarse frit fine meidum powder kits tubes multi packs iridizer spray gold silver palladium bronze metal fuming liquid white luster powder reduction sparkle hi-lite leaf accessories'; 
$location='bullseye-sheet-transparent.php';
include_once(ROOT .'/mobile/includes/header.php'); 
?>

<?php 
$GlassType='trans';
include_once ROOT.'/mobile/glass/bullseye/scripts/info.php';
include_once ROOT .'/mobile/glass/bullseye/bullseyeSet.php';
$fusing=true;
include_once(ROOT .'/mobile/includes/rightcol.php'); 
?>