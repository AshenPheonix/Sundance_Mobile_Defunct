<?php
include_once CLASSROOT.'glowItemsClass.php';
class GlowFrit104
{
    public $number,$preImage,$postImage,$preColor,$postColor,$sizes,$pids,$stock;

    public function __construct($number,$preImage,$postImage,$preColor,$postColor,$sizes,$pids,$stock=NULL) {
        $this->number = $number;
        $this->preImage=$preImage;
        $this->postImage=$postImage;
        $this->preColor=$preColor;
        $this->postColor=$postColor;
        $this->sizes=$sizes;
        $this->pids=$pids;
        $this->stock=$stock;
    }

    public function display()
    {
        ?>

    <div class="row beige border border-dark border-right-0 border-left-0 pt-1">
        <div class="col black ">
            <img src="images/<?=$this->preImage;?>" alt="<?=$this->preColor;?> in natural light" class="img-fluid">
        </div>
        <div class="col black ">
            <img src="images/<?=$this->postImage;?>" alt="<?=$this->postColor;?> in the dark" class="img-fluid">
        </div>
        <div class="w-100"></div>
        <div class="col flex-text">
            <span class="font-weight-bold">#<?=$this->number;?> & #<?=$this->number+100;?></span><br>
                <?=$this->preColor;?> in light<br>
                <?=$this->postColor;?> in dark
        </div>
        <div class="col">
            We have<br>
            <?php if($this->testOut(5)==false):?> 5 gram<br>
            <?php endif; ?>
            <?php if($this->testOut(5)==false && $this->testOut(14)==false):?> and
            <br>
            <?php endif; ?>
            <?php if($this->testOut(14)==false):?> 14 gram
            <?php endif; ?> bags.
            <br><br>
            Currently Available in<br>
            <?php foreach($this->sizes as $key => $value):?>
                <?php if(isset($this->stock)==false|| isset($this->stock[5])== false || isset($this->stock[14])==false  || (in_array($value,$this->stock[5])==false && in_array($value,$this->stock[14])==false)):?>
                    <?=$value;?><br>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="w-100"></div>
        <?php if($this->testOut(5)==false):?>
        <div class="col-12">
            <?php if($this->testOut(5)):?>
                <span class="red">Size Temporarily Out</span>
            <?php endif; ?>
            5 Gram: <span class="red">$7.00</span> &nbsp;
            <select>
                <option value="0">Select Item</option>
                <?php foreach($this->pids[5] as $key => $value):?>
                    <?php if(isset($this->stock)==false|| isset($this->stock[5])==false || in_array($this->sizes[$key],$this->stock[5])==false):?>
                        <option value="<?=$value;?>"><?=$this->sizes[$key];?></option>
                    <?php endif; ?>
                    
                <?php endforeach; ?>
            </select>
            <button class="buy btn btn-link"><img src="\mobile\images\cart_button_1.png" alt="Buy This Now" class="img-fluid"></button>
        </div>
        <?php endif; ?>
        <?php if($this->testOut(5)==false && $this->testOut(14)==false):?>
            <hr>
        <?php endif; ?>
        <?php if($this->testOut(14)==false):?>
        <div class="col-12">
            <?php if($this->testOut(14)):?>
                <span class="red">Size Temporarily Out</span>
            <?php endif; ?>
            14 Gram: <span class="red">$19.00</span> &nbsp;
            <select>
                <option value="0">Select Item</option>
                <?php foreach($this->pids[14] as $key => $value):?>
                    <?php if(isset($this->stock)==false|| isset($this->stock[14])==false || in_array($this->sizes[$key],$this->stock[14])==false):?>  
                        <option value="<?=$value;?>"><?=$this->sizes[$key];?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <button class="buy btn btn-link"><img src="\mobile\images\cart_button_1.png" alt="Buy This Now" class="img-fluid"></button>
        </div>
        <?php endif; ?>
    </div>

    <?php
    }

    private function testOut($which)
    {
        
        if(isset($this->stock)==false || array_key_exists($which,$this->stock)==false){
            return false;
        }
        foreach ($this->sizes as $key => $value) {
            if(in_array($value,$this->stock[$which])==false){
                return false;
            }

        }
        return true;
    }

}