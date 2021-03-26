<?php

function get_extension($file_str) {
    $file_p_array= explode(".", $file_str);
    $extension = $file_p_array[sizeof($file_p_array) - 1];
    if(sizeof($file_p_array) > 1) {
        return $extension;
    } else {
        return "Argument has to be a file";
    }
}
?>