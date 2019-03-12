<?php
class EnamelPowder
{
    public $image,$number,$description,$price,$pid,$stockCode;
    public function __construct($number,$description,$image,$price,$pid,$stockCode=1) {
        $this->number = $number;
        $this->description=$description;
        $this->image=$image;
        $this->price=$price;
        $this->pid=$pid;
        $this->stockCode=$stockCode;
    }

    public function display()
    {
        ?>
    <div class="row beige border border-dark border-right-0 border-left-0 pb-2 pt-2">
        <div class="col">
            <img src="images/<?=$this->image;?>" alt="<?=$this->description;?>" class="img-fluid mx-auto">
        </div>
        <div class="w-100"></div>
        <div class="col flex-text">
            #
            <?=$this->number;?><br>
                <br>
                <?=$this->description;?>
        </div>
        <div class="col flex-image">
            <?php if($this->stockCode>0):?>
                <span class="red font-weight-bold">$<?=$this->price;?></span><br><br>
                <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pid;?>"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
            <?php elseif($this->stockCode==0):?>
                <span class="red font-weight-bold">Temporarily Out of Stock</span>
            <?php elseif($this->stockCode<0):?>
                <span class="red font-weight-bold">Discontinued</span>
            <?php endif; ?>
            
        </div>
    </div>

    <?php
    }
}