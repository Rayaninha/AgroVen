<head>
    <script src="https://use.fontawesome.com/c1a45d17ac.js"></script>
    <link href="geral.css" rel="stylesheet">
    <title>Agroven</title>
</head>

<body>

    <div class="topnav">

        <div class="logo">
            <a href="index.php">
                <img src="imagem/logo.png" alt="AgroVen" width="100px">
            </a>
        </div>

        <a href="formLogin.php">
            <div class="active"> Escolha</div>
        </a>

    </div>

    <div class="container">

    <h1>COMO DESEJAR SE CADASTRAR?</h1>

        <a href="formCliente.php">
            <button>
                <h1>Cliente</h1>
            </button>
        </a>

        <a href="formVendedor.php">
            <button>
                <h1>Vendedor</h1>
            </button>
        </a>

    </div>

    <div class="footer">
        <footer>
            <hr>
            <div class="ajuda">Ajuda e Contato</div>
            <div class="dica">Dicas de Segurança</div>
            <a href="https://github.com/Rayaninha/AgroVen.git" class="fa fa-github"></a>
            <a href="" class="fa fa-instagram"></a>
            <p><a href="">Sobre o Agroven</a>, <a href="">Termos de uso, Política de privacidade</a> e <a href="">Proteção à Propriedade Intelectual</a><br>
                © Bom Negócio Atividades de Internet Ltda. Avenida Duarte Coelho, 1654, Campina de Feira - 53605-030 - Igarassu, PE</p>
        </footer>
    </div>
</body>

<style>
    body {
        background-image: url(imagem/escolha.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 30em;
    }

    .topnav div.active {
        background-color: white;
        color: #5c913b;
    }

    .active,
    .entrar,
    .inicio {
        float: left;
        color: white;
        font-size: 17px;
        padding: 2% 2% 2% 2%;
    }

    .active:hover,
    .entrar:hover,
    .inicio:hover {
        background-color: white;
        color: #5c913b;
        opacity: 0.8;
    }

    .container {
        align-items: center;
        height: 50%;
        margin: 5% 30% 10% 30%;
    }

    button {
        border: 2px solid white;
        border-radius: 5px;
        background-color: white;
        padding: 14px 28px;
        font-size: 16px;
        float: left;
        width: 40%;
        margin: 20% 5% 0% 5%;
        box-shadow: 5px 5px 15px black;
        color: #662113;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }
</style>