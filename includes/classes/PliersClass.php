<?php
require_once CLASSROOT.'ItemClass.php';

class Pliers extends Item
{

    public function __construct($id, $type, $desc, $img, $price, $pid, $stock, $sale=null) {
        $temp = (is_array($price)) ? 'qty' : false ;
        parent::__construct($id, $type, $desc, $pid, $temp, null, $img, null, $price, $stock, $sale, 'supplies/lampworking');
    }

    protected function Details()
    {
       ?>
            <p>
                <?=$this->splitter();?>
            </p>
        <?php
    }
}
