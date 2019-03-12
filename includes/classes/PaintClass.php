<?php
    require_once CLASSROOT.'ItemClass.php';
    class Paint extends Item
    {
        public $stock,$sale, $opt;
        public function __construct($id, $type, $desc, $img, $price, $pid, $opt=false, $stock=[1,1], $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'fusing_slumping');
            $this->stock=$stock;
            $this->sale=$sale;
            $this->opt=$opt;
        }

        protected function Details()
        {
            $this->splitter();
        }
}
    