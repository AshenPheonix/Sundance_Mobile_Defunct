<?php
    require_once CLASSROOT.'ItemClass.php';

    class Stand extends Item
    {
        public $standWidth, $standRange;
        public function __construct($id, $type, $desc, $pid, $opt, $pageOpts, $standWidth, $standRange, $img, $list, $price,  $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale,'display_stands');
            $this->standWidth=$standWidth;
            $this->standRange=$standRange;
        }

        protected function Details()
        {
            ?>

                <p>
                    <?=$this->splitter();?>
                </p>
                <?php if(isset($this->pageOpts) && isset($this->pageOpts['info'])):?>
                    <p>
                        <?=$this->pageOpts['info'];?>
                    </p>
                <?php endif; ?>
                <p>
                    <?php if(isset($this->standWidth)):?>
                        Stand Width: <strong><?=$this->standWidth;?></strong><br>
                    <?php endif; ?>
                    <?php if(isset($this->standRange)):?>
                        Projects Held: <strong><?=$this->standRange;?></strong><br>
                    <?php endif; ?>
                </p>
                <?php if(isset($this->pageOpts) && isset($this->pageOpts['secondary'])):?>
                    <div class="row">
                    <?php 
                    foreach($this->pageOpts['secondary'] as $key => $value):?>
                        <div class="col">
                        <img src="/mobile/<?=$this->path?><?=(is_array($value)) ? $value[0] : $value ;?>" alt="<?=preg_replace('(\<[b|h]r\>)',' ',$this->desc);?>" class="img-fluid <?=(is_array($value))? "clickImg":""?>" style="max-height:200px;min-width:75px;"<?php if(is_array($value)):?>
                                data-bigImg="/mobile/<?=$this->path?><?=$value[1];?>" data-title="Zoom In"
                            <?php endif; ?>><br>
                        </div>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($this->pageOpts) && isset($this->pageOpts['specification'])):?>
                    <a href="specifications.php?numb=<?=$this->id;?>">Click here for more information</a><br>
                <?php endif; ?>
                <?php if($this->id=='Crosshatch Stands'):?>
                    <a href="crosshatch.php">Tap Here</a> to see more pictures and specifications, and see volume pricing.<br>
                <?php endif; ?>
                <?php if(isset($this->pageOpts)==false ||  isset($this->pageOpts['USA'])==false):?>
                    <strong class="red">Made in the USA</strong>
                <?php endif; ?>
            <?php
        }
    }
    