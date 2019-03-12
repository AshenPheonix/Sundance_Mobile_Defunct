<?php
    require_once CLASSROOT.'ItemClass.php';

    class Pyrometer extends Item{
        public function __construct($id, $type, $desc, $img, $list, $price, $pid, $opt=false, $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'kilns');
        }

        protected function Details(){
            $this->splitter();    
        }

    }
    