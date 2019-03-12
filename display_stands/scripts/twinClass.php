<?php
class ImportAndExport
{
    public $img,$size,$impNum,$impPrice,$impPid,$domNum,$domPrice,$domPid,$options;
    
    public function __construct($img, $size,$impNum, $impPrice, $impPid,$domNum,$domPrice,$domPid,$options=NULL) {
        $this->img = $img;
        $this->size=$size;
        $this->impPrice=$impPrice;
        $this->impPid=$impPid;
        $this->domPrice=$domPrice;
        $this->domPid=$domPid;
        $this->options=$options;
        $this->impNum=$impNum;
        $this->domNum=$domNum;
    }

    public function convert($type)
    {
        ?>
        new Stand('<?=$this->domNum;?> & <?=$this->impNum?>', '<?=$type;?>', 'This <?=$this->size;?> Wire Stand works for round or diamond shaped projects depending on how it\'s bent', ['<?=$this->domPid;?>', '<?=$this->impPid;?>'], 'select', 
        <?php if(isset($this->options) && isset($this->options['images'])):?>
            ['secondary'=>[
            <?php foreach($this->options['images'] as $key => $value):?>
                <?php if(is_array($value)):?>
                    ['<?=$value[0];?>', '<?=$value[1];?>'],
                <?php else:?>
                    '<?=$value;?>',
                <?php endif; ?>
            <?php endforeach; ?>
            ]],
        <?php else:?>
            null,
        <?php endif; ?>
            null, null, '<?=$this->img;?>', null, [['Made in America', '<?=$this->domPrice;?>'], ['Import', '<?=$this->impPrice;?>']], [1,1]
        ),<br>
        <?php 
    }

    public function display()
    {
        ?>
            <div class="row beige border-left-0 border-right-0 border border-dark">
                <div class="col flex flex-image">
                    <img src="images/<?=$this->img;?>" alt="Wire Stand Torch" class="img-fluid mx-auto">
                </div>
                <div class="w-100 d-md-none"></div>                
                <div class="col text-center flex flex-image">
                    <strong><?=$this->size;?>"</strong> Wire Stand<br>
                    Works for Round projects or can be bent to accommodate a square diamond<br>
                    <?php if(isset($this->options) && isset($this->options['images'])):?>
                        <?php foreach($this->options['images'] as $key => $value):?>
                            <?php if(is_array($value)):?>
                                <img class="img-fluid mx-auto clickImg" src="images/<?=$value[0];?>" alt="Display Picture" data-bigImg="images/<?=$value[1];?>" data-title="Display Picture">
                            <?php else:?>
                                <img class="img-fluid mx-auto" src="images/<?=$value;?>" alt="Display Picture">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <div class="row">
                        <?php if(isset($this->impNum)):?>
                        <div class="col flex flex-text">
                            Imported<br>
                            #<?=$this->impNum;?><br>
                            <span class="red large">$<?=$this->impPrice;?></span><br>
                            <label for="quantity" class="d-inline-block">Qty:
                                <input type='number' min='0' step='1' value='1' name="quantity" class="d-inline-block" /><br />
                            </label>
                            <button type="button" class="btn btn-link btn-lg btn-block prevButton" value="<?=$this->impPid;?>">
                                <img src="/mobile/images/cart_button_1.png" alt="Click here to Purchace">
                            </button>
                        </div>
                        <hr>
                        <?php endif; ?>
                        <?php if(isset($this->domNum)):?>
                            <div class="col flex flex-text">
                                Made in the USA<br>
                                #<?=$this->domNum;?><br>
                                <span class="red large">$<?=$this->domPrice;?></span><br>
                                <label for="quantity" class="d-inline-block">Qty:
                                    <input type='number' min='0' step='1' value='1' name="quantity" class="d-inline-block" /><br />
                                </label>
                                <button type="button" class="btn btn-link btn-lg btn-block prevButton" value="<?=$this->domPid;?>">
                                    <img src="/mobile/images/cart_button_1.png" alt="Click here to Purchace">
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
    }
}
