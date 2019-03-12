<?php 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Kilns - Sundance Glass';
 $description='Big selection of paragon glass fusing kilns from small to big, digital or analog controlers, kiln door options, voltage options, pyrometers, and multiple use kilns for fusers, flameworkers, and annealing. Great prices!';
 $abstract='Your California West Coast, North America, and International source for paragon kilns- Sundance Art Glass Center!';
 $keywords='paragon,kilns,controllers,digital,analog,pyromters,temperature gauges,aim,Paragon,magic fuse,annealing,anneal,Caldera,Firefly,Fire Fly,CS-14,CS-16,janus,pearl,GL44,F200,GL24,GF6,GF7,GF8,GF10,CS14,CS16,Caldera,AIM,Olympic,Evenheat,Sundance Art Glass';
 $location='kilnfnew.php';
 include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>Glass Fusing Kilns</h1>
    </div>
</div>
<?php 
    require_once ROOT.'/mobile/includes/secondaryNavs/kilns.php';
    require_once ROOT.'/mobile/includes/dbs/kilns.php';
    foreach ($kilns as $key => $value) {
        $value->display('fusing');
    }
?>
<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';