<?php require ('array.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela de produtos</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td>Nome</td>
            <td>Preço</td>
            <td>Quantidade</td>
        </tr>
        <?php foreach ($products as $p): ?>
            
        <tr>
            <td><?php echo $p['nome']; ?></td>
            <td><?php echo $p['preco']; ?></td>
            <td><?php echo $p['qtd']; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>