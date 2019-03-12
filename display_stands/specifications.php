<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Display Stands for Glass- Sundance Art Glass Center';
$description='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Fuse Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash GLASS FUSING Sundance  Art Glass Center California Bullseye COE 90';
$keywords='Glass Fusing,Glass Slumping,Display Stands,Fused and Slumped Projects,Art Glass Center California,Bullseye,Round Display Stands,U Style, COE 90';
$abstract='Glass Fusing Display Stands for Fused and Slumped Projects using Bullseye Equipment Kiln work gloves kiln wash shelves Dichroic hot warm glass COE 90 fusing melting fiber blanket glass plates kiln wash bowels candle votives GLASS FUSING Sundance kiln controllers Art Glass Center California Bullseye COE 90';

include_once(ROOT .'/mobile/includes/header.php'); 
require_once CLASSROOT.'standData.php';

$standsList=[
    '90860'=>new standData(90860,'square',18,['6&frac12;','5&frac12;',3],'c5dd1ee5da8548279f1faab0137b6911'),
    '908701'=>new standData(908701,'square',19,['7','6&frac12;','3&frac12;'],'5614998cc66641c8b11394feea17631c'),
    '908703'=>new standData(908703,'square',19,[8,'7&frac12;',4],'b7b1c092b1c646b3ae98cb07f807ac0b'),
    '908745'=>new standData(908745,'invis',34,['9&#8540;','8&frac12;','6&frac14;'],'d71e8c03a1b041f388677b44e26e9a18'),
    '908792'=>new standData(908792,'square',19,['10&frac12;',10,5],'d71e8c03a1b041f388677b44e26e9a18'),
    '908832'=>new standData(908832,'square',23,['12&frac14;','11&frac34;',6],'d71e8c03a1b041f388677b44e26e9a18'),
    '908845'=>new standData(908845,'invis',39,['12&frac12;',9,7],'cdefa66eba2a44ebabcf9af0064dd37a'),
    '908815'=>new standData(908815,'invis',33,['14&frac14;','13&frac12;',9],'cdefa66eba2a44ebabcf9af0064dd37a'),
    '90970'=>new standData(90970,'round',28,['8&frac14;','7&frac34;','4&frac12'],'d25add9768838f48ced24e96ac1d9d6c'),
    '909705'=>new standData(909705,'roundInvis',33,[9,7,'4&frac12;'],'1fec2b88571a4374ba5a7069401c709f'),
    '90972'=>new standData(90972,'round',29,['9&frac12;','8&frac12;',5],'0ef82e8fbbcb4147a80ff84579cc1dc9'),
    '909725'=>new standData(909725,'roundInvis',33,['9&frac14;',8,'9&frac14;',8,'5&frac14;'],'d25add9768838f48ced24e96ac1d9d6c0'),
    '90974'=>new standData(90974,'round',30,['10&frac12;','9&frac12;','5&frac14;'],'5e72f072ee7461d169f9b10adcd11a5e'),
    '909745'=>new standData(909745,'roundInvis',34,[11,9,7],'d0f128fa77a3436bae86eacf0b42e875'),
    '90976'=>new standData(90976,'round',31,['11&frac12;','10&frac12;', '6&frac12;'],'90a09f8c642645a9a0d631ec0729e865'),
    '909765'=>new standData(909765,'roundInvis',35,[12,10,8],'256dc00305d2442cb95b04e5dbe23dec'),
    '90978'=>new standData(90978,'round',32,['12&frac34;','11&frac12;',7],'aeaca8e7afe03e85b14d5db4befa122b'),
    '909788'=>new standData(909788,'roundInvis',36,[13,11,'6&frac12;'],'18198048e53544c3b5ee2814fa74dccd'),
    '909795'=>new standData(909795,'roundInvis',37,[14,12,8],'39ab43501561458b811195850d6e2824'),
    '909815'=>new standData(909815,'roundInvis',37,[15,13,8],'fdfe75be7aa544158178637e06b64805'),
    '90984'=>new standData(90984,'round',33,['14&frac12;','13&frac34;',8],'a87939a459f9437ab85d0a754e3d57d0'),
    '90996'=>new standData(90996,'round',37,['15&#8541;','14&#8541;',9],'120f9738775f4a71af304d17560f2c7f'),
    '90995'=>new standData(90995,'round',45,['17&#8541;','16&#8541;',9],'46cfcb06358d49a794d8a1b538feaec9'),
    '90999'=>new standData(90999,'round',47,['19&#8541;','18&#8541;',9],'7736d4c70d094c4b90f785c41785ad2f'),
];

include_once ROOT.'/mobile/includes/secondaryNavs/stands.php';
if(isset($_GET['numb'])==false || isset($standsList[$_GET['numb']])==false):?>

<div class="row">
    <h1>You got here by an incorrect link, please come back again</h1>
</div>
<?php else:
    $standNumb=$_GET['numb'];

    $currentStand=$standsList["$standNumb"];
?>
    <script src="scripts/spec.js"></script>
<?php
    include ROOT."/mobile/display_stands/specs/$currentStand->type.php";
    
endif;
    
    include_once ROOT.'/mobile/includes/rightcol.php';
?>