<?php
session_start();
if (!empty($_POST)) {
    $money = $_POST["money"];
    $option = $_POST["coin"];

    switch ($option) {
        case "dollar":
            $dollar = convertToDollar($money);
            $_SESSION["amount_dollar"] = "R$ $money equivale à $ $dollar";
            break;
        case "euro":
            $euro = convertToEuro($money);
            $_SESSION["amount_euro"] = "R$ $money equivale à $euro";
            break;
    }
    header("location:message.php");
} else {
    $_SESSION["error"] = "Ops. Houve um erro inesperado!!!";
    header("location:message.php");
}

function convertToDollar($money)
{
    $money = $money / 4.99;
    return number_format($money,2,",",".");
}

function convertToEuro($money)
{
    $money = $money / 5.28;
    return number_format($money,2,",",".");
}
