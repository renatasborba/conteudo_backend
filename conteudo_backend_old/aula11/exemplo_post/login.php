<h1>Exercício 1</h1>
<?php

      if(isset($_POST["user"])){
   if($_POST["user"] == "admin" && $_POST["pw"] == 123) {
    echo "Usuário logado";
   }
   else{
    echo "Usuário ou senha inválidos!";
   }
}
   else{
      header("Location: form_login.php");
   }

?>