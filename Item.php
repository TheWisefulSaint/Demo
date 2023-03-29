<?php

abstract class Item {//parent class
    private $code;
    private $description;
    private $price;
    
    public function __construct($code,$description,$price){
        $this ->code = $code;
        $this ->description= $description;
        $this->price=$price;
    }
    
    public function __set($name, $value){
        $this->$name =$value; 
    }
    
    public function __get($name){
        return $this->$name;
    }
    
    public function __toString() {
        return "Item code: $this->code<br/>"
               ."Description: $this->description<br/>"
               ."Price:" . number_format($this->price,2)."<br/>";             
    } 
    
    public abstract function getOtherAttributes();
}