<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form  class="formcad" action="mostraaluno.php" method="post">
        <p><input type="text"   class="cnome" name="nome" placeholder="Digite seu nome: "></p>
        <div class="dados">
            <p> <input  type="text"  class="cpfenum" name="cpf" placeholder="Digite seu CPF: " required ></p>
                <p> <input  type="text" class="cpfenum" name="numero" placeholder="Digite seu número"></p>
                </div>
                    <p> <input  type="text"  class="address" name="endereco" placeholder="Digite seu endereço" required ></p>
                       <div class="dados">
                    <p><input type="date" class="data" name="birthday"></p>
                        <p><input type="text" class="matricula" name="mat" placeholder="Digite sua matricula" require></p>
                        </div>
   <input TYPE="hidden" NAME="form_submit" VALUE="OK"> 
 <br>
<button type="submit" class="btn">
 <b> Mostrar dados</b>
 </button>
 <br>
 </div>
    </form>
    <?php
include_once("rodape.php");
?>
</body>
</html>


