<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    define('CLASSROOT',ROOT.'/mobile/includes/classes/');
    include ROOT.'/mobile/includes/dbs/'.$_POST['page'].'.php';
    foreach (${$_POST['loc']} as $key => $value) {
        if ($value->id==$_POST['id']) {
            $item=$value;
            break;
        }
    }
    echo $item->display($item->type);