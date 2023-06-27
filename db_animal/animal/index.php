<?php
    require_once "consultar_todos.php";
    require_once "../template/cabecalho.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >
  </head>
  <body>
    <div class="container">
    <h1>Animais</h1>
    <hr>

    <div class="text-end">
      <a href="formulario.php" class="btn btn-success">
        Inserir Novo
      </a>
    </div>

    <table class="table" id="tabela_dados">
      <thead>
        <tr>
          <th scope="col">Nome do dono</th>
          <th scope="col">Nome do animal</th>
          <th scope="col">Raça do animal</th>
          <th scope="col">Peso do animal</th>
          <th scope="col">Idade do animal</th>
          <th scope='col'>Ações</th>
    </tr>
         </thead>
  <tbody>
    <?php foreach($animais as $animal): ?> 
    <tr>
        <td><?= $animal->nome_dono ?></td>
        <td><?= $animal->nome_animal ?></td>
        <td><?= $animal->raca ?></td>
        <td><?= $animal->peso ?></td>
        <td><?= $animal->idade ?></td>
        <td class="text-end" width="25%">
        <a href="formulario.php?id=<?= $animal->codanimal ?>" class="btn btn-primary">
            <i class="fa-regular fa-pen-to-square"></i>
            Atualizar
          </a>
          <a href ="excluir.php?id=<?=$animal->codanimal ?>" class="btn btn-danger">
          <i class="fa-regular fa-trash-can"></i>
            Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?> 

  </tbody>
    </table>
    </div>
    
    
 <?php require_once "../template/rodape.php"; ?>