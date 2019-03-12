<?php
    require_once CLASSROOT.'ItemClass.php';

    class GoldWire extends Item
    {
        public function __construct($id, $metal, $hardness, $width, $LpW, $WpL, $origin, $guage, $iPerOrder, $pid, $price, $stock, $sale=null) {
            $temp="Metal Type: {$metal}<br>Hardness: {$hardness}<br>Width: {$width[0]}Inch ({$width[1]}mm)<br>". ((isset($LpW))?"Length Per Weight: {$LpW} ft./ozt<br>":'')."Weight Per Length: {$WpL}<br>Country of Origin: {$origin}<br>{$guage} Guage Wire<br>{$iPerOrder} per Order";
            parent::__construct($id, 'wire', $temp, $pid, false, null, null, null, $price, $stock, $sale, null);
        }
        
        protected function Details()
        {
            ?>
            <p class="text-left">
               <?=$this->splitter();?>
            </p>
            <?php
        }
    }
    