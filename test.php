<?php

    class Abhi{
        public function main(){
            echo "Im a main function";
            echo "<br>";
        }

        function __construct($name){
            print_r($this);
            echo "im constructing the $name object";
            echo "<br>";

        }
        function __destruct(){
            print_r ($this);
            echo "<br>";

        }
    }

    $obj = new Abhi("Abhishek");
    $obj->main();

?>