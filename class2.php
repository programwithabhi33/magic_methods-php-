<?php
class class2{
    private $abhi = ['ab'=>"This is the abhi variable in the class2"];
    public $main = 'This is the main variable in the class2';
    function __construct(){
        // echo "This is abhi class constructor";
    }
    public function __toString(){
        return get_class($this);
    }
    // public function __unset($name){
    //     unset($this->abhi[$name]);
    // }
    // public static function mainThing(){
    //     echo "This is the static function in the class";
    // }
    public function __get($name){
        if(array_key_exists($name,$this->abhi)){
            echo $this->abhi[$name];
        }
        else{
            echo 'This is non-exist variable in the array';

        }
    }
    // public function __set($name,$value){
    //     // This is how you can assign the value in the array key
    //     // return $this->abhi[$name] = $value;
    // }

    // The call function called when the object trying to access the undefined function into the classs first argument is the function name it has been called and the second is the its function arguments
    // public function __call($name,$array){
    //     echo 'Trying to access the '.$name .' function';
    //     print_r($array);
    // }

    // The callstatic function is used for the class when undefined function are called is as same as __call
    // public static function __callstatic($name,$array){
    //     echo 'Trying to access the '.$name .' function';
    //     print_r($array);
    // }
    public function abhishek($name){
        echo 'Trying to access the abhi function in the class ';
        echo $name; 
    }
    public function __isset($name){ 
        echo "This is the isset function in the class";
    }
}


?>