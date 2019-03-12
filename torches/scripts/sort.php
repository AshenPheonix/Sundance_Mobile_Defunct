<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $on=null;
    $sorter=$_POST['sorter'];

    if(isset($_POST['on'])==FALSE){
        $on='gas';
    }else{
        $on=$_POST['on'];
    }
    
    $data=json_decode(file_get_contents(ROOT.'/mobile/includes/dbs/torches.json'));
    
    $sender=[];
    if($on=='uses'){
        foreach ($data as $key => $value) {
            if(in_array($sorter,$value->$on)){
                $sender[]=$value;
            }
        }
    } elseif ($on=='glass' || $on=='gas') {
        foreach ($data as $key => $value) {
            if($value->$on==$sorter || $value->$on=='all'){
                $sender[]=$value;
            }
        }
    } else {
        foreach ($data as $key => $value) {
            if($value->$on==$sorter){
                $sender[]=$value;
            }
        }
    }
    echo json_encode($sender);