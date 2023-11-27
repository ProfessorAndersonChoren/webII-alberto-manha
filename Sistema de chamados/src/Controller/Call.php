<?php

namespace QI\SistemaDeChamados\Controller;

use Exception;
use QI\SistemaDeChamados\Model\Call;
use QI\SistemaDeChamados\Model\Equipment;
use QI\SistemaDeChamados\Model\Repository\CallRepository;
use QI\SistemaDeChamados\Model\User;

require_once dirname(dirname(__DIR__)) . "/vendor/autoload.php";

session_start();
switch ($_GET["operation"]) {
    case "insert":
        insert();
        break;
    case "findAll":
        findAll();
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
    $user = new User($_POST["user_email"]);
    $user->id = 1;
    $user->name = $_POST["user_name"];
    $equipment = new Equipment(
        $_POST["floor"],
        $_POST["room"]
    );
    $equipment->id = 1;
    $call = new Call(
        $user,
        $equipment,
        $_POST["classification"],
        $_POST["description"],
    );
    if(!empty($_POST["notes"])){
        $call->notes = $_POST["notes"];
    }
    // TODO Validar os dados informados
    try{
        $call_repository = new CallRepository();
        $result = $call_repository->insert($call);
        if($result){
            $_SESSION["msg_success"] = "Parabéns, seu chamado foi registrado com sucesso!!!";
        }else{
            $_SESSION["msg_warning"] = "Lamento, não foi possível registrar seu chamado!!!";
        }
    }catch(Exception $exception){
        $_SESSION["msg_error"] = "Ops. Houve um erro inesperado em nossa base de dados!!!";
        $log = $exception->getFile()." - ".$exception->getLine()." - ".$exception->getMessage();
        Logger::writeLog($log);
    }finally{
        header("location:../View/message.php");
        exit;
    }
}

function findAll(){
    $call_repository = new CallRepository();
    $result = $call_repository->findAll();
}
