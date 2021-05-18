<?php

include("../database/conexao.php");

$sql = " SELECT * FROM tbl_categoria ";

$resultado = mysqli_query($conexao, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./categorias.css" />
    <title>Administrar Categorias</title>
</head>

<body>
    <?php
    include("../componentes/header/header.php");
    ?>
    <div class="content">
        <?php
            if (isset($_GET["mensagem"])){
        ?>
            <div class="mensagem"
                <?= $_GET["tipoMensagem"] == "sucesso" ? "style='background-color: #006600;'" : "" ?>
            >
                <?= $_GET["mensagem"] ?>
            </div>
        <?php
            }    
        ?>

        <section class="categorias-container">
            <main>
                <form method="POST" class="form-categoria" action="acoes_categoria.php">
                    <input type="hidden" name="acao" value="inserir" />
                    <h1 class="span2">Adicionar Categorias</h1>
                    <div class="input-group span2">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" required/>
                    </div>
                    <button>Cancelar</button>
                    <button>Salvar</button>
                </form>
                <h1>Lista de Categorias</h1>
                <div class="card-categorias">
                    Roupas
                    <img src="https://icons.veryicon.com/png/o/construction-tools/coca-design/delete-189.png" />
                </div>
                <div class="card-categorias">
                    Calçados
                    <img src="https://icons.veryicon.com/png/o/construction-tools/coca-design/delete-189.png" />
                </div>
                <div class="card-categorias">
                    Acessórios
                    <img src="https://icons.veryicon.com/png/o/construction-tools/coca-design/delete-189.png" />
                </div>
            </main>
        </section>
    </div>
</body>

</html>