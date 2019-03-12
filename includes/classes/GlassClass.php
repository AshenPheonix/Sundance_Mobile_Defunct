<?php
    require_once CLASSROOT.'ItemClass.php';
    
    abstract class Glass extends Item
    {
        public $id, $COE, $desc, $img, $price, $pid, $stock, $sale, $opts, $brand, $list, $type;
        
        public function __construct($id, $type, $COE, $desc, $img, $brand, $list, $price, $pid, $opts, $stock, $sale, $path) {
            parent::__construct($id, $type, $desc, $pid, $opts, $img, $list, $price, $stock, $sale, $path);
            $this->COE=$COE;
            $this->brand=$brand;
        }

        abstract protected function Details();
    }
    