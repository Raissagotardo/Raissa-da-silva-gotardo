
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio-login</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
    <div class="home">
    <?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("header.php");
?>
    <form action="mostraaluno.php" method="post">
<p><input type="text" name="email" class="confighome" placeholder="Digite seu email: "></p>
<p><input type="password" name="senha" class="confighome" placeholder="Digite sua senha: " ></p>
<input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
 <br>
<button type="submit" class="but">
 <b> Entrar</b>
 </button>
 <br>
 <div class="envio">
  <a href="http://localhost/Raissa/atividade//cadaluno.php"> <p>Fazer cadastro</p></a>
 </div>
 </form>
 </div>
<?php
include_once("rodape.php");
?>
</body>
</html>