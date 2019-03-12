<?php

class DichroicFlatStripsClass
{
    public $order,$coating,$on,$per,$price,$pid,$stock;
    public function __construct( $order, $coating, $on, $per, $price, $pid, $stock=true) {
        $this->order = $order;
        $this->coating=$coating;
        $this->on=$on;
        $this->per=$per;
        $this->price=$price;
        $this->stock=$stock;
    }

    public function display()
    {
        ?>

    <div class="row beige border border-dark border-right-0 border-left-0">
        <div class="col-2 flex-text">
            <?=$this->order;?>
        </div>
        <div class="col-7">
            Dichroic
            <?=$this->coating;?> on &frac18; / 4mm wide<br>
                <?=$this->on;?> Effetre Moretti - 1 mm thick<br>
        </div>
        <div class="col-3 flex-image">
            <span class="red">$<?=$this->price;?> for <?=$this->per;?></span><br>
            <?php if($this->stock==false):?>
                <span class="red font-weight-bold">Temporarily out of stock</span>
            <?php else: ?>
                <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pid;?>"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart" class="img-fluid"></a>
            <?php endif; ?>
        </div>
    </div>

    <?php
    }
}