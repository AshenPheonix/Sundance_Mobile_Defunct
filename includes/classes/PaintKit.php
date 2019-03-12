<?php
require_once CLASSROOT.'ItemClass.php';

class PaintKit extends Item
{
    private $contents;
    public function __construct($id, $desc, $contents, $price, $pid, $sale=null) {
        parent::__construct($id, 'paint kit', $desc, $pid, false, null, null, null, $price, 1, $sale, null);
        $this->contents=$contents;
    }

    protected function Details()
    {
        ?>
            <?=$this->splitter();?>
            Contains:
            <ul class="text-left">
                <?php foreach($this->contents as $key => $value):?>
                    <li class="disc"><?=$value;?></li>
                <?php endforeach; ?>
            </ul>
        <?php
    }
}
