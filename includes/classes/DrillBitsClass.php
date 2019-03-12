<?php

require_once CLASSROOT.'ItemClass.php';
class DrillBit extends Item
{
    public function __construct($id, $type, $desc, $img, $price, $pid, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, false, null, $img, null, $price, $stock, $sale, 'supplies/fusing');
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

class HoleSaw extends Item
{
    public $size, $shaft, $depth;
    public function __construct($id, $type, $size, $shaft, $depth, $img, $price, $pid, $stock, $sale=null) {
        parent::__construct($id, $type, null, $pid, false, null, $img, null, $price, $stock, $sale, 'supplies/fusing');
        $this->size=$size;
        $this->shaft=$shaft;
        $this->depth=$depth;
    }

    protected function Details()
    {
        ?>
            <dl class="text-left">
                <dt>
                    Hole Size :
                </dt>
                <dd class="tabbed">
                    <?=$this->size;?>
                </dd>
                <dt>
                    Shaft Dia.:
                </dt>
                <dd class="tabbed">
                    <?=$this->shaft;?>
                </dd>
                <dt>
                    Depth:
                </dt>
                <dd class="tabbed">
                    <?=$this->depth;?>
                </dd>
            </dl>
        <?php
    }
}

