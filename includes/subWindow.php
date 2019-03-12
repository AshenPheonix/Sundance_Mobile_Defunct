<?php
define("ROOT",$_SERVER["DOCUMENT_ROOT"]);
$gimmie=$_GET['filename'];
if(file_exists(ROOT.'/mobile/includes/popup/'.$gimmie)){
  $output=(file_get_contents(ROOT.'/mobile/includes/popup/'.$gimmie));
  if(strpos($output,'<table')!==false){
    $output=strstr($output,'<table');
    $output=strstr($output,'</table>',true);
    $output.="</table>";
  }
  echo $output;
}
else{
    echo readfile(ROOT.'/mobile/includes/popup/missing.php');
}
