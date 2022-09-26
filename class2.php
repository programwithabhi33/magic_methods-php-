<?php
class class2{
    private $abhi = ['ab'=>"This is the abhi variable in the class2"];
    function __construct(){
        // echo "This is abhi class constructor";
    }
    public function __get($name){
        echo 'This is the get method in the class2 :'.$this->abhi[$name];
    }
    public function __set($name,$value){
        // $this->$abhi[$name] = $value;
        return $this->abhi[$name] = $value;
    }
   
}


?>