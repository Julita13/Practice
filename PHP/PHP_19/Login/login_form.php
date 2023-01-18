<?php
include_once(__DIR__ . "/app.php");
if($_SESSION['authenticated'] ?? false){
    header("Location: admin_page.php");
}
// dump($_SESSION);
echo (messages());
// echo message();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: lightcyan;
            margin: 5rem;
        }
        .message {
            margin: 12px 15px;
            width: 400px;
            padding: 12px 15px;
            display: inline-block;
            text-align: center;
            line-height: 1em;
            color: whitesmoke;
            font-size: 18px;
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 20px;
            outline: 1px solid #b0b0b0;
            margin: 5rem;
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
        input:hover{
            background-color: lightgoldenrodyellow;
        }
        button {
            border-radius: 0.7rem;
            border: 1px solid lightskyblue;
            padding: 0.5rem;
        }
        button:hover{
            background-color: lightskyblue;
            border: 1px solid darkblue;
            text-decoration: underline;  
        }
    </style>
</head>
<body>
    <?php echo messages();?>
    <main>
        <section>
            <h1>Norėdami užsiregistruoti, įveskite savo duomenis: </h1>
            <form action="login.php" method="POST">
                <label for="email">Elektroninis paštas:</label>
                <input name="email" type="email">
                <label for="password">Slaptažodis:</label>
                <input name="password" type="password"><br><br><br>
                <button type="submit">Pateikti</button>
            </form>
        </section>
    </main>
</body>
</html>