<?php
    class Millefori
    {
        public $image,$bigImage,$number,$desc,$qty,$price,$pid,$stock;

        public function __construct($number,$desc,$image,$bigImage,$qty,$price,$pid,$stock=true) {
            $this->image = $image;
            $this->number=$number;
            $this->desc=$desc;
            $this->qty=$qty;
            $this->price=$price;
            $this->pid=$pid;
            $this->stock=$stock;
            $this->bigImage=$bigImage;
        }

        public function display()
        {
            ?>
            
            <div class="row beige border border-dark border-right-0 border-left-0">
                <div class="col white">
                    <?php if($this->image==false || $this->image==null):?>
                        <span class="red">No Image</span>
                    <?php else: ?>
                        <img src="images/<?=$this->image;?>" alt="<?=$this->desc?>" class="img-fluid<?php if($this->bigImage!=false):?>
                        clickImg"
                            data-bigImg="images/<?=$this->bigImage;?>" data-title="<?=$this->desc?>
                        <?php endif; ?>">
                    <?php endif; ?>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <span class="font-weight-bold">#<?=$this->number?></span><br>
                    <?=$this->desc;?>
                </div>
                <div class="col flex-text">
                    <?=$this->qty?><br>
                    <span class="red font-weight-bold">$<?=$this->price?></span>
                </div>
                <div class="col flex-text">
                    <?php if($this->stock):?>
                        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pid?>"><img src="/mobile/images/cart_button_1.png" alt="Add To Cart" class="img-fluid"></a>
                    <?php else: ?>
                        <span class="red font-weight-bold">Temporarily out of stock</span>
                    <?php endif; ?>
                </div>
            </div>

            <?php
        }
    }
    