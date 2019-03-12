<?php
require_once CLASSROOT.'ItemClass.php';

    class DVD extends Item 
    {
        public $stock,$sale, $opt, $list, $pageOpt, $author;
        public function __construct($id, $type, $desc, $author, $img, $list, $price, $pageOpt, $pid, $opt=false, $stock=true, $sale=null) {
            parent::__construct($id, $type, $desc, $pid, $opt, $pageOpt, $img, $list, $price, $stock, $sale, 'dvds');
            $this->stock=$stock;
            $this->sale=$sale;
            $this->opt=$opt;
            $this->list=$list;
            $this->pageOpt=$pageOpt;
            $this->author=$author;
        }

        protected function Details()
        {
            if(strstr($this->desc,'}')!==FALSE):
                $data='';
                $data=explode('}',$this->desc);
            ?>
                <span class="font-weight-bold"><?=$data[0];?></span><br>
                <em>By <?=$this->author;?></em><br>
                <?=substr($this->desc,strlen($data[0])+1)?>
            <?php
                else:
            ?>
                <?=$this->desc;?>
            <?php
                endif;
            ?>
            <?php if(isset($this->pageOpt) && isset($this->pageOpt['info']) && stripos($_SERVER['PHP_SELF'], 'products')===false):?>
                <div class="demo">
                    <a href="/mobile/dvds/products/<?=$this->pageOpt['info'];?>.php">More Details here</a>
                </div>
            <?php endif; ?>
            <?php
        }
    }
    