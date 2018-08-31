<?php

class array_class{

    // private $indez ;
    // private $valua ;
    private $arr1 ;
    public function __construct(){
        $arr1 = new SplFixedArray(19);
    }
    public function push_num($ind,$val){
        $this->arr1[$ind] = $val; 
        return $this->arr1;
    }
    public function pull_array(){
        print_r($this->arr1);
    }
    public function
}