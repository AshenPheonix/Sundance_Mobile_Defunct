<?php

require_once CLASSROOT.'ItemClass.php';

class Shaper extends Item
{
    public $stock,$sale, $import;
    public function __construct($id, $type, $desc, $img, $price, $pid, $stock,$import=false, $sale=null) {
        $temp = (is_array($price)) ? 'qty' : false ;
        parent::__construct($id, $type, $desc, $pid, $temp, null , $img, null, $price, $stock, $sale, 'supplies/lampworking');
        $this->import=$import;
    }

    protected function Details()
    {
        
        $this->splitter();
        ?>
        <?php if($this->import==false):?>
            <p class="red font-weight-bold">
                Made in the USA
            </p>
        <?php else:?>
            <p class="red font-weight-bold">
                Import
            </p>
        <?php endif; 
    }
}
