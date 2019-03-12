<?php
require_once CLASSROOT.'ItemClass.php';

    class BoroAssort extends Item
    {

        public $popup, $COE, $brand;
        public function __construct($id, $type, $COE, $desc, $img, $brand, $list, $price, $pid, $opts, $stock, $sale=null, $popup=false){
            parent::__construct($id, $type, $desc, $pid, $opts, null, $img, $list, $price, $stock, $sale, 'rods_tubes/hard');
            $this->popup=$popup;
            $this->COE=$COE;
            $this->brand=$brand;
        }

        public function Details()
        {
            $this->splitter();
            
            if(isset($this->opts) && isset($this->opts['popup']) && $this->opts['popup'] ):?>
                <a class="clickWindow" data-target="assort-specs.php" style="color:blue;text-decoration:underline;">Specifications</a>
            <?php endif; 
        }
    }