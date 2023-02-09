<?php
namespace App;
class Helper
{
    // プロパティの宣言
    // public $var;

    // メソッドの宣言
    public static function same($value1 ,$value2 ,$value3) {
        if ($value1 === $value2 ) {
            if($value2 === $value3){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
// echo(Helper::same(1, 1, 1));
// echo "<br>";
// echo(Helper::same(1, 1, 2));
?>