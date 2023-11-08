<?php

namespace QI\SistemaDeChamados\Model;

class Call
{
    private $user_name;
    private $user_email;
    private $pc_number;
    private $floor;
    private $class;
    private $classification;
    private $description;
    private $notes;



    public function __get($attribute)
    {
        return $this->$attribute;
    }
    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
