<?php 

if (isset($_POST["submit"])) {
    $productName = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $name = $_POST["naming"];
    $shipping = $_POST["shipping"];
    $credit = $_POST["credit"];
    $creditNumber = $_POST["creditNumber"];
    $creditNumberRepeat = $_POST["repeatCredit"];

    require_once 'functions.inc.php';

    if (wrongPrice($price)) {
        header("location: ../index.php?error=invalidPrice");
        exit();
    }
    else if (noMatchCredit($creditNumber, $creditNumberRepeat)) {
        header("location: ../index.php?error=noMatchCredit");
        exit();
    }
    header("location: ../display.php");
    exit();
}
else {
    header("location: ../index.php");
    exit();
}