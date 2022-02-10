<?php
function countNumber($arr,$value): string
{
    $count = 0;
    for ( $i = 0 ; $i < count($arr) ; $i++){
        if ( $value == $arr[$i]){
            $count ++;
        }
        else{
            return " Phan tu " . $value . " khong xuat hien trong mang";
        }
    }
    return " Phan tu " . $value . " xuat hien " . $count . " lan trong mang vua nhap ";
}

echo countNumber([1,2,1,3,4,1,1],0);