<?php

require_once CLASSROOT.'fusingToolsClass.php';

class FusingMulti extends FusingTool
{
    public function __construct($id, $type, $desc, $img, $amounts, $prices, $pid, $stock, $sale=null) {
        $temp = (count($prices)>1) ? 'qty' : 'multi';
        if (count($prices)>1) {
            foreach ($prices as $key => &$value) {
                $value=[$amounts[$key],$value];
            }
        }elseif(is_array($prices)) {
            $prices=$prices[0];
        }
        parent::__construct($id, $type, $desc, $img, $prices, $pid, $stock, $sale, $temp);
    }
}
