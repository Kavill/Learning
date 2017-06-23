<?php

    abstract class product{
        
        protected $productName;
        protected $productID;
        protected $productPrice;
        protected $productAvailable;
        protected $productShipMethod;
        
        public function __construct($in_productName, $in_productID, $in_productPrice, $in_productAvailable, $in_shipMethod){
            
            $this->productName = $in_productName;
            $this->productID = $in_productID;
            $this->productPrice = $in_productPrice;
            $this->productAvailable = $in_productAvailable;
            $this->productShipMethod = $in_shipMethod;
            
        }
        
        abstract public function getAvailableProductNumber();
        abstract public function getShipMethod();
        
        public function getProductName(){
            return $this->productName;
        }
        
        public function getProductID(){
            return $this->productID;
        }
        
        public function getProductPrice(){
            return $this->productPrice;
        }
        
        public function getProductInStock(){
            return $this->productAvailable;
        }
        
        public function getShipmentMethod(){
            return $this->productShipMethod;
        }
        
    }

class localProduct extends product{
    
    public function getAvailableProductNumber(){
        return "W magazynie pozostało jedynie ".parent::$productAvailable;
    }
    
    public function getShipMethod() {
        return "Sposób dostarczenia produktu: ".parent::$productShipMethod;
    }
    
    public function reserveProductNumber($num){
        $this->productAvailable -=$num;
    }
    
}

$obiekt = new localProduct("Szynka wiejska", "#99821", 321.65, 100, "Przesyłka pocztowa");
echo "Liczba produktów przed rezerwacją: ".$obiekt->getProductInStock()."<br/>";
$obiekt->reserveProductNumber(63);
echo "Liczba produktów po rezerwacji: ".$obiekt->getProductInStock();

?>