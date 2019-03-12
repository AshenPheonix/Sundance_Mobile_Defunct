<?php
    require_once 'ItemClass.php';
    class KilnShelf extends Item
    {
        public $shape, $size, $thickness;
        public function __construct($id, $type, $desc, $img, $shape, $size, $thickness, $price, $pid, $opt=false, $stock=1, $sale=null) {
            if(isset($desc)==null){
                    $temp="Shape: {$shape}<br>";
                if($type=='shelf')
                    $temp.="Size: {$size}<br>";
                if(isset($thickness))
                    $temp.="Approximate Thickness: {$thickness}<br>";
                if($type=='post')
                    $temp.="Length: {$size}<br>";
                $desc=$temp;
            }
            parent::__construct($id, $type, $desc, $pid, $opt, null, $img, null, $price,  $stock, $sale,'kilns');
            $this->shape=$shape;
            $this->size=$size;
            $this->thickness=$thickness;
        }

        protected function Details()
        {
            ?>
                <?php if($this->id=='KS7'):?>
                    <p>
                        <img src="images/shelving/kiln-shelf-7-1sm.jpg" alt="Their Shelf vs Our Shelf" class="img-fluid"><br>
                        <a href="products/KS7.php">See More About This Shelf</a>
                    </p>
                <?php elseif(isset($this->desc)):?>
                    <p>
                        <?=$this->desc;?>
                    </p>
                <?php endif; ?>
            <?php
        }
    }
    