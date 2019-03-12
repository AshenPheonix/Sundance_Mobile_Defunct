<?php
class stringer
{
    public $order,$color,$image,$pids,$out,$list,$price;
    public function __construct($order,$color,$image,$pids,$out=null,$list='$29.60',$price='$19.00') {
        $this->order = $order;
        $this->color=$color;
        $this->image=$image;
        $this->pids=$pids;
        $this->out=$out;
        $this->price=$price;
        $this->list=$list;
    }

    public function display()
    {
        ?>
    <div class="row beige justify-content-center border border-dark border-right-0 border-left-0">
        <div class="col white flex-image">
            <img src="images/<?=$this->image;?>" alt="<?=$this->color;?>" class="img-fluid mx-auto">
        </div>
        <div class="w-100 d-md-none"></div>
        <div class="col flex-text">
            <?=$this->order;?><br>
                <?=$this->color;?>
        </div>
        <div class="col flex-text">
            List Price:
            <?=$this->list;?><br>
                <span class="red">Our Low Price: <?=$this->price;?></span>
        </div>
        <div class="col flex-image">
            <select>
                    <option value="0">Select A Size</option>
                    <?php foreach($this->pids as $key=>$value):
                        if(isset($this->out)==false || isset($this->out[$key])==false):?>
                            <option value="<?=$value?>"><?php 
                                switch($key):
                                    case 0:
                                        echo '.5mm -- ';
                                        break;
                                    case 1:
                                        echo '1 mm -- ';
                                        break;
                                    case 2:
                                        echo '2 mm -- ';
                                        break;
                                endswitch;
                                ?><?=$this->price;?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
            <button class="btn btn-link buy"><img src="/mobile/images/cart_button_1.png" alt="Buy Now" class="img-fluid buy"></button>
        </div>
    </div>

    <?php
    }
}