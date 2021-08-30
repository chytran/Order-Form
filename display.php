<?php 

if (isset($_POST["submit"])) {
    $productName = $_POST["productName"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $name = $_POST["name"];
    $shipping = $_POST["shipping"];
    $credit = $_POST["credit"];
    $creditNumber = $_POST["creditNumber"];
    $creditNumberRepeat = $_POST["repeatCredit"];

    require_once 'includes/functions.inc.php';

    if (wrongPrice($price)) {
        header("location: index.php?error=invalidPrice");
        exit();
    }
    else if (noMatchCredit($creditNumber, $creditNumberRepeat)) {
        header("location: index.php?error=noMatchCredit");
        exit();
    }
    else {
        header("location: index.php");
        exit();
    }
}