<?php 
    // $productName = $_POST["name"];
    // $quantity = $_POST["quantity"];
    // $price = $_POST["price"];
    // $name = $_POST["naming"];
    // $shipping = $_POST["shipping"];
    // $credit = $_POST["credit"];
    // $creditNumber = $_POST["creditNumber"];
    // $creditNumberRepeat = $_POST["repeatCredit"];

    $productName = filter_input(INPUT_POST, 'name');
    $quantity = filter_input(INPUT_POST, 'quantity');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $name = filter_input(INPUT_POST, 'naming');
    $shipping = filter_input(INPUT_POST, 'shipping');
    $credit = filter_input(INPUT_POST, 'credit');
    $creditNumber = filter_input(INPUT_POST, 'creditNumber');
    $creditNumberRepeat = filter_input(INPUT_POST, 'repeatCredit');

    require_once 'includes/functions.inc.php';

    // if (wrongPrice($price)) {
    //     header("location: index.php?error=invalidPrice");
    //     exit();
    // }
    
    if (noMatchCredit($creditNumber, $creditNumberRepeat)) {
        header("location: index.php?error=noMatchCredit");
        exit();
    }
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
    <div class="display__container">
        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $productName; ?></p>
        </div>

        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $quantity; ?></p>
        </div>

        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $price; ?></p>
        </div>

        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $name; ?></p>
        </div>

        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $shipping; ?></p>
        </div>

        <div class="mini__container">
            <h2 class="display__title"></h2>
            <p><?php echo $credit; ?></p>
        </div> 
    </div>
</body>
</html>