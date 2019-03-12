<?php 
  define('ROOT',$_SERVER['DOCUMENT_ROOT']);
  $title='Work Surfaces for Lampworkers and Glassblowers';
  $description='Your California Bay Area based source for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center! International shipping. Make glass beads and glass sculptures using a torch. Melt Morretti, soft glass, to make small sculptures. Use our stainless steel work surfaces to prevent your tables from contact with molten glass and to organize your work area more efficiently!';
  $keywords='stainless steel sheet,torch,glass beads,work surface,propane bottle holder,gas tank holder, protecting work table,table cover,arm rest';
  $abstract='Flameworking Lampworking Glass Beadmaking Sundance Art Glass  Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass  Flameworking Lampworking Glass Beadmaking Sundance Art Glass Center California, work station, California, area cover, metal covers, arm rests, heat protection, metal sheet, stainless steel sheet, torch, glass beads, work surface, stainless steel, tools, propane bottle holder, gas tank holder, protecting work table, table cover';
  $location='worksurfaces.php';
  require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Worksurfaces
        </h1>
        <h4>
            Torch Lampworking, Glassblowing, and Glass Beadmaking
        </h4>
    </div>
</div>

<div class="row">
    <div class="col">
        <p>
            Propane Bottle Holder with Work Surface Holds your disposable MAPP or propane bottle safely and at the correct angle for your torch. We recommend the HotHead Torch. Torch height is adjustable. Includes a built in tool and glass rod rest. All rust proof series 300 stainless steel. Holder holds both the wide and narrow shaped gas tank. Should be clamped or screwed to the table. Lower section is cut in to give you more leg room. Lower part that holds tank can be bent to adjust the torch angle. Torch and propane tank not included. Dimensions are approximate. Made in the USA
        </p>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/dbs/worksurfaces.php';
    foreach ($worksurfaces as $key => $value) {
        $value->display('with bottle holder');
    }
?>
<br>
<hr>
<br>
<div class="row">
    <div class="col">
        <h3>
            Work Surfaces
        </h3>
    </div>
    <div class="w-100"></div>
    <div class="col-6"><img src="images/work-surface.jpg" alt="work surface" class="img-fluid"></div>
    <div class="col-6"><img src="images/1631w.jpg" alt="work surface" class="img-fluid"></div>
</div>
<div class="row">
    <div class="col">
        <p>
            Dimensions are usually close but can vary a bit - plus or minus a 1/2" or so.
        </p>
    </div>
</div>

<?php
    foreach ($worksurfaces as $key => $value) {
        $value->display('metal');
    }
?>
<div class="row">
    <div class="col">
        <p>
            Accessories pictured not included.
        </p>
    </div>
</div>

<hr class="my-2" id="supports">

<div class="row">
    <div class="col">
        <img src="images/rrt.jpg" alt="a rod rest with some rods" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p>
            This movable rod rest is used to support glass rods to keep them up off the flame worker's workbench for easier grabbing, better organization, and to keep the glass rods cleaner. The rippled edge keeps the rods from rolling around. These durable stainless steel rod holders can also be placed inside a glass bead kiln to support your mandrels.
        </p>
    </div>
</div>

<?php 
foreach ($worksurfaces as $key => $value) {
    $value->display('rod rest');
}
?>

<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="images/glass-rod-rest-lampworking-sm.jpg" class="figure-img img-fluid rounded" alt="2 stands, different sizes">
            <figcaption class="figure-caption text-xs-right">Difference between standard and tall rod rests</figcaption>
        </figure>
    </div>
</div>
<hr>
<?php 
foreach ($worksurfaces as $key => $value) {
    $value->display('tool caddy');
}
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';