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
        // This is how you can assign the value in the array key
        // return $this->abhi[$name] = $value;
    }

    // The call function called when the object trying to access the undefined function into the classs first argument is the function name it has been called and the second is the its function arguments
    public function __call($name,$array){
        echo 'Trying to access the '.$name .' function';
        print_r($array);
    }
    public function abhishek($name){
        echo 'Trying to access the abhi function in the class ';
        echo $name;
    }
   
}


?>