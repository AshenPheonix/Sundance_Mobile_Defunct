<?php
require_once CLASSROOT.'ItemClass.php';

class Cutter extends Item
{
    public $blade;
    public function __construct($id, $type, $desc, $blade, $img, $list, $price, $pid, $stock,$sale=null) {
        $temp = (is_array($price)) ? 'qty' : false ;
        parent::__construct($id, $type, $desc, $pid, $temp, null, $img, $list, $price, $stock, $sale, 'supplies/fusing');
        $this->blade=$blade;
    }

    protected function Details()
    {
        ?>  
            <p>
                <?=$this->desc;?>
            </p>
        <?php
    }
}
