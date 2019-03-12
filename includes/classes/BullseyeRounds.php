<?php
    require_once CLASSROOT.'ItemClass.php';

    class PriceCode  
    {
        public $six, $nine, $eleven;
        public function __construct($six, $nine, $eleven) {
            $this->six=$six;
            $this->nine=$nine;
            $this->eleven=$eleven;
        }
    }

    $codes=[
        'c'=>new PriceCode(9,14,20),
        'b'=>new PriceCode(8,12,18),
        'e'=>new PriceCode(13,18,28),
        'c+'=>new PriceCode(11,17,25),
        'd'=>new PriceCode(9,16,23),

    ];
    

    class BullseyeRounds extends Item
    {
        public function __construct($id, $desc, $img, $priceCode, $pid, $stock, $sale=null) {
            if ($priceCode==='special') {
                $price=16;
            } else {
                global $codes;
                $price=[['6&frac34;&quot; Circle', $codes[$priceCode]->six],['9&quot; Circle', $codes[$priceCode]->nine],['11&quot; Circle', $codes[$priceCode]->eleven]];
            }
            
            parent::__construct($id, 'colored-round', $desc, $pid, 'select', null, $img, null, $price, $stock, $sale, 'glass/bullseye');
        }

        protected function Details(){
            ?>
                <?=$this->splitter();?>
            <?php
        }
    }
    