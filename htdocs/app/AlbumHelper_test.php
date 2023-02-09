<?php
$albums = [
    [
        "id" => 1,
        "name" => "ALBUM01",
        "note" => "NOTE01",
        "tracks" => [
            ["id" => 101, "name" => "TRACK0101"],
            ["id" => 102, "name" => "TRACK0102"],
            ["id" => 103, "name" => "TRACK0103"],
        ],
    ],
    [
        "id" => 2,
        "name" => "ALBUM02",
        "note" => "NOTE02",
        "tracks" => [
            ["id" => 201, "name" => "TRACK0201"],
        ],
    ],
    [
        "id" => 3,
        "note" => "NOTE03",
        "name" => "ALBUM03",
        "tracks" => [
            ["id" => 301, "name" => "TRACK0301"],
            ["name" => "TRACK0302", "id" => 302],
            ["id" => 303, "name" => "TRACK0303"],
        ],
    ],
];
// $traksName = array();
// foreach($albums[] as $t){
//     echo $t[0]["tracks"]["name"];
// };
foreach($albums as $value){
   echo ($value["id"]."\t".$value["name"]."\t".$value["note"]."\t");
    foreach($value["tracks"] as $tracks_value){
        echo $tracks_value["name"].",";
    }
    echo "\n";
};