<?php
function findMin($arr){
    $min = $arr[0];
    for ($i = 0 ; $i < count($arr) ; $i++){
        if ( $arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return " Gia tri nho nhat trong mang la : " . $min;
}

echo findMin([1,2,3])."<br>";

function findMax($arr){
    $max  = $arr[0];
    for ($i = 0 ; $i < count($arr) ; $i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return " So lon nhat trong mang la : " . $max;
}

echo findMax([1,2,3]);