<?php

    class KitSpec 
    {
        public $img, $kit, $company,$torch, $reg, $price, $id, $pid, $stock, $opt;
        public function __construct( $id, $kit, $company, $torch, $img, $reg, $price, $pid,  $opt, &$fetcher) {
            $this->img = $img;
            $this->id=$id;
            $this->company=$company;
            $this->torch=$torch;
            $this->reg=$reg;
            $this->price=$price;
            $this->pid=$pid;
            foreach($fetcher as $key => $value) {
                if ($value->name==$this->torch) {
                    $this->stock = ($value->stock) ? 1 : 0;
                }
            }
            $this->opt=$opt;
            $this->kit=$kit;
        }

        public function display($which)
        {
            if($this->kit==$which):?>
                
            
                <div class="row border border-dark border-right-0 border-left-0 beige py-2">
                    <?php if(isset($this->img)):?>
                        <div class="col">
                            <img src="/mobile/torches/<?=$this->company;?>/images/<?=$this->img;?>" alt="The Torch" class="img-fluid restrictor">
                        </div>
                    <?php endif; ?>
                    <w class="w-100"></w>
                    <div class="col font-weight-bold">
                        Item #<?=$this->id;?>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-6 flex-image">
                        <p>
                            This kit with the <?=$this->torch;?><br>
                            <a href="/mobile/torches/index.php#product/<?=$this->company;?>/<?=preg_replace('/\s/','_',$this->torch);?>" target="_blank">Click here for details on the torch</a>
                        </p>
                        <?php if(isset($this->opt)):?>
                            <?=$this->opt;?>
                        <?php endif; ?>
                    </div>
                    <div class="col-6 flex-image">
                        <?php if(isset($this->reg) && $this->reg>$this->price):?>
                            Regular Price: $<?=$this->reg;?><br>
                        <?php endif; ?>
                            <strong>Kit Price: <span class="red text-right">$<?=$this->price;?></span></strong>
                        <?php if($this->stock>0):?>
                            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=47BF3DAF%2DA2C9%2D4D74%2D94CA%2D0EBA5234BE11&<?=$this->pid;?>" class="my-4">
                                <img src="/mobile/images/cart_button_1.png" alt="Buy Now!" class="img-fluid">
                            </a>
                        <?php elseif ($this->stock==0):?>
                            <strong class="red">Sorry, currently out of stock</strong>
                        <?php endif; ?>
                    </div>
                </div>

            <?php
            endif;
        }
    }
    