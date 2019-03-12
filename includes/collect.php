<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    define('DBROOT',ROOT.'/mobile/includes/dbs/');

    if($_POST['pass']!=='Ihalb0cdTtasiar1968#!'){
        header('Location:http://sundanceglass.com/index.php');
        exit();
    }

    var_dump(scandir(DBROOT));