<?php

class SheetGlass
{
    public $image, $title, $ids, $sizes,$prices,$pids,$secondImage,$options,$stock;
    public function __construct($image,$title,$ids,$sizes,$prices,$pids,$secondImage=NULL,$options=NULL,$stock=NULL) {
        $this->image = $image;
        $this->title=$title;
        $this->ids=$ids;
        $this->sizes=$sizes;
        $this->prices=$prices;
        $this->pids=$pids;
        $this->secondImage=$secondImage;
        $this->options=$options;
        $this->stock=[];
        foreach ($this->sizes as  $value) {
            $this->stock[]=TRUE;
        }
        if(isset($stock)){
            foreach ($stock as $key => $value) {
                $this->stock[$key]=$value;
            }
        }
    }

    public function display()
    {
        ?>
        
        <div class="row border border-dark border-right-0 border-left-0 beige">
            <div class="col flex-image">
                <img src="../images/<?=$this->image;?>" alt="<?=$this->title;?>" class="img-fluid"><?php if(isset($this->secondImage)):?><br>
                    <img src="../images/<?=$this->secondImage;?>" alt="Dichroic Glass" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="col justify-content-center flex-text">
                <span class="font-weight-bold"><?=$this->title;?></span><br>
                <?php if(isset($this->stock) && $this->stock=='all'):?>
                    <span class="red large"> Out of Stock </span>
                <?php else:?>
                    <?php if(isset($this->options) && isset($this->options['images'])):?>
                        <div class="row justify-content-center">
                            <?php foreach($this->options['images'] as $image):?>
                            <div class="col">
                                <img src="../images/<?=$image[0];?>" alt="Dichroic Example" class="img-fluid clickImg" data-bigImg="../images/<?=$image[1];?>" data-title="Dichroic Example">
                            </div>
                            <?php endforeach; ?>
                                
                        </div>
                        <br>
                    <?php endif; ?>
                            <?php if(isset($this->options) && isset($this->options['info'])):?>
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <?=$this->options['info'];?>
                                    </div>
                                </div>
                            <?php endif; ?>
                    <?php foreach($this->ids as $key => $value):?>
                        <?php if($this->stock[$key]):?>
                            <?=$value?> -- <?=$this->sizes[$key];?> - $<?=$this->prices[$key];?><br>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <br>
                    <div class="row">
                        <div class="col">
                            <select>
                                <option value="0">Select Size</option>
                                <?php foreach($this->pids as $key => $value):?>
                                    <?php if($this->stock[$key]):?>
                                        <option value="<?=$value;?>"><?=$this->sizes[$key];?> -- $<?=$this->prices[$key];?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select><br>
                            <button class="buy btn btn-link"><img src="/mobile/images/cart_button_3.png" alt="Buy Now"></button>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <?php
    }
}
