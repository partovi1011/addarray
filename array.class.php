<?php

class friday{
    public $array;
    public function create($a){
        $this->array = new SplFixedArray($a);
    }
    public function addArray($a,$b){
        $this->array[$a]=$b;
    }
    public function getOneArray($a){
        if($a>=20){
            echo "-1";
        }else{
            echo $this->array[$a];
        }
        
    }
}
?>