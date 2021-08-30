<?php 

function noMatchCredit($creditNumber, $creditNumberRepeat) {
    $result;
    if ($creditNumber !== $creditNumberRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function wrongPrice($price) {
    return ctype_digit($price) && (int) $price > 0;
}

?>