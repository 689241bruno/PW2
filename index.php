<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pagina inserir usuário</title>
</head>
<body>
    <header>
        <h1>Atividade PW2</h1>
    </header>

    <div id="divForm">
        <form action="" method="POST">
            <section>
                <p>Email</p>
                <input type="text" name="email">
            </section>
            <section>
                <p>Senha</p>
                <input type="pass" name="senha">
            </section>
            <section>
                <p>Nome</p>
                <input type="text" name="nome">
            </section>

            <input type="submit" value="ENVIAR" id="btnConf">
        </form>
    </div>
    <?php

    require 'Contato.class.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $contato = new Contato();
    $contato->insertUser($nome, $email, $senha);

    ?>
</body>
</html>




