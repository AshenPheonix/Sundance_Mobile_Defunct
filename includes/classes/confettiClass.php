<?php
require_once CLASSROOT.'ItemClass.php';
class Confetti extends Item
{
    public $image,$order,$color,$price,$pid,$stock;

    public function __construct($order,$type,$color,$image,$pid,$stock=true,$price=17, $sale=null) {
        parent::__construct($order,$type, null, $pid, 'multi', null, $image, null, $price, $stock, $sale, 'glass\bullseye\conf_images');
        $this->color=$color;
    }

    protected function Details()
    {
        ?>
            <?=$this->color?>
        <?php
    }
}