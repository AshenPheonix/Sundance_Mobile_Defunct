<?php
    require_once CLASSROOT.'ItemClass.php';

    class GroundJoint extends Item
    {
        public function __construct($id, $type, $desc, $pid, $opt, $img, $pageOpts, $price, $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, null, $price, $stock, $sale, 'rods_tubes/hard/images/joints', 100);
        }

        protected function Details()
        {
            $this->splitter();
        }
    }
    