<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Fusible casting molds made by IMD - Sundance Art Glass Center';
    $description='IMD Molds made for fusing and casting using normal fusing frit! Sundance Art Glass Center';
    $keywords='colour,glass,de,verre,molds,ceramic,fusing,slumping,IMD,i,m,d,casting,cast,de verre,glass mold,';
    $abstract='Molds for Fusing and Casting by IMD';
    $location='imd-molds-castable.php';
    include_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>IMD Molds</h1>
        <p>
            Fill mold with crushed glass frit and/or powder and melt. Bullseye COE90 crushed glass frit works GREAT with these molds! Several of these molds also work with sheet glass for slumping, see details below. Bullseye COE90 sheet glass works GREAT for the slumping molds. All molds are ceramic and reusable.
        </p>
        <p class="font-weight-bold">
            <a href="../glass/bullseye/frit.php">Click here</a> to see the crushed glass frit to use in these molds.
        </p>
        <p class="font-weight-bold">
            <a href="../glass/bullseye/sheet.php">Click here</a> to see the sheet glass to use in these molds.
        </p>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/molds.php';
    foreach ($molds as $key => $value) {
        $value->display('imd');
    }
?>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';