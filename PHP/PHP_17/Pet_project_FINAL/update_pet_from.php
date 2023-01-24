<head>
    <meta charset="UTF-8">
    <title>PET</title>
    <style>
        body {
            position: relative;
        }
        .message {
            margin: 12px 15px;
            width: 200px;
            padding: 12px 15px;
            display: inline-block;
            text-align: center;
            line-height: 1em;
            color: whitesmoke;
            font-size: 18px;
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 1px;
            outline: 1px solid #b0b0b0;
        }
        .green {
            background-color: green;
        }
        .red {
            background-color: red;
        }
        .blue {
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php

    $get = $_GET;
    if (isset($get['status'])) {
        echo nl2br(message(status: $get['status'], body: $get['message'])); //nl2br() -new line to break
    }

    $json = isset($_GET['old_data']) ? $_GET['old_data'] : "";
    $oldData = json_decode($json, true);

    function message(string $title = '', string $body = '', int $status = 1 ): string {
        if($status == 1){
            $title = "Operacija sėkiminga";
            $color = "green";
        } elseif ($status == 0){
            $title = "Klaida";
            $color = "red";
        } else {
            $title = "Info";
            $color = "blue"; 
        }
        $decodedBody = json_decode($body, true); // jei body ne json formatas (masyvas), json_decode grazina NULL
        if($decodedBody){
            $body = implode("\n", $decodedBody); //paverciam i string
        }
        return
            "<div class='message {$color}'>
                    <h1>$title</h1>
                    <p>$body</p>
                </div>";
    }



    ?>

    <form action="update_contest.php" method="POST">

        <label for="name">Name: </label><br>
        <input type="text" name="name" value="<?= $oldData['name'] ?? $pet['name'] ?? '' ?>"><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" value="<?= $oldData['age'] ?? $pet['age'] ?? '' ?>"><br>

        <label for="breed">Breed:</label><br>
        <input type="text" name="breed" value="<?= $oldData['breed'] ?? $pet['breed'] ?? ''?>"><br>

        <label for="weight">Weight: </label><br>
        <input type="number" name="weight" value="<?= $oldData['weight'] ?? $pet['weight'] ?? '' ?>"><br>

        <label for="height">Height: </label><br>
        <input type="number" name="height" value="<?= $oldData['height'] ?? $pet['height'] ?? '' ?>"><br><br>

        <input type="hidden" name="id" value="<?= $pet['id'] ?? "" ?>">

        <input type="submit">

    </form>

</body>

</html>