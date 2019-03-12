<?php

class Kiln
{
    public $model,$name,$type,$image,$options,$list,$ours,$specsLoc,$stock, $pageData;

    public function __construct($model,$name,$type,$image,$options,$list,$ours,$specsLoc, $pageData=[],$stock=true) {
        $this->model = $model;
        $this->name=$name;
        $this->image=$image;
        $this->options=$options;
        $this->list=$list;
        $this->ours=$ours;
        $this->specsLoc=$specsLoc;
        $this->stock=$stock;
        $this->type=$type;
        $this->pageData=$pageData;
    }

    public function display($which)
    {
        ?>
        <?php if(strpos($this->type,$which)!==false):?>
            <div class="row beige border border-dark border-right-0 border-left-0">
                <div class="col white">
                    <?php if(isset($this->options) && isset($this->options['secondPic'])):?>
                    <img src="images/<?=$this->image;?>" alt="<?=$this->name?> kiln" class="img-fluid clickImg" data-bigImg="images/<?=$this->options['secondPic']?>" data-title="<?=$this->name;?> kiln">
                    <?php else: ?>
                        <img src="images/<?=$this->image;?>" alt="<?=$this->name?> kiln" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="w-100"></div>
                <div class="col flex-image">
                    <span class="font-weight-bold"><?=$this->model;?></span><br>
                    <?=$this->name;?>
                </div>
                <div class="col flex-image">
                <?php if($this->type=='crucible'):?>
                    <?=$this->options['holes'];?> Lid Hole(s)
                <?php else: ?>
                    Floor Size:<br> <?=$this->options['floor'];?><br>
                    <?php if(strpos($this->type,'fusing')!==false):?>
                        Inside Height:<br> <?=$this->options['height'];?><br>
                    <?php endif; 
                    if(strpos($this->type,'annealing')!==false && isset($this->options['door'])): ?>
                        Door Opening Size:<br> <?=$this->options['door'];?><br>
                    <?php endif; ?>
                <?php endif; ?>
                </div>
                <div class="col flex-image py-1">
                    <?php if(isset($this->list)):?>
                        List Price:<br>$<?=$this->list;?><br>
                        <hr>
                    <?php endif; ?>
                    Our Low Price:<br><span class="red font-weight-bold">$<?=$this->ours;?></span><br><br>
                    <a href="products/<?=$this->specsLoc;?>">Click here for details and ordering</a>
                </div>
            </div>
        <?php endif; ?>
        <?php 
    }

    public function purch()
    {
        ?>
            <div class="row beige border border-dark border-right-0 border-left-0 py-2">
        <?php if(isset($this->pageData['multi']) && $this->pageData['multi']==true):?>
            <?php if(isset($this->pageData['imgs'])):?>
                <div class="col-6 flex-image">
                    <img src="../images/<?=$this->pageData['imgs'][0];?>" alt="<?=$this->model;?> Kiln" class="img-fluid" id="kilnPic">
                </div>
            <?php endif; ?>
                <div class="col flex-image">
                    <dl>
                        <?php foreach ($this->pageData['products'] as $key => $value):?>
                            <dt class="text-left">
                                <strong><?=$value[0];?></strong>
                            </dt>
                            <dd class="text-right">
                                <strong class="red">$<?=$value[1]?></strong>
                            </dd>
                        <?php endforeach;?>
                    </dl>
                    <br>
                    <p class="font-weight-bold bg-alert">
                        Currently Selected Costs: <span id="price" class="red">$<?=$this->pageData['products'][0][1];?></span>
                    </p>
                    <select class="<?=(isset($this->pageData['products'])) ? 'swapper' : '' ;?> form-control" data-img="#kilnPic" data-price="#price">
                        <?php 
                            foreach($this->pageData['products'] as $key => $value):
                            if (stripos($value[0],',')!==false) {

                                $value[0]=explode(',',$value[0])[0];
                            }
                        ?>
                            <option value="<?=$value[2];?>" data-src="../images/<?=$this->pageData['imgs'][$key];?>" data-price="<?=$value[1]?>"><?=$value[0];?>: $<?=$value[1]?></option>
                        <?php endforeach; ?>
                    </select>
                    <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now!" class="img-fluid"></button>
                </div>
        <?php else:?>
            <?php if(isset($this->pageData['imgs'])):?>
                <div class="col-12"><img src="../images/<?=$this->pageData['imgs'];?>" alt="<?=$this->model;?>" class="img-fluid"></div>
            <?php endif; ?>
                <div class="col py-2 flex-image">
                        <strong class="h5"><?=$this->model;?></strong>
                        <?php if(isset($this->name)):?>
                            <br>
                            <p>
                                <?=$this->name;?>
                            </p>
                        <?php endif; ?>
                </div>
                <div class="col flex-image py-2">
                    <?php if(isset($this->list) && $this->list>$this->ours):?>
                        <p>
                            <strong>List Price: $<?=$this->list;?></strong>
                        </p>  
                    <?php endif; ?>
                    <?php if($this->stock===true):?>
                    <p>
                        <strong>Our Low Price: <span class="red">$<?=$this->ours;?></span></strong>
                    </p>
                        <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=<?=$this->pageData['pid'];?>"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid"></a>
                    <?php elseif(($this->stock===false || $this->stock===0) && isset($this->pageData['alt'])):?>
                        <strong class="red">This Kiln has been discontinued by the Manufacturer</strong><br>
                        <a href="<?=$this->pageData['alt'];?>">
                            However, an upgraded model can be found by clicking here
                        </a>
                    <?php else:?>
                        <strong class="red">This model has been discontinued by the manufacturer</strong><br>
                        However, we have many amazing kilns for sale.
                    <?php endif; ?>
                </div>
        <?php endif;?>
            </div>
        <?php 
    }
}
