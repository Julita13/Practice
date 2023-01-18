<?php
include_once(__DIR__ . "/app.php");
// dd($_SESSION);
if(!($_SESSION['authenticated'] ?? false)){
    header("Location: login_form.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <style>
        body{
            background-color: ##dfd3c3;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h1 {
            color: #c7b198;
            font-size: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        button{
            background-color: #596e79;
            padding: 0.7rem;
            border: 1px solid lightgrey; 
            border-radius: 1rem;
            margin-left: 23rem;
        }
        button:hover{
            background-color: royalblue;
            padding: 1rem;
            text-decoration: underline;
        }
        a{
            font-size: 1.2rem;
            color: lightgrey;
            text-decoration: none;
            
        }
    </style>
</head>
<body>
    <main>
        <section>
            <header>
                <h1>Sveiki atvykę į admino puslapį!</h1>
            </header>
        </section>
        <img src="https://i.pinimg.com/originals/b9/7d/c2/b97dc288d71e7938c1ce8b7faacdc9ac.gif" alt="welcome"><br><br><br>
        <button><a href="logout.php?logout=1">Atsijungti</a></button>
    </main>

</body>
</html>