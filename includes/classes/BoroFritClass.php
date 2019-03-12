<?php
    require_once CLASSROOT.'ItemClass.php';
    class BoroFrit extends Item
    {
        public $stock,$sale, $opt;
        public function __construct($id, $type, $desc, $img,  $price, $pid, $opt='select', $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'rods_tubes/hard/images/northstar');
            $this->stock=$stock;
            $this->sale=$sale;
            $this->opt=$opt;
        }
    
        protected function Details()
        {
            ?>
                <p class="font-weight-bold">
                    <?=$this->desc;?>
                </p>
            <?php       
        }
    }