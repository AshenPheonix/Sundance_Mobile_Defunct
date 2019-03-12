<?php
require_once CLASSROOT.'ItemClass.php';

class BullseyeClear extends Item
{
    public function __construct($id, $type, $desc, $img, $pid, $opt, $pageOpts, $price,$stock,$sale=null) {
        parent::__construct($id,$type,$desc,$pid,$opt,$pageOpts, $img,null,$price,$stock,null, 'glass/bullseye');
    }

    protected function Details()
    {
        $this->splitter();
        ?>
        <p class="my-1">
            Test Compatable - COE90
        </p>
        <?php
    }
}
