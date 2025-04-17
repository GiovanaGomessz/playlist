<?php
function renderizarCard($imagem, $titulo, $descricao, $link)
{
    return"
    <div class='card'>
        <img src=$imagem>
        <h3>$titulo</h3>
        <p>$descricao</p>
        <a href='$link' target='_blank' class='reproduzir'>Reproduzir</a>   
    </div>

    ";
}

?>