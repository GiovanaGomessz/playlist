<?php
require_once '../components/card-artigos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigos</title>

    <link rel="stylesheet" href="../assets/css/artigos.css">
</head>

<body>
    <?php require_once '../components/nav.php'; ?>
    <main>
        <h1>Artigos</h1>
        <div class="container">
            <?php
            echo renderizarCard(
                "BLABLABLA",
                "ASDFNBVDJKSLDKJFHGJFKDLKFVJBHJVKCLXKCVSXDCFGHJMK",
                "https://i1.sndcdn.com/artworks-TIMKMozp6RBoEyHw-5zOpTQ-t500x500.jpg",

            );

            echo renderizarCard
            (
                "Luisa Sonza",
                "Bêbada favorita",
                "https://s2-g1.glbimg.com/PdfwBwbI2SO9O3f8ZyKjZKFPUp8=/0x0:2048x2048/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/q/q/A40hpHRceiB3Ewik8t2w/luisasonzaescandalointimocapa.jpg",

            );

            echo renderizarCard
            (
                "Baco Exu do Blues",
                "Te amo Desgraça",
                "https://akamai.sscdn.co/uploadfile/letras/albuns/8/5/0/a/595141505149846.jpg",


            );

            ?>
        </div>
    </main>
</body>

</html>