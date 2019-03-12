<?php

class SoftStringer
{
    public $id,$name,$picture,$pid;

    public function __construct($id,$name,$picture,$pid) {
        $this->id=$id;
        $this->name=$name;
        $this->picture=$picture;
        $this->pid=$pid;
    }

    public function display()
    {
        ?>
            <div class="row beige border border-dark border-right-0 border-left-0">
                <div class="col flex-image white">
                    <figure class="figure">
                        <img src="images/<?=$this->picture;?>" class="figure-img img-fluid rounded" alt="<?=$this->name?> Rod">
                        <figcaption class="figure-caption text-sm-center"><?=$this->id;?></figcaption>
                    </figure>
                </div>
                <div class="col flex-image">
                    <?=$this->name;?>
                </div>
                <div class="col flex-image">
                    <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pid;?>"><img src="\mobile\images\cart_button_1.png" alt="Add To Cart Button" class="img-fluid"></a>
                </div>
            </div>
        <?php
    }
}
