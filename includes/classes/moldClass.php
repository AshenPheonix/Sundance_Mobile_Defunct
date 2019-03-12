<?php
require_once CLASSROOT.'ItemClass.php';
class Mold extends Item
{
    public function __construct($id, $type, $desc, $pageInfo, $img, $list, $price, $pid, $stock,$opt=false, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, $pageInfo, $img, $list, $price, $stock, $sale, 'molds');
        $this->stock=$stock;
        $this->sale=$sale;
        $this->opt=$opt;
        $this->list=$list;
        $this->pageInfo=$pageInfo;
    }

    protected function Details()
    {
        $this->splitter();
        
        if(isset($this->pageOpts)):?>
            <p>
                <a href="specs/<?=$this->pageInfo['type'];?>.php?prod=<?=$this->id;?>">Click here for more details</a>
            </p>
        <?php endif;
                
    }
}
