<?php

namespace App;

class AlbumHelper
{
    public static function albumsToTsvString($albums)
    {
        // return
        // $albums[0]["id"]."\t".$albums[0]["name"]."\t".$albums[0]["note"]."\t"
        // .$albums[0]["tracks"][0]["name"].","
        // .$albums[0]["tracks"][1]["name"].","
        // .$albums[0]["tracks"][2]["name"]."\n"
        // .$albums[1]["id"]."\t".$albums[1]["name"]."\t".$albums[1]["note"]."\t"
        // .$albums[1]["tracks"][0]["name"]."\n"
        // .$albums[2]["id"]."\t".$albums[2]["name"]."\t".$albums[2]["note"]."\t"
        // .$albums[2]["tracks"][0]["name"].","
        // .$albums[2]["tracks"][1]["name"].","
        // .$albums[2]["tracks"][2]["name"];
        $c =array();
        foreach ($albums as $album) {
          $albumRecord = ($album["id"] . "\t" . $album["name"] . "\t" . $album["note"] . "\t");
                $trackNames = array();
            foreach ($album["tracks"] as $track) {
                $trackNames[] = $track["name"];
            }
            $c[]=($albumRecord.implode(",",$trackNames)."\n");
        };
        return(implode("",$c));
    }

    public static function a(array $albums): string{
        $result = '';
        foreach ($albums as $album) {
            $trackNames = [];
            foreach ($album['tracks'] as $track) {
                $trackNames[] = $track['name'];
            }
            // $trackNames = array_column($album['tracks'], 'name');

            $data = [
                $album['id'],
                $album['name'],
                $album['note'],
                implode(',', $trackNames),
            ];
            $result .= implode("\t", $data) . "\n";
        }
        return $result;
    }
}
