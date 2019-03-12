<?php
    require_once CLASSROOT.'ItemClass.php';

    class GlowRod extends Item 
    {
        public function __construct($id, $type, $desc, $pre, $post, $opt, $price, $pid, $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, ['secondaryImg'=>[$post]], $pre, null, $price, $stock, $sale, 'glow_items');
        }

        protected function Details()
        {
            ?>
            <p>
                <?=$this->splitter();?>
            </p>
            <?php
        }
    }
    