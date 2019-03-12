<?php
    require_once CLASSROOT.'ItemClass.php';

    class GoldstoneAdventurine extends Item
    {
        public function __construct($id, $desc, $opt, $price, $pid, $stock, $sale=null) {
            parent::__construct($id, 'goldstone', $desc, $pid, $opt, null, null, null, $price, $stock, $sale, null);
        }

        protected function Details(){
            ?>
                <p>
                    <?=$this->splitter();?>
                </p>
            
            <?php
        }
    }
    