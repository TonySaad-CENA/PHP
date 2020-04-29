<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode estar vazio, favor preenche-lo');
       return false;
    }

    else if(strlen($nome) < 3 )
    {
        setarMensagemErro( 'O nome deve conter pelo menos 3 letras');
        return false;
    }

    else if(strlen($nome) > 40)
    {
        setarMensagemErro('Nome muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade))
    {
        setarMensagemErro('Informe um número parar a idade');
       return false;
    }
    return true;
}


