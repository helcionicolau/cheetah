<?php

namespace MF\Model;

abstract class Model
{

    //Essa variá vai receber a conexão com o banco de dados.
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
}



?>