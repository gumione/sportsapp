<?php
function trim_text($input, $length, $ellipses = true) {  
    //no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
  
    //find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
  
    //add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= '...';
    }
  
    return $trimmed_text;
}

function ending($number, $endings)
{
    $number = $number % 100;
    if ($number>=11 && $number<=19) {
        $ending=$endings[2];
    }
    else {
        $i = $number % 10;
        switch ($i)
        {
            case (1): $ending = $endings[0]; break;
            case (2):
            case (3):
            case (4): $ending = $endings[1]; break;
            default: $ending=$endings[2];
        }
    }
    return $ending;
}
?>