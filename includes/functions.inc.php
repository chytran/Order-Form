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
    $result;
    if (!is_numeric($price)) {
        $result = false;
    }
    else {
        $result = true;
    }
    return $result;
}

?>