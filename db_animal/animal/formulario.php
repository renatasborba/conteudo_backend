<?php
    //importa o arquivo de conexão
    require_once "consultar_por_id.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinário</title>
</head>
<body>
    <h1>Cadastro de animal</h1>
    <hr>

    <form action="<?php echo isset($animal) ?
                            "atualizar.php" : 
                            "inserir.php"; ?>"
                            
method="post" enctype="multipart/form-data">

<input type="hidden" name="codanimal" value="<?php echo $animal->codanimal ??"" ;?>"><br>               

        <label>Nome do dono</label><br>
        <input type="text" name="nome_dono" value="<?php echo $animal->nome_dono ??"" ;?>"><br>

        <label>Nome do animal</label><br>
        <input type="text" name="nome_animal" value="<?php echo $animal->nome_animal ??"" ;?>"><br>

        <label>Raça do animal</label><br>
        <input type="text" name="raca" value="<?php echo $animal->raca ??"" ;?>"><br>

        <label>Peso do animal</label><br>
        <input type="text" name="peso" value="<?php echo $animal->peso ??"" ;?>"><br>

        <label>Idade do animal</label><br>
        <input type="text" name="idade" value="<?php echo $animal->idade ??"" ;?>"><br>

        <button type="submit">Inserir</button>
        
    </form>

</body>
</html>