<?php
    require_once CLASSROOT.'ItemClass.php';
    class FootPedal extends Item
    {
        public function __construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale,'torches');
        }
        protected function Details()
        {
            ?>
                <p>
                    <?php $this->splitter();?>
                </p>
            <?php
                if(isset($this->pageOpts) && isset($this->pageOpts['dset'])):?>
                    <ul class="text-left font-weight-bold pl-1">
                        <?php foreach ($this->pageOpts['dset'] as $key => $value):?>
                            <li class="disc">
                                <?=$value;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;
                if(isset($this->pageOpts) && isset($this->pageOpts['america'])):?>
                    <strong class="red">Made in the USA</strong>
                <?php endif; 
        }
    }
    