<?php
//child class that inherit from parent class (Item class)
require_once 'Item.php';

class StationeryItem extends Item{
   private $weight;
   
   public function __construct($code, $description, $price,$weight) {
       parent::__construct($code, $description, $price);
       $this->weight = $weight;
   }
   
   public function __set($name, $value) {
       if(property_exists($this, $name)){
           $this->$name = $value;
       }
       else{
          parent::__set($name, $value); 
       }     
   }
   
   public function __get($name){
       if(property_exists($this, $name)){
           return $this->$name;
       }
       else{
           return parent::__get($name);
       }
   }
   
   public function __toString() {
     return parent::__toString() . "Weight: $this->weight<br/>";
   }
   
   public function getOtherAttributes() {
       return $this->weight;
   }   
}