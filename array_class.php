<?php

class array_class{

    // private $indez ;
    // private $valua ;
    private $arr1 ;
    public function __construct(){
        $this->arr1 = new SplFixedArray(20);
    }
    public function push_num($ind,$val){
        try{
        $this->arr1[$ind] = $val; 
        return $this->arr1;
    }
        catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function pull_array(){
        print_r($this->arr1);
    }
    public function get_val($ind){

        try{
            return $this->arr1[$ind];
        }
            catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }        
    }
}