<?php
function renderizarCard($imagem, $titulo, $descricao, $link )
{
    return "
    <div class='card'>
        <img src=$imagem>
        <div class='organizacao'>
            <h3>$titulo</h3>
            <p>$descricao</p>  
        </div>       
        <a class='saiba_mais' href='$link'>Saiba Mais</a> 
    </div>
    ";
}


?>