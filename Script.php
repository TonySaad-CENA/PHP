<?php
include "servicos/servicoMensagemSessao.php";
include "servicos/ServicoValidacao.php";
include "servicos/defineCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header( 'location: index.php');


