<?php
    $sting = "MUSIC - Nguồn cảm xúc"; //chuỗi
    $Integer = 1998; //số nguyên
    $mang = array("Volvo","BMW","Toyota"); //mảng
    $float = 10.10; //số thập phân
    $Boolean = true; //true or false

    echo $sting . "<br>";
    echo $Integer . "</br>";
    echo $float . "</br>";
    echo $Boolean . "</br>";
    echo $mang[1] . "</br>";


    //... object:
    function Car() {
        echo "Mazda";
    }
    // create an object
    $herbie = Car(); //herbie là tên object

    // show object properties
    echo $herbie;


