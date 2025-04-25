<?php

function criar_input($tipo, $plac)
{
    return "
    <div>
        <input type='$tipo' placeholder='$plac'></input>
    </div>
    ";
}

function salvar ($nome, $tipo)
{
    return  "
    <button type='$tipo'> $nome</button>
    
    ";
}

?>