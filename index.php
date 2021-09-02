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
        <img src="img/display.jpg" alt="" class="bg__cover">
        <div class="container">
            <form method="post" action="display.php" class="form">
                <h1 class="order__title">Order Form</h1>

                <!-- Error displays -->
                <?php

                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "invalidPrice") {
                            echo "<p class='error'>Must Enter a valid price.</p>";
                        }
                        else if ($_GET["error"]  == "noMatchCredit") {
                            echo "<p class='error'>Credit card numbers do not match.</p>";
                        }
                        else if ($_GET["error"]  == "letterUsedInCredit") {
                            echo "<p class='error'>Credit card numbers contain a non number.</p>";
                        }
                    }
                ?>

                <div class="product__container container__organizer">
                    <h2 class="product__name">Product:</h2>
                    <input name="name" type="text" class="product__text">
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

                <div class="unit__container container__organizer">
                    <h2 class="unit__name">Unit Price:</h2>
                    <input type="text" name="price" class="unit__text">
                </div>

                <div class="name__container container__organizer">
                    <h2 class="name__name">Name:</h2>
                    <input type="text" name="naming" class="name__text">
                </div>

                <div class="shipping__container container__organizer">
                    <h2 class="shipping__name">Shipping Address:</h2>
                    <textarea name="shipping" id="" cols="24" rows="4" class="shipping__text">
                        
                    </textarea>
                </div>

                <div class="credit__container container__organizer" style="margin-top: 0.3rem;">
                    <h2 class="credit__name">Credit Card:</h2>
                    <fieldset id="credit1">
                        <div class="radio__container">
                            <input type="radio" checked="checked" value="Visa" name="credit" id="visa" class="credit__option">
                            <label for="visa" class="labels"> Visa</label>
                        </div>
                        
                        <div class="radio__container">
                            <input type="radio" value="Master Card" name="credit" id="masterCard" class="credit__option">
                            <label for="masterCard" class="labels">Master Card</label>
                        </div>

                        <div class="radio__container">
                            <input type="radio" value="American Express" name="credit" id="americanExpress" class="credit__option">
                            <label for="americanExpress" class="labels">American Express</label>
                        </div>

                        <div class="radio__container">
                            <input type="radio" value="Discover" name="credit" id="discover" class="credit__option">
                            <label for="discover" class="labels">Discover</label>
                        </div>
                    </fieldset>
                </div>

                <div class="credit__number__container container__organizer">
                    <h2 class="credit__number__name">Credit Card Number:</h2>
                    <input type="password" class="credit__number__text" name="creditNumber">
                </div>

                <div class="repeat__credit__number__container container__organizer">
                    <h2 class="repeat__credit__number__name">Repeat Credit Card Number:</h2>
                    <input type="password" class="repeat__credit__number__text" name="repeatCredit">
                </div>

                <hr class="divider">

                <input class="button" name="submit" type="submit">
            </form>
        </div>
    </section>
</body>
</html>