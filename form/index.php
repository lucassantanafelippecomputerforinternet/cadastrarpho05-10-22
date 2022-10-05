<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form">
        <form action="insert.php" method="post">
        <input id="edit" type="text" name="nome" id="nome" placeholder="Digite o nome:" class="form-control" required>
        <input id="edit" type="text" name="telefone" id="telefone" placeholder="Digite o telefone:" class="form-control" required>
        <input id="edit" type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF:" class="form-control" required>
        <input type="hidden" name="gravar" value="grava">
        <button class="button"  type="submit" class="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>