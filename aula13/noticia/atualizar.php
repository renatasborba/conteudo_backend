<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idnoticia'];
   $titulo = $_POST['titulo'];
   $materia = $_POST['materia'];
   $categoria = ['categoria'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `noticia` SET `titulo`= ?, `materia`= ?, `categoria`= ? WHERE  `idnoticia`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssi", $titulo, $materia, $categoria, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário aaaaaaa
   header("Location: index.php");

   







