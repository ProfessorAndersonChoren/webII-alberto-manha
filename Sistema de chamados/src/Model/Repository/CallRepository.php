<?php

namespace QI\SistemaDeChamados\Model\Repository;

use QI\SistemaDeChamados\Model\Call;
use \PDO;

class CallRepository{
    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    /**
     * Insert a new call in database
     * @param Call $call
     * @return bool
     */
    public function insert($call){
        $stmt = $this->connection->prepare("insert into calls values(null,?,?,?,?,?);");
        $stmt->bindParam(1,$call->user->id,PDO::PARAM_INT);
        $stmt->bindParam(2,$call->equipment->id, PDO::PARAM_INT);
        $stmt->bindParam(3,$call->classification);
        $stmt->bindParam(4,$call->description);
        $stmt->bindParam(5,$call->notes);
        return $stmt->execute();
    }
}