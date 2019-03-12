<?php 

require_once CLASSROOT.'ItemClass.php';

class FusingTool extends Item
{
    
    public function __construct($id, $type, $desc,$img, $price, $pid, $stock, $sale=null, $opt=false) {
        parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'supplies/fusing');
    }

    protected function Details()
    {
        ?>
            <p>
                <?php $this->splitter();?>
            </p>
        <?php
    }
}
