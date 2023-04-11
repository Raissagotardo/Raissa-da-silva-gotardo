<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra aluno</title>
    <link rel="stylesheet" href="stylemostra.css">
</head>
<body>
    <div class="cont">
<table>
<tr>
     <th>CPF: </th> 
<td> 
    <?php echo $_POST ["cpf"]; ?>
</td>  
 </tr>
 <tr>
    <th> NOME: </th>
<td>
     <?php  echo $_POST ["nome"];?>
</td>
</tr>
<tr> <th>NÚMERO</th>
<td>  <?php echo $_POST ["numero"]; ?></td>
</tr>
<tr> 
    <th>ENDEREÇO: </th>

<td><?php echo $_POST ["endereco"];?></td>
</tr>

<tr> 
    <th>DATA DE ANIVERSÁRIO: </th>

<td><?php echo $_POST ["birthday"];?></td>
</tr>
<tr> 
    <th>MATRICULA: </th>

<td><?php echo $_POST ["mat"];?></td>
</tr> 
</div>
</table>
<form action="editar.php" method="post">
    <div class="but">
    <button type="submit" class="butao">
        <b>Editar dados</b>
        <br>
    </button>
    </div>
     
<input type="hidden" name="nome" value=<?php echo $_POST ['nome']?>>
<input type="hidden" name="cpf" value=<?php echo $_POST ['cpf']?>>
<input type="hidden" name="endereco" value=<?php echo $_POST ['endereco']?>>
<input type="hidden" name="numero" value=<?php echo $_POST ['numero']?>>
<input type="hidden" name="birthday" value=<?php echo $_POST ['birthday']?>>
<input type="hidden" name="mat" value=<?php echo $_POST ['mat']?>>
 
</form>

</body>
</html>