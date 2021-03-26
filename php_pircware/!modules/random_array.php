<?php

function rand_array($array) {
    $rand_item = rand(0, sizeof($array));
    if($rand_item > 0) {
        $rand_array = $array[$rand_item - 1];
    } elseif($rand_item == 0) {
        $rand_array = $array[$rand_item];
    }
    return $rand_array;
}

?>