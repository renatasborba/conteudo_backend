<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //define variáveis para obter os valores específicos dos campos do banco de dados
   $id = $_POST['codanimal'];
   $nome_dono = $_POST['nome_dono'];
   $nome_animal = $_POST['nome_animal'];
   $raca = $_POST['raca'];
   $peso = $_POST['peso'];
   $idade = $_POST['idade'];


   //cria uma variável com um comando SQL
   $SQL = "UPDATE `animal` SET `nome_dono`= ?, `nome_animal`= ?, `raca`= ?, `peso`= ?, `idade`= ? WHERE  `codanimal`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?, ?, ?, ?
   $comando->bind_param("sssiii", $nome_dono, $nome_animal, $raca, $peso, $idade, $codanimal);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

?>

   







