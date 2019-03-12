<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Borosilicate Color Rod for Flameworking - Sundance Art Glass';
    $description='Borosilicate Colored Glass Rods for artists working glass with a torch - Every Color You Can Imagine choose by manufacturere or color- Sundance Art Glass!';
    $keywords='Borostix,Alchemy,Northstar,Ill-umanati,Momka,Glass Alchemy,Borostik,Trautman,TAG,Flameworking Glass,Lampworking Glass,Pyrex Glass,Colored Glass Rod,Borosilicate Glass,Glass Beadmaking,Beadmaking,Pipes,Glass Blowing,Glassblowing,Sculpture,Origin,Aardvark';
        
    $abstract='At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Morretti soft glass, Effetre soft glass, Northstar hard glass, Precision Glass, Pyrex, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, and more! With all the glass art studio equipment you need!';
    include_once(ROOT .'/mobile/includes/header.php');
    $hardGlass=true; 
    $hardRod=true;
    $locations=[
        'sites'=>[
            'GALocation'=>'/mobile/rods_tubes/hard/images/alchemy',
            'TAGLocation'=>'/mobile/rods_tubes/hard/images/tag',
            'MOMLocation'=>'/mobile/rods_tubes/hard/images/momkas',
            'NSLocation'=>'/mobile/rods_tubes/hard/images/northstar',
            'BBLocation'=>'/mobile/rods_tubes/hard/images/boro_batch',
        ]
    ];
    include_once ROOT . "/navigator/pagination-module.php";
    include_once ROOT . "/mobile/includes/rightcol.php"?>