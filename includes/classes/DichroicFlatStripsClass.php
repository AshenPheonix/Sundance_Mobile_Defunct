<?php
require_once CLASSROOT.'ItemClass.php';

class DichroicFlatStripsClass extends Item
{
    public $coating,$on,$per;
    public function __construct( $id, $coating, $on, $per, $price, $pid, $stock=1, $sale=null) {
        parent::__construct($id, '104Dich', null, $pid, null, null, null, null, $price,  $stock, $sale,'dichroic');
        $this->coating=$coating;
        $this->on=$on;
        $this->per=$per;
    }

    protected function Details()
    {
        ?>
            <strong><?=$this->coating;?> on <?=$this->on;?> Glass</strong><br>
            Price is for <?=$this->per;?>
        <?php
    }
}