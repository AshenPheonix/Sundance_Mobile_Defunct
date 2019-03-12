<?php
require_once CLASSROOT.'ItemClass.php';

class Kit extends Item
{
    public $page, $sep;
    public function __construct($id, $type, $desc, $page, $img, $sep, $price, $pid, $out=1) {
        parent::__construct($id, $type, $desc, $pid, 'b', null, $img, $sep, $price, $out, null, 'kits');
        $this->page=$page;
        $this->sep=$sep;
    }

    protected function Details()
    {
        ?>
            <p>
                <?=$this->splitter();?>
            </p>
            <p>
                <a href="products/<?=$this->page;?>">
                    Click Here for Details
                </a>
            </p>
            <p>
                Bought Seperately, this kit costs $<?=$this->sep;?>
            </p>
        <?php
    }
}
