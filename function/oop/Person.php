<?php
class Person{
    var ?string $name;
    var ?string $address = null; //nullable atau tidak
    var string   $country = "Indonesia";

    function sayHello(?string $name){
        
        if(is_null($name)){
            echo "Hy, My Name is $this->name";
        }else{
            echo "Hy, $name, my name is $this->name";
        }
    }
}