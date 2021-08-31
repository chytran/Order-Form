<?php 
    $productName = filter_input(INPUT_POST, 'name');
    $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    $name = filter_input(INPUT_POST, 'naming');
    $shipping = filter_input(INPUT_POST, 'shipping');
    $credit = filter_input(INPUT_POST, 'credit');
    $creditNumber = filter_input(INPUT_POST, 'creditNumber', FILTER_VALIDATE_INT);
    $creditNumberRepeat = filter_input(INPUT_POST, 'repeatCredit', FILTER_VALIDATE_INT);

    if (!$creditNumber OR !$creditNumberRepeat) {
        header("location: index.php?error=letterUsedInCredit");
        exit();
    }

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
    <title>Display Document</title>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

     <!--============== poppins font ===============-->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main__container__display">
        <img src="img/display.jpg" alt="" class="bg__cover">
        <div class="display__container">
            <!-- Displays first message -->
            <p>
                <?php echo $productName; ?>, you placed an order with a <?php echo $credit?> for a total of 
                <b>
                    <?php 
                        if ($price) {
                            $total = number_format($price * $quantity, 2, '.', '');
                            echo '$' . $total;
                        } 
                        else {
                            header("location: index.php?error=invalidPrice");
                            exit();
                        } 
                    ?>
                </b>
            </p>
            <!-- Shipping address -->
            <div class="mini__container">
                <p>Your order will be shipped to</p>
                <span><?php echo $shipping?></span>
            </div>
    </section>
</body>
</html>