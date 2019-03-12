<?php
    require_once CLASSROOT.'ItemClass.php';
    class BraceletMandrel extends Item
    {
        public $shape;
        public function __construct($id, $type, $desc, $shape, $img, $list, $price, $pid, $opt, $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, null, $img, $list, $price, $stock, $sale, 'supplies/lampworking');
            $this->shape=$shape;
        }

        protected function Details()
        {
            ?>
                <?php if(isset($this->shape)):?>
                    <p>
                        Shape: <?=$this->shape;?>
                    </p>
                <?php endif; ?>
                <p>
                    <?=$this->splitter();?>
                </p>
            <?php
        }
    }
    