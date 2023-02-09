<?php

$ahops_2 = ["目黒店","新宿店","吉祥寺店"];

$shops[] = "横浜店";

$shops = array("meguro"=>"目黒店","shinjuku"=>"新宿店","kichijoji"=>"吉祥寺店");

foreach($shops as $shop){
    echo $shop.",";
}
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";
var_dump($a);
foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}
foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a にはネストした配列の最初の要素が含まれ、
    // $b には二番目の要素が含まれます。
    echo "A: $a; B: $b\n";
}
$i=array();
foreach($albums as $value){
   $i1[] = ($value["id"]."\t".$value["name"]."\t".$value["note"]."\t");
    foreach($value["tracks"] as $tracks_value){
        $i[] = $tracks_value["name"].",";
    };
    var_dump($i1);
    echo "\n";
};