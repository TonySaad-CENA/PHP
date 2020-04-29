<?php
session_start();

function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagenSucesso() : ?string
{
    if (isset($_SESSION['mensagem de sucesso'] ))
        return $_SESSION['mensagem de sucesso'];
    return null;
}

function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagenErro() : ?string
{
    if (isset($_SESSION['mensagem de erro'] ))
        return $_SESSION['mensagem de erro'];
    return null;
}

function removerMensagenSucesso() : void
{
    if (isset($_SESSION['mensagem de sucesso'] ))
        unset($_SESSION['mensagem de sucesso']);
}

function removerMensagenErro() : void
{
    if (isset($_SESSION['mensagem de erro'] ))
       unset($_SESSION['mensagem de erro']);
}
