<?php 
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);
    if(isset($_POST['text']) && file_exists(ROOT.$_POST['text'])){
        echo file_get_contents(ROOT.$_POST['text']);
    }else{
        echo "File not Found, bad location";
    }