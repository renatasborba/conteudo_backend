<?php

//local temporario onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tmp_name'];

//cria um novo nome unico para a foto
$nome_foto = time().$_FILES['foto']['name'];

//local para onde o arquivo do upload foi movido
$destino = "../uploads/$nome_foto";

//move o arquivo de upload de origem para destino
move_uploaded_file($origem, $destino);

?>