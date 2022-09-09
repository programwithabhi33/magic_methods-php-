<?php

// include './classes/Abhi.php';
// include './classes/Main.php';

function __autoload($className){
    include_once "./classes/$className.php";
}

$obj = new Abhi();

echo $obj->abhi;


?>   