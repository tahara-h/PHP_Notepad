<?php
namespace app;
class Helper2
{
    public static function same($a,$b,$c){
        return(($a===$b) && ($b===$c));
    }
}

var_dump(Helper2::same(1, 1, 12));
// $age =22;
// $isMan = true;

// var_dump($age < 20 && $isMan);
// 論理演算子について
// &&かつ
// ||または
// !否定～ではない