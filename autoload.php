<?php

// include './classes/Abhi.php';
// include './classes/Main.php';

function __autoload($className){
    include_once "./classes/$className.php";
}
function main($thing){
   echo "$thing is greater";
}

// Autoload function will run when your code reference other class that has been not loaded yet 
$obj = new Abhi();
echo "<br>";
$main = new Main();

echo "abhishek";
$ret = main("Abhi");
?>   