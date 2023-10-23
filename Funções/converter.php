<?php
if (!empty($_POST)) {
    $money = $_POST["money"];
    $option = "dolar";

    switch ($option) {
        case "dolar":
            convertToDolar($money);
            break;
        case "euro":
            convertToEuro($money);
            break;
    }
} else {
    // TODO Redirecionar para uma página de mensagem
}

function convertToDolar($money){

}

function convertToEuro($money){
    
}