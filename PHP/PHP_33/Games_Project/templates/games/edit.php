<section>
    <header>
        <h1>
            Keisti žaidimo informaciją:
        </h1>
    </header>
    <form method="POST" action="<?=url('games/update.php'); ?>">
        <input type="hidden" name="id" value="<?= ($game['id'] ?? "")?>">
        
        <label for="game-name">Name:</label>
        <input id="game-name" type="text" name="name" value="<?= ($game['name'] ?? "")?>">

        <label for="release-date">Release data:</label>
        <input id="release-date" type="date" name="release_date" value="<?= ($game['release_date'] ?? "")?>">

        <label for="image">Image:</label>
        <input id="image" type="text" name="image" value="<?= ($game['image'] ?? "")?>">

        <label for="genre">Genre:</label>
        <input id="genre" type="text" name="genre" value="<?= ($game['genre'] ?? "")?>">

        <label for="developer">Developer:</label>
        <input id="developer" type="text" maxlength="20" name="developer" value="<?= ($game['developer'] ?? "")?>">

        <label for="description-short">Description short:</label>
        <input id="description-short" type="text" maxlength="130" name="description_short" value="<?= ($game['description_short'] ?? "")?>">
        
        <label for="description">Description:</label>
        <textarea id="description" rows="5" type="text" name="description"><?= ($game['description'] ?? "")?></textarea>
        

        <input type="submit" value="Submit">
        
    </form>
</section>