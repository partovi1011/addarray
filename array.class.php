<?php

class friday{
    $array = new SplFixedArray(19);
    public function addArray($a,$b){
        $array[$a]=$b;
    }
    public function getOneArray($a){
        print_r($array[$a]);
    }
}
?>