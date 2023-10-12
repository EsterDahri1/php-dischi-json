<?php

/*
Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server. ✔️

Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP ✔️

Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”). ✔️
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON. ✔️

Bonus (da fare entro domani prima della correzione)
Al click su un disco, recuperare e mostrare i dati del disco selezionato. 
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!---CSS-->
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <div id="app">

        <header>
            <div class="container">
                <img width="50" class="py-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1024px-Spotify_logo_without_text.svg.png" alt="">
            </div>
        </header>

        <main>
            <div class="onclick d-flex flex-column align-items-center justify-content-center">

                <div>
                    <img width="250" :src="clickedDisc.poster" alt="poster of album" class="img-card-top">
                    <div class="text-white card-body p-0 d-flex flex-column align-items-center justify-content-center">
                        <h5 class="pt-3 pb-2 text-center card-title ">{{clickedDisc.title}}</h5>
                        <small class="">{{clickedDisc.author}}</small>
                        <h6 class="card-text p-2 ">{{clickedDisc.year}}</h6>
                        <h6 class="card-text pb-2 ">{{clickedDisc.genre}}</h6>
                    </div>
                </div>
            </div>
            <!-- /.onclick -->


            <div class="wrapper p-5">
                <div class="row g-5 flex-wrap">
                    <div class="col-4" v-for="(disc, index) in discs" :key="index">
                        <div class="card p-4 d-flex align-items-center justify-content-center" @click="discInfo(index)">
                            <img width="250" :src="disc.poster" alt="poster of album" class="img-card-top">
                            <div class="text-white card-body p-0 d-flex flex-column align-items-center justify-content-center">
                                <h5 class="pt-3 pb-2 text-center card-title ">{{disc.title}}</h5>
                                <small class="">{{disc.author}}</small>
                                <h6 class="card-text p-2 ">{{disc.year}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--wrapper-->
        </main>

    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./main.js"></script>
</body>

</html>