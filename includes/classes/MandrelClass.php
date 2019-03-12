<?php
require_once CLASSROOT.'ItemClass.php';

class Mandrel extends Item
{
    public $bulk;
    public function __construct($id, $type, $desc, $bulk, $img, $price, $pid,  $opt, $stock, $sale=null) {
        parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price, $stock, $sale, 'supplies/lampworking');
        $this->bulk=$bulk;
    }

    protected function Details()
    {
       ?>
            <p>
                <?=$this->splitter();?>
            </p>
            <?php if(isset($this->bulk)):?>
                <p>
                    Approximately <?=$this->bulk;?> per bulk order.
                </p>
            <?php endif; ?>
            <?php if(stripos($this->type,'pop')!==false):
                $data='';
                $data=explode('}',$this->desc);
                $data[0]=str_replace(' Coat', '', $data[0]);
            ?>
                <p>
                    <a class="infoPopper" data-text="/mobile/supplies/lampworking/pages/<?=strtolower($data[0]);?>.php" data-title="<?=$data[0];?>">Click Here</a> for more information.
                </p>
            <?php endif; ?>
        <?php
    }
}
