<?php
    require_once CLASSROOT .'ItemClass.php';

    class GlasslinePen extends Item
    {
        public function __construct($id, $type, $desc, $img, $list, $price, $pageOpts, $pid, $opt=false, $stock=true, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price, $stock, $sale, 'fusing_slumping');
        }

        protected function Details()
        {
            $this->splitter();
            if(isset($this->pageOpts) && isset($this->pageOpts['info'])):?>
                <a class="infoPopper" data-text="/mobile/fusing_slumping/lists/<?=$this->pageOpts['info'];?>.php">For a list of colors, click here</a>
            <?php endif; ?>
            <?php if(stripos($this->type, 'pen kit') === false && $this->type!=='tips'):?>
                <p>
                    Buy 5 or more and pay <strong class="red">$7.95</strong> each. Color does not have to be the same. Enter coupon code <strong class="red">Glassline</strong> at the shopping cart for the discount.
                </p>
                <p>
                    <a class="font-weight-bold infoPopper text-capitalize" data-text="/mobile/fusing_slumping/lists/indShip.php">Eligible for Free Shipping</a>
                </p>
            <?php endif; ?>
    
            <?php
        }
    }
    