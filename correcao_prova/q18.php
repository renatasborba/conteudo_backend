<?php
        $p1 = array (
            "nome" => "Ana",
            "cpf" => "123.123.123-11"
        );

        $p2 = [
            "nome" => "Mia",
            "cpf" => "321.321.321-11"
        ];

        // questão 19.1
        $pessoas = [$p1, $p2];
            echo $pessoas[0]['nome'] . "<br>";
            echo $pessoas[1]['nome'] . "<br>";

        // questão 19.2
        foreach($pessoas as $value){
            echo $value['cpf'] . "<br>";
        }


?>