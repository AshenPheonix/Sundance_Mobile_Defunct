<?php
    require_once CLASSROOT.'ItemClass.php';

class PotGlass extends Item 
{
    public function __construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $price, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, null, $price, $stock, $sale, 'glass/bullseye/potMelt');
    }

    protected function Details()
    {
        if (isset($this->pageOpts) && isset($this->pageOpts['size'])):?>
            <p>
                <?=$this->pageOpts['size'];?> Pieces of Glass<br>
                <?=$this->pageOpts['color'];?><br>
                COE90 Compatible Bullseye Glass<br>
                <?php if(isset($this->pageOpts['most'])):?>
                    Mostly #<?=$this->pageOpts['most'];?>
                <?php endif; ?>
            </p>
            <p>
                1 lb is equivilant to a 10" x 10" piece of standard 3mm sheet glass
            </p>
        <?php elseif(isset($this->desc)):?>
            <p>
                <?=$this->desc;?>
            </p>
        <?php
            endif;
    }
}
