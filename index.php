<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIS4260 A1</title>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

     <!--============== poppins font ===============-->
     <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section class="main__container">
        <div class="container bg">
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "invalidPrice") {
                        echo "<p class='error'>Must Enter a valid price.</p>";
                    }
                    else if ($_GET["error"]  == "noMatchCredit") {
                        echo "<p class='error'>Credit card numbers do not match.</p>";
                    }
                }
            ?>
            <form action="POST" action="display.php" class="form">
                <h1 class="order__title">Order Form</h1>

                <div class="product__container container__organizer">
                    <h2 class="product__name">Product:</h2>
                    <input name="productName" type="text" class="product__text">
                </div>

                <div class="quantity__container container__organizer">
                    <h2 class="quantity__name">Quantity:</h2>
                    <select name="quantity" id="quantity">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>

                <div class="unit__container">
                    <h2 class="unit__name">Unit Price:</h2>
                    <input type="text" name="price" class="unit__text">
                </div>

                <div class="name__container container__organizer">
                    <h2 class="name__name">Name:</h2>
                    <input type="text" name="name" class="name__text">
                </div>

                <div class="shipping__container container__organizer">
                    <h2 class="shipping__name">Shipping Address:</h2>
                    <input type="text" name="shipping" class="shipping__text">
                </div>

                <div class="credit__container container__organizer">
                    <h2 class="credit__name">Credit Card:</h2>
                    <fieldset id="credit1">
                        <input type="radio" value="value1" name="credit" class="credit__option">
                        <input type="radio" value="value2" name="credit" class="credit__option">
                        <input type="radio" value="value3" name="credit" class="credit__option">
                        <input type="radio" value="value4" name="credit" class="credit__option">
                    </fieldset>
                </div>

                <div class="credit__number__container container__organizer">
                    <h2 class="credit__number__name">Credit Card Number:</h2>
                    <input type="password" class="credit__number__text" name="creditNumber">
                </div>

                <div class="repeat__credit__number__container container__organizer">
                    <h2 class="repeat__credit__number__name">Credit Card Number:</h2>
                    <input type="password" class="repeat__credit__number__text" name="repeatCredit">
                </div>

                <hr class="divider">

                <button class="button" method="POST" name="submit">Submit Order</button>
            </form>
        </div>
    </section>
</body>
</html>