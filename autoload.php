<?php

// include './classes/Abhi.php';
// include './classes/Main.php';

function __autoload($className){
    include_once "./classes/$className.php";
}
function main($thing){
   echo "$thing is greater";
}

$obj = new Abhi();
echo "<br>";
$main = new Main();

echo "abhishek";
$ret = main("Abhi");
?>   