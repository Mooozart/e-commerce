<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// gera número de protocolo aleatório
$protocolo = rand(100000, 999999);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suporte Enviado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

    <header class="header">
        <div class="logo">
            <img src="images/ET-simple.png">
        </div>

        <nav class="menu">
            <a href="index.html">Home</a>
            <a href="catalogo.html">Catálogo</a>
            <a href="carrinho.html">Carrinho</a>
            <a href="clientes.html">Clientes</a>
            <a href="pedido.html">Pedidos</a>
            <a href="suporte.html">Suporte</a>
        </nav>
    </header>

    <main style="padding: 30px;">
        <h1>Mensagem enviada com sucesso!</h1>

        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Assunto:</strong> <?php echo $assunto; ?></p>    

        <p><strong>Mensagem:</strong><br>
        <?php echo $mensagem; ?></p>

        <br>

        <h3>Entraremos em contato em breve.</h3>

        <p><strong>Número de protocolo:</strong> <?php echo $protocolo; ?></p>

    </main>

    <footer class="footer">
        <p>© Entre Linhas</p>
    </footer>

</div>
</body>
</html>