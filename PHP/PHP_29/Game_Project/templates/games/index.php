<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game project</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <main>
        <!-- <h1><?=$games;?></h1> -->
        <a href="../home.php">Go to Home page</a><br><br>
        <section>
            <header>
                <h1>
                    Games
                </h1>
            </header>

            <div class="game-cards">

                <?php foreach($games as $game){ ?>
                    <article class="game-card">
                        <img src="<?= $game["image"]; ?>" alt="The picture representing game">
                        <header>
                            <h2>
                                <?= $game["name"]; ?>
                            </h2>
                        </header>

                        <div class="game-card-body">
                            <div class="game-card-details">
                                <div>
                                    <span>Release date:</span>
                                    <span>
                                        <?= $game["release_date"]; ?>
                                    </span>
                                </div>
                                <div>
                                    <span>Developer:</span>
                                    <span>
                                        <?= $game["developer"]; ?>
                                    </span>
                                </div>
                                <div>
                                    <span>Genre:</span>
                                    <span>
                                        <?= $game["genre"]; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="game-card-description">
                                <?= $game["description_short"]; ?>
                            </div>
                        </div>
                    </article>
                <?php } ?>

            </div>
        </section>
    </main>
</body>
</html>