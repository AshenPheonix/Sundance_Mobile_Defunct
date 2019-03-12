<?php 
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Flameworking Torches Glass Beadmaking Torches Lampworking Torches Glassblowing Torches - Sundance Art Glass';
  $description='Many different great torches to choose from for the glass lampworker, flameworker, and glassblowers. At a discount.';
  $keywords='Torches,glass,lampworkers,beadmakers,flameworkers,glassblowers,marblemakers,HotHead Torch,minor,bench burner,mega minor,midrange,National 8m,National, the Grand, Bethlehem Burners, 3ab,6b,sculptures,Alpha,Bravo,Bethlehem,Red Max,Red Rocket,Cricket,GTT,Carlisle,Scorpion,Phantom,Delta,1602 series,major bench torch,barracuda torch,Rangers surface mix,pre mix,surfacemix,glass torch';
  $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
  $location='torches-glass-bead-r.php';
  include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Torches</h1>
    </div>
</div>

<div id="torch-target"></div>

<script src="https://cdn.jsdelivr.net/combine/npm/riot@3.7.4,npm/riot-route@3.1.2/dist/route+tag.js"></script>

<script src="views/router.js"></script>
<script src="views/selector.js"></script>
<script src="views/menu.js"></script>
<script src="views/torch.js"></script>
<script src="views/torch-disp.js"></script>
<script>
    riot.mount('div#torch-target','mover')
</script>
<?php require_once ROOT.'/mobile/includes/rightcol.php';