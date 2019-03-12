<?php
class WallStand
{
    public $images,$title,$description, $number,$price,$pid,$volume;
    public function __construct($images,$title,$description,$number,$price,$pid,$volume=NULL) {
        $this->images = $images;
        $this->title=$title;
        $this->description=$description;
        $this->number=$number;
        $this->price=$price;
        $this->pid=$pid;
        $this->volume=$volume;
    }
    
    public function display()
    {
        ?>
            <div class="row">
                <div class="col-6 flex flex-image">
                    <?php foreach($this->images as $key => $value):
                        if(is_array($value)==false):?>
                            <img src="images/<?=$value;?>" alt="Display Piece" class="img-fluid mx-auto">
                        <?php else:?>
                            <img src="images/<?=$value[0];?>" alt="DisplayPiece" class="img-flud mx-auto" data-bigImg="<?=$value[1];?>" data-title="Display Piece">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-6 flex flex-text">
                    <strong><?=$this->title;?></strong>
                </div>
                <div class="w-100"></div>
                <div class="col-12">
                    <p class="text-center">
                        <?=$this->description;?>
                    </p>
                </div>
                
            </div>
        <?php
    }
}
