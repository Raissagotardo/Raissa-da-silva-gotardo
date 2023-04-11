<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar dados</title>
    <link rel="stylesheet" href="styleedit.css">
</head>
<body>
<form action="mostraaluno.php" method="post">
 
<div class="containeredit">
<div class="titulo">
    <h1>Editar Formulário</h1>
 </div>
<input type="text"  class="configuracoes" name="nome"  placeholder="Digite seu nome: "value=" <?php echo $_POST ['nome']?>">
<div class="cfpenumero">
<input type="text" class="conf" name="cpf" placeholder="Digite seu cpf: " value=" <?php echo $_POST ['cpf']?>">
<input type="text" class="conf"  name="numero" placeholder="Digite seu número: " value=" <?php echo $_POST ['numero']?>">
</div>
<input type="text" class="configuracoes"  name="endereco" placeholder="Digite seu endereço: " value=" <?php echo $_POST ['endereco']?>">
<input type="date" class="configuracoes"  name="birthday"  placeholder="Digite sua data de anivesário: "value="<?php echo $_POST ['birthday']?>">
<input type="text" class="configuracoes" name="mat" placeholder="Digite sua matricula: " value="<?php echo $_POST ['mat']?>">
</form>
<div class="butaoedit">
<button type="submit" class="b">
    <b>Editar dados</b>
    <br>
</button>
</div>
</div>
</body>
</html>