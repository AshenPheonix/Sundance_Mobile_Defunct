<?php

require_once CLASSROOT.'ItemClass.php';

class Dichro904X4 extends Item
{

    /**
     * 
     * Variable Declaration
     */
    protected $front, $backing;

    /**
     * Constructs a Dichroic 4x4 Item using the Item Parent
     * @var id Id of Product
     * @var type Type of Product (for display)
     * @var front Metallic Portion
     * @var backing glass portion
     * @var pid PID proviced by 1sc
     * @var img Image of the product
     * @var opt How the product must be displayed
     * @var pageOpt page options
     * @var price price
     * @var stock stock? <0=discontinued, 0 = no, any positive #= in stock
     * @var sale current sale price, if applicable
     */
    public function __construct($id, $type, $front, $backing, $pid, $img, $opt, $pageOpt, $price, $stock, $sale=null) {
        parent::__construct($id, $type, null, $pid, $opt, $pageOpt, $img, null, $price, $stock, $sale, 'dichroic');
        $this->front=$front;
        $this->backing=$backing;
    }

    /**
     * How the Description Displays
     */
    protected function Details()
    {
        ?>
            4" x 4" Square<br>
            Coating: <?=$this->front;?><br>
            Glass Color: <?=$this->backing;?><br>
        <?php   
    }
}
