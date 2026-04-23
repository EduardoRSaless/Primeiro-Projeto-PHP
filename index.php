<!doctype html>
<html lang="en">
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
    $ano = "2020";
    $projetos = [
        [
            "titulo" => "Meu portifolio",
            "finalizado" => false,
            "data" => "2026-0-22",
            "descricao" => "Meu primeiro portfolio! Escrito em PHP e Html",
            "stack" => "Sou dev full stack"
        ],
    ];

    function verificarAtualizacao(){
        if (! true) {

            echo '<span style = "color: green" > Finalizado ✅ </span >';
        } else {
            echo  '<span style="color: red"> Não finalizado ❌</span>';
        }


    }

    ?>

    <hr>

    <ul>

        <?php foreach ($projetos as $projeto): ?>
            <div <?php if ((2024 - $ano) > 2): ?> style="background-color: burlywood" <?php endif; ?>>

            <h1><?= $projeto['titulo'] . $dataDoProjeto ?></h1>
            <?php
            echo "{$projeto['stack']}<br>";
            echo "{$projeto['data']}<br>";
            echo "{$projeto['descricao']}<br>";
            ?>
                <br><?php verificarAtualizacao(); ?></br>
            <p><?= $descricao ?></p>
            
                <p>
                    <?php
                    echo "Lorem ipsum dui curae quisque litora lobortis nisi pulvinar risus gravida, hac ornare arcu semper diam sociosqu curabitur vulputate. placerat class ac lectus scelerisque vestibulum vitae mollis, imperdiet class curae massa justo ut et, rhoncus laoreet mattis dictum tincidunt habitant. ut pretium interdum sit posuere consequat eros augue, nullam non neque laoreet pretium dictum adipiscing platea, aptent ut aliquam vel cursus sem. sollicitudin nam condimentum arcu et cras bibendum in fusce, fermentum urna risus nisi quisque semper netus etiam, pellentesque cursus massa et sollicitudin cursus et. faucibus sapien nullam habitant velit fames pharetra lacinia, nec aptent eget et sit vitae, congue ullamcorper gravida id orci ut."
                    ?>
                </p>

            </div>
        <?php endforeach; ?>

    <hr>
    <?php
    $lista = "Lista de Tarefas";
    $livros = [
            [
        "livro1" => "João e Maria",
        "livro2" => "Freud explica",
        "livro3" => "O Eu e o Inconsciente"
        ]
    ];
    ?>

    <?php foreach ($livros as $livro): ?>

    <div <?php if ((2024 - $ano) > 2): ?> style="background-color: burlywood" <?php endif; ?>>
        <h1><?php echo $lista ?></h1>
        <?php verificarAtualizacao() ?>
<!--        <div>-->
<!--            --><?php //if ($finalizado): ?>
<!--                    <span style="color: green">Finalizado ✅</span>-->
<!--               --><?php //else: ?>
<!--                    A<span style="color: red"> Não finalizado ❌</span>-->
<!--               --><?php //endif; ?>
<!---->
<!--        </div>-->

        <div>

            <?php
            echo "{$livro['livro1']}";
            echo "{$livro['livro2']}";
            echo "{$livro['livro3']}";
            ?>

    </ul>
        </div>
    <?php endforeach; ?>
</body>
</html>