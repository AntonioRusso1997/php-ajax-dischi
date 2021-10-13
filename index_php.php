<?php

// Includo il database contentente i dati dei dischi.
include __DIR__ . '/partials/database.php'

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
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify Logo">
    </header>
    <main>
        <div class="container">
            <?php
                foreach($db as $info){
                    echo "<div class='card'>";
                    echo "<img src='{$info['poster']}'>";
                    echo "<h2 class='album-title'>{$info['title']}</h2>";
                    echo "<h3 class='album-author'>{$info['author']}</h3>";
                    echo "<p class='album-year'>{$info['year']}</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>
</body>
</html>