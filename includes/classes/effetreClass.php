<?php

class EffetreGlass
{
    public $number,$description,$image,$price,$pids,$stock,$info;
    public function __construct($number,$description,$image,$price,$pids,$stock,$info=false) {
        $this->number = $number;
        $this->description=$description;
        $this->image=$image;
        $this->price=$price;
        $this->pids=$pids;
        $this->stock=$stock;
        $this->info=$info;
    }

    public function display()
    {
        ?>
    <div class="row beige border border-dark border-right-0 border-left-0 pb-2">
        <div class="col white pt-4">
            <figure class="figure">
                <img src="images/<?=$this->image?>" class="figure-img img-fluid rounded" alt="<?=$this->description;?> Glass Rod" style="height:22px;width:70px;">
                <figcaption class="figure-caption text-sm-center">
                    <?=$this->number;?>
                </figcaption>
            </figure>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <?=$this->description;?>
            <?php if($this->info==true):?>
                <br><a href="#black">Why is Black considered transparent?</a>
            <?php endif; ?>
        </div>
        <div class="w-100"></div>
        <div class="col flex-text">
            Price per Pound: $<?=number_format($this->price,2,'.','');?><br> 
            Price per &frac14;Pound: $<?=number_format($this->price/4,2,'.','');?>
        </div>
        <div class="col flex-image">
            <?php if(isset($this->stock)&&$this->stock==false):?>
                <span class="red font-weight-bold">Temporarily Out of Stock</span>
            <?php else:?>
            <select>
                        <option value="0">Select Quantity</option>
                        
                            <option value="<?=$this->pids[0];?>">.25lb -- $<?=number_format($this->price/4,2,'.','');?></option>
                            <option value="<?=$this->pids[1];?>">1lb -- $<?=number_format($this->price,2,'.','');?></option>
                        
                    </select><br>
            <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart Button" title="Buy Now" class="img-fluid"></button>
            <?php
                endif; 
            ?>
        </div>
    </div>
    <?php
    }

    public function displayCools()
    {
        ?>
    <div class="row beige border border-dark border-right-0 border-left-0 pb-2">
        <div class="col white pt-4">
            <figure class="figure">
                <img src="images/<?=$this->image?>" class="figure-img img-fluid rounded" alt="<?=$this->description;?> Glass Rod" style="max-height:70px;max-width:70px;">
                <figcaption class="figure-caption text-sm-center">
                    <?=$this->number;?>
                </figcaption>
            </figure>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <?=$this->description;?>
            <?php if($this->info==true):?>
                <br><a href="#black">Why is Black considered transparent?</a>
            <?php endif; ?>
        </div>
        <div class="w-100"></div>
        <div class="col flex-text">
            Price per Pound: $<?=number_format($this->price,2,'.','');?><br> 
            Price per &frac14;Pound: $<?=number_format($this->price/4,2,'.','');?>
        </div>
        <div class="col flex-image">
            <?php if(isset($this->stock)&&$this->stock==false):?>
                <span class="red font-weight-bold">Temporarily Out of Stock</span>
            <?php else:?>
            <select>
                        <option value="0">Select Quantity</option>
                        
                            <option value="<?=$this->pids[0];?>">.25lb -- $<?=number_format($this->price/4,2,'.','');?></option>
                            <option value="<?=$this->pids[1];?>">1lb -- $<?=number_format($this->price,2,'.','');?></option>
                        
                    </select><br>
            <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart Button" title="Buy Now" class="img-fluid"></button>
            <?php
                endif; 
            ?>
        </div>
    </div>
    <?php
    }
}