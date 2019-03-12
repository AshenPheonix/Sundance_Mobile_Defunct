<?php 

require_once CLASSROOT.'ItemClass.php';

class VariousTool extends Item
{
    public $stock,$sale, $opt;
    public function __construct($id, $type, $desc, $img, $price, $pid, $opt=false, $stock ,$sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'supplies/lampworking');
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
