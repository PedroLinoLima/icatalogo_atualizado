<?php

require("../database/conexao.php");

switch($_POST["acao"]){
    
    case "inserir";

        //se houver uma categoria a ser inserida, faz a inserção no banco
        if (isset($_POST["categoria"]) && $_POST["categoria"] != "") {
            $tarefa = $_POST["categoria"];
            $sqlInsert = " INSERT INTO tbl_categoria (descricao) VALUES ('$categoria') ";

            $resultado = mysqli_query($conexao, $sqlInsert);

            if ($resultado == false){
                $mensagem = "Erro ao criar a categoria!";
                $tipoMensagem = "erro";
            }else{
                $mensagem = "Categoria criada com sucesso!";
                $tipoMensagem = "sucesso";
            }

           
        }
        break;

    case "deletar";

        if(isset($_POST["categoriaId"]) && $_POST["categoriaId"] != ""){

            $tarefaId = $_POST["categoriaId"];

            $sqlDelete = "DELETE FROM tbl_categoria WHERE id = $categoriaId";
             
            $resultado = mysqli_query($conexao, $sqlDelete);

            if ($resultado == false){
                $mensagem = "Erro ao deletar a categoria!";
                $tipoMensagem = "erro";
            }else{
                $mensagem = "Categoria deletada com sucesso!";
                $tipoMensagem = "sucesso";
            }


            
        }

        break;
}

        header("location: index.php?mensagem=$mensagem&tipoMensagem=$tipoMensagem");