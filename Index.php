<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="vlewport" content="width=device.width, initial.scale=1">
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = obterMensagenSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }
        $mensagemDeErro = obterMensagenErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu Nome: <input type="text" name="nome" /></p>
    <p>Sua Idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar Dados dos Competidores" /></p>
</form>
</body>
</html>




