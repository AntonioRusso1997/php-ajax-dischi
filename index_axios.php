<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <div id="root">
        
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify Logo">
            <select @change="filterGenre" v-model="selected" class="genre" name="genre" id="genre">
                    <option value="All">
                        Tutti i generi
                    </option>
                    <option value="Jazz">
                        Jazz
                    </option>
                    <option value="Metal">
                        Metal
                    </option>
                    <option value="Pop">
                        Pop
                    </option>
                    <option value="Rock">
                        Rock
                    </option>
            </select>
        </header>
        <main>
            <div class="container">
                <div v-for="song in filteredList" class="card">
                <img :src="song.poster" :alt="song.title">
                <h2 class="album-title">{{song.title}}</h2>
                <h3 class="album-author">{{song.author}}</h3>
                <p class="album-year">{{song.year}}</p>
                </div>
            </div>

        </main>
    </div>

    <script src="js/main.js"></script>
</body>
</html>