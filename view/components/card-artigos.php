<?php
function renderizarCard($imagem, $titulo, $descricao)
{
    return"
    <div class='card'>
        <img src=$imagem>
        <h3>$titulo</h3>
        <p>$descricao</p>  
    </div>

    ";
}

?>