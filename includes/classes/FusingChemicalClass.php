<?php

require_once CLASSROOT.'ItemClass.php';

class Chemical extends Item
{
    private $size;
    public function __construct($id, $type, $desc, $size, $img, $price, $pid, $stock, $sale=null, $min=0) {
        $temp = (stripos($type,'thinfire roll')!==false || $id=='TF20') ? 'multi' : false ;
        parent::__construct($id, $type, $desc, $pid, $temp, ['min'=>$min], $img, null, $price, $stock, $sale, 'supplies/fusing');
        $this->size=$size;
    }

    protected function Details()
    {
        ?>
                    <p>
                        <?=$this->desc;?>
                    </p>
                    <p>
                        Qty per order: <?=$this->size;?>
                    </p>
        <?php
    }
}
