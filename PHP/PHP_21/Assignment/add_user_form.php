<?php 
include_once(__DIR__ . "/app.php");
include_once(__DIR__ . "/get_user.php");

$users = getUsers($jsonPath);
// var_dump ($users);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user užduotis</title>
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
            margin-top: 8rem;
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
            background-color: whitesmoke;
            border: 2px solid darkslateblue;
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
        article{
            display: flex;
            align-items: center;
            justify-content: left;
        } 
        h2 {
            font-size: 1.5rem;
            color: darkslateblue;
        }
        div{
            padding: 0.2rem;
        }

        span{
            color: darkcyan;
        }

    
    </style>
</head>


<body>
    <?php
    
        echo messages();
        echo "<h2>Already existing users:</h2>";
        foreach($users as $user){
            echo 
                "<article> 
                        <div><span>First name:</span> ".($user["first_name"]??'')."</div>
                        <div><span>Last name:</span> ".($user["last_name"]??'')."</div>
                        <div><span>Age:</span> ".($user['age']??'')."</div>
                        <div><span>Country:</span> ".($user['country']??'')."</div>
                </article>";
        }
    ?>
    
    <main>
        <section>

            <h1>In order to complete your registration, please fill your information below: </h1>
            <form action="add_user.php" method="POST">
                <label for="first_name">First name: </label><br>
                <input type="text" name="first_name" id="first_name"><br><br>

                <label for="last_name">Last name: </label><br>
                <input type="text" name="last_name" id="last_name"><br><br>

                <label for="age">Your age: </label><br>
                <input type="number" name="age" id="age"><br><br>

                <label for="country">Your country: </label><br>
                <input type="text" name="country" id="country"><br><br>

                <button type="submit">Submit</button>
            </form> 
        </section>
    </main>
</body>
</html>