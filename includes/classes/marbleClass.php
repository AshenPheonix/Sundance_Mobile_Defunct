<?php
require_once CLASSROOT.'ItemClass.php';

class Marble extends Item
{
    public $stock, $sale, $opt, $holes;
    public function __construct($id, $type, $desc, $holes, $img, $price, $pid, $opt, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'supplies/lampworking');
        $this->holes=$holes;
    }

    protected function Details()
    {
        ?>
            <p>
                <?=$this->desc;?>
            </p>
            <div class="row border border-dark">
                <div class="col-12">
                    <?=sizeof($this->holes);?> Hole<?=(sizeof($this->holes)>1) ? 's' : '' ;?>
                </div>
                <?php foreach($this->holes as $key => $value):?>
                    <div class="col custom-border">
                        Hole <?= (is_numeric($key))? $key+1:$key;?> is <?=$value;?> Inches.
                    </div>
                <?php endforeach; ?>
            </div>
        <?php
    }
}
