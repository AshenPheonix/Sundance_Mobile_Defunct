<?php
require_once CLASSROOT.'ItemClass.php';

class BoroTool extends Item
{
    public function __construct($id, $type, $desc, $img, $price, $pid, $stock,$opt=false, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'supplies/lampworking');
    }

    public function Details()
    {
        ?>
            <p>
                <?=$this->desc;?>
            </p>
        <?php
    }
}
