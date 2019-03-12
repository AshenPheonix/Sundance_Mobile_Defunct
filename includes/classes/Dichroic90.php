<?php

    require_once CLASSROOT.'ItemClass.php';

    class Dichroic90 extends Item
    {
        public function __construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale,'dichroic');
        }

        public function Details()
        {

            ?>
            <p>
                <?php
                $this->splitter();
                ?>
            </p>
            <?php if(stripos($this->type,'strip')!==false):?>
                <dl class="text-left">
                    <dt>Base Glass:</dt>
                    <dd class="ml-4"><?=$this->pageOpts['base'];?></dd>
                    <dt>Coating Color:</dt>
                    <dd class="ml-4"><?=$this->pageOpts['coat'];?></dd>
                </dl>                
            <?php endif; 
        }
    }
    