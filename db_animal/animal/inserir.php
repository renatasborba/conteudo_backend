<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário
   if(isset($_POST['nome_dono']) && isset($_POST['nome_animal']) &&
     isset($_POST['raca']) && isset($_POST['peso']) && isset($_POST['idade'])){

      $nome_dono = $_POST['nome_dono'];
      $nome_animal = $_POST['nome_animal'];
      $raca = $_POST['raca'];
      $peso = $_POST['peso'];
      $idade = $_POST['idade'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `animal` (`nome_dono`, `nome_animal`, `raca`, `peso`, `idade`) VALUES (?, ?, ?, ?, ?);"; 
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssii", $nome_dono, $nome_animal, $raca, $peso, $idade);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

   







