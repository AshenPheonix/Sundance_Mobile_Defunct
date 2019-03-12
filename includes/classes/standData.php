<?php
class standData
{
    public $number,$type,$price,$dimensions,$pid;

    public function __construct($number,$type,$price,$dimensions,$pid) {
        $this->number = $number;
        $this->type=$type;
        $this->price=$price;
        $this->dimensions=$dimensions;
        $this->pid=$pid;
    }
}
