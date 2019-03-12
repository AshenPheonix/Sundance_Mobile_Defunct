<?php 
    require_once CLASSROOT.'ItemClass.php';

    class Crucible extends Item
    {
        private $diam, $tall, $vol;
        public function __construct($id, $type, $diam, $tall, $vol, $pid, $img, $price, $stock, $sale=null) {
            parent::__construct($id, $type, null, $pid, false, null, $img, null, $price, $stock, $sale, 'glass/bullseye/potMelt');
            $this->diam=$diam;
            $this->tall=$tall;
            $this->vol=$vol;
        }

        protected function Details()
        {
            ?>
                <?php if($this->type=='crucible'):?>
                    <strong>Crucible</strong>
                <?php else:?>
                    <strong>Crucible Catch Dish</strong>
                <?php endif; ?>

                <ul class="mt-4 text-left">
                    <li>
                        <?php if($this->type=='cruicible'):?>
                            Top
                        <?php endif; ?>
                        Diameter : <?=$this->diam;?>
                    </li>
                    <?php if($this->type=='crucible'):?>
                        <li>
                            Height <?=$this->tall;?>"
                        </li>
                        <?php if(isset($this->vol)):?>
                            <li>
                                Holds <?=$this->vol[0];?> of glass<br>
                                (<?=$this->vol[1];?> Liquid) 
                            </li>                        
                        <?php endif; ?>

                    <?php endif; ?>
                </ul>

            <?php
        }
    }
    