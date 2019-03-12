<?php
class DropStand
{
    public $image,$number,$height,$outerDiameter,$prices,$pid,$options,$stock;
    public function __construct($image,$number,$height,$outerDiameter,$prices,$pid,$options,$stock=1) {
        $this->image = $image;
        $this->height=$height;
        $this->outerDiameter=$outerDiameter;
        $this->prices=$prices;
        $this->pid=$pid;
        $this->options=$options;
        $this->number=$number;
        $this->stock=$stock;
    }

    public function display()
    {
        ?>

    <div class="row beige border-left-0 border-right-0 border border-dark">
        <div class="col-12 col-md flex flex-image">
            <img src="images/<?=$this->image;?>" alt="Drop Through Stand" class="img-fluid mx-auto">
        </div>
        <div class="w-100 d-md-none"></div>
        <div class="col-6 col-md">
            <p class="description">#
            <?=$this->number;?><br>
            <?=$this->height;?>" Tall with <?=$this->outerDiameter;?>" Outer Diameter</p><br>
            <?php
                if(isset($this->options) && isset($this->options['images'])):
                    foreach($this->options['images'] as $value):
                        if(is_array($value)):?>
                            <img src="images/<?=$value[0];?>" alt="Display Image" class="clickImg img-fluid" data-bigImg="images/<?=$value[1];?>" data-title="Stand with project">
                        <?php else:?>
                            <img src="images/<?=$value;?>" alt="Display Image" class="img-fluid">
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php 
                endif; 
                if(isset($this->options) && isset($this->options['info'])):?>
                    <p><?=$this->options['info'];?></p>
                <?php endif; ?>
        </div>
        <div class="col-6 col-md">
            Buy <strong>one</strong> Pay $<?=$this->prices[0];?><br>
            Buy <strong>two</strong> Pay #<?=$this->prices[1];?> each<br>
            Buy <strong>three</strong> Pay #<?=$this->prices[2];?> each<br>
            Buy <strong>four</strong> Pay #<?=$this->prices[3];?> each<br>
            <br>
            <label for="quantity" class="d-inline-block">Qty:
                <input type='number' min='0' step='1' value='1' name="quantity" class="d-inline-block" /><br />
            </label>
            <?php if($this->stock>0):?>
                <button type="button" class="btn btn-link btn-lg btn-block buyButton" value="<?=$this->pid;?>">
                    <img src="/mobile/images/cart_button_1.png" alt="Click here to Purchace">
                </button>
            <?php elseif($this->stock==0):?>
                <strong class="red">Temporarily out of stock</strong>
            <?php endif; ?>
        </div>
    </div>

    <?php
    }
}