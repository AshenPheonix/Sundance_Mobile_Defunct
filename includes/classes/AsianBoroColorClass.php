<?php

    require_once CLASSROOT.'ItemClass.php';

    class AsianBoroColor extends Item
    {
        public $wall, $diameter, $length, $color;
        public function __construct($id, $type, $color, $diameter, $length, $wall, $img, $pageOpt, $pid, $list, $price, $opt=false, $stock=null, $sale=null) {
            parent::__construct($id, $type, "$color - $diameter", $pid, $opt, $pageOpt, $img, $list, $price,  $stock, $sale,'rods_tubes/hard');
            $this->wall=$wall;
            $this->diameter=$diameter;
            $this->length=$length;
            $this->color=$color;
            
        }

        protected function Details()
        {
            ?>
                <p class="font-weight-bold">
                    <?=$this->color;?>
                </p>
                <p>
                    Diameter: <?=$this->diameter;?>
                </p>
                <?php if(isset($this->wall)):?>
                    <p>
                        Wall Thickness: <?=$this->wall;?>
                    </p>
                <?php endif; ?>
                <p>
                    Tubes are &ap;<?=$this->length;?> Long
                </p>
            <?php if($this->type=='rod'):?>
                <p>
                    Sold by the Pound
                </p>
            <?php endif; 
        }
    }
    