<?php
    require_once DBROOT.'dvds.php';
    foreach ($dvds as $key => $value) {
        if ( strpos($_SERVER["PHP_SELF"], $value->pageOpt['info']) ){
            $dvd=$value;
            break;
        }
    }