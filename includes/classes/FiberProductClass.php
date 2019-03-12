<?php

require_once CLASSROOT.'ItemClass.php';

class Fiber extends Item
{
    public $stock,$thickness,$density,$sale;
    public function __construct($id, $type, $desc, $thickness, $density, $price, $pid, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, false, NULL, null, null, $price, $stock, $sale, null);
        $this->stock=$stock;
        $this->sale=$sale;
        $this->thickness=$thickness;
        $this->density=$density;
    }

    protected function Details()
    {
        ?>
            <p>
                <?=$this->desc;?>
            </p>
            <?php if(isset($this->density)):?>
                <div class="row">
                    <div class="col border">
                        Density<br><hr>
                        <?=$this->density;?>
                    </div>
                    <div class="col border">
                        <span class="font-weight-bold">
                            Thickness<br><hr>
                            <?= $this->thickness;?>
                        </span>
                    </div>
                </div>
            <?php elseif(isset($this->thickness)):?>
                <div class="row">
                    <div class="col">
                        Thickness<br><hr><?=$this->thickness;?>
                    </div>
                </div>
            <?php endif; ?>
        <?php
    }
}
