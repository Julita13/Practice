<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST example</title>
</head>
<body>
    <!-- <a href="?first_name=&last_name">GO</a> --> 
    <form action="save_data.php" method="POST">
        <label for="first_name">Vardas</label>
        <input type="text" name="first_name">
        <label for="last_name">Pavardė</label>
        <input type="text" name="last_name">
        <input type="submit">
    </form> 

</body>
</html>