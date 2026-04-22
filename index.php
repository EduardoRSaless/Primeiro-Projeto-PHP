<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meu Portifolio</title>
</head>
<body>
<h1>
    <?= "Portifolio do Eduardo"; ?>
</h1>

<p>
    <?php
    echo "Lorem ipsum dui curae quisque litora lobortis nisi pulvinar risus gravida, hac ornare arcu semper diam sociosqu curabitur vulputate. placerat class ac lectus scelerisque vestibulum vitae mollis, imperdiet class curae massa justo ut et, rhoncus laoreet mattis dictum tincidunt habitant. ut pretium interdum sit posuere consequat eros augue, nullam non neque laoreet pretium dictum adipiscing platea, aptent ut aliquam vel cursus sem. sollicitudin nam condimentum arcu et cras bibendum in fusce, fermentum urna risus nisi quisque semper netus etiam, pellentesque cursus massa et sollicitudin cursus et. faucibus sapien nullam habitant velit fames pharetra lacinia, nec aptent eget et sit vitae, congue ullamcorper gravida id orci ut."
    ?>
</p>


<?php
$projeto = "Meu portifolio";
$finalizado = true;
$dataDoProjeto = " 21/04/2026";
$descricao = "Meu primeiro portfolio em PHP!";
$ano = "2020"

$projetos = [
        "Meu Portifolio",
        "Lista de Tarefas",
        "Lista de Projetos",
        "Controle de Leitura de Livros",
]
?>

<hr>

<div>
    <h1><?= $projeto . $dataDoProjeto ?></h1>
    <p><?= $descricao ?></p>
</div>

<div>
    <?php if (!$finalizado): ?>
        <span style="color: green"> Finalizado ✅ </span>
    <?php else: ?>
        <span style="color: red"> Não finalizado ❌</span>
    <?php endif; ?>

</div>
<hr>
<div
        <?php if ((2024 - $ano) > 2): ?>
            style="background-color: burlywood"
        <?php endif; ?>
>
    <p>
        <?php
        echo "Lorem ipsum dui curae quisque litora lobortis nisi pulvinar risus gravida, hac ornare arcu semper diam sociosqu curabitur vulputate. placerat class ac lectus scelerisque vestibulum vitae mollis, imperdiet class curae massa justo ut et, rhoncus laoreet mattis dictum tincidunt habitant. ut pretium interdum sit posuere consequat eros augue, nullam non neque laoreet pretium dictum adipiscing platea, aptent ut aliquam vel cursus sem. sollicitudin nam condimentum arcu et cras bibendum in fusce, fermentum urna risus nisi quisque semper netus etiam, pellentesque cursus massa et sollicitudin cursus et. faucibus sapien nullam habitant velit fames pharetra lacinia, nec aptent eget et sit vitae, congue ullamcorper gravida id orci ut."
        ?>
    </p>

</body>
</html>