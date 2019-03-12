<?php
require_once CLASSROOT.'ItemClass.php';
class DropStand extends Item
{
    public $height,$outerDiameter,$options;
    public function __construct($image,$number,$height,$outerDiameter,$prices,$pid, $options, $stock, $sale=null) {
        $prices=[[1,$prices[0]],[2,$prices[1]],[3,$prices[2]],[4,$prices[3]]];
        parent::__construct($number, 'drop', null, $pid, 'qty', $options, $image, null, $prices, $stock, $sale, 'display_stands');
        $this->height=$height;
        $this->outerDiameter=$outerDiameter;
        }

    protected function Details()
    {
        ?>
            <?=$this->height;?>" Tall with <?=$this->outerDiameter;?>" Outer Diameter</p><br>
            <?php
                if(isset($this->pageOpts) && isset($this->pageOpts['images'])):
                    foreach($this->pageOpts['images'] as $value):
                        if(is_array($value)):?>
                            <img src="/mobile/<?=$this->path.$value[0];?>" alt="Display Image" class="clickImg img-fluid" data-bigImg="/mobile/<?=$this->path.$value[1];?>" data-title="Stand with project">
                        <?php else:?>
                            <img src="/mobile/<?=$this->path.$value;?>" alt="Display Image" class="img-fluid">
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php 
                endif; 
                if(isset($this->pageOpts) && isset($this->pageOpts['info'])):?>
                    <p><?=$this->pageOpts['info'];?></p>
                <?php endif; ?>
        <?php
    }
}