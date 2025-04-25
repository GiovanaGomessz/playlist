<?php
require_once '../components/criar-input.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputs</title>

    <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>

<body>
    <?php require_once '../components/nav.php'; ?>

    <main>
        <section class="container">

            <h1 style="font-size: 40px;">CADASTRE UMA MÚSICA</h1>
            <form class="inputs" method="POST">
                    <?php
                    echo criar_input('text', 'Nome Completo');
                    echo criar_input('email', 'E-Mail');
                    echo criar_input('number', 'CPF');
                    echo criar_input('tel', 'Telefone');
                    echo salvar ('Salvar', 'submit')

                    ?>
            </form>

        </section>
    </main>
</body>

</html>