<?php
class stand{
    public $image,$bigImg, $number, $desc, $width, $price, $pid, $sub;

    function __construct($i,$bI, $n, $d, $w, $pr, $pi, $s=NULL){
        $this->image=$i;
        $this->number=$n;
        $this->desc=$d;
        $this->width=$w;
        $this->price=$pr;
        $this->pid=$pi;
        $this->bigImg=$bI;
        $this->sub=$s;
    }
    public function convert($type)
    {
        ?>
            new Stand( '<?=$this->number;?>', '<?=$type;?>', '<?=$this->desc;?>', '<?=$this->pid;?>', false, ['clickImg'=>'<?=$this->bigImg;?>', 
            <?php if(isset($this->sub) && isset($this->sub['images'])):?>
                'secondary'=>[
                <?php foreach($this->sub['images'] as $key => $value):?>
                    <?php if(is_array($value)):?>
                        ['<?=$value[0];?>', '<?=$value[1];?>'],
                    <?php else:?>
                        '<?=$value;?>',
                    <?php endif; ?>
                <?php endforeach; ?>
                ],
            <?php endif; ?>
            <?php if(isset($this->sub) && isset($this->sub['info'])):?>
                'info'=>'<?=$this->sub['info'];?>',
            <?php endif; ?>
            <?php if(isset($this->sub) && isset($this->sub['link'])):?>
                'specification'=>true,
            <?php endif; ?>
            ], '<?=$this->width;?>', null, '<?=$this->image;?>', null, '<?=$this->price;?>', 1),<br>
        <?php
    }
};