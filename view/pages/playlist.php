<?php
require_once '../components/card.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>

    <link rel="stylesheet" href="../assets/css/playlist.css">
</head>

<body>
    <?php require_once '../components/nav.php'; ?>

    <main>
        <h1>As mais tocadas</h1>

        <div class="container">
            <?php
            echo renderizarCard(
                "https://i1.sndcdn.com/artworks-TIMKMozp6RBoEyHw-5zOpTQ-t500x500.jpg",
                "Músicas de amor nunca mais",
                "BK",
                "https://open.spotify.com/intl-pt/track/6RgXU5moRK2kNovhLQV0Yq?si=0891b6faea5e4598",
            );

            echo renderizarCard
            (
                "https://s2-g1.glbimg.com/PdfwBwbI2SO9O3f8ZyKjZKFPUp8=/0x0:2048x2048/1008x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2023/q/q/A40hpHRceiB3Ewik8t2w/luisasonzaescandalointimocapa.jpg",
                "Bêbada favorita",
                "Luisa Sonza",
                "https://open.spotify.com/intl-pt/track/6cDtTxbehZ8JeEU9k4OnFT?si=cda2db89e0cc4c9f"
            );

            echo renderizarCard
            (
                "https://akamai.sscdn.co/uploadfile/letras/albuns/8/5/0/a/595141505149846.jpg",
                "Te amo Desgraça",
                "Baco Exu do Blues",
                "https://open.spotify.com/intl-pt/track/5B4611SCn4puXahrf7rqkj?si=d0d61d29c81b45e6"

            );

            echo renderizarCard
            (
                "https://cdn-images.dzcdn.net/images/cover/000d9948b14c8c4b20653d017dfa5079/200x200.jpg",
                "Ligação de alma",
                "Carol Biazin",
                "https://open.spotify.com/intl-pt/track/3RZ84nOV92gBOQc1iIdIez?si=fe4964b263dd4140"
            );

            echo renderizarCard
            (
                "https://i.scdn.co/image/ab67616d00001e02530daaf54e428e5d267e6cac",
                "Zeca Pagodin",
                "Os Garotin",
                "https://open.spotify.com/intl-pt/track/78WcEcpMdJW9Skr2zWZYum?si=45c3aeefc0e443cc"
            );

            echo renderizarCard
            (
                "https://i.scdn.co/image/ab67616d00001e0292228de7b0894da33059b33a",
                "Se você não me queria",
                "Uana",
                "https://open.spotify.com/intl-pt/album/5s8ET4e3AxTXSQDHtVRnHi?si=8aO4FJgGQGekUktNcOlDTQ"
            );

            echo renderizarCard
            (
                "https://akamai.sscdn.co/uploadfile/letras/albuns/2/c/b/a/2392441727880603.jpg",
                "Oq cê fez",
                "Derxan",
                "https://open.spotify.com/intl-pt/track/2739WNF0lAMaNQt78wIC7p?si=edaf1c78d1bf4b5d"
            );

            echo renderizarCard
            (
                "https://i1.sndcdn.com/artworks-000161677667-q9yk81-t500x500.jpg",
                "Jorge da Compadócia",
                "Racionais",
                "https://open.spotify.com/playlist/6bgnUB5pRt4UqAqPCTUZeR?si=0fk06lqtSLCZJgoq22MgDg"

            );

            echo renderizarCard
            (
                "https://i.scdn.co/image/ab67616d0000b2733f21ce6864af207df9ea058c",
                "Zóio de Lula",
                "Chalie Brown Jr.",
                "https://open.spotify.com/intl-pt/track/0AsfpL8bzbmEyJsfbPPYnj?si=c3f863715e0b4250"
            );
            ?>
        </div>
    </main>


</body>

</html>