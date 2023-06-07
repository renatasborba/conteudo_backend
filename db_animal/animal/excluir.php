<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_GET['codanimal'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `animal` WHERE  `codanimal`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $codanimal);

   //executa o comando
   $comando->execute();

   //volta para a listagem de usuários
   header("Location: index.php");

   







