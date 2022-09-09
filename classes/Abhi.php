<?php
class Abhi{
    function __construct(){
        // echo "This is abhi class constructor";
    }
    private $abhi = "This is abhi private variable inside Abhi class";

    // The __get function allow the object to accees the private variable in the class this is read only (public variables are read and write only but private variables are not accessible but you can access it with the help of __get function but read only)
    // It takes one argument of the variable name
    public function __get($name){
        echo "Getting abhi variable $name";
    }
}


?>