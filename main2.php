<?php

    include_once './class2.php';

    $obj = new class2();
    // $obj->ab = "Abhishek";
    // $obj->ab;
    // $obj->abhi('2','3','4');
    // echo "<br>";
    // $obj->abhishek('abhishek');
    // class2::mainThing();
    // $obj->ab;
    // unset($obj->ab);
    // $obj->ab;
    // echo $obj;

    // This called the __invoke in the class
    echo $obj('abhi','abhishek');
?>