<?php
if (isset($_POST['amount']) && !empty($_POST['amount'])) {
    $amount = $_POST['amount'];
    $currency_from = $_POST['currency_to_convert_from'];
    $currency_to = $_POST['currency_to_convert_to'];

    $usdExRate = 1.79;
    $euroExRate = 1.96;
    $gbpExRate = 2.53;

    if ($currency_from == $currency_to ) {
        $result = $amount;
    }

    if ($currency_to == 'BGN') {
        if ($currency_from == 'USD') {
            $result = $amount * $usdExRate;
        } else if ($currency_from == 'EUR') {
            $result = $amount * $euroExRate;
        } else if ($currency_from == 'GBP') {
            $result = $amount * $gbpExRate;
        }
    }

    if ($currency_to == 'EUR') {
        if ($currency_from == 'BGN') {
            $result = $amount / $euroExRate;
        } else if ($currency_from == 'USD') {
            $result = $amount * $usdExRate / $euroExRate;
        } else if ($currency_from == 'GBP') {
            $result = $amount * $gbpExRate / $euroExRate;
        }
    }

    if ($currency_to == 'GBP') {
        if ($currency_from == 'BGN') {
            $result = $amount / $gbpExRate;
        } else if ($currency_from == 'USD') {
            $result = $amount * $usdExRate / $gbpExRate;
        } else if ($currency_from == 'EUR') {
            $result = $amount * $euroExRate / $gbpExRate;
        }
    }

    if ($currency_to == 'USD') {
        if ($currency_from == 'BGN') {
            $result = $amount / $usdExRate;
        } else if ($currency_from == 'GBP') {
            $result = $amount * $gbpExRate / $usdExRate;
        } else if ($currency_from == 'EUR') {
            $result = $amount * $euroExRate / $usdExRate;
        }
    }
}else {
   $amount = 'Please fill the first field';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css"  rel="stylesheet" href="converter.css">
</head>
<body>
<main id="main">

    <form action="index.php" method="post">
        <div class="currency-wrapper">
            <h1>Currency Converter:</h1>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount">

            <select name="currency_to_convert_from">
                <optgroup label="From">
                    <option value="BGN">BGN</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                </optgroup>
            </select>

            <span>&#10159;</span>

            <select name="currency_to_convert_to">
                <optgroup label="To">
                    <option value="BGN">BGN</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                </optgroup>
            </select>
        </div>

        <div class="result-wrapper">
            <label for="total-amount">Total:</label>
            <input type="number" id="total-amount" value="<?php echo isset($result) ?  round($result, 2) : ''; ?>">

            <input type="submit" value="convert" name="submit">
            <div class="error"><?php echo isset($result) ?  round($result, 2).' '.$currency_to : ''; ?></div>
        </div>
    </form>
</main>
</body>
</html>