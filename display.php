<?php 
    $productName = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $name = $_POST["naming"];
    $shipping = $_POST["shipping"];
    $credit = $_POST["credit"];
    $creditNumber = $_POST["creditNumber"];
    $creditNumberRepeat = $_POST["repeatCredit"];

    // require_once 'includes/functions.inc.php';

    // if (wrongPrice($price)) {
    //     header("location: index.php?error=invalidPrice");
    //     exit();
    // }
    // else if (noMatchCredit($creditNumber, $creditNumberRepeat)) {
    //     header("location: index.php?error=noMatchCredit");
    //     exit();
    // }
?>

<!--================== HTML PORTION ======================-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $productName; ?></p>
    <p><?php echo $quantity; ?></p>
    <p><?php echo $price; ?></p>
    <p><?php echo $name; ?></p>
    <p><?php echo $shipping; ?></p>
    <p><?php echo $credit; ?></p>
    <p><?php echo $creditNumber; ?></p>
    <p><?php echo $creditNumberRepeat; ?></p>
</body>
</html>