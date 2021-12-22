<?php

include_once 'conexao.php';
require 'verifica.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Desejos </title>
</head>


<body>

    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>

    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px" />
            </a>
        </div>

    </div>


    <div class="tudo">

        <div class="listagem">
            <?php


            $exibir_banco = "SELECT * FROM AGR_PRODUTO WHERE USER_ID = " . $_SESSION['auth'];
            "";

            $exibir = $conectar->prepare($exibir_banco);
            $exibir->execute();

            while ($row = $exibir->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="produto">
                    <div class="coluna">
                        <img src="imagens/<?= $row['PRO_ID'] ?>/<?= $row['PRO_IMAGEM'] ?>" class="img">
                    </div>
                    <div class="coluna">
                        <?php
                        echo "Nome: " . $row['PRO_NOME'] . "<br>";

                        echo "Preço: " . $row['PRO_PRECO'] . "<br>";
                        ?>
                    </div>
                <?php
                echo "<a href='cadEditar.php?id=" . $row['PRO_ID'] . "'>Editar</a><br>";
                echo "<a href='sair.php?del=" . $row['PRO_ID'] . "'>Apagar</a><br>";
            }
                ?>

                <?php echo "<a href='sair.php?idProduto=" . $row['PRO_ID'] . "'>Sair</a><br>"; ?>
                </div>
        </div>
    </div>
</body>
<style>
    a {
        text-decoration: none;
    }

    body {
        background-color: white;
    }

    .topnav {
        background-color: #5c913b;
        overflow: hidden;
        padding: 5px;
    }

    .topnav p {
        float: right;
        color: white;
        padding: 14px 16px;
        font-size: 17px;
    }

    .topnav p:hover {
        background-color: #f5900c;
        color: #1d5e28;
        border-radius: 25px;
    }

    .logo {
        margin-left: auto;
        margin-right: auto;
        width: 6em;
    }

    input[type="text"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 5px;
        background-color: whitesmoke;
    }

    .tudo {
        margin-left: 10%;
        margin-right: 10%;
    }

    .listagem {
        margin-top: 2%;
    }

    .produto {
        float: left;
    }

    .coluna1 {
        float: left;
        background-color: #5c913b;
        padding: 30px;
    }

    .coluna2 {
        background-color: #5c913b;
        padding: 30px;
    }

    .coluna1 img {
        width: 200px;
        max-height: 150px;
    }

    .entrar {
        background-color: #662113;
        color: white;
        padding: 14px 20px;
        margin: 8px 0px;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
    }

    .entrar:hover {
        opacity: 0.8;
        cursor: pointer;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }

    .container {
        padding: 16px;
        text-align: center;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: white;
        margin: 5% auto 15% auto;
        box-shadow: 5px 5px 15px black;
        width: 40%;
    }

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: #f5900c;
        cursor: pointer;
    }
</style>

</html>