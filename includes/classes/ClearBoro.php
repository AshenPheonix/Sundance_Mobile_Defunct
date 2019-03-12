<?php

    require_once CLASSROOT.'ItemClass.php';

    class ClearBoro extends Item 
    {
        private $diameter, $wall, $specLoc;
        public function __construct($id, $type, $diameter, $wall, $specLoc, $price, $pid, $stock, $sale=null) {
            parent::__construct($id, $type, null, $pid,'select', null, null, null, $price, $stock, $sale, null);
            $this->wall=$wall;
            $this->diameter=$diameter;
            $this->specLoc=$specLoc;
        }

        protected function Details()
        {
            ?>
                <p>
                    <?php if(is_array($this->diameter)):?>
                        <?=$this->diameter[0];?> mm in Diameter<br>
                        <?=$this->diameter[1];?> Inches in Diameter<br>
                    <?php else:?>
                        <?=$this->diameter?> mm in Diameter
                    <?php endif; ?>
                </p>
                <?php if(isset($this->wall)):?>
                    <p>
                        <?=$this->wall;?> mm Wall Thickness
                    </p>
                <?php endif; ?>
                <p class="clickWindow" data-target="<?=$this->specLoc;?>">
                    Specificiations
                </p>
            <?php
        }
    }
    