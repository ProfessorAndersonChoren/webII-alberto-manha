<?php

namespace QI\SistemaDeChamados\Controller;

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;

    default:
        $_SESSION["msg_warning"] = "Operação inválida!!!";
        header("location:../View/message.php");
        break;
}

function insert()
{
    if (empty($_POST)) {
        $_SESSION["msg_error"] = "Ops, houve um erro inesperado!!!";
        header("location:../View/message.php");
        exit;
    }
    $errors = array();
    // TODO Criar o objeto Call
    // TODO Validar os dados informados
}
