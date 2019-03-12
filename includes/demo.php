<?php 
    $temp=getCWD();
    if(strpos($temp,'rods_tubes')!==false||strpos($temp,'glass')!==false){
        include_once ROOT.'/mobile/includes/secondaryNavs/rods.php';
    }elseif (strpos($temp,'glass')!==false) {
        include_once ROOT.'/mobile/includes/secondaryNavs/glass.php';
    }elseif (strpos($temp,'kilns')!==false) {
        include_once ROOT.'/mobile/includes/secondaryNavs/kilns.php';
    }elseif (strpos($temp,'torches')!==false) {
        include_once ROOT.'/mobile/includes/secondaryNavs/torches.php';
    }
    else{
        //print_r("failed, $temp");
    }
