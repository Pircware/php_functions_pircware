<?php

function is_file_check($filename) {
    $file_check = explode(".", $filename);
    $file_true_false;
    if(sizeof($file_check) >= 2) {
        $file_true_false = true;
    } else {
        $file_true_false = false;
    }

    return $file_true_false;
}

?>