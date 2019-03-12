<?php
abstract class Item
{
    public $id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale, $path;
    public function __construct($id, $type, $desc, $pid, $opt, $pageOpts, $img, $list, $price,  $stock, $sale, $path, $max=200) {
        $this->id = $id;
        $this->type=$type;
        $this->desc=$desc;
        $this->pid=$pid;
        $this->opt=$opt;
        $this->pageOpts=$pageOpts;
        $this->img=$img;
        $this->list=$list;
        $this->price=$price;
        $this->stock=$stock;
        $this->sale=$sale;
        if ($stock===null && is_array($this->price)) {
            foreach ($this->price as $key => $value) {
                $this->stock[]=1;
            }
        } elseif ($stock === null) {
            $this->stock=1;
        } else {
            $this->stock=$stock;
        }
        $this->path=$path;
        if (stripos($this->path,'images')===false) {
            $this->path.='/images/';
        }else {
            $this->path.='/';
        }
        $this->max=$max;
    }

    abstract protected function Details();

    protected function splitter()
    {
        if(isset($this->desc) && strstr($this->desc,'}')!==FALSE):
            $data='';
            $data=explode('}',$this->desc);
        ?>
            <span class="font-weight-bold"><?=$data[0];?></span><br><br>
            <?=substr($this->desc,strlen($data[0])+1)?>
        <?php
            else:
        ?>
            <?=$this->desc;?>
        <?php
            endif;
        ?>
        <?php if(isset($this->pageOpt) && isset($this->pageOpt['info'])):?>
            <div class="demo">
                <a href="/mobile/dvds/products/<?=$this->pageOpt['info'];?>.php">More Details here</a>
            </div>
        <?php endif;
    }

    public function display($des, $disp=true)
        {
            if( $this->checkKilled()==false && ($this->type==$des || stripos($this->type, $des)!==false || $this->id==$des)):?>
                <div class="row beige border border-dark border-right-0 border-left-0 py-2" id="<?=$this->id;?>">
                    <?php if($this->img!==NULL):?>
                        <div class="col white">
                            <img src="/mobile/<?=$this->path;?><?=$this->img;?>" alt="<?=preg_replace('(\<[b|h]r\>)',' ',$this->desc);?>" class="img-fluid <?=(isset($this->pageOpts['clickImg']))? "clickImg":""?>" style="max-height:<?=$this->max;?>px;"<?php if(isset($this->pageOpts['clickImg'])):?>
                                data-bigImg="/mobile/<?=$this->path?><?=$this->pageOpts['clickImg'];?>" data-title="Zoom In"
                            <?php endif; ?>>
                        </div>
                    <?php endif; 
                    if(isset($this->pageOpts) && isset($this->pageOpts['secondaryImg'])):?>
                        <div class="col white">
                            <img src="/mobile/<?=$this->path;?><?=is_array($this->pageOpts['secondaryImg']) ? $this->pageOpts['secondaryImg'][0] : $this->pageOpts['secondaryImg'];?>" alt="<?=preg_replace('(\<[b|h]r\>)',' ',$this->desc);?>" class="img-fluid <?=(is_array($this->pageOpts['secondaryImg'])) ? 'clickImg' : '' ;?>" <?php if(is_array($this->pageOpts['secondaryImg'])):?>
                                data-bigImg="/mobile/<?=$this->path;?><?=$this->pageOpts['secondaryImg'][1];?>" data-title="Zoom In"
                            <?php endif;?>>

                        </div>
                    <?php endif; 
                    if(isset($this->sale)):?>
                        <img src="/mobile/images/sale.png" alt="Sale Pricing!" class="img-fluid" style="position:absolute;left:9em;">
                    <?php endif; ?>
                    <div class="w-100"></div>
                    <div class="col"><strong>Item #<?=$this->id;?></strong></div>
                    <div class="w-100"></div>
                    <div class="col flex-image pb-2">
                            <?=$this->Details();?>
                    </div>
                    <div class="col flex-text py-2">
                        <?php if(is_array($this->price)):?>
                        <p>
                            <?php foreach($this->price as $key => $value):?>
                                <?php if($this->opt =='select' && $this->stock[$key]==0):?>
                                    <?=$value[0];?> Currently out of stock<br>
                                <?php elseif($this->opt =='select' && $this->stock[$key]<0 ):?>
                                    
                                <?php elseif($this->opt=='qty' || $this->opt=='twin'):?>
                                    Buy <?=$value[0];?> and pay <span class="red font-weight-bold">$<?=$value[1];?></span><br>
                                <?php else:?>
                                    <?=$value[0];?> : <span class="red font-weight-bold">$<?=$value[1];?></span><br>
                                <?php endif; ?>
                            <?php endforeach; ?>                        
                        </p>
                        <?php else:?>
                            <?php if(isset($this->list)):?>
                                <p class="font-weight-bold">
                                    List Price: <?=$this->list;?>
                                </p>
                            <?php endif; ?>

                            <?php if(isset($this->sale)==FALSE):?>
                                <p class="red font-weight-bold">
                                    Our Price: $<?=$this->price;?>
                                </p>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(isset($this->sale) && $this->opt=='select'):?>
                            <?php foreach($this->sale as $key => $value):?>
                                <strong>
                                    <?=$this->price[$key][0];?>Sale Price: <span class="red"?>$<?=$value;?></span>
                                </strong>
                            <?php endforeach; ?>
                        <?php
                            elseif(isset($this->sale)):?>
                                <p class="red font-weight-bold">
                                    Sale Price: $<?=$this->sale;?>
                                </p>
                            <?php endif; ?>
                        
                        <?php 
                            if ($disp=true) {
                                $this->flip(); 
                            }
                        ?>
                    </div>
                </div>
            <?php
                endif;
        }

    private function flip(){
        if($this->stock>0 && ($this->opt=='qty' || $this->opt=='multi')):?>
            <label for="<?=$this->pid;?>">Qty: <input type="number" id="<?=$this->pid;?>" name="<?=$this->pid;?>" min="<?=(isset($this->pageOpts['min'])) ? $this->pageOpts['min'] : 0 ;?>" step="1" class="form-control" value="1"></label><br>
            <button class="btn btn-link qtyBuy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
        <?php elseif ($this->stock>0 && $this->opt=='select'):?>
            <select class="form-control">
                <option value="0" selected>Select an option</option>
                <?php foreach($this->price as $key => $value):?>
                    <?php if(isset($this->stock[$key]) && $this->stock[$key]>0):?>
                        <option value="<?=$this->pid[$key];?>"><?=$value[0];?> : $<?=$value[1];?></option>
                    <?php elseif(isset($this->stock[$key]) && $this->stock[$key]==0):?>
                        <option value="0"><?=$value[0]?> Temporarily Out of Stock</option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></button>
        <?php elseif($this->stock>0 && $this->opt=='twin'):?>
            <select class="form-control">
                <option value="0" selected>Select an option</option>
                <?php foreach($this->price as $key => $value):?>
                    <?php if(isset($this->stock[$key]) && $this->stock[$key]>0 && isset($value[2])):?>
                        <option value="<?=$this->pid[$key];?>"><?=$value[2];?></option>
                    <?php elseif(isset($value[2])):?>
                        <option value="0"><?=$value[2]?> Temporarily Out of Stock</option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select><br>
            <label for="<?=$this->pid;?>">Qty: <input type="number" name="<?=$this->pid;?>Label" min="0" step="1" class="form-control" value="0"></label><br>
            <button class="btn btn-link multiBuy"><img src="/mobile/images/cart_button_1.png" alt="Add to Cart" class="img-fluid"></button>
        <?php elseif($this->stock>0 && $this->opt=='b'):?>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&amp;bid=<?=$this->pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
            </a>
        <?php elseif($this->stock>0 && $this->opt=='swap'):?>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&amp;<?=$this->pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
            </a>
        <?php elseif($this->stock>0):?>
            <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&amp;pid=<?=$this->pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid">
            </a>
        <?php elseif ($this->stock===0):?>
            <span class="red font-weight-bold">Temporarily Out Of Stock</span>
        <?php endif;
    }

    public function purch()
    {
        ?>
        <div class="row beige border border-dark border-right-0 border-left-0">
            <div class="col-12">
                <strong>Product #<?=$this->id;?></strong>
            </div>
            <div class="col flex-text py-2">
                <?php $this->Details();?>
            </div>
            <div class="col flex-image py-2">
                <?php if(isset($this->list) && $this->list>$this->price):?>
                    <p>
                        List price: $<?=$this->list;?>
                    </p>
                <?php endif; ?>
                <p>
                    <strong>
                        Our Low Price: 
                            <?php if(isset($this->sale)==false):?>
                                <span class="red">
                            <?php endif; ?> 
                                    $<?=$this->price;?>
                            <?php if(isset($this->sale)==false):?>
                                </span>
                            <?php endif; ?>
                    </strong>
                </p>
                <?php if(isset($this->sale) && $this->opt=='select'):?>
                    <?php foreach($this->sale as $key => $value):?>
                        <strong>
                            <?=$this->price[$key][0];?>Sale Price: <span class="red"?>$<?=$value;?></span>
                        </strong>
                    <?php endforeach; ?>
                <?php elseif(isset($this->sale)):?>
                    <p>
                        <strong>Sale Price: <span class="red">$<?=$this->sale;?></span></strong>
                    </p>
                <?php endif; ?>
                <?php 
                    $this->flip()
                ?>
            </div>
        </div>
        <?php
    }

    public function jsonOut()
    {
        return json_encode(['id'=>$this->id, 'type'=>$this->type, 'price'=>$this->price, 'desc'=>$this->desc]);
    }

    public function checkKilled()
    {
        if(is_array($this->stock)==false && $this->stock>=0){
            return false;
        }elseif(is_array($this->stock)==false){
            return true;
        }else{
            foreach ($this->stock as $key => $value) {
                if($value>=0){
                    return false;
                }
            }
            return true;
        }
    }
}
