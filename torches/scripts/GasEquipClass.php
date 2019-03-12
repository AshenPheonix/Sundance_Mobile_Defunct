<?php

class GlassEquipment
{
    public $id,$type,$name,$desc,$image,$opts,$list,$ours,$pid,$stock;

    public function __construct($id,$name,$desc,$type,$image,$opts,$list,$ours,$pid,$stock) {
        $this->id = $id;
        $this->name=$name;
        $this->desc=$desc;
        $this->image=$image;
        $this->opts=$opts;
        $this->list=$list;
        $this->ours=$ours;
        $this->pid=$pid;
        $this->type=$type;
        $this->stock=$stock;
    }

    private function dispLength()
    {
        ?>
            <?=$this->opts['length'];?> Feet Long<br>
            <?=$this->opts['length']*.3048;?> Meters long
        <?php
    }

    public function display($type)
    {
        if($type == $this->type || $this->id==$type):?>
            <div class="row beige border border-dark border-right-0 border-left-0 pb-2">
                <?php if($this->image!==NULL):?>
                <div class="col white flex-image">
                    <img src="/mobile/torches/images/<?=$this->image;?>" alt="<?=$this->name;?>" class="img-fluid">
                </div>
                <div class="w-100"></div>
                <?php else: ?>
                <div class="col flex-text">
                    #<?=$this->id;?>
                </div>
                <?php endif; ?>
                <?php if($this->type=='hose'):?>
                <div class="col flex-text">
                    <?=$this->dispLength();?>
                </div>
                <div class="w-100"></div>
                <?php endif; ?>
                <div class="col flex-text">
                    <span class="font-weight-bold"><?=$this->name;?></span><br>
                    <?=$this->desc;?><br>
                    <?php if(isset($this->opts)&&isset($this->opts['warranty'])):?>
                    <a href="other/warranty.php" target="_blank">Click here to see information about our regulators and warranties on regulators</a>
                    <?php endif; ?>
                    <br><br>
                    Number: <span class="font-weight-bold"><?=$this->id;?></span>
                </div>
                <?php if(isset($this->opts) && isset($this->opts['ends'])):?>
                <div class="w-100"><hr></div>
                <div class="col">
                    Output type:<br><?=$this->opts['ends'][0];?>
                </div>
                <div class="col">
                    Input Type:<br><?=$this->opts['ends'][1];?>
                </div>
                <div class="w-100"><hr></div>
                <?php endif; ?>
                <div class="col flex-image">
                    <?php if(isset($this->opts) && isset($this->opts['spid'])):?>
                        <?=$this->opts['stype'];?><br>
                        <span class="red font-weight-bold">$<?=number_format($this->opts['pr1'],2,'.','');?></span><br>
                        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->opts['spid'];?>">
                            <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
                        </a>
                        <br>
                        <?=$this->id;?><br>
                    <?php endif; ?>
                    
                    <?php if(isset($this->list) && $this->list > $this->ours):?>
                        List Price: $<?=number_format($this->list,2,'.','');?><br>
                        <span class="font-weight-bold">Our Low Price:</span><br>
                    <?php endif; ?>

                    <span class="red font-weight-bold">
                        $<?=number_format($this->ours,2,'.','');?>
                    </span><br>
                    <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pid;?>">
                    <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
                </a>
                <?php if($this->stock==='sale'):?>
                <p class="red">
                    Priced to sell! <?=$this->opts['sale'];?>% off!
                </p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php
    }
}
