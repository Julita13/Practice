<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Rentals</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?= url('assets/css/form.css'); ?>">
    <link rel="stylesheet" href="<?= url('assets/css/navigation.css'); ?>">
    <link rel="stylesheet" href="<?= url('assets/css/buttons.css'); ?>">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="<?= url('index.php'); ?>">Home</a>
                </li>
                <li>
                    <a href="<?= url('admin/index.php'); ?>">Admin</a>
                </li>
                <li class='dropdown'>
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                    <a href="<?= url('movies/index.php'); ?>">Movies</a>
                    <ul class='dropdown-list'>
                        <li>
                            <a href="<?= url('movies/index.php'); ?>">All movies</a>
                        </li>
                        <li>
                            <a href="<?= url('movies/create.php'); ?>">New movie</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?= ($content ?? ''); ?>
    </main>
</body>

</html>