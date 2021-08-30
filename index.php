<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIS4260 A1</title>

    <!--=============== CSS ===============-->
    link
</head>
<body>
    <section class="main__container">
        <h1 class="order__title">Order Form</h1>

        <div class="product__container container__organizer">
            <h2 class="product__name">Product:</h2>
            <input name="productName" type="text" class="product__text">
        </div>

        <div class="unit__container container__organizer">
            <h2 class="unit__name">Quantity:</h2>
            <select name="quantity" id="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
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
            <input type="text" class="credit__number__text">
        </div>

        <div class="repeat__credit__number__container container__organizer">
            <h2 class="repeat__credit__number__name">Credit Card Number:</h2>
            <input type="text" class="repeat__credit__number__text" name="repeatCredit">
        </div>
    </section>
</body>
</html>