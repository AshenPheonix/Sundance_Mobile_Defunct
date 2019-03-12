<?php

    if($data->pageInfo['type']!='bullseye' && strstr($_SERVER['PHP_SELF'],bullseye)!==FALSE):
    ?>
        <script>
            //window.location.replace('/mobile/molds/specs/offbrand.php?prod=<?=$_GET['prod'];?>')
        </script>
    <?php 
    elseif($data->pageInfo['type']=='bullseye' && strstr($_SERVER['PHP_SELF'],bullseye)===FALSE):?>
        <script>
            //window.location.replace('/mobile/molds/specs/bullseye.php?prod=<?=$_GET['prod'];?>');
        </script>
    <?php
        endif;

    $imager=[
        'flat round'=>['81628'],
        'round'=>['81629','81630'],
        'bowl'=>['81651','81652','81973'],
        'soup bowl'=>['81665'],
        'plain plate'=>['81721','81722'],
        'classic'=>['81723','81724','81724','81747','81749'],
        'ball'=>['81733','81734','81735','81736','81737','81738','81746','81738'],
        'pasta bowl'=>['81909','81910'],
        'dessert plate'=>['81939'],
        'cone'=>['81943','81975'],
        'deep 2'=>['81990'],
        'deep 3'=>['81991'],
        'shallow bowl'=>['46302','46303','46306'],
        'offbrand bowl'=>['483159'],
        'offbrand plate'=>['48723'],
        'sunburst'=>['487124','487130'],
        'rippled bowl'=>['48601'],
        'drop round'=>['81631','81632','81633','486235','486236','48255'],
        'drop rectangle'=>['81923'],
        'drop ellipse'=>['81955'],
        'drop square'=>['81957'],
        'party platter'=>['81539'],
        'ball square'=>['81634','81635','81636','81637','81739','81972','81995','81996','81997','81998'],
        'square classic'=>['81647','81648','81934','81949'],
        'square flat'=>['81901','81900','81899'],
        'rectangular ball'=>['81924','81925','81929'],
        'dish'=>['81926'],
        'quad square'=>['81935'],
        'soft quad'=>['81342'],
        'soft edge'=>['81963'],
        'channel'=>['81456','81944','81257',],
        'curve'=>['81642'],
        'double curve'=>['81643','81960'],
        'lamp bend'=>['81725'],
        'tapered lamp'=>['81740'],
        'oval'=>['81919','81920','81951','81952','81744'],
        'candle bridge'=>['81902'],
        'snack tray'=>['81961'],
        'pyramid'=>['81948'],
        'offset'=>['SD112'],
        'wave'=>['487119'],
    ];

    foreach ($imager as $key => $value) {
        if(in_array($data->id,$value)){
            $imager=$key;
            break;
        }
    }

    $smallImage=[];
    
    switch ($imager) {
        case 'bowl':
            $mainImage='008652-MOLD-M-EACH_photo.jpg';
            $smallImage=['008652-MOLD-M-EACH.jpg','008652-MOLD-M-EACH_W01.jpg','008652-MOLD-M-EACH_W02.jpg'];
            break;
        case 'flat round':
            $mainImage='008628-MOLD-M-EACH_photo.jpg';
            $smallImage=['008628-MOLD-M-EACH_small.jpg','008628-MOLD-M-EACH_W01_small.jpg','008628-MOLD-M-EACH_W02_small.jpg'];
            break;
        case 'round':
            $mainImage='008630-MOLD-M-EACH_photo.jpg';
            $smallImage=['008630-MOLD-M-EACH.jpg','008630-MOLD-M-EACH_W01.jpg','008630-MOLD-M-EACH_W02.jpg'];
            break;
        case 'soup bowl':
            $mainImage='008665-MOLD-M-EACH_photo.jpg';
            $smallImage=['008665-MOLD-M-EACH.jpg','008665-MOLD-M-EACH-W01.jpg','008665-MOLD-M-EACH-W02.jpg'];
            break;
        case 'plain plate':
            $mainImage='008721-MOLD-M-EACH_photo.jpg';
            $smallImage=['008721-MOLD-M-EACH.jpg','008721-MOLD-M-EACH-W01.jpg','008721-MOLD-M-EACH-W02.jpg'];
            break;
        case 'classic':
            $mainImage='008723-MOLD-M-EACH_photo.jpg';
            $smallImage=['008723-MOLD-M-EACH.jpg','008723-MOLD-M-EACH_w01.jpg','008723-MOLD-M-EACH_w02.jpg'];
            break;
        case 'ball':
            $mainImage='008733-MOLD-M-EACH_photo.jpg';
            $smallImage=['008733-MOLD-M-EACH.jpg','008733-MOLD-M-EACH_w01.jpg','008733-MOLD-M-EACH_w02.jpg'];
            break;
        case 'pasta bowl':
            $mainImage='008909-MOLD-M-EACH_photo.jpg';
            $smallImage=['008909-MOLD-M-EACH.png','008909-MOLD-M-EACH-W01.png','008909-MOLD-M-EACH-W02.png'];
            break;
        case 'dessert plate':
            $mainImage='008939-MOLD-M-EACH_photo.jpg';
            $smallImage=['008939-MOLD-M-EACH.jpg','008939-MOLD-M-EACH_w01.jpg','008939-MOLD-M-EACH_w02.jpg'];
            break;
        case 'cone':
            $mainImage='008943-MOLD-M-EACH.jpg';
            $smallImage=['008943-MOLD-M-EACH_small.jpg','008943-MOLD-M-EACH_W01_small.jpg','008943-MOLD-M-EACH_W02_small.jpg'];
            break;
        case 'deep 2':
            $mainImage='008990-MOLD-M-EACH-photo.jpg';
            $smallImage=['008990-MOLD-M-EACH-photo.png','008990-MOLD-M-EACH-w01.png'];
            break;
        case 'deep 3':
            $mainImage='008991-MOLD-M-EACH-photo.jpg';
            $smallImage=['008991-MOLD-M-EACH-photo.png','008991-MOLD-M-EACH-w01.png'];
            break;
        case 'shallow bowl':
            $mainImage='46302.jpg';
            $smallImage=[];
            break;
        case 'offbrand bowl':
            $mainImage='483159.jpg';
            $smallImage=[];
            break;
        case 'offbrand plate':
            $mainImage='48723.jpg';
            $smallImage=['48723-1sm_small.jpg'];
            break;
        case 'sunburst':
            $mainImage='487124.jpg';
            $smallImage=[];
            break;
        case 'rippled bowl':
            $mainImage='48601.jpg';
            $smallImage=[];
            break;
        case 'drop round':
            $mainImage='008631-MOLD-M-EACH_photo.jpg';
            $smallImage=['008631-MOLD-M-EACH.jpg','008631-MOLD-M-EACH_w01.jpg','008631-MOLD-M-EACH_w02.jpg'];
            break;
        case 'drop rectangle':
            $mainImage='008923-MOLD-M-EACH_photo.jpg';
            $smallImage=['008923-MOLD-M-EACH.jpg','008923-MOLD-M-EACH_W01.jpg','008923-MOLD-M-EACH_W02.jpg'];
            break;
        case 'drop ellipse':
            $mainImage='008955-MOLD-M-EACH_photo.jpg';
            $smallImage=['008955-MOLD-M-EACH.jpg','008955-MOLD-M-EACH-w01.jpg','008955-MOLD-M-EACH-w02.jpg'];
            break;
        case 'drop square':
            $mainImage='008957-MOLD-M-EACH_photo.jpg';
            $smallImage=['008957-MOLD-M-EACH.jpg','008957-MOLD-M-EACH_w01.jpg','008957-MOLD-M-EACH_w02.jpg'];
            break;
        case 'party platter':
            $mainImage='008539-MOLD-M-EACH_photolg.jpg';
            $smallImage=['008539-MOLD-M-EACH_w01.jpg','008539-MOLD-M-EACH_w02.jpg'];
            break;
        case 'ball square':
            $mainImage='008634-MOLD-M-EACH_photo.jpg';
            $smallImage=['008634-MOLD-M-EACH.jpg','008634-MOLD-M-EACH_W01.jpg','008634-MOLD-M-EACH_W02.jpg'];
            break;
        case 'square classic':
            $mainImage='008647-MOLD-M-EACH_photo.jpg';
            $smallImage=['008647-MOLD-M-EACH_small.jpg','008647-MOLD-M-EACH-W01_small.jpg','008647-MOLD-M-EACH-W02_small.jpg'];
            break;
        case 'square flat':
            $mainImage='008901-MOLD-M-EACH-photo.jpg';
            $smallImage=['008901-MOLD-M-EACH_small.jpg','008901-MOLD-M-EACH-W01.jpg','008901-MOLD-M-EACH-W02.jpg'];
            break;
        case 'rectangular ball':
            $mainImage='008924-MOLD-M-EACH_photo.jpg';
            $smallImage=['008924-MOLD-M-EACH_small.jpg','008924-MOLD-M-EACH-w01.jpg','008924-MOLD-M-EACH-w02.jpg'];
            break;
        case 'dish':
            $mainImage='008926-MOLD-M-EACH_photo.jpg';
            $smallImage=['008926-MOLD-M-EACH.png','008926-MOLD-M-EACH-W01.png','008926-MOLD-M-EACH-W02.png'];
            break;
        case 'quad square':
            $mainImage='008935-MOLD-M-EACH_photo.jpg';
            $smallImage=['008935-3lg-MOLD-M-EACH_w01.png','008935-2lg-MOLD-M-EACH_w02.png'];
            break;
        case 'soft quad':
            $mainImage='008342-MOLD-M-EACH_photo.png';
            $smallImage=['008342-MOLD-M-EACH_w01.png','008342-MOLD-M-EACH_w02.png'];
            break;
        case 'soft edge':
            $mainImage='008963-MOLD-M-EACH_photo-MEDIUM.jpg';
            $smallImage=['008963-MOLD-M-EACH_w01.jpg','008963-MOLD-M-EACH_w02.jpg'];
            break;
        case 'channel':
            $mainImage='008456-MOLD-M-EACH_photo.jpg';
            $smallImage=['008456-MOLD-M-EACH_photo.jpg','008456-MOLD-M-EACH_w01.jpg','008456-MOLD-M-EACH_w02.jpg'];
            break;
        case 'curve':
            $mainImage='81642(2).jpg';
            $smallImage=['008642-MOLD-M-EACH.jpg','008642-MOLD-M-EACH-W01.jpg','008642-MOLD-M-EACH-W02.jpg'];
            break;
        case 'double curve':
            $mainImage='008643-MOLD-M-EACH_photo.jpg';
            $smallImage=['008643-MOLD-M-EACH.jpg','008643-MOLD-M-EACH-w01.jpg','008643-MOLD-M-EACH-w02.jpg'];
            break;
        case 'lamp bend':
            $mainImage='008725-MOLD-M-EACH_photo.jpg';
            $smallImage=['008725-MOLD-M-EACH.jpg'];
            break;
        case 'tapered lamp':
            $mainImage='008740-MOLD-M-EACH_photo.jpg';
            $smallImage=['008740-MOLD-M-EACH.jpg'];
            break;
        case 'oval':
            $mainImage='008919-MOLD-M-EACH_photo.jpg';
            $smallImage=['008919-MOLD-M-EACH.jpg','008919-MOLD-M-EACH-W01.png','008919-MOLD-M-EACH-W02.png'];
            break;
        case 'candle bridge':
            $mainImage='008913-MOLD-M-EACH_photo.jpg';
            $smallImage=['008913-MOLD-M-EACH.jpg','008913-MOLD-M-EACH-w01.jpg','008913-MOLD-M-EACH-w02.jpg'];
            break;
        case 'snack tray':
            $mainImage='008961-MOLD-M-EACH_photo.jpg';
            $smallImage=['008961-MOLD-M-EACH.png'];
            break;
        case 'pyramid':
            $mainImage='008948-MOLD-M-EACH_photo.jpg';
            $smallImage=['008948-MOLD-M-EACH_photo_sm.jpg','008948-MOLD-M-EACH_w01.jpg','008948-MOLD-M-EACH_w02.jpg'];
            break;
        case 'offset':
            $mainImage='sd112-glass-slumping-mold-1lg.jpg';
            $smallImage=[];
            break;
        case 'wave':
            $mainImage='487119-slumping-mold-1lg.jpg';
            $smallImage=[];
            break;
    }

    include 'image.php';
?>

<div class="row">
    <div class="col">
        
        <p>
        <?php
        if(strstr($data->desc,':')!==FALSE):
            $demo='';
            $demo=explode(':',$data->desc);
        ?>
            <span class="font-weight-bold large"><?=$demo[0];?></span><br>
        <?php endif;?>
            <span class="bg-alert">This mold is  
            <?php 
                $sizes=$data->pageInfo;
            if(isset($sizes['diameter'])):?>
                <?=$sizes['diameter'];?> in diameter 
            <?php endif; ?>
            <?php if(isset($sizes['width'])):?>
                <?=$sizes['width'];?> in width, <?=$sizes['length'];?> in length, 
            <?php endif;?>
            <?php if(isset($sizes['square'])):?>
                <?=$sizes['square']?> square and 
            <?php endif; ?>
            <?php if(isset($sizes['outer'])):?>
                <?=$sizes['outer'];?> outer diameter and <?=$sizes['inner'];?> inner diameter 
            <?php endif; ?>
            <?php if(isset($sizes['innerWidth'])):?>
                with an inner size of <?=$sizes['innerWidth'];?> wide and <?=$sizes['innerLength'];?> 
            <?php endif; ?>
            <?php if(isset($sizes['innerSquare'])):?>
                with an inner size of <?=$sizes['innerSquare'];?> square 
            <?php endif; ?>
            <?php if(isset($sizes['innerDiameter'])):?>
                and an inner diameter of <?=$sizes['innerDiameter'];?>
            <?php endif; ?>
            <?php if(isset($sizes['depth'])):?>
                and <?=$sizes['depth'];?> in depth.
            <?php endif;?>
            </span><br>
            <?php if(isset($sizes['additional'])):?>
                <?=$sizes['additional'];?>
            <?php endif; ?>
        </p>
        <?php 
            $data->img=null;
            $data->pageInfo=null;
            $data->display($data->type);
        ?>
        
    </div>
</div>