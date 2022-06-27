<?php

    function __autoload($className){
        include_once "./classes/$className.php";

    }

     $main = new Abhi();
     echo "<br>";
     $thing = new Main();


?>