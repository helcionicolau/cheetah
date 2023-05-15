<?php

namespace MF\Model;
use App\Connection;

class Container {

    //Retornar o modelo solicitado já instanciado, junto da conexão estabelecida.
    public static function getModel($model) {

        // A variável 'class' vai receber o modelo passado e converter o primeiro caracter em Maiúsculo
        $class = "\\App\\Models\\".ucfirst($model);

        //Instancia do PDO(Conexao)
		$conn = Connection::getDb();

        //Retornando a instancia da classe.
        return new $class($conn);
    }
}




?>