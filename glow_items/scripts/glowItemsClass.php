<?php
class GlowItem33
{
    public $preImage,$postImage,$preColor,$postColor,$price,$pids,$stock,$number;

    public function __construct($number,$preColor,$postColor,$preImage,$postImage,$price,$pids,$stock) {
        $this->number=$number;
        $this->preColor=$preColor;
        $this->postColor=$postColor;
        $this->preImage=$preImage;
        $this->postImage=$postImage;
        $this->price=$price;
        $this->pids=$pids;
        $this->stock=$stock;
    }

    public function display($style)
    {
        ?>
        
        <div class="row beige border border-dark border-right-0 border-left-0">
            <div class="col white">
                <img src="images/<?=$this->preimage;?>" alt="<?=$this->preColor;?> - In natural light" class="img-fluid">
            </div>
            <div class="col white">
                <img src="images/<?=$this->postImage;?>" alt="<?=$this->postColor;?> - In the dark" class="img-fluid">
            </div>
            <div class="w-100"></div>
            <div class="col">
                <?=$this->preColor;?> - <?=$this->postColor;?>
            </div>
            <div class="col">
                <?php 
                    //dunno yet
                ?>
            </div>
            <div class="col">
                <?php
                    //dunno yet
                ?>
            </div>
        </div>

        <?php
    }
}
