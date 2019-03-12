<?php
require_once CLASSROOT.'ItemClass.php';

class Glasses extends Item
{
    public function __construct($id, $type, $desc, $img, $opt, $pageOpt, $price, $pid, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, $pageOpt, $img, null, $price, $stock, $sale, 'eye_wear');
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
