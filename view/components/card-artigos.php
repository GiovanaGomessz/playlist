<?php
function renderizarCard($titulo, $descricao, $imagem)
{
    return "
    <div class='card'>
        <img src=$imagem>
        <h3>$titulo</h3>
        <p>$descricao</p>  
        
    </div>
    ";
}


?>