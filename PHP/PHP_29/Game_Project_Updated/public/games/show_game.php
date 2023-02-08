<?php
include_once __DIR__ . '/../../functions/game_functions.php';

$get = $_GET;
if(isset($get["id"])){
    $game = getGame($get["id"]);
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game page</title>
    <link rel="stylesheet" href="../assets/css/show-game.css">
</head>

<body>
    <main>
        <section>

            <h1>The game you've selected:</h1>

            <?php
           echo
            "<article>
                <div>
                    <img src='".($game['image'] ?? '')."'>
                </div>
                <div class='title'>".($game['name']??'')."</div>
                <div class='name'>Release date: ".($game['release_date']??'')."</div>
                <div class='name'>Developer: ".($game['developer']??'')."</div>
                <div class='name'>Genre: ".($game['genre']??'')."</div>
                <div class='name'>Description: ".($game['description']??'')."</div>
                <button class='my-button'><a href='https://google.com/search?q={$game['name']}'>More info about this game</a></button>
            </article>"
            ?>
            <button class="my-button"><a href='index.php'>Back to Game page</a></button>
        </section>
    </main>

</body>

</html>