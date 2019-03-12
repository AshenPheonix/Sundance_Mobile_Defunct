<?php
    require_once CLASSROOT.'ItemClass.php';

    class Controller extends Item {
        public function __construct($id,$type,$desc,$pid,$opt,$pageOpts,$img,$list,$price,$stock,$sale=null) {
            parent::__construct($id,$type,$desc,$pid,$opt,$pageOpts,$img,$list,$price,$stock,$sale,'kilns');
        }
        protected function Details(){
            ?>
                <?=$this->splitter();?>
            <?php
        }
    }
    