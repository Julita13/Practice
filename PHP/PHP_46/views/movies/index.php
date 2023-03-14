<section>
    <header>
        <h1>
            Our movies
        </h1>
    </header>
   
    <div class="game-cards">
        <?php foreach ($movies as $movie) { ?>
            <article class="game-card game-card-hover">
                <header>
                    <img src="<?= ($movie->image ?? ''); ?>">
                    <h2>
                        <?= ($movie->title ?? ''); ?>
                    </h2>
                </header>
                <div class="game-card-body">
                    <div class="game-card-details">
                        <div>
                            <span>Release date:</span>
                            <span><?= ($movie->release_date ?? ''); ?></span>
                        </div>
                        <div>
                            <span>Developer:</span>
                            <span><?= ($movie->developer ?? ''); ?></span>
                        </div>
                        <div>
                            <span>Genre:</span>
                            <span><?= ($movie->genre ?? ''); ?></span>
                        </div>
                        <div>
                            <span>Rating:</span>
                            <span><?= ($movie->rating ?? ''); ?></span>
                        </div>
                    </div>
                    <div class="game-card-description">
                        <?= ($movie->description_short ?? ''); ?>
                    </div>
                </div>
                <div class="buttons">
                    <a href="<?= url("games/show.php?id={$movie->id}"); ?>" class="button">Rodyti</a>
                    <a href="<?= url("games/edit.php?id={$movie->id}"); ?>" class="button">Keisti</a>
                    <a href="<?= url("games/delete.php?id={$movie->id}"); ?>" class="button">Trinti</a>
                </div>
            </article>
        <?php } ?>

    </div>
</section>