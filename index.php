<?php
function calculate($num1, $num2, $sign) {
    if ($sign === "+")
    {
        return "Answer: ".($num1 + $num2);
    }
    elseif ($sign === "-")
    {
        return "Answer: ".($num1 - $num2);
    }
    elseif ($sign === "*")
    {
        return "Answer: ".($num1 * $num2);
    }
    elseif ($sign === "/")
    {
        if ((int) $num2 === 0)
        {
            return "Second number can not be 0";
        }
        else
        {
            return "Answer: ".($num1 / $num2);
        }
    }
}

if (isset($_POST["calculate"])) {
    if ($_POST["num1"] !== "" and $_POST["num2"] !== "") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sign = $_POST["sign"];

        $answer = calculate($num1, $num2, $sign);
    } else {
        $answer = "You should enter both numbers!";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        
        <link rel="stylesheet" href="style/style.css"/>
    </head>
    <body>
        <div class="wrap">
            <h1>Calculation programm</h1>
            <form action="" method="post" name="calc-form">
                <div class="form-item">
                    <label for="num1">Enter first number:</label> <input type="number" id="num1" name="num1">
                </div>
                <div class="form-item">
                    <label for="num2">Enter second number:</label> <input type="number" id="num2" name="num2">
                </div>
                <p>Select operation:</p>
                <select name="sign" class="select">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type="submit" value="Calculate" name="calculate">
            </form>
            <div class="answer">
                <?php echo $answer;?>
            </div>
        </div>
    </body>
</html>