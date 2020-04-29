<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $Categorias = [];
    $Categorias[] = 'infantil';
    $Categorias[] = 'adolescente';
    $Categorias[] = 'adulto';
    $Categorias[] = 'idoso';

    if (validaNome($nome) && validaIdade($idade))
    {
        removerMensagenErro();
        if ($idade >= 6 && $idade <= 12)
        {
            for ($i = 0; $i < count($Categorias); $i++) {
                if ($Categorias[$i] == 'infantil') {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $Categorias[$i]);
                    return null;
                }
            }
        }
        elseif ($idade >= 13 && $idade <= 18)
        {
            for ($i = 0; $i < count($Categorias); $i++)
            {
                if ($Categorias[$i] == 'adolescente')
                {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $Categorias[$i]);
                    return null;
                }
            }
        }
        else
        {
            for ($i = 0; $i < count($Categorias); $i++)
            {
                if ($Categorias[$i] == 'adulto')
                {
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $Categorias[$i]);
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagenSucesso();
        return obterMensagenErro();
    }
}
