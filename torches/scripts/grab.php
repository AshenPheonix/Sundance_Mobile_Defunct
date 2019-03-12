<?php
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    
    function get_include_contents($location){
        global $tip;
        ob_start();
        include $location;
        return ob_get_clean();
    }

    $select='';
    $temp=json_decode(file_get_contents(ROOT.'/mobile/includes/dbs/torches.json'));
    foreach ($temp as $key => $value) {
        if ($value->name==preg_replace('/_/',' ',$_POST['name']) && $value->company==$_POST['company']) {
            $select=$value;
            break;
        }
    }

    function flip($pid, $which=null)
    {
        global $select;
        if($select->stock && isset($which)==false):?>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
            </a>
        <?php elseif($which!==null && $select->stock[$which]):?>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
            </a>
        <?php else:?>
            Temporarily Out of stock.
        <?php endif;
    }

    $returner=get_include_contents(ROOT.'/mobile/torches/'.$_POST['company'].'/'.$_POST['name'].'.php');
    $tip='';
    if($_POST['name']=='Midrange_Series' || $_POST['name']=="8M_Torch"|| $_POST['name']=='Major_Bench_Burner' || $_POST['name']=='The_Red_Max_torch'||$_POST['name']=='The_Red_Rocket'){
        $tip='Premix Tip of this torch';
    }else {
        $tip=preg_replace('/_/',' ',$_POST['name']);
    }


    if ($_POST['name']!=='Hot_Head_Torch') {
        if(($select->gas=='pre' || $select->gas=='all') && ($tip!=='Mini Milon' && $tip!=='Unitorch Premix Torch' && strpos($tip,'CC')===false)){
            $returner.=get_include_contents(ROOT .'/mobile/includes/other/torch_tip.php').
            '<div class="row">
                <div class="col">
                    <h5>Thread size 7/16-24</h5><br>
                    CAUTION - all torch tips are subject
                    to burning out if you have an improper torch adjustment. The
                    HT-2 and HT-3 are the most sensitive tips to burning out and
                    these are not recommended for beginners who are learning how
                    to adjust their glass art torches properly - therefore these
                    and all torch tips are not guaranteed from burning out. Please
                    see the person who instructed you to learn the proper torch adjustment.
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive item" src="//www.youtube.com/embed/uQjygaQBtoU?feature=player_detailpage" frame allowfullscreen></iframe>
                </div>
            </div>';
        }
        if (strpos($_POST['name'],'8M_Torch')!==FALSE || strpos($_POST['name'],'3A_Blowpipe')!==FALSE) {
            $returner.=get_include_contents(ROOT.'/mobile/torches/other/ribbon.php');
        }
        $returner.=get_include_contents(ROOT .'/mobile/torches/other/lower.php').'</div>';
    }

    

echo $returner;